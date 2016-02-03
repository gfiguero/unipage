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
        $__internal_957b1e3adc72025fe674c00c18cb340f8170a99749305ab68d82c07078cdbfb2 = $this->env->getExtension("native_profiler");
        $__internal_957b1e3adc72025fe674c00c18cb340f8170a99749305ab68d82c07078cdbfb2->enter($__internal_957b1e3adc72025fe674c00c18cb340f8170a99749305ab68d82c07078cdbfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:login.html.twig"));

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
        
        $__internal_957b1e3adc72025fe674c00c18cb340f8170a99749305ab68d82c07078cdbfb2->leave($__internal_957b1e3adc72025fe674c00c18cb340f8170a99749305ab68d82c07078cdbfb2_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c061c12d420e01b7a0d3ec1517ba084d23da761df45cc7a2f0472695d025c311 = $this->env->getExtension("native_profiler");
        $__internal_c061c12d420e01b7a0d3ec1517ba084d23da761df45cc7a2f0472695d025c311->enter($__internal_c061c12d420e01b7a0d3ec1517ba084d23da761df45cc7a2f0472695d025c311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_c061c12d420e01b7a0d3ec1517ba084d23da761df45cc7a2f0472695d025c311->leave($__internal_c061c12d420e01b7a0d3ec1517ba084d23da761df45cc7a2f0472695d025c311_prof);

    }

    // line 23
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_c82ed5c8ffc6c55a4f94d289cb3769f2aa402dc1d1159e52ff63a34f440895c7 = $this->env->getExtension("native_profiler");
        $__internal_c82ed5c8ffc6c55a4f94d289cb3769f2aa402dc1d1159e52ff63a34f440895c7->enter($__internal_c82ed5c8ffc6c55a4f94d289cb3769f2aa402dc1d1159e52ff63a34f440895c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        
        $__internal_c82ed5c8ffc6c55a4f94d289cb3769f2aa402dc1d1159e52ff63a34f440895c7->leave($__internal_c82ed5c8ffc6c55a4f94d289cb3769f2aa402dc1d1159e52ff63a34f440895c7_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ac859d308fd6b9c88a6ceff8722d092d28bdb46f98e0e4309979697d77631bd2 = $this->env->getExtension("native_profiler");
        $__internal_ac859d308fd6b9c88a6ceff8722d092d28bdb46f98e0e4309979697d77631bd2->enter($__internal_ac859d308fd6b9c88a6ceff8722d092d28bdb46f98e0e4309979697d77631bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_ac859d308fd6b9c88a6ceff8722d092d28bdb46f98e0e4309979697d77631bd2->leave($__internal_ac859d308fd6b9c88a6ceff8722d092d28bdb46f98e0e4309979697d77631bd2_prof);

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
