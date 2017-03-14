<?php

/* seguridad/login.twig */
class __TwigTemplate_045f8b969509b52ee8bc186e5a20ef140a3128719251c6f5a7566c26082596df extends Twig_Template
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
        $context["forms"] = $this->loadTemplate("base/form.twig", "seguridad/login.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        echo twig_escape_filter($this->env, projectname(), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #4 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (public_url() . "global/css/components-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, (public_url() . "global/css/plugins-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (public_url() . "pages/css/login.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
</head>
<body class=\" login\">
    <div class=\"content\">
        <!-- inicio de formulario de login -->
        <form  class=\"login-form\" id=\"frmlogin\" method=\"post\" action=\"\" autocomplete=\"off\">
            ";
        // line 25
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null));
        echo "
            ";
        // line 26
        echo $context["forms"]->gettoken((isset($context["token"]) ? $context["token"] : null), "token");
        echo "
            <h3 class=\"form-title font-green\">Iniciar Session</h3>
            <div id=\"error-users\" class=\"alert alert-danger display-hide\">
                <button  type=\"button\" class=\"close\" data-close=\"alert\" ></button>
                <span> Ingresar nombre de usuario. </span>
            </div>
            <div id=\"error-pass\" class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> Ingresar contraseña. </span>
            </div>
            <div id=\"error-login\" class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> Usuario o Clave incorrectos. </span>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Usuario</label>
                ";
        // line 42
        echo $context["forms"]->getinput_text(array("attr" => array("name" => "user", "class" => "form-control form-control-solid placeholder-no-fix", "placeholder" => "Usuario")));
        echo "
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                ";
        // line 46
        echo $context["forms"]->getinput_password(array("attr" => array("name" => "password", "class" => "form-control form-control-solid placeholder-no-fix", "placeholder" => "Contraseña")));
        echo "
            </div>
            <div class=\"form-actions\">
                ";
        // line 49
        echo $context["forms"]->getbutton(array("attr" => array("id" => "login", "class" => "btn green uppercase")), "Iniciar");
        echo "
                <!-- recordar -->
                <!--<label class=\"rememberme check mt-checkbox mt-checkbox-outline\">
                    <input type=\"checkbox\" name=\"remember\" value=\"1\" />Remember
                    <span></span>
                </label>-->
                <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">&iquest;Olvido su contraseña?</a>
            </div>
            <div class=\"create-account\">
                <!-- para crear una nueva cuenta-->
                ";
        // line 62
        echo "                &nbsp;
            </div>
        </form>
        <!-- fin de formaulario de login -->
        <!-- comienzo de olvido su clave -->
        <form class=\"forget-form\" action=\"index.html\" method=\"post\">
            <h3 class=\"font-green\">&iquest;Olvido su contraseña?</h3>
            <p> Introduzca su dirección de correo electrónico a continuación para restablecer su contraseña. </p>
            <div class=\"form-group\">
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" />
            </div>
            <div class=\"form-actions\">
                <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Regresar</button>
                <button type=\"button\" class=\"btn btn-success uppercase pull-right\">Enviar</button>
            </div>
        </form>
        <!-- fin de olvido su clave -->
        <!-- comienzo de registrate -->
        <form class=\"register-form\" action=\"index.html\" method=\"post\">
            <h3 class=\"font-green\">Registrate</h3>
            <p class=\"hint\"> Introduzca sus datos personales a continuación: </p>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Nombres</label>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Nombres\" name=\"fullname\" />
            </div>
            <div class=\"form-group\">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class=\"control-label visible-ie8 visible-ie9\">Email</label>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Email\" name=\"email\" />
            </div>
            <div class=\"form-group\">
                <p class=\"hint\"> Ingrese los detalles de su cuenta a continuación: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Usuario</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Usuario\" name=\"username\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" id=\"register_password\" placeholder=\"Password\" name=\"password\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Repite tu Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Re-type Your Password\" name=\"rpassword\" />
                </div>
                <div class=\"form-group margin-top-20 margin-bottom-20\">
                    <label class=\"mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" name=\"tnc\" />Estoy de acuerdo con los
                        <a href=\"javascript:;\">Términos de servicio</a> &
                        <a href=\"javascript:;\">Política de privacidad</a>
                        <span></span>
                    </label>
                    <div id=\"register_tnc_error\"> </div>
                </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn green btn-outline\">Regresar</button>
                    <button type=\"button\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\">Enviar</button>
                </div>
            </div>
        </form>
        <!-- fin de registrate -->
    </div>
    <div class=\"copyright\"> ";
        // line 123
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " © ";
        echo twig_escape_filter($this->env, projectname(), "html", null, true);
        echo ". </div>

    <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, (public_url() . "/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 126
        echo twig_escape_filter($this->env, (public_url() . "/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, (public_url() . "js/url.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 128
        echo twig_escape_filter($this->env, (public_url() . "script/login.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "seguridad/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 128,  194 => 127,  190 => 126,  186 => 125,  179 => 123,  116 => 62,  103 => 49,  97 => 46,  90 => 42,  71 => 26,  67 => 25,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  37 => 13,  28 => 7,  21 => 2,  19 => 1,);
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
<!DOCTYPE html>
<html lang=\"en\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />
    <title>{{ projectname() }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #4 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'global/plugins/font-awesome/css/font-awesome.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'global/plugins/simple-line-icons/simple-line-icons.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'global/plugins/bootstrap/css/bootstrap.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'global/css/components-md.min.css' }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'global/css/plugins-md.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{ public_url()~ 'pages/css/login.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" href=\"favicon.ico\" />
</head>
<body class=\" login\">
    <div class=\"content\">
        <!-- inicio de formulario de login -->
        <form  class=\"login-form\" id=\"frmlogin\" method=\"post\" action=\"\" autocomplete=\"off\">
            {{ forms.token(token) }}
            {{ forms.token(token,'token') }}
            <h3 class=\"form-title font-green\">Iniciar Session</h3>
            <div id=\"error-users\" class=\"alert alert-danger display-hide\">
                <button  type=\"button\" class=\"close\" data-close=\"alert\" ></button>
                <span> Ingresar nombre de usuario. </span>
            </div>
            <div id=\"error-pass\" class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> Ingresar contraseña. </span>
            </div>
            <div id=\"error-login\" class=\"alert alert-danger display-hide\">
                <button class=\"close\" data-close=\"alert\"></button>
                <span> Usuario o Clave incorrectos. </span>
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Usuario</label>
                {{ forms.input_text({'attr':{'name': 'user', 'class':'form-control form-control-solid placeholder-no-fix', 'placeholder':'Usuario'}}) }}
            </div>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                {{ forms.input_password({'attr':{'name': 'password', 'class':'form-control form-control-solid placeholder-no-fix', 'placeholder':'Contraseña'}}) }}
            </div>
            <div class=\"form-actions\">
                {{ forms.button({'attr':{'id':'login', 'class':'btn green uppercase'}}, 'Iniciar') }}
                <!-- recordar -->
                <!--<label class=\"rememberme check mt-checkbox mt-checkbox-outline\">
                    <input type=\"checkbox\" name=\"remember\" value=\"1\" />Remember
                    <span></span>
                </label>-->
                <a href=\"javascript:;\" id=\"forget-password\" class=\"forget-password\">&iquest;Olvido su contraseña?</a>
            </div>
            <div class=\"create-account\">
                <!-- para crear una nueva cuenta-->
                {# <p>
                    <a href=\"javascript:;\" id=\"register-btn\" class=\"uppercase\">Crear Cuenta</a>
                </p> #}
                &nbsp;
            </div>
        </form>
        <!-- fin de formaulario de login -->
        <!-- comienzo de olvido su clave -->
        <form class=\"forget-form\" action=\"index.html\" method=\"post\">
            <h3 class=\"font-green\">&iquest;Olvido su contraseña?</h3>
            <p> Introduzca su dirección de correo electrónico a continuación para restablecer su contraseña. </p>
            <div class=\"form-group\">
                <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Email\" name=\"email\" />
            </div>
            <div class=\"form-actions\">
                <button type=\"button\" id=\"back-btn\" class=\"btn green btn-outline\">Regresar</button>
                <button type=\"button\" class=\"btn btn-success uppercase pull-right\">Enviar</button>
            </div>
        </form>
        <!-- fin de olvido su clave -->
        <!-- comienzo de registrate -->
        <form class=\"register-form\" action=\"index.html\" method=\"post\">
            <h3 class=\"font-green\">Registrate</h3>
            <p class=\"hint\"> Introduzca sus datos personales a continuación: </p>
            <div class=\"form-group\">
                <label class=\"control-label visible-ie8 visible-ie9\">Nombres</label>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Nombres\" name=\"fullname\" />
            </div>
            <div class=\"form-group\">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class=\"control-label visible-ie8 visible-ie9\">Email</label>
                <input class=\"form-control placeholder-no-fix\" type=\"text\" placeholder=\"Email\" name=\"email\" />
            </div>
            <div class=\"form-group\">
                <p class=\"hint\"> Ingrese los detalles de su cuenta a continuación: </p>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Usuario</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Usuario\" name=\"username\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" id=\"register_password\" placeholder=\"Password\" name=\"password\" />
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">Repite tu Password</label>
                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Re-type Your Password\" name=\"rpassword\" />
                </div>
                <div class=\"form-group margin-top-20 margin-bottom-20\">
                    <label class=\"mt-checkbox mt-checkbox-outline\">
                        <input type=\"checkbox\" name=\"tnc\" />Estoy de acuerdo con los
                        <a href=\"javascript:;\">Términos de servicio</a> &
                        <a href=\"javascript:;\">Política de privacidad</a>
                        <span></span>
                    </label>
                    <div id=\"register_tnc_error\"> </div>
                </div>
                <div class=\"form-actions\">
                    <button type=\"button\" id=\"register-back-btn\" class=\"btn green btn-outline\">Regresar</button>
                    <button type=\"button\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\">Enviar</button>
                </div>
            </div>
        </form>
        <!-- fin de registrate -->
    </div>
    <div class=\"copyright\"> {{ 'now'|date(\"Y\") }} © {{ projectname() }}. </div>

    <script src=\"{{ public_url() ~ '/global/plugins/jquery.min.js' }}\" type=\"text/javascript\"></script>
    <script src=\"{{ public_url() ~ '/global/plugins/bootstrap/js/bootstrap.min.js' }}\" type=\"text/javascript\"></script>
    <script src=\"{{ public_url()~ 'js/url.js' }}\"></script>
    <script src=\"{{ public_url()~ 'script/login.js' }}\"></script>
</body>
</html>", "seguridad/login.twig", "/var/www/reactivos/application/views/twig/templates/seguridad/login.twig");
    }
}
