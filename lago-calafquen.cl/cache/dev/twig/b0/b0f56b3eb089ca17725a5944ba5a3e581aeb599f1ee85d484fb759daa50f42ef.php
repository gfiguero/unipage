<?php

/* UniAdminBundle:Notice:edit.html.twig */
class __TwigTemplate_56906ee573c5d7f2044e1021af93a4ba41f0e22dda610232990e917378b6923c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Notice:edit.html.twig", 1);
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
        $__internal_6c9f312e0add9f720a927fbb4f6eb099a98fc79ffd0450762ddcbd6c0020c529 = $this->env->getExtension("native_profiler");
        $__internal_6c9f312e0add9f720a927fbb4f6eb099a98fc79ffd0450762ddcbd6c0020c529->enter($__internal_6c9f312e0add9f720a927fbb4f6eb099a98fc79ffd0450762ddcbd6c0020c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c9f312e0add9f720a927fbb4f6eb099a98fc79ffd0450762ddcbd6c0020c529->leave($__internal_6c9f312e0add9f720a927fbb4f6eb099a98fc79ffd0450762ddcbd6c0020c529_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_507dc8b23c87da904ce8a865115d33fdbaf8c87bd1ee000d4d290990ff14b4e9 = $this->env->getExtension("native_profiler");
        $__internal_507dc8b23c87da904ce8a865115d33fdbaf8c87bd1ee000d4d290990ff14b4e9->enter($__internal_507dc8b23c87da904ce8a865115d33fdbaf8c87bd1ee000d4d290990ff14b4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_507dc8b23c87da904ce8a865115d33fdbaf8c87bd1ee000d4d290990ff14b4e9->leave($__internal_507dc8b23c87da904ce8a865115d33fdbaf8c87bd1ee000d4d290990ff14b4e9_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b21402d8b809adad2760d620617dc4da443ab7074818dff5ec634cb2b8849974 = $this->env->getExtension("native_profiler");
        $__internal_b21402d8b809adad2760d620617dc4da443ab7074818dff5ec634cb2b8849974->enter($__internal_b21402d8b809adad2760d620617dc4da443ab7074818dff5ec634cb2b8849974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_b21402d8b809adad2760d620617dc4da443ab7074818dff5ec634cb2b8849974->leave($__internal_b21402d8b809adad2760d620617dc4da443ab7074818dff5ec634cb2b8849974_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c91bcfc41788bc60e0fc861cda118f1693e71cb2cdd9685a183a17ac2b0b6fee = $this->env->getExtension("native_profiler");
        $__internal_c91bcfc41788bc60e0fc861cda118f1693e71cb2cdd9685a183a17ac2b0b6fee->enter($__internal_c91bcfc41788bc60e0fc861cda118f1693e71cb2cdd9685a183a17ac2b0b6fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Notice:edit.html.twig", 11)->display($context);
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
        
        $__internal_c91bcfc41788bc60e0fc861cda118f1693e71cb2cdd9685a183a17ac2b0b6fee->leave($__internal_c91bcfc41788bc60e0fc861cda118f1693e71cb2cdd9685a183a17ac2b0b6fee_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Notice:edit.html.twig";
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
