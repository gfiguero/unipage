<?php

/* UniAdminBundle:MemberRole:index.html.twig */
class __TwigTemplate_3ac22feda3088017dc0d29086137cca460c1d2669c028f357a4fa9bb628c1fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:MemberRole:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("memberrole_index"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:MemberRole:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("memberrole_index"), "html", null, true);
        echo "</h1>
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "all", array()));
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
        echo $this->env->getExtension('routing')->getPath("memberrole_new");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("file");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("memberrole_new"), "html", null, true);
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
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), $this->env->getExtension('translator')->trans("memberrole_name"), "name");
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            if (((isset($context["direction"]) ? $context["direction"] : null) == "desc")) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
            } else {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-up");
            }
        }
        echo "</th>
                                    <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), $this->env->getExtension('translator')->trans("memberrole_rank"), "rank");
        if (((isset($context["sort"]) ? $context["sort"] : null) == "rank")) {
            if (((isset($context["direction"]) ? $context["direction"] : null) == "desc")) {
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "                                <tr class='clickableRow' href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("memberrole_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                                    <td>";
            // line 44
            if ($this->getAttribute($context["entity"], "name", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "name", array()), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "rank", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rank", array()), "html", null, true);
            }
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                            </tbody>
                        </table>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"text-center\">
                            ";
        // line 53
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
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
    }

    public function getTemplateName()
    {
        return "UniAdminBundle:MemberRole:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 53,  161 => 48,  150 => 45,  144 => 44,  139 => 43,  135 => 42,  121 => 38,  110 => 37,  95 => 29,  84 => 20,  78 => 19,  67 => 16,  63 => 15,  58 => 14,  53 => 13,  49 => 12,  44 => 11,  38 => 7,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'memberrole_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'memberrole_index'|trans }}</h1>*/
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
/*                             <a class="btn btn-primary" href="{{ path('memberrole_new') }}">{{ icon('file') }}&nbsp;{{ 'memberrole_new'|trans }}</a>*/
/*                         </div>*/
/*                         <div class="clearfix"></div>*/
/*                     </div>*/
/*                     <div class="table-responsive">*/
/*                         <table class="records_list table table-striped table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'memberrole_name'|trans, 'name') }}{% if sort == 'name' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                     <th>{{ knp_pagination_sortable(pagination, 'memberrole_rank'|trans, 'rank') }}{% if sort == 'rank' %}{% if direction == 'desc' %}{{ icon('caret-down') }}{% else %}{{ icon('caret-up') }}{% endif %}{% endif %}</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for entity in pagination %}*/
/*                                 <tr class='clickableRow' href="{{ path('memberrole_show', { 'id': entity.id }) }}">*/
/*                                     <td>{% if entity.name %}{{ entity.name }}{% endif %}</td>*/
/*                                     <td>{% if entity.rank %}{{ entity.rank }}{% endif %}</td>*/
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
