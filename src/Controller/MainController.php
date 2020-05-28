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
        $lastGrade = $gradeRepository->getLastUploaded();
        $people = $this->getUser();

        // $families = $people->getFamilies($people);
        // $lastNote = $noteRepository->getLastUploaded();

        return $this->render('home/dashboard.html.twig', [
            'controller_name' => 'TestController',
            'lastGrade' => $lastGrade,
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
