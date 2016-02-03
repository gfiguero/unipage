<?php

/* UniAdminBundle:Member:edit.html.twig */
class __TwigTemplate_035bb7924505943eee40cacc52ec2375c8bec59e8428adb9ca4dba7364dadade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Member:edit.html.twig", 1);
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
        $__internal_f3a7525ccf7170e7c477e28b23dad2b43d3ffe62520c10f4c088d67f817043ee = $this->env->getExtension("native_profiler");
        $__internal_f3a7525ccf7170e7c477e28b23dad2b43d3ffe62520c10f4c088d67f817043ee->enter($__internal_f3a7525ccf7170e7c477e28b23dad2b43d3ffe62520c10f4c088d67f817043ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Member:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3a7525ccf7170e7c477e28b23dad2b43d3ffe62520c10f4c088d67f817043ee->leave($__internal_f3a7525ccf7170e7c477e28b23dad2b43d3ffe62520c10f4c088d67f817043ee_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db108ca68042195ec56d58d94b13c53764f2bfe671832b1bdbc3a8ea4d73f16 = $this->env->getExtension("native_profiler");
        $__internal_5db108ca68042195ec56d58d94b13c53764f2bfe671832b1bdbc3a8ea4d73f16->enter($__internal_5db108ca68042195ec56d58d94b13c53764f2bfe671832b1bdbc3a8ea4d73f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_5db108ca68042195ec56d58d94b13c53764f2bfe671832b1bdbc3a8ea4d73f16->leave($__internal_5db108ca68042195ec56d58d94b13c53764f2bfe671832b1bdbc3a8ea4d73f16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c867a65d1bbb757efff6be6eecae7bac8452ec0602898293f93f29728677c46 = $this->env->getExtension("native_profiler");
        $__internal_2c867a65d1bbb757efff6be6eecae7bac8452ec0602898293f93f29728677c46->enter($__internal_2c867a65d1bbb757efff6be6eecae7bac8452ec0602898293f93f29728677c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Member:edit.html.twig", 9)->display($context);
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
        
        $__internal_2c867a65d1bbb757efff6be6eecae7bac8452ec0602898293f93f29728677c46->leave($__internal_2c867a65d1bbb757efff6be6eecae7bac8452ec0602898293f93f29728677c46_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Member:edit.html.twig";
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
