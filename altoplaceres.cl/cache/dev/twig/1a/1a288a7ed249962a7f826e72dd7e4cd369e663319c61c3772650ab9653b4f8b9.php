<?php

/* :Pagination:sortable_link.html.twig */
class __TwigTemplate_547f96f36202a4698da20f271af11753a710261cb97517942449c56c6f40ea0f extends Twig_Template
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
        $__internal_ab46d961902034eb196b98d53fe0b63cf9d4b5b7423a320eb0fa4703066ac200 = $this->env->getExtension("native_profiler");
        $__internal_ab46d961902034eb196b98d53fe0b63cf9d4b5b7423a320eb0fa4703066ac200->enter($__internal_ab46d961902034eb196b98d53fe0b63cf9d4b5b7423a320eb0fa4703066ac200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination:sortable_link.html.twig"));

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
        
        $__internal_ab46d961902034eb196b98d53fe0b63cf9d4b5b7423a320eb0fa4703066ac200->leave($__internal_ab46d961902034eb196b98d53fe0b63cf9d4b5b7423a320eb0fa4703066ac200_prof);

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
