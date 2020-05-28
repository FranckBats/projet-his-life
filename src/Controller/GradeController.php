<?php

namespace App\Controller;

use App\Entity\Grade;
use App\Form\UploadType;
use App\Repository\GradeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
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
    public function browse (GradeRepository $gradeRepository)
    {
        return $this->render('grade/browse.html.twig', [
            'grades' => $gradeRepository->findAll(),
        ]);
    }

    /** 
     * @Route("/grade/read/{id}", name="grade_read", requirements= {"id": "\d+"})
     */
    public function read (Grade $grade)
    {
        return $this->render('grade/read.html.twig', [
            'grade' => $grade,
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
            
            
            $file->move($directory, $fileName.'.jpg');

            $em->flush();
        }

        return $this->render('grade/add.html.twig', [
            'controller_name' => 'GradeController',
            'form' => $form->createView(),
        ]);
    }

    /** 
     * @Route("/grade/delete/{id}", name="grade_delete", requirements= {"id": "\d+"})
     */
    public function delete (Grade $grade, EntityManagerInterface $em)
    {
        $em->remove($grade);
        $em->flush();

        return $this->redirectToRoute('grade_browse', [
        ]);
    }
}
