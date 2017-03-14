<?php

/* registro/preguntas.twig */
class __TwigTemplate_b5913bc02deb55de1f552365b1539dc50426cb8ee982dfe5c35bb7cd743db6f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "registro/preguntas.twig", 1);
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "registro/preguntas.twig", 2);
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
            </ul>
        </div>
    </div>
</div>
<div class=\"portlet-body form\">
    <div id=\"div-form\">
        ";
        // line 33
        echo $context["forms"]->getform_open("frmpregunta", "frmpregunta");
        echo "
        ";
        // line 34
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
        ";
        // line 35
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
        <div class=\"row\">
          <div class=\"col-md-6\">
            ";
        // line 38
        echo $context["forms"]->getlabel(array("id" => "pregunta", "content" => "Reactivo"));
        echo "
            ";
        // line 39
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "reactivo", "class" => "form-control", "value" => $this->getAttribute((isset($context["pregunta"]) ? $context["pregunta"] : null), "reactivo", array()))));
        echo "
          </div>
        </div>
  <div class=\"row\">
     <div class=\"col-md-6\">
        ";
        // line 44
        echo $context["forms"]->getlabel(array("id" => "nivel_taxonomico_id", "class" => "control-label", "content" => "Nivel Taxonómico"));
        echo "
        <select name=\"nivel_taxonomico_id\" id=\"nivel_taxonomico_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
           <option value=\"0\">Seleccione</option>
           ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["taxonomico"]) ? $context["taxonomico"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 48
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "taxonomico", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "      </select>
  </div>
  <div class=\"col-md-6\">
    ";
        // line 53
        echo $context["forms"]->getlabel(array("id" => "conocimiento_id", "class" => "control-label", "content" => "Conocimiento"));
        echo "
    <select name=\"conocimiento_id\" id=\"conocimiento_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conocimiento"]) ? $context["conocimiento"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 57
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "conocimiento", array()), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "  </select>
</div>
</div>
<div class=\"row\">
 <div class=\"col-md-6\">
    ";
        // line 64
        echo $context["forms"]->getlabel(array("id" => "compresion_id", "class" => "control-label", "content" => "Comprensión"));
        echo "
    <select name=\"compresion_id\" id=\"compresion_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comprension"]) ? $context["comprension"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 68
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "comprension", array()), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </select>
</div>
<div class=\"col-md-6\">
    ";
        // line 73
        echo $context["forms"]->getlabel(array("id" => "aplicacion_id", "class" => "control-label", "content" => "Aplicación"));
        echo "
    <select name=\"aplicacion_id\" id=\"aplicacion_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aplicacion"]) ? $context["aplicacion"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 77
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "aplicacion", array()), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  </select>
</div>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        ";
        // line 85
        echo $context["forms"]->getlabel(array("id" => "pregunta", "content" => "Pregunta"));
        echo "
        ";
        // line 86
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "pregunta", "class" => "form-control", "placeholder" => "Pregunta", "data" => array("validate" => "required|max(255)|min(4)", "type" => "alphaspace", "text" => "upper"))));
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
        // line 106
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
        echo "
    ";
        // line 107
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn yellow uppercase")), "Cancelar");
        echo "
</div>
</form>
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tpregunta\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tpregunta .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Pregunta</th>
            <th>Estatus</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 125
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
            // line 126
            echo "            ";
            $context["estatus"] = "Activo";
            // line 127
            echo "                ";
            if (($this->getAttribute($context["lista"], "activo", array()) == 0)) {
                // line 128
                echo "                    ";
                $context["estatus"] = "Inactivo";
                // line 129
                echo "                    ";
            }
            // line 130
            echo "                    <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                        <td>
                            <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                                <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                                <span></span>
                            </label>
                        </td>
                        <td>";
            // line 137
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                        <td> ";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "pregunta", array()), "html", null, true);
            echo " </td>
                        <td> ";
            // line 139
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
        // line 142
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 146
    public function block_javascript($context, array $blocks = array())
    {
        // line 147
        echo "
    <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, (public_url() . "script/preguntas.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "registro/preguntas.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 148,  351 => 147,  348 => 146,  341 => 142,  324 => 139,  320 => 138,  316 => 137,  309 => 133,  300 => 130,  297 => 129,  294 => 128,  291 => 127,  288 => 126,  271 => 125,  250 => 107,  246 => 106,  223 => 86,  219 => 85,  211 => 79,  200 => 77,  196 => 76,  190 => 73,  185 => 70,  174 => 68,  170 => 67,  164 => 64,  157 => 59,  146 => 57,  142 => 56,  136 => 53,  131 => 50,  120 => 48,  116 => 47,  110 => 44,  102 => 39,  98 => 38,  92 => 35,  88 => 34,  84 => 33,  61 => 13,  56 => 10,  53 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
            </ul>
        </div>
    </div>
</div>
<div class=\"portlet-body form\">
    <div id=\"div-form\">
        {{ forms.form_open('frmpregunta', 'frmpregunta') }}
        {{ forms.token(token) }}
        {{ forms.token(token,'token') }}
        <div class=\"row\">
          <div class=\"col-md-6\">
            {{ forms.label({'id':'pregunta', 'content':'Reactivo'}) }}
            {{ forms.input_text({'attr':{'name': 'reactivo', 'class':'form-control', 'value': pregunta.reactivo }}) }}
          </div>
        </div>
  <div class=\"row\">
     <div class=\"col-md-6\">
        {{ forms.label({'id':'nivel_taxonomico_id', 'class':'control-label', 'content':'Nivel Taxonómico'}) }}
        <select name=\"nivel_taxonomico_id\" id=\"nivel_taxonomico_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
           <option value=\"0\">Seleccione</option>
           {% for modulo in taxonomico %}
              <option value=\"{{ modulo.id }}\">{{ modulo.taxonomico }}</option>
          {% endfor %}
      </select>
  </div>
  <div class=\"col-md-6\">
    {{ forms.label({'id':'conocimiento_id', 'class':'control-label', 'content':'Conocimiento'}) }}
    <select name=\"conocimiento_id\" id=\"conocimiento_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       {% for modulo in conocimiento %}
          <option value=\"{{ modulo.id }}\">{{ modulo.conocimiento }}</option>
      {% endfor %}
  </select>
</div>
</div>
<div class=\"row\">
 <div class=\"col-md-6\">
    {{ forms.label({'id':'compresion_id', 'class':'control-label', 'content':'Comprensión'}) }}
    <select name=\"compresion_id\" id=\"compresion_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       {% for modulo in comprension %}
          <option value=\"{{ modulo.id }}\">{{ modulo.comprension }}</option>
      {% endfor %}
  </select>
</div>
<div class=\"col-md-6\">
    {{ forms.label({'id':'aplicacion_id', 'class':'control-label', 'content':'Aplicación'}) }}
    <select name=\"aplicacion_id\" id=\"aplicacion_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
       <option value=\"0\">Seleccione</option>
       {% for modulo in aplicacion %}
          <option value=\"{{ modulo.id }}\">{{ modulo.aplicacion }}</option>
      {% endfor %}
  </select>
</div>
</div>

<div class=\"row\">
    <div class=\"col-md-6\">
        {{ forms.label({'id':'pregunta', 'content':'Pregunta'}) }}
        {{ forms.input_text({'attr':{'name': 'pregunta', 'class':'form-control', 'placeholder':'Pregunta','data':{'validate':'required|max(255)|min(4)', 'type':'alphaspace', 'text':'upper'}}}) }}
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
<table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tpregunta\">
    <thead>
        <tr>
            <th>
                <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                    <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tpregunta .checkboxes\"/>
                    <span></span>
                </label>
            </th>
            <th>#</th>
            <th>Pregunta</th>
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
                        <td> {{ lista.pregunta }} </td>
                        <td> {{ estatus }} </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascript %}

    <script src=\"{{ public_url()~ 'script/preguntas.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "registro/preguntas.twig", "/var/www/reactivos/application/views/twig/templates/registro/preguntas.twig");
    }
}
