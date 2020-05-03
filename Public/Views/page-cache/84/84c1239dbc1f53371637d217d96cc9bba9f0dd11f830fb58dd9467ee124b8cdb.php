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

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_cliente\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"CLIENTE\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cnpj\" placeholder=\"CNPJ\" onkeyup=\"somenteNumeros(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-address-card\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"tipo_erro\" placeholder=\"ERRO OCORRIDO\" maxlength=\"150\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"sistema\" onkeyup=\"this.value=this.value.toUpperCase();\" name=\"sistema\" placeholder=\"SISTEMA UTILIZADO\" maxlength=\"20\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"date\" id=\"dataClass\" name=\"data_ocorrencia\" placeholder=\"DATA DE OCORRÊNCIA\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <textarea class=\"input100\" id=\"solucaoClass\" name=\"solucao\" rows=\"5\" cols=\"30\" placeholder=\"SOLUÇÃO ENCONTRADA PARA O PROBLEMA\"></textarea>
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    <p>";
        // line 80
        echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
        echo "</p>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" name=\"registrar_erros\" role=\"button\" class=\"login100-form-btn\">Registrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    ";
        // line 92
        $this->loadTemplate("footer/footer.html", "errors.html", 92)->display($context);
        // line 93
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
        return array (  138 => 93,  136 => 92,  121 => 80,  46 => 7,  44 => 6,  37 => 1,);
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

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_cliente\" onkeyup=\"this.value=this.value.toUpperCase();\" placeholder=\"CLIENTE\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-users\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cnpj\" placeholder=\"CNPJ\" onkeyup=\"somenteNumeros(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-address-card\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"tipo_erro\" placeholder=\"ERRO OCORRIDO\" maxlength=\"150\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"sistema\" onkeyup=\"this.value=this.value.toUpperCase();\" name=\"sistema\" placeholder=\"SISTEMA UTILIZADO\" maxlength=\"20\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"date\" id=\"dataClass\" name=\"data_ocorrencia\" placeholder=\"DATA DE OCORRÊNCIA\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <textarea class=\"input100\" id=\"solucaoClass\" name=\"solucao\" rows=\"5\" cols=\"30\" placeholder=\"SOLUÇÃO ENCONTRADA PARA O PROBLEMA\"></textarea>
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div id=\"html_element\"></div>
                    <p>{{error_captcha}}</p>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" name=\"registrar_erros\" role=\"button\" class=\"login100-form-btn\">Registrar</button>

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
