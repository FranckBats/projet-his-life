<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\RegisterType;
use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, FamilyRepository $familyRepository): Response
    {
        $families = $familyRepository->findAll();
        
        $familiesByToken = array();
        
        foreach ($families as $family) {
            $token = $family->getToken();
            
            if ($token != null) {
                $familiesByToken[$token] = $family;
            }
        }

        $user = new People();
        $form = $this->createForm(RegisterType::class, $user);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $token = $form->get('invitation_code')->getData();

            if (array_key_exists($token, $familiesByToken)) {
                $family = $familiesByToken[$token];
                $user->addFamily($family);
            }
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'register' => $form->createView(),
        ]);
    }
}
