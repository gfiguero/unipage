<?php

/* UniAdminBundle:Frontpage:new.html.twig */
class __TwigTemplate_63f71c9190b913e73221b05337ed490492a6a444d2cfd7d08c8e521c5e08668a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 1);
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
        $__internal_4879445c71c20a4486583f041037074018a18e26bea90959f88678a0589222b6 = $this->env->getExtension("native_profiler");
        $__internal_4879445c71c20a4486583f041037074018a18e26bea90959f88678a0589222b6->enter($__internal_4879445c71c20a4486583f041037074018a18e26bea90959f88678a0589222b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4879445c71c20a4486583f041037074018a18e26bea90959f88678a0589222b6->leave($__internal_4879445c71c20a4486583f041037074018a18e26bea90959f88678a0589222b6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82388b798bd1aabde84396bc93ac80eaa6f3f70f075fdb25f00d53b414d58acf = $this->env->getExtension("native_profiler");
        $__internal_82388b798bd1aabde84396bc93ac80eaa6f3f70f075fdb25f00d53b414d58acf->enter($__internal_82388b798bd1aabde84396bc93ac80eaa6f3f70f075fdb25f00d53b414d58acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_82388b798bd1aabde84396bc93ac80eaa6f3f70f075fdb25f00d53b414d58acf->leave($__internal_82388b798bd1aabde84396bc93ac80eaa6f3f70f075fdb25f00d53b414d58acf_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fab4f591a88ad389c06c928a897841189380e46e217c6911d44dc2d423ac5bd8 = $this->env->getExtension("native_profiler");
        $__internal_fab4f591a88ad389c06c928a897841189380e46e217c6911d44dc2d423ac5bd8->enter($__internal_fab4f591a88ad389c06c928a897841189380e46e217c6911d44dc2d423ac5bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_fab4f591a88ad389c06c928a897841189380e46e217c6911d44dc2d423ac5bd8->leave($__internal_fab4f591a88ad389c06c928a897841189380e46e217c6911d44dc2d423ac5bd8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7def33b0639e233c06ce01dd09d6306cfc9c3d8cb5e85947c96f61006eb0b2b7 = $this->env->getExtension("native_profiler");
        $__internal_7def33b0639e233c06ce01dd09d6306cfc9c3d8cb5e85947c96f61006eb0b2b7->enter($__internal_7def33b0639e233c06ce01dd09d6306cfc9c3d8cb5e85947c96f61006eb0b2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 11)->display($context);
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
        
        $__internal_7def33b0639e233c06ce01dd09d6306cfc9c3d8cb5e85947c96f61006eb0b2b7->leave($__internal_7def33b0639e233c06ce01dd09d6306cfc9c3d8cb5e85947c96f61006eb0b2b7_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Frontpage:new.html.twig";
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
