<?php

/* UniAdminBundle:Service:edit.html.twig */
class __TwigTemplate_6699c58bb6729977750eed3d1078e33de0df3b0b12a8a3860960f70e9c4175e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:edit.html.twig", 1);
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
        $__internal_3a9ec4b707fe0e66f915ee3b131f0d9be4e2caf5ae9f0ad22453981531470a62 = $this->env->getExtension("native_profiler");
        $__internal_3a9ec4b707fe0e66f915ee3b131f0d9be4e2caf5ae9f0ad22453981531470a62->enter($__internal_3a9ec4b707fe0e66f915ee3b131f0d9be4e2caf5ae9f0ad22453981531470a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a9ec4b707fe0e66f915ee3b131f0d9be4e2caf5ae9f0ad22453981531470a62->leave($__internal_3a9ec4b707fe0e66f915ee3b131f0d9be4e2caf5ae9f0ad22453981531470a62_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6356527b026c1b4e8a4077930c1f10cd552f6dbab7006e26cf302cbbc6944d0b = $this->env->getExtension("native_profiler");
        $__internal_6356527b026c1b4e8a4077930c1f10cd552f6dbab7006e26cf302cbbc6944d0b->enter($__internal_6356527b026c1b4e8a4077930c1f10cd552f6dbab7006e26cf302cbbc6944d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_6356527b026c1b4e8a4077930c1f10cd552f6dbab7006e26cf302cbbc6944d0b->leave($__internal_6356527b026c1b4e8a4077930c1f10cd552f6dbab7006e26cf302cbbc6944d0b_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4a7b29266b4af17b58dc0a76ab8b9e3ce38eb3d7ed20fc8f73fac2c1c29097cf = $this->env->getExtension("native_profiler");
        $__internal_4a7b29266b4af17b58dc0a76ab8b9e3ce38eb3d7ed20fc8f73fac2c1c29097cf->enter($__internal_4a7b29266b4af17b58dc0a76ab8b9e3ce38eb3d7ed20fc8f73fac2c1c29097cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_4a7b29266b4af17b58dc0a76ab8b9e3ce38eb3d7ed20fc8f73fac2c1c29097cf->leave($__internal_4a7b29266b4af17b58dc0a76ab8b9e3ce38eb3d7ed20fc8f73fac2c1c29097cf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2dd21185e9b22f72b100d7a0a8d04a1ac376f4c5bc37f8f049f82e4d8b0ff63 = $this->env->getExtension("native_profiler");
        $__internal_c2dd21185e9b22f72b100d7a0a8d04a1ac376f4c5bc37f8f049f82e4d8b0ff63->enter($__internal_c2dd21185e9b22f72b100d7a0a8d04a1ac376f4c5bc37f8f049f82e4d8b0ff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:edit.html.twig", 11)->display($context);
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
        
        $__internal_c2dd21185e9b22f72b100d7a0a8d04a1ac376f4c5bc37f8f049f82e4d8b0ff63->leave($__internal_c2dd21185e9b22f72b100d7a0a8d04a1ac376f4c5bc37f8f049f82e4d8b0ff63_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:edit.html.twig";
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
