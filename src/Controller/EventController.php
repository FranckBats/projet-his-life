<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="event_index", methods={"GET"})
     */
    public function index(EventRepository $eventRepository): Response
    {
        $families = $this->getUser()->getFamilies();
        $eventsArray = array();

        foreach ($families as $family) {
            $events = $family->getEvents()->getValues();
            
            foreach ($events as $event){

                array_push ($eventsArray, $event);
            }
        }
        return $this->render('event/index.html.twig', [
            'events' => $eventsArray,

        ]);
    }

    /**
     * @Route("/new", name="event_add", methods={"GET","POST"})
     */
    public function add(Request $request): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        
        $form->handleRequest($request);        

        if ($form->isSubmitted() && $form->isValid()) {
            //dd($event);
            $event->addPerson($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('event_index');
        }

        return $this->render('event/add.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="event_show", methods={"GET"}, requirements={"id": "\d+"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="event_edit", methods={"GET","POST"}, requirements={"id": "\d+"})
     */
    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('event_index');
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="event_delete", methods={"DELETE"}, requirements={"id": "\d+"})
     */
    public function delete(Request $request, Event $event): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('event_index');
    }


    /**
     * @Route("/calendar", name="event_calendar", methods={"GET"})
     */
    public function calendar(): Response
    {
        return $this->render('event/calendar.html.twig');
    }
}
