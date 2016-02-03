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
        $__internal_3e29106cf313b77d5fd0937cd5f7a91cf9960411ef9e463aa13ee78a0468ba67 = $this->env->getExtension("native_profiler");
        $__internal_3e29106cf313b77d5fd0937cd5f7a91cf9960411ef9e463aa13ee78a0468ba67->enter($__internal_3e29106cf313b77d5fd0937cd5f7a91cf9960411ef9e463aa13ee78a0468ba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e29106cf313b77d5fd0937cd5f7a91cf9960411ef9e463aa13ee78a0468ba67->leave($__internal_3e29106cf313b77d5fd0937cd5f7a91cf9960411ef9e463aa13ee78a0468ba67_prof);

    }

    // line 3
    public function block_highlight($context, array $blocks = array())
    {
        $__internal_836f8a42a4be412d503053e5770f44db30ec47e82ecd0629ca1db54b833b9f79 = $this->env->getExtension("native_profiler");
        $__internal_836f8a42a4be412d503053e5770f44db30ec47e82ecd0629ca1db54b833b9f79->enter($__internal_836f8a42a4be412d503053e5770f44db30ec47e82ecd0629ca1db54b833b9f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

        $this->displayParentBlock("highlight", $context, $blocks);
        
        $__internal_836f8a42a4be412d503053e5770f44db30ec47e82ecd0629ca1db54b833b9f79->leave($__internal_836f8a42a4be412d503053e5770f44db30ec47e82ecd0629ca1db54b833b9f79_prof);

    }

    // line 5
    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_5fa4f193b7e930802203fc15752413ab71093201c25614347638e4dc05d81155 = $this->env->getExtension("native_profiler");
        $__internal_5fa4f193b7e930802203fc15752413ab71093201c25614347638e4dc05d81155->enter($__internal_5fa4f193b7e930802203fc15752413ab71093201c25614347638e4dc05d81155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        $this->displayParentBlock("missionvision", $context, $blocks);
        
        $__internal_5fa4f193b7e930802203fc15752413ab71093201c25614347638e4dc05d81155->leave($__internal_5fa4f193b7e930802203fc15752413ab71093201c25614347638e4dc05d81155_prof);

    }

    // line 7
    public function block_service($context, array $blocks = array())
    {
        $__internal_e2c3b5b770b18102d123a0fcc0ea9f135f30f091ee2a72cc086901eb8d84c85d = $this->env->getExtension("native_profiler");
        $__internal_e2c3b5b770b18102d123a0fcc0ea9f135f30f091ee2a72cc086901eb8d84c85d->enter($__internal_e2c3b5b770b18102d123a0fcc0ea9f135f30f091ee2a72cc086901eb8d84c85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

        $this->displayParentBlock("service", $context, $blocks);
        
        $__internal_e2c3b5b770b18102d123a0fcc0ea9f135f30f091ee2a72cc086901eb8d84c85d->leave($__internal_e2c3b5b770b18102d123a0fcc0ea9f135f30f091ee2a72cc086901eb8d84c85d_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_938d234143249c014a4d5defecda2f43745ae56e253c1aefdb280f8dcbb00584 = $this->env->getExtension("native_profiler");
        $__internal_938d234143249c014a4d5defecda2f43745ae56e253c1aefdb280f8dcbb00584->enter($__internal_938d234143249c014a4d5defecda2f43745ae56e253c1aefdb280f8dcbb00584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $this->displayParentBlock("link", $context, $blocks);
        
        $__internal_938d234143249c014a4d5defecda2f43745ae56e253c1aefdb280f8dcbb00584->leave($__internal_938d234143249c014a4d5defecda2f43745ae56e253c1aefdb280f8dcbb00584_prof);

    }

    // line 11
    public function block_contact($context, array $blocks = array())
    {
        $__internal_91bcced8775c18cb2268f1b6bffd603aec98f78383d70a457e82773b7c04ba2d = $this->env->getExtension("native_profiler");
        $__internal_91bcced8775c18cb2268f1b6bffd603aec98f78383d70a457e82773b7c04ba2d->enter($__internal_91bcced8775c18cb2268f1b6bffd603aec98f78383d70a457e82773b7c04ba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $this->displayParentBlock("contact", $context, $blocks);
        
        $__internal_91bcced8775c18cb2268f1b6bffd603aec98f78383d70a457e82773b7c04ba2d->leave($__internal_91bcced8775c18cb2268f1b6bffd603aec98f78383d70a457e82773b7c04ba2d_prof);

    }

    // line 13
    public function block_signature($context, array $blocks = array())
    {
        $__internal_ac300981f4fafa87783111e423786d4ba9375bceda8ef33a4f1d9712077d2881 = $this->env->getExtension("native_profiler");
        $__internal_ac300981f4fafa87783111e423786d4ba9375bceda8ef33a4f1d9712077d2881->enter($__internal_ac300981f4fafa87783111e423786d4ba9375bceda8ef33a4f1d9712077d2881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        $this->displayParentBlock("signature", $context, $blocks);
        
        $__internal_ac300981f4fafa87783111e423786d4ba9375bceda8ef33a4f1d9712077d2881->leave($__internal_ac300981f4fafa87783111e423786d4ba9375bceda8ef33a4f1d9712077d2881_prof);

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
