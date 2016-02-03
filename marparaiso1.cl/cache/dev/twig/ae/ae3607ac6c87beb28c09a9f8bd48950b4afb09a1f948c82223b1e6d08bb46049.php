<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a24dc55e62e2e296bea4ea0e298228e1e55e45a2e94947c9f05aff62ebc04c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_46e2ddf9345fd76f9461e1e2f94149ad587b3e46b730350a060a9ab769ba39db = $this->env->getExtension("native_profiler");
        $__internal_46e2ddf9345fd76f9461e1e2f94149ad587b3e46b730350a060a9ab769ba39db->enter($__internal_46e2ddf9345fd76f9461e1e2f94149ad587b3e46b730350a060a9ab769ba39db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46e2ddf9345fd76f9461e1e2f94149ad587b3e46b730350a060a9ab769ba39db->leave($__internal_46e2ddf9345fd76f9461e1e2f94149ad587b3e46b730350a060a9ab769ba39db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa6cf055b28c118404c3d6b0f583065bff25eee1cdb1e3e0af70b720b4bb4e07 = $this->env->getExtension("native_profiler");
        $__internal_aa6cf055b28c118404c3d6b0f583065bff25eee1cdb1e3e0af70b720b4bb4e07->enter($__internal_aa6cf055b28c118404c3d6b0f583065bff25eee1cdb1e3e0af70b720b4bb4e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_aa6cf055b28c118404c3d6b0f583065bff25eee1cdb1e3e0af70b720b4bb4e07->leave($__internal_aa6cf055b28c118404c3d6b0f583065bff25eee1cdb1e3e0af70b720b4bb4e07_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac32491cd42b864680df12453249efaabc33d549b2c3e54e196801fd75e5d7a9 = $this->env->getExtension("native_profiler");
        $__internal_ac32491cd42b864680df12453249efaabc33d549b2c3e54e196801fd75e5d7a9->enter($__internal_ac32491cd42b864680df12453249efaabc33d549b2c3e54e196801fd75e5d7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:register.html.twig", 9)->display($context);
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
        
        $__internal_ac32491cd42b864680df12453249efaabc33d549b2c3e54e196801fd75e5d7a9->leave($__internal_ac32491cd42b864680df12453249efaabc33d549b2c3e54e196801fd75e5d7a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% extends ":Admin:base.html.twig" %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
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
/* {% endblock body %}*/
/* */
