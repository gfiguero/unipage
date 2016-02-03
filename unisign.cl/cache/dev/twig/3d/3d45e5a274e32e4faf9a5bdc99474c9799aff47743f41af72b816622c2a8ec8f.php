<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_ab0efc7c4ef7afbd2dafce01ce0fc8335dcc1db392de367089e42695956f6f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3c3d180ff0555edcba4143a2aa7ffe35392f6261861d7221e4715a9b61704a5 = $this->env->getExtension("native_profiler");
        $__internal_a3c3d180ff0555edcba4143a2aa7ffe35392f6261861d7221e4715a9b61704a5->enter($__internal_a3c3d180ff0555edcba4143a2aa7ffe35392f6261861d7221e4715a9b61704a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">";
        // line 4
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 4)->display($context);
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
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("style" => "horizontal"));
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-lg-offset-2 col-lg-10\">
                                <button type=\"submit\" id=\"uni_adminbundle_user_register\" icon=\"save\" class=\"btn btn-primary\"><span class=\"fa fa-save\"></span>&nbsp;";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("create"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
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
        
        $__internal_a3c3d180ff0555edcba4143a2aa7ffe35392f6261861d7221e4715a9b61704a5->leave($__internal_a3c3d180ff0555edcba4143a2aa7ffe35392f6261861d7221e4715a9b61704a5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  50 => 17,  44 => 14,  40 => 13,  27 => 4,  22 => 1,);
    }
}
/* <div id="page-wrapper">*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*         </div>*/
/*         <!-- /.col-lg-12 -->*/
/*     </div>*/
/*     <!-- /.row -->*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                     {{ form_start(form, { 'style': 'horizontal' }) }}*/
/*                     {{ form_widget(form) }}*/
/*                         <div class="form-group">*/
/*                             <div class="col-lg-offset-2 col-lg-10">*/
/*                                 <button type="submit" id="uni_adminbundle_user_register" icon="save" class="btn btn-primary"><span class="fa fa-save"></span>&nbsp;{{ 'create'|trans }}</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.col-lg-12 -->*/
/*     </div>*/
/*     <!-- /.row -->*/
/* </div>*/
/* <!-- /#page-wrapper -->*/
/* */
/* */
/* */
/* */
