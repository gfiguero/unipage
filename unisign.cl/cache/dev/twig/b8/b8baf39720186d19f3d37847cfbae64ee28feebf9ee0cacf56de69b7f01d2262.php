<?php

/* :Page:missionvision.html.twig */
class __TwigTemplate_c1ebe27d05a53e56a254c036358038dac3bdd0959beede8b6344bf6104096e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'missionvision' => array($this, 'block_missionvision'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66872062dab8a525bf2c1231dfc26bb74c03de0decf33279a3c4b72db53ba1bf = $this->env->getExtension("native_profiler");
        $__internal_66872062dab8a525bf2c1231dfc26bb74c03de0decf33279a3c4b72db53ba1bf->enter($__internal_66872062dab8a525bf2c1231dfc26bb74c03de0decf33279a3c4b72db53ba1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:missionvision.html.twig"));

        // line 1
        $this->displayBlock('missionvision', $context, $blocks);
        
        $__internal_66872062dab8a525bf2c1231dfc26bb74c03de0decf33279a3c4b72db53ba1bf->leave($__internal_66872062dab8a525bf2c1231dfc26bb74c03de0decf33279a3c4b72db53ba1bf_prof);

    }

    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_7ef06cc6eb5a18461bc96a3ec1a471e4a44a198f33b860c04600b04431030e02 = $this->env->getExtension("native_profiler");
        $__internal_7ef06cc6eb5a18461bc96a3ec1a471e4a44a198f33b860c04600b04431030e02->enter($__internal_7ef06cc6eb5a18461bc96a3ec1a471e4a44a198f33b860c04600b04431030e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        // line 2
        echo "    <section id=\"missionvision\" class=\"bg-gray-lighter\">
        <div class=\"container\">
            <div class=\"row text-center\">
                <div class=\"col-lg-12\">
                    <h2 class=\"section-heading\">Quienes Somos</h2>
                </div>
                <div class=\"col-lg-12\">
                    <p class=\"text-muted\">";
        // line 9
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "mission", array());
        }
        echo "</p>
                    <p class=\"text-muted\">";
        // line 10
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "vision", array());
        }
        echo "</p>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_7ef06cc6eb5a18461bc96a3ec1a471e4a44a198f33b860c04600b04431030e02->leave($__internal_7ef06cc6eb5a18461bc96a3ec1a471e4a44a198f33b860c04600b04431030e02_prof);

    }

    public function getTemplateName()
    {
        return ":Page:missionvision.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 9,  35 => 2,  23 => 1,);
    }
}
/* {% block missionvision %}*/
/*     <section id="missionvision" class="bg-gray-lighter">*/
/*         <div class="container">*/
/*             <div class="row text-center">*/
/*                 <div class="col-lg-12">*/
/*                     <h2 class="section-heading">Quienes Somos</h2>*/
/*                 </div>*/
/*                 <div class="col-lg-12">*/
/*                     <p class="text-muted">{% if frontpage %}{{ frontpage.mission|raw }}{% endif %}</p>*/
/*                     <p class="text-muted">{% if frontpage %}{{ frontpage.vision|raw }}{% endif %}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
