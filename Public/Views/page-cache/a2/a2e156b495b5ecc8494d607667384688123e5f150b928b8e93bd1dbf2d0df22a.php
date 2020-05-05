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
                        <input class=\"input100\" type=\"text\" name=\"usuario\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["users"] ?? null), "First_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" placeholder=\"Usuário ou Email\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-shield\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" name=\"senha\" placeholder=\"Senha\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-unlock-alt\"></i>
                        </span>
                    </div>
                    ";
        // line 41
        if ((isset($context["failed_login"]) || array_key_exists("failed_login", $context))) {
            // line 42
            echo "                    <div id=\"html_element\" type=\"\"></div>
                    <p>";
            // line 43
            echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
            echo "</p>
                    ";
        }
        // line 45
        echo "
                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Entrar
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
                        <span class=\"txt1\">
                            Esqueceu sua
                        </span>
                        <a class=\"txt2\" href=\"#\">
                            Senha ?
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
        // line 71
        $this->loadTemplate("footer/footer.html", "home.html", 71)->display($context);
        // line 72
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
        return array (  125 => 72,  123 => 71,  95 => 45,  90 => 43,  87 => 42,  85 => 41,  68 => 27,  46 => 7,  44 => 6,  37 => 1,);
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
                        <input class=\"input100\" type=\"text\" name=\"usuario\" value=\"{{users.First_name}}\" placeholder=\"Usuário ou Email\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-shield\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" name=\"senha\" placeholder=\"Senha\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-unlock-alt\"></i>
                        </span>
                    </div>
                    {% if failed_login is defined %}
                    <div id=\"html_element\" type=\"\"></div>
                    <p>{{error_captcha}}</p>
                    {% endif %}

                    <div class=\"container-login100-form-btn\">
                        <button class=\"login100-form-btn\">
                            Entrar
                        </button>
                    </div>

                    <div class=\"text-center p-t-12\">
                        <span class=\"txt1\">
                            Esqueceu sua
                        </span>
                        <a class=\"txt2\" href=\"#\">
                            Senha ?
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
