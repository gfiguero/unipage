<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8efb1e63c378a079262aa92c380605561465872ce6e2b82e4c68de2b84342450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3c8c5fdb11fd655d75eb54a146ed76d08c1eec2872c1d8f7f0c4452318176da0 = $this->env->getExtension("native_profiler");
        $__internal_3c8c5fdb11fd655d75eb54a146ed76d08c1eec2872c1d8f7f0c4452318176da0->enter($__internal_3c8c5fdb11fd655d75eb54a146ed76d08c1eec2872c1d8f7f0c4452318176da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8c5fdb11fd655d75eb54a146ed76d08c1eec2872c1d8f7f0c4452318176da0->leave($__internal_3c8c5fdb11fd655d75eb54a146ed76d08c1eec2872c1d8f7f0c4452318176da0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc9e000b6eadfcf0fbc368f51d3d4be88fd84f1020eeb8f6f65b257f688df29d = $this->env->getExtension("native_profiler");
        $__internal_dc9e000b6eadfcf0fbc368f51d3d4be88fd84f1020eeb8f6f65b257f688df29d->enter($__internal_dc9e000b6eadfcf0fbc368f51d3d4be88fd84f1020eeb8f6f65b257f688df29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dc9e000b6eadfcf0fbc368f51d3d4be88fd84f1020eeb8f6f65b257f688df29d->leave($__internal_dc9e000b6eadfcf0fbc368f51d3d4be88fd84f1020eeb8f6f65b257f688df29d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_87be2466ca33b3f715a82028e44b429be0286e3c4683b982144983374700832f = $this->env->getExtension("native_profiler");
        $__internal_87be2466ca33b3f715a82028e44b429be0286e3c4683b982144983374700832f->enter($__internal_87be2466ca33b3f715a82028e44b429be0286e3c4683b982144983374700832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_87be2466ca33b3f715a82028e44b429be0286e3c4683b982144983374700832f->leave($__internal_87be2466ca33b3f715a82028e44b429be0286e3c4683b982144983374700832f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_937d8bd92129abb97c176fb69cd749043a55d70908a560d8f49a223511272c32 = $this->env->getExtension("native_profiler");
        $__internal_937d8bd92129abb97c176fb69cd749043a55d70908a560d8f49a223511272c32->enter($__internal_937d8bd92129abb97c176fb69cd749043a55d70908a560d8f49a223511272c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_937d8bd92129abb97c176fb69cd749043a55d70908a560d8f49a223511272c32->leave($__internal_937d8bd92129abb97c176fb69cd749043a55d70908a560d8f49a223511272c32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
