<?php

/* pruebas/mensajes.twig */
class __TwigTemplate_c076852c802d29769ac9a7ecf3f6c5622017252170bb96a0f93b4844938160f9 extends Twig_Template
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
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Send</title>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, (public_url() . "global/plugins/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (public_url() . "js/fancywebsocket.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, (public_url() . "js/url.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('table tbody tr td span').click(function(event) {
                var id = \$(this).attr('id');
                \$.get(base_url('/pruebas/ChatController/conectar'), {id:id},function(data) {
                    send(data)
                    var url = base_url('/pruebas/ChatController/usuario/'+id)
                    window.location.href=url;
                });

            });
        });
    </script>
</head>
<body>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Persona</th>
                <th>Mensajes</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajes"]) ? $context["mensajes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 34
            echo "                <tr>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "nombre", array()), "html", null, true);
            echo "</td>
                    <td style=\"text-align: right\">
                        <span id=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "id", array()), "html", null, true);
            echo "\" style=\"color: red;cursor: pointer\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "cant", array()), "html", null, true);
            echo "</span>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>

    <div id=\"mensajes\">
        Mensajes:<span id=\"cantidad\" style=\"color: red\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["cant"]) ? $context["cant"] : null), "html", null, true);
        echo "</span>
    </div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pruebas/mensajes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 46,  87 => 42,  74 => 37,  69 => 35,  66 => 34,  62 => 33,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>Send</title>
    <script src=\"{{ public_url()~ 'global/plugins/jquery.min.js' }}\"></script>
    <script src=\"{{ public_url()~ 'js/fancywebsocket.js' }}\"></script>
    <script src=\"{{ public_url()~ 'js/url.js' }}\"></script>
    <script>
        \$(document).ready(function() {
            \$('table tbody tr td span').click(function(event) {
                var id = \$(this).attr('id');
                \$.get(base_url('/pruebas/ChatController/conectar'), {id:id},function(data) {
                    send(data)
                    var url = base_url('/pruebas/ChatController/usuario/'+id)
                    window.location.href=url;
                });

            });
        });
    </script>
</head>
<body>

    <table border=\"1\">
        <thead>
            <tr>
                <th>Persona</th>
                <th>Mensajes</th>
            </tr>
        </thead>
        <tbody>
            {% for mensaje in mensajes %}
                <tr>
                    <td>{{ mensaje.nombre }}</td>
                    <td style=\"text-align: right\">
                        <span id=\"{{ mensaje.id }}\" style=\"color: red;cursor: pointer\">{{ mensaje.cant }}</span>
                    </td>
                </tr>

            {% endfor %}
        </tbody>
    </table>

    <div id=\"mensajes\">
        Mensajes:<span id=\"cantidad\" style=\"color: red\">{{ cant }}</span>
    </div>

</body>
</html>", "pruebas/mensajes.twig", "/var/www/appreactivos/application/views/twig/templates/pruebas/mensajes.twig");
    }
}
