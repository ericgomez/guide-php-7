<?php

namespace Blog\Controllers;

use Blog\Interfaces\IArticle;
use Twig\Environment;

class HomeController {

    /**
     * @var IArticle
     */
    protected IArticle $articleRepository;

    /**
     * @var Environment
     */
    protected Environment $twig;

    /**
     * HomeController constructor.
     * @param IArticle $articleRepository
     * @param Environment $twig
     */
    public function __construct(IArticle $articleRepository, Environment $twig)
    {

    }

    public function index() {
        echo "Hola desde el HomeController";
    }

    public function hola(string $nombre) {
        echo "Hola {$nombre}";
    }
}
