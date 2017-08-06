<?php

namespace AppBundle\Post;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;
use Symfony\Component\Finder\Finder;

class PostRepository
{
    private $postsRoot;
    private $finder;

    public function __construct()
    {
        $this->postsRoot = __DIR__.'/../../../web/posts';
        $this->finder = new Finder();
    }

    private function throwIfInvalidPost($postPath)
    {
        $articlePath = $postPath.'/article.md';
        $titlePath = $postPath.'/title.md';
        $summaryPath = $postPath.'/summary.md';

        if (!file_exists($articlePath)) {
            throw new FileNotFoundException($articlePath);
        }

        if (!file_exists($titlePath)) {
            throw new FileNotFoundException($titlePath);
        }

        if (!file_exists($summaryPath)) {
            throw new FileNotFoundException($summaryPath);
        }
    }

    public function getOneById($postId)
    {
        $absPath = $this->postsRoot.'/'.$postId;
        $this->throwIfInvalidPost($absPath);

        $articlePath = $absPath.'/article.md';
        $titlePath = $absPath.'/title.md';
        $summaryPath = $absPath.'/summary.md';

        return new Post($postId, file_get_contents($articlePath), file_get_contents($titlePath), file_get_contents($summaryPath));
    }

    public function getAll()
    {
        $this
            ->finder
            ->directories()
            ->in($this->postsRoot)
            ->sortByModifiedTime()
        ;

        $posts = [];
        foreach ($this->finder->directories() as $directory) {
            try {
                $this->throwIfInvalidPost($directory);
                $posts[] = new Post(basename($directory), file_get_contents($directory.'/article.md'), file_get_contents($directory.'/title.md'), file_get_contents($directory.'/summary.md'));
            } catch (FileNotFoundException $e) {
                // do nothing but don't add post cause missing file
            }
        }

        return $posts;
    }
}
