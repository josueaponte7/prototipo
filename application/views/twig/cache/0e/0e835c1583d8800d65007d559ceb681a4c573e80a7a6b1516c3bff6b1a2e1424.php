<?php

/* inicio/inicio.twig */
class __TwigTemplate_5dc7b1d122cadedb50258173a98ed5631d30b8f35127e91e5929ab81316b3aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "inicio/inicio.twig", 1);
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
        echo "    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> Pagina de inicio ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["perfil"]) ? $context["perfil"] : null), "html", null, true);
        echo "</span>
        </div>
    </div>
    <div class=\"portlet-body form\" style=\"height:500px;\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">Materias</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-green icon-book-open\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["materia"]) ? $context["materia"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["materia"]) ? $context["materia"] : null), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">REACTIVOS</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-red fa fa-cubes\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["reactivos"]) ? $context["reactivos"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["reactivos"]) ? $context["reactivos"] : null), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">PREGUNTAS</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-blue fa fa-newspaper-o\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["preguntas"]) ? $context["preguntas"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["preguntas"]) ? $context["preguntas"] : null), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"treactivo\">
            <thead>
                <tr>
                    <th>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#treactivo .checkboxes\"/>
                            <span></span>
                        </label>
                    </th>
                    <th>#</th>
                    <th>Reactivo</th>
                    <th>Estado</th>
                    <th>Materia</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listar"]) ? $context["listar"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 67
            echo "                    ";
            $context["estado"] = "Enviado";
            // line 68
            echo "                    ";
            if (($this->getAttribute($context["lista"], "estado", array()) == 2)) {
                // line 69
                echo "                        ";
                $context["estado"] = "Borrador";
                // line 70
                echo "                    ";
            }
            // line 71
            echo "                    <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                                <span></span>
                            </label>
                        </td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "reactivo", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 80
            echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : null), "html", null, true);
            echo " </td>
                        <td> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "materia", array()), "html", null, true);
            echo " </td>
                        <td>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-xs green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Accion
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right mini\" role=\"menu\">
                                    <li>
                                        <a href=\"\" class=\"asignar btn btn-sm green\" style=\"color: #FFFFFF\">
                                            Asignar
                                            ";
            // line 92
            echo "                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class=\"revocar btn btn-sm green\" style=\"color: #FFFFFF\">
                                            Revocar
                                            ";
            // line 98
            echo "                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 109
    public function block_javascript($context, array $blocks = array())
    {
        // line 110
        echo "
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, (public_url() . "script/inicio.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "inicio/inicio.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 111,  229 => 110,  226 => 109,  219 => 105,  199 => 98,  192 => 92,  179 => 81,  175 => 80,  171 => 79,  167 => 78,  160 => 74,  151 => 71,  148 => 70,  145 => 69,  142 => 68,  139 => 67,  122 => 66,  94 => 43,  78 => 32,  62 => 21,  48 => 10,  43 => 7,  40 => 6,  33 => 4,  30 => 3,  11 => 1,);
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
            <span class=\"caption-subject bold uppercase\"> Pagina de inicio {{ perfil}}</span>
        </div>
    </div>
    <div class=\"portlet-body form\" style=\"height:500px;\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">Materias</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-green icon-book-open\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"{{ materia }}\">{{ materia }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">REACTIVOS</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-red fa fa-cubes\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"{{ reactivos }}\">{{ reactivos }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
                <div class=\"widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered\">
                    <h4 class=\"widget-thumb-heading\">PREGUNTAS</h4>
                    <div class=\"widget-thumb-wrap\">
                        <i class=\"widget-thumb-icon bg-blue fa fa-newspaper-o\"></i>
                        <div class=\"widget-thumb-body\">
                            <span class=\"widget-thumb-body-stat\" data-counter=\"counterup\" data-value=\"{{ preguntas }}\">{{ preguntas }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"treactivo\">
            <thead>
                <tr>
                    <th>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#treactivo .checkboxes\"/>
                            <span></span>
                        </label>
                    </th>
                    <th>#</th>
                    <th>Reactivo</th>
                    <th>Estado</th>
                    <th>Materia</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                {% for lista in listar %}
                    {% set estado = 'Enviado' %}
                    {% if lista.estado == 2 %}
                        {% set estado = 'Borrador' %}
                    {% endif %}
                    <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                                <span></span>
                            </label>
                        </td>
                        <td>{{ '%02d'|format(loop.index) }}</td>
                        <td> {{ lista.reactivo }} </td>
                        <td> {{ estado }} </td>
                        <td> {{ lista.materia }} </td>
                        <td>
                            <div class=\"btn-group\">
                                <button class=\"btn btn-xs green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Accion
                                    <i class=\"fa fa-angle-down\"></i>
                                </button>
                                <ul class=\"dropdown-menu pull-right mini\" role=\"menu\">
                                    <li>
                                        <a href=\"\" class=\"asignar btn btn-sm green\" style=\"color: #FFFFFF\">
                                            Asignar
                                            {# <i class=\"icon-action-undo\"></i>  #}
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"\" class=\"revocar btn btn-sm green\" style=\"color: #FFFFFF\">
                                            Revocar
                                            {# <i class=\"icon-action-redo\"></i>  #}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascript %}

<script src=\"{{ public_url()~ 'script/inicio.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "inicio/inicio.twig", "/var/www/reactivos/application/views/twig/templates/inicio/inicio.twig");
    }
}
