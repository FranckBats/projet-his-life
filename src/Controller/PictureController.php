<?php

namespace App\Controller;

use App\Entity\Picture;
use App\Form\PictureType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PictureController extends AbstractController
{
    /**
     * @Route("/picture", name="picture")
     */
    public function index()
    {
        return $this->render('picture/index.html.twig', [
            'controller_name' => 'PictureController',
        ]);
    }

    /**
     * @Route("/picture/add", name="picture_add")
     */
    public function add(Request $request, EntityManagerInterface $em)
    {
        $picture = new Picture;

        $form = $this->createForm(PictureType::class, $picture);

        $form->handleRequest($request);

        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $title = $form->getData()->getTitle();
            $description = $form->getData()->getDescription();
            
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

            $picture->setTitle($title);

            if ($description != null) {
                $picture->setDescription($description);
            }

            if ($description === null) {
                $picture->setDescription('Pas de description');
            }

            $picture->setPeople($this->getUser());


            $directory = 'assets/files/pictures/';

            $finalDirectory = $directory.$fileName.'.jpg';
            $picture->setFile($finalDirectory);

            $em->persist($picture);
            
            $file->move($this->getParameter('pictures_directory'), $fileName.'.jpg');

            $em->flush();

            return $this->redirectToRoute('picture');
        }


        return $this->render('picture/add.html.twig', [
            'controller_name' => 'PictureController',
            'form' => $form->createView(),
        ]);
    }
}
