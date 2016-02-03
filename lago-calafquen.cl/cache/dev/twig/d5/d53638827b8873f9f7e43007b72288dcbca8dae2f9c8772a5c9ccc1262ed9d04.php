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
        $__internal_cca358ae6ce28a9ba2e5b506d8e6c2f4fac3bc4228581a16c530cf1709d7b92e = $this->env->getExtension("native_profiler");
        $__internal_cca358ae6ce28a9ba2e5b506d8e6c2f4fac3bc4228581a16c530cf1709d7b92e->enter($__internal_cca358ae6ce28a9ba2e5b506d8e6c2f4fac3bc4228581a16c530cf1709d7b92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cca358ae6ce28a9ba2e5b506d8e6c2f4fac3bc4228581a16c530cf1709d7b92e->leave($__internal_cca358ae6ce28a9ba2e5b506d8e6c2f4fac3bc4228581a16c530cf1709d7b92e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c3bedb029b0c27b6fdd48578ee7ff7253fb41a85c0e362d2dbafe5656286c7d = $this->env->getExtension("native_profiler");
        $__internal_9c3bedb029b0c27b6fdd48578ee7ff7253fb41a85c0e362d2dbafe5656286c7d->enter($__internal_9c3bedb029b0c27b6fdd48578ee7ff7253fb41a85c0e362d2dbafe5656286c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9c3bedb029b0c27b6fdd48578ee7ff7253fb41a85c0e362d2dbafe5656286c7d->leave($__internal_9c3bedb029b0c27b6fdd48578ee7ff7253fb41a85c0e362d2dbafe5656286c7d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d9dce3296dd0b53c385431aba1196dd6ea7c910430c5e104e8ddd03b34d5ca1 = $this->env->getExtension("native_profiler");
        $__internal_2d9dce3296dd0b53c385431aba1196dd6ea7c910430c5e104e8ddd03b34d5ca1->enter($__internal_2d9dce3296dd0b53c385431aba1196dd6ea7c910430c5e104e8ddd03b34d5ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d9dce3296dd0b53c385431aba1196dd6ea7c910430c5e104e8ddd03b34d5ca1->leave($__internal_2d9dce3296dd0b53c385431aba1196dd6ea7c910430c5e104e8ddd03b34d5ca1_prof);

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
