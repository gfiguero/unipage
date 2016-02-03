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
        $__internal_8f1ab2487634889954db90478dc7717a72bf57cdafa69bca7c4fa6702911e291 = $this->env->getExtension("native_profiler");
        $__internal_8f1ab2487634889954db90478dc7717a72bf57cdafa69bca7c4fa6702911e291->enter($__internal_8f1ab2487634889954db90478dc7717a72bf57cdafa69bca7c4fa6702911e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1ab2487634889954db90478dc7717a72bf57cdafa69bca7c4fa6702911e291->leave($__internal_8f1ab2487634889954db90478dc7717a72bf57cdafa69bca7c4fa6702911e291_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef1f2f1da4baaa8e3f682ba5f133a9a8ee0e39505662db6a1ae3d83fd76b4e0c = $this->env->getExtension("native_profiler");
        $__internal_ef1f2f1da4baaa8e3f682ba5f133a9a8ee0e39505662db6a1ae3d83fd76b4e0c->enter($__internal_ef1f2f1da4baaa8e3f682ba5f133a9a8ee0e39505662db6a1ae3d83fd76b4e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ef1f2f1da4baaa8e3f682ba5f133a9a8ee0e39505662db6a1ae3d83fd76b4e0c->leave($__internal_ef1f2f1da4baaa8e3f682ba5f133a9a8ee0e39505662db6a1ae3d83fd76b4e0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f482f8e5f756c3374dde049cf98da1f057bfdcefde8eccc669e9d99c42e01c = $this->env->getExtension("native_profiler");
        $__internal_24f482f8e5f756c3374dde049cf98da1f057bfdcefde8eccc669e9d99c42e01c->enter($__internal_24f482f8e5f756c3374dde049cf98da1f057bfdcefde8eccc669e9d99c42e01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24f482f8e5f756c3374dde049cf98da1f057bfdcefde8eccc669e9d99c42e01c->leave($__internal_24f482f8e5f756c3374dde049cf98da1f057bfdcefde8eccc669e9d99c42e01c_prof);

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
