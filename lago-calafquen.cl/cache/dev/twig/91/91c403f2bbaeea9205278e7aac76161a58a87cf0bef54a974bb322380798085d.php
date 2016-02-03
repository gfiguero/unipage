<?php

/* UniUserBundle:Manage:index.html.twig */
class __TwigTemplate_f66fc876b55fbfc23eeab1e2bb91b88af960cb9525a61133fac235c975656263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniUserBundle:Manage:index.html.twig", 1);
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
        $__internal_ee81ffb87428bba22414bcc779ce1f9bb233c13f1392f81f6ddf739ced2c5644 = $this->env->getExtension("native_profiler");
        $__internal_ee81ffb87428bba22414bcc779ce1f9bb233c13f1392f81f6ddf739ced2c5644->enter($__internal_ee81ffb87428bba22414bcc779ce1f9bb233c13f1392f81f6ddf739ced2c5644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniUserBundle:Manage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee81ffb87428bba22414bcc779ce1f9bb233c13f1392f81f6ddf739ced2c5644->leave($__internal_ee81ffb87428bba22414bcc779ce1f9bb233c13f1392f81f6ddf739ced2c5644_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_727568cd2ae78e8a6007761cfcd539569fdf45db89249fe2cf8d8e231e8dc83f = $this->env->getExtension("native_profiler");
        $__internal_727568cd2ae78e8a6007761cfcd539569fdf45db89249fe2cf8d8e231e8dc83f->enter($__internal_727568cd2ae78e8a6007761cfcd539569fdf45db89249fe2cf8d8e231e8dc83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_index"), "html", null, true);
        
        $__internal_727568cd2ae78e8a6007761cfcd539569fdf45db89249fe2cf8d8e231e8dc83f->leave($__internal_727568cd2ae78e8a6007761cfcd539569fdf45db89249fe2cf8d8e231e8dc83f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_80337f1c8f972bb351688cafbf319158944866cc9ba4e803344f6686cddf4ee2 = $this->env->getExtension("native_profiler");
        $__internal_80337f1c8f972bb351688cafbf319158944866cc9ba4e803344f6686cddf4ee2->enter($__internal_80337f1c8f972bb351688cafbf319158944866cc9ba4e803344f6686cddf4ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniUserBundle:Manage:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_index"), "html", null, true);
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
                            ";
        // line 36
        echo "                            <a class=\"btn btn-primary\" href=\"";
        echo $this->env->getExtension('routing')->getPath("user_registration_register");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user-plus");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_new"), "html", null, true);
        echo "</a>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"records_list table table-striped table-hover\">
                            <thead>
                                <tr>
                                    <th>";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("user_username"), "username");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "username")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("user_email"), "email");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "email")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    ";
        // line 47
        echo "                                    <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("user_createdAt"), "createdAt");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "createdAt")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 48
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("user_updatedAt"), "updatedAt");
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 53
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "username", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "email", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            }
            echo "</td>
                                    ";
            // line 57
            echo "                                    <td>";
            if ($this->getAttribute($context["entity"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y - HH:mm"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 58
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
        // line 61
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 66
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
        
        $__internal_80337f1c8f972bb351688cafbf319158944866cc9ba4e803344f6686cddf4ee2->leave($__internal_80337f1c8f972bb351688cafbf319158944866cc9ba4e803344f6686cddf4ee2_prof);

    }

    public function getTemplateName()
    {
        return "UniUserBundle:Manage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 66,  226 => 61,  215 => 58,  208 => 57,  202 => 55,  196 => 54,  191 => 53,  187 => 52,  173 => 48,  161 => 47,  150 => 45,  139 => 44,  123 => 36,  111 => 25,  100 => 22,  96 => 21,  93 => 20,  89 => 19,  86 => 18,  75 => 15,  71 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'user_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'user_index'|trans }}</h1>*/
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
/*                             {#}<a class="btn btn-primary" href="{{ path('user_new') }}">{{ icon('file') }}&nbsp;{{ 'user_new'|trans }}</a>{#}*/
/*                             <a class="btn btn-primary" href="{{ path('user_registration_register') }}">{{ icon('user-plus') }}&nbsp;{{ 'user_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'user_username'|trans, 'username') }}{% if sort == 'username' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'user_email'|trans, 'email') }}{% if sort == 'email' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     {#}<th>{{ knp_pagination_sortable(pagination, 'user_enabled'|trans, 'enabled') }}{% if sort == 'enabled' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>{#}*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'user_createdAt'|trans, 'createdAt') }}{% if sort == 'createdAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'user_updatedAt'|trans, 'updatedAt') }}{% if sort == 'updatedAt' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('user_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.username %}{{ entity.username }}{% endif %}</td>*/
/*                                     <td>{% if entity.email %}{{ entity.email }}{% endif %}</td>*/
/*                                     {#}<td>{% if entity.enabled %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</td>{#}*/
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