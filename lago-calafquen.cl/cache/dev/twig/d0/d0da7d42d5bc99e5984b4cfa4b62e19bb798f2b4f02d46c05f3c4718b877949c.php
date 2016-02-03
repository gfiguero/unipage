<?php

/* :Page:brand.html.twig */
class __TwigTemplate_e14b0a5d94056b9de2e8e2d066dae6a93921e58a9e784db703275bc1fbb681b6 extends Twig_Template
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
        $__internal_d8a0329eda2a1d803305d0982b9c429c50a0abf0d8c89ba982e5572e9ed019ff = $this->env->getExtension("native_profiler");
        $__internal_d8a0329eda2a1d803305d0982b9c429c50a0abf0d8c89ba982e5572e9ed019ff->enter($__internal_d8a0329eda2a1d803305d0982b9c429c50a0abf0d8c89ba982e5572e9ed019ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:brand.html.twig"));

        // line 1
        $this->displayBlock('brand', $context, $blocks);
        
        $__internal_d8a0329eda2a1d803305d0982b9c429c50a0abf0d8c89ba982e5572e9ed019ff->leave($__internal_d8a0329eda2a1d803305d0982b9c429c50a0abf0d8c89ba982e5572e9ed019ff_prof);

    }

    public function block_brand($context, array $blocks = array())
    {
        $__internal_4908de41d4bcab4fb661f818c37019b0306ba40ff2a0c38a0161bd4c867fce1a = $this->env->getExtension("native_profiler");
        $__internal_4908de41d4bcab4fb661f818c37019b0306ba40ff2a0c38a0161bd4c867fce1a->enter($__internal_4908de41d4bcab4fb661f818c37019b0306ba40ff2a0c38a0161bd4c867fce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

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
        
        $__internal_4908de41d4bcab4fb661f818c37019b0306ba40ff2a0c38a0161bd4c867fce1a->leave($__internal_4908de41d4bcab4fb661f818c37019b0306ba40ff2a0c38a0161bd4c867fce1a_prof);

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
