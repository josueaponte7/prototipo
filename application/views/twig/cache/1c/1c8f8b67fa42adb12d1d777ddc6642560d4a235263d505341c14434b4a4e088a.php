<?php

/* inicio/sistema.twig */
class __TwigTemplate_cc5bfb38426f3720cdbec7a77c81fea6f2d27bac2f221bafea8d70bb905733f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "inicio/sistema.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> Pagina de inicio INFORMATICA</span>
        </div>
    </div>
     <div class=\"portlet-body form\" style=\"height:500px;\">

     </div>
";
    }

    public function getTemplateName()
    {
        return "inicio/sistema.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 4,  29 => 3,  11 => 1,);
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

{% block head %}
    {{ parent() }}
{% endblock %}
{% block content %}

    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> Pagina de inicio INFORMATICA</span>
        </div>
    </div>
     <div class=\"portlet-body form\" style=\"height:500px;\">

     </div>
{% endblock %}", "inicio/sistema.twig", "/var/www/prototipo/application/views/twig/templates/inicio/sistema.twig");
    }
}
