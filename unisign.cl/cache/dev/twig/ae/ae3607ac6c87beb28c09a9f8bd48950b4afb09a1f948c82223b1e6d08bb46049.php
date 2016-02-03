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
        $__internal_2e9d4b62cc9387d59a06561e2092b7a09e226a98a5b06d5d4597bdc0438a6ac1 = $this->env->getExtension("native_profiler");
        $__internal_2e9d4b62cc9387d59a06561e2092b7a09e226a98a5b06d5d4597bdc0438a6ac1->enter($__internal_2e9d4b62cc9387d59a06561e2092b7a09e226a98a5b06d5d4597bdc0438a6ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9d4b62cc9387d59a06561e2092b7a09e226a98a5b06d5d4597bdc0438a6ac1->leave($__internal_2e9d4b62cc9387d59a06561e2092b7a09e226a98a5b06d5d4597bdc0438a6ac1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b9fc7647f3599be572a6e0a9e9fd3206ae72b6be57a05595c1cf53f1a7d1bd0 = $this->env->getExtension("native_profiler");
        $__internal_1b9fc7647f3599be572a6e0a9e9fd3206ae72b6be57a05595c1cf53f1a7d1bd0->enter($__internal_1b9fc7647f3599be572a6e0a9e9fd3206ae72b6be57a05595c1cf53f1a7d1bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_1b9fc7647f3599be572a6e0a9e9fd3206ae72b6be57a05595c1cf53f1a7d1bd0->leave($__internal_1b9fc7647f3599be572a6e0a9e9fd3206ae72b6be57a05595c1cf53f1a7d1bd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d455f97e509842e7c287eba99da9d23c6139066e26c7c7b28d1c8c48a1c53379 = $this->env->getExtension("native_profiler");
        $__internal_d455f97e509842e7c287eba99da9d23c6139066e26c7c7b28d1c8c48a1c53379->enter($__internal_d455f97e509842e7c287eba99da9d23c6139066e26c7c7b28d1c8c48a1c53379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d455f97e509842e7c287eba99da9d23c6139066e26c7c7b28d1c8c48a1c53379->leave($__internal_d455f97e509842e7c287eba99da9d23c6139066e26c7c7b28d1c8c48a1c53379_prof);

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
