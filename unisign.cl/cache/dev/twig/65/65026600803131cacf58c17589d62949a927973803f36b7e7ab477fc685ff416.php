<?php

/* UniAdminBundle:ProductCategory:new.html.twig */
class __TwigTemplate_ec14681923e6f6c60ad1fcbc780c958b9d48cd3bf656d16ab6d77c39f0e7cc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:ProductCategory:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb85ac5b619039d36a229993905ec2622e8c7887e8dbb9aae52739304c5562d = $this->env->getExtension("native_profiler");
        $__internal_bcb85ac5b619039d36a229993905ec2622e8c7887e8dbb9aae52739304c5562d->enter($__internal_bcb85ac5b619039d36a229993905ec2622e8c7887e8dbb9aae52739304c5562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:ProductCategory:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb85ac5b619039d36a229993905ec2622e8c7887e8dbb9aae52739304c5562d->leave($__internal_bcb85ac5b619039d36a229993905ec2622e8c7887e8dbb9aae52739304c5562d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_026802e5c105c6cf999df18edf34fcf4b3d42210da98c97992d047aa5519f712 = $this->env->getExtension("native_profiler");
        $__internal_026802e5c105c6cf999df18edf34fcf4b3d42210da98c97992d047aa5519f712->enter($__internal_026802e5c105c6cf999df18edf34fcf4b3d42210da98c97992d047aa5519f712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_026802e5c105c6cf999df18edf34fcf4b3d42210da98c97992d047aa5519f712->leave($__internal_026802e5c105c6cf999df18edf34fcf4b3d42210da98c97992d047aa5519f712_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5910a98eb9d53e086ff5fe4f5eac3d55b330dccf9721b018adb95e2badbf7d89 = $this->env->getExtension("native_profiler");
        $__internal_5910a98eb9d53e086ff5fe4f5eac3d55b330dccf9721b018adb95e2badbf7d89->enter($__internal_5910a98eb9d53e086ff5fe4f5eac3d55b330dccf9721b018adb95e2badbf7d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:ProductCategory:new.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_5910a98eb9d53e086ff5fe4f5eac3d55b330dccf9721b018adb95e2badbf7d89->leave($__internal_5910a98eb9d53e086ff5fe4f5eac3d55b330dccf9721b018adb95e2badbf7d89_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:ProductCategory:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
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
