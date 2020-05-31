<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\DeleteType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_browse")
     */
    public function Browse(ContactRepository $contactRepository)
    {
        return $this->render('contact/browse.html.twig', [
            'contacts' => $contactRepository->findAll(),
        ]);
    }

    /**
     * @Route("/contact/edit/{id}", name="contact_edit", requirements={"id": "\d+"})
     */
    public function Edit(Contact $contact, Request $request)
    {
        

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $contact->setUpdatedAt(new \DateTime());

            $em = $this->getDoctrine()->getManager();

            $em->persist($contact);

            $em->flush();

            return $this->redirectToRoute('contact_browse');

        }

        return $this->render('contact/edit.html.twig', [
            'form' => $form->createView(), 
        ]);
    }

    /**
     * @Route("/contact/add", name="contact_add")
     */
    public function add(Request $request)
    {
        $contact = New Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $em->persist($contact);

            $em->flush();

            return $this->redirectToRoute('contact_browse');


        }

        return $this->render('contact/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("contact/delete/{id}", name="contact_delete", requirements={"id": "\d+"}, methods={"DELETE"})
     */
    public function delete(EntityManagerInterface $em, Contact $contact, Request $request)
    {
        $formDelete = $this->createForm(DeleteType::class);

        $formDelete->handleRequest($request);

        if ($formDelete->isSubmitted() && $formDelete->isValid()) {
            $em->remove($contact);
            $em->flush();
        }

        return $this->redirectToRoute('contact_browse');
    }
}
