<?php

/* UniAdminBundle:Member:edit.html.twig */
class __TwigTemplate_035bb7924505943eee40cacc52ec2375c8bec59e8428adb9ca4dba7364dadade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Member:edit.html.twig", 1);
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
        $__internal_c68f4f343b5a8bbb6bfcbabb55c4c9b1723646addf3d8b768848632b97fee1e8 = $this->env->getExtension("native_profiler");
        $__internal_c68f4f343b5a8bbb6bfcbabb55c4c9b1723646addf3d8b768848632b97fee1e8->enter($__internal_c68f4f343b5a8bbb6bfcbabb55c4c9b1723646addf3d8b768848632b97fee1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Member:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c68f4f343b5a8bbb6bfcbabb55c4c9b1723646addf3d8b768848632b97fee1e8->leave($__internal_c68f4f343b5a8bbb6bfcbabb55c4c9b1723646addf3d8b768848632b97fee1e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c1eee92ddbd257f72ff5766a45acfc01ef18e20eae341db74128e16a4d39c07 = $this->env->getExtension("native_profiler");
        $__internal_8c1eee92ddbd257f72ff5766a45acfc01ef18e20eae341db74128e16a4d39c07->enter($__internal_8c1eee92ddbd257f72ff5766a45acfc01ef18e20eae341db74128e16a4d39c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_8c1eee92ddbd257f72ff5766a45acfc01ef18e20eae341db74128e16a4d39c07->leave($__internal_8c1eee92ddbd257f72ff5766a45acfc01ef18e20eae341db74128e16a4d39c07_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb29344daed0be609c1fc0b4aa53e611c0ae39467214a1715ae1616acf35f7e9 = $this->env->getExtension("native_profiler");
        $__internal_fb29344daed0be609c1fc0b4aa53e611c0ae39467214a1715ae1616acf35f7e9->enter($__internal_fb29344daed0be609c1fc0b4aa53e611c0ae39467214a1715ae1616acf35f7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Member:edit.html.twig", 9)->display($context);
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
        // line 18
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
        
        $__internal_fb29344daed0be609c1fc0b4aa53e611c0ae39467214a1715ae1616acf35f7e9->leave($__internal_fb29344daed0be609c1fc0b4aa53e611c0ae39467214a1715ae1616acf35f7e9_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Member:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
