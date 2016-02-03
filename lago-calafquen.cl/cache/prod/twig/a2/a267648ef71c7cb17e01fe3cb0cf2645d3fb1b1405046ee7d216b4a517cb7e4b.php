<?php

/* :Pagination:pagination.html.twig */
class __TwigTemplate_a11949ab0365d1fba6ed8c8225e21225525d85ba2f1ac994dcc3413f7c331181 extends Twig_Template
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
        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (array_key_exists("previous", $context)) {
                // line 4
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["previous"]) ? $context["previous"] : null)))), "html", null, true);
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
            if (((isset($context["startPage"]) ? $context["startPage"] : null) > 1)) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 1))), "html", null, true);
                echo "\">1</a></li>
            ";
                // line 11
                if (((isset($context["startPage"]) ? $context["startPage"] : null) == 3)) {
                    // line 12
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => 2))), "html", null, true);
                    echo "\">2</a></li>
            ";
                } elseif ((                // line 13
(isset($context["startPage"]) ? $context["startPage"] : null) != 2)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : null))) {
                    // line 20
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => $context["page"]))), "html", null, true);
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
            if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > (isset($context["endPage"]) ? $context["endPage"] : null))) {
                // line 27
                echo "            ";
                if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 1))) {
                    // line 28
                    echo "                ";
                    if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > ((isset($context["endPage"]) ? $context["endPage"] : null) + 2))) {
                        // line 29
                        echo "                    <li class=\"disabled\"><span>&hellip;</span></li>
                ";
                    } else {
                        // line 31
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((isset($context["pageCount"]) ? $context["pageCount"] : null) - 1), "html", null, true);
                        echo "</a></li>
                ";
                    }
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["pageCount"]) ? $context["pageCount"] : null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["pageCount"]) ? $context["pageCount"] : null), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["query"]) ? $context["query"] : null), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : null) => (isset($context["next"]) ? $context["next"] : null)))), "html", null, true);
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
        return array (  149 => 42,  143 => 40,  135 => 38,  133 => 37,  130 => 36,  122 => 34,  119 => 33,  111 => 31,  107 => 29,  104 => 28,  101 => 27,  99 => 26,  96 => 25,  90 => 24,  84 => 22,  76 => 20,  73 => 19,  69 => 18,  66 => 17,  63 => 16,  59 => 14,  57 => 13,  52 => 12,  50 => 11,  45 => 10,  43 => 9,  40 => 8,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
