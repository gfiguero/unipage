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
        $__internal_24fc994f38539deaa5ac74a6aca11bcbef0a1b22c011bad4fe1e2982345eef45 = $this->env->getExtension("native_profiler");
        $__internal_24fc994f38539deaa5ac74a6aca11bcbef0a1b22c011bad4fe1e2982345eef45->enter($__internal_24fc994f38539deaa5ac74a6aca11bcbef0a1b22c011bad4fe1e2982345eef45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24fc994f38539deaa5ac74a6aca11bcbef0a1b22c011bad4fe1e2982345eef45->leave($__internal_24fc994f38539deaa5ac74a6aca11bcbef0a1b22c011bad4fe1e2982345eef45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23a9f520c01bb2f375556c877b74c6bea37f3ca38fcc60fdb65af2aded2e64ed = $this->env->getExtension("native_profiler");
        $__internal_23a9f520c01bb2f375556c877b74c6bea37f3ca38fcc60fdb65af2aded2e64ed->enter($__internal_23a9f520c01bb2f375556c877b74c6bea37f3ca38fcc60fdb65af2aded2e64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_23a9f520c01bb2f375556c877b74c6bea37f3ca38fcc60fdb65af2aded2e64ed->leave($__internal_23a9f520c01bb2f375556c877b74c6bea37f3ca38fcc60fdb65af2aded2e64ed_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef0b475ea55c57a80a8b730e126cd0542cdfd02bb7548b912d87550963f506f7 = $this->env->getExtension("native_profiler");
        $__internal_ef0b475ea55c57a80a8b730e126cd0542cdfd02bb7548b912d87550963f506f7->enter($__internal_ef0b475ea55c57a80a8b730e126cd0542cdfd02bb7548b912d87550963f506f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef0b475ea55c57a80a8b730e126cd0542cdfd02bb7548b912d87550963f506f7->leave($__internal_ef0b475ea55c57a80a8b730e126cd0542cdfd02bb7548b912d87550963f506f7_prof);

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
