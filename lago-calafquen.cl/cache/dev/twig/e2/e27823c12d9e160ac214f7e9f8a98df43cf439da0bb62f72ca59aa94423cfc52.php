<?php

/* ::uniPage.html.twig */
class __TwigTemplate_35330c7cb4b44afab283e2352fae1ddc249ce4225218452461f481d4d1a4c8b8 extends Twig_Template
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
        $__internal_86f40985d23ef507d831bafe1d7d0c2d760ec330bd533a8bcd4b725a2d173d59 = $this->env->getExtension("native_profiler");
        $__internal_86f40985d23ef507d831bafe1d7d0c2d760ec330bd533a8bcd4b725a2d173d59->enter($__internal_86f40985d23ef507d831bafe1d7d0c2d760ec330bd533a8bcd4b725a2d173d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::uniPage.html.twig"));

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
        
        $__internal_86f40985d23ef507d831bafe1d7d0c2d760ec330bd533a8bcd4b725a2d173d59->leave($__internal_86f40985d23ef507d831bafe1d7d0c2d760ec330bd533a8bcd4b725a2d173d59_prof);

    }

    // line 23
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f914894eb1f833dd6010eb95a3941b34cd10d1453d2cf7dfbe1b17f909c39516 = $this->env->getExtension("native_profiler");
        $__internal_f914894eb1f833dd6010eb95a3941b34cd10d1453d2cf7dfbe1b17f909c39516->enter($__internal_f914894eb1f833dd6010eb95a3941b34cd10d1453d2cf7dfbe1b17f909c39516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_f914894eb1f833dd6010eb95a3941b34cd10d1453d2cf7dfbe1b17f909c39516->leave($__internal_f914894eb1f833dd6010eb95a3941b34cd10d1453d2cf7dfbe1b17f909c39516_prof);

    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        $__internal_31469c7309a77bb1982483e8d50370097c33d4fc58c34178994055a5222d2659 = $this->env->getExtension("native_profiler");
        $__internal_31469c7309a77bb1982483e8d50370097c33d4fc58c34178994055a5222d2659->enter($__internal_31469c7309a77bb1982483e8d50370097c33d4fc58c34178994055a5222d2659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_31469c7309a77bb1982483e8d50370097c33d4fc58c34178994055a5222d2659->leave($__internal_31469c7309a77bb1982483e8d50370097c33d4fc58c34178994055a5222d2659_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_81ae2dff9fa0c438622f4961f2f1259bb18d64ae4387a99c47d6e3b96474a830 = $this->env->getExtension("native_profiler");
        $__internal_81ae2dff9fa0c438622f4961f2f1259bb18d64ae4387a99c47d6e3b96474a830->enter($__internal_81ae2dff9fa0c438622f4961f2f1259bb18d64ae4387a99c47d6e3b96474a830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81ae2dff9fa0c438622f4961f2f1259bb18d64ae4387a99c47d6e3b96474a830->leave($__internal_81ae2dff9fa0c438622f4961f2f1259bb18d64ae4387a99c47d6e3b96474a830_prof);

    }

    // line 37
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4f4f6bc962f6bec05b930e36f868dd9c04617f58611312b9319189d36a12a9c0 = $this->env->getExtension("native_profiler");
        $__internal_4f4f6bc962f6bec05b930e36f868dd9c04617f58611312b9319189d36a12a9c0->enter($__internal_4f4f6bc962f6bec05b930e36f868dd9c04617f58611312b9319189d36a12a9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_4f4f6bc962f6bec05b930e36f868dd9c04617f58611312b9319189d36a12a9c0->leave($__internal_4f4f6bc962f6bec05b930e36f868dd9c04617f58611312b9319189d36a12a9c0_prof);

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
