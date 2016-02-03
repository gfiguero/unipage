<?php

/* UniAdminBundle:NoticeCategory:edit.html.twig */
class __TwigTemplate_9d081603cebaffe4623a57839654cb5bed95c876fcad3e32d3971f0099c815e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:NoticeCategory:edit.html.twig", 1);
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
        $__internal_ddacf26c3ec94c7b938238318cd80e34d3b194a3b62356fc2fa7f6f0555c11b0 = $this->env->getExtension("native_profiler");
        $__internal_ddacf26c3ec94c7b938238318cd80e34d3b194a3b62356fc2fa7f6f0555c11b0->enter($__internal_ddacf26c3ec94c7b938238318cd80e34d3b194a3b62356fc2fa7f6f0555c11b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:NoticeCategory:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddacf26c3ec94c7b938238318cd80e34d3b194a3b62356fc2fa7f6f0555c11b0->leave($__internal_ddacf26c3ec94c7b938238318cd80e34d3b194a3b62356fc2fa7f6f0555c11b0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_69daf0cc6a9ee6095c936ec8b6b1825156e72ba757dea4ce7dbb56b258f80d54 = $this->env->getExtension("native_profiler");
        $__internal_69daf0cc6a9ee6095c936ec8b6b1825156e72ba757dea4ce7dbb56b258f80d54->enter($__internal_69daf0cc6a9ee6095c936ec8b6b1825156e72ba757dea4ce7dbb56b258f80d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_69daf0cc6a9ee6095c936ec8b6b1825156e72ba757dea4ce7dbb56b258f80d54->leave($__internal_69daf0cc6a9ee6095c936ec8b6b1825156e72ba757dea4ce7dbb56b258f80d54_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb3c9f223cdfdfbaa0a849db069c255109ffd60348781f176f7dd72ed794228 = $this->env->getExtension("native_profiler");
        $__internal_7bb3c9f223cdfdfbaa0a849db069c255109ffd60348781f176f7dd72ed794228->enter($__internal_7bb3c9f223cdfdfbaa0a849db069c255109ffd60348781f176f7dd72ed794228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:NoticeCategory:edit.html.twig", 9)->display($context);
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
        
        $__internal_7bb3c9f223cdfdfbaa0a849db069c255109ffd60348781f176f7dd72ed794228->leave($__internal_7bb3c9f223cdfdfbaa0a849db069c255109ffd60348781f176f7dd72ed794228_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:NoticeCategory:edit.html.twig";
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
