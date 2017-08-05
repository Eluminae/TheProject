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

    public function getOneByFileName($fileName)
    {
        $absPath = $this->postsRoot.'/'.$fileName.'.md';
        if (!file_exists($absPath)) {
            throw new FileNotFoundException($absPath);
        }

        return new Post($fileName, file_get_contents($absPath));
    }

    public function getAll()
    {
        $this
            ->finder
            ->files()
            ->in($this->postsRoot)
            ->name('*.md')
            ->sortByModifiedTime()
        ;

        $posts = [];
        foreach ($this->finder->files() as $file) {
            $posts[] = new Post(basename($file, '.md'), file_get_contents($file));
        }

        return $posts;
    }
}
