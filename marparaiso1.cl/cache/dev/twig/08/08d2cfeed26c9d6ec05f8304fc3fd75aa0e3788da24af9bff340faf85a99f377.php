<?php

/* UniAdminBundle:MemberRole:new.html.twig */
class __TwigTemplate_bde5728144d7ede1aff275959e356f55442922b7eeee88844fc8927cb11181e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberRole:new.html.twig", 1);
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
        $__internal_3fafbc9fd3d84144742c7b30739f63c29f537d54b33849e1bfe4f901f491a157 = $this->env->getExtension("native_profiler");
        $__internal_3fafbc9fd3d84144742c7b30739f63c29f537d54b33849e1bfe4f901f491a157->enter($__internal_3fafbc9fd3d84144742c7b30739f63c29f537d54b33849e1bfe4f901f491a157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberRole:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fafbc9fd3d84144742c7b30739f63c29f537d54b33849e1bfe4f901f491a157->leave($__internal_3fafbc9fd3d84144742c7b30739f63c29f537d54b33849e1bfe4f901f491a157_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a63d56b4d0ffaf2f428ed4146500b1975b0b355aa1fc30c7e12c1ab9ac29c76 = $this->env->getExtension("native_profiler");
        $__internal_7a63d56b4d0ffaf2f428ed4146500b1975b0b355aa1fc30c7e12c1ab9ac29c76->enter($__internal_7a63d56b4d0ffaf2f428ed4146500b1975b0b355aa1fc30c7e12c1ab9ac29c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_7a63d56b4d0ffaf2f428ed4146500b1975b0b355aa1fc30c7e12c1ab9ac29c76->leave($__internal_7a63d56b4d0ffaf2f428ed4146500b1975b0b355aa1fc30c7e12c1ab9ac29c76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da368db1880d66f444338863587a4d397db8fe634f555642fb06d00ddb1e834 = $this->env->getExtension("native_profiler");
        $__internal_8da368db1880d66f444338863587a4d397db8fe634f555642fb06d00ddb1e834->enter($__internal_8da368db1880d66f444338863587a4d397db8fe634f555642fb06d00ddb1e834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberRole:new.html.twig", 9)->display($context);
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
        
        $__internal_8da368db1880d66f444338863587a4d397db8fe634f555642fb06d00ddb1e834->leave($__internal_8da368db1880d66f444338863587a4d397db8fe634f555642fb06d00ddb1e834_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberRole:new.html.twig";
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
