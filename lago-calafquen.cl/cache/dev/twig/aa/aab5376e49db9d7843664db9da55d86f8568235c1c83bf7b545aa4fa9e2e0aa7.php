<?php

/* UniUserBundle:Manage:edit.html.twig */
class __TwigTemplate_e8623af52e21e3f2c328cbe17b4f181cea615ac3762cae2c605c814dfe7e676c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniUserBundle:Manage:edit.html.twig", 1);
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
        $__internal_748b72c6bf56df4bf1792e53063003b27e3ecca37b5aa7ec3b0f8d1740714692 = $this->env->getExtension("native_profiler");
        $__internal_748b72c6bf56df4bf1792e53063003b27e3ecca37b5aa7ec3b0f8d1740714692->enter($__internal_748b72c6bf56df4bf1792e53063003b27e3ecca37b5aa7ec3b0f8d1740714692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Manage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748b72c6bf56df4bf1792e53063003b27e3ecca37b5aa7ec3b0f8d1740714692->leave($__internal_748b72c6bf56df4bf1792e53063003b27e3ecca37b5aa7ec3b0f8d1740714692_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aac7f9a17595623784aab214a725c9b4e26eb063513719b0b4d0d28bc5f6bd0 = $this->env->getExtension("native_profiler");
        $__internal_1aac7f9a17595623784aab214a725c9b4e26eb063513719b0b4d0d28bc5f6bd0->enter($__internal_1aac7f9a17595623784aab214a725c9b4e26eb063513719b0b4d0d28bc5f6bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_1aac7f9a17595623784aab214a725c9b4e26eb063513719b0b4d0d28bc5f6bd0->leave($__internal_1aac7f9a17595623784aab214a725c9b4e26eb063513719b0b4d0d28bc5f6bd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87a9c2ca51e91855ab65bbcf0bb9dafbad9e2c5d3683abfa694176b276afab4c = $this->env->getExtension("native_profiler");
        $__internal_87a9c2ca51e91855ab65bbcf0bb9dafbad9e2c5d3683abfa694176b276afab4c->enter($__internal_87a9c2ca51e91855ab65bbcf0bb9dafbad9e2c5d3683abfa694176b276afab4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniUserBundle:Manage:edit.html.twig", 9)->display($context);
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
        
        $__internal_87a9c2ca51e91855ab65bbcf0bb9dafbad9e2c5d3683abfa694176b276afab4c->leave($__internal_87a9c2ca51e91855ab65bbcf0bb9dafbad9e2c5d3683abfa694176b276afab4c_prof);

    }

    public function getTemplateName()
    {
        return "UniUserBundle:Manage:edit.html.twig";
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
