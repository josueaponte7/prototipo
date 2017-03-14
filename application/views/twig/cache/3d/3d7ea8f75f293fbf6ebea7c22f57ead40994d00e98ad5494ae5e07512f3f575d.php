<?php

/* base/header.twig */
class __TwigTemplate_57b2832c4181293cbb5365489496e349713fccfcaf827d3a3dab76f04b653dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-header navbar navbar-fixed-top\">
    <div class=\"page-header-inner \">
        <div class=\"page-logo\">
            <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, (base_url() . "inicio"), "html", null, true);
        echo "\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (public_url() . "img/logo.png"), "html", null, true);
        echo "\"  alt=\"logo\" class=\"logo-default\"/>
            </a>
            <div class=\"menu-toggler sidebar-toggler\"></div>
        </div>
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "base/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-header navbar navbar-fixed-top\">
    <div class=\"page-header-inner \">
        <div class=\"page-logo\">
            <a href=\"{{ base_url()~ 'inicio' }}\">
                <img src=\"{{ public_url()~ 'img/logo.png' }}\"  alt=\"logo\" class=\"logo-default\"/>
            </a>
            <div class=\"menu-toggler sidebar-toggler\"></div>
        </div>
        <a href=\"javascript:;\" class=\"menu-toggler responsive-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"> </a>
    </div>
</div>
", "base/header.twig", "/var/www/prototipo/application/views/twig/templates/base/header.twig");
    }
}
