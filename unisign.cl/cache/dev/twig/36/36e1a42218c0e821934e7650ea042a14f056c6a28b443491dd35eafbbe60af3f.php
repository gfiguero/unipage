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
        $__internal_e2f871b517f23123030635b3cbc3a42aafe979868231cae1c840719cd510d83d = $this->env->getExtension("native_profiler");
        $__internal_e2f871b517f23123030635b3cbc3a42aafe979868231cae1c840719cd510d83d->enter($__internal_e2f871b517f23123030635b3cbc3a42aafe979868231cae1c840719cd510d83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f871b517f23123030635b3cbc3a42aafe979868231cae1c840719cd510d83d->leave($__internal_e2f871b517f23123030635b3cbc3a42aafe979868231cae1c840719cd510d83d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9257a420744dffca7c631f32b4ac6bd3121a789b97b456db462d8ad763d2d04e = $this->env->getExtension("native_profiler");
        $__internal_9257a420744dffca7c631f32b4ac6bd3121a789b97b456db462d8ad763d2d04e->enter($__internal_9257a420744dffca7c631f32b4ac6bd3121a789b97b456db462d8ad763d2d04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_9257a420744dffca7c631f32b4ac6bd3121a789b97b456db462d8ad763d2d04e->leave($__internal_9257a420744dffca7c631f32b4ac6bd3121a789b97b456db462d8ad763d2d04e_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f5204f3f37197d240ce48b19213068bf89ed87365a3256ca5c00d9cac9cfeacd = $this->env->getExtension("native_profiler");
        $__internal_f5204f3f37197d240ce48b19213068bf89ed87365a3256ca5c00d9cac9cfeacd->enter($__internal_f5204f3f37197d240ce48b19213068bf89ed87365a3256ca5c00d9cac9cfeacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_f5204f3f37197d240ce48b19213068bf89ed87365a3256ca5c00d9cac9cfeacd->leave($__internal_f5204f3f37197d240ce48b19213068bf89ed87365a3256ca5c00d9cac9cfeacd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c21231590085f9f59629e2ae9b83a1d11460a8abc8128192e73cd6b85e913ce = $this->env->getExtension("native_profiler");
        $__internal_5c21231590085f9f59629e2ae9b83a1d11460a8abc8128192e73cd6b85e913ce->enter($__internal_5c21231590085f9f59629e2ae9b83a1d11460a8abc8128192e73cd6b85e913ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c21231590085f9f59629e2ae9b83a1d11460a8abc8128192e73cd6b85e913ce->leave($__internal_5c21231590085f9f59629e2ae9b83a1d11460a8abc8128192e73cd6b85e913ce_prof);

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
