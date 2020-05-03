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

/* list.html */
class __TwigTemplate_8f2d9870b2eb6ef767c5860ee826466024bec5d977fa3f91d2fe07f1dba29bce extends Template
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
    <title>Consulta geral</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "list.html", 6)->display($context);
        // line 7
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/table.css\">
    <!--===============================================================================================-->
</head>

<body>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <!--a class=\"navbar-brand btn btn-outline-success\" href=\"#\"><i class=\"fas fa-home\"></i> Home</a>-->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#NavbarContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"NavbarContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"dropdown-toggle btn btn-outline-primary\" role=\"button\" data-toggle=\"dropdown\" href=\"#\" style=\"margin-bottom : 2%;\"><i class=\"fas fa-cogs\"></i> Menu</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"/site/register-error\">Registrar Erros</a>

                        <a class=\"dropdown-item\" href=\"/site/my-profile\">Meu Perfil</a>
                    </div>
                </li>
            </ul>
        </div>
        <a class=\"btn btn-outline-secondary\" href=\"/logout\" role=\"button\"> Sair <i class=\"fas fa-sign-out-alt\"></i> </a>
    </nav>

    <div class=\"limiter\">
        <div class=\"container-table100\">
            <form action=\"FindClient.php\" method=\"POST\" onsubmit=\"return false\">
                <div class=\"container h-100\">
                    <div class=\"d-flex justify-content-center h-100\">
                        <div class=\"searchbar\">
                            <input class=\"search_input\" type=\"search\" id=\"campo\" name=\"campo\" placeholder=\"Pesquisar\">
                            <a href=\"#\" class=\"search_icon\"><i class=\"fas fa-search\"></i></a>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"wrap-table100\">
                <div class=\"table\" id=\"resultado\">
                    <div class='row header'>
                        <div class='cell'>
                            CLIENTE
                        </div>
                        <div class='cell'>
                            ERRO
                        </div>
                        <div class='cell'>
                            SOLUÇÃO
                        </div>
                        <div class='cell'>
                            DATA
                        </div>
                        <div class='cell'>
                            SISTEMA
                        </div>
                        <div class='cell'>
                            <i class='fas fa-tools'></i>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='cell cell2' data-title='Clientes'>

                        </div>
                        <div class='cell cell2' data-title='Erro'>

                        </div>


                        <div class='cell cell2' data-title=Solução style='text-align: justify;'>

                        </div>

                        <div class='cell cell2' data-title='Data'>
                        </div>
                        <div class='cell cell2' data-title='Sistema'>
                        </div>
                        <div class='cell cell2' data-title='Sistema'>
                            <a href=''><i class='fas fa-edit'></i></a>
                        </div>
                    </div>

                    <!--Final Conteúdo-->
                </div>
            </div>
        </div>
    </div>
    ";
        // line 97
        $this->loadTemplate("footer/footer.html", "list.html", 97)->display($context);
        // line 98
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 98,  138 => 97,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Consulta geral</title>
    {% include \"header/header.html\" %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/util.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/css/table.css\">
    <!--===============================================================================================-->
</head>

<body>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <!--a class=\"navbar-brand btn btn-outline-success\" href=\"#\"><i class=\"fas fa-home\"></i> Home</a>-->
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#NavbarContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"NavbarContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"dropdown-toggle btn btn-outline-primary\" role=\"button\" data-toggle=\"dropdown\" href=\"#\" style=\"margin-bottom : 2%;\"><i class=\"fas fa-cogs\"></i> Menu</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"/site/register-error\">Registrar Erros</a>

                        <a class=\"dropdown-item\" href=\"/site/my-profile\">Meu Perfil</a>
                    </div>
                </li>
            </ul>
        </div>
        <a class=\"btn btn-outline-secondary\" href=\"/logout\" role=\"button\"> Sair <i class=\"fas fa-sign-out-alt\"></i> </a>
    </nav>

    <div class=\"limiter\">
        <div class=\"container-table100\">
            <form action=\"FindClient.php\" method=\"POST\" onsubmit=\"return false\">
                <div class=\"container h-100\">
                    <div class=\"d-flex justify-content-center h-100\">
                        <div class=\"searchbar\">
                            <input class=\"search_input\" type=\"search\" id=\"campo\" name=\"campo\" placeholder=\"Pesquisar\">
                            <a href=\"#\" class=\"search_icon\"><i class=\"fas fa-search\"></i></a>
                        </div>
                    </div>
                </div>
            </form>
            <div class=\"wrap-table100\">
                <div class=\"table\" id=\"resultado\">
                    <div class='row header'>
                        <div class='cell'>
                            CLIENTE
                        </div>
                        <div class='cell'>
                            ERRO
                        </div>
                        <div class='cell'>
                            SOLUÇÃO
                        </div>
                        <div class='cell'>
                            DATA
                        </div>
                        <div class='cell'>
                            SISTEMA
                        </div>
                        <div class='cell'>
                            <i class='fas fa-tools'></i>
                        </div>
                    </div>

                    <div class='row'>
                        <div class='cell cell2' data-title='Clientes'>

                        </div>
                        <div class='cell cell2' data-title='Erro'>

                        </div>


                        <div class='cell cell2' data-title=Solução style='text-align: justify;'>

                        </div>

                        <div class='cell cell2' data-title='Data'>
                        </div>
                        <div class='cell cell2' data-title='Sistema'>
                        </div>
                        <div class='cell cell2' data-title='Sistema'>
                            <a href=''><i class='fas fa-edit'></i></a>
                        </div>
                    </div>

                    <!--Final Conteúdo-->
                </div>
            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "list.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\list.html");
    }
}
