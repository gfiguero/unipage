<?php

/* :Page:missionvision.html.twig */
class __TwigTemplate_ed9e708bdf6a2cb170948cefb41ea925cc2f593bcb21a4ee7b85e7cb422146a5 extends Twig_Template
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
        $__internal_8f3adfde1566c35862c511ea10c431726ef56f373b093a3e090c461f799bf97e = $this->env->getExtension("native_profiler");
        $__internal_8f3adfde1566c35862c511ea10c431726ef56f373b093a3e090c461f799bf97e->enter($__internal_8f3adfde1566c35862c511ea10c431726ef56f373b093a3e090c461f799bf97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:missionvision.html.twig"));

        // line 1
        $this->displayBlock('missionvision', $context, $blocks);
        
        $__internal_8f3adfde1566c35862c511ea10c431726ef56f373b093a3e090c461f799bf97e->leave($__internal_8f3adfde1566c35862c511ea10c431726ef56f373b093a3e090c461f799bf97e_prof);

    }

    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_dcfc50a04ab5065ddd1f03195ef1ca8a915c93ed6775585577d8958fe98209da = $this->env->getExtension("native_profiler");
        $__internal_dcfc50a04ab5065ddd1f03195ef1ca8a915c93ed6775585577d8958fe98209da->enter($__internal_dcfc50a04ab5065ddd1f03195ef1ca8a915c93ed6775585577d8958fe98209da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

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
        
        $__internal_dcfc50a04ab5065ddd1f03195ef1ca8a915c93ed6775585577d8958fe98209da->leave($__internal_dcfc50a04ab5065ddd1f03195ef1ca8a915c93ed6775585577d8958fe98209da_prof);

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
