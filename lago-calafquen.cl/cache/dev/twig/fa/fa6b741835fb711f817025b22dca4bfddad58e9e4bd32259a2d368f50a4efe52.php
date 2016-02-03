<?php

/* UniPageBundle:Page:reportshow.html.twig */
class __TwigTemplate_0edcfe985effd74ad417656ce48449c3fc7109647fd42f083c19d78743a2aa4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:reportshow.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:reportshow.html.twig", 3);
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
        $__internal_f04b08ff4381edf80f95c0bec19bf6d5f0752bef59cffd4126fea99aac9afae8 = $this->env->getExtension("native_profiler");
        $__internal_f04b08ff4381edf80f95c0bec19bf6d5f0752bef59cffd4126fea99aac9afae8->enter($__internal_f04b08ff4381edf80f95c0bec19bf6d5f0752bef59cffd4126fea99aac9afae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:reportshow.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04b08ff4381edf80f95c0bec19bf6d5f0752bef59cffd4126fea99aac9afae8->leave($__internal_f04b08ff4381edf80f95c0bec19bf6d5f0752bef59cffd4126fea99aac9afae8_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ce6c3bfe717f4980223306f022fc490586861dcb45dc6f2aeb2a747135115b6f = $this->env->getExtension("native_profiler");
        $__internal_ce6c3bfe717f4980223306f022fc490586861dcb45dc6f2aeb2a747135115b6f->enter($__internal_ce6c3bfe717f4980223306f022fc490586861dcb45dc6f2aeb2a747135115b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_ce6c3bfe717f4980223306f022fc490586861dcb45dc6f2aeb2a747135115b6f->leave($__internal_ce6c3bfe717f4980223306f022fc490586861dcb45dc6f2aeb2a747135115b6f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6f84d5fefce1a3a6c1f1de3a82d4c4439df1d05cbe971703b9e835aec52266e = $this->env->getExtension("native_profiler");
        $__internal_f6f84d5fefce1a3a6c1f1de3a82d4c4439df1d05cbe971703b9e835aec52266e->enter($__internal_f6f84d5fefce1a3a6c1f1de3a82d4c4439df1d05cbe971703b9e835aec52266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"reportshow\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3 class=\"featurette-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "title", array()), "html", null, true);
        echo "</h3>
                    <h6 class=\"text-muted\">
                        Publicado: ";
        // line 12
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo ",
                        Actualizado: ";
        // line 13
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 15
        if (!twig_in_filter("default", $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "webpath", array()))) {
            echo "<a class=\"btn btn-default btn-lg\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "webpath", array())), "html", null, true);
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("download fa-fw fa-lg");
            echo "Descargar informe</a>";
        }
        // line 16
        echo "                    <p>";
        echo $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "content", array());
        echo "</p>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"featurette-heading\">Los 10 últimos informes</h3>
                    <div class=\"list-group\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["oreport"]) {
            // line 22
            echo "                        ";
            // line 23
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_report_show", array("id" => $this->getAttribute($context["oreport"], "id", array()))), "html", null, true);
            echo "\" class=\"report-title list-group-item ";
            if (($this->getAttribute($context["oreport"], "id", array()) == $this->getAttribute((isset($context["report"]) ? $context["report"] : $this->getContext($context, "report")), "id", array()))) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["oreport"], "title", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oreport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_f6f84d5fefce1a3a6c1f1de3a82d4c4439df1d05cbe971703b9e835aec52266e->leave($__internal_f6f84d5fefce1a3a6c1f1de3a82d4c4439df1d05cbe971703b9e835aec52266e_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:reportshow.html.twig";
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
/*     <section id="reportshow">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <h3 class="featurette-heading">{{ report.title }}</h3>*/
/*                     <h6 class="text-muted">*/
/*                         Publicado: {{ report.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }},*/
/*                         Actualizado: {{ report.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}*/
/*                     </h6>*/
/*                     {% if 'default' not in report.webpath %}<a class="btn btn-default btn-lg" href="{{ asset(report.webpath) }}" target="_blank">{{ icon('download fa-fw fa-lg') }}Descargar informe</a>{% endif %}*/
/*                     <p>{{ report.content | raw }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <h3 class="featurette-heading">Los 10 últimos informes</h3>*/
/*                     <div class="list-group">*/
/*                         {% for oreport in reports %}*/
/*                         {#  #}*/
/*                             <a href="{{ path('uni_page_report_show', { 'id': oreport.id }) }}" class="report-title list-group-item {% if oreport.id == report.id %}active{% endif %}">{{ oreport.title }}</a>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
