<?php

/* UniAdminBundle:Service:index.html.twig */
class __TwigTemplate_6ef7f4211e954f781040d2940d68e123ed3838d428a26b6a241db8108dfb9ffd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Service:index.html.twig", 1);
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
        $__internal_9c4ab4013bd633acd93e3d00c0d8bff23e75514f6e3d695e0256feb16f2e6b18 = $this->env->getExtension("native_profiler");
        $__internal_9c4ab4013bd633acd93e3d00c0d8bff23e75514f6e3d695e0256feb16f2e6b18->enter($__internal_9c4ab4013bd633acd93e3d00c0d8bff23e75514f6e3d695e0256feb16f2e6b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Service:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c4ab4013bd633acd93e3d00c0d8bff23e75514f6e3d695e0256feb16f2e6b18->leave($__internal_9c4ab4013bd633acd93e3d00c0d8bff23e75514f6e3d695e0256feb16f2e6b18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb3cfd1ab90cf1882cff3c3b03bdd24157fe92c1b43e2471c9d713ba1043bbae = $this->env->getExtension("native_profiler");
        $__internal_cb3cfd1ab90cf1882cff3c3b03bdd24157fe92c1b43e2471c9d713ba1043bbae->enter($__internal_cb3cfd1ab90cf1882cff3c3b03bdd24157fe92c1b43e2471c9d713ba1043bbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_index"), "html", null, true);
        
        $__internal_cb3cfd1ab90cf1882cff3c3b03bdd24157fe92c1b43e2471c9d713ba1043bbae->leave($__internal_cb3cfd1ab90cf1882cff3c3b03bdd24157fe92c1b43e2471c9d713ba1043bbae_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb3c07ce04c234f529445a0a762606ab5690864811e033f18bfcb380a90df789 = $this->env->getExtension("native_profiler");
        $__internal_fb3c07ce04c234f529445a0a762606ab5690864811e033f18bfcb380a90df789->enter($__internal_fb3c07ce04c234f529445a0a762606ab5690864811e033f18bfcb380a90df789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Service:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_index"), "html", null, true);
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
        echo $this->env->getExtension('routing')->getPath("service_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_new"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("service_title"), "title");
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("service_rank"), "rank");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "rank")) {
            if (((isset($context["direction"]) ? $context["direction"] : $this->getContext($context, "direction")) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('translator')->trans("service_published"), "published");
        if (((isset($context["sort"]) ? $context["sort"] : $this->getContext($context, "sort")) == "published")) {
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "title", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 46
            if ($this->getAttribute($context["entity"], "rank", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rank", array()), "html", null, true);
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
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 55
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
        
        $__internal_fb3c07ce04c234f529445a0a762606ab5690864811e033f18bfcb380a90df789->leave($__internal_fb3c07ce04c234f529445a0a762606ab5690864811e033f18bfcb380a90df789_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Service:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 55,  195 => 50,  182 => 47,  176 => 46,  170 => 45,  165 => 44,  161 => 43,  147 => 39,  136 => 38,  125 => 37,  110 => 29,  99 => 20,  93 => 19,  82 => 16,  78 => 15,  73 => 14,  68 => 13,  64 => 12,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'service_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'service_index'|trans }}</h1>*/
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
/*                             <a class="btn btn-primary" href="{{ path('service_new') }}">{{ icon('file') }}&nbsp;{{ 'service_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'service_title'|trans, 'title') }}{% if sort == 'title' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'service_rank'|trans, 'rank') }}{% if sort == 'rank' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'service_published'|trans, 'published') }}{% if sort == 'published' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('service_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.title %}{{ entity.title }}{% endif %}</td>*/
/*                                     <td>{% if entity.rank %}{{ entity.rank }}{% endif %}</td>*/
/*                                     <td>{% if entity.published %}{{ 'Si' }}{% else %}{{ 'No' }}{% endif %}</td>*/
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
