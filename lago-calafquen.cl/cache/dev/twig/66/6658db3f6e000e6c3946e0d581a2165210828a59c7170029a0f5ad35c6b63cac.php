<?php

/* UniAdminBundle:History:edit.html.twig */
class __TwigTemplate_6f2a46e9d6e9cb81f12325a22a1342f6bca4a41ab3b2afda7cf69bb1fd0cbe92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:edit.html.twig", 1);
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
        $__internal_8466b92df351aa54d81ee8d6a1bafc58f7addab06be1047c62d85aef2a97b64b = $this->env->getExtension("native_profiler");
        $__internal_8466b92df351aa54d81ee8d6a1bafc58f7addab06be1047c62d85aef2a97b64b->enter($__internal_8466b92df351aa54d81ee8d6a1bafc58f7addab06be1047c62d85aef2a97b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8466b92df351aa54d81ee8d6a1bafc58f7addab06be1047c62d85aef2a97b64b->leave($__internal_8466b92df351aa54d81ee8d6a1bafc58f7addab06be1047c62d85aef2a97b64b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b018f288ae6e46fbf193be3af5dd56f2ec918c27cb6fe5e500cc3ff48edf387c = $this->env->getExtension("native_profiler");
        $__internal_b018f288ae6e46fbf193be3af5dd56f2ec918c27cb6fe5e500cc3ff48edf387c->enter($__internal_b018f288ae6e46fbf193be3af5dd56f2ec918c27cb6fe5e500cc3ff48edf387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_b018f288ae6e46fbf193be3af5dd56f2ec918c27cb6fe5e500cc3ff48edf387c->leave($__internal_b018f288ae6e46fbf193be3af5dd56f2ec918c27cb6fe5e500cc3ff48edf387c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d2dfd0178d99e483cfc203382d4b996b00b72890cddf74afd1e6fe0b81106b = $this->env->getExtension("native_profiler");
        $__internal_61d2dfd0178d99e483cfc203382d4b996b00b72890cddf74afd1e6fe0b81106b->enter($__internal_61d2dfd0178d99e483cfc203382d4b996b00b72890cddf74afd1e6fe0b81106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:edit.html.twig", 9)->display($context);
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
        
        $__internal_61d2dfd0178d99e483cfc203382d4b996b00b72890cddf74afd1e6fe0b81106b->leave($__internal_61d2dfd0178d99e483cfc203382d4b996b00b72890cddf74afd1e6fe0b81106b_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:edit.html.twig";
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
