<?php

/* UniAdminBundle:Report:index.html.twig */
class __TwigTemplate_849b6039f05ef5de19162431915da7589d50cf6e9c350d41008a371808f1f168 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Report:index.html.twig", 1);
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
        $__internal_9dad84ebf4d475bad610372335934abe0bac59d968bcab763f104c59024957fa = $this->env->getExtension("native_profiler");
        $__internal_9dad84ebf4d475bad610372335934abe0bac59d968bcab763f104c59024957fa->enter($__internal_9dad84ebf4d475bad610372335934abe0bac59d968bcab763f104c59024957fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Report:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dad84ebf4d475bad610372335934abe0bac59d968bcab763f104c59024957fa->leave($__internal_9dad84ebf4d475bad610372335934abe0bac59d968bcab763f104c59024957fa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffbc6b4eaf8eb04a9376686dda7b6901a5a1a518f7d383de337ad50fdf0a80d6 = $this->env->getExtension("native_profiler");
        $__internal_ffbc6b4eaf8eb04a9376686dda7b6901a5a1a518f7d383de337ad50fdf0a80d6->enter($__internal_ffbc6b4eaf8eb04a9376686dda7b6901a5a1a518f7d383de337ad50fdf0a80d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("report_index"), "html", null, true);
        
        $__internal_ffbc6b4eaf8eb04a9376686dda7b6901a5a1a518f7d383de337ad50fdf0a80d6->leave($__internal_ffbc6b4eaf8eb04a9376686dda7b6901a5a1a518f7d383de337ad50fdf0a80d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22ccd38c50526e71d1f3701f3f6c285e0cfcd342ba4fce2ec6da6dcd82682351 = $this->env->getExtension("native_profiler");
        $__internal_22ccd38c50526e71d1f3701f3f6c285e0cfcd342ba4fce2ec6da6dcd82682351->enter($__internal_22ccd38c50526e71d1f3701f3f6c285e0cfcd342ba4fce2ec6da6dcd82682351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Report:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("report_index"), "html", null, true);
        echo "</h1>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
                // line 15
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("remove fa-fw");
                echo "</button>
                            <strong>";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notification"), "html", null, true);
                echo ": </strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"]), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("report_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("report_new"), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"records_list table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("report_title"), "title");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "title")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("report_published"), "published");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "published")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("report_createdAt"), "createdAt");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "createdAt")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 40
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("report_updatedAt"), "updatedAt");
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 45
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("report_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 46
            if ($this->getAttribute($context["entity"], "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 47
            if ($this->getAttribute($context["entity"], "published", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                                    <td>";
            // line 48
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y - HH:mm"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 49
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
        // line 52
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 57
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
        
        $__internal_22ccd38c50526e71d1f3701f3f6c285e0cfcd342ba4fce2ec6da6dcd82682351->leave($__internal_22ccd38c50526e71d1f3701f3f6c285e0cfcd342ba4fce2ec6da6dcd82682351_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Report:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 57,  212 => 52,  201 => 49,  195 => 48,  187 => 47,  181 => 46,  176 => 45,  172 => 44,  158 => 40,  147 => 39,  136 => 38,  125 => 37,  110 => 29,  99 => 20,  93 => 19,  82 => 16,  78 => 15,  73 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'report_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'report_index'|trans }}</h1>*/
/*                 {% for type, messages in app.session.flashBag.all %}*/
/*                     {% for message in messages %}*/
/*                         <div class="alert alert-{{ type }} alert-dismissible fade in" role="alert">*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-label="close">{{ icon('remove fa-fw') }}</button>*/
/*                             <strong>{{ 'notification'|trans }}: </strong>{{ message|trans }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <div class="btn-group">*/
/*                             <a class="btn btn-primary" href="{{ path('report_new') }}">{{ icon('file') }}&nbsp;{{ 'report_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'report_title'|trans, 'title') }}{% if sort == 'title' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'report_published'|trans, 'published') }}{% if sort == 'published' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'report_createdAt'|trans, 'createdAt') }}{% if sort == 'createdAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'report_updatedAt'|trans, 'updatedAt') }}{% if sort == 'updatedAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('report_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.title %}{{ entity.title }}{% endif %}</td>*/
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
