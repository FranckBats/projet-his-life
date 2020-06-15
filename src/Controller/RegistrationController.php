<?php

namespace App\Controller;

use App\Entity\People;
use App\Form\RegisterType;
use Symfony\Component\Mime\Email;
use App\Repository\FamilyRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;






class RegistrationController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, FamilyRepository $familyRepository, MailerInterface $mailer): Response
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
                  
                $token = $request->query->get('token');
                
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
                    $email = (new TemplatedEmail())
                    ->from('hislife.contact@gmail.com')
                    ->to($user->getEmail())
                    ->subject('Inscription sur le site His Life')
                    ->htmlTemplate('emails/mailInscription.html.twig')
                    ->context([
                        'firstname' => $user->getFirstname(),
                        'lastname' => $user->getLastname(),
                        ]);
                        
                        $mailer->send($email);

                        $this->addFlash('success', 'Vous êtes inscrit, vous pouvez vous connecter');

                        return $this->redirectToRoute('app_login');
                    }
                    
                    return $this->render('registration/register.html.twig', [
                        'register' => $form->createView(),
                        ]);
                    }
                }
