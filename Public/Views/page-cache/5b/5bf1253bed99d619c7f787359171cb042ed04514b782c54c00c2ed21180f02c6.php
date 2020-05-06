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

/* /email/forgot.html */
class __TwigTemplate_0c77badc83843dd05845f588161a74206ed2b773b037b202cc7e55ea5b4c9b6f extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Recuperação de senha</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "/email/forgot.html", 6)->display($context);
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/registererros.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"Iback\">
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" width=\"340px\" height=\"250px\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"/forgot\" method=\"post\">
                    <span class=\"login100-form-title\">
                        RECUPERAÇÃO DE SENHA
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"Digite o seu email para a recuperação de senha\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"70\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-envelope\"></i>
                        </span>
                    </div>

                    ";
        // line 39
        echo twig_escape_filter($this->env, ($context["error_forgot"] ?? null), "html", null, true);
        echo "

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 50
        $this->loadTemplate("footer/footer.html", "/email/forgot.html", 50)->display($context);
        // line 51
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/email/forgot.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 51,  94 => 50,  80 => 39,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Recuperação de senha</title>
    {% include \"header/header.html\" %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/registererros.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"Iback\">
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" width=\"340px\" height=\"250px\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"/forgot\" method=\"post\">
                    <span class=\"login100-form-title\">
                        RECUPERAÇÃO DE SENHA
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"Digite o seu email para a recuperação de senha\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"70\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-envelope\"></i>
                        </span>
                    </div>

                    {{error_forgot}}

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "/email/forgot.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\email\\forgot.html");
    }
}
