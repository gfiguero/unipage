<?php

/* :Page:signature.html.twig */
class __TwigTemplate_19971c5c910467e18f2ba9ad243600a591ff36439c413038529cfbe23a38b49b extends Twig_Template
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
        // line 1
        $this->displayBlock('signature', $context, $blocks);
    }

    public function block_signature($context, array $blocks = array())
    {
        // line 2
        echo "    <footer class=\"footer contact-image\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <p>";
        // line 5
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "title", array()), "html", null, true);
        }
        echo " - 2015. Desarrollado por uniSign.cl</p>
            </div>
        </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return ":Page:signature.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 2,  20 => 1,);
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
