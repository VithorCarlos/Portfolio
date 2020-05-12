<?php
namespace Source\App\Controllers;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Page {
    private $filepath;
    private $loader;
    private array $data = [];
    private array $config = [
        'cache' => 'Public/Views/page-cache',
        'debug' => true,
        'optimizations '=> 1];

    /** Initial config to execute template */
    public function __construct($dir =  "/Public/Views/page/")
    {   
        $filepath = $_SERVER['DOCUMENT_ROOT'] . $dir; 
        $this->filepath = $filepath;
        $loader = new FilesystemLoader($this->filepath);
        $this->loader = $loader;
    }

    /** Set all the data that will be displayed in the template later */
    public function setData(array $data = []): array
    {
        return $this->data = $data;
    }

    /** Render template HTML */
    public function setRender(string $template): Page
    {
        $twig = new Environment($this->loader, $this->config);
        $load = $twig->load($template);
        echo $load->render($this->data);
        return $this;
    }

    /** For renderize templates to send emails with PHPMailer*/
    public function mailerTemplate(string $template, array $data = []): string
    {
        $twig = new Environment($this->loader, $this->config);
        $load = $twig->render($template, $data);
        return $load;
    }
}