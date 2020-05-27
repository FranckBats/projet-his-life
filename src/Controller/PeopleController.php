<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\RegisterType;
use App\Repository\PeopleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PeopleController extends AbstractController
{
    
    /**
     * @Route("/people/register", name="people_register")
     */
    public function register(Request $request ) 
    {
        $people = new People();

        $form = $this->createForm(RegisterType::class, $people);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($people);
            $entityManager->flush();

            $this->addFlash('success', 'Vous êtes enregistré. Vous pouvez maintenant vous connecter.');

            //return $this->redirectToRoute('a_definir');
        }


        return $this->render('people/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/people/profile", name="people_profile")
     */
    public function profile()
    {
        $people = $this->getPeople(); 

        return $this->render('people/profile.html.twig', [
            'people' => $people,
        ]);
    }
}
