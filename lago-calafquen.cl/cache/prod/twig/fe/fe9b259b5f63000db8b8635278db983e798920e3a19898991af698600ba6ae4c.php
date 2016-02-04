<?php

/* UniPageBundle:Page:camera.html.twig */
class __TwigTemplate_e5fffa9337651f17d2114b30393532deacb7024a1b8e32b1147d8bd2a4fc7caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:camera.html.twig", 1);
        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "<style type=\"text/css\">body { background-color: black; }</style>";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<section id=\"notice\">
        <div class=\"container-fluid\">
            <div class=\"row row-no-padding\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cameras"]) ? $context["cameras"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["camera"]) {
            // line 10
            echo "                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                        <img class=\"img img-responsive\" id=\"liveStream_";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["camera"], "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["camera"], "source", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camera'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:camera.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  50 => 11,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% block stylesheet %}<style type="text/css">body { background-color: black; }</style>{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="notice">*/
/*         <div class="container-fluid">*/
/*             <div class="row row-no-padding">*/
/*                 {% for camera in cameras %}*/
/*                     <div class="col-lg-3 col-md-4 col-sm-6">*/
/*                         <img class="img img-responsive" id="liveStream_{{ camera.name }}" src="{{ camera.source }}">*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
