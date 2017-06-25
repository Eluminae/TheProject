<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
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

        // replace this example code with whatever you need
        return $this->render('post/show.html.twig', [
            'body' => $body
        ]);
    }
}
