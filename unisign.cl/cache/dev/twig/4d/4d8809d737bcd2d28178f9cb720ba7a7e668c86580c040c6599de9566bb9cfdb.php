<?php

/* :Page:brand.html.twig */
class __TwigTemplate_aeb073b8a2f41b2acfcbb53bd32201cb4c22ffe7b92c5d59043eea2f2ae208bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40b13af9687f3a975e44d79e4cee91a9c952c15d0a2af2ce8841c72e7abf872d = $this->env->getExtension("native_profiler");
        $__internal_40b13af9687f3a975e44d79e4cee91a9c952c15d0a2af2ce8841c72e7abf872d->enter($__internal_40b13af9687f3a975e44d79e4cee91a9c952c15d0a2af2ce8841c72e7abf872d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:brand.html.twig"));

        // line 1
        $this->displayBlock('brand', $context, $blocks);
        
        $__internal_40b13af9687f3a975e44d79e4cee91a9c952c15d0a2af2ce8841c72e7abf872d->leave($__internal_40b13af9687f3a975e44d79e4cee91a9c952c15d0a2af2ce8841c72e7abf872d_prof);

    }

    public function block_brand($context, array $blocks = array())
    {
        $__internal_62b0fed1bd6be46e30a0a7469e792d4b8c84a9b705f575d870131f05718f2048 = $this->env->getExtension("native_profiler");
        $__internal_62b0fed1bd6be46e30a0a7469e792d4b8c84a9b705f575d870131f05718f2048->enter($__internal_62b0fed1bd6be46e30a0a7469e792d4b8c84a9b705f575d870131f05718f2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        // line 2
        echo "    ";
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "title", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 5
            echo "        Título Principal
    ";
        }
        
        $__internal_62b0fed1bd6be46e30a0a7469e792d4b8c84a9b705f575d870131f05718f2048->leave($__internal_62b0fed1bd6be46e30a0a7469e792d4b8c84a9b705f575d870131f05718f2048_prof);

    }

    public function getTemplateName()
    {
        return ":Page:brand.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block brand %}*/
/*     {% if frontpage %}*/
/*         {{ frontpage.title }}*/
/*     {% else %}*/
/*         Título Principal*/
/*     {% endif %}*/
/* {% endblock %}*/
