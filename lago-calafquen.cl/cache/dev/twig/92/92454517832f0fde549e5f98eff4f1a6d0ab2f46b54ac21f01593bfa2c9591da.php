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
        $__internal_b105f636e2f13a5a8d4d05078c58db97c425a743cea9f5143f5aabdbbe694cd4 = $this->env->getExtension("native_profiler");
        $__internal_b105f636e2f13a5a8d4d05078c58db97c425a743cea9f5143f5aabdbbe694cd4->enter($__internal_b105f636e2f13a5a8d4d05078c58db97c425a743cea9f5143f5aabdbbe694cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b105f636e2f13a5a8d4d05078c58db97c425a743cea9f5143f5aabdbbe694cd4->leave($__internal_b105f636e2f13a5a8d4d05078c58db97c425a743cea9f5143f5aabdbbe694cd4_prof);

    }

    // line 3
    public function block_highlight($context, array $blocks = array())
    {
        $__internal_a6d72b4aa4c6f2a50d5f15dbb6532c1c1487f756070d1f4b19a4e00632297305 = $this->env->getExtension("native_profiler");
        $__internal_a6d72b4aa4c6f2a50d5f15dbb6532c1c1487f756070d1f4b19a4e00632297305->enter($__internal_a6d72b4aa4c6f2a50d5f15dbb6532c1c1487f756070d1f4b19a4e00632297305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

        $this->displayParentBlock("highlight", $context, $blocks);
        
        $__internal_a6d72b4aa4c6f2a50d5f15dbb6532c1c1487f756070d1f4b19a4e00632297305->leave($__internal_a6d72b4aa4c6f2a50d5f15dbb6532c1c1487f756070d1f4b19a4e00632297305_prof);

    }

    // line 5
    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_6cf25270d5f94767b6f005b4d57d3ec638f873abcc961e03274f8eadcae51af2 = $this->env->getExtension("native_profiler");
        $__internal_6cf25270d5f94767b6f005b4d57d3ec638f873abcc961e03274f8eadcae51af2->enter($__internal_6cf25270d5f94767b6f005b4d57d3ec638f873abcc961e03274f8eadcae51af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        $this->displayParentBlock("missionvision", $context, $blocks);
        
        $__internal_6cf25270d5f94767b6f005b4d57d3ec638f873abcc961e03274f8eadcae51af2->leave($__internal_6cf25270d5f94767b6f005b4d57d3ec638f873abcc961e03274f8eadcae51af2_prof);

    }

    // line 7
    public function block_service($context, array $blocks = array())
    {
        $__internal_9782a8d32a73669ff39119fc257e57b33805d9971a8763fec74e1c03d13e2c08 = $this->env->getExtension("native_profiler");
        $__internal_9782a8d32a73669ff39119fc257e57b33805d9971a8763fec74e1c03d13e2c08->enter($__internal_9782a8d32a73669ff39119fc257e57b33805d9971a8763fec74e1c03d13e2c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

        $this->displayParentBlock("service", $context, $blocks);
        
        $__internal_9782a8d32a73669ff39119fc257e57b33805d9971a8763fec74e1c03d13e2c08->leave($__internal_9782a8d32a73669ff39119fc257e57b33805d9971a8763fec74e1c03d13e2c08_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_2b69ad8de61b89600340d19ef130cff088cbf454cbe633c1d67e6ecee9f67915 = $this->env->getExtension("native_profiler");
        $__internal_2b69ad8de61b89600340d19ef130cff088cbf454cbe633c1d67e6ecee9f67915->enter($__internal_2b69ad8de61b89600340d19ef130cff088cbf454cbe633c1d67e6ecee9f67915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $this->displayParentBlock("link", $context, $blocks);
        
        $__internal_2b69ad8de61b89600340d19ef130cff088cbf454cbe633c1d67e6ecee9f67915->leave($__internal_2b69ad8de61b89600340d19ef130cff088cbf454cbe633c1d67e6ecee9f67915_prof);

    }

    // line 11
    public function block_contact($context, array $blocks = array())
    {
        $__internal_ab947491cc090ff8a01640ffab051f690ca8262d818cef5c193b41050d867793 = $this->env->getExtension("native_profiler");
        $__internal_ab947491cc090ff8a01640ffab051f690ca8262d818cef5c193b41050d867793->enter($__internal_ab947491cc090ff8a01640ffab051f690ca8262d818cef5c193b41050d867793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $this->displayParentBlock("contact", $context, $blocks);
        
        $__internal_ab947491cc090ff8a01640ffab051f690ca8262d818cef5c193b41050d867793->leave($__internal_ab947491cc090ff8a01640ffab051f690ca8262d818cef5c193b41050d867793_prof);

    }

    // line 13
    public function block_signature($context, array $blocks = array())
    {
        $__internal_b693af557aa97217c1a08485886c7a5f7c1ae581b88dbc7bcf44c0b91763636f = $this->env->getExtension("native_profiler");
        $__internal_b693af557aa97217c1a08485886c7a5f7c1ae581b88dbc7bcf44c0b91763636f->enter($__internal_b693af557aa97217c1a08485886c7a5f7c1ae581b88dbc7bcf44c0b91763636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        $this->displayParentBlock("signature", $context, $blocks);
        
        $__internal_b693af557aa97217c1a08485886c7a5f7c1ae581b88dbc7bcf44c0b91763636f->leave($__internal_b693af557aa97217c1a08485886c7a5f7c1ae581b88dbc7bcf44c0b91763636f_prof);

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
