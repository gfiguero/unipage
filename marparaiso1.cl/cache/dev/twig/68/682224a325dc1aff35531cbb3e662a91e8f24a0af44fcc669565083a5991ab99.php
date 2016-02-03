<?php

/* UniAdminBundle:Process:new.html.twig */
class __TwigTemplate_7692ebe79c47a116c4d5db942e61a8be19d841fb8d72f83ef6a2a5d0869d5e14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:new.html.twig", 1);
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
        $__internal_4cd33599929203be00daa026f069f5c0126b89336c67bcdcfd4a64d28b989ad8 = $this->env->getExtension("native_profiler");
        $__internal_4cd33599929203be00daa026f069f5c0126b89336c67bcdcfd4a64d28b989ad8->enter($__internal_4cd33599929203be00daa026f069f5c0126b89336c67bcdcfd4a64d28b989ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd33599929203be00daa026f069f5c0126b89336c67bcdcfd4a64d28b989ad8->leave($__internal_4cd33599929203be00daa026f069f5c0126b89336c67bcdcfd4a64d28b989ad8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e11d7d41dd6015cf96ca75dceacac696162237f74e29f01c6fa846ec69e60f8 = $this->env->getExtension("native_profiler");
        $__internal_5e11d7d41dd6015cf96ca75dceacac696162237f74e29f01c6fa846ec69e60f8->enter($__internal_5e11d7d41dd6015cf96ca75dceacac696162237f74e29f01c6fa846ec69e60f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_5e11d7d41dd6015cf96ca75dceacac696162237f74e29f01c6fa846ec69e60f8->leave($__internal_5e11d7d41dd6015cf96ca75dceacac696162237f74e29f01c6fa846ec69e60f8_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_44300d8754f898b12e8c54d858bb1e606f1913e6c79154647961c71c563fc84d = $this->env->getExtension("native_profiler");
        $__internal_44300d8754f898b12e8c54d858bb1e606f1913e6c79154647961c71c563fc84d->enter($__internal_44300d8754f898b12e8c54d858bb1e606f1913e6c79154647961c71c563fc84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_44300d8754f898b12e8c54d858bb1e606f1913e6c79154647961c71c563fc84d->leave($__internal_44300d8754f898b12e8c54d858bb1e606f1913e6c79154647961c71c563fc84d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_abface752fc9f679a6a0df09ea98bcad3bb0ce9e29d3e92eb2923605e70e296b = $this->env->getExtension("native_profiler");
        $__internal_abface752fc9f679a6a0df09ea98bcad3bb0ce9e29d3e92eb2923605e70e296b->enter($__internal_abface752fc9f679a6a0df09ea98bcad3bb0ce9e29d3e92eb2923605e70e296b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:new.html.twig", 11)->display($context);
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
        
        $__internal_abface752fc9f679a6a0df09ea98bcad3bb0ce9e29d3e92eb2923605e70e296b->leave($__internal_abface752fc9f679a6a0df09ea98bcad3bb0ce9e29d3e92eb2923605e70e296b_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:new.html.twig";
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
