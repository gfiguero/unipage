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
        $__internal_4f8cd116f317cd19924df8fb9265458cb71f57c35b72ab0389ae85f6071a9aed = $this->env->getExtension("native_profiler");
        $__internal_4f8cd116f317cd19924df8fb9265458cb71f57c35b72ab0389ae85f6071a9aed->enter($__internal_4f8cd116f317cd19924df8fb9265458cb71f57c35b72ab0389ae85f6071a9aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Manage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8cd116f317cd19924df8fb9265458cb71f57c35b72ab0389ae85f6071a9aed->leave($__internal_4f8cd116f317cd19924df8fb9265458cb71f57c35b72ab0389ae85f6071a9aed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b761f8aab6b2bf9b158b30a5181ee15fbfefdff5b844973dd54615f8fc278b9d = $this->env->getExtension("native_profiler");
        $__internal_b761f8aab6b2bf9b158b30a5181ee15fbfefdff5b844973dd54615f8fc278b9d->enter($__internal_b761f8aab6b2bf9b158b30a5181ee15fbfefdff5b844973dd54615f8fc278b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_b761f8aab6b2bf9b158b30a5181ee15fbfefdff5b844973dd54615f8fc278b9d->leave($__internal_b761f8aab6b2bf9b158b30a5181ee15fbfefdff5b844973dd54615f8fc278b9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2238056009e90b1e3d02a3061f6f24fb1055c85fb1bdeffeb4364264e110fc0 = $this->env->getExtension("native_profiler");
        $__internal_d2238056009e90b1e3d02a3061f6f24fb1055c85fb1bdeffeb4364264e110fc0->enter($__internal_d2238056009e90b1e3d02a3061f6f24fb1055c85fb1bdeffeb4364264e110fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2238056009e90b1e3d02a3061f6f24fb1055c85fb1bdeffeb4364264e110fc0->leave($__internal_d2238056009e90b1e3d02a3061f6f24fb1055c85fb1bdeffeb4364264e110fc0_prof);

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
