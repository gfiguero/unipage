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
        $__internal_3c9c643243bff19279519ed140a85a0d0d1fa6202b1e578116217f7321e67510 = $this->env->getExtension("native_profiler");
        $__internal_3c9c643243bff19279519ed140a85a0d0d1fa6202b1e578116217f7321e67510->enter($__internal_3c9c643243bff19279519ed140a85a0d0d1fa6202b1e578116217f7321e67510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c9c643243bff19279519ed140a85a0d0d1fa6202b1e578116217f7321e67510->leave($__internal_3c9c643243bff19279519ed140a85a0d0d1fa6202b1e578116217f7321e67510_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88c47baa108ec049e936ad26df2a6189c4f9e0433fd87d78e0166cf072c7604 = $this->env->getExtension("native_profiler");
        $__internal_f88c47baa108ec049e936ad26df2a6189c4f9e0433fd87d78e0166cf072c7604->enter($__internal_f88c47baa108ec049e936ad26df2a6189c4f9e0433fd87d78e0166cf072c7604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_f88c47baa108ec049e936ad26df2a6189c4f9e0433fd87d78e0166cf072c7604->leave($__internal_f88c47baa108ec049e936ad26df2a6189c4f9e0433fd87d78e0166cf072c7604_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2c582dec57bfa2984b6b14271b31da8fb6ae4bedc18b4d6dad96d3516f5c0f0 = $this->env->getExtension("native_profiler");
        $__internal_d2c582dec57bfa2984b6b14271b31da8fb6ae4bedc18b4d6dad96d3516f5c0f0->enter($__internal_d2c582dec57bfa2984b6b14271b31da8fb6ae4bedc18b4d6dad96d3516f5c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d2c582dec57bfa2984b6b14271b31da8fb6ae4bedc18b4d6dad96d3516f5c0f0->leave($__internal_d2c582dec57bfa2984b6b14271b31da8fb6ae4bedc18b4d6dad96d3516f5c0f0_prof);

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
