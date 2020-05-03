<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* style/style-register.html */
class __TwigTemplate_e606b697c40017441c1bd12a7a765c61135bbc7b925f2299f996ff714e7a2813 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styleRegister' => [$this, 'block_styleRegister'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('styleRegister', $context, $blocks);
    }

    public function block_styleRegister($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/util.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/register.css\">
<!--===============================================================================================-->
</head>

<body>
    ";
    }

    public function getTemplateName()
    {
        return "style/style-register.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block styleRegister %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/util.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/register.css\">
<!--===============================================================================================-->
</head>

<body>
    {% endblock %}", "style/style-register.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\style\\style-register.html");
    }
}
