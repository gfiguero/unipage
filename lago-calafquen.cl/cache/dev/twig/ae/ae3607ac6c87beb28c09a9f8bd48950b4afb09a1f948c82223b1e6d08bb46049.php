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
        $__internal_b09edd21e7804eca477b1ae8ef351c5cb7d1258d962830ccf9c47a0273613d93 = $this->env->getExtension("native_profiler");
        $__internal_b09edd21e7804eca477b1ae8ef351c5cb7d1258d962830ccf9c47a0273613d93->enter($__internal_b09edd21e7804eca477b1ae8ef351c5cb7d1258d962830ccf9c47a0273613d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09edd21e7804eca477b1ae8ef351c5cb7d1258d962830ccf9c47a0273613d93->leave($__internal_b09edd21e7804eca477b1ae8ef351c5cb7d1258d962830ccf9c47a0273613d93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae567e9e66104c3d966955f7a3e9e8677c877d902899ae895c575952599acf6f = $this->env->getExtension("native_profiler");
        $__internal_ae567e9e66104c3d966955f7a3e9e8677c877d902899ae895c575952599acf6f->enter($__internal_ae567e9e66104c3d966955f7a3e9e8677c877d902899ae895c575952599acf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_ae567e9e66104c3d966955f7a3e9e8677c877d902899ae895c575952599acf6f->leave($__internal_ae567e9e66104c3d966955f7a3e9e8677c877d902899ae895c575952599acf6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c55af2b2b3bba7286d66ee2986fa45ed5e202b204e044548b7fa98fb858ab649 = $this->env->getExtension("native_profiler");
        $__internal_c55af2b2b3bba7286d66ee2986fa45ed5e202b204e044548b7fa98fb858ab649->enter($__internal_c55af2b2b3bba7286d66ee2986fa45ed5e202b204e044548b7fa98fb858ab649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c55af2b2b3bba7286d66ee2986fa45ed5e202b204e044548b7fa98fb858ab649->leave($__internal_c55af2b2b3bba7286d66ee2986fa45ed5e202b204e044548b7fa98fb858ab649_prof);

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
