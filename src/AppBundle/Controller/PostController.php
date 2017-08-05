<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Post\PostRepository;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function showAction(string $fileName)
    {
        $post = $this->postRepository->getOneByFileName($fileName);

        return $this->render('post/show.html.twig', [
            'body' => $post->toHtml(),
        ]);
    }

    public function listAction()
    {
        $posts = $this->postRepository->getAll();

        return $this->render('post/list.html.twig', [
            'posts' => $posts,
        ]);
    }
}
