<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\DeleteType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact_browse")
     */
    public function browse(ContactRepository $contactRepository)
    {
        $families = $this->getUser()->getFamilies();
      
        $contactsArray = array();

        foreach ($families as $family) {
            $contacts = $family->getPhonebook()->getValues();
            foreach ($contacts as $contact){
                array_push ($contactsArray, $contact);
            }
        }

        return $this->render('contact/browse.html.twig', [
            'contacts' => $contactsArray,
        ]);
    }

    /**
     * @Route("/contact/edit/{id}", name="contact_edit", requirements={"id": "\d+"})
     */
    public function edit(Contact $contact, Request $request)
    {
        $this->denyAccessUnlessGranted('edit', $contact);

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
            'contact' => $contact,
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
     * @Route("/contact/delete/{id}", name="contact_delete", requirements={"id": "\d+"})
     */
    public function delete( Request $request, Contact $contact, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            
            $em = $this->getDoctrine()->getManager();
            $em->remove($contact);
            $em->flush();

            $this->addFlash('success', 'contact supprimé.');
        }

        return $this->redirectToRoute('contact_browse');
    }
}
