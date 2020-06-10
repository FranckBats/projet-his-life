<?php

namespace App\Controller;

use App\Entity\Healthbook;
use App\Form\UploadType;
use App\Form\UploadEditType;
use App\Repository\HealthbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HealthbookController extends AbstractController
{
    /** 
     * @Route("/sante", name="healthbook_browse")
     */
    public function browse()
    {
        $families = $this->getUser()->getFamilies();
        $healthbooksArray = array();

        foreach ($families as $family) {
            $children = $family->getChildren();

            foreach ($children as $child) {
                $healthbooks = $child->getHealthbooks()->getValues();

                foreach($healthbooks as $healthbook) {
                    array_push($healthbooksArray, $healthbook);
                }
            }
        }
        return $this->render('healthbook/browse.html.twig', [
            'healthbooks' => $healthbooksArray,
        ]);
    }

    /** 
     * @Route("/sante/{id}", name="healthbook_read", requirements= {"id": "\d+"})
     */
    public function read(Healthbook $healthbook)
    {
        $this->denyAccessUnlessGranted('read', $healthbook);
        return $this->render('healthbook/read.html.twig', [
            'healthbook' => $healthbook,
        ]);
    }

    /**
     * @Route("/sante/ajouter", name="healthbook_add")
     */
    public function add(Request $request, EntityManagerInterface $em)
    {
        $healthbook = new Healthbook;

        $form = $this->createForm(UploadType::class, $healthbook);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $name = $form->getData()->getName();
            $file = $form['file']->getData();

            function generateRandomString($length = 10)
            {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $maxLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++)
                {
                $randomString .= $characters[rand(0, $maxLength - 1)];
                }
                return $randomString;
            }

            $fileName = generateRandomString();

            $healthbook->setName($name);

            $directory = 'assets/files/healthbooks/';

            $finalDirectory = $directory.$fileName.'.jpg';
            $healthbook->setFile($finalDirectory);

            $em->persist($healthbook);
            
            
            $file->move($directory, $fileName.'.jpg');

            $em->flush();

            return $this->redirectToRoute('healthbook_browse');
        }

        return $this->render('healthbook/add.html.twig', [
            'controller_name' => 'HealthbookController',
            'form' => $form->createView(),
        
        ]);
    }

    /** 
     * @Route("/sante/supprimer/{id}", name="healthbook_delete", requirements= {"id": "\d+"})
     */
    public function delete (Request $request, Healthbook $healthbook, EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('delete', $healthbook);
        if ($this->isCsrfTokenValid('delete'.$healthbook->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($healthbook);
            $em->flush();

            $this->addFlash('success', 'Carnet de Santé bien supprimé.');
        }
        
        return $this->redirectToRoute('healthbook_browse');
    }

    /**
     * @Route("/sante/modifier/{id}", name="healthbook_edit", requirements={"id": "\d+"})
     */
    public function edit(Healthbook $healthbook, Request $request, EntityManagerInterface $em)
    {
        $this->denyAccessUnlessGranted('edit', $healthbook);
        
        $form = $this->createForm(UploadEditType::class, $healthbook);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $newFile = $form['file']->getData();
            
            if ($newFile != null) {
                function generateRandomString($length = 10)
                {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $maxLength = strlen($characters);
                    $randomString = '';
                    for ($i = 0; $i < $length; $i++) {
                        $randomString .= $characters[rand(0, $maxLength - 1)];
                    }
                    return $randomString;
                }
                
                $fileName = generateRandomString();
                
                $directory = 'assets/files/healthbooks/';
                
                $finalDirectory = $directory.$fileName.'.jpg';
                $healthbook->setFile($finalDirectory);
                
                $newFile->move($this->getParameter('healthbooks_directory'), $fileName.'.jpg');

            }
            
            $em->persist($healthbook);
            $em->flush();
            return $this->redirectToRoute('healthbook_browse');
        }
            
            
        return $this->render('healthbook/edit.html.twig', [
            'form' => $form->createView(),
            'healthbook' => $healthbook,
        ]);


    }
}
