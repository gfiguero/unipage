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
        $__internal_5194b2808ce2ce13b0d9816ca1fdbfedbafff846536b9655170f3defa5393a21 = $this->env->getExtension("native_profiler");
        $__internal_5194b2808ce2ce13b0d9816ca1fdbfedbafff846536b9655170f3defa5393a21->enter($__internal_5194b2808ce2ce13b0d9816ca1fdbfedbafff846536b9655170f3defa5393a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5194b2808ce2ce13b0d9816ca1fdbfedbafff846536b9655170f3defa5393a21->leave($__internal_5194b2808ce2ce13b0d9816ca1fdbfedbafff846536b9655170f3defa5393a21_prof);

    }

    // line 3
    public function block_highlight($context, array $blocks = array())
    {
        $__internal_6a88e5f2e34cc9729ed9d3b375b99bf4443705c805dd2097a78b4503d4050410 = $this->env->getExtension("native_profiler");
        $__internal_6a88e5f2e34cc9729ed9d3b375b99bf4443705c805dd2097a78b4503d4050410->enter($__internal_6a88e5f2e34cc9729ed9d3b375b99bf4443705c805dd2097a78b4503d4050410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

        $this->displayParentBlock("highlight", $context, $blocks);
        
        $__internal_6a88e5f2e34cc9729ed9d3b375b99bf4443705c805dd2097a78b4503d4050410->leave($__internal_6a88e5f2e34cc9729ed9d3b375b99bf4443705c805dd2097a78b4503d4050410_prof);

    }

    // line 5
    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_9da9064a3da402c9fe520661ea3a9a2d60fcdcc4c289ed6c9a1930d1fa9ac7e8 = $this->env->getExtension("native_profiler");
        $__internal_9da9064a3da402c9fe520661ea3a9a2d60fcdcc4c289ed6c9a1930d1fa9ac7e8->enter($__internal_9da9064a3da402c9fe520661ea3a9a2d60fcdcc4c289ed6c9a1930d1fa9ac7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        $this->displayParentBlock("missionvision", $context, $blocks);
        
        $__internal_9da9064a3da402c9fe520661ea3a9a2d60fcdcc4c289ed6c9a1930d1fa9ac7e8->leave($__internal_9da9064a3da402c9fe520661ea3a9a2d60fcdcc4c289ed6c9a1930d1fa9ac7e8_prof);

    }

    // line 7
    public function block_service($context, array $blocks = array())
    {
        $__internal_ef56de5232d464badd00511c03786d909ec890f8ce14239ecf75bc0c5a32dd62 = $this->env->getExtension("native_profiler");
        $__internal_ef56de5232d464badd00511c03786d909ec890f8ce14239ecf75bc0c5a32dd62->enter($__internal_ef56de5232d464badd00511c03786d909ec890f8ce14239ecf75bc0c5a32dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

        $this->displayParentBlock("service", $context, $blocks);
        
        $__internal_ef56de5232d464badd00511c03786d909ec890f8ce14239ecf75bc0c5a32dd62->leave($__internal_ef56de5232d464badd00511c03786d909ec890f8ce14239ecf75bc0c5a32dd62_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_e2b92fc19e1634e07ef7965a138e3acf9a130ae67bcaf9ad24f5c2f331e90f87 = $this->env->getExtension("native_profiler");
        $__internal_e2b92fc19e1634e07ef7965a138e3acf9a130ae67bcaf9ad24f5c2f331e90f87->enter($__internal_e2b92fc19e1634e07ef7965a138e3acf9a130ae67bcaf9ad24f5c2f331e90f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $this->displayParentBlock("link", $context, $blocks);
        
        $__internal_e2b92fc19e1634e07ef7965a138e3acf9a130ae67bcaf9ad24f5c2f331e90f87->leave($__internal_e2b92fc19e1634e07ef7965a138e3acf9a130ae67bcaf9ad24f5c2f331e90f87_prof);

    }

    // line 11
    public function block_contact($context, array $blocks = array())
    {
        $__internal_1637820692747b41b2601d651b996208be277018f2f1d7ba37d7858306aa5b80 = $this->env->getExtension("native_profiler");
        $__internal_1637820692747b41b2601d651b996208be277018f2f1d7ba37d7858306aa5b80->enter($__internal_1637820692747b41b2601d651b996208be277018f2f1d7ba37d7858306aa5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $this->displayParentBlock("contact", $context, $blocks);
        
        $__internal_1637820692747b41b2601d651b996208be277018f2f1d7ba37d7858306aa5b80->leave($__internal_1637820692747b41b2601d651b996208be277018f2f1d7ba37d7858306aa5b80_prof);

    }

    // line 13
    public function block_signature($context, array $blocks = array())
    {
        $__internal_ec35833852a9d1cb84dfc1c10caad84f553f2df009c09f077a0ae04ebb54b38e = $this->env->getExtension("native_profiler");
        $__internal_ec35833852a9d1cb84dfc1c10caad84f553f2df009c09f077a0ae04ebb54b38e->enter($__internal_ec35833852a9d1cb84dfc1c10caad84f553f2df009c09f077a0ae04ebb54b38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        $this->displayParentBlock("signature", $context, $blocks);
        
        $__internal_ec35833852a9d1cb84dfc1c10caad84f553f2df009c09f077a0ae04ebb54b38e->leave($__internal_ec35833852a9d1cb84dfc1c10caad84f553f2df009c09f077a0ae04ebb54b38e_prof);

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
