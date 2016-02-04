<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a0cfda97d54860c06492351e3d4a89fad36db2295802a4c069c8715992ee8839 extends Twig_Template
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
        // line 1
        echo "<div id=\"page-wrapper\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">";
        // line 4
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 4)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("style" => "horizontal"));
        echo "
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
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
        return array (  53 => 20,  47 => 17,  41 => 14,  37 => 13,  24 => 4,  19 => 1,);
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
