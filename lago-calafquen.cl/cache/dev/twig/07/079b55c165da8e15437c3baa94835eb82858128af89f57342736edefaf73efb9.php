<?php

/* UniAdminBundle:Service:show.html.twig */
class __TwigTemplate_d027a846cacf513a5066adc3a51e66e3c32384bc33d0bb6f991b81352226d667 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:show.html.twig", 1);
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
        $__internal_d89fc77bbb98e868ebb347039a20b5f32710b4a331f3289fc5d5b3e0b4ecab3c = $this->env->getExtension("native_profiler");
        $__internal_d89fc77bbb98e868ebb347039a20b5f32710b4a331f3289fc5d5b3e0b4ecab3c->enter($__internal_d89fc77bbb98e868ebb347039a20b5f32710b4a331f3289fc5d5b3e0b4ecab3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d89fc77bbb98e868ebb347039a20b5f32710b4a331f3289fc5d5b3e0b4ecab3c->leave($__internal_d89fc77bbb98e868ebb347039a20b5f32710b4a331f3289fc5d5b3e0b4ecab3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_800ba3bfc1e7d3923ef9fe7be55b68fc5ab9cced54d118b254f52c1fdf5995c8 = $this->env->getExtension("native_profiler");
        $__internal_800ba3bfc1e7d3923ef9fe7be55b68fc5ab9cced54d118b254f52c1fdf5995c8->enter($__internal_800ba3bfc1e7d3923ef9fe7be55b68fc5ab9cced54d118b254f52c1fdf5995c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_800ba3bfc1e7d3923ef9fe7be55b68fc5ab9cced54d118b254f52c1fdf5995c8->leave($__internal_800ba3bfc1e7d3923ef9fe7be55b68fc5ab9cced54d118b254f52c1fdf5995c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f152b078c6e9facdfadffd8840567cb761773650bef3c6f73d6cf9955003729d = $this->env->getExtension("native_profiler");
        $__internal_f152b078c6e9facdfadffd8840567cb761773650bef3c6f73d6cf9955003729d->enter($__internal_f152b078c6e9facdfadffd8840567cb761773650bef3c6f73d6cf9955003729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:show.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_edit"), "html", null, true);
        echo "</a>
                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-confirm\">";
        // line 19
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("trash-o");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_delete"), "html", null, true);
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
                        <div class=\"col-md-4\">
                            <img class=\"img-rounded img-responsive\" alt=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webpath", array())), "admin_service"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-8\">
                            <dl class=\"dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg\">
                                <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_title"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_abstract"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abstract", array())) {
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abstract", array());
        }
        echo "</dd>
                                <dt>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_content"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array())) {
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        }
        echo "</dd>
                                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_rank"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rank", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rank", array()), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_published"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "published", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</dd>
                                <dt>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_updatedAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
";
        
        $__internal_f152b078c6e9facdfadffd8840567cb761773650bef3c6f73d6cf9955003729d->leave($__internal_f152b078c6e9facdfadffd8840567cb761773650bef3c6f73d6cf9955003729d_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  169 => 51,  159 => 50,  151 => 49,  143 => 48,  135 => 47,  127 => 46,  118 => 42,  105 => 32,  98 => 28,  92 => 25,  81 => 19,  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                         <a type="button" class="btn btn-warning" href="{{ path('service_edit', { 'id': entity.id }) }}">{{ icon('pencil') }}&nbsp;{{ 'service_edit'|trans }}</a>*/
/*                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">{{ icon('trash-o') }}&nbsp;{{ 'service_delete'|trans }}</button>*/
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
/*                         <div class="col-md-4">*/
/*                             <img class="img-rounded img-responsive" alt="{{ entity.title }}" src="{{ asset(entity.webpath) | imagine_filter('admin_service') }}">*/
/*                         </div>*/
/*                         <div class="col-md-8">*/
/*                             <dl class="dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg">*/
/*                                 <dt>{{ 'service_title'|trans }}</dt><dd>{% if entity.title %}{{ entity.title }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_abstract'|trans }}</dt><dd>{% if entity.abstract %}{{ entity.abstract|raw }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_content'|trans }}</dt><dd>{% if entity.content %}{{ entity.content|raw }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_rank'|trans }}</dt><dd>{% if entity.rank %}{{ entity.rank }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_published'|trans }}</dt><dd>{% if entity.published %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_createdAt'|trans }}</dt><dd>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                                 <dt>{{ 'service_updatedAt'|trans }}</dt><dd>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                             </dl>*/
/*                         </div>*/
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
