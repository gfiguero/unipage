<?php

/* :Admin:base.html.twig */
class __TwigTemplate_ead763f11e67a1f47bb8605f127fc42df5d5302059812751e23f66556fec1c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate(":Admin:navbar.html.twig", ":Admin:base.html.twig", 43);
        // line 43
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Admin:navbar.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'stylesheet' => array($this, 'block_stylesheet'),
                'navbar' => array($this, 'block_navbar'),
                'body' => array($this, 'block_body'),
                'javascript' => array($this, 'block_javascript'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba1293784150a839ca90fd1e7487003e11a0fd1f5312c008c28a882ec428d215 = $this->env->getExtension("native_profiler");
        $__internal_ba1293784150a839ca90fd1e7487003e11a0fd1f5312c008c28a882ec428d215->enter($__internal_ba1293784150a839ca90fd1e7487003e11a0fd1f5312c008c28a882ec428d215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:base.html.twig"));

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
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniAdmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fileinput.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-57x57.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-60x60.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-72x72.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-76x76.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-114x114.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-120x120.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-144x144.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-152x152.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/apple-icon-180x180.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\"  href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/android-icon-192x192.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"96x96\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/favicon-96x96.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/manifest.json"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#ffffff\">
    <meta name=\"msapplication-TileImage\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("icon/ms-icon-144x144.png"), "html", null, true);
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    ";
        // line 40
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 41
        echo "</head>
<body>
    ";
        // line 43
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniAdmin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 48
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "</body>
</html>
";
        
        $__internal_ba1293784150a839ca90fd1e7487003e11a0fd1f5312c008c28a882ec428d215->leave($__internal_ba1293784150a839ca90fd1e7487003e11a0fd1f5312c008c28a882ec428d215_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_147648a0906c4f8014e241bffe107059bea3f708370f69583173e227352500dc = $this->env->getExtension("native_profiler");
        $__internal_147648a0906c4f8014e241bffe107059bea3f708370f69583173e227352500dc->enter($__internal_147648a0906c4f8014e241bffe107059bea3f708370f69583173e227352500dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_147648a0906c4f8014e241bffe107059bea3f708370f69583173e227352500dc->leave($__internal_147648a0906c4f8014e241bffe107059bea3f708370f69583173e227352500dc_prof);

    }

    // line 40
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_630f02964ef035134f146136e7be0b8757f076967faf1f87e2d128ad63ec5da9 = $this->env->getExtension("native_profiler");
        $__internal_630f02964ef035134f146136e7be0b8757f076967faf1f87e2d128ad63ec5da9->enter($__internal_630f02964ef035134f146136e7be0b8757f076967faf1f87e2d128ad63ec5da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_630f02964ef035134f146136e7be0b8757f076967faf1f87e2d128ad63ec5da9->leave($__internal_630f02964ef035134f146136e7be0b8757f076967faf1f87e2d128ad63ec5da9_prof);

    }

    // line 43
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_e9f8dc4afce9582c479a2712a9121140042e65761e46003867317117eae102ef = $this->env->getExtension("native_profiler");
        $__internal_e9f8dc4afce9582c479a2712a9121140042e65761e46003867317117eae102ef->enter($__internal_e9f8dc4afce9582c479a2712a9121140042e65761e46003867317117eae102ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $this->displayParentBlock("navbar", $context, $blocks);
        
        $__internal_e9f8dc4afce9582c479a2712a9121140042e65761e46003867317117eae102ef->leave($__internal_e9f8dc4afce9582c479a2712a9121140042e65761e46003867317117eae102ef_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_7166b4b3aa9d3b108aac53a48868ac3a129d251487b09c5bf81489dbb6f8a9bb = $this->env->getExtension("native_profiler");
        $__internal_7166b4b3aa9d3b108aac53a48868ac3a129d251487b09c5bf81489dbb6f8a9bb->enter($__internal_7166b4b3aa9d3b108aac53a48868ac3a129d251487b09c5bf81489dbb6f8a9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7166b4b3aa9d3b108aac53a48868ac3a129d251487b09c5bf81489dbb6f8a9bb->leave($__internal_7166b4b3aa9d3b108aac53a48868ac3a129d251487b09c5bf81489dbb6f8a9bb_prof);

    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6ffebb3b9edbdebbddfb4ebf32f0e99d1774bf1cedb910d57f00a8cfa2f604b4 = $this->env->getExtension("native_profiler");
        $__internal_6ffebb3b9edbdebbddfb4ebf32f0e99d1774bf1cedb910d57f00a8cfa2f604b4->enter($__internal_6ffebb3b9edbdebbddfb4ebf32f0e99d1774bf1cedb910d57f00a8cfa2f604b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_6ffebb3b9edbdebbddfb4ebf32f0e99d1774bf1cedb910d57f00a8cfa2f604b4->leave($__internal_6ffebb3b9edbdebbddfb4ebf32f0e99d1774bf1cedb910d57f00a8cfa2f604b4_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 48,  206 => 44,  194 => 43,  183 => 40,  172 => 13,  163 => 49,  161 => 48,  157 => 47,  153 => 46,  148 => 45,  145 => 44,  143 => 43,  139 => 41,  137 => 40,  132 => 38,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  39 => 1,  14 => 43,);
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
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <link href="{{ asset('css/uniAdmin.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">*/
/*     <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">*/
/*     <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icon/android-icon-192x192.png') }}">*/
/*     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">*/
/*     <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">*/
/*     <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">*/
/*     <link rel="manifest" href="{{ asset('icon/manifest.json') }}">*/
/*     <meta name="msapplication-TileColor" content="#ffffff">*/
/*     <meta name="msapplication-TileImage" content="{{ asset('icon/ms-icon-144x144.png') }}">*/
/*     <meta name="theme-color" content="#ffffff">*/
/*     {% block stylesheet %}{% endblock %}*/
/* </head>*/
/* <body>*/
/*     {% use ':Admin:navbar.html.twig' %}{% block navbar %}{{ parent() }}{% endblock %}*/
/*     {% block body %}{% endblock %}*/
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/uniAdmin.js') }}"></script>*/
/*     <script src="{{ asset('js/fileinput.min.js') }}"></script>*/
/*     {% block javascript %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
