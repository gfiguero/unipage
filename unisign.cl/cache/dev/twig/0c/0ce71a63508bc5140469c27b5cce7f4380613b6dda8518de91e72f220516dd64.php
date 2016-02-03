<?php

/* UniAdminBundle:Frontpage:edit.html.twig */
class __TwigTemplate_a8d1fe6d223675adca9fb5893c2ada5d32d294cae5687e56837e4468b5726bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Frontpage:edit.html.twig", 1);
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
        $__internal_42018dee4fa4efb84f4260342665b3cf616b47ce56682bde238cce7ebea05a0a = $this->env->getExtension("native_profiler");
        $__internal_42018dee4fa4efb84f4260342665b3cf616b47ce56682bde238cce7ebea05a0a->enter($__internal_42018dee4fa4efb84f4260342665b3cf616b47ce56682bde238cce7ebea05a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42018dee4fa4efb84f4260342665b3cf616b47ce56682bde238cce7ebea05a0a->leave($__internal_42018dee4fa4efb84f4260342665b3cf616b47ce56682bde238cce7ebea05a0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cfd8b4a5dc54fe868d26f7bf2c83db2075daa7527331bef7b7cc897a19022788 = $this->env->getExtension("native_profiler");
        $__internal_cfd8b4a5dc54fe868d26f7bf2c83db2075daa7527331bef7b7cc897a19022788->enter($__internal_cfd8b4a5dc54fe868d26f7bf2c83db2075daa7527331bef7b7cc897a19022788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_cfd8b4a5dc54fe868d26f7bf2c83db2075daa7527331bef7b7cc897a19022788->leave($__internal_cfd8b4a5dc54fe868d26f7bf2c83db2075daa7527331bef7b7cc897a19022788_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a12341d82c7181a62c2019863d825cbcf0942822a4e7fa89379897161b27d9af = $this->env->getExtension("native_profiler");
        $__internal_a12341d82c7181a62c2019863d825cbcf0942822a4e7fa89379897161b27d9af->enter($__internal_a12341d82c7181a62c2019863d825cbcf0942822a4e7fa89379897161b27d9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_a12341d82c7181a62c2019863d825cbcf0942822a4e7fa89379897161b27d9af->leave($__internal_a12341d82c7181a62c2019863d825cbcf0942822a4e7fa89379897161b27d9af_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5df26feab85cca990670a03d49aafdb7c0d145ee252a1f9c07256aa8d10014a = $this->env->getExtension("native_profiler");
        $__internal_b5df26feab85cca990670a03d49aafdb7c0d145ee252a1f9c07256aa8d10014a->enter($__internal_b5df26feab85cca990670a03d49aafdb7c0d145ee252a1f9c07256aa8d10014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Frontpage:edit.html.twig", 11)->display($context);
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
        
        $__internal_b5df26feab85cca990670a03d49aafdb7c0d145ee252a1f9c07256aa8d10014a->leave($__internal_b5df26feab85cca990670a03d49aafdb7c0d145ee252a1f9c07256aa8d10014a_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Frontpage:edit.html.twig";
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