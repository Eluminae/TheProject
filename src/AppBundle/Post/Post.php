<?php

namespace AppBundle\Post;

class Post
{
    private $fileName;
    private $rawMarkdown;
    private $formatedHtml;

    public function __construct(string $fileName, string $rawMarkdown)
    {
        $this->fileName = $fileName;
        $this->rawMarkdown = $rawMarkdown;
    }

    public function toHtml()
    {
        if (null === $this->formatedHtml) {
            $parsedown = new \Parsedown();
            $this->formatedHtml = $parsedown->text($this->rawMarkdown);
        }

        return $this->formatedHtml;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function getFormatedTitle()
    {
        return $this->fileName;
    }

    public function getSummary()
    {
        return substr($this->toHtml(), 0, 150);
    }
}
