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
        $__internal_951b891462ec7ffe122e4bd1744f73c9db5b46d95cbe7b46f537d1b0c36d3b38 = $this->env->getExtension("native_profiler");
        $__internal_951b891462ec7ffe122e4bd1744f73c9db5b46d95cbe7b46f537d1b0c36d3b38->enter($__internal_951b891462ec7ffe122e4bd1744f73c9db5b46d95cbe7b46f537d1b0c36d3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:ProductCategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951b891462ec7ffe122e4bd1744f73c9db5b46d95cbe7b46f537d1b0c36d3b38->leave($__internal_951b891462ec7ffe122e4bd1744f73c9db5b46d95cbe7b46f537d1b0c36d3b38_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69c5f6896e43c0950f0bc1c431f1e696024019abaadfd3808ad803f8bcd72291 = $this->env->getExtension("native_profiler");
        $__internal_69c5f6896e43c0950f0bc1c431f1e696024019abaadfd3808ad803f8bcd72291->enter($__internal_69c5f6896e43c0950f0bc1c431f1e696024019abaadfd3808ad803f8bcd72291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_69c5f6896e43c0950f0bc1c431f1e696024019abaadfd3808ad803f8bcd72291->leave($__internal_69c5f6896e43c0950f0bc1c431f1e696024019abaadfd3808ad803f8bcd72291_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5af3d9413efc0ffadf4ce9d7ff2eebca2f8b2af9b4c315980587853220c9d5 = $this->env->getExtension("native_profiler");
        $__internal_1e5af3d9413efc0ffadf4ce9d7ff2eebca2f8b2af9b4c315980587853220c9d5->enter($__internal_1e5af3d9413efc0ffadf4ce9d7ff2eebca2f8b2af9b4c315980587853220c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1e5af3d9413efc0ffadf4ce9d7ff2eebca2f8b2af9b4c315980587853220c9d5->leave($__internal_1e5af3d9413efc0ffadf4ce9d7ff2eebca2f8b2af9b4c315980587853220c9d5_prof);

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
