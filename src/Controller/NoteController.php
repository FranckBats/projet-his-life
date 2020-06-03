<?php

namespace App\Controller;

use App\Entity\Note;
use App\Form\UploadEditType;
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
     * @Route("/note", name="note_browse")
     */
    public function browse (NoteRepository $noteRepository)
    {
        $families = $this->getUser()->getFamilies();
        $notesArray = array();

        foreach ($families as $family) {
            $children = $family->getChildren();

            foreach ($children as $child) {
                $notes = $child->getNotes()->getValues();

                foreach($notes as $notes) {
                    array_push($notesArray, $notes);
                }
            }
        }

        return $this->render('note/browse.html.twig', [
            'notes' => $notesArray,
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
     * @Route("/note/edit/{id}", name="note_edit", requirements= {"id": "\d+"})
     */
    public function edit(Note $note, Request $request){

        $form =$this->createForm(UploadEditType::class, $note);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

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
                
                $directory = 'assets/files/notes/';
                
                $finalDirectory = $directory.$fileName.'.jpg';
                $note->setFile($finalDirectory);
                
                $newFile->move($this->getParameter('notes_directory'), $fileName.'.jpg');

            }

            $em = $this->getDoctrine()->getManager();

            $em->persist($note);

            $em->flush();

            return $this->redirectToRoute('note_browse');
        }

        return $this->render('note/edit.html.twig', [
            'form' => $form->createView(),
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
    public function delete (Request $request, Note $note)
    {
        if ($this->isCsrfTokenValid('delete'.$note->getId(), $request->request->get('_token'))) {
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($note);
            $em->flush();

            $this->addFlash('success', 'Message supprimé.');
        }
        return $this->redirectToRoute('note_browse');
    }
}
