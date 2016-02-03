<?php

/* UniAdminBundle:History:new.html.twig */
class __TwigTemplate_ecba1611c6d9e238c0d7e9deae98e8d281984312ac58e9c52708da229f88184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:new.html.twig", 1);
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
        $__internal_8be0f746d3a2b18916d10610aece5a0a87de43b2b7a24b62af808e1a273d6466 = $this->env->getExtension("native_profiler");
        $__internal_8be0f746d3a2b18916d10610aece5a0a87de43b2b7a24b62af808e1a273d6466->enter($__internal_8be0f746d3a2b18916d10610aece5a0a87de43b2b7a24b62af808e1a273d6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be0f746d3a2b18916d10610aece5a0a87de43b2b7a24b62af808e1a273d6466->leave($__internal_8be0f746d3a2b18916d10610aece5a0a87de43b2b7a24b62af808e1a273d6466_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c828cda755975a4fd5da0050e14449dc74a9de7c8ab1f7fc0bede7478ced775 = $this->env->getExtension("native_profiler");
        $__internal_2c828cda755975a4fd5da0050e14449dc74a9de7c8ab1f7fc0bede7478ced775->enter($__internal_2c828cda755975a4fd5da0050e14449dc74a9de7c8ab1f7fc0bede7478ced775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_2c828cda755975a4fd5da0050e14449dc74a9de7c8ab1f7fc0bede7478ced775->leave($__internal_2c828cda755975a4fd5da0050e14449dc74a9de7c8ab1f7fc0bede7478ced775_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe287ad90c4d3d4a1bd943a9a7e7082543b925e640289d27d45491bfbb602430 = $this->env->getExtension("native_profiler");
        $__internal_fe287ad90c4d3d4a1bd943a9a7e7082543b925e640289d27d45491bfbb602430->enter($__internal_fe287ad90c4d3d4a1bd943a9a7e7082543b925e640289d27d45491bfbb602430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:new.html.twig", 9)->display($context);
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
        
        $__internal_fe287ad90c4d3d4a1bd943a9a7e7082543b925e640289d27d45491bfbb602430->leave($__internal_fe287ad90c4d3d4a1bd943a9a7e7082543b925e640289d27d45491bfbb602430_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:new.html.twig";
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
