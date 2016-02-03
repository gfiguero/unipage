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
        $__internal_2db0100cc93067eb5ef5ddcca55335b823948d57d5c4467957e7eac030b138c7 = $this->env->getExtension("native_profiler");
        $__internal_2db0100cc93067eb5ef5ddcca55335b823948d57d5c4467957e7eac030b138c7->enter($__internal_2db0100cc93067eb5ef5ddcca55335b823948d57d5c4467957e7eac030b138c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2db0100cc93067eb5ef5ddcca55335b823948d57d5c4467957e7eac030b138c7->leave($__internal_2db0100cc93067eb5ef5ddcca55335b823948d57d5c4467957e7eac030b138c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_07dfd3a40c89a3c05a4453a8c1ccedf4a2b90dc534f64305c1931e7ab35adac9 = $this->env->getExtension("native_profiler");
        $__internal_07dfd3a40c89a3c05a4453a8c1ccedf4a2b90dc534f64305c1931e7ab35adac9->enter($__internal_07dfd3a40c89a3c05a4453a8c1ccedf4a2b90dc534f64305c1931e7ab35adac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_07dfd3a40c89a3c05a4453a8c1ccedf4a2b90dc534f64305c1931e7ab35adac9->leave($__internal_07dfd3a40c89a3c05a4453a8c1ccedf4a2b90dc534f64305c1931e7ab35adac9_prof);

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
