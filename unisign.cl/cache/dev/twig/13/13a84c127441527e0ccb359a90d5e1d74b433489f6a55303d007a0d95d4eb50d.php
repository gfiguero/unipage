<?php

/* UniAdminBundle:Frontpage:new.html.twig */
class __TwigTemplate_63f71c9190b913e73221b05337ed490492a6a444d2cfd7d08c8e521c5e08668a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 1);
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
        $__internal_9dba000061a3d7106b593d83662bfb9a753899148e7ac01e6a2d5df505dafcd9 = $this->env->getExtension("native_profiler");
        $__internal_9dba000061a3d7106b593d83662bfb9a753899148e7ac01e6a2d5df505dafcd9->enter($__internal_9dba000061a3d7106b593d83662bfb9a753899148e7ac01e6a2d5df505dafcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dba000061a3d7106b593d83662bfb9a753899148e7ac01e6a2d5df505dafcd9->leave($__internal_9dba000061a3d7106b593d83662bfb9a753899148e7ac01e6a2d5df505dafcd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_688e92870fe652e17f2a7ce6b913a454d4bf5c1e7cca78bfc9775adca60c7bb5 = $this->env->getExtension("native_profiler");
        $__internal_688e92870fe652e17f2a7ce6b913a454d4bf5c1e7cca78bfc9775adca60c7bb5->enter($__internal_688e92870fe652e17f2a7ce6b913a454d4bf5c1e7cca78bfc9775adca60c7bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_688e92870fe652e17f2a7ce6b913a454d4bf5c1e7cca78bfc9775adca60c7bb5->leave($__internal_688e92870fe652e17f2a7ce6b913a454d4bf5c1e7cca78bfc9775adca60c7bb5_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3a58a1873e52460ba586eacfebe279536b61cbc037686e6fc0a2c21ab6af0ee7 = $this->env->getExtension("native_profiler");
        $__internal_3a58a1873e52460ba586eacfebe279536b61cbc037686e6fc0a2c21ab6af0ee7->enter($__internal_3a58a1873e52460ba586eacfebe279536b61cbc037686e6fc0a2c21ab6af0ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_3a58a1873e52460ba586eacfebe279536b61cbc037686e6fc0a2c21ab6af0ee7->leave($__internal_3a58a1873e52460ba586eacfebe279536b61cbc037686e6fc0a2c21ab6af0ee7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c677492dac0328ce1d1ef053dd5a28fc4c93dd1ae9c6426c860408fb91a249 = $this->env->getExtension("native_profiler");
        $__internal_f7c677492dac0328ce1d1ef053dd5a28fc4c93dd1ae9c6426c860408fb91a249->enter($__internal_f7c677492dac0328ce1d1ef053dd5a28fc4c93dd1ae9c6426c860408fb91a249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Frontpage:new.html.twig", 11)->display($context);
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
        
        $__internal_f7c677492dac0328ce1d1ef053dd5a28fc4c93dd1ae9c6426c860408fb91a249->leave($__internal_f7c677492dac0328ce1d1ef053dd5a28fc4c93dd1ae9c6426c860408fb91a249_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Frontpage:new.html.twig";
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
