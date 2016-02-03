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
        $__internal_20932edd9cfb9e34e1f5c3bcfeb632f5e3b0d8b3a426d6b4541c65eb1662d74a = $this->env->getExtension("native_profiler");
        $__internal_20932edd9cfb9e34e1f5c3bcfeb632f5e3b0d8b3a426d6b4541c65eb1662d74a->enter($__internal_20932edd9cfb9e34e1f5c3bcfeb632f5e3b0d8b3a426d6b4541c65eb1662d74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Link:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20932edd9cfb9e34e1f5c3bcfeb632f5e3b0d8b3a426d6b4541c65eb1662d74a->leave($__internal_20932edd9cfb9e34e1f5c3bcfeb632f5e3b0d8b3a426d6b4541c65eb1662d74a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a7cca2dc482c900095f3cd7d2bf3ef40d1daaaae991399f34608e866eccbfe = $this->env->getExtension("native_profiler");
        $__internal_25a7cca2dc482c900095f3cd7d2bf3ef40d1daaaae991399f34608e866eccbfe->enter($__internal_25a7cca2dc482c900095f3cd7d2bf3ef40d1daaaae991399f34608e866eccbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_25a7cca2dc482c900095f3cd7d2bf3ef40d1daaaae991399f34608e866eccbfe->leave($__internal_25a7cca2dc482c900095f3cd7d2bf3ef40d1daaaae991399f34608e866eccbfe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_264627a4bf6990756b0b344da71ec15fd8b870975bed712c28ff9229b57fedc9 = $this->env->getExtension("native_profiler");
        $__internal_264627a4bf6990756b0b344da71ec15fd8b870975bed712c28ff9229b57fedc9->enter($__internal_264627a4bf6990756b0b344da71ec15fd8b870975bed712c28ff9229b57fedc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_264627a4bf6990756b0b344da71ec15fd8b870975bed712c28ff9229b57fedc9->leave($__internal_264627a4bf6990756b0b344da71ec15fd8b870975bed712c28ff9229b57fedc9_prof);

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
