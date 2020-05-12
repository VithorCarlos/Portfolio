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

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/my-profile\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        MINHAS INFORMAÇÕES
                    </span>
                    <!---->
                    ";
        // line 32
        if (( !(null === ($context["error_update"] ?? null)) && (isset($context["error_update"]) || array_key_exists("error_update", $context)))) {
            // line 33
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, ($context["error_update"] ?? null), "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    ";
        }
        // line 40
        echo "
                    <input type=\"hidden\" name=\"id_employee\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Id_employee", [], "any", false, false, false, 41), "html", null, true);
        echo "\">

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"first_name\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "First_name", [], "any", false, false, false, 44), "html", null, true);
        echo "\" placeholder=\"Nome\" onkeyup=\"this.value=this.value.toUpperCase();\" maxlength=\"100\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"last_name\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Last_name", [], "any", false, false, false, 52), "html", null, true);
        echo "\" placeholder=\"Sobrenome\" maxlength=\"100\" onkeyup=\"this.value=this.value.toUpperCase();\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Login", [], "any", false, false, false, 60), "html", null, true);
        echo "\" placeholder=\"Usuário\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"Email\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Email", [], "any", false, false, false, 68), "html", null, true);
        echo "\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"100\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"cpf\" name=\"cpf\" placeholder=\"CPF\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Cpf", [], "any", false, false, false, 76), "html", null, true);
        echo "\" onclick=\"\$(this).mask('000.000.000-00')\" onkeyup=\"onlyNumbers(this);\" minlength=\"14\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 90
        $this->loadTemplate("footer/footer.html", "profile.html", 90)->display($context);
        // line 91
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
        return array (  159 => 91,  157 => 90,  140 => 76,  129 => 68,  118 => 60,  107 => 52,  96 => 44,  90 => 41,  87 => 40,  78 => 34,  75 => 33,  73 => 32,  46 => 7,  44 => 6,  37 => 1,);
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

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/my-profile\" method=\"POST\">
                    <span class=\"login100-form-title\">
                        MINHAS INFORMAÇÕES
                    </span>
                    <!---->
                    {% if error_update is not null and error_update is defined %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{error_update}}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    {% endif %}

                    <input type=\"hidden\" name=\"id_employee\" value=\"{{data_user.Id_employee}}\">

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"first_name\" value=\"{{data_user.First_name}}\" placeholder=\"Nome\" onkeyup=\"this.value=this.value.toUpperCase();\" maxlength=\"100\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"last_name\" value=\"{{data_user.Last_name}}\" placeholder=\"Sobrenome\" maxlength=\"100\" onkeyup=\"this.value=this.value.toUpperCase();\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"{{data_user.Login}}\" placeholder=\"Usuário\" maxlength=\"50\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"Email\" value=\"{{data_user.Email}}\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"100\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" id=\"cpf\" name=\"cpf\" placeholder=\"CPF\" value=\"{{data_user.Cpf}}\" onclick=\"\$(this).mask('000.000.000-00')\" onkeyup=\"onlyNumbers(this);\" minlength=\"14\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </span>
                    </div>

                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "profile.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\profile.html");
    }
}
