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
        $__internal_e41ed29891db1bdcda65b53afdc33e631512caa3048cee7e5cc3fc681f1a5ef0 = $this->env->getExtension("native_profiler");
        $__internal_e41ed29891db1bdcda65b53afdc33e631512caa3048cee7e5cc3fc681f1a5ef0->enter($__internal_e41ed29891db1bdcda65b53afdc33e631512caa3048cee7e5cc3fc681f1a5ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41ed29891db1bdcda65b53afdc33e631512caa3048cee7e5cc3fc681f1a5ef0->leave($__internal_e41ed29891db1bdcda65b53afdc33e631512caa3048cee7e5cc3fc681f1a5ef0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_677d2fd3409f461e1541a122eb0a0f04012d62f952c931288c590518bf9a8e23 = $this->env->getExtension("native_profiler");
        $__internal_677d2fd3409f461e1541a122eb0a0f04012d62f952c931288c590518bf9a8e23->enter($__internal_677d2fd3409f461e1541a122eb0a0f04012d62f952c931288c590518bf9a8e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_677d2fd3409f461e1541a122eb0a0f04012d62f952c931288c590518bf9a8e23->leave($__internal_677d2fd3409f461e1541a122eb0a0f04012d62f952c931288c590518bf9a8e23_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5a897593b6d7aaa449fd4eeb56a2d40d38dee37bd19c16bb6d01a16a90371483 = $this->env->getExtension("native_profiler");
        $__internal_5a897593b6d7aaa449fd4eeb56a2d40d38dee37bd19c16bb6d01a16a90371483->enter($__internal_5a897593b6d7aaa449fd4eeb56a2d40d38dee37bd19c16bb6d01a16a90371483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_5a897593b6d7aaa449fd4eeb56a2d40d38dee37bd19c16bb6d01a16a90371483->leave($__internal_5a897593b6d7aaa449fd4eeb56a2d40d38dee37bd19c16bb6d01a16a90371483_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fca50b141b7f65951ef2b0fdf846610ec0d46da1a2c7994a841edd14592a6b = $this->env->getExtension("native_profiler");
        $__internal_19fca50b141b7f65951ef2b0fdf846610ec0d46da1a2c7994a841edd14592a6b->enter($__internal_19fca50b141b7f65951ef2b0fdf846610ec0d46da1a2c7994a841edd14592a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_19fca50b141b7f65951ef2b0fdf846610ec0d46da1a2c7994a841edd14592a6b->leave($__internal_19fca50b141b7f65951ef2b0fdf846610ec0d46da1a2c7994a841edd14592a6b_prof);

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
