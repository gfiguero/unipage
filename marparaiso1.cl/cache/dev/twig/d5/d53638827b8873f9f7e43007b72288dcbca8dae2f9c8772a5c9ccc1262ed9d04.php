<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_54f5f9d28df4fad5eaab43228313edcc11955c88e51d373c48eb6fccdfc4edf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a097d7f47344d6fdfc0d4e1a6de4b9e1428a5186aaa3286aa47c4b8d074ba78e = $this->env->getExtension("native_profiler");
        $__internal_a097d7f47344d6fdfc0d4e1a6de4b9e1428a5186aaa3286aa47c4b8d074ba78e->enter($__internal_a097d7f47344d6fdfc0d4e1a6de4b9e1428a5186aaa3286aa47c4b8d074ba78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a097d7f47344d6fdfc0d4e1a6de4b9e1428a5186aaa3286aa47c4b8d074ba78e->leave($__internal_a097d7f47344d6fdfc0d4e1a6de4b9e1428a5186aaa3286aa47c4b8d074ba78e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3178278d89c29733711a3546bb9591bf08fc62e4b0f9d0218f6f0a7f85a3750a = $this->env->getExtension("native_profiler");
        $__internal_3178278d89c29733711a3546bb9591bf08fc62e4b0f9d0218f6f0a7f85a3750a->enter($__internal_3178278d89c29733711a3546bb9591bf08fc62e4b0f9d0218f6f0a7f85a3750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3178278d89c29733711a3546bb9591bf08fc62e4b0f9d0218f6f0a7f85a3750a->leave($__internal_3178278d89c29733711a3546bb9591bf08fc62e4b0f9d0218f6f0a7f85a3750a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1e746e12f571d64b2d1b295e195ad92c3bd43c8afde6432d7747e55c079b808 = $this->env->getExtension("native_profiler");
        $__internal_d1e746e12f571d64b2d1b295e195ad92c3bd43c8afde6432d7747e55c079b808->enter($__internal_d1e746e12f571d64b2d1b295e195ad92c3bd43c8afde6432d7747e55c079b808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d1e746e12f571d64b2d1b295e195ad92c3bd43c8afde6432d7747e55c079b808->leave($__internal_d1e746e12f571d64b2d1b295e195ad92c3bd43c8afde6432d7747e55c079b808_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
