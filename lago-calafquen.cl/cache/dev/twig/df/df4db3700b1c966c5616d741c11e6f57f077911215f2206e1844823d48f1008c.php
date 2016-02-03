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
        $__internal_50508a1e389a33e6d839721984d5aac42dc9690cab6637a0ed47ef922f577cce = $this->env->getExtension("native_profiler");
        $__internal_50508a1e389a33e6d839721984d5aac42dc9690cab6637a0ed47ef922f577cce->enter($__internal_50508a1e389a33e6d839721984d5aac42dc9690cab6637a0ed47ef922f577cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:documentshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50508a1e389a33e6d839721984d5aac42dc9690cab6637a0ed47ef922f577cce->leave($__internal_50508a1e389a33e6d839721984d5aac42dc9690cab6637a0ed47ef922f577cce_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_03c32076c1bf59ed368675c6d8caf9b0c217ff7920b9a2b720073a4ed86bd480 = $this->env->getExtension("native_profiler");
        $__internal_03c32076c1bf59ed368675c6d8caf9b0c217ff7920b9a2b720073a4ed86bd480->enter($__internal_03c32076c1bf59ed368675c6d8caf9b0c217ff7920b9a2b720073a4ed86bd480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_03c32076c1bf59ed368675c6d8caf9b0c217ff7920b9a2b720073a4ed86bd480->leave($__internal_03c32076c1bf59ed368675c6d8caf9b0c217ff7920b9a2b720073a4ed86bd480_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_93aca1007500e56794772e3d27d4195f5dbca51c5d0cfa3e3e0fe3d76956ed4c = $this->env->getExtension("native_profiler");
        $__internal_93aca1007500e56794772e3d27d4195f5dbca51c5d0cfa3e3e0fe3d76956ed4c->enter($__internal_93aca1007500e56794772e3d27d4195f5dbca51c5d0cfa3e3e0fe3d76956ed4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93aca1007500e56794772e3d27d4195f5dbca51c5d0cfa3e3e0fe3d76956ed4c->leave($__internal_93aca1007500e56794772e3d27d4195f5dbca51c5d0cfa3e3e0fe3d76956ed4c_prof);

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
