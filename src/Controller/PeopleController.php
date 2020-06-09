<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\PeopleType;
use App\Form\RegisterType;
use App\Repository\PeopleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PeopleController extends AbstractController
{
    
    
    /**
     * @Route("/people/profile", name="people_profile")
     */
    public function profile()
    {
        $people = $this->getUser(); 

        return $this->render('people/profile.html.twig', [
            'people' => $people,
        ]);
    }

    /**
     * @Route("/people/edit/", name="people_edit")
     */
    public function edit(Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        $people = $this->getUser();

        $form = $this->createForm(PeopleType::class, $people);

        $form->handleRequest($request);
        //dd ($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('password')->getData();
            //dd($password);
            if ($password !== null) {
                $people->setPassword($passwordEncoder->encodePassword($people, $password));
            

                $em = $this->getDoctrine()->getManager();

                $em->persist($people);

                $em->flush();

                return $this->redirectToRoute('people_profile');
            }
        }

        return $this->render('people/edit.html.twig', [
            'people' => $people,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/people/{id}", name="people_delete", requirements={"id": "\d+"}, methods={"DELETE"})
     */
    public function delete(Request $request, People $people, $id): Response
    {

        $currentUserId = $this->getUser()->getId();
        if ($currentUserId == $id)
        {
          $session = $this->get('session');
          $session = new Session();
          $session->invalidate();
       


        if ($this->isCsrfTokenValid('delete'.$people->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($people);
            $em->flush();

            $request->getSession()->clear();

            $this->addFlash('success', 'Profil supprimé.');
        }
        }

        
        
        return $this->redirectToRoute('home');
    }
}
