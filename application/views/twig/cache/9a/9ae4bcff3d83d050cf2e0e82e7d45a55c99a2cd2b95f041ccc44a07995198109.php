<?php

/* base/breadcrumb.twig */
class __TwigTemplate_6f4fc772aff8b619b017cddea35b23306143e864fdc413de9dfef93757fceb77 extends Twig_Template
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
        echo "<div class=\"page-head\">

    <div class=\"page-title\">
        <h1>Bootstrap Form Controls
            <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small>
        </h1>
    </div>
</div>
<ul class=\"page-breadcrumb breadcrumb\">
    <li>
        <a href=\"index.html\">Home</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <span class=\"active\">Form Stuff</span>
    </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "base/breadcrumb.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-head\">

    <div class=\"page-title\">
        <h1>Bootstrap Form Controls
            <small>bootstrap inputs, input groups, custom checkboxes and radio controls and more</small>
        </h1>
    </div>
</div>
<ul class=\"page-breadcrumb breadcrumb\">
    <li>
        <a href=\"index.html\">Home</a>
        <i class=\"fa fa-circle\"></i>
    </li>
    <li>
        <span class=\"active\">Form Stuff</span>
    </li>
</ul>", "base/breadcrumb.twig", "/var/www/garajemotores/application/views/twig/templates/base/breadcrumb.twig");
    }
}
