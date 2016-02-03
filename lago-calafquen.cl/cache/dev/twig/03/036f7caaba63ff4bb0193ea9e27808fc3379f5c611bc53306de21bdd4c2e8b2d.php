<?php

/* UniAdminBundle:Publication:new.html.twig */
class __TwigTemplate_e7205f104d85a2bd2fa5326d863bf884e5963f5f07a50204fa375b6daae57e83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Publication:new.html.twig", 1);
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
        $__internal_87d3203fd48152c30b5a1543b9389a7ad250fff6379b2aee24ed476dbb948de9 = $this->env->getExtension("native_profiler");
        $__internal_87d3203fd48152c30b5a1543b9389a7ad250fff6379b2aee24ed476dbb948de9->enter($__internal_87d3203fd48152c30b5a1543b9389a7ad250fff6379b2aee24ed476dbb948de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87d3203fd48152c30b5a1543b9389a7ad250fff6379b2aee24ed476dbb948de9->leave($__internal_87d3203fd48152c30b5a1543b9389a7ad250fff6379b2aee24ed476dbb948de9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e8549174b970b5a65f46d63d95baa7d0f2e42bbb0bd990e01ddfb0857fe0223 = $this->env->getExtension("native_profiler");
        $__internal_6e8549174b970b5a65f46d63d95baa7d0f2e42bbb0bd990e01ddfb0857fe0223->enter($__internal_6e8549174b970b5a65f46d63d95baa7d0f2e42bbb0bd990e01ddfb0857fe0223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_6e8549174b970b5a65f46d63d95baa7d0f2e42bbb0bd990e01ddfb0857fe0223->leave($__internal_6e8549174b970b5a65f46d63d95baa7d0f2e42bbb0bd990e01ddfb0857fe0223_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fe6b0faf34f763f8f800628ce4142afc76355eb94341924ea12811680e1dff9b = $this->env->getExtension("native_profiler");
        $__internal_fe6b0faf34f763f8f800628ce4142afc76355eb94341924ea12811680e1dff9b->enter($__internal_fe6b0faf34f763f8f800628ce4142afc76355eb94341924ea12811680e1dff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_fe6b0faf34f763f8f800628ce4142afc76355eb94341924ea12811680e1dff9b->leave($__internal_fe6b0faf34f763f8f800628ce4142afc76355eb94341924ea12811680e1dff9b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f9d4028b45179f2fbfcb006fb37e85d8a349445671cd77b1a448fd75a06857b = $this->env->getExtension("native_profiler");
        $__internal_3f9d4028b45179f2fbfcb006fb37e85d8a349445671cd77b1a448fd75a06857b->enter($__internal_3f9d4028b45179f2fbfcb006fb37e85d8a349445671cd77b1a448fd75a06857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Publication:new.html.twig", 11)->display($context);
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
        
        $__internal_3f9d4028b45179f2fbfcb006fb37e85d8a349445671cd77b1a448fd75a06857b->leave($__internal_3f9d4028b45179f2fbfcb006fb37e85d8a349445671cd77b1a448fd75a06857b_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Publication:new.html.twig";
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
