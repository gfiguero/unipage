<?php

/* UniPageBundle:Page:role.html.twig */
class __TwigTemplate_c5c253d0696e5ed018b07959bb6ae870997ccdb0fc4c024397a23becba21462a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:role.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:role.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:footer.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'footer' => array($this, 'block_footer'),
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return ":Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_641c4bcf1dd41480c21a43167d54ef37355b04e354d1c8ae26944e563ed2850a = $this->env->getExtension("native_profiler");
        $__internal_641c4bcf1dd41480c21a43167d54ef37355b04e354d1c8ae26944e563ed2850a->enter($__internal_641c4bcf1dd41480c21a43167d54ef37355b04e354d1c8ae26944e563ed2850a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:role.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_641c4bcf1dd41480c21a43167d54ef37355b04e354d1c8ae26944e563ed2850a->leave($__internal_641c4bcf1dd41480c21a43167d54ef37355b04e354d1c8ae26944e563ed2850a_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_465bf04990097b75c3822cf791aebc572d2d3baf3e35bef183491bcb199eef6c = $this->env->getExtension("native_profiler");
        $__internal_465bf04990097b75c3822cf791aebc572d2d3baf3e35bef183491bcb199eef6c->enter($__internal_465bf04990097b75c3822cf791aebc572d2d3baf3e35bef183491bcb199eef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_465bf04990097b75c3822cf791aebc572d2d3baf3e35bef183491bcb199eef6c->leave($__internal_465bf04990097b75c3822cf791aebc572d2d3baf3e35bef183491bcb199eef6c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6947ee688f7a6cd3f14eea0ca7d60684e51f5cd9b7718f498f7304c52f1349c7 = $this->env->getExtension("native_profiler");
        $__internal_6947ee688f7a6cd3f14eea0ca7d60684e51f5cd9b7718f498f7304c52f1349c7->enter($__internal_6947ee688f7a6cd3f14eea0ca7d60684e51f5cd9b7718f498f7304c52f1349c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6947ee688f7a6cd3f14eea0ca7d60684e51f5cd9b7718f498f7304c52f1349c7->leave($__internal_6947ee688f7a6cd3f14eea0ca7d60684e51f5cd9b7718f498f7304c52f1349c7_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}{% endblock %}*/
