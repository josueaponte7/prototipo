<?php

/* seguridad/lock.twig */
class __TwigTemplate_92baa193e13f82a6511ac506b3cad681f1598d367334ce2c822648dcd55f8509 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic Admin Theme #4 | User Lock Screen 1</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #4 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />

    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/css/components-md.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"/public/global/css/plugins-md.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/pages/css/lock.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <body class=\"\">
        <div class=\"page-lock\">
            <div class=\"page-logo\">
                <a class=\"brand\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
                    <h3>";
        // line 29
        echo twig_escape_filter($this->env, projectname(), "html", null, true);
        echo "</h3>
                    ";
        // line 31
        echo "                </a>
                </div>
                <div class=\"page-body\">
                    <div class=\"lock-head\"> Bloqueado </div>
                    <div class=\"lock-body\">
                        <div class=\"pull-left lock-avatar-block\">
                            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, (public_url() . "pages/media/profile/profile_user.jpg"), "html", null, true);
        echo "\" class=\"lock-avatar\"> </div>
                            <form class=\"lock-form pull-left\" action=\"index.html\" method=\"post\">
                                <h4>";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</h4>
                                <div class=\"form-group\">
                                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"password\" />
                                </div>
                                    <div class=\"form-actions\">
                                        <button type=\"submit\" class=\"btn red uppercase\">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"lock-bottom\">
                                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, (base_url() . "seguridad/users/logout"), "html", null, true);
        echo "\">&iquest; No eres ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "?</a>
                            </div>
                        </div>
                        <div class=\"page-footer-custom\"> ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y", "America/Caracas"), "html", null, true);
        echo " &copy; ";
        echo twig_escape_filter($this->env, projectname(), "html", null, true);
        echo ". </div>
                    </div>
<!--[if lt IE 9]>
<script src=\"/public/global/plugins/respond.min.js\"></script>
<script src=\"/public/global/plugins/excanvas.min.js\"></script>
<script src=\"/public/global/plugins/ie8.fix.min.js\"></script>
<![endif]-->
<script src=\"/public/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/scripts/app.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/pages/scripts/lock.min.js\" type=\"text/javascript\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "seguridad/lock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 52,  82 => 49,  69 => 39,  64 => 37,  56 => 31,  52 => 29,  48 => 28,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<head>
    <meta charset=\"utf-8\" />
    <title>Metronic Admin Theme #4 | User Lock Screen 1</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
    <meta content=\"Preview page of Metronic Admin Theme #4 for \" name=\"description\" />
    <meta content=\"\" name=\"author\" />

    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/simple-line-icons/simple-line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/global/css/components-md.min.css\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\" />
    <link href=\"/public/global/css/plugins-md.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/public/pages/css/lock.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link rel=\"shortcut icon\" href=\"favicon.ico\" /> </head>
    <body class=\"\">
        <div class=\"page-lock\">
            <div class=\"page-logo\">
                <a class=\"brand\" href=\"{{ base_url() }}\">
                    <h3>{{ projectname() }}</h3>
                    {# <img src=\"/public/pages/img/logo-big.png\" alt=\"logo\" /> #}
                </a>
                </div>
                <div class=\"page-body\">
                    <div class=\"lock-head\"> Bloqueado </div>
                    <div class=\"lock-body\">
                        <div class=\"pull-left lock-avatar-block\">
                            <img src=\"{{ public_url() ~ 'pages/media/profile/profile_user.jpg' }}\" class=\"lock-avatar\"> </div>
                            <form class=\"lock-form pull-left\" action=\"index.html\" method=\"post\">
                                <h4>{{ name }}</h4>
                                <div class=\"form-group\">
                                    <input class=\"form-control placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"password\" />
                                </div>
                                    <div class=\"form-actions\">
                                        <button type=\"submit\" class=\"btn red uppercase\">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class=\"lock-bottom\">
                                <a href=\"{{ base_url() ~ 'seguridad/users/logout' }}\">&iquest; No eres {{ name }}?</a>
                            </div>
                        </div>
                        <div class=\"page-footer-custom\"> {{ 'now'|date(\"Y\",\"America/Caracas\") }} &copy; {{ projectname() }}. </div>
                    </div>
<!--[if lt IE 9]>
<script src=\"/public/global/plugins/respond.min.js\"></script>
<script src=\"/public/global/plugins/excanvas.min.js\"></script>
<script src=\"/public/global/plugins/ie8.fix.min.js\"></script>
<![endif]-->
<script src=\"/public/global/plugins/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/js.cookie.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/jquery.blockui.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/global/scripts/app.min.js\" type=\"text/javascript\"></script>
<script src=\"/public/pages/scripts/lock.min.js\" type=\"text/javascript\"></script>
</body>
</html>", "seguridad/lock.twig", "/var/www/garajemotores/application/views/twig/templates/seguridad/lock.twig");
    }
}
