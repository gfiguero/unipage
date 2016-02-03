<?php

/* UniAdminBundle:MemberCourse:edit.html.twig */
class __TwigTemplate_68a7b1fd82052e17e9b6652e870daccb13629dc5188ef6ec78a9f05c10576fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 1);
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
        $__internal_0fc7320bc9603b0f268c66715f1abb2bfe7bcee685e8fadb1c7c9adc4d2231d9 = $this->env->getExtension("native_profiler");
        $__internal_0fc7320bc9603b0f268c66715f1abb2bfe7bcee685e8fadb1c7c9adc4d2231d9->enter($__internal_0fc7320bc9603b0f268c66715f1abb2bfe7bcee685e8fadb1c7c9adc4d2231d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc7320bc9603b0f268c66715f1abb2bfe7bcee685e8fadb1c7c9adc4d2231d9->leave($__internal_0fc7320bc9603b0f268c66715f1abb2bfe7bcee685e8fadb1c7c9adc4d2231d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace904bdf388d7c27e90f28d8e406e41f1babc9a34fb5c8955c7c7bb0daa0f9f = $this->env->getExtension("native_profiler");
        $__internal_ace904bdf388d7c27e90f28d8e406e41f1babc9a34fb5c8955c7c7bb0daa0f9f->enter($__internal_ace904bdf388d7c27e90f28d8e406e41f1babc9a34fb5c8955c7c7bb0daa0f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_ace904bdf388d7c27e90f28d8e406e41f1babc9a34fb5c8955c7c7bb0daa0f9f->leave($__internal_ace904bdf388d7c27e90f28d8e406e41f1babc9a34fb5c8955c7c7bb0daa0f9f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a65e91e604b915dc9b69f408b8f8b2ff05e3844cf3232fc252c2686c369fbc6 = $this->env->getExtension("native_profiler");
        $__internal_5a65e91e604b915dc9b69f408b8f8b2ff05e3844cf3232fc252c2686c369fbc6->enter($__internal_5a65e91e604b915dc9b69f408b8f8b2ff05e3844cf3232fc252c2686c369fbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 9)->display($context);
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
        
        $__internal_5a65e91e604b915dc9b69f408b8f8b2ff05e3844cf3232fc252c2686c369fbc6->leave($__internal_5a65e91e604b915dc9b69f408b8f8b2ff05e3844cf3232fc252c2686c369fbc6_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberCourse:edit.html.twig";
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
