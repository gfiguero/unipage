<?php

/* UniAdminBundle:Camera:index.html.twig */
class __TwigTemplate_efd51d29f9b8e5272ddb1f8c06a4b10f2dea8555983e3099d407777baad550e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Camera:index.html.twig", 1);
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
        $__internal_9638faed68b2e6815cfcb0b41c9ed2d0924a19d91b6ed3ca19e8af7604de4653 = $this->env->getExtension("native_profiler");
        $__internal_9638faed68b2e6815cfcb0b41c9ed2d0924a19d91b6ed3ca19e8af7604de4653->enter($__internal_9638faed68b2e6815cfcb0b41c9ed2d0924a19d91b6ed3ca19e8af7604de4653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Camera:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9638faed68b2e6815cfcb0b41c9ed2d0924a19d91b6ed3ca19e8af7604de4653->leave($__internal_9638faed68b2e6815cfcb0b41c9ed2d0924a19d91b6ed3ca19e8af7604de4653_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceb3de74ccc13dc53c2da61ae1248de0f609d4ff53749bb238dfb9df4cbd922e = $this->env->getExtension("native_profiler");
        $__internal_ceb3de74ccc13dc53c2da61ae1248de0f609d4ff53749bb238dfb9df4cbd922e->enter($__internal_ceb3de74ccc13dc53c2da61ae1248de0f609d4ff53749bb238dfb9df4cbd922e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("camera_index"), "html", null, true);
        
        $__internal_ceb3de74ccc13dc53c2da61ae1248de0f609d4ff53749bb238dfb9df4cbd922e->leave($__internal_ceb3de74ccc13dc53c2da61ae1248de0f609d4ff53749bb238dfb9df4cbd922e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cde3068c51575dafbfadef608b51b74d96e82ec1b5dad5e38ae3e674fa62127 = $this->env->getExtension("native_profiler");
        $__internal_9cde3068c51575dafbfadef608b51b74d96e82ec1b5dad5e38ae3e674fa62127->enter($__internal_9cde3068c51575dafbfadef608b51b74d96e82ec1b5dad5e38ae3e674fa62127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Camera:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("camera_index"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("camera_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("camera_new"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("camera_name"), "name");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "name")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("camera_source"), "source");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "source")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("camera_active"), "active");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "active")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 46
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("camera_createdAt"), "createdAt");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "createdAt")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 47
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("camera_updatedAt"), "updatedAt");
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 52
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("camera_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "source", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "source", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "active", array())) {
                echo "Si";
            } else {
                echo "No";
            }
            echo "</td>
                                    <td>";
            // line 56
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y - HH:mm"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 57
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
        // line 60
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 65
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
        
        $__internal_9cde3068c51575dafbfadef608b51b74d96e82ec1b5dad5e38ae3e674fa62127->leave($__internal_9cde3068c51575dafbfadef608b51b74d96e82ec1b5dad5e38ae3e674fa62127_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Camera:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 65,  242 => 60,  231 => 57,  225 => 56,  217 => 55,  211 => 54,  205 => 53,  200 => 52,  196 => 51,  182 => 47,  171 => 46,  160 => 45,  149 => 44,  138 => 43,  123 => 35,  111 => 25,  100 => 22,  96 => 21,  93 => 20,  89 => 19,  86 => 18,  75 => 15,  71 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'camera_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'camera_index'|trans }}</h1>*/
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
/*                             <a class="btn btn-primary" href="{{ path('camera_new') }}">{{ icon('file') }}&nbsp;{{ 'camera_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'camera_name'|trans, 'name') }}{% if sort == 'name' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'camera_source'|trans, 'source') }}{% if sort == 'source' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'camera_active'|trans, 'active') }}{% if sort == 'active' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'camera_createdAt'|trans, 'createdAt') }}{% if sort == 'createdAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'camera_updatedAt'|trans, 'updatedAt') }}{% if sort == 'updatedAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('camera_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.name %}{{ entity.name }}{% endif %}</td>*/
/*                                     <td>{% if entity.source %}{{ entity.source }}{% endif %}</td>*/
/*                                     <td>{% if entity.active %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</td>*/
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
