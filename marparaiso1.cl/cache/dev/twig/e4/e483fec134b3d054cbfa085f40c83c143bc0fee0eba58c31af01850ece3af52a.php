<?php

/* :Page:missionvision.html.twig */
class __TwigTemplate_c777e69177848a6d6bf9d5338dbe84a21b6bfd3e0f73d1c9cc0bc8ee7576577f extends Twig_Template
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
        $__internal_84cc96b2a95a3f29c30630286d4f48dbd4eba998533440ee43699521f2b9ba0c = $this->env->getExtension("native_profiler");
        $__internal_84cc96b2a95a3f29c30630286d4f48dbd4eba998533440ee43699521f2b9ba0c->enter($__internal_84cc96b2a95a3f29c30630286d4f48dbd4eba998533440ee43699521f2b9ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:missionvision.html.twig"));

        // line 1
        $this->displayBlock('missionvision', $context, $blocks);
        
        $__internal_84cc96b2a95a3f29c30630286d4f48dbd4eba998533440ee43699521f2b9ba0c->leave($__internal_84cc96b2a95a3f29c30630286d4f48dbd4eba998533440ee43699521f2b9ba0c_prof);

    }

    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_75ea0569b62aa2466ad9de199bdde997fa78f356dc668b3a9df554db654e1736 = $this->env->getExtension("native_profiler");
        $__internal_75ea0569b62aa2466ad9de199bdde997fa78f356dc668b3a9df554db654e1736->enter($__internal_75ea0569b62aa2466ad9de199bdde997fa78f356dc668b3a9df554db654e1736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

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
        
        $__internal_75ea0569b62aa2466ad9de199bdde997fa78f356dc668b3a9df554db654e1736->leave($__internal_75ea0569b62aa2466ad9de199bdde997fa78f356dc668b3a9df554db654e1736_prof);

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
