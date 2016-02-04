<?php

/* UniAdminBundle:Document:show.html.twig */
class __TwigTemplate_9b6229c26b3626e253f0ced07edc36ca7aa3538fff726ea4738b4eb1ab684d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Document:show.html.twig", 1);
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
        $__internal_8b8db7a01e34e17ebc28a1fcd920b8bc941104a3aa42ec1019795586bc03d974 = $this->env->getExtension("native_profiler");
        $__internal_8b8db7a01e34e17ebc28a1fcd920b8bc941104a3aa42ec1019795586bc03d974->enter($__internal_8b8db7a01e34e17ebc28a1fcd920b8bc941104a3aa42ec1019795586bc03d974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Document:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b8db7a01e34e17ebc28a1fcd920b8bc941104a3aa42ec1019795586bc03d974->leave($__internal_8b8db7a01e34e17ebc28a1fcd920b8bc941104a3aa42ec1019795586bc03d974_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eecaad6ed78433eb66c8d81d5bf1426fe4cda135ae155ae774cd635f813f6078 = $this->env->getExtension("native_profiler");
        $__internal_eecaad6ed78433eb66c8d81d5bf1426fe4cda135ae155ae774cd635f813f6078->enter($__internal_eecaad6ed78433eb66c8d81d5bf1426fe4cda135ae155ae774cd635f813f6078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_eecaad6ed78433eb66c8d81d5bf1426fe4cda135ae155ae774cd635f813f6078->leave($__internal_eecaad6ed78433eb66c8d81d5bf1426fe4cda135ae155ae774cd635f813f6078_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b392a15dd026f2ab23b1b96f794cc36a35fa56fad5ca14bc3ebb58a32bbce330 = $this->env->getExtension("native_profiler");
        $__internal_b392a15dd026f2ab23b1b96f794cc36a35fa56fad5ca14bc3ebb58a32bbce330->enter($__internal_b392a15dd026f2ab23b1b96f794cc36a35fa56fad5ca14bc3ebb58a32bbce330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Document:show.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("document_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_edit"), "html", null, true);
        echo "</a>
                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-confirm\">";
        // line 19
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("trash-o");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_delete"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_title"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_content"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_published"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "published", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</dd>
                            <dt>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_updatedAt"), "html", null, true);
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
        
        $__internal_b392a15dd026f2ab23b1b96f794cc36a35fa56fad5ca14bc3ebb58a32bbce330->leave($__internal_b392a15dd026f2ab23b1b96f794cc36a35fa56fad5ca14bc3ebb58a32bbce330_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Document:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  144 => 45,  134 => 44,  126 => 43,  118 => 42,  105 => 32,  98 => 28,  92 => 25,  81 => 19,  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                         <a type="button" class="btn btn-warning" href="{{ path('document_edit', { 'id': entity.id }) }}">{{ icon('pencil') }}&nbsp;{{ 'document_edit'|trans }}</a>*/
/*                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">{{ icon('trash-o') }}&nbsp;{{ 'document_delete'|trans }}</button>*/
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
/*                             <dt>{{ 'document_title'|trans }}</dt><dd>{% if entity.title %}{{ entity.title }}{% endif %}</dd>*/
/*                             <dt>{{ 'document_content'|trans }}</dt><dd>{% if entity.content %}{{ entity.content }}{% endif %}</dd>*/
/*                             <dt>{{ 'document_published'|trans }}</dt><dd>{% if entity.published %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>*/
/*                             <dt>{{ 'document_createdAt'|trans }}</dt><dd>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                             <dt>{{ 'document_updatedAt'|trans }}</dt><dd>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
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
