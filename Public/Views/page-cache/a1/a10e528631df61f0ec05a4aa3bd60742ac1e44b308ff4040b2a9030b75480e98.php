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

/* header/header.php */
class __TwigTemplate_c01dd1b0225518925273df5dcffb0c3e63bc3979aca316e97d521642db6ce715 extends Template
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
        echo "<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->
<link rel=\"icon\" type=\"image/png\" href=\"/Public/Views/images/icons/infoeds.ico\" />
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/bootstrap/css/bootstrap.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/fonts//font-awesome-4.7.0/css/font-awesome.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/animate/animate.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/css-hamburgers/hamburgers.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/select2/select2.min.css\">
<!--===============================================================================================-->
<script type=\"text/javascript\">
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
            'sitekey': '6LetVvEUAAAAAE3fjoTtcJEXwyCUn8Er5UDDGWmg'
        });
    };
</script>
 ";
    }

    public function getTemplateName()
    {
        return "header/header.php";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<!--===============================================================================================-->
<link rel=\"icon\" type=\"image/png\" href=\"/Public/Views/images/icons/infoeds.ico\" />
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/bootstrap/css/bootstrap.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\" integrity=\"sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/\" crossorigin=\"anonymous\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Public/Views/assets/fonts//font-awesome-4.7.0/css/font-awesome.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/animate/animate.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/css-hamburgers/hamburgers.min.css\">
<!--===============================================================================================-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"/Resources/select2/select2.min.css\">
<!--===============================================================================================-->
<script type=\"text/javascript\">
    var onloadCallback = function() {
        grecaptcha.render('html_element', {
            'sitekey': '6LetVvEUAAAAAE3fjoTtcJEXwyCUn8Er5UDDGWmg'
        });
    };
</script>
 ", "header/header.php", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\header\\header.php");
    }
}
