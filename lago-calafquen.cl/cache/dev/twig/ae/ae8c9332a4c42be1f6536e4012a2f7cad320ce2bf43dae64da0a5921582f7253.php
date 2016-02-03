<?php

/* :Page:link.html.twig */
class __TwigTemplate_82061082d5a4ebce50267b85e27e0e703d938b242c1e730494fe05bb01c0359b extends Twig_Template
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
        $__internal_a29e3885a8d5c58c729c7cc2007efea71a7199391986b6150db2901fd05b24e0 = $this->env->getExtension("native_profiler");
        $__internal_a29e3885a8d5c58c729c7cc2007efea71a7199391986b6150db2901fd05b24e0->enter($__internal_a29e3885a8d5c58c729c7cc2007efea71a7199391986b6150db2901fd05b24e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:link.html.twig"));

        // line 1
        $this->displayBlock('link', $context, $blocks);
        
        $__internal_a29e3885a8d5c58c729c7cc2007efea71a7199391986b6150db2901fd05b24e0->leave($__internal_a29e3885a8d5c58c729c7cc2007efea71a7199391986b6150db2901fd05b24e0_prof);

    }

    public function block_link($context, array $blocks = array())
    {
        $__internal_ad2105de4d21e171746f3c9e7448331455c45e91f9a73a43738fe3abfd062674 = $this->env->getExtension("native_profiler");
        $__internal_ad2105de4d21e171746f3c9e7448331455c45e91f9a73a43738fe3abfd062674->enter($__internal_ad2105de4d21e171746f3c9e7448331455c45e91f9a73a43738fe3abfd062674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

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
        
        $__internal_ad2105de4d21e171746f3c9e7448331455c45e91f9a73a43738fe3abfd062674->leave($__internal_ad2105de4d21e171746f3c9e7448331455c45e91f9a73a43738fe3abfd062674_prof);

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
