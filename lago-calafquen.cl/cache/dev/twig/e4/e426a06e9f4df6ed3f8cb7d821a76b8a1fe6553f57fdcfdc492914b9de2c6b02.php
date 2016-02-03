<?php

/* UniUserBundle:Manage:new.html.twig */
class __TwigTemplate_eb42b4f592b8efd304ee26b2914cef89c2947b14f1437aa6bcb8f502761e9ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniUserBundle:Manage:new.html.twig", 1);
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
        $__internal_582d283f4a66f07f1817a28d95be1d1d70327bb3df6ef28d600c4e1f7d8f5f94 = $this->env->getExtension("native_profiler");
        $__internal_582d283f4a66f07f1817a28d95be1d1d70327bb3df6ef28d600c4e1f7d8f5f94->enter($__internal_582d283f4a66f07f1817a28d95be1d1d70327bb3df6ef28d600c4e1f7d8f5f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Manage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582d283f4a66f07f1817a28d95be1d1d70327bb3df6ef28d600c4e1f7d8f5f94->leave($__internal_582d283f4a66f07f1817a28d95be1d1d70327bb3df6ef28d600c4e1f7d8f5f94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bea54367e36fdace5bcc5df8105c20378bd938a5a66d4e6796e5e8ce103f2d5 = $this->env->getExtension("native_profiler");
        $__internal_4bea54367e36fdace5bcc5df8105c20378bd938a5a66d4e6796e5e8ce103f2d5->enter($__internal_4bea54367e36fdace5bcc5df8105c20378bd938a5a66d4e6796e5e8ce103f2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_4bea54367e36fdace5bcc5df8105c20378bd938a5a66d4e6796e5e8ce103f2d5->leave($__internal_4bea54367e36fdace5bcc5df8105c20378bd938a5a66d4e6796e5e8ce103f2d5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_881de7a9f1fec505df70a64ab446015488d375fea7fcbd9ffe2a7582f2892cc8 = $this->env->getExtension("native_profiler");
        $__internal_881de7a9f1fec505df70a64ab446015488d375fea7fcbd9ffe2a7582f2892cc8->enter($__internal_881de7a9f1fec505df70a64ab446015488d375fea7fcbd9ffe2a7582f2892cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniUserBundle:Manage:new.html.twig", 9)->display($context);
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
        
        $__internal_881de7a9f1fec505df70a64ab446015488d375fea7fcbd9ffe2a7582f2892cc8->leave($__internal_881de7a9f1fec505df70a64ab446015488d375fea7fcbd9ffe2a7582f2892cc8_prof);

    }

    public function getTemplateName()
    {
        return "UniUserBundle:Manage:new.html.twig";
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
