<?php

/* UniAdminBundle:Report:edit.html.twig */
class __TwigTemplate_b33c9e88c038596eb2543b038f5e3506b5cdd3a671574a3b9a31c95262cfbd08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:edit.html.twig", 1);
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
        $__internal_6ee4f99e18643b4981825bfc90a822ae3e10dd6be5ea488ca8a325fa6a0f6a55 = $this->env->getExtension("native_profiler");
        $__internal_6ee4f99e18643b4981825bfc90a822ae3e10dd6be5ea488ca8a325fa6a0f6a55->enter($__internal_6ee4f99e18643b4981825bfc90a822ae3e10dd6be5ea488ca8a325fa6a0f6a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ee4f99e18643b4981825bfc90a822ae3e10dd6be5ea488ca8a325fa6a0f6a55->leave($__internal_6ee4f99e18643b4981825bfc90a822ae3e10dd6be5ea488ca8a325fa6a0f6a55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_808e891234f3c73840b14a98bec00174962bb615bd939afa0213ecb8e5dd965a = $this->env->getExtension("native_profiler");
        $__internal_808e891234f3c73840b14a98bec00174962bb615bd939afa0213ecb8e5dd965a->enter($__internal_808e891234f3c73840b14a98bec00174962bb615bd939afa0213ecb8e5dd965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_808e891234f3c73840b14a98bec00174962bb615bd939afa0213ecb8e5dd965a->leave($__internal_808e891234f3c73840b14a98bec00174962bb615bd939afa0213ecb8e5dd965a_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cbda5e9859e649a5da869a4c50d3c70a837e70e22a5263fc569dad4be7e718d4 = $this->env->getExtension("native_profiler");
        $__internal_cbda5e9859e649a5da869a4c50d3c70a837e70e22a5263fc569dad4be7e718d4->enter($__internal_cbda5e9859e649a5da869a4c50d3c70a837e70e22a5263fc569dad4be7e718d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_cbda5e9859e649a5da869a4c50d3c70a837e70e22a5263fc569dad4be7e718d4->leave($__internal_cbda5e9859e649a5da869a4c50d3c70a837e70e22a5263fc569dad4be7e718d4_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_58790be6e331d5151a2ef6e55117a5a7256bdf7c85f00eca841c1f8aac121363 = $this->env->getExtension("native_profiler");
        $__internal_58790be6e331d5151a2ef6e55117a5a7256bdf7c85f00eca841c1f8aac121363->enter($__internal_58790be6e331d5151a2ef6e55117a5a7256bdf7c85f00eca841c1f8aac121363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:edit.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo " ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("style" => "horizontal"));
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
        
        $__internal_58790be6e331d5151a2ef6e55117a5a7256bdf7c85f00eca841c1f8aac121363->leave($__internal_58790be6e331d5151a2ef6e55117a5a7256bdf7c85f00eca841c1f8aac121363_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }} ID: {{ entity.id }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {{ form(edit_form, { 'style': 'horizontal' }) }}*/
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
