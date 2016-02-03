<?php

/* UniAdminBundle:Product:new.html.twig */
class __TwigTemplate_073f51642103d1257dcdd3807660d6371c8bee9e15f15d43087b6d3c3a9dba83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Product:new.html.twig", 1);
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
        $__internal_05bfd67ec1d86094a5bd85019ab046ddeefb4ffffb0f00591d803f7a4a95f691 = $this->env->getExtension("native_profiler");
        $__internal_05bfd67ec1d86094a5bd85019ab046ddeefb4ffffb0f00591d803f7a4a95f691->enter($__internal_05bfd67ec1d86094a5bd85019ab046ddeefb4ffffb0f00591d803f7a4a95f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bfd67ec1d86094a5bd85019ab046ddeefb4ffffb0f00591d803f7a4a95f691->leave($__internal_05bfd67ec1d86094a5bd85019ab046ddeefb4ffffb0f00591d803f7a4a95f691_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4ce3d673c1c353ef311afc2e3e643b730b652129a48f68381d850cb7d6d1064 = $this->env->getExtension("native_profiler");
        $__internal_a4ce3d673c1c353ef311afc2e3e643b730b652129a48f68381d850cb7d6d1064->enter($__internal_a4ce3d673c1c353ef311afc2e3e643b730b652129a48f68381d850cb7d6d1064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_a4ce3d673c1c353ef311afc2e3e643b730b652129a48f68381d850cb7d6d1064->leave($__internal_a4ce3d673c1c353ef311afc2e3e643b730b652129a48f68381d850cb7d6d1064_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c7047b6457957793a96091b6c3debd8f351f8f6b9d20af585552584fde1c6888 = $this->env->getExtension("native_profiler");
        $__internal_c7047b6457957793a96091b6c3debd8f351f8f6b9d20af585552584fde1c6888->enter($__internal_c7047b6457957793a96091b6c3debd8f351f8f6b9d20af585552584fde1c6888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_c7047b6457957793a96091b6c3debd8f351f8f6b9d20af585552584fde1c6888->leave($__internal_c7047b6457957793a96091b6c3debd8f351f8f6b9d20af585552584fde1c6888_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_50437efbd16ea12093ecf59aff3851a2b4b47896d7d53f5826ec433a02ef4bff = $this->env->getExtension("native_profiler");
        $__internal_50437efbd16ea12093ecf59aff3851a2b4b47896d7d53f5826ec433a02ef4bff->enter($__internal_50437efbd16ea12093ecf59aff3851a2b4b47896d7d53f5826ec433a02ef4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Product:new.html.twig", 11)->display($context);
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
        
        $__internal_50437efbd16ea12093ecf59aff3851a2b4b47896d7d53f5826ec433a02ef4bff->leave($__internal_50437efbd16ea12093ecf59aff3851a2b4b47896d7d53f5826ec433a02ef4bff_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Product:new.html.twig";
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
