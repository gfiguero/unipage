<?php

/* :Page:title.html.twig */
class __TwigTemplate_508ae57d3e217b7ab96bab43e79325b6ab78b19dcdd2d062c6f392a53f7acd87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451bfd78bef01b59544e58311850ca0b0927af23428b376e145e3dcc3bf1d424 = $this->env->getExtension("native_profiler");
        $__internal_451bfd78bef01b59544e58311850ca0b0927af23428b376e145e3dcc3bf1d424->enter($__internal_451bfd78bef01b59544e58311850ca0b0927af23428b376e145e3dcc3bf1d424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:title.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_451bfd78bef01b59544e58311850ca0b0927af23428b376e145e3dcc3bf1d424->leave($__internal_451bfd78bef01b59544e58311850ca0b0927af23428b376e145e3dcc3bf1d424_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_32ee1bd71faeab80844fcf3e4d1d27af57a0fc463c2c44a38cb7e854794837d1 = $this->env->getExtension("native_profiler");
        $__internal_32ee1bd71faeab80844fcf3e4d1d27af57a0fc463c2c44a38cb7e854794837d1->enter($__internal_32ee1bd71faeab80844fcf3e4d1d27af57a0fc463c2c44a38cb7e854794837d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
        
        $__internal_32ee1bd71faeab80844fcf3e4d1d27af57a0fc463c2c44a38cb7e854794837d1->leave($__internal_32ee1bd71faeab80844fcf3e4d1d27af57a0fc463c2c44a38cb7e854794837d1_prof);

    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
        $__internal_9ab8a88ac5ca75c525f9806f193f723cf3cd1b43f1ee47a263892fab98c398b1 = $this->env->getExtension("native_profiler");
        $__internal_9ab8a88ac5ca75c525f9806f193f723cf3cd1b43f1ee47a263892fab98c398b1->enter($__internal_9ab8a88ac5ca75c525f9806f193f723cf3cd1b43f1ee47a263892fab98c398b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_9ab8a88ac5ca75c525f9806f193f723cf3cd1b43f1ee47a263892fab98c398b1->leave($__internal_9ab8a88ac5ca75c525f9806f193f723cf3cd1b43f1ee47a263892fab98c398b1_prof);

    }

    public function getTemplateName()
    {
        return ":Page:title.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  41 => 4,  39 => 3,  36 => 2,  24 => 1,);
    }
}
/* {% block title %}*/
/*     <title>*/
/*         {% block brand %}{% endblock %}*/
/*     </title>*/
/* {% endblock %}*/
/* */
