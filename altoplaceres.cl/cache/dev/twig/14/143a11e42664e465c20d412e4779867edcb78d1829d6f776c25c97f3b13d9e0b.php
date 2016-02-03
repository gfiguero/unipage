<?php

/* UniAdminBundle:NoticeCategory:new.html.twig */
class __TwigTemplate_679c2aa9f9ada7a61d6d0ca2e7fb3b83cd6614d22790bd2468d11abee14a7b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:NoticeCategory:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18c572867795617c65ad104d31ee89bc54fa0005846d93c474b8973bad57d252 = $this->env->getExtension("native_profiler");
        $__internal_18c572867795617c65ad104d31ee89bc54fa0005846d93c474b8973bad57d252->enter($__internal_18c572867795617c65ad104d31ee89bc54fa0005846d93c474b8973bad57d252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:NoticeCategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18c572867795617c65ad104d31ee89bc54fa0005846d93c474b8973bad57d252->leave($__internal_18c572867795617c65ad104d31ee89bc54fa0005846d93c474b8973bad57d252_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1c8cd3e601b5aaadcbe1af843cd6e45025cbdb234eea967258d01f9cb77b17 = $this->env->getExtension("native_profiler");
        $__internal_8c1c8cd3e601b5aaadcbe1af843cd6e45025cbdb234eea967258d01f9cb77b17->enter($__internal_8c1c8cd3e601b5aaadcbe1af843cd6e45025cbdb234eea967258d01f9cb77b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_8c1c8cd3e601b5aaadcbe1af843cd6e45025cbdb234eea967258d01f9cb77b17->leave($__internal_8c1c8cd3e601b5aaadcbe1af843cd6e45025cbdb234eea967258d01f9cb77b17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d11829211cb17f946b5af02815d5a22b7bf55595b3f7331fc76f6a16dce900f = $this->env->getExtension("native_profiler");
        $__internal_6d11829211cb17f946b5af02815d5a22b7bf55595b3f7331fc76f6a16dce900f->enter($__internal_6d11829211cb17f946b5af02815d5a22b7bf55595b3f7331fc76f6a16dce900f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:NoticeCategory:new.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_6d11829211cb17f946b5af02815d5a22b7bf55595b3f7331fc76f6a16dce900f->leave($__internal_6d11829211cb17f946b5af02815d5a22b7bf55595b3f7331fc76f6a16dce900f_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:NoticeCategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
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
