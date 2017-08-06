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

    public function showAction(string $postId)
    {
        $post = $this->postRepository->getOneById($postId);

        return $this->render('post/show.html.twig', [
            'title' => $post->getFormatedTitle(),
            'summary' => $post->getFormatedSummary(),
            'body' => $post->getFormatedArticle(),
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
