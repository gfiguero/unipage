<?php

/* ::uniPage.html.twig */
class __TwigTemplate_1f3346d9579e12372f25e8c2eba58b996db71148b1b50c5661a03d414f855376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_481cc784d385db4f8f5a8692fedf671a3a2c4910a196ff2ca21b9e86bd9e7859 = $this->env->getExtension("native_profiler");
        $__internal_481cc784d385db4f8f5a8692fedf671a3a2c4910a196ff2ca21b9e86bd9e7859->enter($__internal_481cc784d385db4f8f5a8692fedf671a3a2c4910a196ff2ca21b9e86bd9e7859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::uniPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
    <title>uniPage</title>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniPage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/modernizr-2.7.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 23
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 24
        echo "</head>

<body class=\"loading\">

    ";
        // line 28
        $this->loadTemplate(":Files:navigation.html.twig", "::uniPage.html.twig", 28)->display($context);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 37
        $this->displayBlock('javascript', $context, $blocks);
        // line 38
        echo "
</body>

</html>
";
        
        $__internal_481cc784d385db4f8f5a8692fedf671a3a2c4910a196ff2ca21b9e86bd9e7859->leave($__internal_481cc784d385db4f8f5a8692fedf671a3a2c4910a196ff2ca21b9e86bd9e7859_prof);

    }

    // line 23
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2b3178509110096ceb940903dccebc94dba13eddecf1402c0269052d90b8ac02 = $this->env->getExtension("native_profiler");
        $__internal_2b3178509110096ceb940903dccebc94dba13eddecf1402c0269052d90b8ac02->enter($__internal_2b3178509110096ceb940903dccebc94dba13eddecf1402c0269052d90b8ac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_2b3178509110096ceb940903dccebc94dba13eddecf1402c0269052d90b8ac02->leave($__internal_2b3178509110096ceb940903dccebc94dba13eddecf1402c0269052d90b8ac02_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_0e48170a48c8a5581b2aa10a3b15b242c4c3600e7831494b8066380b2270081d = $this->env->getExtension("native_profiler");
        $__internal_0e48170a48c8a5581b2aa10a3b15b242c4c3600e7831494b8066380b2270081d->enter($__internal_0e48170a48c8a5581b2aa10a3b15b242c4c3600e7831494b8066380b2270081d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_0e48170a48c8a5581b2aa10a3b15b242c4c3600e7831494b8066380b2270081d->leave($__internal_0e48170a48c8a5581b2aa10a3b15b242c4c3600e7831494b8066380b2270081d_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_70db6ec6e267a61e9f284b66fc88044dcd73f774497426cb492af0a0ae62928e = $this->env->getExtension("native_profiler");
        $__internal_70db6ec6e267a61e9f284b66fc88044dcd73f774497426cb492af0a0ae62928e->enter($__internal_70db6ec6e267a61e9f284b66fc88044dcd73f774497426cb492af0a0ae62928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70db6ec6e267a61e9f284b66fc88044dcd73f774497426cb492af0a0ae62928e->leave($__internal_70db6ec6e267a61e9f284b66fc88044dcd73f774497426cb492af0a0ae62928e_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9667e382ad7bb1015f0e5716fd5ae966f534dc4217bed90d2b463ffbb206b82b = $this->env->getExtension("native_profiler");
        $__internal_9667e382ad7bb1015f0e5716fd5ae966f534dc4217bed90d2b463ffbb206b82b->enter($__internal_9667e382ad7bb1015f0e5716fd5ae966f534dc4217bed90d2b463ffbb206b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9667e382ad7bb1015f0e5716fd5ae966f534dc4217bed90d2b463ffbb206b82b->leave($__internal_9667e382ad7bb1015f0e5716fd5ae966f534dc4217bed90d2b463ffbb206b82b_prof);

    }

    public function getTemplateName()
    {
        return "::uniPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  129 => 32,  118 => 30,  107 => 23,  96 => 38,  94 => 37,  90 => 36,  86 => 35,  82 => 34,  79 => 33,  77 => 32,  74 => 31,  72 => 30,  69 => 29,  67 => 28,  61 => 24,  59 => 23,  49 => 16,  45 => 15,  41 => 14,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!-->*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="uniSign">*/
/*     <title>uniPage</title>*/
/*     <link href="{{ asset('css/uniPage.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet" />*/
/*     <script src="{{ asset('js/modernizr-2.7.1.min.js') }}"></script>*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     {% block stylesheet %}{% endblock %}*/
/* </head>*/
/* */
/* <body class="loading">*/
/* */
/*     {% include ':Files:navigation.html.twig' %}*/
/* */
/*     {% block header %}{% endblock %}*/
/* */
/*     {% block body %}{% endblock %}*/
/* */
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*     {% block javascript %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
