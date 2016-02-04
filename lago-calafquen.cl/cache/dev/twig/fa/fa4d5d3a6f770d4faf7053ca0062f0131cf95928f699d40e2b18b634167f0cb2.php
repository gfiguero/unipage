<?php

/* UniAdminBundle:Document:new.html.twig */
class __TwigTemplate_fd3cc3a76f78fa3a3d71289922e28aaad609fdf685a0be6944ae75d7eee432f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Document:new.html.twig", 1);
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
        $__internal_bee3ff4f9ca90ef6ac7daff810666544744bbcdc4a6ec38992d26b5b417d2d76 = $this->env->getExtension("native_profiler");
        $__internal_bee3ff4f9ca90ef6ac7daff810666544744bbcdc4a6ec38992d26b5b417d2d76->enter($__internal_bee3ff4f9ca90ef6ac7daff810666544744bbcdc4a6ec38992d26b5b417d2d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee3ff4f9ca90ef6ac7daff810666544744bbcdc4a6ec38992d26b5b417d2d76->leave($__internal_bee3ff4f9ca90ef6ac7daff810666544744bbcdc4a6ec38992d26b5b417d2d76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ffc940836e3d93004851a017c242a1d817a2151fae9d19b7d3a135abd6dd9cf = $this->env->getExtension("native_profiler");
        $__internal_5ffc940836e3d93004851a017c242a1d817a2151fae9d19b7d3a135abd6dd9cf->enter($__internal_5ffc940836e3d93004851a017c242a1d817a2151fae9d19b7d3a135abd6dd9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_5ffc940836e3d93004851a017c242a1d817a2151fae9d19b7d3a135abd6dd9cf->leave($__internal_5ffc940836e3d93004851a017c242a1d817a2151fae9d19b7d3a135abd6dd9cf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7078db421e382b70002cf7a80e1855711aab78b57814413fefb0cdf3472bfc6e = $this->env->getExtension("native_profiler");
        $__internal_7078db421e382b70002cf7a80e1855711aab78b57814413fefb0cdf3472bfc6e->enter($__internal_7078db421e382b70002cf7a80e1855711aab78b57814413fefb0cdf3472bfc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Document:new.html.twig", 9)->display($context);
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
        
        $__internal_7078db421e382b70002cf7a80e1855711aab78b57814413fefb0cdf3472bfc6e->leave($__internal_7078db421e382b70002cf7a80e1855711aab78b57814413fefb0cdf3472bfc6e_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Document:new.html.twig";
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
