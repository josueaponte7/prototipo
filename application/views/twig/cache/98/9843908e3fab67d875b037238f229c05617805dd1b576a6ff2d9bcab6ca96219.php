<?php

/* configuracion/docente.twig */
class __TwigTemplate_dbe44f6d11f24b700c89d78846d4cadf628d77be79b9dacf3e8d9d2d9daeaff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "configuracion/docente.twig", 1);
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "configuracion/docente.twig", 2);
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
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"
                data-toggle=\"dropdown\"> Accion
                <i class=\"fa fa-angle-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right mini\">
                <li>
                    <a href=\"\" id=\"asignar\">
                        <i class=\"icon-action-undo\"></i> Asignar
                    </a>
                </li>
                <li>
                    <a href=\"\" id=\"revocar\">
                        <i class=\"icon-action-redo\"></i> Revocar
                    </a>
                </li>
                <li>
                    <a href=\"\" id=\"eliminar\">
                        <i class=\"fa fa-trash-o\"></i> Eliminar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=\"portlet-body form\">
    <div id=\"div-form\">
        ";
        // line 48
        echo $context["forms"]->getform_open("frmmateria", "frmmateria form-horizontal");
        echo "
        ";
        // line 49
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
        ";
        // line 50
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
        <div class=\"row form-group\">
            <div class=\"col-md-4 col-md-offset-4\">
                ";
        // line 53
        echo $context["forms"]->getlabel(array("id" => "perfil", "content" => "Materia"));
        echo "
                <select name=\"materia_id\" id=\"materia_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    <option value=\"0\">Seleccione</option>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materias"]) ? $context["materias"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
            // line 57
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "materia", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                </select>
            </div>
        </div>
    </div>
    <div class=\"form-actions\" style=\"text-align: center\">
        ";
        // line 64
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Asignar");
        echo "
        ";
        // line 65
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn btn-danger uppercase")), "Cancelar");
        echo "
    </div>
</form>
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tmateria\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tmateria .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Materia</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 83
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
            // line 84
            echo "            <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                <td>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                        <span></span>
                    </label>
                </td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                <td> ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "materia", array()), "html", null, true);
            echo " </td>
                <td>
                    <div class=\"btn-group\">
                        <button class=\"btn btn-xs green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Accion
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right mini\" role=\"menu\">
                            <li>
                                <a href=\"\" class=\"revocar\">
                                    <i class=\"icon-action-redo\"></i> Revocar
                                </a>
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
        // line 109
        echo "    </tbody>
</table>
</div>

<div id=\"responsive\" class=\"modal fade btn-lg\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

        </div>
    </div>
</div>
";
    }

    // line 121
    public function block_javascript($context, array $blocks = array())
    {
        // line 122
        echo "
    <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, (public_url() . "script/docente_materia.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "configuracion/docente.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 123,  252 => 122,  249 => 121,  234 => 109,  203 => 92,  199 => 91,  192 => 87,  183 => 84,  166 => 83,  145 => 65,  141 => 64,  134 => 59,  123 => 57,  119 => 56,  113 => 53,  107 => 50,  103 => 49,  99 => 48,  66 => 18,  61 => 15,  58 => 14,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"
                data-toggle=\"dropdown\"> Accion
                <i class=\"fa fa-angle-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right mini\">
                <li>
                    <a href=\"\" id=\"asignar\">
                        <i class=\"icon-action-undo\"></i> Asignar
                    </a>
                </li>
                <li>
                    <a href=\"\" id=\"revocar\">
                        <i class=\"icon-action-redo\"></i> Revocar
                    </a>
                </li>
                <li>
                    <a href=\"\" id=\"eliminar\">
                        <i class=\"fa fa-trash-o\"></i> Eliminar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class=\"portlet-body form\">
    <div id=\"div-form\">
        {{ forms.form_open('frmmateria', 'frmmateria form-horizontal') }}
        {{ forms.token(token) }}
        {{ forms.token(token,'token') }}
        <div class=\"row form-group\">
            <div class=\"col-md-4 col-md-offset-4\">
                {{ forms.label({'id':'perfil', 'content':'Materia'}) }}
                <select name=\"materia_id\" id=\"materia_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    <option value=\"0\">Seleccione</option>
                    {% for materia in materias %}
                        <option value=\"{{ materia.id }}\">{{ materia.materia }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
    </div>
    <div class=\"form-actions\" style=\"text-align: center\">
        {{ forms.button({'attr':{'id':'guardar', 'class':'btn green uppercase'}}, 'Asignar') }}
        {{ forms.button({'attr':{'id':'cancelar', 'class':'btn btn-danger uppercase'}}, 'Cancelar') }}
    </div>
</form>
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tmateria\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tmateria .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Materia</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        {% for lista in listar %}
            <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                <td>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                        <span></span>
                    </label>
                </td>
                <td>{{ '%02d'|format(loop.index) }}</td>
                <td> {{ lista.materia }} </td>
                <td>
                    <div class=\"btn-group\">
                        <button class=\"btn btn-xs green dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-expanded=\"false\"> Accion
                            <i class=\"fa fa-angle-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu pull-right mini\" role=\"menu\">
                            <li>
                                <a href=\"\" class=\"revocar\">
                                    <i class=\"icon-action-redo\"></i> Revocar
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

<div id=\"responsive\" class=\"modal fade btn-lg\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">

        </div>
    </div>
</div>
{% endblock %}
{% block javascript %}

    <script src=\"{{ public_url()~ 'script/docente_materia.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "configuracion/docente.twig", "/var/www/reactivos/application/views/twig/templates/configuracion/docente.twig");
    }
}
