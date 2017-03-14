<?php

/* home/relatorio.twig */
class __TwigTemplate_1f20dbc808083eb978281aa15aca65ac9b86c75d6abcfe723f3b963cd816a1ef extends Twig_Template
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
        if (((isset($context["usuarios"]) ? $context["usuarios"] : null) == null)) {
            // line 2
            echo "
    <div class=\"alert alert-danger\" style=\"text-align:center;\">
        <strong>No existen Registros!</strong>
    </div>
";
        } else {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                // line 8
                echo "    <div class=\"table-responsive\">
        <table border=\"1\" class=\"table  table-striped table-bordered table-hover table-checkable order-column\">
            <caption class=\"bg-success\">";
                // line 10
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
                // line 21
                $context["tot_li"] = 0;
                // line 22
                echo "                ";
                $context["tot_sa"] = 0;
                // line 23
                echo "                ";
                $context["tot_co"] = 0;
                // line 24
                echo "                ";
                $context["tot_lu"] = 0;
                // line 25
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["usuario"], "year", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
                    // line 26
                    echo "                    <tr>
                        <td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "ma", array()), $context["anio"], array(), "array"), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "liquida", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["usuario"], "salario", array()), 2, ",", "."), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "comisao", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                    echo "</td>
                        <td style=\"text-align: right\">R\$ ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["usuario"], "lucro", array()), $context["anio"], array(), "array"), 2, ",", "."), "html", null, true);
                    echo "</td>
                    </tr>
                    ";
                    // line 33
                    $context["tot_li"] = ((isset($context["tot_li"]) ? $context["tot_li"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "liquida", array()), $context["anio"], array(), "array"));
                    // line 34
                    echo "                    ";
                    $context["tot_sa"] = ((isset($context["tot_sa"]) ? $context["tot_sa"] : null) + $this->getAttribute($context["usuario"], "salario", array()));
                    // line 35
                    echo "                    ";
                    $context["tot_co"] = ((isset($context["tot_co"]) ? $context["tot_co"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "comisao", array()), $context["anio"], array(), "array"));
                    // line 36
                    echo "                    ";
                    $context["tot_lu"] = ((isset($context["tot_lu"]) ? $context["tot_lu"] : null) + $this->getAttribute($this->getAttribute($context["usuario"], "lucro", array()), $context["anio"], array(), "array"));
                    // line 37
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </tbody>
            <tfoot>
                <tr>
                    <th colspan=\"2\" style=\"text-align: right\">R\$ ";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_li"]) ? $context["tot_li"] : null), 2, ",", "."), "html", null, true);
                echo "</th>
                    <th style=\"text-align: right\">R\$ ";
                // line 42
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_sa"]) ? $context["tot_sa"] : null), 2, ",", "."), "html", null, true);
                echo "</th>
                    <th style=\"text-align: right\">R\$ ";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tot_co"]) ? $context["tot_co"] : null), 2, ",", "."), "html", null, true);
                echo "</th>
                    <th style=\"text-align: right\">R\$ ";
                // line 44
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
            // line 50
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "home/relatorio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 50,  124 => 44,  120 => 43,  116 => 42,  112 => 41,  107 => 38,  101 => 37,  98 => 36,  95 => 35,  92 => 34,  90 => 33,  85 => 31,  81 => 30,  77 => 29,  73 => 28,  69 => 27,  66 => 26,  61 => 25,  58 => 24,  55 => 23,  52 => 22,  50 => 21,  36 => 10,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if usuarios == NULL%}

    <div class=\"alert alert-danger\" style=\"text-align:center;\">
        <strong>No existen Registros!</strong>
    </div>
{% else %}
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
{% endfor %}

{% endif %}
", "home/relatorio.twig", "/var/www/prototipo/application/views/twig/templates/home/relatorio.twig");
    }
}
