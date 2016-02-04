<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_cb1730423033a9f2f107b0899a8b207f2079e9b746451b8fb94f57b6484f67fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_431839611877493f15ad3f169d98e063ff6e33bc7ba31d966625fd05ca731803 = $this->env->getExtension("native_profiler");
        $__internal_431839611877493f15ad3f169d98e063ff6e33bc7ba31d966625fd05ca731803->enter($__internal_431839611877493f15ad3f169d98e063ff6e33bc7ba31d966625fd05ca731803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_431839611877493f15ad3f169d98e063ff6e33bc7ba31d966625fd05ca731803->leave($__internal_431839611877493f15ad3f169d98e063ff6e33bc7ba31d966625fd05ca731803_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59f193e98cc51ea0f0e60303e409f5f38d1a6caa7f582b2a284015718078a5d1 = $this->env->getExtension("native_profiler");
        $__internal_59f193e98cc51ea0f0e60303e409f5f38d1a6caa7f582b2a284015718078a5d1->enter($__internal_59f193e98cc51ea0f0e60303e409f5f38d1a6caa7f582b2a284015718078a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_59f193e98cc51ea0f0e60303e409f5f38d1a6caa7f582b2a284015718078a5d1->leave($__internal_59f193e98cc51ea0f0e60303e409f5f38d1a6caa7f582b2a284015718078a5d1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c915f26004c30cd046d30925fd69880d245850a7e78a21cfe3ec9de732f20f8 = $this->env->getExtension("native_profiler");
        $__internal_3c915f26004c30cd046d30925fd69880d245850a7e78a21cfe3ec9de732f20f8->enter($__internal_3c915f26004c30cd046d30925fd69880d245850a7e78a21cfe3ec9de732f20f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal"));
        echo "
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_3c915f26004c30cd046d30925fd69880d245850a7e78a21cfe3ec9de732f20f8->leave($__internal_3c915f26004c30cd046d30925fd69880d245850a7e78a21cfe3ec9de732f20f8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {{ form(form, { 'style': 'horizontal' }) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/* {% endblock body %}*/
