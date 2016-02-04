<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a24dc55e62e2e296bea4ea0e298228e1e55e45a2e94947c9f05aff62ebc04c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_12f563331f0bbaa6dc4e81e332ec5cfa959a2be542e230441f7908828aaa98ac = $this->env->getExtension("native_profiler");
        $__internal_12f563331f0bbaa6dc4e81e332ec5cfa959a2be542e230441f7908828aaa98ac->enter($__internal_12f563331f0bbaa6dc4e81e332ec5cfa959a2be542e230441f7908828aaa98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f563331f0bbaa6dc4e81e332ec5cfa959a2be542e230441f7908828aaa98ac->leave($__internal_12f563331f0bbaa6dc4e81e332ec5cfa959a2be542e230441f7908828aaa98ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47fe79c464660548b3cda5b124373f3598244c670ac1166a566e98b4810c2010 = $this->env->getExtension("native_profiler");
        $__internal_47fe79c464660548b3cda5b124373f3598244c670ac1166a566e98b4810c2010->enter($__internal_47fe79c464660548b3cda5b124373f3598244c670ac1166a566e98b4810c2010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_47fe79c464660548b3cda5b124373f3598244c670ac1166a566e98b4810c2010->leave($__internal_47fe79c464660548b3cda5b124373f3598244c670ac1166a566e98b4810c2010_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c632681d062b85a2b2ae4b9c8f9772b954b4f28771f0ae2e463d8b39243e5b99 = $this->env->getExtension("native_profiler");
        $__internal_c632681d062b85a2b2ae4b9c8f9772b954b4f28771f0ae2e463d8b39243e5b99->enter($__internal_c632681d062b85a2b2ae4b9c8f9772b954b4f28771f0ae2e463d8b39243e5b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
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
        
        $__internal_c632681d062b85a2b2ae4b9c8f9772b954b4f28771f0ae2e463d8b39243e5b99->leave($__internal_c632681d062b85a2b2ae4b9c8f9772b954b4f28771f0ae2e463d8b39243e5b99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends ":Admin:base.html.twig" %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
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
/* {% endblock body %}*/
/* */
