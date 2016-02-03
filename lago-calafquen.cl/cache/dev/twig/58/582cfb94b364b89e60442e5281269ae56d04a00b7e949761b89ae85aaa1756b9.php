<?php

/* UniPageBundle:Page:publication.html.twig */
class __TwigTemplate_1e87ac6e34a66230b596236a2945dc07b3252de9846cdc3fdcc254bf118de159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:publication.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:publication.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:footer.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'footer' => array($this, 'block_footer'),
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return ":Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54148cb2213dc0cd8a576aa4ce4a3ead13947d438b5f4a04e634efe3a87ceef5 = $this->env->getExtension("native_profiler");
        $__internal_54148cb2213dc0cd8a576aa4ce4a3ead13947d438b5f4a04e634efe3a87ceef5->enter($__internal_54148cb2213dc0cd8a576aa4ce4a3ead13947d438b5f4a04e634efe3a87ceef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:publication.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54148cb2213dc0cd8a576aa4ce4a3ead13947d438b5f4a04e634efe3a87ceef5->leave($__internal_54148cb2213dc0cd8a576aa4ce4a3ead13947d438b5f4a04e634efe3a87ceef5_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2f830d46c18397811737c4895699c1b7b63886231c172a46be036e7a0c6dfe6a = $this->env->getExtension("native_profiler");
        $__internal_2f830d46c18397811737c4895699c1b7b63886231c172a46be036e7a0c6dfe6a->enter($__internal_2f830d46c18397811737c4895699c1b7b63886231c172a46be036e7a0c6dfe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_2f830d46c18397811737c4895699c1b7b63886231c172a46be036e7a0c6dfe6a->leave($__internal_2f830d46c18397811737c4895699c1b7b63886231c172a46be036e7a0c6dfe6a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_be81c2b0e7fb8ed7257fb11baf83dbd9c6d05a7c362a25a710b7a6b703d5ae48 = $this->env->getExtension("native_profiler");
        $__internal_be81c2b0e7fb8ed7257fb11baf83dbd9c6d05a7c362a25a710b7a6b703d5ae48->enter($__internal_be81c2b0e7fb8ed7257fb11baf83dbd9c6d05a7c362a25a710b7a6b703d5ae48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"publication\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : $this->getContext($context, "publications")));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 10
            echo "                <div class=\"col-xs-12\">
                    <div class=\"col-xs-3\">
                        <h3><img class=\"img-responsive img-circle center-block\" src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["publication"], "webpath", array())), "page_publication"), "html", null, true);
            echo "\"></h3>
                    </div>
                    <div class=\"col-xs-9\">
                        <h3>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["publication"], "title", array()), "html", null, true);
            echo "</h3>
                        <h6 class=\"text-muted\">Publicado: ";
            // line 16
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["publication"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
            echo "</h6>
                        <p>";
            // line 17
            echo $this->getAttribute($context["publication"], "content", array());
            echo "</p>
                    </div>
                    <div class=\"clearfix\"></div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['publication'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_be81c2b0e7fb8ed7257fb11baf83dbd9c6d05a7c362a25a710b7a6b703d5ae48->leave($__internal_be81c2b0e7fb8ed7257fb11baf83dbd9c6d05a7c362a25a710b7a6b703d5ae48_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:publication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  93 => 17,  89 => 16,  85 => 15,  79 => 12,  75 => 10,  71 => 9,  66 => 6,  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="publication">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% for publication in publications %}*/
/*                 <div class="col-xs-12">*/
/*                     <div class="col-xs-3">*/
/*                         <h3><img class="img-responsive img-circle center-block" src="{{ asset(publication.webpath) | imagine_filter('page_publication') }}"></h3>*/
/*                     </div>*/
/*                     <div class="col-xs-9">*/
/*                         <h3>{{ publication.title }}</h3>*/
/*                         <h6 class="text-muted">Publicado: {{ publication.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}</h6>*/
/*                         <p>{{ publication.content|raw }}</p>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
