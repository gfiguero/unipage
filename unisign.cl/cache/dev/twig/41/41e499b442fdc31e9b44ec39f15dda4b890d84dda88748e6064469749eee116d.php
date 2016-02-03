<?php

/* UniPageBundle:Page:report.html.twig */
class __TwigTemplate_7d428fadecb711f1909e2f9af88b624a17f0e7b47ffcb968a1f6f8a8f8db6134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:report.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:report.html.twig", 3);
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
        $__internal_6470ebfeda8204e9e799f59d3bf9ce08b7c22ff14dbb9f046ca0612fe7a76e29 = $this->env->getExtension("native_profiler");
        $__internal_6470ebfeda8204e9e799f59d3bf9ce08b7c22ff14dbb9f046ca0612fe7a76e29->enter($__internal_6470ebfeda8204e9e799f59d3bf9ce08b7c22ff14dbb9f046ca0612fe7a76e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6470ebfeda8204e9e799f59d3bf9ce08b7c22ff14dbb9f046ca0612fe7a76e29->leave($__internal_6470ebfeda8204e9e799f59d3bf9ce08b7c22ff14dbb9f046ca0612fe7a76e29_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_64ff46afc63616a576c19d19b9e8010942ec8069ac1755e6f8b8a9f46163a337 = $this->env->getExtension("native_profiler");
        $__internal_64ff46afc63616a576c19d19b9e8010942ec8069ac1755e6f8b8a9f46163a337->enter($__internal_64ff46afc63616a576c19d19b9e8010942ec8069ac1755e6f8b8a9f46163a337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_64ff46afc63616a576c19d19b9e8010942ec8069ac1755e6f8b8a9f46163a337->leave($__internal_64ff46afc63616a576c19d19b9e8010942ec8069ac1755e6f8b8a9f46163a337_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36e965735c00373673a0e28d4e7b3637dcdf17f88dff18ffb2a561436e3c3954 = $this->env->getExtension("native_profiler");
        $__internal_36e965735c00373673a0e28d4e7b3637dcdf17f88dff18ffb2a561436e3c3954->enter($__internal_36e965735c00373673a0e28d4e7b3637dcdf17f88dff18ffb2a561436e3c3954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"report\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 10
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_report_show", array("id" => $this->getAttribute($context["report"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12\">
                            <div class=\"report-preview\">
                                <div class=\"report-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "title", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
            <div class=\"row\">
                <div class=\"text-center\">
                    ";
        // line 23
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["reports"]) ? $context["reports"] : $this->getContext($context, "reports")));
        echo "
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_36e965735c00373673a0e28d4e7b3637dcdf17f88dff18ffb2a561436e3c3954->leave($__internal_36e965735c00373673a0e28d4e7b3637dcdf17f88dff18ffb2a561436e3c3954_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:report.html.twig";
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
/*     <section id="report">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% for report in reports %}*/
/*                     <a href="{{ path('uni_page_report_show', { 'id': report.id }) }}">*/
/*                         <div class="col-xs-12">*/
/*                             <div class="report-preview">*/
/*                                 <div class="report-title">{{ report.title }}</div>*/
/*                                 {#}<div class="report-createdat">{{ report.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}</div>{#}*/
/*                                 {#}<div class="report-content">{{ report.content | striptags | slice(0, 700) | raw }}</div>{#}*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="text-center">*/
/*                     {{ knp_pagination_render(reports) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
