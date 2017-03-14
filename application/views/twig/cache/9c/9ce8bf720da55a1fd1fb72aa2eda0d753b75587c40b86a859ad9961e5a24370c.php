<?php

/* seguridad/users.twig */
class __TwigTemplate_4e84f2e873af2787fca09a53b6cfa0c71aa581a351dd29d5115967931c311d13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base/base.twig", "seguridad/users.twig", 1);
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "seguridad/users.twig", 2);
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
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"data-toggle=\"dropdown\"> Accion
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
        // line 32
        echo $context["forms"]->getform_open("frmusers", "frmusers");
        echo "
            ";
        // line 33
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
            ";
        // line 34
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
        // line 37
        echo $context["forms"]->getlabel(array("id" => "si_user", "content" => "Usuario"));
        echo "
                    ";
        // line 38
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "si_user", "class" => "form-control", "placeholder" => "Usuario", "data" => array("validate" => "required|max(20)|min(4)", "type" => "alphanumeric", "text" => "lower"))));
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 41
        echo $context["forms"]->getlabel(array("id" => "first_name", "content" => "Nombre"));
        echo "
                    ";
        // line 42
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "first_name", "class" => "form-control", "placeholder" => "Nombre", "data" => array("validate" => "required|max(20)|min(2)", "type" => "alpha", "text" => "capitalize"))));
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 45
        echo $context["forms"]->getlabel(array("id" => "last_name", "content" => "Apellido"));
        echo "
                    ";
        // line 46
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "last_name", "class" => "form-control", "placeholder" => "Apellido", "data" => array("validate" => "required|max(20)|min(2)", "type" => "alpha", "text" => "capitalize"))));
        echo "
                </div>
            </div>
            <br/>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
        // line 52
        echo $context["forms"]->getlabel(array("id" => "correo", "content" => "Correo"));
        echo "
                    ";
        // line 53
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "correo", "class" => "form-control", "placeholder" => "Correo", "data" => array("validate" => "required|enail", "text" => "lower"))));
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 56
        echo $context["forms"]->getlabel(array("id" => "si_password", "content" => "Clave"));
        echo "
                    ";
        // line 57
        echo $context["forms"]->getinput_password(array("attr" => array("name" => "si_password", "class" => "form-control", "placeholder" => "Clave", "data" => array("validate" => "required|max(20)|min(8)", "type" => "alpha", "text" => "capitalize"))));
        echo "
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 60
        echo $context["forms"]->getlabel(array("id" => "si_rpassword", "content" => "Repetir Clave"));
        echo "
                    ";
        // line 61
        echo $context["forms"]->getinput_password(array("attr" => array("name" => "si_rpassword", "class" => "form-control", "placeholder" => "Repetir Clave", "data" => array("validate" => "required|max(20)|min(8)|match(si_password)", "type" => "alpha", "text" => "capitalize"))));
        echo "
                </div>
            </div>

            <br/>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
        // line 68
        echo $context["forms"]->getlabel(array("id" => "perfil_id", "content" => "Perfil"));
        echo "
                    <select name=\"perfil_id\" id=\"perfil_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                        <option value=\"0\">Seleccione</option>
                        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["perfiles"]) ? $context["perfiles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["perfile"]) {
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["perfile"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["perfile"], "perfil", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </select>
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 77
        echo $context["forms"]->getlabel(array("id" => "perfil_id", "content" => "Nombre a Mostrar"));
        echo "
                    <select name=\"show_panel\" id=\"show_panel\" data-add=\"id\" class=\"form-control input-sm select2\">
                        <option value=\"1\">Nombre de Usuario</option>
                        <option value=\"2\">Nombre y Apellido</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"span_small\" class=\"control-label\">Estatus</label>
                    <div class=\"clearfix\">
                        <div class=\"clearfix\">
                            <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default active\">Activo
                                    <input type=\"radio\" class=\"toggle\" name=\"active\" value=\"1\" checked=\"checked\">
                                </label>
                                <label class=\"btn btn-default\">Inactivo
                                    <input type=\"radio\" class=\"toggle\" name=\"active\" value=\"0\">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"form-actions\" style=\"text-align: center\">
                ";
        // line 100
        echo $context["forms"]->getbutton(array("attr" => array("id" => "guardar", "class" => "btn green uppercase")), "Guardar");
        echo "
                ";
        // line 101
        echo $context["forms"]->getbutton(array("attr" => array("id" => "cancelar", "class" => "btn yellow uppercase")), "Cancelar");
        echo "
            </div>
        </form>
    </div>
    <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tusers\">
        <thead>
            <tr>
                <th>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tusers .checkboxes\"/>
                        <span></span>
                    </label>
                </th>
                <th>#</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Perfil</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 123
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
            // line 124
            echo "                ";
            $context["estatus"] = "Activo";
            // line 125
            echo "                ";
            if (($this->getAttribute($context["lista"], "active", array()) == "0")) {
                // line 126
                echo "                    ";
                $context["estatus"] = "Inactivo";
                // line 127
                echo "                ";
            }
            // line 128
            echo "                <tr class=\"odd gradeX\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\">
                    <td>
                        <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                            <input type=\"checkbox\" class=\"checkboxes\" value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "id", array()), "html", null, true);
            echo "\"/>
                            <span></span>
                        </label>
                    </td>
                    <td>";
            // line 135
            echo twig_escape_filter($this->env, sprintf("%02d", $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "si_user", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "first_name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "last_name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["lista"], "perfil", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 140
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
        // line 143
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 147
    public function block_javascript($context, array $blocks = array())
    {
        // line 148
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "script/users.js"), "html", null, true);
        echo "\" type=\"text/javascript\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "seguridad/users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 148,  334 => 147,  327 => 143,  310 => 140,  306 => 139,  302 => 138,  298 => 137,  294 => 136,  290 => 135,  283 => 131,  274 => 128,  271 => 127,  268 => 126,  265 => 125,  262 => 124,  245 => 123,  220 => 101,  216 => 100,  190 => 77,  185 => 74,  174 => 72,  170 => 71,  164 => 68,  154 => 61,  150 => 60,  144 => 57,  140 => 56,  134 => 53,  130 => 52,  121 => 46,  117 => 45,  111 => 42,  107 => 41,  101 => 38,  97 => 37,  91 => 34,  87 => 33,  83 => 32,  61 => 13,  56 => 10,  53 => 9,  48 => 6,  42 => 5,  37 => 4,  34 => 3,  30 => 1,  28 => 2,  11 => 1,);
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
                <a class=\"btn btn-sm green dropdown-toggle\" href=\"javascript:;\"data-toggle=\"dropdown\"> Accion
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
            {{ forms.form_open('frmusers', 'frmusers') }}
            {{ forms.token(token) }}
            {{ forms.token(token,'token') }}
            <div class=\"row\">
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'si_user', 'content':'Usuario'}) }}
                    {{ forms.input_text({'attr':{'name': 'si_user', 'class':'form-control', 'placeholder':'Usuario','data':{'validate':'required|max(20)|min(4)', 'type':'alphanumeric', 'text':'lower'}}}) }}
                </div>
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'first_name', 'content':'Nombre'}) }}
                    {{ forms.input_text({'attr':{'name': 'first_name', 'class':'form-control', 'placeholder':'Nombre','data':{'validate':'required|max(20)|min(2)', 'type':'alpha', 'text':'capitalize'}}}) }}
                </div>
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'last_name', 'content':'Apellido'}) }}
                    {{ forms.input_text({'attr':{'name': 'last_name', 'class':'form-control', 'placeholder':'Apellido','data':{'validate':'required|max(20)|min(2)', 'type':'alpha', 'text':'capitalize'}}}) }}
                </div>
            </div>
            <br/>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'correo', 'content':'Correo'}) }}
                    {{ forms.input_text({'attr':{'name': 'correo', 'class':'form-control', 'placeholder':'Correo','data':{'validate':'required|enail', 'text':'lower'}}}) }}
                </div>
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'si_password', 'content':'Clave'}) }}
                    {{ forms.input_password({'attr':{'name': 'si_password', 'class':'form-control', 'placeholder':'Clave','data':{'validate':'required|max(20)|min(8)', 'type':'alpha', 'text':'capitalize'}}}) }}
                </div>
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'si_rpassword', 'content':'Repetir Clave'}) }}
                    {{ forms.input_password({'attr':{'name': 'si_rpassword', 'class':'form-control', 'placeholder':'Repetir Clave','data':{'validate':'required|max(20)|min(8)|match(si_password)', 'type':'alpha', 'text':'capitalize'}}}) }}
                </div>
            </div>

            <br/>
            <div class=\"row\">
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'perfil_id', 'content':'Perfil'}) }}
                    <select name=\"perfil_id\" id=\"perfil_id\" class=\"form-control select2 select2-button-addons-single-input-group-sm\">
                        <option value=\"0\">Seleccione</option>
                        {% for perfile in perfiles %}
                            <option value=\"{{ perfile.id }}\">{{ perfile.perfil }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-4\">
                    {{ forms.label({'id':'perfil_id', 'content':'Nombre a Mostrar'}) }}
                    <select name=\"show_panel\" id=\"show_panel\" data-add=\"id\" class=\"form-control input-sm select2\">
                        <option value=\"1\">Nombre de Usuario</option>
                        <option value=\"2\">Nombre y Apellido</option>
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"span_small\" class=\"control-label\">Estatus</label>
                    <div class=\"clearfix\">
                        <div class=\"clearfix\">
                            <div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">
                                <label class=\"btn btn-default active\">Activo
                                    <input type=\"radio\" class=\"toggle\" name=\"active\" value=\"1\" checked=\"checked\">
                                </label>
                                <label class=\"btn btn-default\">Inactivo
                                    <input type=\"radio\" class=\"toggle\" name=\"active\" value=\"0\">
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
    </div>
    <table class=\"table  table-striped table-bordered table-hover table-checkable order-column\" id=\"tusers\">
        <thead>
            <tr>
                <th>
                    <label class=\"mt-checkbox mt-checkbox-single mt-checkbox-outline\">
                        <input type=\"checkbox\" class=\"group-checkable\" data-set=\"#tusers .checkboxes\"/>
                        <span></span>
                    </label>
                </th>
                <th>#</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Perfil</th>
                <th>Estatus</th>
            </tr>
        </thead>
        <tbody>
            {% for lista in listar %}
                {% set estatus = 'Activo' %}
                {% if lista.active == '0' %}
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
                    <td>{{ lista.si_user }}</td>
                    <td>{{ lista.first_name }}</td>
                    <td>{{ lista.last_name }}</td>
                    <td>{{ lista.perfil }}</td>
                    <td> {{ estatus }} </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
{% block javascript %}
    <script src=\"{{ public_url()~ 'script/users.js' }}\" type=\"text/javascript\" charset=\"utf-8\"></script>
{% endblock %}", "seguridad/users.twig", "/var/www/appreactivos/application/views/twig/templates/seguridad/users.twig");
    }
}
