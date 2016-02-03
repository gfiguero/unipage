<?php

/* :Pagination:sortable_link.html.twig */
class __TwigTemplate_4aec1dc2cac82cb0a62da56fdd977937c440dfd0dd149e933bccc8075f9db5b6 extends Twig_Template
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
        $__internal_f4678f24bd570ed45d80e9ed9ea4752a688ac225f5aa972236c0b717ef3d8a3d = $this->env->getExtension("native_profiler");
        $__internal_f4678f24bd570ed45d80e9ed9ea4752a688ac225f5aa972236c0b717ef3d8a3d->enter($__internal_f4678f24bd570ed45d80e9ed9ea4752a688ac225f5aa972236c0b717ef3d8a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination:sortable_link.html.twig"));

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
        
        $__internal_f4678f24bd570ed45d80e9ed9ea4752a688ac225f5aa972236c0b717ef3d8a3d->leave($__internal_f4678f24bd570ed45d80e9ed9ea4752a688ac225f5aa972236c0b717ef3d8a3d_prof);

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
