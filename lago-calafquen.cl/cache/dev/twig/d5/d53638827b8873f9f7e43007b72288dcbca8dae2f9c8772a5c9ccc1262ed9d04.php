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
        $__internal_55025a6bcfbfed6b4b82097bbb0e527078f1f803be05cbe90ab63ee0c0f8325c = $this->env->getExtension("native_profiler");
        $__internal_55025a6bcfbfed6b4b82097bbb0e527078f1f803be05cbe90ab63ee0c0f8325c->enter($__internal_55025a6bcfbfed6b4b82097bbb0e527078f1f803be05cbe90ab63ee0c0f8325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55025a6bcfbfed6b4b82097bbb0e527078f1f803be05cbe90ab63ee0c0f8325c->leave($__internal_55025a6bcfbfed6b4b82097bbb0e527078f1f803be05cbe90ab63ee0c0f8325c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54dcf90dc01cc6c9bfd795884495463fe22493c5e10e75ff483e6bb5365ba063 = $this->env->getExtension("native_profiler");
        $__internal_54dcf90dc01cc6c9bfd795884495463fe22493c5e10e75ff483e6bb5365ba063->enter($__internal_54dcf90dc01cc6c9bfd795884495463fe22493c5e10e75ff483e6bb5365ba063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54dcf90dc01cc6c9bfd795884495463fe22493c5e10e75ff483e6bb5365ba063->leave($__internal_54dcf90dc01cc6c9bfd795884495463fe22493c5e10e75ff483e6bb5365ba063_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_345bc062930107d8b050cb38f303fceb5e99306ada301c9edb6037ebb45c4275 = $this->env->getExtension("native_profiler");
        $__internal_345bc062930107d8b050cb38f303fceb5e99306ada301c9edb6037ebb45c4275->enter($__internal_345bc062930107d8b050cb38f303fceb5e99306ada301c9edb6037ebb45c4275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_345bc062930107d8b050cb38f303fceb5e99306ada301c9edb6037ebb45c4275->leave($__internal_345bc062930107d8b050cb38f303fceb5e99306ada301c9edb6037ebb45c4275_prof);

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
