<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_acd8be0366a8440484d28882547be4f6c00612323e6e3890f5e75b1451a65329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84ea577f6b7f66e65f4d6ed486d443226084d2ffeff0af45031e5807978df32c = $this->env->getExtension("native_profiler");
        $__internal_84ea577f6b7f66e65f4d6ed486d443226084d2ffeff0af45031e5807978df32c->enter($__internal_84ea577f6b7f66e65f4d6ed486d443226084d2ffeff0af45031e5807978df32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ea577f6b7f66e65f4d6ed486d443226084d2ffeff0af45031e5807978df32c->leave($__internal_84ea577f6b7f66e65f4d6ed486d443226084d2ffeff0af45031e5807978df32c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_437dcb1e962dbe477b4c09b85cf03cb2a641b7e2219dc595e1c7e91ecfa6e9d6 = $this->env->getExtension("native_profiler");
        $__internal_437dcb1e962dbe477b4c09b85cf03cb2a641b7e2219dc595e1c7e91ecfa6e9d6->enter($__internal_437dcb1e962dbe477b4c09b85cf03cb2a641b7e2219dc595e1c7e91ecfa6e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_437dcb1e962dbe477b4c09b85cf03cb2a641b7e2219dc595e1c7e91ecfa6e9d6->leave($__internal_437dcb1e962dbe477b4c09b85cf03cb2a641b7e2219dc595e1c7e91ecfa6e9d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_73c8bea66f5c7fadfd6759d79ca73689643de9eb5e89f7717deae5ad39c2123f = $this->env->getExtension("native_profiler");
        $__internal_73c8bea66f5c7fadfd6759d79ca73689643de9eb5e89f7717deae5ad39c2123f->enter($__internal_73c8bea66f5c7fadfd6759d79ca73689643de9eb5e89f7717deae5ad39c2123f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_73c8bea66f5c7fadfd6759d79ca73689643de9eb5e89f7717deae5ad39c2123f->leave($__internal_73c8bea66f5c7fadfd6759d79ca73689643de9eb5e89f7717deae5ad39c2123f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ba32e6342f469ec53c5db771e5c269e79ac9ce88c6cd3a240b9272ab7067371 = $this->env->getExtension("native_profiler");
        $__internal_6ba32e6342f469ec53c5db771e5c269e79ac9ce88c6cd3a240b9272ab7067371->enter($__internal_6ba32e6342f469ec53c5db771e5c269e79ac9ce88c6cd3a240b9272ab7067371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_6ba32e6342f469ec53c5db771e5c269e79ac9ce88c6cd3a240b9272ab7067371->leave($__internal_6ba32e6342f469ec53c5db771e5c269e79ac9ce88c6cd3a240b9272ab7067371_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_576b55a864845383d01c18f6d98ad0ad5f6f8430031bbb3638854080b2e83063 = $this->env->getExtension("native_profiler");
        $__internal_576b55a864845383d01c18f6d98ad0ad5f6f8430031bbb3638854080b2e83063->enter($__internal_576b55a864845383d01c18f6d98ad0ad5f6f8430031bbb3638854080b2e83063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_576b55a864845383d01c18f6d98ad0ad5f6f8430031bbb3638854080b2e83063->leave($__internal_576b55a864845383d01c18f6d98ad0ad5f6f8430031bbb3638854080b2e83063_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
