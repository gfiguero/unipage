<?php

/* :Pagination:sortable_link.html.twig */
class __TwigTemplate_e499dc3c5e797f82e33f18f244109bd8787e37d0577e53d4cd73049318c584b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6672d8a673f32945b02608cfddb03652a8e2887d6fbeba3f0a2750df79fadc6e = $this->env->getExtension("native_profiler");
        $__internal_6672d8a673f32945b02608cfddb03652a8e2887d6fbeba3f0a2750df79fadc6e->enter($__internal_6672d8a673f32945b02608cfddb03652a8e2887d6fbeba3f0a2750df79fadc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_6672d8a673f32945b02608cfddb03652a8e2887d6fbeba3f0a2750df79fadc6e->leave($__internal_6672d8a673f32945b02608cfddb03652a8e2887d6fbeba3f0a2750df79fadc6e_prof);

    }

    public function getTemplateName()
    {
        return ":Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
