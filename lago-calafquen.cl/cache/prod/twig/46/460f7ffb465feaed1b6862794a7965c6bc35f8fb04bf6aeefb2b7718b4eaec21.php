<?php

/* UniAdminBundle:Notice:show.html.twig */
class __TwigTemplate_3691dd1da11e48174bfc97facd1386f8f18aa1d1602609db121465e14973b635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Notice:show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Notice:show.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "&nbsp;ID:&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notice_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_edit"), "html", null, true);
        echo "</a>
                        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#modal-confirm\">";
        // line 19
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("trash-o");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_delete"), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_title"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "title", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_content"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array())) {
            echo $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "content", array());
        }
        echo "</dd>
                            <dt>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_published"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "published", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</dd>
                            <dt>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_highlight"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "highlight", array())) {
            echo "Si";
        } else {
            echo "No";
        }
        echo "</dd>
                            <dt>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_updatedAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                        </dl>
                    </div>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 54
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["photo"], "webpath", array())), "admin_notice"), "html", null, true);
            echo "\" class=\"img-responsive img-thumbnail\">
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Notice:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 56,  164 => 54,  160 => 53,  147 => 47,  139 => 46,  129 => 45,  119 => 44,  111 => 43,  103 => 42,  90 => 32,  83 => 28,  77 => 25,  66 => 19,  58 => 18,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
/*                         <a type="button" class="btn btn-warning" href="{{ path('notice_edit', { 'id': entity.id }) }}">{{ icon('pencil') }}&nbsp;{{ 'notice_edit'|trans }}</a>*/
/*                         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">{{ icon('trash-o') }}&nbsp;{{ 'notice_delete'|trans }}</button>*/
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
/*                             <dt>{{ 'notice_title'|trans }}</dt><dd>{% if entity.title %}{{ entity.title }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_content'|trans }}</dt><dd>{% if entity.content %}{{ entity.content|raw }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_published'|trans }}</dt><dd>{% if entity.published %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_highlight'|trans }}</dt><dd>{% if entity.highlight %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_createdAt'|trans }}</dt><dd>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_updatedAt'|trans }}</dt><dd>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                         {% for photo in entity.photos %}*/
/*                             <img src="{{ asset(photo.webpath) | imagine_filter('admin_notice') }}" class="img-responsive img-thumbnail">*/
/*                         {% endfor %}*/
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