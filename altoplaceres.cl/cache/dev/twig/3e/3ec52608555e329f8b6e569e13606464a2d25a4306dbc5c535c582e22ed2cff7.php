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
        $__internal_aeb4680f65a48b0a9f23e5e3a52c8e6b6ad07035ade826c41b3f2912f56d7a2f = $this->env->getExtension("native_profiler");
        $__internal_aeb4680f65a48b0a9f23e5e3a52c8e6b6ad07035ade826c41b3f2912f56d7a2f->enter($__internal_aeb4680f65a48b0a9f23e5e3a52c8e6b6ad07035ade826c41b3f2912f56d7a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_aeb4680f65a48b0a9f23e5e3a52c8e6b6ad07035ade826c41b3f2912f56d7a2f->leave($__internal_aeb4680f65a48b0a9f23e5e3a52c8e6b6ad07035ade826c41b3f2912f56d7a2f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b4454c2bbd4404938d8b06b85c5d0e5a46f4174486507f5bd40169ed1079061 = $this->env->getExtension("native_profiler");
        $__internal_0b4454c2bbd4404938d8b06b85c5d0e5a46f4174486507f5bd40169ed1079061->enter($__internal_0b4454c2bbd4404938d8b06b85c5d0e5a46f4174486507f5bd40169ed1079061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_0b4454c2bbd4404938d8b06b85c5d0e5a46f4174486507f5bd40169ed1079061->leave($__internal_0b4454c2bbd4404938d8b06b85c5d0e5a46f4174486507f5bd40169ed1079061_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_17543f8fe0b59fbe3a3083e3f3e296ac2302cb682b730bab110b6268f428fdf8 = $this->env->getExtension("native_profiler");
        $__internal_17543f8fe0b59fbe3a3083e3f3e296ac2302cb682b730bab110b6268f428fdf8->enter($__internal_17543f8fe0b59fbe3a3083e3f3e296ac2302cb682b730bab110b6268f428fdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_17543f8fe0b59fbe3a3083e3f3e296ac2302cb682b730bab110b6268f428fdf8->leave($__internal_17543f8fe0b59fbe3a3083e3f3e296ac2302cb682b730bab110b6268f428fdf8_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e4659ed10cd20196fc4e81e78033f65c8ad2d043c0247b6b0ab051575eb51e8 = $this->env->getExtension("native_profiler");
        $__internal_5e4659ed10cd20196fc4e81e78033f65c8ad2d043c0247b6b0ab051575eb51e8->enter($__internal_5e4659ed10cd20196fc4e81e78033f65c8ad2d043c0247b6b0ab051575eb51e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5e4659ed10cd20196fc4e81e78033f65c8ad2d043c0247b6b0ab051575eb51e8->leave($__internal_5e4659ed10cd20196fc4e81e78033f65c8ad2d043c0247b6b0ab051575eb51e8_prof);

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
