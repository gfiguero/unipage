<?php

/* :Page:signature.html.twig */
class __TwigTemplate_958aab413a52bc181a6a33a65d8c525686b39884c05c9d72012d6aeb649eeb57 extends Twig_Template
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
        $__internal_a4102db567caa3ec7f85f5fe410a0411265a719bfc4ef269ba1a7276ee9581a0 = $this->env->getExtension("native_profiler");
        $__internal_a4102db567caa3ec7f85f5fe410a0411265a719bfc4ef269ba1a7276ee9581a0->enter($__internal_a4102db567caa3ec7f85f5fe410a0411265a719bfc4ef269ba1a7276ee9581a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:signature.html.twig"));

        // line 1
        $this->displayBlock('signature', $context, $blocks);
        
        $__internal_a4102db567caa3ec7f85f5fe410a0411265a719bfc4ef269ba1a7276ee9581a0->leave($__internal_a4102db567caa3ec7f85f5fe410a0411265a719bfc4ef269ba1a7276ee9581a0_prof);

    }

    public function block_signature($context, array $blocks = array())
    {
        $__internal_1a3d54b8cce2fdea0443461ff00d0571de7cd092fe03be78c12cf50740c851d2 = $this->env->getExtension("native_profiler");
        $__internal_1a3d54b8cce2fdea0443461ff00d0571de7cd092fe03be78c12cf50740c851d2->enter($__internal_1a3d54b8cce2fdea0443461ff00d0571de7cd092fe03be78c12cf50740c851d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

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
        
        $__internal_1a3d54b8cce2fdea0443461ff00d0571de7cd092fe03be78c12cf50740c851d2->leave($__internal_1a3d54b8cce2fdea0443461ff00d0571de7cd092fe03be78c12cf50740c851d2_prof);

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
