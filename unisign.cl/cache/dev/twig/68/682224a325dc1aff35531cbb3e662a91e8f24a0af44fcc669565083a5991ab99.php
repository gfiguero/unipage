<?php

/* UniAdminBundle:Process:new.html.twig */
class __TwigTemplate_7692ebe79c47a116c4d5db942e61a8be19d841fb8d72f83ef6a2a5d0869d5e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:new.html.twig", 1);
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
        $__internal_9d095169182115f5a1742b7ac6b942cf4086aa5ec6c32a293f10c4a2d65d7ff6 = $this->env->getExtension("native_profiler");
        $__internal_9d095169182115f5a1742b7ac6b942cf4086aa5ec6c32a293f10c4a2d65d7ff6->enter($__internal_9d095169182115f5a1742b7ac6b942cf4086aa5ec6c32a293f10c4a2d65d7ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d095169182115f5a1742b7ac6b942cf4086aa5ec6c32a293f10c4a2d65d7ff6->leave($__internal_9d095169182115f5a1742b7ac6b942cf4086aa5ec6c32a293f10c4a2d65d7ff6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b99656a1dd6787306e9ef250aab52368cb16894b480c0dca80bf5f9b3a10b7e5 = $this->env->getExtension("native_profiler");
        $__internal_b99656a1dd6787306e9ef250aab52368cb16894b480c0dca80bf5f9b3a10b7e5->enter($__internal_b99656a1dd6787306e9ef250aab52368cb16894b480c0dca80bf5f9b3a10b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_b99656a1dd6787306e9ef250aab52368cb16894b480c0dca80bf5f9b3a10b7e5->leave($__internal_b99656a1dd6787306e9ef250aab52368cb16894b480c0dca80bf5f9b3a10b7e5_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_723166494d09334bda04ce6b7b21f806ebacec83ed71adcd12ac7ecb42695366 = $this->env->getExtension("native_profiler");
        $__internal_723166494d09334bda04ce6b7b21f806ebacec83ed71adcd12ac7ecb42695366->enter($__internal_723166494d09334bda04ce6b7b21f806ebacec83ed71adcd12ac7ecb42695366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_723166494d09334bda04ce6b7b21f806ebacec83ed71adcd12ac7ecb42695366->leave($__internal_723166494d09334bda04ce6b7b21f806ebacec83ed71adcd12ac7ecb42695366_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_486999031614aa06cd288ec6646f54c9e56dad62b3b393aa0bcc259cd34845b2 = $this->env->getExtension("native_profiler");
        $__internal_486999031614aa06cd288ec6646f54c9e56dad62b3b393aa0bcc259cd34845b2->enter($__internal_486999031614aa06cd288ec6646f54c9e56dad62b3b393aa0bcc259cd34845b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:new.html.twig", 11)->display($context);
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
        
        $__internal_486999031614aa06cd288ec6646f54c9e56dad62b3b393aa0bcc259cd34845b2->leave($__internal_486999031614aa06cd288ec6646f54c9e56dad62b3b393aa0bcc259cd34845b2_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:new.html.twig";
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
