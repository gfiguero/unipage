<?php

/* UniAdminBundle:Member:index.html.twig */
class __TwigTemplate_dfa062b7afb03b45cdf6a0d31863e05a1bf4a2478e42d0b2ee0df880503d2aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Member:index.html.twig", 1);
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
        $__internal_8f2e35d085f2877a074d82cc891656ce0aa7a87abb593234a02a9672b90a3404 = $this->env->getExtension("native_profiler");
        $__internal_8f2e35d085f2877a074d82cc891656ce0aa7a87abb593234a02a9672b90a3404->enter($__internal_8f2e35d085f2877a074d82cc891656ce0aa7a87abb593234a02a9672b90a3404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Member:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2e35d085f2877a074d82cc891656ce0aa7a87abb593234a02a9672b90a3404->leave($__internal_8f2e35d085f2877a074d82cc891656ce0aa7a87abb593234a02a9672b90a3404_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_058a0957fa0ffb6f3e7b9f28fdfbe894c1d85c521387af1c61fed0423fbcf9d6 = $this->env->getExtension("native_profiler");
        $__internal_058a0957fa0ffb6f3e7b9f28fdfbe894c1d85c521387af1c61fed0423fbcf9d6->enter($__internal_058a0957fa0ffb6f3e7b9f28fdfbe894c1d85c521387af1c61fed0423fbcf9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_index"), "html", null, true);
        
        $__internal_058a0957fa0ffb6f3e7b9f28fdfbe894c1d85c521387af1c61fed0423fbcf9d6->leave($__internal_058a0957fa0ffb6f3e7b9f28fdfbe894c1d85c521387af1c61fed0423fbcf9d6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3400688be3e5a23b24dad6b03ac1a4b112683c17ddca7d8dc26438db55919669 = $this->env->getExtension("native_profiler");
        $__internal_3400688be3e5a23b24dad6b03ac1a4b112683c17ddca7d8dc26438db55919669->enter($__internal_3400688be3e5a23b24dad6b03ac1a4b112683c17ddca7d8dc26438db55919669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Member:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_index"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("member_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_new"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_firstname"), "firstname");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "firstname")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_lastname"), "lastname");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "lastname")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_email"), "email");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "email")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 40
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_phonenumber"), "phonenumber");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "phonenumber")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 41
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_birthdate"), "birthdate");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "birthdate")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 42
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_admissiondate"), "admissiondate");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "admissiondate")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 43
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("member_active"), "active");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "active")) {
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
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 48
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 49
            if ($this->getAttribute($context["entity"], "firstname", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "firstname", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "lastname", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lastname", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 51
            if ($this->getAttribute($context["entity"], "email", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 52
            if ($this->getAttribute($context["entity"], "phonenumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phonenumber", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 53
            if ($this->getAttribute($context["entity"], "birthdate", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "birthdate", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "admissiondate", array())) {
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["entity"], "admissiondate", array()), "full", "full", "es_ES", "America/Santiago", "dd-LLL-Y"), "html", null, true);
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
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 63
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
        
        $__internal_3400688be3e5a23b24dad6b03ac1a4b112683c17ddca7d8dc26438db55919669->leave($__internal_3400688be3e5a23b24dad6b03ac1a4b112683c17ddca7d8dc26438db55919669_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Member:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 63,  263 => 58,  250 => 55,  244 => 54,  238 => 53,  232 => 52,  226 => 51,  220 => 50,  214 => 49,  209 => 48,  205 => 47,  191 => 43,  180 => 42,  169 => 41,  158 => 40,  147 => 39,  136 => 38,  125 => 37,  110 => 29,  99 => 20,  93 => 19,  82 => 16,  78 => 15,  73 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'member_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'member_index'|trans }}</h1>*/
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
/*                             <a class="btn btn-primary" href="{{ path('member_new') }}">{{ icon('file') }}&nbsp;{{ 'member_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_firstname'|trans, 'firstname') }}{% if sort == 'firstname' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_lastname'|trans, 'lastname') }}{% if sort == 'lastname' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_email'|trans, 'email') }}{% if sort == 'email' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_phonenumber'|trans, 'phonenumber') }}{% if sort == 'phonenumber' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_birthdate'|trans, 'birthdate') }}{% if sort == 'birthdate' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_admissiondate'|trans, 'admissiondate') }}{% if sort == 'admissiondate' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'member_active'|trans, 'active') }}{% if sort == 'active' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('member_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.firstname %}{{ entity.firstname }}{% endif %}</td>*/
/*                                     <td>{% if entity.lastname %}{{ entity.lastname }}{% endif %}</td>*/
/*                                     <td>{% if entity.email %}{{ entity.email }}{% endif %}</td>*/
/*                                     <td>{% if entity.phonenumber %}{{ entity.phonenumber }}{% endif %}</td>*/
/*                                     <td>{% if entity.birthdate %}{{ entity.birthdate|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "dd-LLL-Y") }}{% endif %}</td>*/
/*                                     <td>{% if entity.admissiondate %}{{ entity.admissiondate|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "dd-LLL-Y") }}{% endif %}</td>*/
/*                                     <td>{% if entity.active %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</td>*/
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
