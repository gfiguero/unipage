<?php

/* UniAdminBundle:MemberCourse:new.html.twig */
class __TwigTemplate_728c314dcb54eaef82d2667aca732af068f87948c383860d04ed88e4a056bf5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberCourse:new.html.twig", 1);
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
        $__internal_85ad1f8231df3537a68f8891d116a7aa5dc0b0d6d8af406ed8b0077e413bdbbe = $this->env->getExtension("native_profiler");
        $__internal_85ad1f8231df3537a68f8891d116a7aa5dc0b0d6d8af406ed8b0077e413bdbbe->enter($__internal_85ad1f8231df3537a68f8891d116a7aa5dc0b0d6d8af406ed8b0077e413bdbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85ad1f8231df3537a68f8891d116a7aa5dc0b0d6d8af406ed8b0077e413bdbbe->leave($__internal_85ad1f8231df3537a68f8891d116a7aa5dc0b0d6d8af406ed8b0077e413bdbbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acc9e0d6ed05d946db10d0a5ed0c251631d8f3218841e675777a93ad3b61e2e3 = $this->env->getExtension("native_profiler");
        $__internal_acc9e0d6ed05d946db10d0a5ed0c251631d8f3218841e675777a93ad3b61e2e3->enter($__internal_acc9e0d6ed05d946db10d0a5ed0c251631d8f3218841e675777a93ad3b61e2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_acc9e0d6ed05d946db10d0a5ed0c251631d8f3218841e675777a93ad3b61e2e3->leave($__internal_acc9e0d6ed05d946db10d0a5ed0c251631d8f3218841e675777a93ad3b61e2e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0492647b15a1acecdd93da878ef8016335d1626df7759150f458cb6bbf21e11 = $this->env->getExtension("native_profiler");
        $__internal_e0492647b15a1acecdd93da878ef8016335d1626df7759150f458cb6bbf21e11->enter($__internal_e0492647b15a1acecdd93da878ef8016335d1626df7759150f458cb6bbf21e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberCourse:new.html.twig", 9)->display($context);
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
        
        $__internal_e0492647b15a1acecdd93da878ef8016335d1626df7759150f458cb6bbf21e11->leave($__internal_e0492647b15a1acecdd93da878ef8016335d1626df7759150f458cb6bbf21e11_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberCourse:new.html.twig";
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
