<?php

/* :Admin:login.html.twig */
class __TwigTemplate_b3caa374fe0d3d1c967ca04152cbc7b7c3b34b0ccae352b53254315c4151f3b1 extends Twig_Template
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
        $__internal_cfcde8e5f6f339e17c29f7dc5f9eac3504301c5963be95636eaea441850648f6 = $this->env->getExtension("native_profiler");
        $__internal_cfcde8e5f6f339e17c29f7dc5f9eac3504301c5963be95636eaea441850648f6->enter($__internal_cfcde8e5f6f339e17c29f7dc5f9eac3504301c5963be95636eaea441850648f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:login.html.twig"));

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
        
        $__internal_cfcde8e5f6f339e17c29f7dc5f9eac3504301c5963be95636eaea441850648f6->leave($__internal_cfcde8e5f6f339e17c29f7dc5f9eac3504301c5963be95636eaea441850648f6_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c48226f61b2a0ed6e7f505da8241ebb1102a51cea76a85c6de51d158a02153ee = $this->env->getExtension("native_profiler");
        $__internal_c48226f61b2a0ed6e7f505da8241ebb1102a51cea76a85c6de51d158a02153ee->enter($__internal_c48226f61b2a0ed6e7f505da8241ebb1102a51cea76a85c6de51d158a02153ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_c48226f61b2a0ed6e7f505da8241ebb1102a51cea76a85c6de51d158a02153ee->leave($__internal_c48226f61b2a0ed6e7f505da8241ebb1102a51cea76a85c6de51d158a02153ee_prof);

    }

    // line 23
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_ddf5d484f34cf0ad4cb5d22c48ad46d58de49635a1835f8a118f6656a9b7d974 = $this->env->getExtension("native_profiler");
        $__internal_ddf5d484f34cf0ad4cb5d22c48ad46d58de49635a1835f8a118f6656a9b7d974->enter($__internal_ddf5d484f34cf0ad4cb5d22c48ad46d58de49635a1835f8a118f6656a9b7d974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        
        $__internal_ddf5d484f34cf0ad4cb5d22c48ad46d58de49635a1835f8a118f6656a9b7d974->leave($__internal_ddf5d484f34cf0ad4cb5d22c48ad46d58de49635a1835f8a118f6656a9b7d974_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_91ca821140e24f3145d09615101af41d3be888aae0c25655cd69112b169ed0e1 = $this->env->getExtension("native_profiler");
        $__internal_91ca821140e24f3145d09615101af41d3be888aae0c25655cd69112b169ed0e1->enter($__internal_91ca821140e24f3145d09615101af41d3be888aae0c25655cd69112b169ed0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_91ca821140e24f3145d09615101af41d3be888aae0c25655cd69112b169ed0e1->leave($__internal_91ca821140e24f3145d09615101af41d3be888aae0c25655cd69112b169ed0e1_prof);

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
