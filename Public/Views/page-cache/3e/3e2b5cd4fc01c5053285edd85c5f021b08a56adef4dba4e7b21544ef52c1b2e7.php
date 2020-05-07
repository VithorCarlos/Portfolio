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
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register\" method=\"post\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE FUNCIONÁRIOS
                    </span>
                    <!---->
                    ";
        // line 31
        if (( !(null === ($context["error_register"] ?? null)) && (isset($context["error_register"]) || array_key_exists("error_register", $context)))) {
            // line 32
            echo "                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        ";
            // line 33
            echo twig_escape_filter($this->env, ($context["error_register"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["error_passwd"] ?? null), "html", null, true);
            echo "
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    ";
        }
        // line 39
        echo "                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"first_name\" placeholder=\"NOME\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "First_name", [], "any", false, false, false, 40), "html", null, true);
        echo "\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"last_name\" placeholder=\"SOBRENOME\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Last_name", [], "any", false, false, false, 48), "html", null, true);
        echo "\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Login", [], "any", false, false, false, 56), "html", null, true);
        echo "\" placeholder=\"USUÁRIO\" maxlength=\"12\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"EMAIL\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Email", [], "any", false, false, false, 64), "html", null, true);
        echo "\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"70\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cpf\" placeholder=\"CPF\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_user"] ?? null), "Cpf", [], "any", false, false, false, 72), "html", null, true);
        echo "\" onkeypress=\"mask(this, '###.###.###-##')\" onkeyup=\"onlyNumbers(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </span>
                    </div>

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


                    <div id=\"html_element\"></div>
                    ";
        // line 97
        echo twig_escape_filter($this->env, ($context["error_captcha"] ?? null), "html", null, true);
        echo "
                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Cadastrar</button>

                        <button class=\"login200-form-btn\" type=\"reset\">Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 107
        $this->loadTemplate("footer/footer.html", "register.html", 107)->display($context);
        // line 108
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
        return array (  178 => 108,  176 => 107,  163 => 97,  135 => 72,  124 => 64,  113 => 56,  102 => 48,  91 => 40,  88 => 39,  77 => 33,  74 => 32,  72 => 31,  46 => 7,  44 => 6,  37 => 1,);
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
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" alt=\"IMG\">
                </div>

                <form name=\"formcadastro\" class=\"login100-form validate-form\" action=\"/site/register\" method=\"post\">
                    <span class=\"login100-form-title\">
                        CADASTRO DE FUNCIONÁRIOS
                    </span>
                    <!---->
                    {% if error_register is not null and error_register is defined %}
                    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                        {{error_register}} {{error_passwd}}
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                          <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    {% endif %}
                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"first_name\" placeholder=\"NOME\" value=\"{{data_user.First_name}}\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"last_name\" placeholder=\"SOBRENOME\" value=\"{{data_user.Last_name}}\" pattern=\"[a-zA-Z\\s]+\$\" onkeyup=\"this.value=this.value.toUpperCase();\" minlength=\"12\" maxlength=\"80\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-id-badge\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"login\" value=\"{{data_user.Login}}\" placeholder=\"USUÁRIO\" maxlength=\"12\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-user-lock\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"email\" name=\"email\" placeholder=\"EMAIL\" value=\"{{data_user.Email}}\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\" maxlength=\"70\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>
                        </span>
                    </div>

                    <div class=\"wrap-input100 validate-input\" data-validate=\"Campo Obrigatório\">
                        <input class=\"input100\" type=\"text\" name=\"cpf\" placeholder=\"CPF\" value=\"{{data_user.Cpf}}\" onkeypress=\"mask(this, '###.###.###-##')\" onkeyup=\"onlyNumbers(this);\" maxlength=\"14\">
                        <span class=\"focus-input100\"></span>
                        <span class=\"symbol-input100\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </span>
                    </div>

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


                    <div id=\"html_element\"></div>
                    {{error_captcha}}
                    <div class=\"container-login100-form-btn\">
                        <button type=\"submit\" role=\"button\" class=\"login100-form-btn\">Cadastrar</button>

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
