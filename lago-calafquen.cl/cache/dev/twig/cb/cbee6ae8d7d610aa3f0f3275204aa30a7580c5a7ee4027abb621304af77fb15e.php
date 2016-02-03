<?php

/* UniAdminBundle:MemberCourse:edit.html.twig */
class __TwigTemplate_68a7b1fd82052e17e9b6652e870daccb13629dc5188ef6ec78a9f05c10576fb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 1);
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
        $__internal_f6ffa245307adbb978eb20e940a1f3f5ed3b95d6b2f2113dc98da6da2a82d90d = $this->env->getExtension("native_profiler");
        $__internal_f6ffa245307adbb978eb20e940a1f3f5ed3b95d6b2f2113dc98da6da2a82d90d->enter($__internal_f6ffa245307adbb978eb20e940a1f3f5ed3b95d6b2f2113dc98da6da2a82d90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:MemberCourse:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ffa245307adbb978eb20e940a1f3f5ed3b95d6b2f2113dc98da6da2a82d90d->leave($__internal_f6ffa245307adbb978eb20e940a1f3f5ed3b95d6b2f2113dc98da6da2a82d90d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c86263e8e26f11077afdf2910208ad1196b5d554aa927a5db40c8793ad322e2 = $this->env->getExtension("native_profiler");
        $__internal_2c86263e8e26f11077afdf2910208ad1196b5d554aa927a5db40c8793ad322e2->enter($__internal_2c86263e8e26f11077afdf2910208ad1196b5d554aa927a5db40c8793ad322e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_2c86263e8e26f11077afdf2910208ad1196b5d554aa927a5db40c8793ad322e2->leave($__internal_2c86263e8e26f11077afdf2910208ad1196b5d554aa927a5db40c8793ad322e2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a86884abcfd3bb9529b799d0ef8eb3f644b89ca274e406a4e9d518a73b0f525b = $this->env->getExtension("native_profiler");
        $__internal_a86884abcfd3bb9529b799d0ef8eb3f644b89ca274e406a4e9d518a73b0f525b->enter($__internal_a86884abcfd3bb9529b799d0ef8eb3f644b89ca274e406a4e9d518a73b0f525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberCourse:edit.html.twig", 9)->display($context);
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
        
        $__internal_a86884abcfd3bb9529b799d0ef8eb3f644b89ca274e406a4e9d518a73b0f525b->leave($__internal_a86884abcfd3bb9529b799d0ef8eb3f644b89ca274e406a4e9d518a73b0f525b_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberCourse:edit.html.twig";
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
