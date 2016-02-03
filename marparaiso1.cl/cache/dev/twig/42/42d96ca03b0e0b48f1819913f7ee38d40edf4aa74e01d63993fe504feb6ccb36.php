<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1e38362b939c648520e66e41b71c74d58d2ea0a50011140a1c6418041b5917e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:base.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_8e95f9020961196fc18f8bc5ba027fec6b3e3418fe71e5bcacc6a03db212827a = $this->env->getExtension("native_profiler");
        $__internal_8e95f9020961196fc18f8bc5ba027fec6b3e3418fe71e5bcacc6a03db212827a->enter($__internal_8e95f9020961196fc18f8bc5ba027fec6b3e3418fe71e5bcacc6a03db212827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e95f9020961196fc18f8bc5ba027fec6b3e3418fe71e5bcacc6a03db212827a->leave($__internal_8e95f9020961196fc18f8bc5ba027fec6b3e3418fe71e5bcacc6a03db212827a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_735239d29fa4b7399eccbe2d56a0d1e3afad5b530684aa4b28fa517e5750fa19 = $this->env->getExtension("native_profiler");
        $__internal_735239d29fa4b7399eccbe2d56a0d1e3afad5b530684aa4b28fa517e5750fa19->enter($__internal_735239d29fa4b7399eccbe2d56a0d1e3afad5b530684aa4b28fa517e5750fa19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_735239d29fa4b7399eccbe2d56a0d1e3afad5b530684aa4b28fa517e5750fa19->leave($__internal_735239d29fa4b7399eccbe2d56a0d1e3afad5b530684aa4b28fa517e5750fa19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72a2e987f92df7191887742e89bcf85043bc459feaec5f0b1586cc8f292d2488 = $this->env->getExtension("native_profiler");
        $__internal_72a2e987f92df7191887742e89bcf85043bc459feaec5f0b1586cc8f292d2488->enter($__internal_72a2e987f92df7191887742e89bcf85043bc459feaec5f0b1586cc8f292d2488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"page-wrapper\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 9
        $this->loadTemplate(":Admin:icon.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 9)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                ";
        // line 14
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 15
            echo "                    ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 16
            echo "                    ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 17
            echo "                ";
        }
        // line 18
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_72a2e987f92df7191887742e89bcf85043bc459feaec5f0b1586cc8f292d2488->leave($__internal_72a2e987f92df7191887742e89bcf85043bc459feaec5f0b1586cc8f292d2488_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  81 => 17,  72 => 16,  69 => 15,  67 => 14,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:base.html.twig" %}*/
/* */
/* {% block title %}{{ app.request.attributes.get('_route')|trans }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="page-wrapper">*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-12">*/
/*                 {% if app.session is not empty %}*/
/*                     {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*                     {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock body %}*/
/* */
