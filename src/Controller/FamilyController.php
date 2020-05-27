<?php

namespace App\Controller;

// use App\Entity\Family;
// use App\Form\FamilyType;
// use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
// use Doctrine\ORM\EntityManagerInterface;

class FamilyController extends AbstractController
{
    // /**
    //  * @Route("/family/create", name="family_create")
    //  */
    // public function create(Request $request, EntityManagerInterface $em)
    // {
    //     $family = new Family;

    //     $form = $this->createForm(FamilyType::class, $family);

    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {

    //         $family->setName($form->getData()->getName());
    //         $family->addPerson($this->getUser());
    //         $em->persist($family);
    //         $em->flush();
    //     }

    //     return $this->render('family/create.html.twig', [
    //         'controller_name' => 'FamilyController',
    //         'form' => $form->createView(),
    //     ]);
    // }
}
