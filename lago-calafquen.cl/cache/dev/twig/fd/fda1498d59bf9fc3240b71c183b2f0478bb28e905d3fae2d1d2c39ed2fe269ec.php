<?php

/* :Admin:pageheader.html.twig */
class __TwigTemplate_2f143df18f961c80f701090c1a0cd49003ef9cc19a7ac748575727ac3c80b11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageheader' => array($this, 'block_pageheader'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e023ca54fffd4ece0647d9019da6bf060b706742ec94a9939a87c98b26799da8 = $this->env->getExtension("native_profiler");
        $__internal_e023ca54fffd4ece0647d9019da6bf060b706742ec94a9939a87c98b26799da8->enter($__internal_e023ca54fffd4ece0647d9019da6bf060b706742ec94a9939a87c98b26799da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:pageheader.html.twig"));

        // line 1
        $this->displayBlock('pageheader', $context, $blocks);
        
        $__internal_e023ca54fffd4ece0647d9019da6bf060b706742ec94a9939a87c98b26799da8->leave($__internal_e023ca54fffd4ece0647d9019da6bf060b706742ec94a9939a87c98b26799da8_prof);

    }

    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_63227dd4e8d453b79dcd7e92302f5ab39d4aa8126d1582c243c531ab1e792fff = $this->env->getExtension("native_profiler");
        $__internal_63227dd4e8d453b79dcd7e92302f5ab39d4aa8126d1582c243c531ab1e792fff->enter($__internal_63227dd4e8d453b79dcd7e92302f5ab39d4aa8126d1582c243c531ab1e792fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 2
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">";
        // line 4
        $this->loadTemplate(":Admin:icon.html.twig", ":Admin:pageheader.html.twig", 4)->display($context);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</h1>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 6
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo " alert-dismissible fade in\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">";
                // line 8
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("remove fa-fw");
                echo "</button>
                        <strong>";
                // line 9
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
            // line 12
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
";
        
        $__internal_63227dd4e8d453b79dcd7e92302f5ab39d4aa8126d1582c243c531ab1e792fff->leave($__internal_63227dd4e8d453b79dcd7e92302f5ab39d4aa8126d1582c243c531ab1e792fff_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:pageheader.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  73 => 12,  62 => 9,  58 => 8,  53 => 7,  48 => 6,  44 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block pageheader %}*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <h1 class="page-header">{% include ':Admin:icon.html.twig' %}{{ app.request.attributes.get('_route')|trans }}</h1>*/
/*             {% for type, messages in app.session.flashBag.all %}*/
/*                 {% for message in messages %}*/
/*                     <div class="alert alert-{{ type }} alert-dismissible fade in" role="alert">*/
/*                         <button type="button" class="close" data-dismiss="alert" aria-label="close">{{ icon('remove fa-fw') }}</button>*/
/*                         <strong>{{ 'notification'|trans }}: </strong>{{ message|trans }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
