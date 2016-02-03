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
        $__internal_a556ec2a86666db876f112e25c6877cbdc948beaa1b8eb8e0782b66336f2ff4f = $this->env->getExtension("native_profiler");
        $__internal_a556ec2a86666db876f112e25c6877cbdc948beaa1b8eb8e0782b66336f2ff4f->enter($__internal_a556ec2a86666db876f112e25c6877cbdc948beaa1b8eb8e0782b66336f2ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_a556ec2a86666db876f112e25c6877cbdc948beaa1b8eb8e0782b66336f2ff4f->leave($__internal_a556ec2a86666db876f112e25c6877cbdc948beaa1b8eb8e0782b66336f2ff4f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ee5c72df753bfb748653a58797559a834acbd523f88f06a11a7dcb8d3cec0e3 = $this->env->getExtension("native_profiler");
        $__internal_1ee5c72df753bfb748653a58797559a834acbd523f88f06a11a7dcb8d3cec0e3->enter($__internal_1ee5c72df753bfb748653a58797559a834acbd523f88f06a11a7dcb8d3cec0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_1ee5c72df753bfb748653a58797559a834acbd523f88f06a11a7dcb8d3cec0e3->leave($__internal_1ee5c72df753bfb748653a58797559a834acbd523f88f06a11a7dcb8d3cec0e3_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_683bdb9120978e5de4f5c586af147ea432f675a44768e91f715e52ea57115a4f = $this->env->getExtension("native_profiler");
        $__internal_683bdb9120978e5de4f5c586af147ea432f675a44768e91f715e52ea57115a4f->enter($__internal_683bdb9120978e5de4f5c586af147ea432f675a44768e91f715e52ea57115a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_683bdb9120978e5de4f5c586af147ea432f675a44768e91f715e52ea57115a4f->leave($__internal_683bdb9120978e5de4f5c586af147ea432f675a44768e91f715e52ea57115a4f_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc06f0232e4e4b4156c632c0697f5a830be64f3c4c7633505491f47cb2b4527a = $this->env->getExtension("native_profiler");
        $__internal_fc06f0232e4e4b4156c632c0697f5a830be64f3c4c7633505491f47cb2b4527a->enter($__internal_fc06f0232e4e4b4156c632c0697f5a830be64f3c4c7633505491f47cb2b4527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc06f0232e4e4b4156c632c0697f5a830be64f3c4c7633505491f47cb2b4527a->leave($__internal_fc06f0232e4e4b4156c632c0697f5a830be64f3c4c7633505491f47cb2b4527a_prof);

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
