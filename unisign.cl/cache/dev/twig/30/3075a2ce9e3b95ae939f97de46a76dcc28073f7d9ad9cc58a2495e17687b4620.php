<?php

/* :Menu:menu_ordered.html.twig */
class __TwigTemplate_7f7099b840cb521b74dfc8b380c3336fc7cf0f43ebe88ed405a3a2f423f888ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Menu:menu.html.twig", ":Menu:menu_ordered.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d48a7fe77ec13afe42281da678e3122b4eed28a967debb1258a2d7dba12e84c1 = $this->env->getExtension("native_profiler");
        $__internal_d48a7fe77ec13afe42281da678e3122b4eed28a967debb1258a2d7dba12e84c1->enter($__internal_d48a7fe77ec13afe42281da678e3122b4eed28a967debb1258a2d7dba12e84c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu_ordered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48a7fe77ec13afe42281da678e3122b4eed28a967debb1258a2d7dba12e84c1->leave($__internal_d48a7fe77ec13afe42281da678e3122b4eed28a967debb1258a2d7dba12e84c1_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_b70ec53fd2f8f265db86bea6e39cae4d7c3bf3a4f18895fd27850fb525a3234f = $this->env->getExtension("native_profiler");
        $__internal_b70ec53fd2f8f265db86bea6e39cae4d7c3bf3a4f18895fd27850fb525a3234f->enter($__internal_b70ec53fd2f8f265db86bea6e39cae4d7c3bf3a4f18895fd27850fb525a3234f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        $context["macros"] = $this->loadTemplate(":Menu:menu.html.twig", ":Menu:menu_ordered.html.twig", 4);
        // line 5
        echo "
";
        // line 6
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 7
            echo "    <ol";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 8
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ol>
";
        }
        
        $__internal_b70ec53fd2f8f265db86bea6e39cae4d7c3bf3a4f18895fd27850fb525a3234f->leave($__internal_b70ec53fd2f8f265db86bea6e39cae4d7c3bf3a4f18895fd27850fb525a3234f_prof);

    }

    public function getTemplateName()
    {
        return ":Menu:menu_ordered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ':Menu:menu.html.twig' %}*/
/* */
/* {% block list %}*/
/* {% import ':Menu:menu.html.twig' as macros %}*/
/* */
/* {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*     <ol{{ macros.attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ol>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
