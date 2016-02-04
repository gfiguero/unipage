<?php

/* :Page:header.html.twig */
class __TwigTemplate_bf97b0a720508d37ce5e58c9fce4d859df86120f7fbdf7f2d77b6f4ea76cdc3f extends Twig_Template
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
        $__internal_5c109e9e7e00e27428cdfabe51ea8309f39c647882064dae94ee4bdf1d2d7ad1 = $this->env->getExtension("native_profiler");
        $__internal_5c109e9e7e00e27428cdfabe51ea8309f39c647882064dae94ee4bdf1d2d7ad1->enter($__internal_5c109e9e7e00e27428cdfabe51ea8309f39c647882064dae94ee4bdf1d2d7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_5c109e9e7e00e27428cdfabe51ea8309f39c647882064dae94ee4bdf1d2d7ad1->leave($__internal_5c109e9e7e00e27428cdfabe51ea8309f39c647882064dae94ee4bdf1d2d7ad1_prof);

    }

    public function block_header($context, array $blocks = array())
    {
        $__internal_26d72defb507ec6f0d2bcfde10a01c74a07b4339446e77f456e39b4439ed5bc5 = $this->env->getExtension("native_profiler");
        $__internal_26d72defb507ec6f0d2bcfde10a01c74a07b4339446e77f456e39b4439ed5bc5->enter($__internal_26d72defb507ec6f0d2bcfde10a01c74a07b4339446e77f456e39b4439ed5bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_26d72defb507ec6f0d2bcfde10a01c74a07b4339446e77f456e39b4439ed5bc5->leave($__internal_26d72defb507ec6f0d2bcfde10a01c74a07b4339446e77f456e39b4439ed5bc5_prof);

    }

    // line 8
    public function block_brand($context, array $blocks = array())
    {
        $__internal_709f618785b3bf49dab3b928155f82ecd45f056f9e928d865aea87e670325a98 = $this->env->getExtension("native_profiler");
        $__internal_709f618785b3bf49dab3b928155f82ecd45f056f9e928d865aea87e670325a98->enter($__internal_709f618785b3bf49dab3b928155f82ecd45f056f9e928d865aea87e670325a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        $this->displayParentBlock("brand", $context, $blocks);
        
        $__internal_709f618785b3bf49dab3b928155f82ecd45f056f9e928d865aea87e670325a98->leave($__internal_709f618785b3bf49dab3b928155f82ecd45f056f9e928d865aea87e670325a98_prof);

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
