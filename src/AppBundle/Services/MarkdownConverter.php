<?php

namespace AppBundle\Services;


class MarkdownConverter
{
    private $parsedown;

    public function __construct()
    {
        $this->parsedown = new \Parsedown();
    }

    public function toHtml($markdownStr)
    {
        return $this->parsedown->text($markdownStr);
    }
}
