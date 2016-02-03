<?php

/* :Page:link.html.twig */
class __TwigTemplate_6086110bb6c92e95cc2252cb53c982833551769d06f784b68a0b0b1f3910441d extends Twig_Template
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
        $__internal_62c339dbf24d36a7126270189ca40a3c08aa37a792e435d3867ed0fad339609d = $this->env->getExtension("native_profiler");
        $__internal_62c339dbf24d36a7126270189ca40a3c08aa37a792e435d3867ed0fad339609d->enter($__internal_62c339dbf24d36a7126270189ca40a3c08aa37a792e435d3867ed0fad339609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:link.html.twig"));

        // line 1
        $this->displayBlock('link', $context, $blocks);
        
        $__internal_62c339dbf24d36a7126270189ca40a3c08aa37a792e435d3867ed0fad339609d->leave($__internal_62c339dbf24d36a7126270189ca40a3c08aa37a792e435d3867ed0fad339609d_prof);

    }

    public function block_link($context, array $blocks = array())
    {
        $__internal_ebb8f635e5c436aad3feace3a31d8fae99875009de81dd14befbbe5a9c2c4a7b = $this->env->getExtension("native_profiler");
        $__internal_ebb8f635e5c436aad3feace3a31d8fae99875009de81dd14befbbe5a9c2c4a7b->enter($__internal_ebb8f635e5c436aad3feace3a31d8fae99875009de81dd14befbbe5a9c2c4a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

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
        
        $__internal_ebb8f635e5c436aad3feace3a31d8fae99875009de81dd14befbbe5a9c2c4a7b->leave($__internal_ebb8f635e5c436aad3feace3a31d8fae99875009de81dd14befbbe5a9c2c4a7b_prof);

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
