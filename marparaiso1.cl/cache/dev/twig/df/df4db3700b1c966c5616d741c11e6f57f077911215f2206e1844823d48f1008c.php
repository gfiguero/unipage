<?php

/* UniPageBundle:Page:documentshow.html.twig */
class __TwigTemplate_6de018d593fb6bf272a95d861ea8c78afe40b3a9a028c110714db64075ad43cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:documentshow.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:documentshow.html.twig", 3);
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
        $__internal_79225b78cd96287b0bb80b2c962c0006de88b0ed38210319e7bdbcb0acc4ed38 = $this->env->getExtension("native_profiler");
        $__internal_79225b78cd96287b0bb80b2c962c0006de88b0ed38210319e7bdbcb0acc4ed38->enter($__internal_79225b78cd96287b0bb80b2c962c0006de88b0ed38210319e7bdbcb0acc4ed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:documentshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79225b78cd96287b0bb80b2c962c0006de88b0ed38210319e7bdbcb0acc4ed38->leave($__internal_79225b78cd96287b0bb80b2c962c0006de88b0ed38210319e7bdbcb0acc4ed38_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_00cee952c432dcabc647a4b0c54d97eb401264b7c801619352dfff2527eb0e58 = $this->env->getExtension("native_profiler");
        $__internal_00cee952c432dcabc647a4b0c54d97eb401264b7c801619352dfff2527eb0e58->enter($__internal_00cee952c432dcabc647a4b0c54d97eb401264b7c801619352dfff2527eb0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_00cee952c432dcabc647a4b0c54d97eb401264b7c801619352dfff2527eb0e58->leave($__internal_00cee952c432dcabc647a4b0c54d97eb401264b7c801619352dfff2527eb0e58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_714826726af178a57188b283e3d593508e8e98c304b5ed7f1c1a9f3e89db2531 = $this->env->getExtension("native_profiler");
        $__internal_714826726af178a57188b283e3d593508e8e98c304b5ed7f1c1a9f3e89db2531->enter($__internal_714826726af178a57188b283e3d593508e8e98c304b5ed7f1c1a9f3e89db2531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"documentshow\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3 class=\"featurette-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "title", array()), "html", null, true);
        echo "</h3>
                    <h6 class=\"text-muted\">
                        Publicado: ";
        // line 12
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo ",
                        Actualizado: ";
        // line 13
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 15
        if (!twig_in_filter("default", $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "webpath", array()))) {
            echo "<a class=\"btn btn-default btn-lg\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "webpath", array())), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("download fa-fw fa-lg");
            echo "Descargar documento</a>";
        }
        // line 16
        echo "                    <p>";
        echo $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "content", array());
        echo "</p>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"featurette-heading\">Otros documentos</h3>
                    <div class=\"list-group\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["odocument"]) {
            // line 22
            echo "                        ";
            // line 23
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_document_show", array("id" => $this->getAttribute($context["odocument"], "id", array()))), "html", null, true);
            echo "\" class=\"document-title list-group-item ";
            if (($this->getAttribute($context["odocument"], "id", array()) == $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "id", array()))) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["odocument"], "title", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['odocument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_714826726af178a57188b283e3d593508e8e98c304b5ed7f1c1a9f3e89db2531->leave($__internal_714826726af178a57188b283e3d593508e8e98c304b5ed7f1c1a9f3e89db2531_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:documentshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  109 => 23,  107 => 22,  103 => 21,  94 => 16,  86 => 15,  81 => 13,  77 => 12,  72 => 10,  66 => 6,  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="documentshow">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <h3 class="featurette-heading">{{ document.title }}</h3>*/
/*                     <h6 class="text-muted">*/
/*                         Publicado: {{ document.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }},*/
/*                         Actualizado: {{ document.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}*/
/*                     </h6>*/
/*                     {% if 'default' not in document.webpath %}<a class="btn btn-default btn-lg" href="{{ asset(document.webpath) }}" target="_blank">{{ icon('download fa-fw fa-lg') }}Descargar documento</a>{% endif %}*/
/*                     <p>{{ document.content | raw }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <h3 class="featurette-heading">Otros documentos</h3>*/
/*                     <div class="list-group">*/
/*                         {% for odocument in documents %}*/
/*                         {#  #}*/
/*                             <a href="{{ path('uni_page_document_show', { 'id': odocument.id }) }}" class="document-title list-group-item {% if odocument.id == document.id %}active{% endif %}">{{ odocument.title }}</a>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
