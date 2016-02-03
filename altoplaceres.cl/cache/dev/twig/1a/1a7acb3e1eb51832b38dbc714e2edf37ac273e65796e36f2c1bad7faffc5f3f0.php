<?php

/* UniAdminBundle:History:index.html.twig */
class __TwigTemplate_9f61803b2a069f67e96f885fa86512b985462938a28281280597e759e27f62d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:History:index.html.twig", 1);
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
        $__internal_040dfd36e558cea546f3d7bd5cf3d9e294cbf0499e32c228215b054d8f949ea8 = $this->env->getExtension("native_profiler");
        $__internal_040dfd36e558cea546f3d7bd5cf3d9e294cbf0499e32c228215b054d8f949ea8->enter($__internal_040dfd36e558cea546f3d7bd5cf3d9e294cbf0499e32c228215b054d8f949ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:History:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_040dfd36e558cea546f3d7bd5cf3d9e294cbf0499e32c228215b054d8f949ea8->leave($__internal_040dfd36e558cea546f3d7bd5cf3d9e294cbf0499e32c228215b054d8f949ea8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e23f31baf678924e675f98d1c903f82e4e8012f950a1a0fad55a28cd2a847b2 = $this->env->getExtension("native_profiler");
        $__internal_2e23f31baf678924e675f98d1c903f82e4e8012f950a1a0fad55a28cd2a847b2->enter($__internal_2e23f31baf678924e675f98d1c903f82e4e8012f950a1a0fad55a28cd2a847b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("history_index"), "html", null, true);
        
        $__internal_2e23f31baf678924e675f98d1c903f82e4e8012f950a1a0fad55a28cd2a847b2->leave($__internal_2e23f31baf678924e675f98d1c903f82e4e8012f950a1a0fad55a28cd2a847b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85fd0f3d545145565867b56820db803259c91f9be00cfbcfca86277a35bd96bd = $this->env->getExtension("native_profiler");
        $__internal_85fd0f3d545145565867b56820db803259c91f9be00cfbcfca86277a35bd96bd->enter($__internal_85fd0f3d545145565867b56820db803259c91f9be00cfbcfca86277a35bd96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:History:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("history_index"), "html", null, true);
        echo "</h1>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                    <div class=\"alert alert-success alert-dismissible fade in\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
            // line 14
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("remove fa-fw");
            echo "</button>
                        <strong>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notification"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"]), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "                    <div class=\"alert alert-danger alert-dismissible fade in\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
            // line 21
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("remove fa-fw");
            echo "</button>
                        <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notification"), "html", null, true);
            echo ": </strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"]), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("history_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("history_new"), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"records_list table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>";
        // line 43
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_time"), "time");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "time")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_title"), "title");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "title")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_abstract"), "abstract");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "abstract")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 46
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_rank"), "rank");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "rank")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 47
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_published"), "published");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "published")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 48
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_createdAt"), "createdAt");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "createdAt")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 49
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("history_updatedAt"), "updatedAt");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "updatedAt")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 54
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("history_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "time", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "time", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 56
            if ($this->getAttribute($context["entity"], "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 57
            if ($this->getAttribute($context["entity"], "abstract", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "abstract", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 58
            if ($this->getAttribute($context["entity"], "rank", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rank", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 59
            if ($this->getAttribute($context["entity"], "published", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                                    <td>";
            // line 60
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y - HH:mm"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 61
            if ($this->getAttribute($context["entity"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y - HH:mm"), "html", null, true);
            }
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 69
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

";
        
        $__internal_85fd0f3d545145565867b56820db803259c91f9be00cfbcfca86277a35bd96bd->leave($__internal_85fd0f3d545145565867b56820db803259c91f9be00cfbcfca86277a35bd96bd_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:History:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 69,  276 => 64,  265 => 61,  259 => 60,  251 => 59,  245 => 58,  239 => 57,  233 => 56,  227 => 55,  222 => 54,  218 => 53,  204 => 49,  193 => 48,  182 => 47,  171 => 46,  160 => 45,  149 => 44,  138 => 43,  123 => 35,  111 => 25,  100 => 22,  96 => 21,  93 => 20,  89 => 19,  86 => 18,  75 => 15,  71 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'history_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'history_index'|trans }}</h1>*/
/*                 {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                     <div class="alert alert-success alert-dismissible fade in" role="alert">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="close">{{ icon('remove fa-fw') }}</button>*/
/*                         <strong>{{ 'notification'|trans }}: </strong>{{ flashMessage|trans }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('danger') %}*/
/*                     <div class="alert alert-danger alert-dismissible fade in" role="alert">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="close">{{ icon('remove fa-fw') }}</button>*/
/*                         <strong>{{ 'notification'|trans }}: </strong>{{ flashMessage|trans }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <div class="btn-group">*/
/*                             <a class="btn btn-primary" href="{{ path('history_new') }}">{{ icon('file') }}&nbsp;{{ 'history_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_time'|trans, 'time') }}{% if sort == 'time' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_title'|trans, 'title') }}{% if sort == 'title' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_abstract'|trans, 'abstract') }}{% if sort == 'abstract' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_rank'|trans, 'rank') }}{% if sort == 'rank' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_published'|trans, 'published') }}{% if sort == 'published' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_createdAt'|trans, 'createdAt') }}{% if sort == 'createdAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'history_updatedAt'|trans, 'updatedAt') }}{% if sort == 'updatedAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('history_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.time %}{{ entity.time }}{% endif %}</td>*/
/*                                     <td>{% if entity.title %}{{ entity.title }}{% endif %}</td>*/
/*                                     <td>{% if entity.abstract %}{{ entity.abstract }}{% endif %}</td>*/
/*                                     <td>{% if entity.rank %}{{ entity.rank }}{% endif %}</td>*/
/*                                     <td>{% if entity.published %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</td>*/
/*                                     <td>{% if entity.createdAt %}{{ entity.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "dd-LLL-Y - HH:mm") }}{% endif %}</td>*/
/*                                     <td>{% if entity.updatedAt %}{{ entity.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "dd-LLL-Y - HH:mm") }}{% endif %}</td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                     <div class="panel-footer">*/
/*                         <div class="text-center">*/
/*                             {{ knp_pagination_render(pagination) }}*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /#page-wrapper -->*/
/* */
/* {% endblock %}*/
/* */
