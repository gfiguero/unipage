<?php

/* UniAdminBundle:Report:edit.html.twig */
class __TwigTemplate_b33c9e88c038596eb2543b038f5e3506b5cdd3a671574a3b9a31c95262cfbd08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:edit.html.twig", 1);
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
        $__internal_0085053e3473f363d6d4d98e6296c8c710ab8206ff7ab198f140257bd5cbcfd7 = $this->env->getExtension("native_profiler");
        $__internal_0085053e3473f363d6d4d98e6296c8c710ab8206ff7ab198f140257bd5cbcfd7->enter($__internal_0085053e3473f363d6d4d98e6296c8c710ab8206ff7ab198f140257bd5cbcfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0085053e3473f363d6d4d98e6296c8c710ab8206ff7ab198f140257bd5cbcfd7->leave($__internal_0085053e3473f363d6d4d98e6296c8c710ab8206ff7ab198f140257bd5cbcfd7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_421a66b29b1773480147702d36bbf4d0285cb7742a9a4d659c977d08b6e1b882 = $this->env->getExtension("native_profiler");
        $__internal_421a66b29b1773480147702d36bbf4d0285cb7742a9a4d659c977d08b6e1b882->enter($__internal_421a66b29b1773480147702d36bbf4d0285cb7742a9a4d659c977d08b6e1b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_421a66b29b1773480147702d36bbf4d0285cb7742a9a4d659c977d08b6e1b882->leave($__internal_421a66b29b1773480147702d36bbf4d0285cb7742a9a4d659c977d08b6e1b882_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_83d306a569fea08865737484553d0419c71af28d8090ac0801c7cf6a9d91eadf = $this->env->getExtension("native_profiler");
        $__internal_83d306a569fea08865737484553d0419c71af28d8090ac0801c7cf6a9d91eadf->enter($__internal_83d306a569fea08865737484553d0419c71af28d8090ac0801c7cf6a9d91eadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_83d306a569fea08865737484553d0419c71af28d8090ac0801c7cf6a9d91eadf->leave($__internal_83d306a569fea08865737484553d0419c71af28d8090ac0801c7cf6a9d91eadf_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a505e898397b2f17c0d7c554c21aabf3308c4301a96a36b599e860139d1d0369 = $this->env->getExtension("native_profiler");
        $__internal_a505e898397b2f17c0d7c554c21aabf3308c4301a96a36b599e860139d1d0369->enter($__internal_a505e898397b2f17c0d7c554c21aabf3308c4301a96a36b599e860139d1d0369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:edit.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_a505e898397b2f17c0d7c554c21aabf3308c4301a96a36b599e860139d1d0369->leave($__internal_a505e898397b2f17c0d7c554c21aabf3308c4301a96a36b599e860139d1d0369_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
