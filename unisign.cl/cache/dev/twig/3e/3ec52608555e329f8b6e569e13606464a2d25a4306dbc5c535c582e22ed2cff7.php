<?php

/* BraincraftedBootstrapBundle::layout.html.twig */
class __TwigTemplate_93e6283a26ff6df011dc8108abab0c9aa0153b2bb0acdce744e86127477c4ed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61cc16d65fc30a821391006ddda0f163e1d671a8dae8325a0910e2b4bd3c7e7b = $this->env->getExtension("native_profiler");
        $__internal_61cc16d65fc30a821391006ddda0f163e1d671a8dae8325a0910e2b4bd3c7e7b->enter($__internal_61cc16d65fc30a821391006ddda0f163e1d671a8dae8325a0910e2b4bd3c7e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>

<title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<!-- Bootstrap -->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

";
        // line 12
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
</head>

<body>

";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "
<!-- JavaScript plugins (requires jQuery) -->
<script src=\"//code.jquery.com/jquery.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Optionally enable responsive features in IE8 -->
<script src=\"js/respond.js\"></script>

</body>
</html>
";
        
        $__internal_61cc16d65fc30a821391006ddda0f163e1d671a8dae8325a0910e2b4bd3c7e7b->leave($__internal_61cc16d65fc30a821391006ddda0f163e1d671a8dae8325a0910e2b4bd3c7e7b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c5b3f77c2c2e81984d8e9af12b105a1d25ef1134df91d1ce3bf100a761f91e = $this->env->getExtension("native_profiler");
        $__internal_25c5b3f77c2c2e81984d8e9af12b105a1d25ef1134df91d1ce3bf100a761f91e->enter($__internal_25c5b3f77c2c2e81984d8e9af12b105a1d25ef1134df91d1ce3bf100a761f91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_25c5b3f77c2c2e81984d8e9af12b105a1d25ef1134df91d1ce3bf100a761f91e->leave($__internal_25c5b3f77c2c2e81984d8e9af12b105a1d25ef1134df91d1ce3bf100a761f91e_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_817198d0954ef7b20d26e4bd7964843a6a549ebae1879f1c2d70f5f72dc553f3 = $this->env->getExtension("native_profiler");
        $__internal_817198d0954ef7b20d26e4bd7964843a6a549ebae1879f1c2d70f5f72dc553f3->enter($__internal_817198d0954ef7b20d26e4bd7964843a6a549ebae1879f1c2d70f5f72dc553f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_817198d0954ef7b20d26e4bd7964843a6a549ebae1879f1c2d70f5f72dc553f3->leave($__internal_817198d0954ef7b20d26e4bd7964843a6a549ebae1879f1c2d70f5f72dc553f3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f79130296afcda2ad15454b0f0fcf1c73f5ccdecbaa548035e397e008f5e9de6 = $this->env->getExtension("native_profiler");
        $__internal_f79130296afcda2ad15454b0f0fcf1c73f5ccdecbaa548035e397e008f5e9de6->enter($__internal_f79130296afcda2ad15454b0f0fcf1c73f5ccdecbaa548035e397e008f5e9de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f79130296afcda2ad15454b0f0fcf1c73f5ccdecbaa548035e397e008f5e9de6->leave($__internal_f79130296afcda2ad15454b0f0fcf1c73f5ccdecbaa548035e397e008f5e9de6_prof);

    }

    public function getTemplateName()
    {
        return "BraincraftedBootstrapBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  88 => 12,  76 => 6,  61 => 23,  55 => 19,  53 => 18,  46 => 13,  44 => 12,  39 => 10,  32 => 6,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/* */
/* <title>{% block title %}BraincraftedBootstrapBundle by Florian Eckerstorfer{% endblock title %}</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/* <!-- Bootstrap -->*/
/* <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* */
/* {% block head %}{% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {% block body %}{% endblock body %}*/
/* */
/* <!-- JavaScript plugins (requires jQuery) -->*/
/* <script src="//code.jquery.com/jquery.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ asset('/js/bootstrap.js') }}"></script>*/
/* */
/* <!-- Optionally enable responsive features in IE8 -->*/
/* <script src="js/respond.js"></script>*/
/* */
/* </body>*/
/* </html>*/
/* */
