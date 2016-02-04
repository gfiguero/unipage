<?php

/* UniAdminBundle:MemberRole:edit.html.twig */
class __TwigTemplate_2fb72f6a511eb8218bd0e99ec29755e300855196fe6e878cb24595837d5801ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberRole:edit.html.twig", 1);
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
        $__internal_5e9321369e40c789eecac494179b730a736f9ab6ccf7ac5032e78eed08942a34 = $this->env->getExtension("native_profiler");
        $__internal_5e9321369e40c789eecac494179b730a736f9ab6ccf7ac5032e78eed08942a34->enter($__internal_5e9321369e40c789eecac494179b730a736f9ab6ccf7ac5032e78eed08942a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberRole:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9321369e40c789eecac494179b730a736f9ab6ccf7ac5032e78eed08942a34->leave($__internal_5e9321369e40c789eecac494179b730a736f9ab6ccf7ac5032e78eed08942a34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_112a5c8da1d99e2da77f6340cbdc401fb5afaa9deeed55f59a22bac7e6df2de7 = $this->env->getExtension("native_profiler");
        $__internal_112a5c8da1d99e2da77f6340cbdc401fb5afaa9deeed55f59a22bac7e6df2de7->enter($__internal_112a5c8da1d99e2da77f6340cbdc401fb5afaa9deeed55f59a22bac7e6df2de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_112a5c8da1d99e2da77f6340cbdc401fb5afaa9deeed55f59a22bac7e6df2de7->leave($__internal_112a5c8da1d99e2da77f6340cbdc401fb5afaa9deeed55f59a22bac7e6df2de7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fe110ebec6f05599a85765fac93cb09e39a93bbfd28a842368568f48ccd6316 = $this->env->getExtension("native_profiler");
        $__internal_0fe110ebec6f05599a85765fac93cb09e39a93bbfd28a842368568f48ccd6316->enter($__internal_0fe110ebec6f05599a85765fac93cb09e39a93bbfd28a842368568f48ccd6316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberRole:edit.html.twig", 9)->display($context);
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
        
        $__internal_0fe110ebec6f05599a85765fac93cb09e39a93bbfd28a842368568f48ccd6316->leave($__internal_0fe110ebec6f05599a85765fac93cb09e39a93bbfd28a842368568f48ccd6316_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberRole:edit.html.twig";
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
