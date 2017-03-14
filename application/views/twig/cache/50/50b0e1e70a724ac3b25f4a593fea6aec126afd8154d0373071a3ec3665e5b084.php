<?php

/* seguridad/modulo.twig */
class __TwigTemplate_632238eaf4930b1d195c3049c9b5a26b02efb34a28c122f5a71e2395db53dbc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "seguridad/modulo.twig", 1);
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "seguridad/modulo.twig", 2);
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
        echo "
    <div class=\"portlet-title\">
        <div class=\"caption font-red-sunglo\">
            <i class=\"icon-settings font-red-sunglo\"></i>
            <span class=\"caption-subject bold uppercase\"> ";
        // line 14
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
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-pencil\"></i> Edit
                    </a>
                </li>
                <li>
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-trash-o\"></i> Delete
                    </a>
                </li>
                    ";
        // line 41
        echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"portlet-body form\">
        ";
        // line 46
        echo $context["forms"]->getform_open("frmmodulo", "formulario");
        echo "
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 49
        echo $context["forms"]->getlabel(array("id" => "modulo", "content" => "Módulo"));
        echo "
                ";
        // line 50
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "modulo", "class" => "form-control", "placeholder" => "Módulo", "data" => array("validate" => "required|max(25)|min(3)", "type" => "alphaspace", "text" => "upper"))));
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 53
        echo $context["forms"]->getlabel(array("id" => "posicion", "content" => "Pósicion"));
        echo "
                ";
        // line 54
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "posicion", "class" => "form-control", "placeholder" => "Pósicion", "style" => "direction: rtl; text-align: left;", "data" => array("validate" => "required|max(25)|min(3)", "type" => "numeric"))));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                ";
        // line 59
        echo $context["forms"]->getlabel(array("id" => "directorios", "class" => "control-label", "content" => "Directorios"));
        echo "
                ";
        // line 60
        echo $context["forms"]->getselect_di("directorios", (isset($context["directories"]) ? $context["directories"] : null));
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 63
        echo $context["forms"]->getlabel(array("id" => "controller", "class" => "control-label", "content" => "Controller"));
        echo "
                <select name=\"controller\" id=\"controller\" class=\"form-control select2\">
                    <option value=\"0\">Seleccione</option>
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 \">
                ";
        // line 71
        echo $context["forms"]->getlabel(array("id" => "route", "class" => "control-label", "content" => "Route"));
        echo "
                ";
        // line 72
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "route", "class" => "form-control", "placeholder" => "Route")));
        echo "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 75
        echo $context["forms"]->getlabel(array("id" => "modulo_id", "class" => "control-label", "content" => "Modulo Padre"));
        echo "
                <select name=\"modulos_id\" id=\"modulos_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    <option value=\"0\">Seleccione</option>
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modulos"]) ? $context["modulos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 79
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "modulo", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-xs-6\" >
                <label for=\"span_small\" class=\"control-label\">Estatus</label>
                <div class=\"clearfix\">
                    <div class=\"clearfix\">
                        <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default active\">
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"1\" checked=\"checked\"> Activo
                            </label>
                            <label class=\"btn btn-default\">
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"0\"> Inactivo
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-actions\" style=\"text-align: center\">
            ";
        // line 102
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
        echo "
            ";
        // line 103
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn yellow uppercase")), "Cancelar");
        echo "
        </div>
    </form>
    <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tmodulo\">
        <thead>
            <tr>
                <th>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tmodulo .checkboxes\"/>
                        <span></span>
                    </label>
                </th>
                <th>#</th>
                <th>Modulo</th>
                <th>Posici&oacute;n</th>
                <th>Estatus</th>
                <th>Sub Modulo</th>
                <th>Posici&oacute;n</th>
                <th>Estatus</th>

            </tr>
        </thead>
        <tbody>
            ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista"]) ? $context["lista"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["modulo"]) {
            // line 127
            echo "                ";
            $context["modul"] = $this->getAttribute($context["modulo"], "modulo", array());
            // line 128
            echo "                ";
            $context["modpo"] = "";
            // line 129
            echo "                ";
            $context["modac"] = "";
            // line 130
            echo "
                ";
            // line 131
            if (($this->getAttribute($context["modulo"], "modulo", array()) == "")) {
                // line 132
                echo "                    ";
                $context["modul"] = $this->getAttribute($context["modulo"], "submodulo", array());
                // line 133
                echo "                    ";
                $context["modpo"] = $this->getAttribute($context["modulo"], "posicion", array());
                // line 134
                echo "                    ";
                $context["modac"] = "Activo";
                // line 135
                echo "                    ";
                if (($this->getAttribute($context["modulo"], "activo", array()) == "f")) {
                    // line 136
                    echo "                        ";
                    $context["modac"] = "Inactivo";
                    // line 137
                    echo "                    ";
                }
                // line 138
                echo "                ";
            }
            // line 139
            echo "
                ";
            // line 140
            $context["submodu"] = "";
            // line 141
            echo "                ";
            $context["submodpo"] = "";
            // line 142
            echo "                ";
            $context["submodac"] = "";
            // line 143
            echo "                ";
            if (($this->getAttribute($context["modulo"], "modulo", array()) != "")) {
                // line 144
                echo "                    ";
                $context["submodu"] = $this->getAttribute($context["modulo"], "submodulo", array());
                // line 145
                echo "                    ";
                $context["submodpo"] = $this->getAttribute($context["modulo"], "posicion", array());
                // line 146
                echo "                        ";
                $context["submodac"] = "Activo";
                // line 147
                echo "                    ";
                if (($this->getAttribute($context["modulo"], "activo", array()) == "f")) {
                    // line 148
                    echo "                        ";
                    $context["submodac"] = "Inactivo";
                    // line 149
                    echo "                        ";
                }
                // line 150
                echo "                ";
            }
            // line 151
            echo "            <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["modulo"], "id", array()), "html", null, true);
            echo "\">
                <td>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\"/>
                        <span></span>
                    </label>
                </td>
                <td>";
            // line 158
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                <td> ";
            // line 159
            echo twig_escape_filter($this->env, (isset($context["modul"]) ? $context["modul"] : null), "html", null, true);
            echo " </td>
                <td> ";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["modpo"]) ? $context["modpo"] : null), "html", null, true);
            echo " </td>
                <td> ";
            // line 161
            echo twig_escape_filter($this->env, (isset($context["modac"]) ? $context["modac"] : null), "html", null, true);
            echo "</td>
                <td> ";
            // line 162
            echo twig_escape_filter($this->env, (isset($context["submodu"]) ? $context["submodu"] : null), "html", null, true);
            echo "</td>
                <td> ";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["submodpo"]) ? $context["submodpo"] : null), "html", null, true);
            echo " </td>
                <td> ";
            // line 164
            echo twig_escape_filter($this->env, (isset($context["submodac"]) ? $context["submodac"] : null), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modulo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 171
    public function block_javascript($context, array $blocks = array())
    {
        // line 172
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "script/modulo.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "seguridad/modulo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 172,  372 => 171,  365 => 167,  348 => 164,  344 => 163,  340 => 162,  336 => 161,  332 => 160,  328 => 159,  324 => 158,  311 => 151,  308 => 150,  305 => 149,  302 => 148,  299 => 147,  296 => 146,  293 => 145,  290 => 144,  287 => 143,  284 => 142,  281 => 141,  279 => 140,  276 => 139,  273 => 138,  270 => 137,  267 => 136,  264 => 135,  261 => 134,  258 => 133,  255 => 132,  253 => 131,  250 => 130,  247 => 129,  244 => 128,  241 => 127,  224 => 126,  198 => 103,  194 => 102,  171 => 81,  160 => 79,  156 => 78,  150 => 75,  144 => 72,  140 => 71,  129 => 63,  123 => 60,  119 => 59,  111 => 54,  107 => 53,  101 => 50,  97 => 49,  91 => 46,  84 => 41,  62 => 14,  56 => 10,  53 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-pencil\"></i> Edit
                    </a>
                </li>
                <li>
                    <a href=\"javascript:;\">
                        <i class=\"fa fa-trash-o\"></i> Delete
                    </a>
                </li>
                    {#<li>
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
        {{ forms.form_open('frmmodulo', 'formulario') }}
        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ forms.label({'id':'modulo', 'content':'Módulo'}) }}
                {{ forms.input_text({'attr':{'name': 'modulo', 'class':'form-control', 'placeholder':'Módulo','data':{'validate':'required|max(25)|min(3)', 'type':'alphaspace', 'text':'upper'}}}) }}
            </div>
            <div class=\"col-md-6\">
                {{ forms.label({'id':'posicion', 'content':'Pósicion'}) }}
                {{ forms.input_text({'attr':{'name': 'posicion', 'class':'form-control', 'placeholder':'Pósicion', 'style':'direction: rtl; text-align: left;','data':{'validate':'required|max(25)|min(3)', 'type':'numeric'}}}) }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6\">
                {{ forms.label({'id':'directorios', 'class':'control-label', 'content':'Directorios'}) }}
                {{ forms.select_di('directorios', directories) }}
            </div>
            <div class=\"col-md-6\">
                {{ forms.label({'id':'controller', 'class':'control-label', 'content':'Controller'}) }}
                <select name=\"controller\" id=\"controller\" class=\"form-control select2\">
                    <option value=\"0\">Seleccione</option>
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-6 \">
                {{ forms.label({'id':'route', 'class':'control-label', 'content':'Route'}) }}
                {{ forms.input_text({'attr':{'name': 'route', 'class':'form-control', 'placeholder':'Route'}}) }}
            </div>
            <div class=\"col-md-6\">
                {{ forms.label({'id':'modulo_id', 'class':'control-label', 'content':'Modulo Padre'}) }}
                <select name=\"modulos_id\" id=\"modulos_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                    <option value=\"0\">Seleccione</option>
                    {% for modulo in modulos %}
                        <option value=\"{{ modulo.id }}\">{{ modulo.modulo }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-xs-6\" >
                <label for=\"span_small\" class=\"control-label\">Estatus</label>
                <div class=\"clearfix\">
                    <div class=\"clearfix\">
                        <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                            <label class=\"btn btn-default active\">
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"1\" checked=\"checked\"> Activo
                            </label>
                            <label class=\"btn btn-default\">
                                <input type=\"radio\" class=\"toggle\" name=\"activo\" value=\"0\"> Inactivo
                            </label>
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
    <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tmodulo\">
        <thead>
            <tr>
                <th>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tmodulo .checkboxes\"/>
                        <span></span>
                    </label>
                </th>
                <th>#</th>
                <th>Modulo</th>
                <th>Posici&oacute;n</th>
                <th>Estatus</th>
                <th>Sub Modulo</th>
                <th>Posici&oacute;n</th>
                <th>Estatus</th>

            </tr>
        </thead>
        <tbody>
            {% for modulo in lista %}
                {% set modul = modulo.modulo %}
                {% set modpo = '' %}
                {% set modac = '' %}

                {% if modulo.modulo == '' %}
                    {% set modul = modulo.submodulo %}
                    {% set modpo = modulo.posicion %}
                    {% set modac = 'Activo' %}
                    {% if modulo.activo == 'f' %}
                        {% set modac = 'Inactivo' %}
                    {% endif %}
                {% endif %}

                {% set submodu  = '' %}
                {% set submodpo = '' %}
                {% set submodac = '' %}
                {% if modulo.modulo != '' %}
                    {% set submodu  = modulo.submodulo %}
                    {% set submodpo = modulo.posicion %}
                        {% set submodac = 'Activo' %}
                    {% if modulo.activo == 'f' %}
                        {% set submodac = 'Inactivo' %}
                        {% endif %}
                {% endif %}
            <tr class=\"odd gradeX\" id=\"{{ modulo.id }}\" data-id=\"{{ modulo.id }}\">
                <td>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"checkboxes\" value=\"1\"/>
                        <span></span>
                    </label>
                </td>
                <td>{{ '%02d'|format(loop.index) }}</td>
                <td> {{ modul }} </td>
                <td> {{ modpo }} </td>
                <td> {{ modac }}</td>
                <td> {{ submodu }}</td>
                <td> {{ submodpo }} </td>
                <td> {{ submodac }} </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
{% block javascript %}
    <script src=\"{{ public_url()~ 'script/modulo.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "seguridad/modulo.twig", "/var/www/reactivos/application/views/twig/templates/seguridad/modulo.twig");
    }
}
