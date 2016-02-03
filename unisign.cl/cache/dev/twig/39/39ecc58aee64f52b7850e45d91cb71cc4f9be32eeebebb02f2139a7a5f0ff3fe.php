<?php

/* :Pagination:pagination.html.twig */
class __TwigTemplate_3f9d37bc38b480b511b784d4228b8f0af8168c844de5039bdb008bf6aa7dd82d extends Twig_Template
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
        $__internal_2a701d1cf5426646b7e3cb81b18339ed1da846e968d1f9a7ddbf9b6c911fbcaf = $this->env->getExtension("native_profiler");
        $__internal_2a701d1cf5426646b7e3cb81b18339ed1da846e968d1f9a7ddbf9b6c911fbcaf->enter($__internal_2a701d1cf5426646b7e3cb81b18339ed1da846e968d1f9a7ddbf9b6c911fbcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Pagination:pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (array_key_exists("previous", $context)) {
                // line 4
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-left");
                echo "</a></li>
        ";
            } else {
                // line 6
                echo "            <li class=\"disabled\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-left");
                echo "</li>
        ";
            }
            // line 8
            echo "
        ";
            // line 9
            if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) > 1)) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 1))), "html", null, true);
                echo "\">1</a></li>
            ";
                // line 11
                if (((isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) == 3)) {
                    // line 12
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => 2))), "html", null, true);
                    echo "\">2</a></li>
            ";
                } elseif ((                // line 13
(isset($context["startPage"]) ? $context["startPage"] : $this->getContext($context, "startPage")) != 2)) {
                    // line 14
                    echo "                <li class=\"disabled\"><span>&hellip;</span></li>
            ";
                }
                // line 16
                echo "        ";
            }
            // line 17
            echo "
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 20
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 22
                    echo "                <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > (isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")))) {
                // line 27
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 1))) {
                    // line 28
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > ((isset($context["endPage"]) ? $context["endPage"] : $this->getContext($context, "endPage")) + 2))) {
                        // line 29
                        echo "                    <li class=\"disabled\"><span>&hellip;</span></li>
                ";
                    } else {
                        // line 31
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) - 1), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount"))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            if (array_key_exists("next", $context)) {
                // line 38
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-right");
                echo "</a></li>
        ";
            } else {
                // line 40
                echo "            <li class=\"disabled\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-right");
                echo "</li>
        ";
            }
            // line 42
            echo "    </ul>
";
        }
        
        $__internal_2a701d1cf5426646b7e3cb81b18339ed1da846e968d1f9a7ddbf9b6c911fbcaf->leave($__internal_2a701d1cf5426646b7e3cb81b18339ed1da846e968d1f9a7ddbf9b6c911fbcaf_prof);

    }

    public function getTemplateName()
    {
        return ":Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 42,  146 => 40,  138 => 38,  136 => 37,  133 => 36,  125 => 34,  122 => 33,  114 => 31,  110 => 29,  107 => 28,  104 => 27,  102 => 26,  99 => 25,  93 => 24,  87 => 22,  79 => 20,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  62 => 14,  60 => 13,  55 => 12,  53 => 11,  48 => 10,  46 => 9,  43 => 8,  37 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if pageCount > 0 %}*/
/*     <ul class="pagination">*/
/*         {% if previous is defined %}*/
/*             <li><a href="{{ path(route, query|merge({(pageParameterName): previous})) }}">{{ icon('chevron-left') }}</a></li>*/
/*         {% else %}*/
/*             <li class="disabled">{{ icon('chevron-left') }}</li>*/
/*         {% endif %}*/
/* */
/*         {% if startPage > 1 %}*/
/*             <li><a href="{{ path(route, query|merge({(pageParameterName): 1})) }}">1</a></li>*/
/*             {% if startPage == 3 %}*/
/*                 <li><a href="{{ path(route, query|merge({(pageParameterName): 2})) }}">2</a></li>*/
/*             {% elseif startPage != 2 %}*/
/*                 <li class="disabled"><span>&hellip;</span></li>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*                 <li><a href="{{ path(route, query|merge({(pageParameterName): page})) }}">{{ page }}</a></li>*/
/*             {% else %}*/
/*                 <li class="active"><span>{{ page }}</span></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if pageCount > endPage %}*/
/*             {% if pageCount > (endPage + 1) %}*/
/*                 {% if pageCount > (endPage + 2) %}*/
/*                     <li class="disabled"><span>&hellip;</span></li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path(route, query|merge({(pageParameterName): (pageCount - 1)})) }}">{{ pageCount -1 }}</a></li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             <li><a href="{{ path(route, query|merge({(pageParameterName): pageCount})) }}">{{ pageCount }}</a></li>*/
/*         {% endif %}*/
/* */
/*         {% if next is defined %}*/
/*             <li><a href="{{ path(route, query|merge({(pageParameterName): next})) }}">{{ icon('chevron-right') }}</a></li>*/
/*         {% else %}*/
/*             <li class="disabled">{{ icon('chevron-right') }}</li>*/
/*         {% endif %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
