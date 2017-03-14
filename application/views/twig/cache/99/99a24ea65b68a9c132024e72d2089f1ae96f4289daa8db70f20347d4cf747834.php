<?php

/* inicio/home.twig */
class __TwigTemplate_994a2e5bdd212b3967e7dcd4128d6ba5b0b1a65672b7d89ba9881a2fe7a7dffd extends Twig_Template
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
        echo "hola";
    }

    public function getTemplateName()
    {
        return "inicio/home.twig";
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
        return new Twig_Source("hola", "inicio/home.twig", "/var/www/reactivos/application/views/twig/templates/inicio/home.twig");
    }
}
