<?php

namespace AppBundle\Post;

class Post
{
    private $id;

    private $rawArticle;
    private $rawTitle;
    private $rawSummary;

    private $formatedArticle;
    private $formatedTitle;
    private $formatedSummary;

    public function __construct(string $id, string $rawArticle, string $rawTitle, string $rawSummary)
    {
        $this->id = $id;
        $this->rawArticle = $rawArticle;
        $this->rawTitle = $rawTitle;
        $this->rawSummary = $rawSummary;
    }

    public function getFormatedArticle()
    {
        if (null === $this->formatedArticle) {
            $parsedown = new \Parsedown();
            $this->formatedArticle = $parsedown->text($this->rawArticle);
        }

        return $this->formatedArticle;
    }

    public function getFormatedTitle()
    {
        if (null === $this->formatedTitle) {
            $parsedown = new \Parsedown();
            $this->formatedTitle = $parsedown->text($this->rawTitle);
        }

        return $this->formatedTitle;
    }

    public function getFormatedSummary()
    {
        if (null === $this->formatedSummary) {
            $parsedown = new \Parsedown();
            $this->formatedSummary = $parsedown->text($this->rawSummary);
        }

        return $this->formatedSummary;
    }

    public function getId()
    {
        return $this->id;
    }
}
