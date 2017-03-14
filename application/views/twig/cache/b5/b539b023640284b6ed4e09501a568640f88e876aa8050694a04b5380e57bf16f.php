<?php

/* registro/reactivos.twig */
class __TwigTemplate_48a442a9ddf542ae2e3a24bfb63347ffe50fb8037a1cfe359615934484c718a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "registro/reactivos.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "registro/reactivos.twig", 2);
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
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <style type=\"text/css\">
            .mini{
                min-width: 100px;
            }

        </style>
    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</span>
        </div>
        <div class=\"actions\">
            <div class=\"btn-group\">
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"data-toggle=\"dropdown\"> Accion
                <i class=\"fa fa-angle-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right mini\">
                <li >
                    <a class=\"btn btn-sm green\" style=\"color: #FFFFFF\" href=\"\" id=\"eliminar\">
                        Eliminar
                        ";
        // line 30
        echo "                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"portlet-body form\">
        <div id=\"div-form\">
            ";
        // line 38
        echo $context["forms"]->getform_open("frmreactivo", "frmreactivo");
        echo "
            ";
        // line 39
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
            ";
        // line 40
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t";
        // line 43
        echo $context["forms"]->getlabel(array("id" => "materia_id", "class" => "control-label", "content" => "Materia"));
        echo "
\t\t\t\t<select name=\"materia_id\" id=\"materia_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
\t\t\t\t\t<option value=\"0\">Seleccione</option>
\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materia"]) ? $context["materia"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 47
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "materia", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3\">
                    ";
        // line 54
        echo $context["forms"]->getlabel(array("id" => "reactivo", "content" => "Reactivo"));
        echo "
                    ";
        // line 55
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "reactivo", "class" => "form-control", "placeholder" => "Reactivo", "data" => array("validate" => "required|max(255)|min(4)", "type" => "alphaspace", "text" => "upper"))));
        echo "
                </div>
            </div>
        </div>
        <div class=\"form-actions\" style=\"text-align: center\">
            ";
        // line 60
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
        echo "
            ";
        // line 61
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn btn-danger uppercase")), "Cancelar");
        echo "
        </div>
    </form>
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
        // line 81
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
            // line 82
            echo "                ";
            $context["estado"] = "Enviado";
            // line 83
            echo "                ";
            if (($this->getAttribute($context["lista"], "estado", array()) == 2)) {
                // line 84
                echo "                    ";
                $context["estado"] = "Borrador";
                // line 85
                echo "                ";
            }
            // line 86
            echo "                <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>";
            // line 93
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                    <td> ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "reactivo", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : null), "html", null, true);
            echo " </td>
                    <td> ";
            // line 96
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
            // line 107
            echo "                                    </a>
                                </li>
                                <li>
                                    <a href=\"\" class=\"revocar btn btn-sm green\" style=\"color: #FFFFFF\">
                                        Revocar
                                        ";
            // line 113
            echo "                                    </a>
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
        // line 120
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 124
    public function block_javascript($context, array $blocks = array())
    {
        // line 125
        echo "
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (public_url() . "script/reactivo.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro/reactivos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 126,  278 => 125,  275 => 124,  268 => 120,  248 => 113,  241 => 107,  228 => 96,  224 => 95,  220 => 94,  216 => 93,  209 => 89,  200 => 86,  197 => 85,  194 => 84,  191 => 83,  188 => 82,  171 => 81,  148 => 61,  144 => 60,  136 => 55,  132 => 54,  125 => 49,  114 => 47,  110 => 46,  104 => 43,  98 => 40,  94 => 39,  90 => 38,  80 => 30,  66 => 18,  61 => 15,  58 => 14,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
    {% block stylesheets %}
        <style type=\"text/css\">
            .mini{
                min-width: 100px;
            }

        </style>
    {% endblock %}
{% endblock %}
{% block content %}
    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> {{ titulo }}</span>
        </div>
        <div class=\"actions\">
            <div class=\"btn-group\">
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"data-toggle=\"dropdown\"> Accion
                <i class=\"fa fa-angle-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right mini\">
                <li >
                    <a class=\"btn btn-sm green\" style=\"color: #FFFFFF\" href=\"\" id=\"eliminar\">
                        Eliminar
                        {# <i class=\"fa fa-trash-o\" style=\"color:#FFFFFF\"></i>  #}
                    </a>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"portlet-body form\">
        <div id=\"div-form\">
            {{ forms.form_open('frmreactivo', 'frmreactivo') }}
            {{ forms.token(token) }}
            {{ forms.token(token,'token') }}
\t\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t{{ forms.label({'id':'materia_id', 'class':'control-label', 'content':'Materia'}) }}
\t\t\t\t<select name=\"materia_id\" id=\"materia_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
\t\t\t\t\t<option value=\"0\">Seleccione</option>
\t\t\t\t\t{% for modulo in materia %}
\t\t\t\t\t\t<option value=\"{{ modulo.id }}\">{{ modulo.materia }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
            <div class=\"row\">
                <div class=\"col-md-6 col-md-offset-3\">
                    {{ forms.label({'id':'reactivo', 'content':'Reactivo'}) }}
                    {{ forms.input_text({'attr':{'name': 'reactivo', 'class':'form-control', 'placeholder':'Reactivo','data':{'validate':'required|max(255)|min(4)', 'type':'alphaspace', 'text':'upper'}}}) }}
                </div>
            </div>
        </div>
        <div class=\"form-actions\" style=\"text-align: center\">
            {{ forms.button({'attr':{'id':'guardar', 'class':'btn green uppercase'}}, 'Guardar') }}
            {{ forms.button({'attr':{'id':'cancelar', 'class':'btn btn-danger uppercase'}}, 'Cancelar') }}
        </div>
    </form>
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

<script src=\"{{ public_url()~ 'script/reactivo.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "registro/reactivos.twig", "/var/www/reactivos/application/views/twig/templates/registro/reactivos.twig");
    }
}
