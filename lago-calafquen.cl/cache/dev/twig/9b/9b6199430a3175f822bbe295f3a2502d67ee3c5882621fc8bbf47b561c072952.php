<?php

/* UniAdminBundle:Product:edit.html.twig */
class __TwigTemplate_0ac51ee315bb6f7c8e5ea4725c8c7cb5815d6874b1a9a29f95ee4034b339cb81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Product:edit.html.twig", 1);
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
        $__internal_b5f2327987b8a8610b63ac3bde18fc4c1313e960ed8ae9de88b79f6949ba5a54 = $this->env->getExtension("native_profiler");
        $__internal_b5f2327987b8a8610b63ac3bde18fc4c1313e960ed8ae9de88b79f6949ba5a54->enter($__internal_b5f2327987b8a8610b63ac3bde18fc4c1313e960ed8ae9de88b79f6949ba5a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f2327987b8a8610b63ac3bde18fc4c1313e960ed8ae9de88b79f6949ba5a54->leave($__internal_b5f2327987b8a8610b63ac3bde18fc4c1313e960ed8ae9de88b79f6949ba5a54_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1291ee4e658bff1f311c47248da116f5828c8e3c397d989399492506c2543377 = $this->env->getExtension("native_profiler");
        $__internal_1291ee4e658bff1f311c47248da116f5828c8e3c397d989399492506c2543377->enter($__internal_1291ee4e658bff1f311c47248da116f5828c8e3c397d989399492506c2543377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_1291ee4e658bff1f311c47248da116f5828c8e3c397d989399492506c2543377->leave($__internal_1291ee4e658bff1f311c47248da116f5828c8e3c397d989399492506c2543377_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1279fde2c49b0ee721af8ed9685e7d2158d6bb918ce24fc00e3fb5bf4b29c2b8 = $this->env->getExtension("native_profiler");
        $__internal_1279fde2c49b0ee721af8ed9685e7d2158d6bb918ce24fc00e3fb5bf4b29c2b8->enter($__internal_1279fde2c49b0ee721af8ed9685e7d2158d6bb918ce24fc00e3fb5bf4b29c2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_1279fde2c49b0ee721af8ed9685e7d2158d6bb918ce24fc00e3fb5bf4b29c2b8->leave($__internal_1279fde2c49b0ee721af8ed9685e7d2158d6bb918ce24fc00e3fb5bf4b29c2b8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e093ad40f5b6fb4148295188b3ce587d81572b525d2e50177e4838efcce69f3 = $this->env->getExtension("native_profiler");
        $__internal_7e093ad40f5b6fb4148295188b3ce587d81572b525d2e50177e4838efcce69f3->enter($__internal_7e093ad40f5b6fb4148295188b3ce587d81572b525d2e50177e4838efcce69f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Product:edit.html.twig", 11)->display($context);
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
        
        $__internal_7e093ad40f5b6fb4148295188b3ce587d81572b525d2e50177e4838efcce69f3->leave($__internal_7e093ad40f5b6fb4148295188b3ce587d81572b525d2e50177e4838efcce69f3_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Product:edit.html.twig";
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
