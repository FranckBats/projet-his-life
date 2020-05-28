<?php

namespace App\Controller;

use App\Entity\Child;
use App\Form\ChildType;
use App\Repository\ChildRepository;
use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ChildController extends AbstractController
{

    /**
     * @Route("/child/profile", name="child_profile")
     */
    public function profile()
    {
        return $this->render('child/profile.html.twig', [
            'controller_name' => 'ChildController',
        ]);
    }

    /**
     * @Route("/child/create", name="child_create")
     */
    public function create(Request $request, EntityManagerInterface $em, FamilyRepository $familyRepository)
    {
        $child = new Child;

        $form = $this->createForm(ChildType::class, $child);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {

            $child->setLastname($form->getData()->getLastname());
            $child->setFirstname($form->getData()->getFirstname());

            $family = $form->getData()->getFamilies()[0];
            $family->addChild($child);
           
            $em->persist($child);
            $em->flush();

            return $this->redirectToRoute('child_profile');
        }

        return $this->render('child/create.html.twig', [
            'controller_name' => 'ChildController',
            'form' => $form->createView(),
        ]);
    }
}
