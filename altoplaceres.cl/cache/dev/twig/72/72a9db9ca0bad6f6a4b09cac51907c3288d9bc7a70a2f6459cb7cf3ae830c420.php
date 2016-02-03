<?php

/* :Page:signature.html.twig */
class __TwigTemplate_1f84ba44bf1bc99165166d88ed901170c8d44f9e27be3e70863a01893189728e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'signature' => array($this, 'block_signature'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3593ad23f0f435a8f460538be8e39188ec4827940b930d0c92cb29331589fd4 = $this->env->getExtension("native_profiler");
        $__internal_e3593ad23f0f435a8f460538be8e39188ec4827940b930d0c92cb29331589fd4->enter($__internal_e3593ad23f0f435a8f460538be8e39188ec4827940b930d0c92cb29331589fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:signature.html.twig"));

        // line 1
        $this->displayBlock('signature', $context, $blocks);
        
        $__internal_e3593ad23f0f435a8f460538be8e39188ec4827940b930d0c92cb29331589fd4->leave($__internal_e3593ad23f0f435a8f460538be8e39188ec4827940b930d0c92cb29331589fd4_prof);

    }

    public function block_signature($context, array $blocks = array())
    {
        $__internal_506e4fd13445016823732dcf1c0b497e76975aa762735c30ca87abd2396062e0 = $this->env->getExtension("native_profiler");
        $__internal_506e4fd13445016823732dcf1c0b497e76975aa762735c30ca87abd2396062e0->enter($__internal_506e4fd13445016823732dcf1c0b497e76975aa762735c30ca87abd2396062e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

        // line 2
        echo "    <footer class=\"footer contact-image\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <p>";
        // line 5
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "title", array()), "html", null, true);
        }
        echo " - 2015. Desarrollado por uniSign.cl</p>
            </div>
        </div>
    </footer>
";
        
        $__internal_506e4fd13445016823732dcf1c0b497e76975aa762735c30ca87abd2396062e0->leave($__internal_506e4fd13445016823732dcf1c0b497e76975aa762735c30ca87abd2396062e0_prof);

    }

    public function getTemplateName()
    {
        return ":Page:signature.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 2,  23 => 1,);
    }
}
/* {% block signature %}*/
/*     <footer class="footer contact-image">*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <p>{% if frontpage %}{{ frontpage.title }}{% endif %} - 2015. Desarrollado por uniSign.cl</p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
/* */
