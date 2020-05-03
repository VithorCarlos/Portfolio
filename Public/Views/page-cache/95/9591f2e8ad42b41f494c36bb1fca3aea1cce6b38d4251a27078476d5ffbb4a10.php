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

/* profile.html */
class __TwigTemplate_8580503251831aa94d2d35e9e1ea390bc8dffcd80ab9d60f5785982b4a01a9de extends Template
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
    <title>Meu perfil</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "profile.html", 6)->display($context);
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
                    <a href=\"/site/list\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"updateDados.php\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        MINHAS INFORMAÇÕES
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_funcionario\" readonly placeholder=\"Nome completo\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"20\" maxlength=\"100\" value=\"\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"usuario\" readonly placeholder=\"Usuário\" maxlength=\"12\" value=\"\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" readonly placeholder=\"Email\" value=\"\" readonly pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <!-- <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"senha\" name=\"senha\" placeholder=\"Senha\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div> -->

                    <!-- <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Alterar</button>                        
                    </div>-->
                </form>
            </div>
        </div>
    </div>
    ";
        // line 71
        $this->loadTemplate("footer/footer.html", "profile.html", 71)->display($context);
        // line 72
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 72,  112 => 71,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Meu perfil</title>
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
                    <a href=\"/site/list\">
                        <i class=\"fa fa-arrow-circle-left fa-3x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"updateDados.php\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        MINHAS INFORMAÇÕES
                    </span>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"nome_funcionario\" readonly placeholder=\"Nome completo\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"20\" maxlength=\"100\" value=\"\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"usuario\" readonly placeholder=\"Usuário\" maxlength=\"12\" value=\"\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" readonly placeholder=\"Email\" value=\"\" readonly pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <!-- <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"senha\" name=\"senha\" placeholder=\"Senha\" pattern=\".{8,}\" title=\"8 a 15 Caracteres.\" maxlength=\"15\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-lock\" aria-hidden=\"true\"></i>
                        </span>
                    </div> -->

                    <!-- <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Alterar</button>                        
                    </div>-->
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "profile.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\profile.html");
    }
}
