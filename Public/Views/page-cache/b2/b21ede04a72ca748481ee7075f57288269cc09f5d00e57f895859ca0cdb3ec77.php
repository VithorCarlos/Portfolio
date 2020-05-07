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

/* /email/forgot-reset.html */
class __TwigTemplate_b8b3d14cd604db1c822b64cbb236073628f2396100d27799017ed04881002466 extends Template
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
    <title>Recuperação de Senha</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "/email/forgot-reset.html", 6)->display($context);
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

                <form class=\"login100-form validate-form\" action=\"/forgot/reset\" method=\"post\">
                    <span class=\"login100-form-title\">
                        RECUPERAÇÃO DE SENHA
                    </span>

                    <input type=\"hidden\" name=\"code\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
        echo "\">

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha\" name=\"passwd\" placeholder=\"SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                    </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha2\" name=\"passwd2\" placeholder=\"CONFIRMAR SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                    ";
        // line 48
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Recuperar Senha
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 59
        $this->loadTemplate("footer/footer.html", "/email/forgot-reset.html", 59)->display($context);
        // line 60
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/email/forgot-reset.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 60,  106 => 59,  92 => 48,  72 => 31,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Recuperação de Senha</title>
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

                <form class=\"login100-form validate-form\" action=\"/forgot/reset\" method=\"post\">
                    <span class=\"login100-form-title\">
                        RECUPERAÇÃO DE SENHA
                    </span>

                    <input type=\"hidden\" name=\"code\" value=\"{{code}}\">

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha\" name=\"passwd\" placeholder=\"SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                    </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha2\" name=\"passwd2\" placeholder=\"CONFIRMAR SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                        <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>
                    {{error}}

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Recuperar Senha
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "/email/forgot-reset.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\email\\forgot-reset.html");
    }
}
