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
        $__internal_3aa45a8048aee8a23127bf1438e5705d58fa353462600fc03d3a9af843fd1250 = $this->env->getExtension("native_profiler");
        $__internal_3aa45a8048aee8a23127bf1438e5705d58fa353462600fc03d3a9af843fd1250->enter($__internal_3aa45a8048aee8a23127bf1438e5705d58fa353462600fc03d3a9af843fd1250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa45a8048aee8a23127bf1438e5705d58fa353462600fc03d3a9af843fd1250->leave($__internal_3aa45a8048aee8a23127bf1438e5705d58fa353462600fc03d3a9af843fd1250_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e8c1b5424fd9cd75746b3e353d460475e086801a077484297f9fc6b32eb2426 = $this->env->getExtension("native_profiler");
        $__internal_7e8c1b5424fd9cd75746b3e353d460475e086801a077484297f9fc6b32eb2426->enter($__internal_7e8c1b5424fd9cd75746b3e353d460475e086801a077484297f9fc6b32eb2426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_7e8c1b5424fd9cd75746b3e353d460475e086801a077484297f9fc6b32eb2426->leave($__internal_7e8c1b5424fd9cd75746b3e353d460475e086801a077484297f9fc6b32eb2426_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9222f1249cd30121b00db6d4cef5e15c02f03a07a3cf192d213c3712862c52c3 = $this->env->getExtension("native_profiler");
        $__internal_9222f1249cd30121b00db6d4cef5e15c02f03a07a3cf192d213c3712862c52c3->enter($__internal_9222f1249cd30121b00db6d4cef5e15c02f03a07a3cf192d213c3712862c52c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_9222f1249cd30121b00db6d4cef5e15c02f03a07a3cf192d213c3712862c52c3->leave($__internal_9222f1249cd30121b00db6d4cef5e15c02f03a07a3cf192d213c3712862c52c3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_429f1251dff334d1b7de33867d950ba568cbeb741de1e5d37e8155916fa6388e = $this->env->getExtension("native_profiler");
        $__internal_429f1251dff334d1b7de33867d950ba568cbeb741de1e5d37e8155916fa6388e->enter($__internal_429f1251dff334d1b7de33867d950ba568cbeb741de1e5d37e8155916fa6388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_429f1251dff334d1b7de33867d950ba568cbeb741de1e5d37e8155916fa6388e->leave($__internal_429f1251dff334d1b7de33867d950ba568cbeb741de1e5d37e8155916fa6388e_prof);

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
