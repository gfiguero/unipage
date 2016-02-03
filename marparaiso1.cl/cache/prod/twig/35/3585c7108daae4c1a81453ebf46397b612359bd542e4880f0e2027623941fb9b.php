<?php

/* UniPageBundle:Page:publication.html.twig */
class __TwigTemplate_792b76ee022c93b1d4b892d1bff3b85be9d017e735731b9880d7768a7f802d91 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<section id=\"publication\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["publications"]) ? $context["publications"] : null));
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
        return array (  89 => 22,  78 => 17,  74 => 16,  70 => 15,  64 => 12,  60 => 10,  56 => 9,  51 => 6,  48 => 5,  42 => 3,  33 => 1,  14 => 3,  11 => 1,);
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
