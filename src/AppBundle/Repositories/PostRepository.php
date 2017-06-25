<?php

namespace AppBundle\Repositories;

use Symfony\Component\Filesystem\Exception\FileNotFoundException;

class PostRepository
{
    private $postsRoot;

    public function __construct()
    {
        $this->postsRoot = __DIR__.'/../../../web/posts/';
    }

    public function getContentByPostName($postName)
    {
        $absPath = $this->postsRoot.$postName.'.md';
        if (!file_exists($absPath)) {
            throw new FileNotFoundException($absPath);
        }

        return file_get_contents($absPath);
    }
}
