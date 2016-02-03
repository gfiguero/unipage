<?php

/* :Page:javascript.html.twig */
class __TwigTemplate_a4e6f70cf564ce5add610851750f8777564aa92e8061d4624cd0f468563d53fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d8393c5bf8b528e8ed127b911fa7b6f9f98771119462e2ff1e30af6cbe46c45 = $this->env->getExtension("native_profiler");
        $__internal_1d8393c5bf8b528e8ed127b911fa7b6f9f98771119462e2ff1e30af6cbe46c45->enter($__internal_1d8393c5bf8b528e8ed127b911fa7b6f9f98771119462e2ff1e30af6cbe46c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:javascript.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_1d8393c5bf8b528e8ed127b911fa7b6f9f98771119462e2ff1e30af6cbe46c45->leave($__internal_1d8393c5bf8b528e8ed127b911fa7b6f9f98771119462e2ff1e30af6cbe46c45_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_983e7691ab4ad1e0e1c73db18c3c8cd810c1d3330dce5e9a3ec5aee21daabb99 = $this->env->getExtension("native_profiler");
        $__internal_983e7691ab4ad1e0e1c73db18c3c8cd810c1d3330dce5e9a3ec5aee21daabb99->enter($__internal_983e7691ab4ad1e0e1c73db18c3c8cd810c1d3330dce5e9a3ec5aee21daabb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniPage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_983e7691ab4ad1e0e1c73db18c3c8cd810c1d3330dce5e9a3ec5aee21daabb99->leave($__internal_983e7691ab4ad1e0e1c73db18c3c8cd810c1d3330dce5e9a3ec5aee21daabb99_prof);

    }

    public function getTemplateName()
    {
        return ":Page:javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block javascript %}*/
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('js/uniPage.js') }}"></script>*/
/* {% endblock %}*/
