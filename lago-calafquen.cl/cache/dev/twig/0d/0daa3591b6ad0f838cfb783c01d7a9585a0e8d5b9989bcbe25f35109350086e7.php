<?php

/* UniAdminBundle:Document:edit.html.twig */
class __TwigTemplate_42c9051eb8ffde655f0901ffc59dda112a71e57100974e6ef4a0f148a6957ac1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Document:edit.html.twig", 1);
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
        $__internal_e0a31faa531baae7c5c361f991beaa11d6ce58ffba7438efc9670a0488738ec2 = $this->env->getExtension("native_profiler");
        $__internal_e0a31faa531baae7c5c361f991beaa11d6ce58ffba7438efc9670a0488738ec2->enter($__internal_e0a31faa531baae7c5c361f991beaa11d6ce58ffba7438efc9670a0488738ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a31faa531baae7c5c361f991beaa11d6ce58ffba7438efc9670a0488738ec2->leave($__internal_e0a31faa531baae7c5c361f991beaa11d6ce58ffba7438efc9670a0488738ec2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e2c366e40ea695c8b2fa4cfafd5f263205c0dd673382d21c89de8b4df05d64d = $this->env->getExtension("native_profiler");
        $__internal_1e2c366e40ea695c8b2fa4cfafd5f263205c0dd673382d21c89de8b4df05d64d->enter($__internal_1e2c366e40ea695c8b2fa4cfafd5f263205c0dd673382d21c89de8b4df05d64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_1e2c366e40ea695c8b2fa4cfafd5f263205c0dd673382d21c89de8b4df05d64d->leave($__internal_1e2c366e40ea695c8b2fa4cfafd5f263205c0dd673382d21c89de8b4df05d64d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce779338d06c4aa3184ae448eb441f2921d813c39dfc082d70bff2fae89f9af7 = $this->env->getExtension("native_profiler");
        $__internal_ce779338d06c4aa3184ae448eb441f2921d813c39dfc082d70bff2fae89f9af7->enter($__internal_ce779338d06c4aa3184ae448eb441f2921d813c39dfc082d70bff2fae89f9af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Document:edit.html.twig", 9)->display($context);
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
        
        $__internal_ce779338d06c4aa3184ae448eb441f2921d813c39dfc082d70bff2fae89f9af7->leave($__internal_ce779338d06c4aa3184ae448eb441f2921d813c39dfc082d70bff2fae89f9af7_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Document:edit.html.twig";
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
