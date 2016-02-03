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
        $__internal_34b40e5aed6c0b5054f475f1f582c2219da3b40ef66d8ebfda40fe9cf24f0179 = $this->env->getExtension("native_profiler");
        $__internal_34b40e5aed6c0b5054f475f1f582c2219da3b40ef66d8ebfda40fe9cf24f0179->enter($__internal_34b40e5aed6c0b5054f475f1f582c2219da3b40ef66d8ebfda40fe9cf24f0179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:camera.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34b40e5aed6c0b5054f475f1f582c2219da3b40ef66d8ebfda40fe9cf24f0179->leave($__internal_34b40e5aed6c0b5054f475f1f582c2219da3b40ef66d8ebfda40fe9cf24f0179_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_05cceb6e314b977b4cd01bcc260d066c9ce04a428e507d79f5a0066e3e47d2e1 = $this->env->getExtension("native_profiler");
        $__internal_05cceb6e314b977b4cd01bcc260d066c9ce04a428e507d79f5a0066e3e47d2e1->enter($__internal_05cceb6e314b977b4cd01bcc260d066c9ce04a428e507d79f5a0066e3e47d2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        echo "<style type=\"text/css\">body { background-color: black; }</style>";
        
        $__internal_05cceb6e314b977b4cd01bcc260d066c9ce04a428e507d79f5a0066e3e47d2e1->leave($__internal_05cceb6e314b977b4cd01bcc260d066c9ce04a428e507d79f5a0066e3e47d2e1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70d34d1bffeeedfd3abb9759b85d008582eba24ba293682210e8d32c292f38b = $this->env->getExtension("native_profiler");
        $__internal_d70d34d1bffeeedfd3abb9759b85d008582eba24ba293682210e8d32c292f38b->enter($__internal_d70d34d1bffeeedfd3abb9759b85d008582eba24ba293682210e8d32c292f38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d70d34d1bffeeedfd3abb9759b85d008582eba24ba293682210e8d32c292f38b->leave($__internal_d70d34d1bffeeedfd3abb9759b85d008582eba24ba293682210e8d32c292f38b_prof);

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
