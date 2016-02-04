<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_397429ea8b4662e5531c830c4d8173cbaf4dbc65369453ff3a1a50db50141638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73fbe6cdfe2cd63b655482c054c4a66881e814a356072a7aabf32c75291c5308 = $this->env->getExtension("native_profiler");
        $__internal_73fbe6cdfe2cd63b655482c054c4a66881e814a356072a7aabf32c75291c5308->enter($__internal_73fbe6cdfe2cd63b655482c054c4a66881e814a356072a7aabf32c75291c5308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>uniAdmin - Ingreso</title>

    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

</head>

<body>

";
        // line 40
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 41
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <div>
        ";
        // line 49
        $this->displayBlock('user_content', $context, $blocks);
        // line 51
        echo "    </div>

    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_73fbe6cdfe2cd63b655482c054c4a66881e814a356072a7aabf32c75291c5308->leave($__internal_73fbe6cdfe2cd63b655482c054c4a66881e814a356072a7aabf32c75291c5308_prof);

    }

    // line 49
    public function block_user_content($context, array $blocks = array())
    {
        $__internal_f35e4c49a4d310a4dd07ee4b436004ab47c7e24d325e55b04d05f335d992c4d7 = $this->env->getExtension("native_profiler");
        $__internal_f35e4c49a4d310a4dd07ee4b436004ab47c7e24d325e55b04d05f335d992c4d7->enter($__internal_f35e4c49a4d310a4dd07ee4b436004ab47c7e24d325e55b04d05f335d992c4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_content"));

        // line 50
        echo "        ";
        
        $__internal_f35e4c49a4d310a4dd07ee4b436004ab47c7e24d325e55b04d05f335d992c4d7->leave($__internal_f35e4c49a4d310a4dd07ee4b436004ab47c7e24d325e55b04d05f335d992c4d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  118 => 49,  106 => 55,  102 => 54,  98 => 53,  94 => 51,  92 => 49,  88 => 47,  82 => 46,  73 => 43,  68 => 42,  63 => 41,  58 => 40,  42 => 15,  38 => 14,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="es">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>uniAdmin - Ingreso</title>*/
/* */
/*     <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet" />*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/* {#}*/
/*     <div>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <a href="{{ path('fos_user_security_logout') }}">*/
/*                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {#}*/
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/*             <div class="{{ type }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     <div>*/
/*         {% block user_content %}*/
/*         {% endblock user_content %}*/
/*     </div>*/
/* */
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
