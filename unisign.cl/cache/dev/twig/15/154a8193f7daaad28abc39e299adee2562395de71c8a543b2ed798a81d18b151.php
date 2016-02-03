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
        $__internal_2afb8258dae85aea22c78bf1a7ef43201e9031aa172816e0863354e134aee998 = $this->env->getExtension("native_profiler");
        $__internal_2afb8258dae85aea22c78bf1a7ef43201e9031aa172816e0863354e134aee998->enter($__internal_2afb8258dae85aea22c78bf1a7ef43201e9031aa172816e0863354e134aee998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2afb8258dae85aea22c78bf1a7ef43201e9031aa172816e0863354e134aee998->leave($__internal_2afb8258dae85aea22c78bf1a7ef43201e9031aa172816e0863354e134aee998_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af921155af8a7fde62a39565b6a68be4db40d7085d787c74f0b795a0c6d5424e = $this->env->getExtension("native_profiler");
        $__internal_af921155af8a7fde62a39565b6a68be4db40d7085d787c74f0b795a0c6d5424e->enter($__internal_af921155af8a7fde62a39565b6a68be4db40d7085d787c74f0b795a0c6d5424e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_af921155af8a7fde62a39565b6a68be4db40d7085d787c74f0b795a0c6d5424e->leave($__internal_af921155af8a7fde62a39565b6a68be4db40d7085d787c74f0b795a0c6d5424e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e484fc462abc1a982b0568c25e4c742a3e3d8061ed253e4205c4a4d071778f8c = $this->env->getExtension("native_profiler");
        $__internal_e484fc462abc1a982b0568c25e4c742a3e3d8061ed253e4205c4a4d071778f8c->enter($__internal_e484fc462abc1a982b0568c25e4c742a3e3d8061ed253e4205c4a4d071778f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e484fc462abc1a982b0568c25e4c742a3e3d8061ed253e4205c4a4d071778f8c->leave($__internal_e484fc462abc1a982b0568c25e4c742a3e3d8061ed253e4205c4a4d071778f8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c54a81f2387f56f70cfedd813329a9f8cf776f4f31995980bad287e7b67dba7 = $this->env->getExtension("native_profiler");
        $__internal_9c54a81f2387f56f70cfedd813329a9f8cf776f4f31995980bad287e7b67dba7->enter($__internal_9c54a81f2387f56f70cfedd813329a9f8cf776f4f31995980bad287e7b67dba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9c54a81f2387f56f70cfedd813329a9f8cf776f4f31995980bad287e7b67dba7->leave($__internal_9c54a81f2387f56f70cfedd813329a9f8cf776f4f31995980bad287e7b67dba7_prof);

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
