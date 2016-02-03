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
        $__internal_86d453f67a1eae1b389a289e7050448369fdd144b25cb75fe0a1b958b1112386 = $this->env->getExtension("native_profiler");
        $__internal_86d453f67a1eae1b389a289e7050448369fdd144b25cb75fe0a1b958b1112386->enter($__internal_86d453f67a1eae1b389a289e7050448369fdd144b25cb75fe0a1b958b1112386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Publication:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86d453f67a1eae1b389a289e7050448369fdd144b25cb75fe0a1b958b1112386->leave($__internal_86d453f67a1eae1b389a289e7050448369fdd144b25cb75fe0a1b958b1112386_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3766cfeeb77f7ce5b0214a7cc2666771c2cbe2b6e45636e9ad2efd71b1377fbb = $this->env->getExtension("native_profiler");
        $__internal_3766cfeeb77f7ce5b0214a7cc2666771c2cbe2b6e45636e9ad2efd71b1377fbb->enter($__internal_3766cfeeb77f7ce5b0214a7cc2666771c2cbe2b6e45636e9ad2efd71b1377fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_3766cfeeb77f7ce5b0214a7cc2666771c2cbe2b6e45636e9ad2efd71b1377fbb->leave($__internal_3766cfeeb77f7ce5b0214a7cc2666771c2cbe2b6e45636e9ad2efd71b1377fbb_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bc545c08464adc2af55d378407c3ad02ac7fdd9311c94ce80d1bfda30038875d = $this->env->getExtension("native_profiler");
        $__internal_bc545c08464adc2af55d378407c3ad02ac7fdd9311c94ce80d1bfda30038875d->enter($__internal_bc545c08464adc2af55d378407c3ad02ac7fdd9311c94ce80d1bfda30038875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_bc545c08464adc2af55d378407c3ad02ac7fdd9311c94ce80d1bfda30038875d->leave($__internal_bc545c08464adc2af55d378407c3ad02ac7fdd9311c94ce80d1bfda30038875d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_daa6fa7695c47bfb1a1ee0fa54fbaf60580a34a25818d1844258bc5856b5d3f1 = $this->env->getExtension("native_profiler");
        $__internal_daa6fa7695c47bfb1a1ee0fa54fbaf60580a34a25818d1844258bc5856b5d3f1->enter($__internal_daa6fa7695c47bfb1a1ee0fa54fbaf60580a34a25818d1844258bc5856b5d3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_daa6fa7695c47bfb1a1ee0fa54fbaf60580a34a25818d1844258bc5856b5d3f1->leave($__internal_daa6fa7695c47bfb1a1ee0fa54fbaf60580a34a25818d1844258bc5856b5d3f1_prof);

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
