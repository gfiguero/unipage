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
        $__internal_275126c8b1eb9acc882e5eff13ea2dc1231eaf18241ee103c7c178bd7598317b = $this->env->getExtension("native_profiler");
        $__internal_275126c8b1eb9acc882e5eff13ea2dc1231eaf18241ee103c7c178bd7598317b->enter($__internal_275126c8b1eb9acc882e5eff13ea2dc1231eaf18241ee103c7c178bd7598317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275126c8b1eb9acc882e5eff13ea2dc1231eaf18241ee103c7c178bd7598317b->leave($__internal_275126c8b1eb9acc882e5eff13ea2dc1231eaf18241ee103c7c178bd7598317b_prof);

    }

    // line 3
    public function block_highlight($context, array $blocks = array())
    {
        $__internal_27217c25e1ca4b9cc834d2562879ce71cdf75ce7ae46b2fa92e7bef542434659 = $this->env->getExtension("native_profiler");
        $__internal_27217c25e1ca4b9cc834d2562879ce71cdf75ce7ae46b2fa92e7bef542434659->enter($__internal_27217c25e1ca4b9cc834d2562879ce71cdf75ce7ae46b2fa92e7bef542434659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

        $this->displayParentBlock("highlight", $context, $blocks);
        
        $__internal_27217c25e1ca4b9cc834d2562879ce71cdf75ce7ae46b2fa92e7bef542434659->leave($__internal_27217c25e1ca4b9cc834d2562879ce71cdf75ce7ae46b2fa92e7bef542434659_prof);

    }

    // line 5
    public function block_missionvision($context, array $blocks = array())
    {
        $__internal_9955a549f85d0aeb21d5cdb0f3507f52213dec58dd2f7b95304e61dd293f6008 = $this->env->getExtension("native_profiler");
        $__internal_9955a549f85d0aeb21d5cdb0f3507f52213dec58dd2f7b95304e61dd293f6008->enter($__internal_9955a549f85d0aeb21d5cdb0f3507f52213dec58dd2f7b95304e61dd293f6008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missionvision"));

        $this->displayParentBlock("missionvision", $context, $blocks);
        
        $__internal_9955a549f85d0aeb21d5cdb0f3507f52213dec58dd2f7b95304e61dd293f6008->leave($__internal_9955a549f85d0aeb21d5cdb0f3507f52213dec58dd2f7b95304e61dd293f6008_prof);

    }

    // line 7
    public function block_service($context, array $blocks = array())
    {
        $__internal_9ff4826556c5aed735e1da6136291cbb77a3a796d75d87151e5a0406eed0ed51 = $this->env->getExtension("native_profiler");
        $__internal_9ff4826556c5aed735e1da6136291cbb77a3a796d75d87151e5a0406eed0ed51->enter($__internal_9ff4826556c5aed735e1da6136291cbb77a3a796d75d87151e5a0406eed0ed51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

        $this->displayParentBlock("service", $context, $blocks);
        
        $__internal_9ff4826556c5aed735e1da6136291cbb77a3a796d75d87151e5a0406eed0ed51->leave($__internal_9ff4826556c5aed735e1da6136291cbb77a3a796d75d87151e5a0406eed0ed51_prof);

    }

    // line 9
    public function block_link($context, array $blocks = array())
    {
        $__internal_60907e935cdadea04d382ca979ea394c8db37d580e2cd79c5f5f144c79ad8a87 = $this->env->getExtension("native_profiler");
        $__internal_60907e935cdadea04d382ca979ea394c8db37d580e2cd79c5f5f144c79ad8a87->enter($__internal_60907e935cdadea04d382ca979ea394c8db37d580e2cd79c5f5f144c79ad8a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "link"));

        $this->displayParentBlock("link", $context, $blocks);
        
        $__internal_60907e935cdadea04d382ca979ea394c8db37d580e2cd79c5f5f144c79ad8a87->leave($__internal_60907e935cdadea04d382ca979ea394c8db37d580e2cd79c5f5f144c79ad8a87_prof);

    }

    // line 11
    public function block_contact($context, array $blocks = array())
    {
        $__internal_242930c8b021d179b3769574fac1cc081af3e03e882ec0070cd780b22dbfb3a1 = $this->env->getExtension("native_profiler");
        $__internal_242930c8b021d179b3769574fac1cc081af3e03e882ec0070cd780b22dbfb3a1->enter($__internal_242930c8b021d179b3769574fac1cc081af3e03e882ec0070cd780b22dbfb3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $this->displayParentBlock("contact", $context, $blocks);
        
        $__internal_242930c8b021d179b3769574fac1cc081af3e03e882ec0070cd780b22dbfb3a1->leave($__internal_242930c8b021d179b3769574fac1cc081af3e03e882ec0070cd780b22dbfb3a1_prof);

    }

    // line 13
    public function block_signature($context, array $blocks = array())
    {
        $__internal_aabb4eff9a25668e2ab6e78a1936ad1fe2876b0eed51d136f04778bcb234a23c = $this->env->getExtension("native_profiler");
        $__internal_aabb4eff9a25668e2ab6e78a1936ad1fe2876b0eed51d136f04778bcb234a23c->enter($__internal_aabb4eff9a25668e2ab6e78a1936ad1fe2876b0eed51d136f04778bcb234a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        $this->displayParentBlock("signature", $context, $blocks);
        
        $__internal_aabb4eff9a25668e2ab6e78a1936ad1fe2876b0eed51d136f04778bcb234a23c->leave($__internal_aabb4eff9a25668e2ab6e78a1936ad1fe2876b0eed51d136f04778bcb234a23c_prof);

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
