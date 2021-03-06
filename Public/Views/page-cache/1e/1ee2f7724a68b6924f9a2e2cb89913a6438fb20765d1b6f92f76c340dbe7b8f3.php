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

/* /email/forgot-sent.html */
class __TwigTemplate_0c67085904475fbd7d8b6c9fdee10afc3851ff0c63e79ced5dd0b573c35f91e3 extends Template
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
    <title>Email enviado!</title>
    ";
        // line 6
        $this->loadTemplate("header/header.html", "/email/forgot-sent.html", 6)->display($context);
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
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" width=\"340px\" height=\"250px\" alt=\"IMG\">
                </div>

                <div class=\"alert alert-success login100-form-title\" role=\"alert\">
                    <span style=\"color:green; text-align: center;\">ENVIADO COM SUCESSO!</span>
                </div>



            </div>
        </div>
    </div>
    ";
        // line 35
        $this->loadTemplate("footer/footer.html", "/email/forgot-sent.html", 35)->display($context);
        // line 36
        echo "</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/email/forgot-sent.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 36,  76 => 35,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pt-br\">

<head>
    <title>Email enviado!</title>
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
                    <a href=\"/\">
                        <i class=\"fa fa-arrow-circle-left fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                <div class=\"login100-pic js-tilt\" data-tilt>
                    <img src=\"/Public/Views/images/img-01.png\" width=\"340px\" height=\"250px\" alt=\"IMG\">
                </div>

                <div class=\"alert alert-success login100-form-title\" role=\"alert\">
                    <span style=\"color:green; text-align: center;\">ENVIADO COM SUCESSO!</span>
                </div>



            </div>
        </div>
    </div>
    {% include 'footer/footer.html' %}
</body>

</html>", "/email/forgot-sent.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\email\\forgot-sent.html");
    }
}
