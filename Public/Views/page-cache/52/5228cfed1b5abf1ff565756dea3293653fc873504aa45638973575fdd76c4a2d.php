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

/* footer/footer-home.html */
class __TwigTemplate_0f6c1ea48421b092ff4e6e94c5b0edb5b6ec405ac545ce1250955adbf7cb0a13 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!--===============================================================================================-->
<script src=\"Resources/jquery/jquery-3.2.1.min.js\"></script>
<script src=\"Resources/jquery/validate.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/bootstrap/js/popper.js\"></script>
<script src=\"Resources/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/select2/select2.min.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/tilt/tilt.jquery.min.js\"></script>
<script src=\"Resources/js/validarcpf.js\"></script>
<script src=\"Public/Views/assets/js/main.js\"></script>
<script>
    \$('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->


</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "footer/footer-home.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
<!--===============================================================================================-->
<script src=\"Resources/jquery/jquery-3.2.1.min.js\"></script>
<script src=\"Resources/jquery/validate.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/bootstrap/js/popper.js\"></script>
<script src=\"Resources/bootstrap/js/bootstrap.min.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/select2/select2.min.js\"></script>
<!--===============================================================================================-->
<script src=\"Resources/tilt/tilt.jquery.min.js\"></script>
<script src=\"Resources/js/validarcpf.js\"></script>
<script src=\"Public/Views/assets/js/main.js\"></script>
<script>
    \$('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->


</body>

</html>
{% endblock %}", "footer/footer-home.html", "C:\\xampp\\htdocs\\ProjetoInfoeds\\Public\\Views\\page\\footer\\footer-home.html");
    }
}
