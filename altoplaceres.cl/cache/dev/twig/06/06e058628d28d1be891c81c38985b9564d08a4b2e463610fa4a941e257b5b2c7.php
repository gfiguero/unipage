<?php

/* UniAdminBundle:Process:show.html.twig */
class __TwigTemplate_4609149b0f0ec1e3c9fcdcfcbb1c9cd1c4f6545ec8dab733827d0118031b0bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Process:show.html.twig", 1);
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
        $__internal_9fce3b5d6b4d3a9e02b911e3fd4c9f73722fb2e9baf01dff9d4e29f88b9b7391 = $this->env->getExtension("native_profiler");
        $__internal_9fce3b5d6b4d3a9e02b911e3fd4c9f73722fb2e9baf01dff9d4e29f88b9b7391->enter($__internal_9fce3b5d6b4d3a9e02b911e3fd4c9f73722fb2e9baf01dff9d4e29f88b9b7391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Process:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fce3b5d6b4d3a9e02b911e3fd4c9f73722fb2e9baf01dff9d4e29f88b9b7391->leave($__internal_9fce3b5d6b4d3a9e02b911e3fd4c9f73722fb2e9baf01dff9d4e29f88b9b7391_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12ed2230c8784598e8983820356423bf4c7655f2ab2a5b5df3be42509c1329f9 = $this->env->getExtension("native_profiler");
        $__internal_12ed2230c8784598e8983820356423bf4c7655f2ab2a5b5df3be42509c1329f9->enter($__internal_12ed2230c8784598e8983820356423bf4c7655f2ab2a5b5df3be42509c1329f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_12ed2230c8784598e8983820356423bf4c7655f2ab2a5b5df3be42509c1329f9->leave($__internal_12ed2230c8784598e8983820356423bf4c7655f2ab2a5b5df3be42509c1329f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a23e0fa4e64ae767d3ebce6a059ea824b608aa826669b563ea0b2fc54dcd1ae = $this->env->getExtension("native_profiler");
        $__internal_1a23e0fa4e64ae767d3ebce6a059ea824b608aa826669b563ea0b2fc54dcd1ae->enter($__internal_1a23e0fa4e64ae767d3ebce6a059ea824b608aa826669b563ea0b2fc54dcd1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Process:show.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("process_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_edit"), "html", null, true);
        echo "</a>
                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-confirm\">";
        // line 19
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("trash-o");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_delete"), "html", null, true);
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
                            <img class=\"img-rounded img-responsive\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "webpath", array())), "admin_process"), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-md-8\">
                            <dl class=\"dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg\">
                                <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_title"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_name"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_abstract"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abstract", array())) {
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "abstract", array());
        }
        echo "</dd>
                                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_content"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array())) {
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array());
        }
        echo "</dd>
                                <dt>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_rank"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rank", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rank", array()), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_active"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "active", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</dd>
                                <dt>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                                <dt>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_updatedAt"), "html", null, true);
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
        
        $__internal_1a23e0fa4e64ae767d3ebce6a059ea824b608aa826669b563ea0b2fc54dcd1ae->leave($__internal_1a23e0fa4e64ae767d3ebce6a059ea824b608aa826669b563ea0b2fc54dcd1ae_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Process:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 53,  175 => 52,  165 => 51,  157 => 50,  149 => 49,  141 => 48,  133 => 47,  125 => 46,  118 => 42,  105 => 32,  98 => 28,  92 => 25,  81 => 19,  73 => 18,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                         <a type="button" class="btn btn-warning" href="{{ path('process_edit', { 'id': entity.id }) }}">{{ icon('pencil') }}&nbsp;{{ 'process_edit'|trans }}</a>*/
/*                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">{{ icon('trash-o') }}&nbsp;{{ 'process_delete'|trans }}</button>*/
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
/*                             <img class="img-rounded img-responsive" src="{{ asset(entity.webpath) | imagine_filter('admin_process') }}">*/
/*                         </div>*/
/*                         <div class="col-md-8">*/
/*                             <dl class="dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg">*/
/*                                 <dt>{{ 'process_title'|trans }}</dt><dd>{% if entity.title %}{{ entity.title }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_name'|trans }}</dt><dd>{% if entity.name %}{{ entity.name }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_abstract'|trans }}</dt><dd>{% if entity.abstract %}{{ entity.abstract|raw }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_content'|trans }}</dt><dd>{% if entity.content %}{{ entity.content|raw }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_rank'|trans }}</dt><dd>{% if entity.rank %}{{ entity.rank }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_active'|trans }}</dt><dd>{% if entity.active %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_createdAt'|trans }}</dt><dd>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                                 <dt>{{ 'process_updatedAt'|trans }}</dt><dd>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
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