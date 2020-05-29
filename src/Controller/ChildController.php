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
    public function profile(ChildRepository $childRepository, FamilyRepository $familyRepository)
    {

        // #############################################
        // Pour l'instant je l'écris en français car ça m'arrange fortement
        // Ce bloc de code fait :

        // Ici nous récupérons toutes les Entity Family de l'utilisateur connecté
        $familiesOfUser = $this->getUser()->getFamilies();

        // Ici création de 2 tableaux vides qui nous seront utiles après pour stocker des objets
        $childrenArray = array();

        // Pour toutes les Entity Family on demande les children associés
        // Vu qu'il en ressort une PersistentCollection, 
        // il faut boucler sur cette collection pour obtenir chaque objet Child
        // Ensuite on push dans notre tableau créé auparavant
        foreach($familiesOfUser as $family) {
            $childrenCollection = $family->getChildren();
                foreach ($childrenCollection as $children) {   
                    array_push($childrenArray, $children);
                }
            }
        
        // Ensuite il n'y a plus qu'à passer notre tableau
        // dans le render du controleur pour l'exploiter dans le twig
        // #############################################
        

        return $this->render('child/profile.html.twig', [
            'controller_name' => 'ChildController',
            'children' => $childrenArray
        ]);
    }

    /**
     * @Route("/child/create", name="child_create")
     */
    public function create(Request $request, EntityManagerInterface $em)
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
