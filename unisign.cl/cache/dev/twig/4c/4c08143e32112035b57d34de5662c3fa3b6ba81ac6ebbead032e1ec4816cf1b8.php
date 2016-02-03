<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f585a868aec254735cf81d698137b26dd98e0479d7f488e9304b2671de8252aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8dda9607719d348b0e316b5e1fde04b093ff6987e804c167bf1d22fcc7c29dac = $this->env->getExtension("native_profiler");
        $__internal_8dda9607719d348b0e316b5e1fde04b093ff6987e804c167bf1d22fcc7c29dac->enter($__internal_8dda9607719d348b0e316b5e1fde04b093ff6987e804c167bf1d22fcc7c29dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dda9607719d348b0e316b5e1fde04b093ff6987e804c167bf1d22fcc7c29dac->leave($__internal_8dda9607719d348b0e316b5e1fde04b093ff6987e804c167bf1d22fcc7c29dac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc5c6331245694048dff8fabc9eaba17bb47a95c5452faead4ef0c2b5c111c28 = $this->env->getExtension("native_profiler");
        $__internal_dc5c6331245694048dff8fabc9eaba17bb47a95c5452faead4ef0c2b5c111c28->enter($__internal_dc5c6331245694048dff8fabc9eaba17bb47a95c5452faead4ef0c2b5c111c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_dc5c6331245694048dff8fabc9eaba17bb47a95c5452faead4ef0c2b5c111c28->leave($__internal_dc5c6331245694048dff8fabc9eaba17bb47a95c5452faead4ef0c2b5c111c28_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4861ddeb4a29ff2a10e1584853b6b8f8b5a050c4b83d9b694c5fb2a6e4ca73b = $this->env->getExtension("native_profiler");
        $__internal_e4861ddeb4a29ff2a10e1584853b6b8f8b5a050c4b83d9b694c5fb2a6e4ca73b->enter($__internal_e4861ddeb4a29ff2a10e1584853b6b8f8b5a050c4b83d9b694c5fb2a6e4ca73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Profile:show.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 11
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible fade in\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
                // line 13
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("remove fa-fw");
                echo "</button>
                            <strong>";
                // line 14
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
            // line 17
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <a type=\"button\" class=\"btn btn-warning\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("user_profile_edit");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("pencil");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_profile_edit"), "html", null, true);
        echo "</a>
                        <a type=\"button\" class=\"btn btn-primary\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_change_password");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("lock");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_change_password"), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"panel-body\">
                        <dl class=\"dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg\">
                            <dt>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_username"), "html", null, true);
        echo "</dt><dd>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</dd>
                            <dt>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_email"), "html", null, true);
        echo "</dt><dd>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</dd>
                            <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_firstname"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_lastname"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_createdAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                            <dt>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_updatedAt"), "html", null, true);
        echo "</dt><dd>";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        }
        echo "</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
";
        
        $__internal_e4861ddeb4a29ff2a10e1584853b6b8f8b5a050c4b83d9b694c5fb2a6e4ca73b->leave($__internal_e4861ddeb4a29ff2a10e1584853b6b8f8b5a050c4b83d9b694c5fb2a6e4ca73b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 34,  153 => 33,  145 => 32,  137 => 31,  131 => 30,  125 => 29,  114 => 25,  106 => 24,  98 => 18,  92 => 17,  81 => 14,  77 => 13,  72 => 12,  67 => 11,  63 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':Admin:base.html.twig' %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*                 {% for type, messages in app.session.flashBag.all %}*/
/*                     {% for message in messages %}*/
/*                         <div class="alert alert-{{ type }} alert-dismissible fade in" role="alert">*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-label="close">{{ icon('remove fa-fw') }}</button>*/
/*                             <strong>{{ 'notification'|trans }}: </strong>{{ message|trans }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <a type="button" class="btn btn-warning" href="{{ path('user_profile_edit') }}">{{ icon('pencil') }}&nbsp;{{ 'user_profile_edit'|trans }}</a>*/
/*                         <a type="button" class="btn btn-primary" href="{{ path('user_change_password') }}">{{ icon('lock') }}&nbsp;{{ 'user_change_password'|trans }}</a>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <dl class="dl-horizontal dl-horizontal-sm dl-horizontal-md dl-horizontal-lg">*/
/*                             <dt>{{ 'user_username'|trans }}</dt><dd>{{ user.username }}</dd>*/
/*                             <dt>{{ 'user_email'|trans }}</dt><dd>{{ user.email }}</dd>*/
/*                             <dt>{{ 'user_firstname'|trans }}</dt><dd>{% if user.firstname %}{{ user.firstname }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_lastname'|trans }}</dt><dd>{% if user.lastname %}{{ user.lastname }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_createdAt'|trans }}</dt><dd>{% if user.createdAt %}{{ user.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                             <dt>{{ 'user_updatedAt'|trans }}</dt><dd>{% if user.updatedAt %}{{ user.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}{% endif %}</dd>*/
/*                         </dl>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- /.col-lg-12 -->*/
/*         </div>*/
/*         <!-- /.row -->*/
/*     </div>*/
/* {% endblock body %}*/
/* */