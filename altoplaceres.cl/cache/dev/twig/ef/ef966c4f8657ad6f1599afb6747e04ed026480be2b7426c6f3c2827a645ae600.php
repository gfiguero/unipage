<?php

/* :Page:javascript.html.twig */
class __TwigTemplate_f4656cffa0924a7e5043112c17bd20da864b57536d6a3532cadec9fcf87cf513 extends Twig_Template
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
        $__internal_906286323a942fce74738c0c0ce01320da0e8e5045c01a18cf744d59e739ec22 = $this->env->getExtension("native_profiler");
        $__internal_906286323a942fce74738c0c0ce01320da0e8e5045c01a18cf744d59e739ec22->enter($__internal_906286323a942fce74738c0c0ce01320da0e8e5045c01a18cf744d59e739ec22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:javascript.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_906286323a942fce74738c0c0ce01320da0e8e5045c01a18cf744d59e739ec22->leave($__internal_906286323a942fce74738c0c0ce01320da0e8e5045c01a18cf744d59e739ec22_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_717b83ac65d7bafd369280e8955d9b1df1d6052cb4b8fd80b4e88ee170ea6d93 = $this->env->getExtension("native_profiler");
        $__internal_717b83ac65d7bafd369280e8955d9b1df1d6052cb4b8fd80b4e88ee170ea6d93->enter($__internal_717b83ac65d7bafd369280e8955d9b1df1d6052cb4b8fd80b4e88ee170ea6d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_717b83ac65d7bafd369280e8955d9b1df1d6052cb4b8fd80b4e88ee170ea6d93->leave($__internal_717b83ac65d7bafd369280e8955d9b1df1d6052cb4b8fd80b4e88ee170ea6d93_prof);

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
