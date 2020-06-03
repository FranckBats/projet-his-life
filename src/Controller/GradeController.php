<?php

namespace App\Controller;

use App\Entity\Grade;
use App\Form\UploadType;
use App\Form\UploadEditType;
use App\Repository\GradeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class GradeController extends AbstractController
{
    /**
     * @Route("/grade", name="grade")
     */
    public function index()
    {
        return $this->render('grade/index.html.twig', [
            'controller_name' => 'GradeController',
        ]);
    }

    /** 
     * @Route("/grade/browse", name="grade_browse")
     */
    public function browse(GradeRepository $gradeRepository)
    {
        $families = $this->getUser()->getFamilies();
        $gradesArray = array();

        foreach ($families as $family) {
            $children = $family->getChildren();

            foreach ($children as $child) {
                $grades = $child->getGrades()->getValues();

                foreach($grades as $grade) {
                    array_push($gradesArray, $grade);
                }
            }
        }
        return $this->render('grade/browse.html.twig', [
            'grades' => $gradesArray,
        ]);
    }

    /** 
     * @Route("/grade/read/{id}", name="grade_read", requirements={"id": "\d+"})
     */
    public function read(Grade $grade)
    {
        return $this->render('grade/read.html.twig', [
            'grade' => $grade,
        ]);
    }

    /**
     * @Route("/grade/edit/{id}", name="grade_edit", requirements={"id": "\d+"})
     */
    public function edit(Grade $grade, Request $request, EntityManagerInterface $em)
    {
        $form = $this->createForm(UploadEditType::class, $grade);

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
                
                $directory = 'assets/files/grades/';
                
                $finalDirectory = $directory.$fileName.'.jpg';
                $grade->setFile($finalDirectory);
                
                $newFile->move($this->getParameter('grades_directory'), $fileName.'.jpg');

            }
            
            $em->persist($grade);
            $em->flush();
            return $this->redirectToRoute('grade_browse');
        }
            
            
        return $this->render('grade/edit.html.twig', [
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/grade/add", name="grade_add")
     */
    public function add(Request $request, EntityManagerInterface $em)
    {
        $grade = new Grade;

        $form = $this->createForm(UploadType::class, $grade);

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

            $grade->setName($name);

            $directory = 'assets/files/grades/';

            $finalDirectory = $directory.$fileName.'.jpg';
            $grade->setFile($finalDirectory);

            $em->persist($grade);
            
            $file->move($this->getParameter('grades_directory'), $fileName.'.jpg');

            $em->flush();

            return $this->redirectToRoute('grade_browse');
        }

        return $this->render('grade/add.html.twig', [
            'controller_name' => 'GradeController',
            'form' => $form->createView(),
        ]);
    }

    /** 
     * @Route("/grade/delete/{id}", name="grade_delete", requirements= {"id": "\d+"})
     */
    public function delete (Request $request, Grade $grade): Response
    {
        if ($this->isCsrfTokenValid('delete'.$grade->getId(), $request->request->get('_token'))){

        $em = $this->getDoctrine()->getManager();
        $em->remove($grade);
        $em->flush();
        
        $this->addFlash('success', 'bulletin de note supprimé.');
        }
        return $this->redirectToRoute('grade_browse');
    }
}
