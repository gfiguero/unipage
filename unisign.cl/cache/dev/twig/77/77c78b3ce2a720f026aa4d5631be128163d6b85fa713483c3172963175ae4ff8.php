<?php

/* UniAdminBundle:Product:new.html.twig */
class __TwigTemplate_073f51642103d1257dcdd3807660d6371c8bee9e15f15d43087b6d3c3a9dba83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Product:new.html.twig", 1);
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
        $__internal_4fc8d29825abe7634aceacace2eaaac4c05a30dc7769cc99afd54bbc81479847 = $this->env->getExtension("native_profiler");
        $__internal_4fc8d29825abe7634aceacace2eaaac4c05a30dc7769cc99afd54bbc81479847->enter($__internal_4fc8d29825abe7634aceacace2eaaac4c05a30dc7769cc99afd54bbc81479847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Product:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc8d29825abe7634aceacace2eaaac4c05a30dc7769cc99afd54bbc81479847->leave($__internal_4fc8d29825abe7634aceacace2eaaac4c05a30dc7769cc99afd54bbc81479847_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7961932c7433c6b0ec2b78015ef9a1fc6408b4d3c7b8905500406e4bb4af2d79 = $this->env->getExtension("native_profiler");
        $__internal_7961932c7433c6b0ec2b78015ef9a1fc6408b4d3c7b8905500406e4bb4af2d79->enter($__internal_7961932c7433c6b0ec2b78015ef9a1fc6408b4d3c7b8905500406e4bb4af2d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_7961932c7433c6b0ec2b78015ef9a1fc6408b4d3c7b8905500406e4bb4af2d79->leave($__internal_7961932c7433c6b0ec2b78015ef9a1fc6408b4d3c7b8905500406e4bb4af2d79_prof);

    }

    // line 5
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7822492c744b125a2950755bc0f319488eb03af3906e22af5c26293e8f7b42a3 = $this->env->getExtension("native_profiler");
        $__internal_7822492c744b125a2950755bc0f319488eb03af3906e22af5c26293e8f7b42a3->enter($__internal_7822492c744b125a2950755bc0f319488eb03af3906e22af5c26293e8f7b42a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        echo $this->env->getExtension('stfalcon_tinymce')->tinymceInit();
        
        $__internal_7822492c744b125a2950755bc0f319488eb03af3906e22af5c26293e8f7b42a3->leave($__internal_7822492c744b125a2950755bc0f319488eb03af3906e22af5c26293e8f7b42a3_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b94e512a51e69ea17578159ae0d198ec00c94c63782b3afc437acd4b12d273f5 = $this->env->getExtension("native_profiler");
        $__internal_b94e512a51e69ea17578159ae0d198ec00c94c63782b3afc437acd4b12d273f5->enter($__internal_b94e512a51e69ea17578159ae0d198ec00c94c63782b3afc437acd4b12d273f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Product:new.html.twig", 11)->display($context);
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
        
        $__internal_b94e512a51e69ea17578159ae0d198ec00c94c63782b3afc437acd4b12d273f5->leave($__internal_b94e512a51e69ea17578159ae0d198ec00c94c63782b3afc437acd4b12d273f5_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Product:new.html.twig";
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
