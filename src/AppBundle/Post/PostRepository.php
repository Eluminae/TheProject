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

    public function getOneById($postId)
    {
        $absPath = $this->postsRoot.'/'.$postId;
        if (!file_exists($absPath.'/article.md')) {
            throw new FileNotFoundException($absPath);
        }

        $articlePath = $absPath.'/article.md';
        $titlePath = $absPath.'/title.md';
        $summaryPath = $absPath.'/summary.md';

        return new Post($postId, file_get_contents($articlePath), file_get_contents($titlePath), file_get_contents($summaryPath));
    }

    public function getAll()
    {
        $this
            ->finder
            ->files()
            ->in($this->postsRoot)
            ->name('article.md')
            ->sortByModifiedTime()
        ;

        $posts = [];
        foreach ($this->finder->files() as $file) {
            $posts[] = new Post(basename(dirname($file)), file_get_contents(dirname($file).'/article.md'), file_get_contents(dirname($file).'/title.md'), file_get_contents(dirname($file).'/summary.md'));
        }

        return $posts;
    }
}
