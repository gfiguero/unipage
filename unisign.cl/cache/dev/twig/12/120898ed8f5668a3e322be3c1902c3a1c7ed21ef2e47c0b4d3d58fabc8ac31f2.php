<?php

/* :Page:header.html.twig */
class __TwigTemplate_7711a012048e8186e4ded473616cbb78cd5a39e4ffd2bf3a848f1b160f512414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate(":Page:brand.html.twig", ":Page:header.html.twig", 8);
        // line 8
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:brand.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'header' => array($this, 'block_header'),
                'brand' => array($this, 'block_brand'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_685031cba4319da9951ed643d860750732f05000acc172bbce94bb129b4ca469 = $this->env->getExtension("native_profiler");
        $__internal_685031cba4319da9951ed643d860750732f05000acc172bbce94bb129b4ca469->enter($__internal_685031cba4319da9951ed643d860750732f05000acc172bbce94bb129b4ca469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_685031cba4319da9951ed643d860750732f05000acc172bbce94bb129b4ca469->leave($__internal_685031cba4319da9951ed643d860750732f05000acc172bbce94bb129b4ca469_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_846c5b178be561b2552461cf71843a48947eb6826a166dd046da9e946ff41b38 = $this->env->getExtension("native_profiler");
        $__internal_846c5b178be561b2552461cf71843a48947eb6826a166dd046da9e946ff41b38->enter($__internal_846c5b178be561b2552461cf71843a48947eb6826a166dd046da9e946ff41b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "    <header class=\"intro-header header-image\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        ";
        // line 7
        if (("uni_page" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            // line 8
            echo "                            <h1>";
            $this->displayBlock('brand', $context, $blocks);
            echo "</h1>
                            <hr class=\"small\"><span class=\"subheading\">";
            // line 9
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "subtitle", array()), "html", null, true);
            } else {
                echo "subtítulo";
            }
            echo "</span>
                        ";
        } else {
            // line 11
            echo "                            <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))), "html", null, true);
            echo "</h2>
                            <hr class=\"small\">
                            <span class=\"subheading\">";
            // line 13
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "title", array()), "html", null, true);
            }
            echo "</span>
                        ";
        }
        // line 15
        echo "                    </div>
                </div>
            </div>
        </div>
    </header>
";
        
        $__internal_846c5b178be561b2552461cf71843a48947eb6826a166dd046da9e946ff41b38->leave($__internal_846c5b178be561b2552461cf71843a48947eb6826a166dd046da9e946ff41b38_prof);

    }

    // line 8
    public function block_brand($context, array $blocks = array())
    {
        $__internal_4616ef0a5bc6fb37e6e8c711e7774d374fd3e3d00d8c9438b09abd343cdc205c = $this->env->getExtension("native_profiler");
        $__internal_4616ef0a5bc6fb37e6e8c711e7774d374fd3e3d00d8c9438b09abd343cdc205c->enter($__internal_4616ef0a5bc6fb37e6e8c711e7774d374fd3e3d00d8c9438b09abd343cdc205c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        $this->displayParentBlock("brand", $context, $blocks);
        
        $__internal_4616ef0a5bc6fb37e6e8c711e7774d374fd3e3d00d8c9438b09abd343cdc205c->leave($__internal_4616ef0a5bc6fb37e6e8c711e7774d374fd3e3d00d8c9438b09abd343cdc205c_prof);

    }

    public function getTemplateName()
    {
        return ":Page:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 8,  84 => 15,  77 => 13,  71 => 11,  62 => 9,  57 => 8,  55 => 7,  48 => 2,  36 => 1,  14 => 8,);
    }
}
/* {% block header %}*/
/*     <header class="intro-header header-image">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <div class="site-heading">*/
/*                         {% if 'uni_page' == app.request.attributes.get('_route') %}*/
/*                             <h1>{% use ':Page:brand.html.twig' %}{% block brand %}{{ parent() }}{% endblock %}</h1>*/
/*                             <hr class="small"><span class="subheading">{% if frontpage %}{{ frontpage.subtitle }}{% else %}subtítulo{% endif %}</span>*/
/*                         {% else %}*/
/*                             <h2>{{ app.request.attributes.get('_route')|trans|trans }}</h2>*/
/*                             <hr class="small">*/
/*                             <span class="subheading">{% if frontpage %}{{ frontpage.title }}{% endif %}</span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* {% endblock %}*/
