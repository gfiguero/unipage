<?php

/* UniAdminBundle:Process:edit.html.twig */
class __TwigTemplate_a4bda186c4a63305a3241f1d77b3f5628a55015b5119467d8c09e3991e4a7917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:edit.html.twig", 1);
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
        $__internal_5658c1378fbe02029a58f95faf4f4a41741d24a84f786fba6d5b4ddd16adab81 = $this->env->getExtension("native_profiler");
        $__internal_5658c1378fbe02029a58f95faf4f4a41741d24a84f786fba6d5b4ddd16adab81->enter($__internal_5658c1378fbe02029a58f95faf4f4a41741d24a84f786fba6d5b4ddd16adab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5658c1378fbe02029a58f95faf4f4a41741d24a84f786fba6d5b4ddd16adab81->leave($__internal_5658c1378fbe02029a58f95faf4f4a41741d24a84f786fba6d5b4ddd16adab81_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca95ea607af21ff4e8d2e17530fa5d5d672f5d8fdb01ecaf85824bdc6b0f3360 = $this->env->getExtension("native_profiler");
        $__internal_ca95ea607af21ff4e8d2e17530fa5d5d672f5d8fdb01ecaf85824bdc6b0f3360->enter($__internal_ca95ea607af21ff4e8d2e17530fa5d5d672f5d8fdb01ecaf85824bdc6b0f3360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_ca95ea607af21ff4e8d2e17530fa5d5d672f5d8fdb01ecaf85824bdc6b0f3360->leave($__internal_ca95ea607af21ff4e8d2e17530fa5d5d672f5d8fdb01ecaf85824bdc6b0f3360_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d3a85504590303bd37a70bed31dfdf926a96e4831c0fa1610cd7788caaeed693 = $this->env->getExtension("native_profiler");
        $__internal_d3a85504590303bd37a70bed31dfdf926a96e4831c0fa1610cd7788caaeed693->enter($__internal_d3a85504590303bd37a70bed31dfdf926a96e4831c0fa1610cd7788caaeed693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_d3a85504590303bd37a70bed31dfdf926a96e4831c0fa1610cd7788caaeed693->leave($__internal_d3a85504590303bd37a70bed31dfdf926a96e4831c0fa1610cd7788caaeed693_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b11a7fcfeb74b6e372ff8b382aa7c4feb9d4194aa21bd9e7468bc670acff361 = $this->env->getExtension("native_profiler");
        $__internal_4b11a7fcfeb74b6e372ff8b382aa7c4feb9d4194aa21bd9e7468bc670acff361->enter($__internal_4b11a7fcfeb74b6e372ff8b382aa7c4feb9d4194aa21bd9e7468bc670acff361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:edit.html.twig", 11)->display($context);
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
        // line 20
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
        
        $__internal_4b11a7fcfeb74b6e372ff8b382aa7c4feb9d4194aa21bd9e7468bc670acff361->leave($__internal_4b11a7fcfeb74b6e372ff8b382aa7c4feb9d4194aa21bd9e7468bc670acff361_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
