<?php

/* inicio/prueba.twig */
class __TwigTemplate_868e22856db39ad79f9f6b812f24743bfd547987e33cd294a09c0cf2af738745 extends Twig_Template
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
    <h4 class=\"modal-title\">Responsive & Scrollable</h4>
</div>
<div class=\"portlet light bordered\">
    <div class=\"portlet-title\">
        <div class=\"caption font-dark\">
            <i class=\"icon-settings font-dark\"></i>
            <span class=\"caption-subject bold uppercase\"> Managed Table ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</span>
        </div>
    </div>
    <div class=\"portlet-body\">
        <div class=\"table-toolbar\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"btn-group\">
                        <button id=\"nuevo\" class=\"btn sbold green\"> Add New
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
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tprofesores .checkboxes\"/>
                            <span></span>
                        </label>
                    </th>
                    <th>#</th>
                    <th>Materia</th>
                    <th>Docentes</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"odd gradeX\" id=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>uuu</td>
                    <td> hhh </td>
                    <td> kkk </td>
                    <td> hola </td>
                </tr>
                <tr class=\"odd gradeX\" id=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lista"]) ? $context["lista"] : null), "id", array()), "html", null, true);
        echo "\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>qqq</td>
                    <td>oo</td>
                    <td>uuu</td>
                    <td>mana</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, (public_url() . "script/profesores.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>";
    }

    public function getTemplateName()
    {
        return "inicio/prueba.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 77,  100 => 64,  92 => 61,  80 => 52,  72 => 49,  38 => 18,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style type=\"text/css\">
    .dataTables_info{
        font-size: 12px;
    }
    .dataTables_paginate ul li a{
        font-size: 12px;
    }
</style>

<div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"></button>
    <h4 class=\"modal-title\">Responsive & Scrollable</h4>
</div>
<div class=\"portlet light bordered\">
    <div class=\"portlet-title\">
        <div class=\"caption font-dark\">
            <i class=\"icon-settings font-dark\"></i>
            <span class=\"caption-subject bold uppercase\"> Managed Table {{ id }}</span>
        </div>
    </div>
    <div class=\"portlet-body\">
        <div class=\"table-toolbar\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"btn-group\">
                        <button id=\"nuevo\" class=\"btn sbold green\"> Add New
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
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tprofesores .checkboxes\"/>
                            <span></span>
                        </label>
                    </th>
                    <th>#</th>
                    <th>Materia</th>
                    <th>Docentes</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>uuu</td>
                    <td> hhh </td>
                    <td> kkk </td>
                    <td> hola </td>
                </tr>
                <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>qqq</td>
                    <td>oo</td>
                    <td>uuu</td>
                    <td>mana</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src=\"{{ public_url()~ 'script/profesores.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>", "inicio/prueba.twig", "/var/www/reactivos/application/views/twig/templates/inicio/prueba.twig");
    }
}
