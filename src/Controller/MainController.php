<?php

namespace App\Controller;


use App\Repository\GradeRepository;
use App\Repository\NoteRepository;;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
* @Route("/ajax", name="ajax_action")
*/
public function ajaxAction(Request $request)
{

    if ($this->getUser() !== false) {
        $familiesOfUser = $this->getUser()->getFamilies();
        
        $childrenArray = array();
        
        foreach ($familiesOfUser as $family) {
            if(!empty($family->getChildren()->getValues())) {
                $childObject = $family->getChildren()->getValues();
                
                foreach ($childObject as $child) {
                    // ### GRADES && NOTE ###
                    $lastGrade = $child->getGrades()->last();
                    $lastGradeArray = [];
                    $lastNote = $child->getNotes()->last();
                    $lastNoteArray = [];
                    $lastSchoolEventArray = [];
                    
                    if ($lastGrade != false) {
                        $lastGradeArray = [
                            'id' => $lastGrade->getId(),
                            'name' => $lastGrade->getName(),
                            'file' => $lastGrade->getFile(),
                            'created_at' => $lastGrade->getCreatedAt(),
                            'type' => 'grade'
                        ];
                    }
                    
                    if ($lastNote != false) {
                        $lastNoteArray = [
                            'id' => $lastNote->getId(),
                            'name' => $lastNote->getName(),
                            'file' => $lastNote->getFile(),
                            'created_at' => $lastNote->getCreatedAt(),
                            'type' => 'note'
                        ];
                    }
                    
                    if ($lastGradeArray && $lastNoteArray != false) {
                        if ($lastGradeArray['created_at'] > $lastNoteArray['created_at']) {
                            $lastSchoolEventArray = $lastGradeArray;
                        }
                        else {
                            $lastSchoolEventArray = $lastNoteArray;
                        }
                    }
                    else if ($lastGradeArray != false) {
                        $lastSchoolEventArray = $lastGradeArray;
                    }
                    else {
                        $lastSchoolEventArray = $lastNoteArray;
                    }
                    
                    
                    // ### HEALTHBOOK ###
                    $lastHealthbook = $child->getHealthbooks()->last();
                    $lastHealthbookArray = [];
                    
                    if ($lastHealthbook != false) {
                        $lastHealthbookArray = [
                            'id' => $lastHealthbook->getId(),
                            'name' => $lastHealthbook->getName(),
                            'file' => $lastHealthbook->getFile(),
                            'created_at' => $lastHealthbook->getCreatedAt()
                        ];
                    }
                    
                    $childrenArray [$child->getId()] = [
                        'firstname' => $child->getFirstname(),
                        'lastname' => $child->getLastname(),
                        'gender' => $child->getGender(),
                        'birthdate' => $child->getBirthdate(),
                        'lastSchoolEventArray' => $lastSchoolEventArray,
                        'lastHealthbook' => $lastHealthbookArray
                    ];
                }                
            }
        }
        ;
        /* on récupère la valeur envoyée */
        $idSelect = $request->request->get('idSelect');
        
        
        if ($idSelect == 0) {
            $selectChild = array_shift($childrenArray);
        }
        
        else {
            $selectChild = $childrenArray[$idSelect];
        }
        
        $response = new Response(json_encode($selectChild));
        
        /* On renvoie une réponse encodée en JSON */
        // $response = new Response(json_encode(array($childrenArray)));
        // dd($response);
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
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
