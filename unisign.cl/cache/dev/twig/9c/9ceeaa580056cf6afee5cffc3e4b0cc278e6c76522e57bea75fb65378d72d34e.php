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
        $__internal_b45c08d6a6364c962c31e26616593c100416feae582b8e2274a3f1b53c950b93 = $this->env->getExtension("native_profiler");
        $__internal_b45c08d6a6364c962c31e26616593c100416feae582b8e2274a3f1b53c950b93->enter($__internal_b45c08d6a6364c962c31e26616593c100416feae582b8e2274a3f1b53c950b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:role.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b45c08d6a6364c962c31e26616593c100416feae582b8e2274a3f1b53c950b93->leave($__internal_b45c08d6a6364c962c31e26616593c100416feae582b8e2274a3f1b53c950b93_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_099560bbee665e5062ca9b59e3df60968c67665fc61a95b54eafa39a61194ef7 = $this->env->getExtension("native_profiler");
        $__internal_099560bbee665e5062ca9b59e3df60968c67665fc61a95b54eafa39a61194ef7->enter($__internal_099560bbee665e5062ca9b59e3df60968c67665fc61a95b54eafa39a61194ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_099560bbee665e5062ca9b59e3df60968c67665fc61a95b54eafa39a61194ef7->leave($__internal_099560bbee665e5062ca9b59e3df60968c67665fc61a95b54eafa39a61194ef7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3de11ccce8e21034f0f8cf08f345d5b48059e36e267a6c5bfde19adf2e63e75 = $this->env->getExtension("native_profiler");
        $__internal_f3de11ccce8e21034f0f8cf08f345d5b48059e36e267a6c5bfde19adf2e63e75->enter($__internal_f3de11ccce8e21034f0f8cf08f345d5b48059e36e267a6c5bfde19adf2e63e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f3de11ccce8e21034f0f8cf08f345d5b48059e36e267a6c5bfde19adf2e63e75->leave($__internal_f3de11ccce8e21034f0f8cf08f345d5b48059e36e267a6c5bfde19adf2e63e75_prof);

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
