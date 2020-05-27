<?php

namespace App\Controller;


// use App\Repository\GradeRepository;
// use App\Repository\NoteRepository;;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    // /**
    //  * @Route("/", name="home")
    //  */
    // public function index()
    // {
    //     return $this->render('home/index.html.twig', [
    //         'controller_name' => 'TestController',
    //     ]);
    // }

    // /**
    //  * @Route("/dashboard", name="dashboard")
    //  */
    // public function dashboard(GradeRepository $gradeRepository, NoteRepository $noteRepository)
    // {
    //     $lastGrade = $gradeRepository->getLastUploaded();
    //     $lastNote = $noteRepository->getLastUploaded();

    //     return $this->render('home/dashboard.html.twig', [
    //         'controller_name' => 'TestController',
    //         'lastGrade' => $lastGrade,
    //         'lastNote' => $lastNote
    //     ]);
    // }

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
