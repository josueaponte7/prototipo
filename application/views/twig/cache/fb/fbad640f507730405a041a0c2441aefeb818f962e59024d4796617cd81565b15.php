<?php

/* pruebas/usuario.twig */
class __TwigTemplate_50514acd2461e2212f2d95d76314d8f8da59d5dd263174b71c283d605288c5d6 extends Twig_Template
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

    </script>
</head>
<body>
    <table border=\"1\" id=\"persona_";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\">
        <thead>
            <tr>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mensajes"]) ? $context["mensajes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["mensaje"]) {
            // line 23
            echo "                <tr>
                    <td id=\"mensaje\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "mensaje", array()), "html", null, true);
            echo "</td>
                    <td id=\"fecha\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["mensaje"], "fecha", array()), "html", null, true);
            echo "</td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pruebas/usuario.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  65 => 25,  61 => 24,  58 => 23,  54 => 22,  43 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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

    </script>
</head>
<body>
    <table border=\"1\" id=\"persona_{{ id }}\">
        <thead>
            <tr>
                <th>Mensaje</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            {% for mensaje in mensajes %}
                <tr>
                    <td id=\"mensaje\">{{ mensaje.mensaje }}</td>
                    <td id=\"fecha\">{{ mensaje.fecha }}</td>
                </tr>

            {% endfor %}
        </tbody>
    </table>
</body>
</html>", "pruebas/usuario.twig", "/var/www/appreactivos/application/views/twig/templates/pruebas/usuario.twig");
    }
}
