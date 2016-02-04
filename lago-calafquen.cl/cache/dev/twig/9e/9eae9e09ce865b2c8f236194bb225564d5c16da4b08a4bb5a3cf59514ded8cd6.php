<?php

/* UniUserBundle:Manage:show.html.twig */
class __TwigTemplate_1cf831e6d5f1b2a05ca58d934ed4f2f6955ccb449b47bd05b80af8e47bd05f2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniUserBundle:Manage:show.html.twig", 1);
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
        $__internal_cd71b79944734d60f9d0ac57470de2fa014c9a310b89b77f94e9a43f6c5c7abf = $this->env->getExtension("native_profiler");
        $__internal_cd71b79944734d60f9d0ac57470de2fa014c9a310b89b77f94e9a43f6c5c7abf->enter($__internal_cd71b79944734d60f9d0ac57470de2fa014c9a310b89b77f94e9a43f6c5c7abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Manage:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd71b79944734d60f9d0ac57470de2fa014c9a310b89b77f94e9a43f6c5c7abf->leave($__internal_cd71b79944734d60f9d0ac57470de2fa014c9a310b89b77f94e9a43f6c5c7abf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d7845c80929562522dc72723b382e4ac51bc140c2fc2a6cdbeb07cdd3592dcf = $this->env->getExtension("native_profiler");
        $__internal_5d7845c80929562522dc72723b382e4ac51bc140c2fc2a6cdbeb07cdd3592dcf->enter($__internal_5d7845c80929562522dc72723b382e4ac51bc140c2fc2a6cdbeb07cdd3592dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_5d7845c80929562522dc72723b382e4ac51bc140c2fc2a6cdbeb07cdd3592dcf->leave($__internal_5d7845c80929562522dc72723b382e4ac51bc140c2fc2a6cdbeb07cdd3592dcf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2126bcb88413014dfbfa003f9a478e968b917ef49bd4d072a890b9623e0cd51 = $this->env->getExtension("native_profiler");
        $__internal_a2126bcb88413014dfbfa003f9a478e968b917ef49bd4d072a890b9623e0cd51->enter($__internal_a2126bcb88413014dfbfa003f9a478e968b917ef49bd4d072a890b9623e0cd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniUserBundle:Manage:show.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "&nbsp;ID:&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <a type=\"button\" class=\"btn btn-warning\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_manage_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_manage_edit"), "html", null, true);
        echo "</a>
                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-confirm\">";
        // line 19
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("trash-o");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_manage_delete"), "html", null, true);
        echo "</button>
                        <div class=\"modal fade\" id=\"modal-confirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                            <div class=\"modal-dialog modal-md\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                        <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Are you sure?"), "html", null, true);
        echo "</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deleted records can not be recovered."), "html", null, true);
        echo "</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                        <div class=\"pull-right\" style=\"height:34px;\">
                                            ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        <dl class=\"dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg\">
                            <dt>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_username"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_email"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        }
        echo "</dd>
                            ";
        // line 45
        echo "                            <dt>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_firstname"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "firstname", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_lastname"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastname", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_updatedAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
";
        
        $__internal_a2126bcb88413014dfbfa003f9a478e968b917ef49bd4d072a890b9623e0cd51->leave($__internal_a2126bcb88413014dfbfa003f9a478e968b917ef49bd4d072a890b9623e0cd51_prof);

    }

    public function getTemplateName()
    {
        return "UniUserBundle:Manage:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 48,  151 => 47,  143 => 46,  134 => 45,  126 => 43,  118 => 42,  105 => 32,  98 => 28,  92 => 25,  81 => 19,  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}&nbsp;ID:&nbsp;{{ entity.id }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <a type="button" class="btn btn-warning" href="{{ path('user_manage_edit', { 'id': entity.id }) }}">{{ icon('pencil') }}&nbsp;{{ 'user_manage_edit'|trans }}</a>*/
/*                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">{{ icon('trash-o') }}&nbsp;{{ 'user_manage_delete'|trans }}</button>*/
/*                         <div class="modal fade" id="modal-confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                             <div class="modal-dialog modal-md" role="document">*/
/*                                 <div class="modal-content">*/
/*                                     <div class="modal-header">*/
/*                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                         <h4 class="modal-title" id="myModalLabel">{{ 'Are you sure?'|trans }}</h4>*/
/*                                     </div>*/
/*                                     <div class="modal-body">*/
/*                                         <p>{{ 'Deleted records can not be recovered.'|trans }}</p>*/
/*                                     </div>*/
/*                                     <div class="modal-footer">*/
/*                                         <div class="pull-right" style="height:34px;">*/
/*                                             {{ form(delete_form) }}*/
/*                                         </div>*/
/*                                         <div class="clearfix"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <dl class="dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg">*/
/*                             <dt>{{ 'user_username'|trans }}</dt><dd>{% if entity.username %}{{ entity.username }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_email'|trans }}</dt><dd>{% if entity.email %}{{ entity.email }}{% endif %}</dd>*/
/*                             {#}<dt>{{ 'user_enabled'|trans }}</dt><dd>{% if entity.enabled %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>{#}*/
/*                             <dt>{{ 'user_firstname'|trans }}</dt><dd>{% if entity.firstname %}{{ entity.firstname }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_lastname'|trans }}</dt><dd>{% if entity.lastname %}{{ entity.lastname }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_createdAt'|trans }}</dt><dd>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_updatedAt'|trans }}</dt><dd>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                         </dl>*/
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
