<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $Parsedown = new \Parsedown();

        $body = $Parsedown->text('Hello _Parsedown_!');

        return $this->render('default/index.html.twig', [
            'body' => $body,
        ]);
    }
}
