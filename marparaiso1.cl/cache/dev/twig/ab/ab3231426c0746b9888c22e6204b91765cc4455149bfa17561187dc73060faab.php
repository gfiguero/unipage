<?php

/* :Admin:login.html.twig */
class __TwigTemplate_2e2c3ae8e0db3441faa3e330b3ebcabaf72c56dc0715b66b72336ca66996045d extends Twig_Template
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
        $__internal_ca4134ae01d8538f1f69977209d8df68ba6624a69a57c8fb3d7361cf307f55d1 = $this->env->getExtension("native_profiler");
        $__internal_ca4134ae01d8538f1f69977209d8df68ba6624a69a57c8fb3d7361cf307f55d1->enter($__internal_ca4134ae01d8538f1f69977209d8df68ba6624a69a57c8fb3d7361cf307f55d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:login.html.twig"));

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
        
        $__internal_ca4134ae01d8538f1f69977209d8df68ba6624a69a57c8fb3d7361cf307f55d1->leave($__internal_ca4134ae01d8538f1f69977209d8df68ba6624a69a57c8fb3d7361cf307f55d1_prof);

    }

    // line 18
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f8d68f86ab1b7307dc5c7369802cb4ddd1e981085729f0f76b5325da7c067c27 = $this->env->getExtension("native_profiler");
        $__internal_f8d68f86ab1b7307dc5c7369802cb4ddd1e981085729f0f76b5325da7c067c27->enter($__internal_f8d68f86ab1b7307dc5c7369802cb4ddd1e981085729f0f76b5325da7c067c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_f8d68f86ab1b7307dc5c7369802cb4ddd1e981085729f0f76b5325da7c067c27->leave($__internal_f8d68f86ab1b7307dc5c7369802cb4ddd1e981085729f0f76b5325da7c067c27_prof);

    }

    // line 23
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_535d0be22cbb1f1cbc6ecc5cd68413fdbf161ecafd1b642c7529a305e8e33502 = $this->env->getExtension("native_profiler");
        $__internal_535d0be22cbb1f1cbc6ecc5cd68413fdbf161ecafd1b642c7529a305e8e33502->enter($__internal_535d0be22cbb1f1cbc6ecc5cd68413fdbf161ecafd1b642c7529a305e8e33502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        
        $__internal_535d0be22cbb1f1cbc6ecc5cd68413fdbf161ecafd1b642c7529a305e8e33502->leave($__internal_535d0be22cbb1f1cbc6ecc5cd68413fdbf161ecafd1b642c7529a305e8e33502_prof);

    }

    // line 28
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3b3d6d66e1f71eedc9df4246a3e8a27990eed4e7125cb51920f3ed0614a0a30c = $this->env->getExtension("native_profiler");
        $__internal_3b3d6d66e1f71eedc9df4246a3e8a27990eed4e7125cb51920f3ed0614a0a30c->enter($__internal_3b3d6d66e1f71eedc9df4246a3e8a27990eed4e7125cb51920f3ed0614a0a30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_3b3d6d66e1f71eedc9df4246a3e8a27990eed4e7125cb51920f3ed0614a0a30c->leave($__internal_3b3d6d66e1f71eedc9df4246a3e8a27990eed4e7125cb51920f3ed0614a0a30c_prof);

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
