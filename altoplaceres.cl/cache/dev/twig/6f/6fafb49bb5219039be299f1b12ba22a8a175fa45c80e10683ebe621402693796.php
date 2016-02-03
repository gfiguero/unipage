<?php

/* :Admin:login.html.twig */
class __TwigTemplate_d04f049142680ebe4d5e1cd74b16e4c124a8e301501f2e851df55bf4f0365bb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'user_content' => array($this, 'block_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ae2ffc5969683b0b30a13db78bc089a94d44e55fa880bb353d200c982794afb = $this->env->getExtension("native_profiler");
        $__internal_0ae2ffc5969683b0b30a13db78bc089a94d44e55fa880bb353d200c982794afb->enter($__internal_0ae2ffc5969683b0b30a13db78bc089a94d44e55fa880bb353d200c982794afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>uniAdmin - Login</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniAdmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 18
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 19
        echo "</head>

<body>

    ";
        // line 23
        $this->displayBlock('user_content', $context, $blocks);
        // line 24
        echo "
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniAdmin.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 28
        $this->displayBlock('javascript', $context, $blocks);
        // line 29
        echo "
</body>

</html>
";
        
        $__internal_0ae2ffc5969683b0b30a13db78bc089a94d44e55fa880bb353d200c982794afb->leave($__internal_0ae2ffc5969683b0b30a13db78bc089a94d44e55fa880bb353d200c982794afb_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3e94639217d0dbf347582273bb50cd34409daccbe8e8f674aa95573a1cabcb0a = $this->env->getExtension("native_profiler");
        $__internal_3e94639217d0dbf347582273bb50cd34409daccbe8e8f674aa95573a1cabcb0a->enter($__internal_3e94639217d0dbf347582273bb50cd34409daccbe8e8f674aa95573a1cabcb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_3e94639217d0dbf347582273bb50cd34409daccbe8e8f674aa95573a1cabcb0a->leave($__internal_3e94639217d0dbf347582273bb50cd34409daccbe8e8f674aa95573a1cabcb0a_prof);

    }

    // line 23
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_0dc4d574627bc42224d5b2cab7a5a0aeaa0031fcd9d0ad8f8db89e2da73c26b4 = $this->env->getExtension("native_profiler");
        $__internal_0dc4d574627bc42224d5b2cab7a5a0aeaa0031fcd9d0ad8f8db89e2da73c26b4->enter($__internal_0dc4d574627bc42224d5b2cab7a5a0aeaa0031fcd9d0ad8f8db89e2da73c26b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        
        $__internal_0dc4d574627bc42224d5b2cab7a5a0aeaa0031fcd9d0ad8f8db89e2da73c26b4->leave($__internal_0dc4d574627bc42224d5b2cab7a5a0aeaa0031fcd9d0ad8f8db89e2da73c26b4_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0723c3d6634ee949a1aa6064eba3ab6ce7aeb989b56fc53bbb66c458ab825089 = $this->env->getExtension("native_profiler");
        $__internal_0723c3d6634ee949a1aa6064eba3ab6ce7aeb989b56fc53bbb66c458ab825089->enter($__internal_0723c3d6634ee949a1aa6064eba3ab6ce7aeb989b56fc53bbb66c458ab825089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_0723c3d6634ee949a1aa6064eba3ab6ce7aeb989b56fc53bbb66c458ab825089->leave($__internal_0723c3d6634ee949a1aa6064eba3ab6ce7aeb989b56fc53bbb66c458ab825089_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  99 => 23,  88 => 18,  77 => 29,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  60 => 24,  58 => 23,  52 => 19,  50 => 18,  40 => 11,  36 => 10,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <title>uniAdmin - Login</title>*/
/*     <link href="{{ asset('css/uniAdmin.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     {% block stylesheet %}{% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/*     {% block user_content %}{% endblock %}*/
/* */
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/uniAdmin.js') }}"></script>*/
/*     <script src="{{ asset('js/fileinput.min.js') }}"></script>*/
/*     {% block javascript %}{% endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
