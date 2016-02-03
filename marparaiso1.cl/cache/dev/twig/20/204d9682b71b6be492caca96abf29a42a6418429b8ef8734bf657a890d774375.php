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
        $__internal_383cd976bce05d14ede8ca0a5cb57867c6297ca379455f7c30f86841673a74d0 = $this->env->getExtension("native_profiler");
        $__internal_383cd976bce05d14ede8ca0a5cb57867c6297ca379455f7c30f86841673a74d0->enter($__internal_383cd976bce05d14ede8ca0a5cb57867c6297ca379455f7c30f86841673a74d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:camera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383cd976bce05d14ede8ca0a5cb57867c6297ca379455f7c30f86841673a74d0->leave($__internal_383cd976bce05d14ede8ca0a5cb57867c6297ca379455f7c30f86841673a74d0_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b7e08d5a933bf2687770ffe224e2346d96081a56c27bc2a8e7b65ea86a6da653 = $this->env->getExtension("native_profiler");
        $__internal_b7e08d5a933bf2687770ffe224e2346d96081a56c27bc2a8e7b65ea86a6da653->enter($__internal_b7e08d5a933bf2687770ffe224e2346d96081a56c27bc2a8e7b65ea86a6da653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "<style type=\"text/css\">body { background-color: black; }</style>";
        
        $__internal_b7e08d5a933bf2687770ffe224e2346d96081a56c27bc2a8e7b65ea86a6da653->leave($__internal_b7e08d5a933bf2687770ffe224e2346d96081a56c27bc2a8e7b65ea86a6da653_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8dbe7a4dade12691f066ad124afd2b8c05692a25a4b5d7d91b04da966a16ce = $this->env->getExtension("native_profiler");
        $__internal_9c8dbe7a4dade12691f066ad124afd2b8c05692a25a4b5d7d91b04da966a16ce->enter($__internal_9c8dbe7a4dade12691f066ad124afd2b8c05692a25a4b5d7d91b04da966a16ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c8dbe7a4dade12691f066ad124afd2b8c05692a25a4b5d7d91b04da966a16ce->leave($__internal_9c8dbe7a4dade12691f066ad124afd2b8c05692a25a4b5d7d91b04da966a16ce_prof);

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
