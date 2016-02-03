<?php

/* UniAdminBundle:History:new.html.twig */
class __TwigTemplate_ecba1611c6d9e238c0d7e9deae98e8d281984312ac58e9c52708da229f88184f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:new.html.twig", 1);
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
        $__internal_92cdc247aa4c24c701c3282583402005f68caec77b3194e227c834f8cf4aa373 = $this->env->getExtension("native_profiler");
        $__internal_92cdc247aa4c24c701c3282583402005f68caec77b3194e227c834f8cf4aa373->enter($__internal_92cdc247aa4c24c701c3282583402005f68caec77b3194e227c834f8cf4aa373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92cdc247aa4c24c701c3282583402005f68caec77b3194e227c834f8cf4aa373->leave($__internal_92cdc247aa4c24c701c3282583402005f68caec77b3194e227c834f8cf4aa373_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4e36285b5ee428ea92d335a9828bbfc608501711d75c1c1394a1d3839ac2820 = $this->env->getExtension("native_profiler");
        $__internal_c4e36285b5ee428ea92d335a9828bbfc608501711d75c1c1394a1d3839ac2820->enter($__internal_c4e36285b5ee428ea92d335a9828bbfc608501711d75c1c1394a1d3839ac2820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_c4e36285b5ee428ea92d335a9828bbfc608501711d75c1c1394a1d3839ac2820->leave($__internal_c4e36285b5ee428ea92d335a9828bbfc608501711d75c1c1394a1d3839ac2820_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_394d0a6dcedd9dd5dc0a2f2883ef6b7f1c05d5d0b3617a65878215426be44074 = $this->env->getExtension("native_profiler");
        $__internal_394d0a6dcedd9dd5dc0a2f2883ef6b7f1c05d5d0b3617a65878215426be44074->enter($__internal_394d0a6dcedd9dd5dc0a2f2883ef6b7f1c05d5d0b3617a65878215426be44074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:new.html.twig", 9)->display($context);
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
        
        $__internal_394d0a6dcedd9dd5dc0a2f2883ef6b7f1c05d5d0b3617a65878215426be44074->leave($__internal_394d0a6dcedd9dd5dc0a2f2883ef6b7f1c05d5d0b3617a65878215426be44074_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:new.html.twig";
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
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
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
