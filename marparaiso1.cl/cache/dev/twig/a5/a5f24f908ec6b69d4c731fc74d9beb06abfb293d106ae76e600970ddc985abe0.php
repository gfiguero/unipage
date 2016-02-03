<?php

/* :Page:link.html.twig */
class __TwigTemplate_330657f7c924dd434055f3ebdacfa066a1ee3e742a3656736cf1d03c6babb502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'link' => array($this, 'block_link'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0922901c34b9bfa8ecd10922591b46ae3f2b485ef66c5272d22dbdb46a713c11 = $this->env->getExtension("native_profiler");
        $__internal_0922901c34b9bfa8ecd10922591b46ae3f2b485ef66c5272d22dbdb46a713c11->enter($__internal_0922901c34b9bfa8ecd10922591b46ae3f2b485ef66c5272d22dbdb46a713c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:link.html.twig"));

        // line 1
        $this->displayBlock('link', $context, $blocks);
        
        $__internal_0922901c34b9bfa8ecd10922591b46ae3f2b485ef66c5272d22dbdb46a713c11->leave($__internal_0922901c34b9bfa8ecd10922591b46ae3f2b485ef66c5272d22dbdb46a713c11_prof);

    }

    public function block_link($context, array $blocks = array())
    {
        $__internal_e8a6954b49315e325564d2027c207aef2b32b1aa5ac4ec31399454ecb46ca9e5 = $this->env->getExtension("native_profiler");
        $__internal_e8a6954b49315e325564d2027c207aef2b32b1aa5ac4ec31399454ecb46ca9e5->enter($__internal_e8a6954b49315e325564d2027c207aef2b32b1aa5ac4ec31399454ecb46ca9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        // line 2
        echo "    <section id=\"link\" class=\"bg-gray-lighter\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_index"), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"col-md-12 text-center\">
                    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 10
            echo "                        <a class=\"btn btn-default link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "address", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "name", array()), "html", null, true);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_e8a6954b49315e325564d2027c207aef2b32b1aa5ac4ec31399454ecb46ca9e5->leave($__internal_e8a6954b49315e325564d2027c207aef2b32b1aa5ac4ec31399454ecb46ca9e5_prof);

    }

    public function getTemplateName()
    {
        return ":Page:link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  51 => 10,  47 => 9,  41 => 6,  35 => 2,  23 => 1,);
    }
}
/* {% block link %}*/
/*     <section id="link" class="bg-gray-lighter">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">{{ "link_index"|trans }}</h2>*/
/*                 </div>*/
/*                 <div class="col-md-12 text-center">*/
/*                     {% for link in links %}*/
/*                         <a class="btn btn-default link" href="{{ link.address }}" target="_blank">{{ link.name }}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
