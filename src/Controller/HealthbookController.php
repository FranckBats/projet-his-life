<?php

namespace App\Controller;

use App\Entity\Healthbook;
use App\Form\UploadType;
use App\Repository\HealthbookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HealthbookController extends AbstractController
{
    // /**
    //  * @Route("/healthbook", name="healthbook")
    //  */
    // public function index()
    // {
    //     return $this->render('healthbook/index.html.twig', [
    //         'controller_name' => 'HealthBookController',
    //     ]);
    // }

    /** 
     * @Route("/healthbook/browse", name="healthbook_browse")
     */
    public function browse (HealthbookRepository $healthbookRepository)
    {
        return $this->render('healthbook/browse.html.twig', [
            'healthbooks' => $healthbookRepository->findAll(),
        ]);
    }

    /** 
     * @Route("/healthbook/read/{id}", name="healthbook_read", requirements= {"id": "\d+"})
     */
    public function read (Healthbook $healthbook)
    {
        return $this->render('healthbook/read.html.twig', [
            'healthbook' => $healthbook,
        ]);
    }

    /**
     * @Route("/healthbook/add", name="healthbook_add")
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
     * @Route("/healthbook/delete/{id}", name="healthbook_delete", requirements= {"id": "\d+"})
     */
    public function delete (Healthbook $healthbook, EntityManagerInterface $em)
    {
        $em->remove($healthbook);
        $em->flush();

        return $this->redirectToRoute('healthbook_browse', [
        ]);
    }
}
