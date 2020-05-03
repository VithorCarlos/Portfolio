<?php
namespace Source\App\Controllers;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Page {
    private $filepath;
    private $loader;
    private array $config = [
            'cache' => 'Public/Views/page-cache',
            'debug' => true,
            'optimizations '=> 1];
    private array $data = [];

    public function __construct($dir =  "/Public/Views/page/")
    {   
        $filepath = $_SERVER['DOCUMENT_ROOT'] . $dir; 
        $this->filepath = $filepath;
        $loader = new FilesystemLoader($this->filepath);
        $this->loader = $loader;
    }

    public function setData(array $data = [])
    {
        $this->data = $data;
    }

    public function setRender(string $template)
    {
        $twig = new Environment($this->loader, $this->config);
        $load = $twig->load($template);
        echo $load->render($this->data);
    }
}