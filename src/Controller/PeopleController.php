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
