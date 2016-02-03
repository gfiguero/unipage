<?php

/* UniAdminBundle:Publication:edit.html.twig */
class __TwigTemplate_dfb12e495c18589e2e7b2e0d7850b64999799682ee94d617999e03553b97cd8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Publication:edit.html.twig", 1);
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
        $__internal_08d6366b1734d343dec4539ee6c378b270b33e7d94cbbc0ec9db238051095507 = $this->env->getExtension("native_profiler");
        $__internal_08d6366b1734d343dec4539ee6c378b270b33e7d94cbbc0ec9db238051095507->enter($__internal_08d6366b1734d343dec4539ee6c378b270b33e7d94cbbc0ec9db238051095507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08d6366b1734d343dec4539ee6c378b270b33e7d94cbbc0ec9db238051095507->leave($__internal_08d6366b1734d343dec4539ee6c378b270b33e7d94cbbc0ec9db238051095507_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd75749a43e6a0328a5bed99e4adbfa9af203d48162e76725541f9b2d7f595e0 = $this->env->getExtension("native_profiler");
        $__internal_dd75749a43e6a0328a5bed99e4adbfa9af203d48162e76725541f9b2d7f595e0->enter($__internal_dd75749a43e6a0328a5bed99e4adbfa9af203d48162e76725541f9b2d7f595e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_dd75749a43e6a0328a5bed99e4adbfa9af203d48162e76725541f9b2d7f595e0->leave($__internal_dd75749a43e6a0328a5bed99e4adbfa9af203d48162e76725541f9b2d7f595e0_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_a5378c5243b2a7b2226209d4d8828b632c62fc3ca801744edf1db5d5170caaac = $this->env->getExtension("native_profiler");
        $__internal_a5378c5243b2a7b2226209d4d8828b632c62fc3ca801744edf1db5d5170caaac->enter($__internal_a5378c5243b2a7b2226209d4d8828b632c62fc3ca801744edf1db5d5170caaac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_a5378c5243b2a7b2226209d4d8828b632c62fc3ca801744edf1db5d5170caaac->leave($__internal_a5378c5243b2a7b2226209d4d8828b632c62fc3ca801744edf1db5d5170caaac_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4658ac81f05119418d7b00863caf298cb55e8826d6eca690e642d85de5a2d81d = $this->env->getExtension("native_profiler");
        $__internal_4658ac81f05119418d7b00863caf298cb55e8826d6eca690e642d85de5a2d81d->enter($__internal_4658ac81f05119418d7b00863caf298cb55e8826d6eca690e642d85de5a2d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Publication:edit.html.twig", 11)->display($context);
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
        
        $__internal_4658ac81f05119418d7b00863caf298cb55e8826d6eca690e642d85de5a2d81d->leave($__internal_4658ac81f05119418d7b00863caf298cb55e8826d6eca690e642d85de5a2d81d_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Publication:edit.html.twig";
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
