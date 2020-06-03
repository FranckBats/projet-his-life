<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post_browse")
     */
    public function browse(Request $request, PostRepository $postRepository)
    {
        $families = $this->getUser()->getFamilies();
        $postsArray = array();

        foreach ($families as $family) {
            $posts = $family->getPosts()->getValues();
            foreach ($posts as $post){
                array_push ($postsArray, $post);
            }
        }
        // $posts = $postRepository->findBy(['createdAt' => 'DESC']);
        
        return $this->render('post/browse.html.twig', [
            'posts' => $postsArray,
        ]);
    }

    /**
     * @Route ("/post/{id}", name="post_read", requirements={"id": "\d+"})
     */
    public function read(Post $post, Request $request)
    {
        return $this->render('post/read.html.twig', [
            'controller_name' => 'PostController',
            'post' => $post
        ]);
    }

    /**
     * @Route("/post/add", name="post_add")
     */
    public function add(Request $request)
    {
        $post = new Post();
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $post->setPeople($this->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $this->addFlash('success', 'bravo Jannot, t\'as bien envoyé ton message');

            //return $this->redirectToRoute('post_read', ['id' => $post->getId()]);
            return $this->redirectToRoute('post_browse');
        }

        return $this->render('post/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/post/edit/{id}", name="post_edit", requirements={"id": "\d+"})
     */
    public function edit(Post $post, Request $request)
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('post_read', ['id' => $post->getId()]);
        }
        return $this->render('post/edit.html.twig', [
        'form' => $form->createView(), 
        ]);
    }

    /**
     * @Route ("/post/delete/{id}", name="post_delete", requirements={"id": "\d+"})
     */
    public function delete(Post $post, Request $request): Response
    {
        if ($this->isCsrfTokenValid('delete'.$post->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush();

            $this->addFlash('success', 'Post supprimé');
        }
        
        return $this->redirectToRoute('post_browse');
    }

}
