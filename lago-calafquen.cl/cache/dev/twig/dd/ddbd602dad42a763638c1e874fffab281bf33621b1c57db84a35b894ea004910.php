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
        $__internal_308c0babe36c19e6384f6a27d6d4adb0f567e81a3333a3bdc50d1cdb530c9d1d = $this->env->getExtension("native_profiler");
        $__internal_308c0babe36c19e6384f6a27d6d4adb0f567e81a3333a3bdc50d1cdb530c9d1d->enter($__internal_308c0babe36c19e6384f6a27d6d4adb0f567e81a3333a3bdc50d1cdb530c9d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308c0babe36c19e6384f6a27d6d4adb0f567e81a3333a3bdc50d1cdb530c9d1d->leave($__internal_308c0babe36c19e6384f6a27d6d4adb0f567e81a3333a3bdc50d1cdb530c9d1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e41c44611e9657b6ad643c0807df1a20c8f799f5afcd3dc841506c86d729974 = $this->env->getExtension("native_profiler");
        $__internal_2e41c44611e9657b6ad643c0807df1a20c8f799f5afcd3dc841506c86d729974->enter($__internal_2e41c44611e9657b6ad643c0807df1a20c8f799f5afcd3dc841506c86d729974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_2e41c44611e9657b6ad643c0807df1a20c8f799f5afcd3dc841506c86d729974->leave($__internal_2e41c44611e9657b6ad643c0807df1a20c8f799f5afcd3dc841506c86d729974_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82492fd79bac62aa7996af27fbda9c2ad7acb4d5977bdb68b09846219f065b9f = $this->env->getExtension("native_profiler");
        $__internal_82492fd79bac62aa7996af27fbda9c2ad7acb4d5977bdb68b09846219f065b9f->enter($__internal_82492fd79bac62aa7996af27fbda9c2ad7acb4d5977bdb68b09846219f065b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_82492fd79bac62aa7996af27fbda9c2ad7acb4d5977bdb68b09846219f065b9f->leave($__internal_82492fd79bac62aa7996af27fbda9c2ad7acb4d5977bdb68b09846219f065b9f_prof);

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
