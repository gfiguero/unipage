<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_cb1730423033a9f2f107b0899a8b207f2079e9b746451b8fb94f57b6484f67fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_546d856cf8ebdaf37f363079c7d76302e694442af24fb3bcf2fb5b573a975f37 = $this->env->getExtension("native_profiler");
        $__internal_546d856cf8ebdaf37f363079c7d76302e694442af24fb3bcf2fb5b573a975f37->enter($__internal_546d856cf8ebdaf37f363079c7d76302e694442af24fb3bcf2fb5b573a975f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_546d856cf8ebdaf37f363079c7d76302e694442af24fb3bcf2fb5b573a975f37->leave($__internal_546d856cf8ebdaf37f363079c7d76302e694442af24fb3bcf2fb5b573a975f37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90ecd4e3f7b02fc1609c373bddc3b4441907b08663a6dde7cd1e9dfeca87f3e9 = $this->env->getExtension("native_profiler");
        $__internal_90ecd4e3f7b02fc1609c373bddc3b4441907b08663a6dde7cd1e9dfeca87f3e9->enter($__internal_90ecd4e3f7b02fc1609c373bddc3b4441907b08663a6dde7cd1e9dfeca87f3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_90ecd4e3f7b02fc1609c373bddc3b4441907b08663a6dde7cd1e9dfeca87f3e9->leave($__internal_90ecd4e3f7b02fc1609c373bddc3b4441907b08663a6dde7cd1e9dfeca87f3e9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bccfa3eef981fe82f4e3422fcf854b1aa7d49794afe69ddee55c679845c9347e = $this->env->getExtension("native_profiler");
        $__internal_bccfa3eef981fe82f4e3422fcf854b1aa7d49794afe69ddee55c679845c9347e->enter($__internal_bccfa3eef981fe82f4e3422fcf854b1aa7d49794afe69ddee55c679845c9347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("style" => "horizontal"));
        echo "
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_bccfa3eef981fe82f4e3422fcf854b1aa7d49794afe69ddee55c679845c9347e->leave($__internal_bccfa3eef981fe82f4e3422fcf854b1aa7d49794afe69ddee55c679845c9347e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*         </div>*/
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
/* {% endblock body %}*/
