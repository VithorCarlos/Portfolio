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

/* errors.html */
class __TwigTemplate_304392bb8114d59d9c99d92ad6100a681a8c8704e2cb745c77b787a59b28e865 extends Template
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
    <title>Registro de erros</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "errors.html", 6)->display($context);
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
                    <a href=\"/site/list\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register-error\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE ERROS
                    </span>
                    <!---->
                    ";
        // line 31
        if (( !(null === ($context["client_error"] ?? null)) && (isset($context["client_error"]) || array_key_exists("client_error", $context)))) {
            // line 32
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, ($context["client_error"] ?? null), "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    ";
        }
        // line 39
        echo "
                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"client_name\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Client_name", [], "any", false, false, false, 41), "html", null, true);
        echo "\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"CLIENTE\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"company_name\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Company_name", [], "any", false, false, false, 49), "html", null, true);
        echo "\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"RAZÃO SOCIAL\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"far fa-building\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"fantasy_name\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Fantasy_name", [], "any", false, false, false, 57), "html", null, true);
        echo "\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"NOME FANTASIA\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-file-signature\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cnpj\" placeholder=\"CNPJ\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Cnpj", [], "any", false, false, false, 65), "html", null, true);
        echo "\" onkeyup=\"somenteNumeros(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-address-card\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"system_used\" name=\"system_used\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "System_used", [], "any", false, false, false, 73), "html", null, true);
        echo "\" placeholder=\"SISTEMA UTILIZADO\" onkeyup=\"this.value=this.value.toUpperCase();\" maxlength=\"20\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"type_error\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Type_error", [], "any", false, false, false, 81), "html", null, true);
        echo "\" placeholder=\"ERRO OCORRIDO\" maxlength=\"150\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <!--<div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"date\" id=\"dataClass\" name=\"data_ocorrencia\" placeholder=\"DATA DE OCORRÊNCIA\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>-->

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <textarea class=\"input100\" id=\"solucaoClass\" name=\"solution\" rows=\"5\" cols=\"30\" placeholder=\"SOLUÇÃO ENCONTRADA\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_client"] ?? null), "Solution", [], "any", false, false, false, 97), "html", null, true);
        echo "</textarea>
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    <p>";
        // line 105
        echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
        echo "</p>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Registrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    ";
        // line 117
        $this->loadTemplate("footer/footer.html", "errors.html", 117)->display($context);
        // line 118
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "errors.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 118,  190 => 117,  175 => 105,  164 => 97,  145 => 81,  134 => 73,  123 => 65,  112 => 57,  101 => 49,  90 => 41,  86 => 39,  77 => 33,  74 => 32,  72 => 31,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Registro de erros</title>
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
                    <a href=\"/site/list\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register-error\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE ERROS
                    </span>
                    <!---->
                    {% if client_error is not null and client_error is defined %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{client_error}}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    {% endif %}

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"client_name\" value=\"{{data_client.Client_name}}\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"CLIENTE\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"company_name\" value=\"{{data_client.Company_name}}\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"RAZÃO SOCIAL\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"far fa-building\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"fantasy_name\" value=\"{{data_client.Fantasy_name}}\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"NOME FANTASIA\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-file-signature\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cnpj\" placeholder=\"CNPJ\" value=\"{{data_client.Cnpj}}\" onkeyup=\"somenteNumeros(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-address-card\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"system_used\" name=\"system_used\" value=\"{{data_client.System_used}}\" placeholder=\"SISTEMA UTILIZADO\" onkeyup=\"this.value=this.value.toUpperCase();\" maxlength=\"20\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"type_error\" value=\"{{data_client.Type_error}}\" placeholder=\"ERRO OCORRIDO\" maxlength=\"150\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <!--<div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"date\" id=\"dataClass\" name=\"data_ocorrencia\" placeholder=\"DATA DE OCORRÊNCIA\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>-->

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <textarea class=\"input100\" id=\"solucaoClass\" name=\"solution\" rows=\"5\" cols=\"30\" placeholder=\"SOLUÇÃO ENCONTRADA\">{{data_client.Solution}}</textarea>
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    <p>{{error_captcha}}</p>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Registrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "errors.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\errors.html");
    }
}
