<?php

/* UniAdminBundle:Publication:new.html.twig */
class __TwigTemplate_e7205f104d85a2bd2fa5326d863bf884e5963f5f07a50204fa375b6daae57e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Publication:new.html.twig", 1);
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
        $__internal_a60052cc8c6d97f7863464f6272c7802c00f6de3d42b6d55aeacef001461383e = $this->env->getExtension("native_profiler");
        $__internal_a60052cc8c6d97f7863464f6272c7802c00f6de3d42b6d55aeacef001461383e->enter($__internal_a60052cc8c6d97f7863464f6272c7802c00f6de3d42b6d55aeacef001461383e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60052cc8c6d97f7863464f6272c7802c00f6de3d42b6d55aeacef001461383e->leave($__internal_a60052cc8c6d97f7863464f6272c7802c00f6de3d42b6d55aeacef001461383e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01ad1cf7be39edd425e77b0a85eccf53014cfc2cf7b836bf64789788545e1aed = $this->env->getExtension("native_profiler");
        $__internal_01ad1cf7be39edd425e77b0a85eccf53014cfc2cf7b836bf64789788545e1aed->enter($__internal_01ad1cf7be39edd425e77b0a85eccf53014cfc2cf7b836bf64789788545e1aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_01ad1cf7be39edd425e77b0a85eccf53014cfc2cf7b836bf64789788545e1aed->leave($__internal_01ad1cf7be39edd425e77b0a85eccf53014cfc2cf7b836bf64789788545e1aed_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2bdc19e4ae3961f8f2a066699b1fc6b898ea0abcfe543fac115c76544f9c25d0 = $this->env->getExtension("native_profiler");
        $__internal_2bdc19e4ae3961f8f2a066699b1fc6b898ea0abcfe543fac115c76544f9c25d0->enter($__internal_2bdc19e4ae3961f8f2a066699b1fc6b898ea0abcfe543fac115c76544f9c25d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_2bdc19e4ae3961f8f2a066699b1fc6b898ea0abcfe543fac115c76544f9c25d0->leave($__internal_2bdc19e4ae3961f8f2a066699b1fc6b898ea0abcfe543fac115c76544f9c25d0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9408306dd268d1de454f9c6ab92ddc2bb0c06e131d54e498ce5f613926c7086 = $this->env->getExtension("native_profiler");
        $__internal_c9408306dd268d1de454f9c6ab92ddc2bb0c06e131d54e498ce5f613926c7086->enter($__internal_c9408306dd268d1de454f9c6ab92ddc2bb0c06e131d54e498ce5f613926c7086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Publication:new.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_c9408306dd268d1de454f9c6ab92ddc2bb0c06e131d54e498ce5f613926c7086->leave($__internal_c9408306dd268d1de454f9c6ab92ddc2bb0c06e131d54e498ce5f613926c7086_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Publication:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
