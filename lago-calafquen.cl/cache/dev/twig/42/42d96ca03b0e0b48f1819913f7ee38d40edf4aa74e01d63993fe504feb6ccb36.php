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
        $__internal_d68455fdbd53a3602bcee8544e80a7a05d5948ac01da5cb28a1e2337b73d789f = $this->env->getExtension("native_profiler");
        $__internal_d68455fdbd53a3602bcee8544e80a7a05d5948ac01da5cb28a1e2337b73d789f->enter($__internal_d68455fdbd53a3602bcee8544e80a7a05d5948ac01da5cb28a1e2337b73d789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d68455fdbd53a3602bcee8544e80a7a05d5948ac01da5cb28a1e2337b73d789f->leave($__internal_d68455fdbd53a3602bcee8544e80a7a05d5948ac01da5cb28a1e2337b73d789f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbac919b1f1fe0b5ab408fecae56837057646cfc28a9384f0c39d98e2c3e998e = $this->env->getExtension("native_profiler");
        $__internal_dbac919b1f1fe0b5ab408fecae56837057646cfc28a9384f0c39d98e2c3e998e->enter($__internal_dbac919b1f1fe0b5ab408fecae56837057646cfc28a9384f0c39d98e2c3e998e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        
        $__internal_dbac919b1f1fe0b5ab408fecae56837057646cfc28a9384f0c39d98e2c3e998e->leave($__internal_dbac919b1f1fe0b5ab408fecae56837057646cfc28a9384f0c39d98e2c3e998e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_107f301ff75d4982d94d07cfe0fae4beff23764f4a8c7f423d07d05ae9e18917 = $this->env->getExtension("native_profiler");
        $__internal_107f301ff75d4982d94d07cfe0fae4beff23764f4a8c7f423d07d05ae9e18917->enter($__internal_107f301ff75d4982d94d07cfe0fae4beff23764f4a8c7f423d07d05ae9e18917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_107f301ff75d4982d94d07cfe0fae4beff23764f4a8c7f423d07d05ae9e18917->leave($__internal_107f301ff75d4982d94d07cfe0fae4beff23764f4a8c7f423d07d05ae9e18917_prof);

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
