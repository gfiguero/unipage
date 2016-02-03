<?php

/* UniAdminBundle:Link:edit.html.twig */
class __TwigTemplate_1a433084c5c9e3885f917dfe8b4420fda5d48fb4bb5d47d19ecf21c4561828be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Link:edit.html.twig", 1);
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
        $__internal_1ad07f7c39404eb4a9927db5e88d693844e091f9790ffb3fd7206b1f68091b6f = $this->env->getExtension("native_profiler");
        $__internal_1ad07f7c39404eb4a9927db5e88d693844e091f9790ffb3fd7206b1f68091b6f->enter($__internal_1ad07f7c39404eb4a9927db5e88d693844e091f9790ffb3fd7206b1f68091b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad07f7c39404eb4a9927db5e88d693844e091f9790ffb3fd7206b1f68091b6f->leave($__internal_1ad07f7c39404eb4a9927db5e88d693844e091f9790ffb3fd7206b1f68091b6f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b493eb42cf4178d5a059a4f71c8f4793a67337c08316389ca45825fa32edd89 = $this->env->getExtension("native_profiler");
        $__internal_4b493eb42cf4178d5a059a4f71c8f4793a67337c08316389ca45825fa32edd89->enter($__internal_4b493eb42cf4178d5a059a4f71c8f4793a67337c08316389ca45825fa32edd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_4b493eb42cf4178d5a059a4f71c8f4793a67337c08316389ca45825fa32edd89->leave($__internal_4b493eb42cf4178d5a059a4f71c8f4793a67337c08316389ca45825fa32edd89_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_67facdb021a98a002b1ada452bb048a9f76dc0dd0ea770db570d3b2d1e3e481d = $this->env->getExtension("native_profiler");
        $__internal_67facdb021a98a002b1ada452bb048a9f76dc0dd0ea770db570d3b2d1e3e481d->enter($__internal_67facdb021a98a002b1ada452bb048a9f76dc0dd0ea770db570d3b2d1e3e481d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Link:edit.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_67facdb021a98a002b1ada452bb048a9f76dc0dd0ea770db570d3b2d1e3e481d->leave($__internal_67facdb021a98a002b1ada452bb048a9f76dc0dd0ea770db570d3b2d1e3e481d_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Link:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
