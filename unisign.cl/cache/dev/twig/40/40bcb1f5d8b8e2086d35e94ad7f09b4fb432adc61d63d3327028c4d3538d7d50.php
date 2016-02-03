<?php

/* UniAdminBundle:Dashboard:index.html.twig */
class __TwigTemplate_58430a06e83d6be0839322b2a8ca375bbfb5316926e3bc89051caa621f528fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "UniAdminBundle:Dashboard:index.html.twig", 1);
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
        $__internal_d2651e79c722fcf13228dda9035399da31ad5b62a775197dca69769c77e07903 = $this->env->getExtension("native_profiler");
        $__internal_d2651e79c722fcf13228dda9035399da31ad5b62a775197dca69769c77e07903->enter($__internal_d2651e79c722fcf13228dda9035399da31ad5b62a775197dca69769c77e07903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniAdminBundle:Dashboard:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2651e79c722fcf13228dda9035399da31ad5b62a775197dca69769c77e07903->leave($__internal_d2651e79c722fcf13228dda9035399da31ad5b62a775197dca69769c77e07903_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e009a2c0efe2871a0c9f6698756dcd4cee28978cb8e4fd1f97bc6bfa455866c = $this->env->getExtension("native_profiler");
        $__internal_1e009a2c0efe2871a0c9f6698756dcd4cee28978cb8e4fd1f97bc6bfa455866c->enter($__internal_1e009a2c0efe2871a0c9f6698756dcd4cee28978cb8e4fd1f97bc6bfa455866c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dashboard_index"), "html", null, true);
        
        $__internal_1e009a2c0efe2871a0c9f6698756dcd4cee28978cb8e4fd1f97bc6bfa455866c->leave($__internal_1e009a2c0efe2871a0c9f6698756dcd4cee28978cb8e4fd1f97bc6bfa455866c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f177dbe3610a4dae50473349abcbc8f1a1683e4e654f83403258726fbbdc293 = $this->env->getExtension("native_profiler");
        $__internal_9f177dbe3610a4dae50473349abcbc8f1a1683e4e654f83403258726fbbdc293->enter($__internal_9f177dbe3610a4dae50473349abcbc8f1a1683e4e654f83403258726fbbdc293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div id=\"page-wrapper\">

        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 11
        $this->loadTemplate(":Admin:icon.html.twig", "UniAdminBundle:Dashboard:index.html.twig", 11)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dashboard_index"), "html", null, true);
        echo "</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 18
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("frontpage_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 23
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 28
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["process"]) ? $context["process"] : $this->getContext($context, "process")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_stages"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 33
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["member"]) ? $context["member"] : $this->getContext($context, "member")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 38
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["memberrole"]) ? $context["memberrole"] : $this->getContext($context, "memberrole")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("memberrole_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 43
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["notice"]) ? $context["notice"] : $this->getContext($context, "notice")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 48
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["noticecategory"]) ? $context["noticecategory"] : $this->getContext($context, "noticecategory")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noticecategory_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 53
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("picture-o fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("gallery_photos"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 58
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["publication"]) ? $context["publication"] : $this->getContext($context, "publication")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publication_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 63
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("report_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

            <div class=\"col-lg-4 col-md-6\"><div class=\"panel panel-primary\"><div class=\"panel-heading\"><div class=\"row\">
                <div class=\"col-xs-3\">";
        // line 68
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-5x");
        echo "</div>
                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
        echo "</div><div>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_index"), "html", null, true);
        echo "</div></div>
            </div></div></div></div>

";
        // line 91
        echo "            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

";
        
        $__internal_9f177dbe3610a4dae50473349abcbc8f1a1683e4e654f83403258726fbbdc293->leave($__internal_9f177dbe3610a4dae50473349abcbc8f1a1683e4e654f83403258726fbbdc293_prof);

    }

    public function getTemplateName()
    {
        return "UniAdminBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 91,  204 => 69,  200 => 68,  191 => 64,  187 => 63,  178 => 59,  174 => 58,  165 => 54,  161 => 53,  152 => 49,  148 => 48,  139 => 44,  135 => 43,  126 => 39,  122 => 38,  113 => 34,  109 => 33,  100 => 29,  96 => 28,  87 => 24,  83 => 23,  74 => 19,  70 => 18,  59 => 11,  53 => 7,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ 'dashboard_index'|trans }}{% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <div id="page-wrapper">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ 'dashboard_index'|trans }}</h1>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('clone fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ frontpage }}</div><div>{{ 'frontpage_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('cogs fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ service }}</div><div>{{ 'service_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('paper-plane fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ process }}</div><div>{{ 'process_stages'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('sitemap fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ member }}</div><div>{{ 'member_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('sitemap fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ memberrole }}</div><div>{{ 'memberrole_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('newspaper-o fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ notice }}</div><div>{{ 'notice_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('newspaper-o fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ noticecategory }}</div><div>{{ 'noticecategory_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('picture-o fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ gallery }}</div><div>{{ 'gallery_photos'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('bullhorn fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ publication }}</div><div>{{ 'publication_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('flag fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ report }}</div><div>{{ 'report_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/*             <div class="col-lg-4 col-md-6"><div class="panel panel-primary"><div class="panel-heading"><div class="row">*/
/*                 <div class="col-xs-3">{{ icon('user fa-5x') }}</div>*/
/*                 <div class="col-xs-9 text-right"><div class="huge">{{ user }}</div><div>{{ 'user_index'|trans }}</div></div>*/
/*             </div></div></div></div>*/
/* */
/* {#}*/
/*             <div class="col-md-6 col-lg-4">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">Número de registros*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <dl class="dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg">*/
/*                             <dt>{{ 'frontpage_index'|trans }}</dt><dd>{% if frontpage %}{{ frontpage }}{% endif %}</dd>*/
/*                             <dt>{{ 'service_index'|trans }}</dt><dd>{% if service %}{{ service }}{% endif %}</dd>*/
/*                             <dt>{{ 'process_index'|trans }}</dt><dd>{% if process %}{{ process }}{% endif %}</dd>*/
/*                             <dt>{{ 'member_index'|trans }}</dt><dd>{% if member %}{{ member }}{% endif %}</dd>*/
/*                             <dt>{{ 'notice_index'|trans }}</dt><dd>{% if notice %}{{ notice }}{% endif %}</dd>*/
/*                             <dt>{{ 'publication_index'|trans }}</dt><dd>{% if publication %}{{ publication }}{% endif %}</dd>*/
/*                             <dt>{{ 'report_index'|trans }}</dt><dd>{% if report %}{{ report }}{% endif %}</dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* {#}*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/*     <!-- /#page-wrapper -->*/
/* */
/* {% endblock %}*/
/* */
