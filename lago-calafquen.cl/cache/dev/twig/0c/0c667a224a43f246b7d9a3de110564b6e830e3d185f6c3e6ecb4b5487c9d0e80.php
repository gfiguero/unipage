<?php

/* :Page:signature.html.twig */
class __TwigTemplate_45e7cafd6e552dd510dbb82f9e56bea8aa7a52bbd2561bb626151f47d60cc0b3 extends Twig_Template
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
        $__internal_8847cdbad0f06b494cba10d1825af4b3583e8f3e109a1251cb70d796f13a3c8c = $this->env->getExtension("native_profiler");
        $__internal_8847cdbad0f06b494cba10d1825af4b3583e8f3e109a1251cb70d796f13a3c8c->enter($__internal_8847cdbad0f06b494cba10d1825af4b3583e8f3e109a1251cb70d796f13a3c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:signature.html.twig"));

        // line 1
        $this->displayBlock('signature', $context, $blocks);
        
        $__internal_8847cdbad0f06b494cba10d1825af4b3583e8f3e109a1251cb70d796f13a3c8c->leave($__internal_8847cdbad0f06b494cba10d1825af4b3583e8f3e109a1251cb70d796f13a3c8c_prof);

    }

    public function block_signature($context, array $blocks = array())
    {
        $__internal_e68fd2274032b1ea0fe4479897165997000a7ab0371003371297283da3cf1d37 = $this->env->getExtension("native_profiler");
        $__internal_e68fd2274032b1ea0fe4479897165997000a7ab0371003371297283da3cf1d37->enter($__internal_e68fd2274032b1ea0fe4479897165997000a7ab0371003371297283da3cf1d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

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
        
        $__internal_e68fd2274032b1ea0fe4479897165997000a7ab0371003371297283da3cf1d37->leave($__internal_e68fd2274032b1ea0fe4479897165997000a7ab0371003371297283da3cf1d37_prof);

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
