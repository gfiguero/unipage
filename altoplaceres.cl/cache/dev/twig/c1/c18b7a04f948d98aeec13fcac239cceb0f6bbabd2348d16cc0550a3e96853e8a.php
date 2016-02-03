<?php

/* :Page:brand.html.twig */
class __TwigTemplate_ca7b545a5e7782fc5c63619203fd9610857c4b6c1636c1214c197549bb313b4b extends Twig_Template
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
        $__internal_cbd3b137113408865bc6a7a8abd45422c2f1b486e0a0c740efa400ce9a131a1d = $this->env->getExtension("native_profiler");
        $__internal_cbd3b137113408865bc6a7a8abd45422c2f1b486e0a0c740efa400ce9a131a1d->enter($__internal_cbd3b137113408865bc6a7a8abd45422c2f1b486e0a0c740efa400ce9a131a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:brand.html.twig"));

        // line 1
        $this->displayBlock('brand', $context, $blocks);
        
        $__internal_cbd3b137113408865bc6a7a8abd45422c2f1b486e0a0c740efa400ce9a131a1d->leave($__internal_cbd3b137113408865bc6a7a8abd45422c2f1b486e0a0c740efa400ce9a131a1d_prof);

    }

    public function block_brand($context, array $blocks = array())
    {
        $__internal_1eeb0d649cd538ed9443210c7c6eaee64dd728e50bb69e9f307acda58d7ca26f = $this->env->getExtension("native_profiler");
        $__internal_1eeb0d649cd538ed9443210c7c6eaee64dd728e50bb69e9f307acda58d7ca26f->enter($__internal_1eeb0d649cd538ed9443210c7c6eaee64dd728e50bb69e9f307acda58d7ca26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

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
        
        $__internal_1eeb0d649cd538ed9443210c7c6eaee64dd728e50bb69e9f307acda58d7ca26f->leave($__internal_1eeb0d649cd538ed9443210c7c6eaee64dd728e50bb69e9f307acda58d7ca26f_prof);

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
