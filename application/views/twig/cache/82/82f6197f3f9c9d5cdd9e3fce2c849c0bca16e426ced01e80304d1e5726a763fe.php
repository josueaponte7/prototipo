<?php

/* home/page.twig */
class __TwigTemplate_437d597bbbcecf3bfb5adc2178ebe2ffd3b1a84a53e3b7b84d75cb30d7dd87a1 extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 3
            echo "    <div class=\"table-responsive\">
        <table border=\"1\" class=\"table  table-striped table-bordered table-hover table-checkable order-column\">
            <caption class=\"bg-success\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "user", array()), "html", null, true);
            echo "</caption>
            <thead>
                <tr>
                    <th class=\"text-center\" width=\"20%\">Período</th>
                    <th class=\"text-center\" width=\"20%\">Receita Líquida</th>
                    <th class=\"text-center\" width=\"20%\">Custo Fixo</th>
                    <th class=\"text-center\" width=\"20%\">Comissão</th>
                    <th class=\"text-center\" width=\"20%\">Lucro</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 16
            $context["tot_li"] = 0;
            // line 17
            echo "                ";
            $context["tot_sa"] = 0;
            // line 18
            echo "                ";
            $context["tot_co"] = 0;
            // line 19
            echo "                ";
            $context["tot_lu"] = 0;
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["usuario"], "year", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
                // line 21
                echo "                    <tr>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "ma", array()), $context["anio"], array(), "array"), "html", null, true);
                echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                // line 23
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "liquida", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                // line 24
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["usuario"], "salario", array()), 2, ",", "."), "html", null, true);
                echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "comisao", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                // line 26
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "lucro", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                // line 28
                $context["tot_li"] = ((isset($context["tot_li"]) ? $context["tot_li"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "liquida", array()), $context["anio"], array(), "array"));
                // line 29
                echo "                    ";
                $context["tot_sa"] = ((isset($context["tot_sa"]) ? $context["tot_sa"] : null) + $this->getAttribute($context["usuario"], "salario", array()));
                // line 30
                echo "                    ";
                $context["tot_co"] = ((isset($context["tot_co"]) ? $context["tot_co"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "comisao", array()), $context["anio"], array(), "array"));
                // line 31
                echo "                    ";
                $context["tot_lu"] = ((isset($context["tot_lu"]) ? $context["tot_lu"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "lucro", array()), $context["anio"], array(), "array"));
                // line 32
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </tbody>
            <tfoot>
                <tr>
                    <th colspan=\"2\" style=\"text-align: right\">R\$ ";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_li"]) ? $context["tot_li"] : null), 2, ",", "."), "html", null, true);
            echo "</th>
                    <th style=\"text-align: right\">R\$ ";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_sa"]) ? $context["tot_sa"] : null), 2, ",", "."), "html", null, true);
            echo "</th>
                    <th style=\"text-align: right\">R\$ ";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_co"]) ? $context["tot_co"] : null), 2, ",", "."), "html", null, true);
            echo "</th>
                    <th style=\"text-align: right\">R\$ ";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_lu"]) ? $context["tot_lu"] : null), 2, ",", "."), "html", null, true);
            echo "</th>
                </tr>
            </tfoot>
        </table>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "home/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  114 => 38,  110 => 37,  106 => 36,  101 => 33,  95 => 32,  92 => 31,  89 => 30,  86 => 29,  84 => 28,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  63 => 22,  60 => 21,  55 => 20,  52 => 19,  49 => 18,  46 => 17,  44 => 16,  30 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% for usuario in usuarios %}
    <div class=\"table-responsive\">
        <table border=\"1\" class=\"table  table-striped table-bordered table-hover table-checkable order-column\">
            <caption class=\"bg-success\">{{ usuario.user }}</caption>
            <thead>
                <tr>
                    <th class=\"text-center\" width=\"20%\">Período</th>
                    <th class=\"text-center\" width=\"20%\">Receita Líquida</th>
                    <th class=\"text-center\" width=\"20%\">Custo Fixo</th>
                    <th class=\"text-center\" width=\"20%\">Comissão</th>
                    <th class=\"text-center\" width=\"20%\">Lucro</th>
                </tr>
            </thead>
            <tbody>
                {% set tot_li = 0 %}
                {% set tot_sa = 0 %}
                {% set tot_co = 0 %}
                {% set tot_lu = 0 %}
                {% for anio in usuario.year %}
                    <tr>
                        <td>{{ usuario.ma[anio] }}</td>
                        <td style=\"text-align: right\">R\$ {{ usuario.liquida[anio]|number_format(2, ',', '.') }}</td>
                        <td style=\"text-align: right\">R\$ {{ usuario.salario|number_format(2, ',', '.') }}</td>
                        <td style=\"text-align: right\">R\$ {{ usuario.comisao[anio]|number_format(2, ',', '.') }}</td>
                        <td style=\"text-align: right\">R\$ {{ usuario.lucro[anio]|number_format(2, ',', '.') }}</td>
                    </tr>
                    {% set tot_li = tot_li + usuario.liquida[anio] %}
                    {% set tot_sa = tot_sa + usuario.salario %}
                    {% set tot_co = tot_co + usuario.comisao[anio] %}
                    {% set tot_lu = tot_lu + usuario.lucro[anio] %}
                {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <th colspan=\"2\" style=\"text-align: right\">R\$ {{ tot_li|number_format(2, ',', '.') }}</th>
                    <th style=\"text-align: right\">R\$ {{ tot_sa|number_format(2, ',', '.') }}</th>
                    <th style=\"text-align: right\">R\$ {{ tot_co|number_format(2, ',', '.') }}</th>
                    <th style=\"text-align: right\">R\$ {{ tot_lu|number_format(2, ',', '.') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
{% endfor %}", "home/page.twig", "/var/www/prototipo/application/views/twig/templates/home/page.twig");
    }
}
