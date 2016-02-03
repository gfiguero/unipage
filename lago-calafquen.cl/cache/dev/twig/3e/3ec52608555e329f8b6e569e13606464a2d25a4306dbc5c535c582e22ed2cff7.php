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
        $__internal_9a563d191e79ad4f6c1e7d0f1a878fdedb9df7216468409f25275a45b9f3c835 = $this->env->getExtension("native_profiler");
        $__internal_9a563d191e79ad4f6c1e7d0f1a878fdedb9df7216468409f25275a45b9f3c835->enter($__internal_9a563d191e79ad4f6c1e7d0f1a878fdedb9df7216468409f25275a45b9f3c835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BraincraftedBootstrapBundle::layout.html.twig"));

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
        
        $__internal_9a563d191e79ad4f6c1e7d0f1a878fdedb9df7216468409f25275a45b9f3c835->leave($__internal_9a563d191e79ad4f6c1e7d0f1a878fdedb9df7216468409f25275a45b9f3c835_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2e37dfbd879331e6d112f1048eb8760420a0e11d7ec25070f09314d7e9ecd3a = $this->env->getExtension("native_profiler");
        $__internal_f2e37dfbd879331e6d112f1048eb8760420a0e11d7ec25070f09314d7e9ecd3a->enter($__internal_f2e37dfbd879331e6d112f1048eb8760420a0e11d7ec25070f09314d7e9ecd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BraincraftedBootstrapBundle by Florian Eckerstorfer";
        
        $__internal_f2e37dfbd879331e6d112f1048eb8760420a0e11d7ec25070f09314d7e9ecd3a->leave($__internal_f2e37dfbd879331e6d112f1048eb8760420a0e11d7ec25070f09314d7e9ecd3a_prof);

    }

    // line 12
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4186fe68abc43583cadf1963568fb2b3ff4d13a1fbbd02b3d969adf256ba869 = $this->env->getExtension("native_profiler");
        $__internal_f4186fe68abc43583cadf1963568fb2b3ff4d13a1fbbd02b3d969adf256ba869->enter($__internal_f4186fe68abc43583cadf1963568fb2b3ff4d13a1fbbd02b3d969adf256ba869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f4186fe68abc43583cadf1963568fb2b3ff4d13a1fbbd02b3d969adf256ba869->leave($__internal_f4186fe68abc43583cadf1963568fb2b3ff4d13a1fbbd02b3d969adf256ba869_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcb5cba5d1994869e7db5c1da30af8391f198f29b562a0fae91d3e040919bd22 = $this->env->getExtension("native_profiler");
        $__internal_fcb5cba5d1994869e7db5c1da30af8391f198f29b562a0fae91d3e040919bd22->enter($__internal_fcb5cba5d1994869e7db5c1da30af8391f198f29b562a0fae91d3e040919bd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcb5cba5d1994869e7db5c1da30af8391f198f29b562a0fae91d3e040919bd22->leave($__internal_fcb5cba5d1994869e7db5c1da30af8391f198f29b562a0fae91d3e040919bd22_prof);

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
