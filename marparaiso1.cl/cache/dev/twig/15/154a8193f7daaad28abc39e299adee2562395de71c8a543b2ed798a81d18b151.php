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
        $__internal_4400dba66857e2ded78ca02dc176531a88b7ac402f2add1f1422c6abf772186e = $this->env->getExtension("native_profiler");
        $__internal_4400dba66857e2ded78ca02dc176531a88b7ac402f2add1f1422c6abf772186e->enter($__internal_4400dba66857e2ded78ca02dc176531a88b7ac402f2add1f1422c6abf772186e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4400dba66857e2ded78ca02dc176531a88b7ac402f2add1f1422c6abf772186e->leave($__internal_4400dba66857e2ded78ca02dc176531a88b7ac402f2add1f1422c6abf772186e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_615dcfa18d37e4b69eef2ad655a61b80b4d9fb4e2f02152146e1e173c6ca4104 = $this->env->getExtension("native_profiler");
        $__internal_615dcfa18d37e4b69eef2ad655a61b80b4d9fb4e2f02152146e1e173c6ca4104->enter($__internal_615dcfa18d37e4b69eef2ad655a61b80b4d9fb4e2f02152146e1e173c6ca4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_615dcfa18d37e4b69eef2ad655a61b80b4d9fb4e2f02152146e1e173c6ca4104->leave($__internal_615dcfa18d37e4b69eef2ad655a61b80b4d9fb4e2f02152146e1e173c6ca4104_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40dd2441b97deb83c99e9890947ab469a351a9a6da3a304999777c638c408f16 = $this->env->getExtension("native_profiler");
        $__internal_40dd2441b97deb83c99e9890947ab469a351a9a6da3a304999777c638c408f16->enter($__internal_40dd2441b97deb83c99e9890947ab469a351a9a6da3a304999777c638c408f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40dd2441b97deb83c99e9890947ab469a351a9a6da3a304999777c638c408f16->leave($__internal_40dd2441b97deb83c99e9890947ab469a351a9a6da3a304999777c638c408f16_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c654729736b7c27e7c441abb5f7425ff2ed87280f6ff82ad1a482523c8da577e = $this->env->getExtension("native_profiler");
        $__internal_c654729736b7c27e7c441abb5f7425ff2ed87280f6ff82ad1a482523c8da577e->enter($__internal_c654729736b7c27e7c441abb5f7425ff2ed87280f6ff82ad1a482523c8da577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c654729736b7c27e7c441abb5f7425ff2ed87280f6ff82ad1a482523c8da577e->leave($__internal_c654729736b7c27e7c441abb5f7425ff2ed87280f6ff82ad1a482523c8da577e_prof);

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
