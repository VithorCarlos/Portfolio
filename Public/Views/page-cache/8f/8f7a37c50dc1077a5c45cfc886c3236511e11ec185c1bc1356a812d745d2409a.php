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

/* email/forgot-body.html */
class __TwigTemplate_3425ef07f58c91583d952e4cab3dcea6b5df4e09bee87638572ff1ad00a7b273 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<h2>Recuperação de senha.</h2> <br>
<h3 style=\"color: blue;\">Olá: ";
        // line 2
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h3>
<h4>Por favor, clique no link abaixo para alterar a sua senha: </h4><br>
<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" style=\"color: green;\">";
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "email/forgot-body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>Recuperação de senha.</h2> <br>
<h3 style=\"color: blue;\">Olá: {{name}}</h3>
<h4>Por favor, clique no link abaixo para alterar a sua senha: </h4><br>
<a href=\"{{link}}\" style=\"color: green;\">{{link}}</a>", "email/forgot-body.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\email\\forgot-body.html");
    }
}
