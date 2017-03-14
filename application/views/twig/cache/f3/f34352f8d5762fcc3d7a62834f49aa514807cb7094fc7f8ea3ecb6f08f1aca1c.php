<?php

/* base/sidebar.twig */
class __TwigTemplate_e46eb595a276902647d4f9028ce0cb12b0f237bb43aee633c91e3adbfb770244 extends Twig_Template
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
        echo "<div class=\"page-sidebar-wrapper\">
    <div class=\"page-sidebar navbar-collapse collapse\">
        <ul class=\"page-sidebar-menu   \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
            ";
        // line 7
        echo "
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(menu());
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 9
            echo "                <li class=\"nav-item\">
                    <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                        <i class=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "icono", array()), "html", null, true);
            echo "\"></i>
                        <span class=\"title\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "modulo", array()), "html", null, true);
            echo "</span>
                        <span class=\"arrow\"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(submenu($this->getAttribute($context["menu"], "id", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
                // line 17
                echo "                            ";
                if (($this->getAttribute($context["submenu"], "id", array()) == (isset($context["module_id"]) ? $context["module_id"] : null))) {
                    // line 18
                    echo "                                ";
                    $context["activo"] = "active open";
                    // line 19
                    echo "                            ";
                }
                // line 20
                echo "
                            <li class=\"nav-item ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["activo"]) ? $context["activo"] : null), "html", null, true);
                echo "\">
                                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["submenu"], "route", array()), "html", null, true);
                echo "\" class=\"nav-link \">
                                    <span class=\"title\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["submenu"], "modulo", array()), "html", null, true);
                echo "</span>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/sidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  80 => 27,  70 => 23,  66 => 22,  62 => 21,  59 => 20,  56 => 19,  53 => 18,  50 => 17,  46 => 16,  39 => 12,  35 => 11,  31 => 9,  27 => 8,  24 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"page-sidebar-wrapper\">
    <div class=\"page-sidebar navbar-collapse collapse\">
        <ul class=\"page-sidebar-menu   \" data-keep-expanded=\"false\" data-auto-scroll=\"true\" data-slide-speed=\"200\">
            {#<li class=\"heading\">
                <h3 class=\"uppercase\">Features</h3>
            </li>#}

            {% for menu in menu() %}
                <li class=\"nav-item\">
                    <a href=\"javascript:;\" class=\"nav-link nav-toggle\">
                        <i class=\"{{ menu.icono }}\"></i>
                        <span class=\"title\">{{ menu.modulo }}</span>
                        <span class=\"arrow\"></span>
                    </a>
                    <ul class=\"sub-menu\">
                        {% for submenu in submenu(menu.id) %}
                            {% if submenu.id == module_id %}
                                {% set activo = 'active open' %}
                            {% endif %}

                            <li class=\"nav-item {{ activo }}\">
                                <a href=\"{{ submenu.route }}\" class=\"nav-link \">
                                    <span class=\"title\">{{ submenu.modulo }}</span>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>", "base/sidebar.twig", "/var/www/garajemotores/application/views/twig/templates/base/sidebar.twig");
    }
}
