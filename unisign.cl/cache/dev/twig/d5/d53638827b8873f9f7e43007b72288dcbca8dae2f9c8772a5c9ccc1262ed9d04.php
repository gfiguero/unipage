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
        $__internal_14f3703aa7b4a20946806d37041d65520553a881b1b4817ec3f031041c558cb0 = $this->env->getExtension("native_profiler");
        $__internal_14f3703aa7b4a20946806d37041d65520553a881b1b4817ec3f031041c558cb0->enter($__internal_14f3703aa7b4a20946806d37041d65520553a881b1b4817ec3f031041c558cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14f3703aa7b4a20946806d37041d65520553a881b1b4817ec3f031041c558cb0->leave($__internal_14f3703aa7b4a20946806d37041d65520553a881b1b4817ec3f031041c558cb0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_393f5b1bcc9aca62cffbd2d9e1c51bd118da135f4a3ae55cf8a7a0fae84f3278 = $this->env->getExtension("native_profiler");
        $__internal_393f5b1bcc9aca62cffbd2d9e1c51bd118da135f4a3ae55cf8a7a0fae84f3278->enter($__internal_393f5b1bcc9aca62cffbd2d9e1c51bd118da135f4a3ae55cf8a7a0fae84f3278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_393f5b1bcc9aca62cffbd2d9e1c51bd118da135f4a3ae55cf8a7a0fae84f3278->leave($__internal_393f5b1bcc9aca62cffbd2d9e1c51bd118da135f4a3ae55cf8a7a0fae84f3278_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50328fad6fde27780b34bc7ad9800f18d36e5dceca8228d9f8a126f30da8c35c = $this->env->getExtension("native_profiler");
        $__internal_50328fad6fde27780b34bc7ad9800f18d36e5dceca8228d9f8a126f30da8c35c->enter($__internal_50328fad6fde27780b34bc7ad9800f18d36e5dceca8228d9f8a126f30da8c35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50328fad6fde27780b34bc7ad9800f18d36e5dceca8228d9f8a126f30da8c35c->leave($__internal_50328fad6fde27780b34bc7ad9800f18d36e5dceca8228d9f8a126f30da8c35c_prof);

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
