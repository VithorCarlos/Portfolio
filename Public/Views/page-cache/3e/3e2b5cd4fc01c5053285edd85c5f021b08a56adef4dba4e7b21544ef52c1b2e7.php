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

/* register.html */
class __TwigTemplate_7c06ba125261d8a65a303c9907316a0c42931f0956af481f5020575d48c3d0d8 extends Template
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
    <title>Cadastro</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "register.html", 6)->display($context);
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/register.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"Iback\">
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register\" method=\"post\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE FUNCIONÁRIOS
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_funcionario\" placeholder=\"NOME COMPLETO\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"usuario\" placeholder=\"USUÁRIO\" maxlength=\"12\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"EMAIL\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha\" name=\"senha\" placeholder=\"SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha2\" name=\"senha2\" placeholder=\"CONFIRMAR SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>


                    <div id=\"html_element\"></div>
                    <p>";
        // line 73
        echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
        echo "</p>
                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" name=\"registrar_usuarios\" role=\"button\" class=\"login100-form-btn\">Cadastrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 83
        $this->loadTemplate("footer/footer.html", "register.html", 83)->display($context);
        // line 84
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 84,  127 => 83,  114 => 73,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Cadastro</title>
    {% include \"header/header.html\" %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/register.css\">
    <!--===============================================================================================-->
</head>

<body>

    <div class=\"limiter\">
        <div class=\"container-login100\">
            <div class=\"wrap-login100\">
                <div class=\"Iback\">
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register\" method=\"post\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE FUNCIONÁRIOS
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_funcionario\" placeholder=\"NOME COMPLETO\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"usuario\" placeholder=\"USUÁRIO\" maxlength=\"12\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"EMAIL\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha\" name=\"senha\" placeholder=\"SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"password\" id=\"senha2\" name=\"senha2\" placeholder=\"CONFIRMAR SENHA\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div>


                    <div id=\"html_element\"></div>
                    <p>{{error_captcha}}</p>
                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" name=\"registrar_usuarios\" role=\"button\" class=\"login100-form-btn\">Cadastrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}

</body>

</html>", "register.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\register.html");
    }
}
