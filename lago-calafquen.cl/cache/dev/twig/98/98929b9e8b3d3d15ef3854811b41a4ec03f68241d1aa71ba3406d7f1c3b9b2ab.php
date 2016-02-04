<?php

/* :Page:missionvision.html.twig */
class __TwigTemplate_b1b381e3bc34d20d4e016a68d5e6378efa6ca690a4f64c74d9869dd2a92fefb2 extends Twig_Template
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
        $__internal_fe8dabd04ed8001bf3b087e0fa0f6872fd3326504bfa0e250089e3e9bbf61396 = $this->env->getExtension("native_profiler");
        $__internal_fe8dabd04ed8001bf3b087e0fa0f6872fd3326504bfa0e250089e3e9bbf61396->enter($__internal_fe8dabd04ed8001bf3b087e0fa0f6872fd3326504bfa0e250089e3e9bbf61396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:missionvision.html.twig"));

        // line 1
        $this->displayBlock('missionvision', $context, $blocks);
        
        $__internal_fe8dabd04ed8001bf3b087e0fa0f6872fd3326504bfa0e250089e3e9bbf61396->leave($__internal_fe8dabd04ed8001bf3b087e0fa0f6872fd3326504bfa0e250089e3e9bbf61396_prof);

    }

    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_2cabf8949b8cd1ee25d90ef36c2458d1adfe3848d8e197d77a4eb99aa1ed5686 = $this->env->getExtension("native_profiler");
        $__internal_2cabf8949b8cd1ee25d90ef36c2458d1adfe3848d8e197d77a4eb99aa1ed5686->enter($__internal_2cabf8949b8cd1ee25d90ef36c2458d1adfe3848d8e197d77a4eb99aa1ed5686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

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
        
        $__internal_2cabf8949b8cd1ee25d90ef36c2458d1adfe3848d8e197d77a4eb99aa1ed5686->leave($__internal_2cabf8949b8cd1ee25d90ef36c2458d1adfe3848d8e197d77a4eb99aa1ed5686_prof);

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
