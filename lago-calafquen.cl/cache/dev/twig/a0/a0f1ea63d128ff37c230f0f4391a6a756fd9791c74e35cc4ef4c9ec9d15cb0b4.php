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
        $__internal_347e96b3cd07cb70bd39a82af0feed080a60a28483f3b247362f88407f5582c2 = $this->env->getExtension("native_profiler");
        $__internal_347e96b3cd07cb70bd39a82af0feed080a60a28483f3b247362f88407f5582c2->enter($__internal_347e96b3cd07cb70bd39a82af0feed080a60a28483f3b247362f88407f5582c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_347e96b3cd07cb70bd39a82af0feed080a60a28483f3b247362f88407f5582c2->leave($__internal_347e96b3cd07cb70bd39a82af0feed080a60a28483f3b247362f88407f5582c2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e0a445aa34f85181b10f082a8fe127cd8a8c78c7ec933fea0cf385ecc5afc14 = $this->env->getExtension("native_profiler");
        $__internal_8e0a445aa34f85181b10f082a8fe127cd8a8c78c7ec933fea0cf385ecc5afc14->enter($__internal_8e0a445aa34f85181b10f082a8fe127cd8a8c78c7ec933fea0cf385ecc5afc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8e0a445aa34f85181b10f082a8fe127cd8a8c78c7ec933fea0cf385ecc5afc14->leave($__internal_8e0a445aa34f85181b10f082a8fe127cd8a8c78c7ec933fea0cf385ecc5afc14_prof);

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
