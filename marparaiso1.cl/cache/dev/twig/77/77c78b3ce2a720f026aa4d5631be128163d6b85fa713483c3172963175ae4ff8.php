<?php

/* UniAdminBundle:Product:new.html.twig */
class __TwigTemplate_073f51642103d1257dcdd3807660d6371c8bee9e15f15d43087b6d3c3a9dba83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Product:new.html.twig", 1);
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
        $__internal_c7d55063bdf42aa12de18287b64057890a14f2a0f1e69abbbdef16de07b6be8d = $this->env->getExtension("native_profiler");
        $__internal_c7d55063bdf42aa12de18287b64057890a14f2a0f1e69abbbdef16de07b6be8d->enter($__internal_c7d55063bdf42aa12de18287b64057890a14f2a0f1e69abbbdef16de07b6be8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7d55063bdf42aa12de18287b64057890a14f2a0f1e69abbbdef16de07b6be8d->leave($__internal_c7d55063bdf42aa12de18287b64057890a14f2a0f1e69abbbdef16de07b6be8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f7d7ceb98fcf951a218de9e3032f0d3d8e200b5185751b43201f16f1a18ed7f = $this->env->getExtension("native_profiler");
        $__internal_6f7d7ceb98fcf951a218de9e3032f0d3d8e200b5185751b43201f16f1a18ed7f->enter($__internal_6f7d7ceb98fcf951a218de9e3032f0d3d8e200b5185751b43201f16f1a18ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_6f7d7ceb98fcf951a218de9e3032f0d3d8e200b5185751b43201f16f1a18ed7f->leave($__internal_6f7d7ceb98fcf951a218de9e3032f0d3d8e200b5185751b43201f16f1a18ed7f_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_77ead29abfa648f995e5cfea445732d8a42e17fc63ada7bf7df368ba2a4a4291 = $this->env->getExtension("native_profiler");
        $__internal_77ead29abfa648f995e5cfea445732d8a42e17fc63ada7bf7df368ba2a4a4291->enter($__internal_77ead29abfa648f995e5cfea445732d8a42e17fc63ada7bf7df368ba2a4a4291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_77ead29abfa648f995e5cfea445732d8a42e17fc63ada7bf7df368ba2a4a4291->leave($__internal_77ead29abfa648f995e5cfea445732d8a42e17fc63ada7bf7df368ba2a4a4291_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_95740e19da045ee3b1d4f93fcc9e1158aff52fc00cdafc9ad11562a5557e83ca = $this->env->getExtension("native_profiler");
        $__internal_95740e19da045ee3b1d4f93fcc9e1158aff52fc00cdafc9ad11562a5557e83ca->enter($__internal_95740e19da045ee3b1d4f93fcc9e1158aff52fc00cdafc9ad11562a5557e83ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Product:new.html.twig", 11)->display($context);
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
        
        $__internal_95740e19da045ee3b1d4f93fcc9e1158aff52fc00cdafc9ad11562a5557e83ca->leave($__internal_95740e19da045ee3b1d4f93fcc9e1158aff52fc00cdafc9ad11562a5557e83ca_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Product:new.html.twig";
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
