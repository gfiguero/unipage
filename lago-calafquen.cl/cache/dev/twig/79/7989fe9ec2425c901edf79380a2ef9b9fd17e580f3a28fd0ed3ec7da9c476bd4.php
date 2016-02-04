<?php

/* UniAdminBundle:Link:new.html.twig */
class __TwigTemplate_750649c2fcb65873f0b61a27767e16c050102179b753daa2353fb1f72d3a89ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Link:new.html.twig", 1);
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
        $__internal_b530f3feb238c9dc231d36af6fd081651acd1e669f8a45567d97cce0116d1607 = $this->env->getExtension("native_profiler");
        $__internal_b530f3feb238c9dc231d36af6fd081651acd1e669f8a45567d97cce0116d1607->enter($__internal_b530f3feb238c9dc231d36af6fd081651acd1e669f8a45567d97cce0116d1607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b530f3feb238c9dc231d36af6fd081651acd1e669f8a45567d97cce0116d1607->leave($__internal_b530f3feb238c9dc231d36af6fd081651acd1e669f8a45567d97cce0116d1607_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_973a3dbd251b7433280052bcefea9e806feb4e35685459e0ab61f15c56d00522 = $this->env->getExtension("native_profiler");
        $__internal_973a3dbd251b7433280052bcefea9e806feb4e35685459e0ab61f15c56d00522->enter($__internal_973a3dbd251b7433280052bcefea9e806feb4e35685459e0ab61f15c56d00522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_973a3dbd251b7433280052bcefea9e806feb4e35685459e0ab61f15c56d00522->leave($__internal_973a3dbd251b7433280052bcefea9e806feb4e35685459e0ab61f15c56d00522_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2ed549352f2e6f65fd51273bf5c549107d72f695446fb3949bd2938db8db5dc = $this->env->getExtension("native_profiler");
        $__internal_a2ed549352f2e6f65fd51273bf5c549107d72f695446fb3949bd2938db8db5dc->enter($__internal_a2ed549352f2e6f65fd51273bf5c549107d72f695446fb3949bd2938db8db5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Link:new.html.twig", 9)->display($context);
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
        
        $__internal_a2ed549352f2e6f65fd51273bf5c549107d72f695446fb3949bd2938db8db5dc->leave($__internal_a2ed549352f2e6f65fd51273bf5c549107d72f695446fb3949bd2938db8db5dc_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Link:new.html.twig";
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
