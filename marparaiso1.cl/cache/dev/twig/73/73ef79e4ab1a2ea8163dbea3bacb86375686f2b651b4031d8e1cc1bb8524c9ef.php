<?php

/* UniPageBundle:Page:document.html.twig */
class __TwigTemplate_c6873c228337877839efdafc8cdc19c3d383044d50cc799ce61d7504543d1a3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:document.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:document.html.twig", 3);
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
        $__internal_3cfdc1dad8d2bbf77eb90af45f445d1ec9408f8420da0b79f4aeddf4c2d4b784 = $this->env->getExtension("native_profiler");
        $__internal_3cfdc1dad8d2bbf77eb90af45f445d1ec9408f8420da0b79f4aeddf4c2d4b784->enter($__internal_3cfdc1dad8d2bbf77eb90af45f445d1ec9408f8420da0b79f4aeddf4c2d4b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:document.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cfdc1dad8d2bbf77eb90af45f445d1ec9408f8420da0b79f4aeddf4c2d4b784->leave($__internal_3cfdc1dad8d2bbf77eb90af45f445d1ec9408f8420da0b79f4aeddf4c2d4b784_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_73261e5dd028fabbabd0144cc1f613e0d69f271a71a5f5be002724edca478454 = $this->env->getExtension("native_profiler");
        $__internal_73261e5dd028fabbabd0144cc1f613e0d69f271a71a5f5be002724edca478454->enter($__internal_73261e5dd028fabbabd0144cc1f613e0d69f271a71a5f5be002724edca478454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_73261e5dd028fabbabd0144cc1f613e0d69f271a71a5f5be002724edca478454->leave($__internal_73261e5dd028fabbabd0144cc1f613e0d69f271a71a5f5be002724edca478454_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c252739d5d8ece3029b494c88c40e55147505093d23570d71eb571d06b6dfcc = $this->env->getExtension("native_profiler");
        $__internal_8c252739d5d8ece3029b494c88c40e55147505093d23570d71eb571d06b6dfcc->enter($__internal_8c252739d5d8ece3029b494c88c40e55147505093d23570d71eb571d06b6dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"document\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 10
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_document_show", array("id" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "#documentshow\">
                        <div class=\"col-xs-12\">
                            <div class=\"report-preview\">
                                <div class=\"report-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "title", array()), "html", null, true);
            echo "</div>
                                ";
            // line 15
            echo "                                ";
            // line 16
            echo "                            </div>
                        </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <div class=\"row\">
                <div class=\"text-center\">
                    ";
        // line 23
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        echo "
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_8c252739d5d8ece3029b494c88c40e55147505093d23570d71eb571d06b6dfcc->leave($__internal_8c252739d5d8ece3029b494c88c40e55147505093d23570d71eb571d06b6dfcc_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  97 => 20,  88 => 16,  86 => 15,  82 => 13,  75 => 10,  71 => 9,  66 => 6,  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="document">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% for document in documents %}*/
/*                     <a href="{{ path('uni_page_document_show', { 'id': document.id }) }}#documentshow">*/
/*                         <div class="col-xs-12">*/
/*                             <div class="report-preview">*/
/*                                 <div class="report-title">{{ document.title }}</div>*/
/*                                 {#}<div class="document-createdat">{{ document.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}</div>{#}*/
/*                                 {#}<div class="document-content">{{ document.content | striptags | slice(0, 700) | raw }}</div>{#}*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="text-center">*/
/*                     {{ knp_pagination_render(documents) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
