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

/* home.html */
class __TwigTemplate_7a4b7550845ca88d0ae89d6f0561a19c7a5b43a1073096e426368ab0d2872907 extends Template
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
    <title>Página de login</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "home.html", 6)->display($context);
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/main.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">

                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"/\" method=\"post\">
                    <span class=\"login100-form-title\">
                        LOGIN DE FUNCIONÁRIOS
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Login", [], "any", false, false, false, 28), "html", null, true);
        echo "\" placeholder=\"Usuário ou Email\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-shield\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" name=\"passwd\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Passwd", [], "any", false, false, false, 36), "html", null, true);
        echo "\" placeholder=\"Senha\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-unlock-alt\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    ";
        // line 44
        echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
        echo "

                    <!---->
                    ";
        // line 47
        if ((isset($context["error_login"]) || array_key_exists("error_login", $context))) {
            // line 48
            echo "                    <!---->
                    ";
            // line 49
            echo twig_escape_filter($this->env, ($context["error_login"] ?? null), "html", null, true);
            echo "
                    <!---->
                    ";
        }
        // line 52
        echo "
                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Entrar
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
                        <a class=\"txt2\" href=\"/forgot\">
                            Esqueceu sua Senha ?
                        </a>
                    </div>

                    <div class=\"text-center p-t-136\">
                        <a class=\"txt2\" href=\"/site/register\">
                            Crie sua conta
                            <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 75
        $this->loadTemplate("footer/footer.html", "home.html", 75)->display($context);
        // line 76
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 76,  133 => 75,  108 => 52,  102 => 49,  99 => 48,  97 => 47,  91 => 44,  80 => 36,  69 => 28,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Página de login</title>
    {% include \"header/header.html\" %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/main.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">

                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form class=\"login100-form validate-form\" action=\"/\" method=\"post\">
                    <span class=\"login100-form-title\">
                        LOGIN DE FUNCIONÁRIOS
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"{{data_user.Login}}\" placeholder=\"Usuário ou Email\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-shield\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" name=\"passwd\" value=\"{{data_user.Passwd}}\" placeholder=\"Senha\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-unlock-alt\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    {{error_captcha}}

                    <!---->
                    {% if error_login is defined %}
                    <!---->
                    {{error_login}}
                    <!---->
                    {% endif %}

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Entrar
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
                        <a class=\"txt2\" href=\"/forgot\">
                            Esqueceu sua Senha ?
                        </a>
                    </div>

                    <div class=\"text-center p-t-136\">
                        <a class=\"txt2\" href=\"/site/register\">
                            Crie sua conta
                            <i class=\"fa fa-long-arrow-right m-l-5\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "home.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\home.html");
    }
}
