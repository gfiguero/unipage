<?php

/* UniPageBundle:Page:index.html.twig */
class __TwigTemplate_3ead48dde475da8ef3b1e218460839c32d3a8f391bd7a47aa1cfa38ce50d2efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:index.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:highlight.html.twig", "UniPageBundle:Page:index.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:highlight.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate(":Page:missionvision.html.twig", "UniPageBundle:Page:index.html.twig", 5);
        // line 5
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:missionvision.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->loadTemplate(":Page:service.html.twig", "UniPageBundle:Page:index.html.twig", 7);
        // line 7
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:service.html.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->loadTemplate(":Page:link.html.twig", "UniPageBundle:Page:index.html.twig", 9);
        // line 9
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:link.html.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->loadTemplate(":Page:contact.html.twig", "UniPageBundle:Page:index.html.twig", 11);
        // line 11
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:contact.html.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $_trait_5 = $this->loadTemplate(":Page:signature.html.twig", "UniPageBundle:Page:index.html.twig", 13);
        // line 13
        if (!$_trait_5->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:signature.html.twig".'" cannot be used as a trait.');
        }
        $_trait_5_blocks = $_trait_5->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks,
            $_trait_5_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'highlight' => array($this, 'block_highlight'),
                'missionvision' => array($this, 'block_missionvision'),
                'service' => array($this, 'block_service'),
                'link' => array($this, 'block_link'),
                'contact' => array($this, 'block_contact'),
                'signature' => array($this, 'block_signature'),
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
        $__internal_f897a4d70d63bc19e9023431d487bb2e8d90b5c9638f197a78d51258fd6548fb = $this->env->getExtension("native_profiler");
        $__internal_f897a4d70d63bc19e9023431d487bb2e8d90b5c9638f197a78d51258fd6548fb->enter($__internal_f897a4d70d63bc19e9023431d487bb2e8d90b5c9638f197a78d51258fd6548fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f897a4d70d63bc19e9023431d487bb2e8d90b5c9638f197a78d51258fd6548fb->leave($__internal_f897a4d70d63bc19e9023431d487bb2e8d90b5c9638f197a78d51258fd6548fb_prof);

    }

    // line 3
    public function block_highlight($context, array $blocks = array())
    {
        $__internal_df799e4b8ff868a8e400ce268dfa2a6b642390a5119176a3b91927d9248bedec = $this->env->getExtension("native_profiler");
        $__internal_df799e4b8ff868a8e400ce268dfa2a6b642390a5119176a3b91927d9248bedec->enter($__internal_df799e4b8ff868a8e400ce268dfa2a6b642390a5119176a3b91927d9248bedec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

        $this->displayParentBlock("highlight", $context, $blocks);
        
        $__internal_df799e4b8ff868a8e400ce268dfa2a6b642390a5119176a3b91927d9248bedec->leave($__internal_df799e4b8ff868a8e400ce268dfa2a6b642390a5119176a3b91927d9248bedec_prof);

    }

    // line 5
    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_af27559124e18016057d1a14f9cde984e3f6f42685e3ed50b41a7d4aa965f85e = $this->env->getExtension("native_profiler");
        $__internal_af27559124e18016057d1a14f9cde984e3f6f42685e3ed50b41a7d4aa965f85e->enter($__internal_af27559124e18016057d1a14f9cde984e3f6f42685e3ed50b41a7d4aa965f85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        $this->displayParentBlock("missionvision", $context, $blocks);
        
        $__internal_af27559124e18016057d1a14f9cde984e3f6f42685e3ed50b41a7d4aa965f85e->leave($__internal_af27559124e18016057d1a14f9cde984e3f6f42685e3ed50b41a7d4aa965f85e_prof);

    }

    // line 7
    public function block_service($context, array $blocks = array())
    {
        $__internal_da575fa8bbe86cdac96470d192a1039582c610bd6186576068c552e9f654ce8e = $this->env->getExtension("native_profiler");
        $__internal_da575fa8bbe86cdac96470d192a1039582c610bd6186576068c552e9f654ce8e->enter($__internal_da575fa8bbe86cdac96470d192a1039582c610bd6186576068c552e9f654ce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

        $this->displayParentBlock("service", $context, $blocks);
        
        $__internal_da575fa8bbe86cdac96470d192a1039582c610bd6186576068c552e9f654ce8e->leave($__internal_da575fa8bbe86cdac96470d192a1039582c610bd6186576068c552e9f654ce8e_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_9997fd0d34ac89d4ea5faee5a34557e96322809a79351c4d8543f15eda52138d = $this->env->getExtension("native_profiler");
        $__internal_9997fd0d34ac89d4ea5faee5a34557e96322809a79351c4d8543f15eda52138d->enter($__internal_9997fd0d34ac89d4ea5faee5a34557e96322809a79351c4d8543f15eda52138d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $this->displayParentBlock("link", $context, $blocks);
        
        $__internal_9997fd0d34ac89d4ea5faee5a34557e96322809a79351c4d8543f15eda52138d->leave($__internal_9997fd0d34ac89d4ea5faee5a34557e96322809a79351c4d8543f15eda52138d_prof);

    }

    // line 11
    public function block_contact($context, array $blocks = array())
    {
        $__internal_dddc9b1a28bc060e1b13d5ed915c4d478fee7c034ca68ae947d59c4e1116c174 = $this->env->getExtension("native_profiler");
        $__internal_dddc9b1a28bc060e1b13d5ed915c4d478fee7c034ca68ae947d59c4e1116c174->enter($__internal_dddc9b1a28bc060e1b13d5ed915c4d478fee7c034ca68ae947d59c4e1116c174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $this->displayParentBlock("contact", $context, $blocks);
        
        $__internal_dddc9b1a28bc060e1b13d5ed915c4d478fee7c034ca68ae947d59c4e1116c174->leave($__internal_dddc9b1a28bc060e1b13d5ed915c4d478fee7c034ca68ae947d59c4e1116c174_prof);

    }

    // line 13
    public function block_signature($context, array $blocks = array())
    {
        $__internal_afa79f4c0fbc0e226001818815eb8d5f4ac76478d70d18d6f0c008dcc5343b27 = $this->env->getExtension("native_profiler");
        $__internal_afa79f4c0fbc0e226001818815eb8d5f4ac76478d70d18d6f0c008dcc5343b27->enter($__internal_afa79f4c0fbc0e226001818815eb8d5f4ac76478d70d18d6f0c008dcc5343b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        $this->displayParentBlock("signature", $context, $blocks);
        
        $__internal_afa79f4c0fbc0e226001818815eb8d5f4ac76478d70d18d6f0c008dcc5343b27->leave($__internal_afa79f4c0fbc0e226001818815eb8d5f4ac76478d70d18d6f0c008dcc5343b27_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 13,  142 => 11,  130 => 9,  118 => 7,  106 => 5,  94 => 3,  79 => 1,  49 => 13,  42 => 11,  35 => 9,  28 => 7,  21 => 5,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:highlight.html.twig' %}{% block highlight %}{{ parent() }}{% endblock %}*/
/* */
/* {% use ':Page:missionvision.html.twig' %}{% block missionvision %}{{ parent() }}{% endblock %}*/
/* */
/* {% use ':Page:service.html.twig' %}{% block service %}{{ parent() }}{% endblock %}*/
/* */
/* {% use ':Page:link.html.twig' %}{% block link %}{{ parent() }}{% endblock %}*/
/* */
/* {% use ':Page:contact.html.twig' %}{% block contact %}{{ parent() }}{% endblock %}*/
/* */
/* {% use ':Page:signature.html.twig' %}{% block signature %}{{ parent() }}{% endblock %}*/
