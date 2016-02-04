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
        $__internal_95e595512452692e46a60c2f063cdbf90c6355f6a1a411710cd59b77312106bd = $this->env->getExtension("native_profiler");
        $__internal_95e595512452692e46a60c2f063cdbf90c6355f6a1a411710cd59b77312106bd->enter($__internal_95e595512452692e46a60c2f063cdbf90c6355f6a1a411710cd59b77312106bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:role.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95e595512452692e46a60c2f063cdbf90c6355f6a1a411710cd59b77312106bd->leave($__internal_95e595512452692e46a60c2f063cdbf90c6355f6a1a411710cd59b77312106bd_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_05507f9e2023006f845e8281c6c92572aae6a0c5825e6952baa9dbd044044aea = $this->env->getExtension("native_profiler");
        $__internal_05507f9e2023006f845e8281c6c92572aae6a0c5825e6952baa9dbd044044aea->enter($__internal_05507f9e2023006f845e8281c6c92572aae6a0c5825e6952baa9dbd044044aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_05507f9e2023006f845e8281c6c92572aae6a0c5825e6952baa9dbd044044aea->leave($__internal_05507f9e2023006f845e8281c6c92572aae6a0c5825e6952baa9dbd044044aea_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_38801e37e6f5ec9bb69f42799456efd6f624a3d0e5bcf795c5bbc56d3f3d2271 = $this->env->getExtension("native_profiler");
        $__internal_38801e37e6f5ec9bb69f42799456efd6f624a3d0e5bcf795c5bbc56d3f3d2271->enter($__internal_38801e37e6f5ec9bb69f42799456efd6f624a3d0e5bcf795c5bbc56d3f3d2271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_38801e37e6f5ec9bb69f42799456efd6f624a3d0e5bcf795c5bbc56d3f3d2271->leave($__internal_38801e37e6f5ec9bb69f42799456efd6f624a3d0e5bcf795c5bbc56d3f3d2271_prof);

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
