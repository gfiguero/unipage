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
        $__internal_ef3dbe355e2fd6d78a48bd1855789badea210d57b5c765fd0c70689b4d20f96f = $this->env->getExtension("native_profiler");
        $__internal_ef3dbe355e2fd6d78a48bd1855789badea210d57b5c765fd0c70689b4d20f96f->enter($__internal_ef3dbe355e2fd6d78a48bd1855789badea210d57b5c765fd0c70689b4d20f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3dbe355e2fd6d78a48bd1855789badea210d57b5c765fd0c70689b4d20f96f->leave($__internal_ef3dbe355e2fd6d78a48bd1855789badea210d57b5c765fd0c70689b4d20f96f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4f8446b71d9d87eba9dd6692160eaf7bf8edf8427dd20bd0697cd188d2a8dce = $this->env->getExtension("native_profiler");
        $__internal_f4f8446b71d9d87eba9dd6692160eaf7bf8edf8427dd20bd0697cd188d2a8dce->enter($__internal_f4f8446b71d9d87eba9dd6692160eaf7bf8edf8427dd20bd0697cd188d2a8dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f4f8446b71d9d87eba9dd6692160eaf7bf8edf8427dd20bd0697cd188d2a8dce->leave($__internal_f4f8446b71d9d87eba9dd6692160eaf7bf8edf8427dd20bd0697cd188d2a8dce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fa0d7147571f0c8730820595aec5de540b1b4ff58323e035108616d110194e7 = $this->env->getExtension("native_profiler");
        $__internal_4fa0d7147571f0c8730820595aec5de540b1b4ff58323e035108616d110194e7->enter($__internal_4fa0d7147571f0c8730820595aec5de540b1b4ff58323e035108616d110194e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4fa0d7147571f0c8730820595aec5de540b1b4ff58323e035108616d110194e7->leave($__internal_4fa0d7147571f0c8730820595aec5de540b1b4ff58323e035108616d110194e7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_24ea3fa5189e47b37b9a05b7b54c302fe6fbe05bdc7c839796c399e707504053 = $this->env->getExtension("native_profiler");
        $__internal_24ea3fa5189e47b37b9a05b7b54c302fe6fbe05bdc7c839796c399e707504053->enter($__internal_24ea3fa5189e47b37b9a05b7b54c302fe6fbe05bdc7c839796c399e707504053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_24ea3fa5189e47b37b9a05b7b54c302fe6fbe05bdc7c839796c399e707504053->leave($__internal_24ea3fa5189e47b37b9a05b7b54c302fe6fbe05bdc7c839796c399e707504053_prof);

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
