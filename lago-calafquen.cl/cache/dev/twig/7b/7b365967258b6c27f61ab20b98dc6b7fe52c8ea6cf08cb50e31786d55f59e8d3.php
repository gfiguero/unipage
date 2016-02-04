<?php

/* UniAdminBundle:Notice:new.html.twig */
class __TwigTemplate_92aec3fb5ed06f7ea2d8b856f06600ce74836607b2c30f8e2a673233db439a3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Notice:new.html.twig", 1);
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
        $__internal_b4b14851964fa41a9c5e975942ba208da639bfa8bf8b9b942c740eecedf28669 = $this->env->getExtension("native_profiler");
        $__internal_b4b14851964fa41a9c5e975942ba208da639bfa8bf8b9b942c740eecedf28669->enter($__internal_b4b14851964fa41a9c5e975942ba208da639bfa8bf8b9b942c740eecedf28669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4b14851964fa41a9c5e975942ba208da639bfa8bf8b9b942c740eecedf28669->leave($__internal_b4b14851964fa41a9c5e975942ba208da639bfa8bf8b9b942c740eecedf28669_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f65cdb0e9e31dad8fe7b5a7a4a02781b7b395352c5bfc8a657e8bf65fccedf2 = $this->env->getExtension("native_profiler");
        $__internal_9f65cdb0e9e31dad8fe7b5a7a4a02781b7b395352c5bfc8a657e8bf65fccedf2->enter($__internal_9f65cdb0e9e31dad8fe7b5a7a4a02781b7b395352c5bfc8a657e8bf65fccedf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_9f65cdb0e9e31dad8fe7b5a7a4a02781b7b395352c5bfc8a657e8bf65fccedf2->leave($__internal_9f65cdb0e9e31dad8fe7b5a7a4a02781b7b395352c5bfc8a657e8bf65fccedf2_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e12d0e9bf322535c3b8b1bd13543fdf2985375d5593916e9bc3b04c469ae6816 = $this->env->getExtension("native_profiler");
        $__internal_e12d0e9bf322535c3b8b1bd13543fdf2985375d5593916e9bc3b04c469ae6816->enter($__internal_e12d0e9bf322535c3b8b1bd13543fdf2985375d5593916e9bc3b04c469ae6816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_e12d0e9bf322535c3b8b1bd13543fdf2985375d5593916e9bc3b04c469ae6816->leave($__internal_e12d0e9bf322535c3b8b1bd13543fdf2985375d5593916e9bc3b04c469ae6816_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9864dc9f7e76e811906e1b8f8a8f0c48cf8706144b84a9fa7ec7bb36d54974 = $this->env->getExtension("native_profiler");
        $__internal_6c9864dc9f7e76e811906e1b8f8a8f0c48cf8706144b84a9fa7ec7bb36d54974->enter($__internal_6c9864dc9f7e76e811906e1b8f8a8f0c48cf8706144b84a9fa7ec7bb36d54974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Notice:new.html.twig", 11)->display($context);
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
        
        $__internal_6c9864dc9f7e76e811906e1b8f8a8f0c48cf8706144b84a9fa7ec7bb36d54974->leave($__internal_6c9864dc9f7e76e811906e1b8f8a8f0c48cf8706144b84a9fa7ec7bb36d54974_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Notice:new.html.twig";
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
