<?php

/* UniAdminBundle:Report:new.html.twig */
class __TwigTemplate_3670048da38d6ee0b8309c038588b3e60932fff68629f97f7dd6686b72e1841c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_211abc4ed9b698d87ab526e0bae233eefc7731ce5da67ae9917bad75d04cbfef = $this->env->getExtension("native_profiler");
        $__internal_211abc4ed9b698d87ab526e0bae233eefc7731ce5da67ae9917bad75d04cbfef->enter($__internal_211abc4ed9b698d87ab526e0bae233eefc7731ce5da67ae9917bad75d04cbfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211abc4ed9b698d87ab526e0bae233eefc7731ce5da67ae9917bad75d04cbfef->leave($__internal_211abc4ed9b698d87ab526e0bae233eefc7731ce5da67ae9917bad75d04cbfef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_587b1e6e08d6a93d3da4b8e5984e2d71dc521a3a413f394ac4cca590e820ccd3 = $this->env->getExtension("native_profiler");
        $__internal_587b1e6e08d6a93d3da4b8e5984e2d71dc521a3a413f394ac4cca590e820ccd3->enter($__internal_587b1e6e08d6a93d3da4b8e5984e2d71dc521a3a413f394ac4cca590e820ccd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_587b1e6e08d6a93d3da4b8e5984e2d71dc521a3a413f394ac4cca590e820ccd3->leave($__internal_587b1e6e08d6a93d3da4b8e5984e2d71dc521a3a413f394ac4cca590e820ccd3_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0f775c694d7bb51aa630aa4d52b7aa3dc9f63d2641e5a234406ec06063349f2f = $this->env->getExtension("native_profiler");
        $__internal_0f775c694d7bb51aa630aa4d52b7aa3dc9f63d2641e5a234406ec06063349f2f->enter($__internal_0f775c694d7bb51aa630aa4d52b7aa3dc9f63d2641e5a234406ec06063349f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_0f775c694d7bb51aa630aa4d52b7aa3dc9f63d2641e5a234406ec06063349f2f->leave($__internal_0f775c694d7bb51aa630aa4d52b7aa3dc9f63d2641e5a234406ec06063349f2f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_51059d51fdd738138cfbb6f1e140bab8cc48d335cf98c2ede501cdd7289cebcc = $this->env->getExtension("native_profiler");
        $__internal_51059d51fdd738138cfbb6f1e140bab8cc48d335cf98c2ede501cdd7289cebcc->enter($__internal_51059d51fdd738138cfbb6f1e140bab8cc48d335cf98c2ede501cdd7289cebcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:new.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_51059d51fdd738138cfbb6f1e140bab8cc48d335cf98c2ede501cdd7289cebcc->leave($__internal_51059d51fdd738138cfbb6f1e140bab8cc48d335cf98c2ede501cdd7289cebcc_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block javascript %}{{ tinymce_init() }}{% endblock %}*/
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