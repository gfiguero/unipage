<?php

/* UniAdminBundle:Frontpage:index.html.twig */
class __TwigTemplate_3c8212f79cc8e7508423637f7f100de529230bcb1ad428c55e25c82860120f69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Frontpage:index.html.twig", 1);
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
        $__internal_0860252018a2b8c3d78ffbe8d80b72fa314d8f74e2e01aeb2cefbbcecf790084 = $this->env->getExtension("native_profiler");
        $__internal_0860252018a2b8c3d78ffbe8d80b72fa314d8f74e2e01aeb2cefbbcecf790084->enter($__internal_0860252018a2b8c3d78ffbe8d80b72fa314d8f74e2e01aeb2cefbbcecf790084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Frontpage:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0860252018a2b8c3d78ffbe8d80b72fa314d8f74e2e01aeb2cefbbcecf790084->leave($__internal_0860252018a2b8c3d78ffbe8d80b72fa314d8f74e2e01aeb2cefbbcecf790084_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d8bd821a98697d61f3ce4eae92241b87876fdef1b1a2ea12920820e1a97e37b = $this->env->getExtension("native_profiler");
        $__internal_3d8bd821a98697d61f3ce4eae92241b87876fdef1b1a2ea12920820e1a97e37b->enter($__internal_3d8bd821a98697d61f3ce4eae92241b87876fdef1b1a2ea12920820e1a97e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontpage_index"), "html", null, true);
        
        $__internal_3d8bd821a98697d61f3ce4eae92241b87876fdef1b1a2ea12920820e1a97e37b->leave($__internal_3d8bd821a98697d61f3ce4eae92241b87876fdef1b1a2ea12920820e1a97e37b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_84fc822411cbea90f4c160a9ac47679293bafc67d60ed783797f06d3fb708398 = $this->env->getExtension("native_profiler");
        $__internal_84fc822411cbea90f4c160a9ac47679293bafc67d60ed783797f06d3fb708398->enter($__internal_84fc822411cbea90f4c160a9ac47679293bafc67d60ed783797f06d3fb708398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Frontpage:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontpage_index"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("frontpage_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontpage_new"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_title"), "title");
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_subtitle"), "subtitle");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "subtitle")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_email"), "email");
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_phonenumber"), "phonenumber");
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_address"), "address");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "address")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 42
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("frontpage_active"), "active");
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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 47
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontpage_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 48
            if ($this->getAttribute($context["entity"], "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 49
            if ($this->getAttribute($context["entity"], "subtitle", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subtitle", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "email", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 51
            if ($this->getAttribute($context["entity"], "phonenumber", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "phonenumber", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 52
            if ($this->getAttribute($context["entity"], "address", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "address", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 53
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
        // line 56
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 61
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
        
        $__internal_84fc822411cbea90f4c160a9ac47679293bafc67d60ed783797f06d3fb708398->leave($__internal_84fc822411cbea90f4c160a9ac47679293bafc67d60ed783797f06d3fb708398_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Frontpage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 61,  246 => 56,  233 => 53,  227 => 52,  221 => 51,  215 => 50,  209 => 49,  203 => 48,  198 => 47,  194 => 46,  180 => 42,  169 => 41,  158 => 40,  147 => 39,  136 => 38,  125 => 37,  110 => 29,  99 => 20,  93 => 19,  82 => 16,  78 => 15,  73 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'frontpage_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'frontpage_index'|trans }}</h1>*/
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
/*                             <a class="btn btn-primary" href="{{ path('frontpage_new') }}">{{ icon('file') }}&nbsp;{{ 'frontpage_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_title'|trans, 'title') }}{% if sort == 'title' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_subtitle'|trans, 'subtitle') }}{% if sort == 'subtitle' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_email'|trans, 'email') }}{% if sort == 'email' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_phonenumber'|trans, 'phonenumber') }}{% if sort == 'phonenumber' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_address'|trans, 'address') }}{% if sort == 'address' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'frontpage_active'|trans, 'active') }}{% if sort == 'active' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('frontpage_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.title %}{{ entity.title }}{% endif %}</td>*/
/*                                     <td>{% if entity.subtitle %}{{ entity.subtitle }}{% endif %}</td>*/
/*                                     <td>{% if entity.email %}{{ entity.email }}{% endif %}</td>*/
/*                                     <td>{% if entity.phonenumber %}{{ entity.phonenumber }}{% endif %}</td>*/
/*                                     <td>{% if entity.address %}{{ entity.address }}{% endif %}</td>*/
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
