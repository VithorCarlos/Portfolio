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

/* style/style-home.html */
class __TwigTemplate_bca4cdcaf7e62495d35acc67931eef65c0e0fe3ee59c6a573a861170c56cb30f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'styleHome' => [$this, 'block_styleHome'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('styleHome', $context, $blocks);
    }

    public function block_styleHome($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/util.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/main.css\">
<!--===============================================================================================-->
</head>

<body>
    ";
    }

    public function getTemplateName()
    {
        return "style/style-home.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block styleHome %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/util.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"Public/Views/assets/css/main.css\">
<!--===============================================================================================-->
</head>

<body>
    {% endblock %}", "style/style-home.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\style\\style-home.html");
    }
}
