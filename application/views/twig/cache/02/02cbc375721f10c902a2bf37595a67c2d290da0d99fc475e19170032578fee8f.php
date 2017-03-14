<?php

/* inicio/welcome.twig */
class __TwigTemplate_26d38b3ee6d942e7c67cbb7e230034b4a50b0fcaba0beda91f1e51040f220214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "inicio/welcome.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    Hola:";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "
    <div id=\"div-registro\" class=\"animated rotateInDownLeft\">
        <h1>Consultar Registros User:";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["session"]) ? $context["session"] : null), "html", null, true);
        echo "</h1>
        <h3>Hoy:";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y h:i a", "America/Caracas"), "html", null, true);
        echo "</h3>

    </div>
";
    }

    public function getTemplateName()
    {
        return "inicio/welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base/base.twig\" %}
{% block content %}
    Hola:{{ titulo }}
    <div id=\"div-registro\" class=\"animated rotateInDownLeft\">
        <h1>Consultar Registros User:{{ session }}</h1>
        <h3>Hoy:{{ 'now'|date(\"d/m/Y h:i a\",\"America/Caracas\") }}</h3>

    </div>
{% endblock %}", "inicio/welcome.twig", "/var/www/garajemotores/application/views/twig/templates/inicio/welcome.twig");
    }
}
