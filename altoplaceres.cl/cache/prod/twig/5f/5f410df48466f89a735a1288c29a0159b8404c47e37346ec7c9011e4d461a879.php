<?php

/* :Page:missionvision.html.twig */
class __TwigTemplate_38b8d6a2461353d09820dd9e7ea216ef90cd5fd9b04a02daeed66096f654923c extends Twig_Template
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
        // line 1
        $this->displayBlock('missionvision', $context, $blocks);
    }

    public function block_missionvision($context, array $blocks = array())
    {
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
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "mission", array());
        }
        echo "</p>
                    <p class=\"text-muted\">";
        // line 10
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "vision", array());
        }
        echo "</p>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return ":Page:missionvision.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  35 => 9,  26 => 2,  20 => 1,);
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
