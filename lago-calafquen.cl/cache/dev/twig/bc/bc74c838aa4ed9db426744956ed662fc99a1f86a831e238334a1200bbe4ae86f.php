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
        $__internal_b82f8ff4707add0f58872da8c724fe34ce01df7c9e70b41f8a0531c7d9860b2f = $this->env->getExtension("native_profiler");
        $__internal_b82f8ff4707add0f58872da8c724fe34ce01df7c9e70b41f8a0531c7d9860b2f->enter($__internal_b82f8ff4707add0f58872da8c724fe34ce01df7c9e70b41f8a0531c7d9860b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82f8ff4707add0f58872da8c724fe34ce01df7c9e70b41f8a0531c7d9860b2f->leave($__internal_b82f8ff4707add0f58872da8c724fe34ce01df7c9e70b41f8a0531c7d9860b2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9fe2c8f086c132eaca8bdd01d3af5a92513c3af66afcf2c79f1ccce0e6bc3483 = $this->env->getExtension("native_profiler");
        $__internal_9fe2c8f086c132eaca8bdd01d3af5a92513c3af66afcf2c79f1ccce0e6bc3483->enter($__internal_9fe2c8f086c132eaca8bdd01d3af5a92513c3af66afcf2c79f1ccce0e6bc3483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_9fe2c8f086c132eaca8bdd01d3af5a92513c3af66afcf2c79f1ccce0e6bc3483->leave($__internal_9fe2c8f086c132eaca8bdd01d3af5a92513c3af66afcf2c79f1ccce0e6bc3483_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_148de6ebab896e282906241948d7a7c7c2f195f85c91c20d2ee34ab0cc456083 = $this->env->getExtension("native_profiler");
        $__internal_148de6ebab896e282906241948d7a7c7c2f195f85c91c20d2ee34ab0cc456083->enter($__internal_148de6ebab896e282906241948d7a7c7c2f195f85c91c20d2ee34ab0cc456083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_148de6ebab896e282906241948d7a7c7c2f195f85c91c20d2ee34ab0cc456083->leave($__internal_148de6ebab896e282906241948d7a7c7c2f195f85c91c20d2ee34ab0cc456083_prof);

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
