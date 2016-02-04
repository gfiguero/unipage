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
        $__internal_e6534c9ae6735f449dd9c41a03b597cfc2967bfa21b8e81a5e1dbc5af5697317 = $this->env->getExtension("native_profiler");
        $__internal_e6534c9ae6735f449dd9c41a03b597cfc2967bfa21b8e81a5e1dbc5af5697317->enter($__internal_e6534c9ae6735f449dd9c41a03b597cfc2967bfa21b8e81a5e1dbc5af5697317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6534c9ae6735f449dd9c41a03b597cfc2967bfa21b8e81a5e1dbc5af5697317->leave($__internal_e6534c9ae6735f449dd9c41a03b597cfc2967bfa21b8e81a5e1dbc5af5697317_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6d641b035659fa98b0877ba30ec2a30f2c73e1fa40120ed9c0213e66eba3022 = $this->env->getExtension("native_profiler");
        $__internal_c6d641b035659fa98b0877ba30ec2a30f2c73e1fa40120ed9c0213e66eba3022->enter($__internal_c6d641b035659fa98b0877ba30ec2a30f2c73e1fa40120ed9c0213e66eba3022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_c6d641b035659fa98b0877ba30ec2a30f2c73e1fa40120ed9c0213e66eba3022->leave($__internal_c6d641b035659fa98b0877ba30ec2a30f2c73e1fa40120ed9c0213e66eba3022_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b951a0ee083993cfae059291ab5a311a7f091eab75f6646e90b66df22b86a935 = $this->env->getExtension("native_profiler");
        $__internal_b951a0ee083993cfae059291ab5a311a7f091eab75f6646e90b66df22b86a935->enter($__internal_b951a0ee083993cfae059291ab5a311a7f091eab75f6646e90b66df22b86a935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b951a0ee083993cfae059291ab5a311a7f091eab75f6646e90b66df22b86a935->leave($__internal_b951a0ee083993cfae059291ab5a311a7f091eab75f6646e90b66df22b86a935_prof);

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
