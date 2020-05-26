<?php

namespace App\Controller;

use App\Entity\People;
use App\Repository\PeopleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PeopleController extends AbstractController
{
    /**
     * @Route("/user/profile", name="user_profile")
     */
    public function profile()
    {
        $people = $this->getPeople(); 

        return $this->render('people/profile.html.twig', [
            'people' => $people,
        ]);
    }
}
