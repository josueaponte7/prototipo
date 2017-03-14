<?php

/* listas/profesores.twig */
class __TwigTemplate_6dab2202a36c986d1b258ccbcae8e7a4729c72c8a9a0e1f6dbeab05e7410588f extends Twig_Template
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "listas/profesores.twig", 1);
        // line 2
        echo "<style type=\"text/css\">
    .dataTables_info{
        font-size: 12px;
    }
    .dataTables_paginate ul li a{
        font-size: 12px;
    }
</style>
<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
    <h4 class=\"modal-title\">
        Listado de Profesores
    </h4>
</div>
<div class=\"portlet light bordered\">
    <div class=\"portlet-title\">
        <div class=\"caption font-dark\">
            <i class=\"icon-settings font-dark\"></i>
            <span class=\"caption-subject bold uppercase\">
                ";
        // line 21
        if (((isset($context["accion"]) ? $context["accion"] : null) == "asignar")) {
            // line 22
            echo "                    Asignar docentes a materia ";
            echo twig_escape_filter($this->env, (isset($context["materia"]) ? $context["materia"] : null), "html", null, true);
            echo "
                ";
        } else {
            // line 24
            echo "                    Revocar profesores
                ";
        }
        // line 26
        echo "            </span>
        </div>
    </div>
    <div class=\"portlet-body\">
        <div class=\"table-toolbar\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"btn-group\">
                        ";
        // line 34
        echo $context["forms"]->getinput_hidden("materia_id", (isset($context["id"]) ? $context["id"] : null));
        echo "
                        <button id=\"asignar-materia\" class=\"btn sbold green\">Asignar
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tprofesores\">
            <thead>
                <tr>
                    <th>
                        Seleccionar
                        ";
        // line 51
        echo "                    </th>
                    <th>Docentes</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listas"]) ? $context["listas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lista"]) {
            // line 57
            echo "                    <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                                <span></span>
                            </label>
                        </td>
                        <td> ";
            // line 64
            echo twig_escape_filter($this->env, (($this->getAttribute($context["lista"], "first_name", array()) . " ") . $this->getAttribute($context["lista"], "last_name", array())), "html", null, true);
            echo " </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </tbody>
        </table>
    </div>
</div>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, (public_url() . "script/profesores.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>";
    }

    public function getTemplateName()
    {
        return "listas/profesores.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 71,  116 => 67,  107 => 64,  100 => 60,  91 => 57,  87 => 56,  80 => 51,  64 => 34,  54 => 26,  50 => 24,  44 => 22,  42 => 21,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"base/form.twig\" as forms %}
<style type=\"text/css\">
    .dataTables_info{
        font-size: 12px;
    }
    .dataTables_paginate ul li a{
        font-size: 12px;
    }
</style>
<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
    <h4 class=\"modal-title\">
        Listado de Profesores
    </h4>
</div>
<div class=\"portlet light bordered\">
    <div class=\"portlet-title\">
        <div class=\"caption font-dark\">
            <i class=\"icon-settings font-dark\"></i>
            <span class=\"caption-subject bold uppercase\">
                {% if accion == 'asignar' %}
                    Asignar docentes a materia {{ materia }}
                {% else %}
                    Revocar profesores
                {% endif %}
            </span>
        </div>
    </div>
    <div class=\"portlet-body\">
        <div class=\"table-toolbar\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"btn-group\">
                        {{ forms.input_hidden(\"materia_id\",id) }}
                        <button id=\"asignar-materia\" class=\"btn sbold green\">Asignar
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tprofesores\">
            <thead>
                <tr>
                    <th>
                        Seleccionar
                        {# <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tprofesores .checkboxes\"/>
                            <span></span>
                        </label> #}
                    </th>
                    <th>Docentes</th>
                </tr>
            </thead>
            <tbody>
                {% for lista in listas %}
                    <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                                <span></span>
                            </label>
                        </td>
                        <td> {{ lista.first_name ~ \" \" ~ lista.last_name  }} </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
<script src=\"{{ public_url()~ 'script/profesores.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>", "listas/profesores.twig", "/var/www/reactivos/application/views/twig/templates/listas/profesores.twig");
    }
}
