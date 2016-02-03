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
        $__internal_a06b64709bbe457995f8b854565b144e012205f87ae3c23de57624e9a017ed17 = $this->env->getExtension("native_profiler");
        $__internal_a06b64709bbe457995f8b854565b144e012205f87ae3c23de57624e9a017ed17->enter($__internal_a06b64709bbe457995f8b854565b144e012205f87ae3c23de57624e9a017ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06b64709bbe457995f8b854565b144e012205f87ae3c23de57624e9a017ed17->leave($__internal_a06b64709bbe457995f8b854565b144e012205f87ae3c23de57624e9a017ed17_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_13893db35a9761fb6203f90e96c8f35c887e939a3455b0bca0ba7705adc611be = $this->env->getExtension("native_profiler");
        $__internal_13893db35a9761fb6203f90e96c8f35c887e939a3455b0bca0ba7705adc611be->enter($__internal_13893db35a9761fb6203f90e96c8f35c887e939a3455b0bca0ba7705adc611be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_13893db35a9761fb6203f90e96c8f35c887e939a3455b0bca0ba7705adc611be->leave($__internal_13893db35a9761fb6203f90e96c8f35c887e939a3455b0bca0ba7705adc611be_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9074c9b516877017a1ee251d934f928839eaf471042c938af89d011cdf741725 = $this->env->getExtension("native_profiler");
        $__internal_9074c9b516877017a1ee251d934f928839eaf471042c938af89d011cdf741725->enter($__internal_9074c9b516877017a1ee251d934f928839eaf471042c938af89d011cdf741725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_9074c9b516877017a1ee251d934f928839eaf471042c938af89d011cdf741725->leave($__internal_9074c9b516877017a1ee251d934f928839eaf471042c938af89d011cdf741725_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_db01a0ed6ad0ed5f643a0bfa386d64c08e239ff1ccb07bcc11f07cbd9d5e57ed = $this->env->getExtension("native_profiler");
        $__internal_db01a0ed6ad0ed5f643a0bfa386d64c08e239ff1ccb07bcc11f07cbd9d5e57ed->enter($__internal_db01a0ed6ad0ed5f643a0bfa386d64c08e239ff1ccb07bcc11f07cbd9d5e57ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_db01a0ed6ad0ed5f643a0bfa386d64c08e239ff1ccb07bcc11f07cbd9d5e57ed->leave($__internal_db01a0ed6ad0ed5f643a0bfa386d64c08e239ff1ccb07bcc11f07cbd9d5e57ed_prof);

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
