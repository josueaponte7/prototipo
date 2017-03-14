<?php

/* pruebas/send.twig */
class __TwigTemplate_6a48105f641ed619146bc15bc2c9c8bf9b2553e5a4e8b10628c4efd0cc67cece extends Twig_Template
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
            \$('#enviar').click(function(){
                var mensaje     =  \$('#mensaje').val()
                var personas_id =  \$('#personas_id').find('option').filter(':selected').val();

                \$.post(base_url('/pruebas/ChatController/guardar'), {mensaje:mensaje, personas_id:personas_id}, function(data, textStatus, xhr) {
                    send(data)
                });

            })
        });
    </script>
</head>

<body>
    <input type=\"text\" name=\"mensaje\" id=\"mensaje\" /><br />
    <select name=\"personas_id\" id=\"personas_id\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["personas"]) ? $context["personas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["persona"], "nombre", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select><br />
    <input type=\"button\" id=\"enviar\" value=\"enviar\" />

    <div id=\"conectado\" style=\"display: none\">

    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "pruebas/send.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 30,  60 => 28,  56 => 27,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
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
            \$('#enviar').click(function(){
                var mensaje     =  \$('#mensaje').val()
                var personas_id =  \$('#personas_id').find('option').filter(':selected').val();

                \$.post(base_url('/pruebas/ChatController/guardar'), {mensaje:mensaje, personas_id:personas_id}, function(data, textStatus, xhr) {
                    send(data)
                });

            })
        });
    </script>
</head>

<body>
    <input type=\"text\" name=\"mensaje\" id=\"mensaje\" /><br />
    <select name=\"personas_id\" id=\"personas_id\">
        {% for persona in personas %}
            <option value=\"{{ persona.id }}\">{{ persona.nombre }}</option>
        {% endfor %}
    </select><br />
    <input type=\"button\" id=\"enviar\" value=\"enviar\" />

    <div id=\"conectado\" style=\"display: none\">

    </div>
</body>
</html>", "pruebas/send.twig", "/var/www/appreactivos/application/views/twig/templates/pruebas/send.twig");
    }
}
