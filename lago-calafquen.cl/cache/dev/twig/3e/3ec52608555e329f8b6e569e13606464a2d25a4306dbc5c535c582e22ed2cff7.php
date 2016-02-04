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
        $__internal_7c9ef8e22130613dc4a7ebbd10bc918c774c4da9c1e635a89ababe2a4b2a88ca = $this->env->getExtension("native_profiler");
        $__internal_7c9ef8e22130613dc4a7ebbd10bc918c774c4da9c1e635a89ababe2a4b2a88ca->enter($__internal_7c9ef8e22130613dc4a7ebbd10bc918c774c4da9c1e635a89ababe2a4b2a88ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_7c9ef8e22130613dc4a7ebbd10bc918c774c4da9c1e635a89ababe2a4b2a88ca->leave($__internal_7c9ef8e22130613dc4a7ebbd10bc918c774c4da9c1e635a89ababe2a4b2a88ca_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_77526c065ac3352e3221bb006a0df1ab0bb62a522bbba95bf7091fba7295122a = $this->env->getExtension("native_profiler");
        $__internal_77526c065ac3352e3221bb006a0df1ab0bb62a522bbba95bf7091fba7295122a->enter($__internal_77526c065ac3352e3221bb006a0df1ab0bb62a522bbba95bf7091fba7295122a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_77526c065ac3352e3221bb006a0df1ab0bb62a522bbba95bf7091fba7295122a->leave($__internal_77526c065ac3352e3221bb006a0df1ab0bb62a522bbba95bf7091fba7295122a_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_f841871b680f3cde5adf3ef164509bd23bd74cbd0e7c2a2f3e4a7d4504236f4c = $this->env->getExtension("native_profiler");
        $__internal_f841871b680f3cde5adf3ef164509bd23bd74cbd0e7c2a2f3e4a7d4504236f4c->enter($__internal_f841871b680f3cde5adf3ef164509bd23bd74cbd0e7c2a2f3e4a7d4504236f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f841871b680f3cde5adf3ef164509bd23bd74cbd0e7c2a2f3e4a7d4504236f4c->leave($__internal_f841871b680f3cde5adf3ef164509bd23bd74cbd0e7c2a2f3e4a7d4504236f4c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_88cb56e4c2629982d791335f9cfdf7f8d6b7332688b268f4f47535cfdab7a1c9 = $this->env->getExtension("native_profiler");
        $__internal_88cb56e4c2629982d791335f9cfdf7f8d6b7332688b268f4f47535cfdab7a1c9->enter($__internal_88cb56e4c2629982d791335f9cfdf7f8d6b7332688b268f4f47535cfdab7a1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88cb56e4c2629982d791335f9cfdf7f8d6b7332688b268f4f47535cfdab7a1c9->leave($__internal_88cb56e4c2629982d791335f9cfdf7f8d6b7332688b268f4f47535cfdab7a1c9_prof);

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
