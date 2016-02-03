<?php

/* UniAdminBundle:Service:new.html.twig */
class __TwigTemplate_8e8751f1a911375e9f233d3fe499ea84f5411352b2d3bc700b7639aea99468ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:new.html.twig", 1);
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
        $__internal_b4128324814037968b2b1ff390e60bcec577c4e1025d4c87f960291cfa3cc32b = $this->env->getExtension("native_profiler");
        $__internal_b4128324814037968b2b1ff390e60bcec577c4e1025d4c87f960291cfa3cc32b->enter($__internal_b4128324814037968b2b1ff390e60bcec577c4e1025d4c87f960291cfa3cc32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4128324814037968b2b1ff390e60bcec577c4e1025d4c87f960291cfa3cc32b->leave($__internal_b4128324814037968b2b1ff390e60bcec577c4e1025d4c87f960291cfa3cc32b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2d8b12d1ac0c0de99c742f1c1df41f9ffd39f0af960e717c9ff7cb2254d80fa = $this->env->getExtension("native_profiler");
        $__internal_f2d8b12d1ac0c0de99c742f1c1df41f9ffd39f0af960e717c9ff7cb2254d80fa->enter($__internal_f2d8b12d1ac0c0de99c742f1c1df41f9ffd39f0af960e717c9ff7cb2254d80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_f2d8b12d1ac0c0de99c742f1c1df41f9ffd39f0af960e717c9ff7cb2254d80fa->leave($__internal_f2d8b12d1ac0c0de99c742f1c1df41f9ffd39f0af960e717c9ff7cb2254d80fa_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_46803989d59b94abd53ceb4b1c64250772d13bc128bfb3a6489e44d316da901f = $this->env->getExtension("native_profiler");
        $__internal_46803989d59b94abd53ceb4b1c64250772d13bc128bfb3a6489e44d316da901f->enter($__internal_46803989d59b94abd53ceb4b1c64250772d13bc128bfb3a6489e44d316da901f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_46803989d59b94abd53ceb4b1c64250772d13bc128bfb3a6489e44d316da901f->leave($__internal_46803989d59b94abd53ceb4b1c64250772d13bc128bfb3a6489e44d316da901f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_735fbf9a9a9fbd230294b7689fca8eb033ab516c30c1caafcda1fe26270de419 = $this->env->getExtension("native_profiler");
        $__internal_735fbf9a9a9fbd230294b7689fca8eb033ab516c30c1caafcda1fe26270de419->enter($__internal_735fbf9a9a9fbd230294b7689fca8eb033ab516c30c1caafcda1fe26270de419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:new.html.twig", 11)->display($context);
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
        
        $__internal_735fbf9a9a9fbd230294b7689fca8eb033ab516c30c1caafcda1fe26270de419->leave($__internal_735fbf9a9a9fbd230294b7689fca8eb033ab516c30c1caafcda1fe26270de419_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:new.html.twig";
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
