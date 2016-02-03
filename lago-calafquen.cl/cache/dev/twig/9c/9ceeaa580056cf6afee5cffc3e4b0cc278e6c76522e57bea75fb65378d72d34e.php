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
        $__internal_23408198e898f39614c70203d1c4bd9265d08cd7309bdd0005b4ae3e4ce9d0d4 = $this->env->getExtension("native_profiler");
        $__internal_23408198e898f39614c70203d1c4bd9265d08cd7309bdd0005b4ae3e4ce9d0d4->enter($__internal_23408198e898f39614c70203d1c4bd9265d08cd7309bdd0005b4ae3e4ce9d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:role.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23408198e898f39614c70203d1c4bd9265d08cd7309bdd0005b4ae3e4ce9d0d4->leave($__internal_23408198e898f39614c70203d1c4bd9265d08cd7309bdd0005b4ae3e4ce9d0d4_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_57007796326f4e529c0d447409c9ebd75c8ec65106972498b935b62808228e42 = $this->env->getExtension("native_profiler");
        $__internal_57007796326f4e529c0d447409c9ebd75c8ec65106972498b935b62808228e42->enter($__internal_57007796326f4e529c0d447409c9ebd75c8ec65106972498b935b62808228e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_57007796326f4e529c0d447409c9ebd75c8ec65106972498b935b62808228e42->leave($__internal_57007796326f4e529c0d447409c9ebd75c8ec65106972498b935b62808228e42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0fff5fca6792f74bda6d18bbe2b4046716cf6271281687f625c0c89ce8f0bca = $this->env->getExtension("native_profiler");
        $__internal_e0fff5fca6792f74bda6d18bbe2b4046716cf6271281687f625c0c89ce8f0bca->enter($__internal_e0fff5fca6792f74bda6d18bbe2b4046716cf6271281687f625c0c89ce8f0bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0fff5fca6792f74bda6d18bbe2b4046716cf6271281687f625c0c89ce8f0bca->leave($__internal_e0fff5fca6792f74bda6d18bbe2b4046716cf6271281687f625c0c89ce8f0bca_prof);

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
