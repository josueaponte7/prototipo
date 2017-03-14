<?php

/* home/home.twig */
class __TwigTemplate_7f7480a077e120f725737ff6df5bb64224761323da2ddb7baf150fadfd53df30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "home/home.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "    ";
        $context["meses"] = array(0 => "Jan", 1 => "Fev", 2 => "Mar", 3 => "Abr", 4 => "Mai", 5 => "Jun", 6 => "Jul", 7 => "Ago", 8 => "Sep", 9 => "Out", 10 => "Nov", 11 => "Dez");
        // line 8
        echo "    ";
        $context["anios"] = array(0 => "2003", 1 => "2004", 2 => "2005", 3 => "2006", 4 => "2007");
        // line 9
        echo "    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\">CONSULTOR</span>
        </div>
    </div>
    <div class=\"portlet-body form\" style=\"min-height: 800px;\">
        <div class=\"font-dark bold uppercase\">Periodos</div>
        <br/>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Mês</label>
                <select name=\"mes_inicial\" id=\"mes_inicial\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                   ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 23
            echo "                       <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", ($context["key"] + 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Ano</label>
                <select name=\"anio_inicial\" id=\"anio_inicial\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios"]) ? $context["anios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 31
            echo "                       <option value=\"";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Mês</label>
                <select name=\"mes_final\" id=\"mes_final\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["meses"]) ? $context["meses"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 39
            echo "                       <option value=\"";
            echo twig_escape_filter($this->env, sprintf("%02d", ($context["key"] + 1)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Ano</label>
                <select name=\"anio_final\" id=\"anio_final\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["anios"]) ? $context["anios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["anio"]) {
            // line 47
            echo "                       <option value=\"";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["anio"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </select>
            </div>
        </div>
        <br/><br/>
        <div class=\"form-body\">
            <div class=\"form-group row\">
                <div class=\"col-md-8 col-md-offset-4\">
                    <select multiple=\"multiple\" class=\"multi-select\" id=\"users\" name=\"users\">
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) ? $context["usuarios"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 58
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "co_usuario", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "no_usuario", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    </select>
                </div>
            </div>
            <div class=\"form-actions\" style=\"text-align: center\">
                <button type=\"button\" id=\"relatorio\" class=\"btn purple uppercase\">relatorio</button>
                <button type=\"button\" id=\"grafico\" class=\"btn red uppercase\">grafico</button>
                <button type=\"button\" id=\"pizza\" class=\"btn yellow uppercase\">pizza</button>
            </div>
        </div>
        <div id=\"content\" style=\"display:block\">
            <!-- INICIO TABLA -->

            <!---- FIN TABLA-->
        </div>
    </div>
";
    }

    // line 76
    public function block_javascript($context, array $blocks = array())
    {
        // line 77
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "script/home.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (public_url() . "script/grafico.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "home/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 78,  192 => 77,  189 => 76,  170 => 60,  159 => 58,  155 => 57,  145 => 49,  134 => 47,  130 => 46,  123 => 41,  112 => 39,  108 => 38,  101 => 33,  90 => 31,  86 => 30,  79 => 25,  68 => 23,  64 => 22,  49 => 9,  46 => 8,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  11 => 1,);
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
    {% set meses = [\"Jan\", \"Fev\", \"Mar\", \"Abr\", \"Mai\", \"Jun\", \"Jul\", \"Ago\", \"Sep\", \"Out\", \"Nov\", \"Dez\"] %}
    {% set anios = [\"2003\", \"2004\", \"2005\", \"2006\", \"2007\"] %}
    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\">CONSULTOR</span>
        </div>
    </div>
    <div class=\"portlet-body form\" style=\"min-height: 800px;\">
        <div class=\"font-dark bold uppercase\">Periodos</div>
        <br/>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Mês</label>
                <select name=\"mes_inicial\" id=\"mes_inicial\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                   {% for key, value in meses %}
                       <option value=\"{{ \"%02d\"|format(key + 1) }}\">{{ value }}</option>
                   {% endfor %}
                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Ano</label>
                <select name=\"anio_inicial\" id=\"anio_inicial\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    {% for anio in anios %}
                       <option value=\"{{ anio }}\">{{ anio }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Mês</label>
                <select name=\"mes_final\" id=\"mes_final\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    {% for key, value in meses %}
                       <option value=\"{{ \"%02d\"|format(key + 1) }}\">{{ value }}</option>
                   {% endfor %}
                </select>
            </div>
            <div class=\"col-md-3\">
                <label for=\"perfil\" class=\"\">Ano</label>
                <select name=\"anio_final\" id=\"anio_final\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    {% for anio in anios %}
                       <option value=\"{{ anio }}\">{{ anio }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <br/><br/>
        <div class=\"form-body\">
            <div class=\"form-group row\">
                <div class=\"col-md-8 col-md-offset-4\">
                    <select multiple=\"multiple\" class=\"multi-select\" id=\"users\" name=\"users\">
                        {% for usuario in usuarios %}
                            <option value=\"{{ usuario.co_usuario }}\">{{ usuario.no_usuario }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"form-actions\" style=\"text-align: center\">
                <button type=\"button\" id=\"relatorio\" class=\"btn purple uppercase\">relatorio</button>
                <button type=\"button\" id=\"grafico\" class=\"btn red uppercase\">grafico</button>
                <button type=\"button\" id=\"pizza\" class=\"btn yellow uppercase\">pizza</button>
            </div>
        </div>
        <div id=\"content\" style=\"display:block\">
            <!-- INICIO TABLA -->

            <!---- FIN TABLA-->
        </div>
    </div>
{% endblock %}
{% block javascript %}
    <script src=\"{{ public_url()~ 'script/home.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
    <script src=\"{{ public_url()~ 'script/grafico.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "home/home.twig", "/var/www/prototipo/application/views/twig/templates/home/home.twig");
    }
}
