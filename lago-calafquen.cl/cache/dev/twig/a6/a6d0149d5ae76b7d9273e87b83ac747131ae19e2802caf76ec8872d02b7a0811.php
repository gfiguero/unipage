<?php

/* :Admin:login.html.twig */
class __TwigTemplate_c3794112cf1021c13b68a95d7f0cc17ff9ea50982c4a480a75e2b39c773855f9 extends Twig_Template
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
        $__internal_c0b6e459452be52c7c664a5effb6f1630a9747519d430882c945872f842597e1 = $this->env->getExtension("native_profiler");
        $__internal_c0b6e459452be52c7c664a5effb6f1630a9747519d430882c945872f842597e1->enter($__internal_c0b6e459452be52c7c664a5effb6f1630a9747519d430882c945872f842597e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:login.html.twig"));

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
        
        $__internal_c0b6e459452be52c7c664a5effb6f1630a9747519d430882c945872f842597e1->leave($__internal_c0b6e459452be52c7c664a5effb6f1630a9747519d430882c945872f842597e1_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cd02e76be0a60a3496326ba98dd5abd82d2259b0ea9cce8b0cd17a5f5c1743b8 = $this->env->getExtension("native_profiler");
        $__internal_cd02e76be0a60a3496326ba98dd5abd82d2259b0ea9cce8b0cd17a5f5c1743b8->enter($__internal_cd02e76be0a60a3496326ba98dd5abd82d2259b0ea9cce8b0cd17a5f5c1743b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_cd02e76be0a60a3496326ba98dd5abd82d2259b0ea9cce8b0cd17a5f5c1743b8->leave($__internal_cd02e76be0a60a3496326ba98dd5abd82d2259b0ea9cce8b0cd17a5f5c1743b8_prof);

    }

    // line 23
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_08ea7ca7b127e09fb11d2f35fb52877c98efaa3a27d930cfc1b90fc9f7af9951 = $this->env->getExtension("native_profiler");
        $__internal_08ea7ca7b127e09fb11d2f35fb52877c98efaa3a27d930cfc1b90fc9f7af9951->enter($__internal_08ea7ca7b127e09fb11d2f35fb52877c98efaa3a27d930cfc1b90fc9f7af9951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        
        $__internal_08ea7ca7b127e09fb11d2f35fb52877c98efaa3a27d930cfc1b90fc9f7af9951->leave($__internal_08ea7ca7b127e09fb11d2f35fb52877c98efaa3a27d930cfc1b90fc9f7af9951_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8ee65b69952e35e1fbf8426b930f368eb717ab44a2682cbec87f648e90404ff3 = $this->env->getExtension("native_profiler");
        $__internal_8ee65b69952e35e1fbf8426b930f368eb717ab44a2682cbec87f648e90404ff3->enter($__internal_8ee65b69952e35e1fbf8426b930f368eb717ab44a2682cbec87f648e90404ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_8ee65b69952e35e1fbf8426b930f368eb717ab44a2682cbec87f648e90404ff3->leave($__internal_8ee65b69952e35e1fbf8426b930f368eb717ab44a2682cbec87f648e90404ff3_prof);

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
