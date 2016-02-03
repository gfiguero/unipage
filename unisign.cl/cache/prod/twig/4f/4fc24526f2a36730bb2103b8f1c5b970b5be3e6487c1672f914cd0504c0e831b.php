<?php

/* :Page:link.html.twig */
class __TwigTemplate_5bfe263ece139d0ac359c9fe8c8be29a8d94701d89e38cab303ed2d9ff5c7713 extends Twig_Template
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
        // line 1
        $this->displayBlock('link', $context, $blocks);
    }

    public function block_link($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
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
    }

    public function getTemplateName()
    {
        return ":Page:link.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  42 => 10,  38 => 9,  32 => 6,  26 => 2,  20 => 1,);
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
