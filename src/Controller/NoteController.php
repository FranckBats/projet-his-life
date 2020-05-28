<?php

namespace App\Controller;

use App\Entity\Note;
use App\Form\UploadType;
use App\Repository\NoteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class NoteController extends AbstractController
{
    /**
     * @Route("/note", name="note")
     */
    public function index()
    {
        return $this->render('note/index.html.twig', [
            'controller_name' => 'NoteController',
        ]);
    }

    /** 
     * @Route("/note/browse", name="note_browse")
     */
    public function browse (NoteRepository $noteRepository)
    {
        return $this->render('note/browse.html.twig', [
            'notes' => $noteRepository->findAll(),
        ]);
    }

    /** 
     * @Route("/note/read/{id}", name="note_read", requirements= {"id": "\d+"})
     */
    public function read (note $note)
    {
        return $this->render('note/read.html.twig', [
            'note' => $note,
        ]);
    }

    /**
     * @Route("/note/add", name="note_add")
     */
    public function add(Request $request, EntityManagerInterface $em)
    {
        $note = new Note;

        $form = $this->createForm(UploadType::class, $note);

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

            $note->setName($name);

            $directory = 'assets/files/notes/';

            $finalDirectory = $directory.$fileName.'.jpg';
            $note->setFile($finalDirectory);

            $em->persist($note);
            
            
            $file->move($directory, $fileName.'.jpg');

            $em->flush();

            return $this->redirectToRoute('note_browse');
        }

        return $this->render('note/add.html.twig', [
            'controller_name' => 'noteController',
            'form' => $form->createView(),
        ]);
    }

    /** 
     * @Route("/note/delete/{id}", name="note_delete", requirements= {"id": "\d+"})
     */
    public function delete (Note $note, EntityManagerInterface $em)
    {
        $em->remove($note);
        $em->flush();

        return $this->redirectToRoute('note_browse', [
        ]);
    }
}
