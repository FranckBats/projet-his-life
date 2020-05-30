<?php

namespace App\Controller;


use App\Repository\GradeRepository;
use App\Repository\NoteRepository;;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(GradeRepository $gradeRepository)
    {
        $familiesOfUser = $this->getUser()->getFamilies();

        // $childrenArray = array();


        // foreach($familiesOfUser as $family) {
        //     $childrenCollection = $family->getChildren();

        //         foreach ($childrenCollection as $children) {   
        //             array_push($childrenArray, $children);
        //         }
        //     }

        // $lastGrade = $gradeRepository->getLastUploaded();
        // $people = $this->getUser();

        return $this->render('home/dashboard.html.twig', [
            'controller_name' => 'TestController',
            'families' => $familiesOfUser
            // 'lastGrade' => $lastGrade,
            // 'families' => $families,
            // 'lastNote' => $lastNote
        ]);
    }

    /**
     * @Route("/dashboard/school", name="school")
     */
    public function schoolHome()
    {
        return $this->render('home/school.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }

    // /**
    //  * @Route("/test", name="test")
    //  */
    // public function test()
    // {
    //     return $this->render('test.html.twig', [
    //         'controller_name' => 'TestController',
    //     ]);
    // }
}
