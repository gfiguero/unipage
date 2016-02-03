<?php

/* ::uniAdmin_old.html.twig */
class __TwigTemplate_742342f10780f0f06ce7c782056c5c769e2fa972151afdbd16d108c67aa08626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9353cf9caff68d0932e3d86b10bc34b778e0977991b9a7b8178e6796f8983a8 = $this->env->getExtension("native_profiler");
        $__internal_c9353cf9caff68d0932e3d86b10bc34b778e0977991b9a7b8178e6796f8983a8->enter($__internal_c9353cf9caff68d0932e3d86b10bc34b778e0977991b9a7b8178e6796f8983a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::uniAdmin_old.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>uniAdmin - ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniAdmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/fileinput.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    ";
        // line 19
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 20
        echo "</head>

<body>
    <div id=\"wrapper\">
        <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">uniAdmin | ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")), "html", null, true);
        echo "</a>
            </div>
            <ul class=\"nav navbar-top-links navbar-right\">
                <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">";
        // line 35
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
        echo " ";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("caret-down");
        echo "</a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        <li><a href=\"#\">";
        // line 37
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
        echo " Perfil de Usuario</a></li>
                        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sign-out fa-fw");
        echo " Salir</a></li>
                    </ul>
                </li>
            </ul>
            <div class=\"navbar-default sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav navbar-collapse\">
                    <ul class=\"nav\" id=\"side-menu\">
                        <li ";
        // line 45
        if (twig_in_filter("dashboard", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
        echo " Dashboard</a></li>
                        <li ";
        // line 46
        if (twig_in_filter("notice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("member");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("group fa-fw");
        echo " Miembros</a></li>
                        <li ";
        // line 47
        if (twig_in_filter("role", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("role");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
        echo " Roles</a></li>
                        <li ";
        // line 48
        if (twig_in_filter("notice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("notice");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
        echo " Noticias</a></li>
                        <li ";
        // line 49
        if (twig_in_filter("user", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("user");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
        echo " Usuarios</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
    </div>

    <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniAdmin.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 61
        $this->displayBlock('javascript', $context, $blocks);
        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/uniAdmin-main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fileinput_locale_es.js"), "html", null, true);
        echo "\"></script>

</body>

</html>
";
        
        $__internal_c9353cf9caff68d0932e3d86b10bc34b778e0977991b9a7b8178e6796f8983a8->leave($__internal_c9353cf9caff68d0932e3d86b10bc34b778e0977991b9a7b8178e6796f8983a8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2512a8e164f2df993e612a41f53523f86e57d271a6a72c86c4a76985bb6489 = $this->env->getExtension("native_profiler");
        $__internal_3e2512a8e164f2df993e612a41f53523f86e57d271a6a72c86c4a76985bb6489->enter($__internal_3e2512a8e164f2df993e612a41f53523f86e57d271a6a72c86c4a76985bb6489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3e2512a8e164f2df993e612a41f53523f86e57d271a6a72c86c4a76985bb6489->leave($__internal_3e2512a8e164f2df993e612a41f53523f86e57d271a6a72c86c4a76985bb6489_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_3654b610b8267adbf4d1f18305e2700e186b1e1c55cb5783ce5709613bfa3ca1 = $this->env->getExtension("native_profiler");
        $__internal_3654b610b8267adbf4d1f18305e2700e186b1e1c55cb5783ce5709613bfa3ca1->enter($__internal_3654b610b8267adbf4d1f18305e2700e186b1e1c55cb5783ce5709613bfa3ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_3654b610b8267adbf4d1f18305e2700e186b1e1c55cb5783ce5709613bfa3ca1->leave($__internal_3654b610b8267adbf4d1f18305e2700e186b1e1c55cb5783ce5709613bfa3ca1_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_970de7c41a4c1c8e9a691e318aa458e2d5729973b962853a6cc94396646d2453 = $this->env->getExtension("native_profiler");
        $__internal_970de7c41a4c1c8e9a691e318aa458e2d5729973b962853a6cc94396646d2453->enter($__internal_970de7c41a4c1c8e9a691e318aa458e2d5729973b962853a6cc94396646d2453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_970de7c41a4c1c8e9a691e318aa458e2d5729973b962853a6cc94396646d2453->leave($__internal_970de7c41a4c1c8e9a691e318aa458e2d5729973b962853a6cc94396646d2453_prof);

    }

    // line 61
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_75f9185545ef3514bf55df3632b8e595ca27a29a7255768428307de0c1053e4a = $this->env->getExtension("native_profiler");
        $__internal_75f9185545ef3514bf55df3632b8e595ca27a29a7255768428307de0c1053e4a->enter($__internal_75f9185545ef3514bf55df3632b8e595ca27a29a7255768428307de0c1053e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_75f9185545ef3514bf55df3632b8e595ca27a29a7255768428307de0c1053e4a->leave($__internal_75f9185545ef3514bf55df3632b8e595ca27a29a7255768428307de0c1053e4a_prof);

    }

    public function getTemplateName()
    {
        return "::uniAdmin_old.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 61,  219 => 55,  208 => 19,  197 => 9,  184 => 64,  180 => 63,  175 => 62,  173 => 61,  169 => 60,  165 => 59,  160 => 56,  158 => 55,  143 => 49,  133 => 48,  123 => 47,  113 => 46,  103 => 45,  91 => 38,  87 => 37,  80 => 35,  74 => 32,  60 => 20,  58 => 19,  48 => 12,  44 => 11,  40 => 10,  36 => 9,  26 => 1,);
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
/*     <title>uniAdmin - {% block title %}{% endblock %}</title>*/
/*     <link href="{{ asset('css/uniAdmin.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet">*/
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
/*     <div id="wrapper">*/
/*         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">uniAdmin | {{ app.request.attributes.get('_route')|trans }}</a>*/
/*             </div>*/
/*             <ul class="nav navbar-top-links navbar-right">*/
/*                 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ icon('user fa-fw') }} {{ icon('caret-down') }}</a>*/
/*                     <ul class="dropdown-menu dropdown-user">*/
/*                         <li><a href="#">{{ icon('user fa-fw') }} Perfil de Usuario</a></li>*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}">{{ icon('sign-out fa-fw') }} Salir</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <div class="navbar-default sidebar" role="navigation">*/
/*                 <div class="sidebar-nav navbar-collapse">*/
/*                     <ul class="nav" id="side-menu">*/
/*                         <li {% if 'dashboard' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('dashboard') }}">{{ icon('dashboard fa-fw') }} Dashboard</a></li>*/
/*                         <li {% if 'notice' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('member') }}">{{ icon('group fa-fw') }} Miembros</a></li>*/
/*                         <li {% if 'role' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('role') }}">{{ icon('sitemap fa-fw') }} Roles</a></li>*/
/*                         <li {% if 'notice' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('notice') }}">{{ icon('newspaper-o fa-fw') }} Noticias</a></li>*/
/*                         <li {% if 'user' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('user') }}">{{ icon('user fa-fw') }} Usuarios</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*     </div>*/
/* */
/*     <script src="{{ asset('js/jquery.min.js') }}"></script>*/
/*     <script src="{{ asset('js/uniAdmin.js') }}"></script>*/
/*     {% block javascript %}{% endblock %}*/
/*     <script src="{{ asset('js/uniAdmin-main.js') }}"></script>*/
/*     <script src="{{ asset('js/fileinput.min.js') }}"></script>*/
/*     <script src="{{ asset('js/fileinput_locale_es.js') }}"></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
