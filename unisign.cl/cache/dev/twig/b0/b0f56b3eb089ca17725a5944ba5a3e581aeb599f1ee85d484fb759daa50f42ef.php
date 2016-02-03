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
        $__internal_93318c3ac0518f3ca71c3a714c7438589d5615f43753eb064ae7fcda928b0a57 = $this->env->getExtension("native_profiler");
        $__internal_93318c3ac0518f3ca71c3a714c7438589d5615f43753eb064ae7fcda928b0a57->enter($__internal_93318c3ac0518f3ca71c3a714c7438589d5615f43753eb064ae7fcda928b0a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Notice:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93318c3ac0518f3ca71c3a714c7438589d5615f43753eb064ae7fcda928b0a57->leave($__internal_93318c3ac0518f3ca71c3a714c7438589d5615f43753eb064ae7fcda928b0a57_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f308bb80817c8b14a2f22798188d274f0fb3034c751092a9082823e900d77dcd = $this->env->getExtension("native_profiler");
        $__internal_f308bb80817c8b14a2f22798188d274f0fb3034c751092a9082823e900d77dcd->enter($__internal_f308bb80817c8b14a2f22798188d274f0fb3034c751092a9082823e900d77dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_f308bb80817c8b14a2f22798188d274f0fb3034c751092a9082823e900d77dcd->leave($__internal_f308bb80817c8b14a2f22798188d274f0fb3034c751092a9082823e900d77dcd_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_db2337a6f141aa7b418ce99aa3382b4b014dc13be4ff3a4c7ebec41fd02f5984 = $this->env->getExtension("native_profiler");
        $__internal_db2337a6f141aa7b418ce99aa3382b4b014dc13be4ff3a4c7ebec41fd02f5984->enter($__internal_db2337a6f141aa7b418ce99aa3382b4b014dc13be4ff3a4c7ebec41fd02f5984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_db2337a6f141aa7b418ce99aa3382b4b014dc13be4ff3a4c7ebec41fd02f5984->leave($__internal_db2337a6f141aa7b418ce99aa3382b4b014dc13be4ff3a4c7ebec41fd02f5984_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a45f57dfe61d33d16b2f2d304cd02ef2a3267c9948aeb79a05d580c44da1bef = $this->env->getExtension("native_profiler");
        $__internal_0a45f57dfe61d33d16b2f2d304cd02ef2a3267c9948aeb79a05d580c44da1bef->enter($__internal_0a45f57dfe61d33d16b2f2d304cd02ef2a3267c9948aeb79a05d580c44da1bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a45f57dfe61d33d16b2f2d304cd02ef2a3267c9948aeb79a05d580c44da1bef->leave($__internal_0a45f57dfe61d33d16b2f2d304cd02ef2a3267c9948aeb79a05d580c44da1bef_prof);

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
