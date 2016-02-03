<?php

/* UniAdminBundle:Service:new.html.twig */
class __TwigTemplate_8e8751f1a911375e9f233d3fe499ea84f5411352b2d3bc700b7639aea99468ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:new.html.twig", 1);
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
        $__internal_22db8ec41df24ab81f7b9ce489c1e847d8a9eb640f729ebc6ae8cc4a9251b4f5 = $this->env->getExtension("native_profiler");
        $__internal_22db8ec41df24ab81f7b9ce489c1e847d8a9eb640f729ebc6ae8cc4a9251b4f5->enter($__internal_22db8ec41df24ab81f7b9ce489c1e847d8a9eb640f729ebc6ae8cc4a9251b4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22db8ec41df24ab81f7b9ce489c1e847d8a9eb640f729ebc6ae8cc4a9251b4f5->leave($__internal_22db8ec41df24ab81f7b9ce489c1e847d8a9eb640f729ebc6ae8cc4a9251b4f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b040b443a200275534e34df0cc2bfcfd3e7665557450b68e46c110098738b649 = $this->env->getExtension("native_profiler");
        $__internal_b040b443a200275534e34df0cc2bfcfd3e7665557450b68e46c110098738b649->enter($__internal_b040b443a200275534e34df0cc2bfcfd3e7665557450b68e46c110098738b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_b040b443a200275534e34df0cc2bfcfd3e7665557450b68e46c110098738b649->leave($__internal_b040b443a200275534e34df0cc2bfcfd3e7665557450b68e46c110098738b649_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8d1e4a3055ef9a309ecac34b610692761514744d0e485fec8fc4063449afcfb5 = $this->env->getExtension("native_profiler");
        $__internal_8d1e4a3055ef9a309ecac34b610692761514744d0e485fec8fc4063449afcfb5->enter($__internal_8d1e4a3055ef9a309ecac34b610692761514744d0e485fec8fc4063449afcfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_8d1e4a3055ef9a309ecac34b610692761514744d0e485fec8fc4063449afcfb5->leave($__internal_8d1e4a3055ef9a309ecac34b610692761514744d0e485fec8fc4063449afcfb5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1f2d45bdde22501ce88bbdead993a9026880cd1ff04a357fbc4f2960d2e0d52 = $this->env->getExtension("native_profiler");
        $__internal_f1f2d45bdde22501ce88bbdead993a9026880cd1ff04a357fbc4f2960d2e0d52->enter($__internal_f1f2d45bdde22501ce88bbdead993a9026880cd1ff04a357fbc4f2960d2e0d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:new.html.twig", 11)->display($context);
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
        
        $__internal_f1f2d45bdde22501ce88bbdead993a9026880cd1ff04a357fbc4f2960d2e0d52->leave($__internal_f1f2d45bdde22501ce88bbdead993a9026880cd1ff04a357fbc4f2960d2e0d52_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:new.html.twig";
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
