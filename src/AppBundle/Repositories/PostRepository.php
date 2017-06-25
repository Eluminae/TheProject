<?php

namespace AppBundle\Repositories;

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

    public function getContentByPostName($postName)
    {
        $absPath = $this->postsRoot.'/'.$postName.'.md';
        if (!file_exists($absPath)) {
            throw new FileNotFoundException($absPath);
        }

        return file_get_contents($absPath);
    }

    public function getNames()
    {
        $this
            ->finder
            ->files()
            ->in($this->postsRoot)
            ->name('*.md')
            ->sortByModifiedTime()
        ;

        $postNames = [];
        foreach ($this->finder->files() as $file) {
            $postName[] = basename($file, '.md');
        }
        rsort($postName);

        return $postName;
    }
}
