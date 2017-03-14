<?php

/* base/base.twig */
class __TwigTemplate_7c61e426c8283e0b6daf798db7a7fc36287f84ee2b57737851f877789785a253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<head>
    <meta charset=\"utf-8\"/>
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "</head>


<body class=\"page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md\">

    ";
        // line 54
        $this->loadTemplate("base/header.twig", "base/base.twig", 54)->display($context);
        // line 55
        echo "
    <div class=\"page-container\">

        ";
        // line 58
        $this->loadTemplate("base/menu.twig", "base/base.twig", 58)->display($context);
        // line 59
        echo "
        <div class=\"page-content-wrapper\">
            <div class=\"page-content\">
                ";
        // line 63
        echo "                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"portlet light bordered\">
                            ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 75
        $this->loadTemplate("base/footer.twig", "base/base.twig", 75)->display($context);
        // line 76
        echo "    <!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/ie8.fix.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->


<script src=\"";
        // line 84
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/js.cookie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 85
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/highcharts/js/highcharts.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/highcharts/js/highcharts-3d.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/highcharts/js/highcharts-more.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (public_url() . "global/scripts/datatable.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/datatables/datatables.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootstrap-select/js/bootstrap-select.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery-multi-select/js/jquery.multi-select.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/select2/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (public_url() . "global/scripts/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, (public_url() . "pages/scripts/components-select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, (public_url() . "layouts/layout4/scripts/layout.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (public_url() . "layouts/layout4/scripts/demo.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (public_url() . "layouts/global/scripts/quick-sidebar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, (public_url() . "layouts/global/scripts/quick-nav.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootbox/bootbox.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        // line 113
        echo "    ";
        // line 114
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "js/jquery.mask.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, (public_url() . "js/url.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 117
        $this->displayBlock('javascript', $context, $blocks);
        // line 119
        echo "</body>


</html>";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <title>";
        echo twig_escape_filter($this->env, projectname(), "html", null, true);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>

        <meta content=\"\" name=\"author\"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/datatables/datatables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/select2/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/select2/css/select2-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery-multi-select/css/multi-select.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, (public_url() . "global/css/components-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\"/>
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, (public_url() . "global/css/plugins-md.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, (public_url() . "layouts/layout4/css/layout.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, (public_url() . "layouts/layout4/css/themes/default.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, (public_url() . "layouts/layout4/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, (public_url() . "css/animates.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        <style type=\"text/css\" media=\"screen\">
            input[type=\"text\"]::-webkit-input-placeholder {
                text-align: left;
            }
            input[type=\"text\"]::-moz-placeholder { /* Firefox 19+ */
                text-align: left;
            }
            .dropdown-menu{
                min-width: 200px;
            }
        </style>
        ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    ";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "
        ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        // line 67
        echo "
                            ";
    }

    // line 117
    public function block_javascript($context, array $blocks = array())
    {
        // line 118
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 118,  316 => 117,  311 => 67,  308 => 66,  303 => 42,  300 => 41,  292 => 45,  287 => 44,  285 => 41,  270 => 29,  266 => 28,  262 => 27,  258 => 26,  254 => 25,  250 => 24,  246 => 23,  242 => 22,  238 => 21,  233 => 19,  229 => 18,  224 => 16,  220 => 15,  216 => 14,  204 => 6,  201 => 5,  194 => 119,  192 => 117,  188 => 116,  182 => 114,  180 => 113,  176 => 109,  172 => 108,  168 => 107,  164 => 106,  160 => 105,  156 => 104,  152 => 103,  148 => 102,  144 => 101,  140 => 100,  136 => 99,  132 => 98,  128 => 97,  123 => 95,  119 => 94,  115 => 93,  110 => 91,  105 => 89,  101 => 88,  96 => 86,  92 => 85,  88 => 84,  81 => 80,  77 => 79,  73 => 78,  69 => 76,  67 => 75,  59 => 69,  57 => 66,  52 => 63,  47 => 59,  45 => 58,  40 => 55,  38 => 54,  31 => 49,  29 => 5,  23 => 1,);
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
<head>
    <meta charset=\"utf-8\"/>
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    {% block head %}
        <title>{{ projectname() }}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>

        <meta content=\"\" name=\"author\"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"{{ public_url()~ 'global/plugins/font-awesome/css/font-awesome.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/plugins/simple-line-icons/simple-line-icons.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/plugins/bootstrap/css/bootstrap.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"{{ public_url()~ 'global/plugins/datatables/datatables.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>

        <link href=\"{{ public_url()~ 'global/plugins/select2/css/select2.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/plugins/select2/css/select2-bootstrap.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/plugins/jquery-multi-select/css/multi-select.css' }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ public_url()~ 'global/css/components-md.min.css' }}\" rel=\"stylesheet\" id=\"style_components\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'global/css/plugins-md.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'layouts/layout4/css/layout.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'layouts/layout4/css/themes/default.min.css' }}\" rel=\"stylesheet\" type=\"text/css\" id=\"style_color\"/>
        <link href=\"{{ public_url()~ 'layouts/layout4/css/custom.min.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"{{ public_url()~ 'css/animates.css' }}\" rel=\"stylesheet\" type=\"text/css\"/>
        <style type=\"text/css\" media=\"screen\">
            input[type=\"text\"]::-webkit-input-placeholder {
                text-align: left;
            }
            input[type=\"text\"]::-moz-placeholder { /* Firefox 19+ */
                text-align: left;
            }
            .dropdown-menu{
                min-width: 200px;
            }
        </style>
        {% block stylesheets %}

        {% endblock %}
        <script src=\"{{ public_url()~ 'global/plugins/jquery.min.js' }}\" type=\"text/javascript\"></script>
        <script src=\"{{ public_url()~ 'global/plugins/bootstrap/js/bootstrap.min.js' }}\" type=\"text/javascript\"></script>

        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>
    {% endblock %}
</head>


<body class=\"page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo page-md\">

    {% include 'base/header.twig' %}

    <div class=\"page-container\">

        {% include 'base/menu.twig' %}

        <div class=\"page-content-wrapper\">
            <div class=\"page-content\">
                {# {% include 'base/breadcrumb.twig' %} #}
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"portlet light bordered\">
                            {% block content %}

                            {% endblock %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% include 'base/footer.twig' %}
    <!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src=\"{{ public_url()~ 'global/plugins/respond.min.js' }}\"></script>
<script src=\"{{ public_url()~ 'global/plugins/excanvas.min.js' }}\"></script>
<script src=\"{{ public_url()~ 'global/plugins/ie8.fix.min.js' }}\"></script>
<![endif]-->


<script src=\"{{ public_url()~ 'global/plugins/js.cookie.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/jquery.blockui.min.js' }}\" type=\"text/javascript\"></script>

<script src=\"{{ public_url()~ 'global/plugins/counterup/jquery.waypoints.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/counterup/jquery.counterup.min.js' }}\" type=\"text/javascript\"></script>

<script src=\"{{ public_url()~ 'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js' }}\" type=\"text/javascript\"></script>

<script src=\"{{ public_url()~ 'global/plugins/highcharts/js/highcharts.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/highcharts/js/highcharts-3d.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/highcharts/js/highcharts-more.js' }}\" type=\"text/javascript\"></script>

<script src=\"{{ public_url()~ 'global/scripts/datatable.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/datatables/datatables.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/bootstrap-select/js/bootstrap-select.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/jquery-multi-select/js/jquery.multi-select.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/select2/js/select2.full.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/scripts/app.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'pages/scripts/components-select2.min.js'}}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'layouts/layout4/scripts/layout.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'layouts/layout4/scripts/demo.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'layouts/global/scripts/quick-sidebar.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'layouts/global/scripts/quick-nav.min.js' }}\" type=\"text/javascript\"></script>
<script src=\"{{ public_url()~ 'global/plugins/bootbox/bootbox.min.js' }}\" type=\"text/javascript\"></script>
{# script donde se usa el datatable
    <script src=\"{{ public_url()~ 'pages/scripts/table-datatables-managed.min.js' }}\" type=\"text/javascript\"></script>
    #}
    {# <script src=\"{{ public_url()~ 'js/table-datatables-managed.js' }}\" type=\"text/javascript\"></script>#}
    <script src=\"{{ public_url()~ 'js/jquery.mask.js' }}\"></script>

    <script src=\"{{ public_url()~ 'js/url.js' }}\"></script>
    {% block javascript %}
    {% endblock %}
</body>


</html>", "base/base.twig", "/var/www/prototipo/application/views/twig/templates/base/base.twig");
    }
}
