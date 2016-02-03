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
        $__internal_c7c59565fe5cdb5b2df6c7b912709eb4af2527f48ea9eb3cff6b411bb23db4ae = $this->env->getExtension("native_profiler");
        $__internal_c7c59565fe5cdb5b2df6c7b912709eb4af2527f48ea9eb3cff6b411bb23db4ae->enter($__internal_c7c59565fe5cdb5b2df6c7b912709eb4af2527f48ea9eb3cff6b411bb23db4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c7c59565fe5cdb5b2df6c7b912709eb4af2527f48ea9eb3cff6b411bb23db4ae->leave($__internal_c7c59565fe5cdb5b2df6c7b912709eb4af2527f48ea9eb3cff6b411bb23db4ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1ea7a063222f810c61fe9ef5152e3da32a682657b98a11e530f39329e51dce5 = $this->env->getExtension("native_profiler");
        $__internal_f1ea7a063222f810c61fe9ef5152e3da32a682657b98a11e530f39329e51dce5->enter($__internal_f1ea7a063222f810c61fe9ef5152e3da32a682657b98a11e530f39329e51dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f1ea7a063222f810c61fe9ef5152e3da32a682657b98a11e530f39329e51dce5->leave($__internal_f1ea7a063222f810c61fe9ef5152e3da32a682657b98a11e530f39329e51dce5_prof);

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
