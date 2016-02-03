<?php

/* UniPageBundle:Page:camera.html.twig */
class __TwigTemplate_da506b58ab53b1c45cf7cb296ed0e9de4aa65a70e205d424cdff4cf60792b105 extends Twig_Template
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
        $__internal_0289d8f233bdb9b7bbf819133669f8aa507f915b552b3ed4dc3f6edb14d68781 = $this->env->getExtension("native_profiler");
        $__internal_0289d8f233bdb9b7bbf819133669f8aa507f915b552b3ed4dc3f6edb14d68781->enter($__internal_0289d8f233bdb9b7bbf819133669f8aa507f915b552b3ed4dc3f6edb14d68781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:camera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0289d8f233bdb9b7bbf819133669f8aa507f915b552b3ed4dc3f6edb14d68781->leave($__internal_0289d8f233bdb9b7bbf819133669f8aa507f915b552b3ed4dc3f6edb14d68781_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f6967cc52093016988921bdfecb8cdf8e12c553d8ef9204ad441cb7ed135b155 = $this->env->getExtension("native_profiler");
        $__internal_f6967cc52093016988921bdfecb8cdf8e12c553d8ef9204ad441cb7ed135b155->enter($__internal_f6967cc52093016988921bdfecb8cdf8e12c553d8ef9204ad441cb7ed135b155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "<style type=\"text/css\">body { background-color: black; }</style>";
        
        $__internal_f6967cc52093016988921bdfecb8cdf8e12c553d8ef9204ad441cb7ed135b155->leave($__internal_f6967cc52093016988921bdfecb8cdf8e12c553d8ef9204ad441cb7ed135b155_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eba4e856a964d9c0eec237e5edabacb838d1ce4538623fba895b9cef6a3600b5 = $this->env->getExtension("native_profiler");
        $__internal_eba4e856a964d9c0eec237e5edabacb838d1ce4538623fba895b9cef6a3600b5->enter($__internal_eba4e856a964d9c0eec237e5edabacb838d1ce4538623fba895b9cef6a3600b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"notice\">
        <div class=\"container-fluid\">
            <div class=\"row row-no-padding\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cameras"]) ? $context["cameras"] : $this->getContext($context, "cameras")));
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
        
        $__internal_eba4e856a964d9c0eec237e5edabacb838d1ce4538623fba895b9cef6a3600b5->leave($__internal_eba4e856a964d9c0eec237e5edabacb838d1ce4538623fba895b9cef6a3600b5_prof);

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
        return array (  76 => 14,  65 => 11,  62 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
