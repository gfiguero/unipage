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
        $__internal_0bd12ad1333c70be07e36cc292cafdd55a534f8a2a349b861285daddf663c413 = $this->env->getExtension("native_profiler");
        $__internal_0bd12ad1333c70be07e36cc292cafdd55a534f8a2a349b861285daddf663c413->enter($__internal_0bd12ad1333c70be07e36cc292cafdd55a534f8a2a349b861285daddf663c413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd12ad1333c70be07e36cc292cafdd55a534f8a2a349b861285daddf663c413->leave($__internal_0bd12ad1333c70be07e36cc292cafdd55a534f8a2a349b861285daddf663c413_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_349c80c0bd6c1250f3483bca90cdd65c8903008b750c620456102bf830c012f5 = $this->env->getExtension("native_profiler");
        $__internal_349c80c0bd6c1250f3483bca90cdd65c8903008b750c620456102bf830c012f5->enter($__internal_349c80c0bd6c1250f3483bca90cdd65c8903008b750c620456102bf830c012f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_349c80c0bd6c1250f3483bca90cdd65c8903008b750c620456102bf830c012f5->leave($__internal_349c80c0bd6c1250f3483bca90cdd65c8903008b750c620456102bf830c012f5_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_779137d732341de48e896efc664846f1eede92e47301462d141d6e52e175c1eb = $this->env->getExtension("native_profiler");
        $__internal_779137d732341de48e896efc664846f1eede92e47301462d141d6e52e175c1eb->enter($__internal_779137d732341de48e896efc664846f1eede92e47301462d141d6e52e175c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_779137d732341de48e896efc664846f1eede92e47301462d141d6e52e175c1eb->leave($__internal_779137d732341de48e896efc664846f1eede92e47301462d141d6e52e175c1eb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_176cbc4094edd547b5f462ff045c96867af59603236ce668ad8735a1e9b34363 = $this->env->getExtension("native_profiler");
        $__internal_176cbc4094edd547b5f462ff045c96867af59603236ce668ad8735a1e9b34363->enter($__internal_176cbc4094edd547b5f462ff045c96867af59603236ce668ad8735a1e9b34363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_176cbc4094edd547b5f462ff045c96867af59603236ce668ad8735a1e9b34363->leave($__internal_176cbc4094edd547b5f462ff045c96867af59603236ce668ad8735a1e9b34363_prof);

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
