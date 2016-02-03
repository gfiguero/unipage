<?php

/* UniAdminBundle:ProductCategory:edit.html.twig */
class __TwigTemplate_6480d459a3c24640338af53dd0e96628d933a3c3534663cff903c60a76d5158b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:ProductCategory:edit.html.twig", 1);
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
        $__internal_99736e1c5e530181f705daead09b754905b4c6c1e5c3cd3edf72429746c8e50b = $this->env->getExtension("native_profiler");
        $__internal_99736e1c5e530181f705daead09b754905b4c6c1e5c3cd3edf72429746c8e50b->enter($__internal_99736e1c5e530181f705daead09b754905b4c6c1e5c3cd3edf72429746c8e50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:ProductCategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99736e1c5e530181f705daead09b754905b4c6c1e5c3cd3edf72429746c8e50b->leave($__internal_99736e1c5e530181f705daead09b754905b4c6c1e5c3cd3edf72429746c8e50b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_436472bf40ed8e4c9ce2815d4d67e4a90cadb60f2bd73da7cf78947e9db250f1 = $this->env->getExtension("native_profiler");
        $__internal_436472bf40ed8e4c9ce2815d4d67e4a90cadb60f2bd73da7cf78947e9db250f1->enter($__internal_436472bf40ed8e4c9ce2815d4d67e4a90cadb60f2bd73da7cf78947e9db250f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_436472bf40ed8e4c9ce2815d4d67e4a90cadb60f2bd73da7cf78947e9db250f1->leave($__internal_436472bf40ed8e4c9ce2815d4d67e4a90cadb60f2bd73da7cf78947e9db250f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf04cf6140a3f2990e2436ab236a1262f9782d1edb924846594e17207cf00011 = $this->env->getExtension("native_profiler");
        $__internal_bf04cf6140a3f2990e2436ab236a1262f9782d1edb924846594e17207cf00011->enter($__internal_bf04cf6140a3f2990e2436ab236a1262f9782d1edb924846594e17207cf00011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:ProductCategory:edit.html.twig", 9)->display($context);
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
        
        $__internal_bf04cf6140a3f2990e2436ab236a1262f9782d1edb924846594e17207cf00011->leave($__internal_bf04cf6140a3f2990e2436ab236a1262f9782d1edb924846594e17207cf00011_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:ProductCategory:edit.html.twig";
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
