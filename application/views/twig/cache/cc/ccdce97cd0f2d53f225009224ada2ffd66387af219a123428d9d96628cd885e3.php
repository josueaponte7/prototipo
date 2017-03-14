<?php

/* registro/respuesta.twig */
class __TwigTemplate_4a8899eb53018b6cf641bdce62a43fb9bd2f5b43cf015680bd1d2d39f49ee67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "registro/respuesta.twig", 1);
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "registro/respuesta.twig", 2);
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
        echo "
    ";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : null), "html", null, true);
        echo "</span>
        </div>
        <div class=\"actions\">
            <div class=\"btn-group\">
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"
                data-toggle=\"dropdown\"> Accion
                <i class=\"fa fa-angle-down\"></i>
            </a>
            <ul class=\"dropdown-menu pull-right\">
                <li>
                    <a href=\"\" id=\"eliminar\">
                        <i class=\"fa fa-trash-o\"></i> Eliminar
                    </a>
                </li>
                ";
        // line 40
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"portlet-body form\">
        <div id=\"div-form\">
            ";
        // line 46
        echo $context["forms"]->getform_open("frmrespuesta", "frmrespuesta");
        echo "
            ";
        // line 47
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
            ";
        // line 48
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 51
        echo $context["forms"]->getlabel(array("id" => "pregunta_id", "class" => "control-label", "content" => "Pregunta"));
        echo "
                    <select name=\"pregunta_id\" id=\"pregunta_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                       <option value=\"0\">Seleccione</option>
                       ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pregunta"]) ? $context["pregunta"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 55
            echo "                          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "pregunta", array()), "html", null, true);
            echo "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                  </select>
              </div>
              <div class=\"col-md-6\">
                ";
        // line 60
        echo $context["forms"]->getlabel(array("id" => "respuestas", "content" => "Respuesta"));
        echo "
                ";
        // line 61
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "respuestas", "class" => "form-control", "placeholder" => "Respuesta", "data" => array("validate" => "required|max(25)|min(3)", "type" => "alphaspace", "text" => "upper"))));
        echo "
            </div>
            <div class=\"col-md-6\">
                <label for=\"span_small\" class=\"control-label\">Estatus</label>
                <div class=\"clearfix\">
                    <div class=\"clearfix\">
                        <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default active\">Activo
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"1\" checked=\"checked\">
                            </label>
                            <label class=\"btn btn-default\">Inactivo
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"0\">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"form-actions\" style=\"text-align: center\">
        ";
        // line 81
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
        echo "
        ";
        // line 82
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn yellow uppercase")), "Cancelar");
        echo "
    </div>
</form>
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"trespuesta\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#trespuesta .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Respuesta</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 100
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
            // line 101
            echo "            ";
            $context["estatus"] = "Activo";
            // line 102
            echo "                ";
            if (($this->getAttribute($context["lista"], "activo", array()) == 0)) {
                // line 103
                echo "                    ";
                $context["estatus"] = "Inactivo";
                // line 104
                echo "                    ";
            }
            // line 105
            echo "                    <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                                <span></span>
                            </label>
                        </td>
                        <td>";
            // line 112
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "respuestas", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["estatus"]) ? $context["estatus"] : null), "html", null, true);
            echo " </td>
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
        // line 117
        echo "            </tbody>
        </table>
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
        echo twig_escape_filter($this->env, (public_url() . "script/respuesta.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro/respuesta.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 123,  258 => 122,  255 => 121,  248 => 117,  231 => 114,  227 => 113,  223 => 112,  216 => 108,  207 => 105,  204 => 104,  201 => 103,  198 => 102,  195 => 101,  178 => 100,  157 => 82,  153 => 81,  130 => 61,  126 => 60,  121 => 57,  110 => 55,  106 => 54,  100 => 51,  94 => 48,  90 => 47,  86 => 46,  78 => 40,  61 => 13,  56 => 10,  53 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
            <ul class=\"dropdown-menu pull-right\">
                <li>
                    <a href=\"\" id=\"eliminar\">
                        <i class=\"fa fa-trash-o\"></i> Eliminar
                    </a>
                </li>
                {# <li>
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-pencil\"></i> Edit
                    </a>
                </li>
                    <li>
                        <a href=\"javascript:;\">
                            <i class=\"fa fa-ban\"></i> Ban </a>
                    </li>
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"javascript:;\"> Make admin </a>
                    </li>#}
                </ul>
            </div>
        </div>
    </div>
    <div class=\"portlet-body form\">
        <div id=\"div-form\">
            {{ forms.form_open('frmrespuesta', 'frmrespuesta') }}
            {{ forms.token(token) }}
            {{ forms.token(token,'token') }}
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {{ forms.label({'id':'pregunta_id', 'class':'control-label', 'content':'Pregunta'}) }}
                    <select name=\"pregunta_id\" id=\"pregunta_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                       <option value=\"0\">Seleccione</option>
                       {% for modulo in pregunta %}
                          <option value=\"{{ modulo.id }}\">{{ modulo.pregunta }}</option>
                      {% endfor %}
                  </select>
              </div>
              <div class=\"col-md-6\">
                {{ forms.label({'id':'respuestas', 'content':'Respuesta'}) }}
                {{ forms.input_text({'attr':{'name': 'respuestas', 'class':'form-control', 'placeholder':'Respuesta','data':{'validate':'required|max(25)|min(3)', 'type':'alphaspace', 'text':'upper'}}}) }}
            </div>
            <div class=\"col-md-6\">
                <label for=\"span_small\" class=\"control-label\">Estatus</label>
                <div class=\"clearfix\">
                    <div class=\"clearfix\">
                        <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default active\">Activo
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"1\" checked=\"checked\">
                            </label>
                            <label class=\"btn btn-default\">Inactivo
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"0\">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"form-actions\" style=\"text-align: center\">
        {{ forms.button({'attr':{'id':'guardar', 'class':'btn green uppercase'}}, 'Guardar') }}
        {{ forms.button({'attr':{'id':'cancelar', 'class':'btn yellow uppercase'}}, 'Cancelar') }}
    </div>
</form>
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"trespuesta\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#trespuesta .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Respuesta</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        {% for lista in listar %}
            {% set estatus = 'Activo' %}
                {% if lista.activo == 0 %}
                    {% set estatus = 'Inactivo' %}
                    {% endif %}
                    <tr class=\"odd gradeX\" id=\"{{ lista.id }}\" data-id=\"{{ lista.id }}\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"{{ lista.id }}\"/>
                                <span></span>
                            </label>
                        </td>
                        <td>{{ '%02d'|format(loop.index) }}</td>
                        <td> {{ lista.respuestas }} </td>
                        <td> {{ estatus }} </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascript %}

    <script src=\"{{ public_url()~ 'script/respuesta.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "registro/respuesta.twig", "/var/www/appreactivos/application/views/twig/templates/registro/respuesta.twig");
    }
}
