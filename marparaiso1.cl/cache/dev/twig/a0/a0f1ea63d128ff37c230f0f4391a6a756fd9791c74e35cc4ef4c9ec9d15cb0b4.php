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
        $__internal_846d43ee4bcf028a9459219f65eb315110b0bec1947e5122683a7f92624bd816 = $this->env->getExtension("native_profiler");
        $__internal_846d43ee4bcf028a9459219f65eb315110b0bec1947e5122683a7f92624bd816->enter($__internal_846d43ee4bcf028a9459219f65eb315110b0bec1947e5122683a7f92624bd816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_846d43ee4bcf028a9459219f65eb315110b0bec1947e5122683a7f92624bd816->leave($__internal_846d43ee4bcf028a9459219f65eb315110b0bec1947e5122683a7f92624bd816_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee0958eeed00eb9969bf11dc5cadb66929013b9b80c70e0b456e3668f0168036 = $this->env->getExtension("native_profiler");
        $__internal_ee0958eeed00eb9969bf11dc5cadb66929013b9b80c70e0b456e3668f0168036->enter($__internal_ee0958eeed00eb9969bf11dc5cadb66929013b9b80c70e0b456e3668f0168036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee0958eeed00eb9969bf11dc5cadb66929013b9b80c70e0b456e3668f0168036->leave($__internal_ee0958eeed00eb9969bf11dc5cadb66929013b9b80c70e0b456e3668f0168036_prof);

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
