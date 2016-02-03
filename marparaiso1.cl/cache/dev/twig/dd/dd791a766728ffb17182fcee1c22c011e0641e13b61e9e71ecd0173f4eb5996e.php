<?php

/* :Page:signature.html.twig */
class __TwigTemplate_f90189934940a7f11664b0fd7f6287e26a399574bee4e43bf9441b184e4835db extends Twig_Template
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
        $__internal_f484e18494a3a924cce21c8c5cb9a904b35443257ecacfafbc96395cb1817f58 = $this->env->getExtension("native_profiler");
        $__internal_f484e18494a3a924cce21c8c5cb9a904b35443257ecacfafbc96395cb1817f58->enter($__internal_f484e18494a3a924cce21c8c5cb9a904b35443257ecacfafbc96395cb1817f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:signature.html.twig"));

        // line 1
        $this->displayBlock('signature', $context, $blocks);
        
        $__internal_f484e18494a3a924cce21c8c5cb9a904b35443257ecacfafbc96395cb1817f58->leave($__internal_f484e18494a3a924cce21c8c5cb9a904b35443257ecacfafbc96395cb1817f58_prof);

    }

    public function block_signature($context, array $blocks = array())
    {
        $__internal_cad162d46a05246e51b1eff7ffba772d05147297880e5c3bc1dacc6953cee036 = $this->env->getExtension("native_profiler");
        $__internal_cad162d46a05246e51b1eff7ffba772d05147297880e5c3bc1dacc6953cee036->enter($__internal_cad162d46a05246e51b1eff7ffba772d05147297880e5c3bc1dacc6953cee036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "signature"));

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
        
        $__internal_cad162d46a05246e51b1eff7ffba772d05147297880e5c3bc1dacc6953cee036->leave($__internal_cad162d46a05246e51b1eff7ffba772d05147297880e5c3bc1dacc6953cee036_prof);

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
