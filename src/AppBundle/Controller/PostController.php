<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Services\MarkdownConverter;
use AppBundle\Repositories\PostRepository;

class PostController extends Controller
{
    private $markdownConverter;
    private $postRepository;

    public function __construct(MarkdownConverter $markdownConverter, PostRepository $postRepository)
    {
        $this->markdownConverter = $markdownConverter;
        $this->postRepository = $postRepository;
    }

    public function showAction(string $postName)
    {
        $fileContent = $this->postRepository->getContentByPostName($postName);

        $body = $this->markdownConverter->toHtml($fileContent);

        return $this->render('post/show.html.twig', [
            'body' => $body,
        ]);
    }

    public function listAction()
    {
        $postNames = $this->postRepository->getNames();

        return $this->render('post/list.html.twig', [
            'postNames' => $postNames,
        ]);
    }
}
