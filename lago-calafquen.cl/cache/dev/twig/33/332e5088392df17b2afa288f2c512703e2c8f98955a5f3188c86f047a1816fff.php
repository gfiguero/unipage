<?php

/* UniAdminBundle:Link:edit.html.twig */
class __TwigTemplate_1a433084c5c9e3885f917dfe8b4420fda5d48fb4bb5d47d19ecf21c4561828be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Link:edit.html.twig", 1);
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
        $__internal_15ab55a1b7e765a77611c237f1fff341d6951c2d1170b129d50b292a82c3d2ef = $this->env->getExtension("native_profiler");
        $__internal_15ab55a1b7e765a77611c237f1fff341d6951c2d1170b129d50b292a82c3d2ef->enter($__internal_15ab55a1b7e765a77611c237f1fff341d6951c2d1170b129d50b292a82c3d2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15ab55a1b7e765a77611c237f1fff341d6951c2d1170b129d50b292a82c3d2ef->leave($__internal_15ab55a1b7e765a77611c237f1fff341d6951c2d1170b129d50b292a82c3d2ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b17f0c35cbbd9c26684a7d30dd43156a6eba62a1fa66da63312788c79d002b5 = $this->env->getExtension("native_profiler");
        $__internal_8b17f0c35cbbd9c26684a7d30dd43156a6eba62a1fa66da63312788c79d002b5->enter($__internal_8b17f0c35cbbd9c26684a7d30dd43156a6eba62a1fa66da63312788c79d002b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_8b17f0c35cbbd9c26684a7d30dd43156a6eba62a1fa66da63312788c79d002b5->leave($__internal_8b17f0c35cbbd9c26684a7d30dd43156a6eba62a1fa66da63312788c79d002b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7432a768a724a2b1289a2eff40524f981eb1fed6f31fe4b05bbc9afd91134b9 = $this->env->getExtension("native_profiler");
        $__internal_e7432a768a724a2b1289a2eff40524f981eb1fed6f31fe4b05bbc9afd91134b9->enter($__internal_e7432a768a724a2b1289a2eff40524f981eb1fed6f31fe4b05bbc9afd91134b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Link:edit.html.twig", 9)->display($context);
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
        
        $__internal_e7432a768a724a2b1289a2eff40524f981eb1fed6f31fe4b05bbc9afd91134b9->leave($__internal_e7432a768a724a2b1289a2eff40524f981eb1fed6f31fe4b05bbc9afd91134b9_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Link:edit.html.twig";
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
