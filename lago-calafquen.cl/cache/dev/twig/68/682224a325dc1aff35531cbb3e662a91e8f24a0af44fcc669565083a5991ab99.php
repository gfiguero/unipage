<?php

/* UniAdminBundle:Process:new.html.twig */
class __TwigTemplate_7692ebe79c47a116c4d5db942e61a8be19d841fb8d72f83ef6a2a5d0869d5e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:new.html.twig", 1);
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
        $__internal_9240cbca695a4bca5ab4c6d4ccf30cfafd9c2da6ffb2df5e219f063cd79f2ae0 = $this->env->getExtension("native_profiler");
        $__internal_9240cbca695a4bca5ab4c6d4ccf30cfafd9c2da6ffb2df5e219f063cd79f2ae0->enter($__internal_9240cbca695a4bca5ab4c6d4ccf30cfafd9c2da6ffb2df5e219f063cd79f2ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9240cbca695a4bca5ab4c6d4ccf30cfafd9c2da6ffb2df5e219f063cd79f2ae0->leave($__internal_9240cbca695a4bca5ab4c6d4ccf30cfafd9c2da6ffb2df5e219f063cd79f2ae0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aae34391fc2636f02a124e483bfd838c968b9f7db1c0920a6436f1d19aae4a9 = $this->env->getExtension("native_profiler");
        $__internal_4aae34391fc2636f02a124e483bfd838c968b9f7db1c0920a6436f1d19aae4a9->enter($__internal_4aae34391fc2636f02a124e483bfd838c968b9f7db1c0920a6436f1d19aae4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_4aae34391fc2636f02a124e483bfd838c968b9f7db1c0920a6436f1d19aae4a9->leave($__internal_4aae34391fc2636f02a124e483bfd838c968b9f7db1c0920a6436f1d19aae4a9_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_677efdb72385ea2222180a594c6c28fb8ae65f5951d2ea57de41ed13a1755bdf = $this->env->getExtension("native_profiler");
        $__internal_677efdb72385ea2222180a594c6c28fb8ae65f5951d2ea57de41ed13a1755bdf->enter($__internal_677efdb72385ea2222180a594c6c28fb8ae65f5951d2ea57de41ed13a1755bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_677efdb72385ea2222180a594c6c28fb8ae65f5951d2ea57de41ed13a1755bdf->leave($__internal_677efdb72385ea2222180a594c6c28fb8ae65f5951d2ea57de41ed13a1755bdf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2f776bb4c7776be8a12961b3acbf333ccadd082a454f01eda180c0562b1c81 = $this->env->getExtension("native_profiler");
        $__internal_5b2f776bb4c7776be8a12961b3acbf333ccadd082a454f01eda180c0562b1c81->enter($__internal_5b2f776bb4c7776be8a12961b3acbf333ccadd082a454f01eda180c0562b1c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:new.html.twig", 11)->display($context);
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
        
        $__internal_5b2f776bb4c7776be8a12961b3acbf333ccadd082a454f01eda180c0562b1c81->leave($__internal_5b2f776bb4c7776be8a12961b3acbf333ccadd082a454f01eda180c0562b1c81_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:new.html.twig";
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
