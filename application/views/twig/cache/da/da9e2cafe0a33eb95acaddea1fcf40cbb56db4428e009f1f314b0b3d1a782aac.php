<?php

/* registro/inicio.twig */
class __TwigTemplate_d9ed0fb6beaf8cc38a1d66417fa73597b2fa72d1018ef7a7403d9399f0c8bf68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "registro/inicio.twig", 1);
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
        // line 2
        $context["forms"] = $this->loadTemplate("base/form.twig", "registro/inicio.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\" media=\"screen\">
        .contador{
            text-align: center;
            font-size: 20px;
        }
    </style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\">PREGUNTAS</span>
        </div>
    </div>
    <div class=\"portlet-body form\" >
        <div class=\"row\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preguntas"]) ? $context["preguntas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pregunta"]) {
            // line 22
            echo "                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 preguntas\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "id", array()), "html", null, true);
            echo "\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" >
                            <h4 style=\"font-size:12px;font-weight:600\" class=\"panel-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "reactivo", array()), "html", null, true);
            echo "</h4>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"widget-thumb-wrap contador\">
                                <label for=\"\">PREGUNTAS</label>
                                <div class=\"widget-thumb-body\">
                                    <div class=\"widget-thumb-body-stat \" data-counter=\"counterup\" data-value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "total", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "total", array()), "html", null, true);
            echo "</div>
                                    <div>TOTAL</div>
                                    <div>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["pregunta"], "materia", array()), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-actions\" style=\"text-align: center\">
                            ";
            // line 38
            echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
            echo "
                            ";
            // line 39
            echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn btn-danger uppercase")), "Cancelar");
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pregunta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
";
    }

    // line 47
    public function block_javascript($context, array $blocks = array())
    {
        // line 48
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "script/preguntas.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro/inicio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  118 => 47,  112 => 44,  101 => 39,  97 => 38,  89 => 33,  82 => 31,  73 => 25,  66 => 22,  62 => 21,  52 => 13,  49 => 12,  36 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
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
{% import \"base/form.twig\" as forms %}
{% block head %}
    {{ parent() }}
    <style type=\"text/css\" media=\"screen\">
        .contador{
            text-align: center;
            font-size: 20px;
        }
    </style>
{% endblock %}
{% block content %}
    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\">PREGUNTAS</span>
        </div>
    </div>
    <div class=\"portlet-body form\" >
        <div class=\"row\">
            {% for pregunta in preguntas %}
                <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12 preguntas\" id=\"{{ pregunta.id }}\">
                    <div class=\"panel panel-primary\">
                        <div class=\"panel-heading\" >
                            <h4 style=\"font-size:12px;font-weight:600\" class=\"panel-title\">{{ pregunta.reactivo }}</h4>
                        </div>
                        <div class=\"panel-body\">
                            <div class=\"widget-thumb-wrap contador\">
                                <label for=\"\">PREGUNTAS</label>
                                <div class=\"widget-thumb-body\">
                                    <div class=\"widget-thumb-body-stat \" data-counter=\"counterup\" data-value=\"{{ pregunta.total }}\">{{ pregunta.total }}</div>
                                    <div>TOTAL</div>
                                    <div>{{ pregunta.materia }}</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-actions\" style=\"text-align: center\">
                            {{ forms.button({'attr':{'id':'guardar', 'class':'btn green uppercase'}}, 'Guardar') }}
                            {{ forms.button({'attr':{'id':'cancelar', 'class':'btn btn-danger uppercase'}}, 'Cancelar') }}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
{% block javascript %}
    <script src=\"{{ public_url()~ 'script/preguntas.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "registro/inicio.twig", "/var/www/reactivos/application/views/twig/templates/registro/inicio.twig");
    }
}
