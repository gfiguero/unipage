<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_17730131ee23451b5602fe2a05f09ef29c387196c47a610940128289409dab68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361acd8e2094ca365736ada3e3319d6c8c11f964084ed20ac30e2486cd25cc27 = $this->env->getExtension("native_profiler");
        $__internal_361acd8e2094ca365736ada3e3319d6c8c11f964084ed20ac30e2486cd25cc27->enter($__internal_361acd8e2094ca365736ada3e3319d6c8c11f964084ed20ac30e2486cd25cc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_361acd8e2094ca365736ada3e3319d6c8c11f964084ed20ac30e2486cd25cc27->leave($__internal_361acd8e2094ca365736ada3e3319d6c8c11f964084ed20ac30e2486cd25cc27_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_26092d5a5ce5b483502e1568c4d9792334f1b22686f244ba02c034b91bc738ed = $this->env->getExtension("native_profiler");
        $__internal_26092d5a5ce5b483502e1568c4d9792334f1b22686f244ba02c034b91bc738ed->enter($__internal_26092d5a5ce5b483502e1568c4d9792334f1b22686f244ba02c034b91bc738ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_26092d5a5ce5b483502e1568c4d9792334f1b22686f244ba02c034b91bc738ed->leave($__internal_26092d5a5ce5b483502e1568c4d9792334f1b22686f244ba02c034b91bc738ed_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
