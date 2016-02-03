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
        $__internal_00f2b10b6d28670e212443bed36535ab3ae1873ee1cfbdaf206e6c2021a846f0 = $this->env->getExtension("native_profiler");
        $__internal_00f2b10b6d28670e212443bed36535ab3ae1873ee1cfbdaf206e6c2021a846f0->enter($__internal_00f2b10b6d28670e212443bed36535ab3ae1873ee1cfbdaf206e6c2021a846f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00f2b10b6d28670e212443bed36535ab3ae1873ee1cfbdaf206e6c2021a846f0->leave($__internal_00f2b10b6d28670e212443bed36535ab3ae1873ee1cfbdaf206e6c2021a846f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e80837c9563c0ade6508f9ebc700ecb94fca7e8329e44487f063f65ae5f965e6 = $this->env->getExtension("native_profiler");
        $__internal_e80837c9563c0ade6508f9ebc700ecb94fca7e8329e44487f063f65ae5f965e6->enter($__internal_e80837c9563c0ade6508f9ebc700ecb94fca7e8329e44487f063f65ae5f965e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_e80837c9563c0ade6508f9ebc700ecb94fca7e8329e44487f063f65ae5f965e6->leave($__internal_e80837c9563c0ade6508f9ebc700ecb94fca7e8329e44487f063f65ae5f965e6_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_814b5e83f134b42f73a983d66a4aef475fe06662bc09005ac71c35ed064a1007 = $this->env->getExtension("native_profiler");
        $__internal_814b5e83f134b42f73a983d66a4aef475fe06662bc09005ac71c35ed064a1007->enter($__internal_814b5e83f134b42f73a983d66a4aef475fe06662bc09005ac71c35ed064a1007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_814b5e83f134b42f73a983d66a4aef475fe06662bc09005ac71c35ed064a1007->leave($__internal_814b5e83f134b42f73a983d66a4aef475fe06662bc09005ac71c35ed064a1007_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b09e7d5b4948bb76f6a51ab067d5c6a0654cce6b4462aedf8a0d7c25686e52d = $this->env->getExtension("native_profiler");
        $__internal_0b09e7d5b4948bb76f6a51ab067d5c6a0654cce6b4462aedf8a0d7c25686e52d->enter($__internal_0b09e7d5b4948bb76f6a51ab067d5c6a0654cce6b4462aedf8a0d7c25686e52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b09e7d5b4948bb76f6a51ab067d5c6a0654cce6b4462aedf8a0d7c25686e52d->leave($__internal_0b09e7d5b4948bb76f6a51ab067d5c6a0654cce6b4462aedf8a0d7c25686e52d_prof);

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
