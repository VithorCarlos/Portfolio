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
                        <!--<div class='cell'>
                            DATA
                        </div>-->
                        <div class='cell'>
                            SISTEMA
                        </div>
                        <div class='cell'>
                            <i class='fas fa-tools'></i>
                        </div>
                    </div>
                    <!---->
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list_all"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 71
            echo "                    <div class='row'>
                        <div class='cell cell2' data-title='Cliente'>
                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "client_name", [], "any", false, false, false, 73));
            echo "
                        </div>

                        <div class='cell cell2' data-title='Erro'>
                            ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "type_error", [], "any", false, false, false, 77));
            echo "
                        </div>

                        <div class='cell cell2' data-title=Solução style='text-align: justify'>
                            ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "solution", [], "any", false, false, false, 81));
            echo "
                        </div>

                        <!-- <div class='cell cell2' data-title='Data'>
                        </div>-->
                        <div class='cell cell2' data-title='Sistema'>
                            ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "system_used", [], "any", false, false, false, 87));
            echo "
                        </div>

                        <div class='cell cell2' data-title='settings'>
                            <a class=\"eyeClass\" href='/site/detail-error/";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id_error", [], "any", false, false, false, 91), "html", null, true);
            echo "' data-toggle=\"modal\" data-target=\"#siteModal\"><i class=\"fas fa-eye\"></i></a>
                            <a class=\"editClass\" href=''><i class='fas fa-edit'></i></a>
                            <a class=\"trashClass\" href='/site/delete-error/";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["list"], "id_error", [], "any", false, false, false, 93), "html", null, true);
            echo "' onclick=\"confirm('Tem certeza que deseja excluir este registro?');\"><i class='fas fa-trash'></i></a>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    <!--Final Conteúdo-->
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class=\"modal fade\" id=\"siteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl\" role=\"document\">
                <div class=\"modal-content\">
                    <!--Modal Header-->
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Detalhes</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <!--End Header-->

                    <!--Modal Body-->
                    <div class=\"modal-body\">
                        <div class=\"container-fluid\">
                            <h4>Cliente</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "client_name", [], "any", false, false, false, 118));
        echo "</div>

                            <h4>Razão Social</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "company_name", [], "any", false, false, false, 121));
        echo "</div>

                            <h4>Nome Fantasia</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "fantasy_name", [], "any", false, false, false, 124));
        echo "</div>

                            <h4>CPNJ</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "cpnj", [], "any", false, false, false, 127));
        echo "</div>

                            <h4>Erro</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "type_error", [], "any", false, false, false, 130));
        echo "</div>

                            <h4>Solução</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "solution", [], "any", false, false, false, 133));
        echo "</div>

                            <h4>Sistema</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "system_used", [], "any", false, false, false, 136));
        echo "</div>

                            <h4>Data de ocorrência</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "occurrence_date", [], "any", false, false, false, 139));
        echo "</div>

                            <h4>Funcionário que efetuou o registo</h4>
                            <div class=\"col-md-12 ml-auto\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "first_name", [], "any", false, false, false, 142));
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["list_id"] ?? null), "last_name", [], "any", false, false, false, 142));
        echo "</div>
                        </div>
                    </div>
                    <!--End Body-->

                    <!--Modal Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fechar</button>
                    </div>
                    <!--End Footer-->
                </div>
            </div>
        </div>
        <!--EndModal-->

        ";
        // line 157
        $this->loadTemplate("footer/footer.html", "list.html", 157)->display($context);
        // line 158
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
        return array (  257 => 158,  255 => 157,  235 => 142,  229 => 139,  223 => 136,  217 => 133,  211 => 130,  205 => 127,  199 => 124,  193 => 121,  187 => 118,  164 => 97,  154 => 93,  149 => 91,  142 => 87,  133 => 81,  126 => 77,  119 => 73,  115 => 71,  111 => 70,  46 => 7,  44 => 6,  37 => 1,);
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
                        <!--<div class='cell'>
                            DATA
                        </div>-->
                        <div class='cell'>
                            SISTEMA
                        </div>
                        <div class='cell'>
                            <i class='fas fa-tools'></i>
                        </div>
                    </div>
                    <!---->
                    {% for list in list_all %}
                    <div class='row'>
                        <div class='cell cell2' data-title='Cliente'>
                            {{list.client_name|e}}
                        </div>

                        <div class='cell cell2' data-title='Erro'>
                            {{list.type_error|e}}
                        </div>

                        <div class='cell cell2' data-title=Solução style='text-align: justify'>
                            {{list.solution|e}}
                        </div>

                        <!-- <div class='cell cell2' data-title='Data'>
                        </div>-->
                        <div class='cell cell2' data-title='Sistema'>
                            {{list.system_used|e}}
                        </div>

                        <div class='cell cell2' data-title='settings'>
                            <a class=\"eyeClass\" href='/site/detail-error/{{list.id_error}}' data-toggle=\"modal\" data-target=\"#siteModal\"><i class=\"fas fa-eye\"></i></a>
                            <a class=\"editClass\" href=''><i class='fas fa-edit'></i></a>
                            <a class=\"trashClass\" href='/site/delete-error/{{list.id_error}}' onclick=\"confirm('Tem certeza que deseja excluir este registro?');\"><i class='fas fa-trash'></i></a>
                        </div>
                    </div>
                    {% endfor %}
                    <!--Final Conteúdo-->
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class=\"modal fade\" id=\"siteModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl\" role=\"document\">
                <div class=\"modal-content\">
                    <!--Modal Header-->
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Detalhes</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <!--End Header-->

                    <!--Modal Body-->
                    <div class=\"modal-body\">
                        <div class=\"container-fluid\">
                            <h4>Cliente</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.client_name|e}}</div>

                            <h4>Razão Social</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.company_name|e}}</div>

                            <h4>Nome Fantasia</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.fantasy_name|e}}</div>

                            <h4>CPNJ</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.cpnj|e}}</div>

                            <h4>Erro</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.type_error|e}}</div>

                            <h4>Solução</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.solution|e}}</div>

                            <h4>Sistema</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.system_used|e}}</div>

                            <h4>Data de ocorrência</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.occurrence_date|e}}</div>

                            <h4>Funcionário que efetuou o registo</h4>
                            <div class=\"col-md-12 ml-auto\">{{list_id.first_name|e}} {{list_id.last_name|e}}</div>
                        </div>
                    </div>
                    <!--End Body-->

                    <!--Modal Footer-->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fechar</button>
                    </div>
                    <!--End Footer-->
                </div>
            </div>
        </div>
        <!--EndModal-->

        {% include 'footer/footer.html' %}
</body>

</html>", "list.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\list.html");
    }
}
