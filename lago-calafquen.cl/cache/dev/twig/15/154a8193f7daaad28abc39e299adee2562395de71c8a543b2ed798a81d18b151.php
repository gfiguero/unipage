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
        $__internal_b15e72c513a4a68a79143076d729cd162833adbc405e424ba61a64b591a77cde = $this->env->getExtension("native_profiler");
        $__internal_b15e72c513a4a68a79143076d729cd162833adbc405e424ba61a64b591a77cde->enter($__internal_b15e72c513a4a68a79143076d729cd162833adbc405e424ba61a64b591a77cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b15e72c513a4a68a79143076d729cd162833adbc405e424ba61a64b591a77cde->leave($__internal_b15e72c513a4a68a79143076d729cd162833adbc405e424ba61a64b591a77cde_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51cb8f17a33a29ae79bba3886bdde8a68464794d318783b956467e4a075e4009 = $this->env->getExtension("native_profiler");
        $__internal_51cb8f17a33a29ae79bba3886bdde8a68464794d318783b956467e4a075e4009->enter($__internal_51cb8f17a33a29ae79bba3886bdde8a68464794d318783b956467e4a075e4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51cb8f17a33a29ae79bba3886bdde8a68464794d318783b956467e4a075e4009->leave($__internal_51cb8f17a33a29ae79bba3886bdde8a68464794d318783b956467e4a075e4009_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e66744c173eeef879e7662c38421bfda578b2a50678ec4b483332c9c3f80d81d = $this->env->getExtension("native_profiler");
        $__internal_e66744c173eeef879e7662c38421bfda578b2a50678ec4b483332c9c3f80d81d->enter($__internal_e66744c173eeef879e7662c38421bfda578b2a50678ec4b483332c9c3f80d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e66744c173eeef879e7662c38421bfda578b2a50678ec4b483332c9c3f80d81d->leave($__internal_e66744c173eeef879e7662c38421bfda578b2a50678ec4b483332c9c3f80d81d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef2aa98099b2552bb80ef8b498c37fbcffaebe93e6090b19d8ca52d3296026f8 = $this->env->getExtension("native_profiler");
        $__internal_ef2aa98099b2552bb80ef8b498c37fbcffaebe93e6090b19d8ca52d3296026f8->enter($__internal_ef2aa98099b2552bb80ef8b498c37fbcffaebe93e6090b19d8ca52d3296026f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ef2aa98099b2552bb80ef8b498c37fbcffaebe93e6090b19d8ca52d3296026f8->leave($__internal_ef2aa98099b2552bb80ef8b498c37fbcffaebe93e6090b19d8ca52d3296026f8_prof);

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
