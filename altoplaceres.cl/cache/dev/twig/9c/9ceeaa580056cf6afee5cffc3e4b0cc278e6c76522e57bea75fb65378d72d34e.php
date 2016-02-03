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
        $__internal_fab761f2a3b54668f9358727f31cd2fba49e6f7a2f6ceac0642922c97b090753 = $this->env->getExtension("native_profiler");
        $__internal_fab761f2a3b54668f9358727f31cd2fba49e6f7a2f6ceac0642922c97b090753->enter($__internal_fab761f2a3b54668f9358727f31cd2fba49e6f7a2f6ceac0642922c97b090753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:role.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab761f2a3b54668f9358727f31cd2fba49e6f7a2f6ceac0642922c97b090753->leave($__internal_fab761f2a3b54668f9358727f31cd2fba49e6f7a2f6ceac0642922c97b090753_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5a69fa63f2fc13519c9533ae25acae20d55641fd0352e7de78ee25218cc25d61 = $this->env->getExtension("native_profiler");
        $__internal_5a69fa63f2fc13519c9533ae25acae20d55641fd0352e7de78ee25218cc25d61->enter($__internal_5a69fa63f2fc13519c9533ae25acae20d55641fd0352e7de78ee25218cc25d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_5a69fa63f2fc13519c9533ae25acae20d55641fd0352e7de78ee25218cc25d61->leave($__internal_5a69fa63f2fc13519c9533ae25acae20d55641fd0352e7de78ee25218cc25d61_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f846bef4b6249b71b406593899e8aca021dc500f32507699ffd7283c19358f4d = $this->env->getExtension("native_profiler");
        $__internal_f846bef4b6249b71b406593899e8aca021dc500f32507699ffd7283c19358f4d->enter($__internal_f846bef4b6249b71b406593899e8aca021dc500f32507699ffd7283c19358f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f846bef4b6249b71b406593899e8aca021dc500f32507699ffd7283c19358f4d->leave($__internal_f846bef4b6249b71b406593899e8aca021dc500f32507699ffd7283c19358f4d_prof);

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
