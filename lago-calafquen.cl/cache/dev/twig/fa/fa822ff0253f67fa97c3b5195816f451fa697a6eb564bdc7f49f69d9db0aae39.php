<?php

/* :Page:javascript.html.twig */
class __TwigTemplate_6c282e5ac0cb0097bb9905d22a292facee8878fa486b4517b461ac22f3751511 extends Twig_Template
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
        $__internal_b92787d515285dcf8909a07c39eb6d5aa89a3fd26e033441f1f3f5bdd9b3612f = $this->env->getExtension("native_profiler");
        $__internal_b92787d515285dcf8909a07c39eb6d5aa89a3fd26e033441f1f3f5bdd9b3612f->enter($__internal_b92787d515285dcf8909a07c39eb6d5aa89a3fd26e033441f1f3f5bdd9b3612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:javascript.html.twig"));

        // line 1
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_b92787d515285dcf8909a07c39eb6d5aa89a3fd26e033441f1f3f5bdd9b3612f->leave($__internal_b92787d515285dcf8909a07c39eb6d5aa89a3fd26e033441f1f3f5bdd9b3612f_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9a1820054f364ccd0f613bed8b01c70ce4c7e491b6abe79d920023f6b0753173 = $this->env->getExtension("native_profiler");
        $__internal_9a1820054f364ccd0f613bed8b01c70ce4c7e491b6abe79d920023f6b0753173->enter($__internal_9a1820054f364ccd0f613bed8b01c70ce4c7e491b6abe79d920023f6b0753173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_9a1820054f364ccd0f613bed8b01c70ce4c7e491b6abe79d920023f6b0753173->leave($__internal_9a1820054f364ccd0f613bed8b01c70ce4c7e491b6abe79d920023f6b0753173_prof);

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
