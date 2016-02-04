<?php

/* UniAdminBundle:Camera:new.html.twig */
class __TwigTemplate_f1786bf1672c03ddf39ed4373f2d6057ba830fba92aee47633fc4bfb0c2c05fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Camera:new.html.twig", 1);
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
        $__internal_455055d964822b61fcb2fc05f1cc896a79bcea4bfc9c416f0f5f0c904a9212f0 = $this->env->getExtension("native_profiler");
        $__internal_455055d964822b61fcb2fc05f1cc896a79bcea4bfc9c416f0f5f0c904a9212f0->enter($__internal_455055d964822b61fcb2fc05f1cc896a79bcea4bfc9c416f0f5f0c904a9212f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Camera:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_455055d964822b61fcb2fc05f1cc896a79bcea4bfc9c416f0f5f0c904a9212f0->leave($__internal_455055d964822b61fcb2fc05f1cc896a79bcea4bfc9c416f0f5f0c904a9212f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5f27eeacb422b4bfe9cabcc87d3224f697ee4fc5d401f104f9e8a3e7838566 = $this->env->getExtension("native_profiler");
        $__internal_da5f27eeacb422b4bfe9cabcc87d3224f697ee4fc5d401f104f9e8a3e7838566->enter($__internal_da5f27eeacb422b4bfe9cabcc87d3224f697ee4fc5d401f104f9e8a3e7838566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_da5f27eeacb422b4bfe9cabcc87d3224f697ee4fc5d401f104f9e8a3e7838566->leave($__internal_da5f27eeacb422b4bfe9cabcc87d3224f697ee4fc5d401f104f9e8a3e7838566_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12c00082efe23c49ac8c744aaf89d2e2c62b20d30bf6513f45d02cd27bd34ec = $this->env->getExtension("native_profiler");
        $__internal_b12c00082efe23c49ac8c744aaf89d2e2c62b20d30bf6513f45d02cd27bd34ec->enter($__internal_b12c00082efe23c49ac8c744aaf89d2e2c62b20d30bf6513f45d02cd27bd34ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Camera:new.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal"));
        echo "
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
";
        
        $__internal_b12c00082efe23c49ac8c744aaf89d2e2c62b20d30bf6513f45d02cd27bd34ec->leave($__internal_b12c00082efe23c49ac8c744aaf89d2e2c62b20d30bf6513f45d02cd27bd34ec_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Camera:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
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
/*     <!-- /#page-wrapper -->*/
/* {% endblock %}*/
/* */
