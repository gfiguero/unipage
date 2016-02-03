<?php

/* :Page:javascript.html.twig */
class __TwigTemplate_ed6bdd1e5300e1e5cc26b2901791b78e6d4f8e3d2dbc0382d40b9d2ccc118136 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc8db7acbc0960ef76b504dd273b90b4233b8173ab5d817bd5fddb66c7263396 = $this->env->getExtension("native_profiler");
        $__internal_bc8db7acbc0960ef76b504dd273b90b4233b8173ab5d817bd5fddb66c7263396->enter($__internal_bc8db7acbc0960ef76b504dd273b90b4233b8173ab5d817bd5fddb66c7263396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:javascript.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_bc8db7acbc0960ef76b504dd273b90b4233b8173ab5d817bd5fddb66c7263396->leave($__internal_bc8db7acbc0960ef76b504dd273b90b4233b8173ab5d817bd5fddb66c7263396_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fc1b9cb14b9ab0c1305302e8c14b344e985b7f0133ad4810f8d484e57c5a6284 = $this->env->getExtension("native_profiler");
        $__internal_fc1b9cb14b9ab0c1305302e8c14b344e985b7f0133ad4810f8d484e57c5a6284->enter($__internal_fc1b9cb14b9ab0c1305302e8c14b344e985b7f0133ad4810f8d484e57c5a6284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 2
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniPage.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_fc1b9cb14b9ab0c1305302e8c14b344e985b7f0133ad4810f8d484e57c5a6284->leave($__internal_fc1b9cb14b9ab0c1305302e8c14b344e985b7f0133ad4810f8d484e57c5a6284_prof);

    }

    public function getTemplateName()
    {
        return ":Page:javascript.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block javascript %}*/
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('js/uniPage.js') }}"></script>*/
/* {% endblock %}*/
