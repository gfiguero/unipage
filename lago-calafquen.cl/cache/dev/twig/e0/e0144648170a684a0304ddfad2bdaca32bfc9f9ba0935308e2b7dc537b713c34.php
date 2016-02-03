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
        $__internal_8da5c0f7bfdabb6c189fa81e88bf0352827ee11f8529df14db0d0f686d29e41f = $this->env->getExtension("native_profiler");
        $__internal_8da5c0f7bfdabb6c189fa81e88bf0352827ee11f8529df14db0d0f686d29e41f->enter($__internal_8da5c0f7bfdabb6c189fa81e88bf0352827ee11f8529df14db0d0f686d29e41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8da5c0f7bfdabb6c189fa81e88bf0352827ee11f8529df14db0d0f686d29e41f->leave($__internal_8da5c0f7bfdabb6c189fa81e88bf0352827ee11f8529df14db0d0f686d29e41f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7a89a9c5eab2ac467a8da0bcba008bd5be592fb2d39eea4afc5aad41d7f1d14 = $this->env->getExtension("native_profiler");
        $__internal_f7a89a9c5eab2ac467a8da0bcba008bd5be592fb2d39eea4afc5aad41d7f1d14->enter($__internal_f7a89a9c5eab2ac467a8da0bcba008bd5be592fb2d39eea4afc5aad41d7f1d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_f7a89a9c5eab2ac467a8da0bcba008bd5be592fb2d39eea4afc5aad41d7f1d14->leave($__internal_f7a89a9c5eab2ac467a8da0bcba008bd5be592fb2d39eea4afc5aad41d7f1d14_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d5a841a884d0c90d1253eb21c5e288182144d1f0ae519abf66f94d23d4986c0b = $this->env->getExtension("native_profiler");
        $__internal_d5a841a884d0c90d1253eb21c5e288182144d1f0ae519abf66f94d23d4986c0b->enter($__internal_d5a841a884d0c90d1253eb21c5e288182144d1f0ae519abf66f94d23d4986c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_d5a841a884d0c90d1253eb21c5e288182144d1f0ae519abf66f94d23d4986c0b->leave($__internal_d5a841a884d0c90d1253eb21c5e288182144d1f0ae519abf66f94d23d4986c0b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b60526661cbe20639a2b9630839adbe4b73139ffb0187776e814f030186e6e3f = $this->env->getExtension("native_profiler");
        $__internal_b60526661cbe20639a2b9630839adbe4b73139ffb0187776e814f030186e6e3f->enter($__internal_b60526661cbe20639a2b9630839adbe4b73139ffb0187776e814f030186e6e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b60526661cbe20639a2b9630839adbe4b73139ffb0187776e814f030186e6e3f->leave($__internal_b60526661cbe20639a2b9630839adbe4b73139ffb0187776e814f030186e6e3f_prof);

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
