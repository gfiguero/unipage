<?php

/* ::uniAdmin_old.html.twig */
class __TwigTemplate_84cda5f88caa5ab267b3ee6f73a7e9ade38f717d1060dec2d18f6f29515e60bb extends Twig_Template
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
        $__internal_fc105131145aa2869332b5917176ab5e715849b05e058bf49d3005b7f48c8208 = $this->env->getExtension("native_profiler");
        $__internal_fc105131145aa2869332b5917176ab5e715849b05e058bf49d3005b7f48c8208->enter($__internal_fc105131145aa2869332b5917176ab5e715849b05e058bf49d3005b7f48c8208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::uniAdmin_old.html.twig"));

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
        
        $__internal_fc105131145aa2869332b5917176ab5e715849b05e058bf49d3005b7f48c8208->leave($__internal_fc105131145aa2869332b5917176ab5e715849b05e058bf49d3005b7f48c8208_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d464cf0f0e7cfdc7e1b6da9b044fbc1cdb69926a5333ca029adbce8814ac536b = $this->env->getExtension("native_profiler");
        $__internal_d464cf0f0e7cfdc7e1b6da9b044fbc1cdb69926a5333ca029adbce8814ac536b->enter($__internal_d464cf0f0e7cfdc7e1b6da9b044fbc1cdb69926a5333ca029adbce8814ac536b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d464cf0f0e7cfdc7e1b6da9b044fbc1cdb69926a5333ca029adbce8814ac536b->leave($__internal_d464cf0f0e7cfdc7e1b6da9b044fbc1cdb69926a5333ca029adbce8814ac536b_prof);

    }

    // line 19
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ea87be10f25b0371732be7f13b41babe7723b4a344ec4699e37deb233daff566 = $this->env->getExtension("native_profiler");
        $__internal_ea87be10f25b0371732be7f13b41babe7723b4a344ec4699e37deb233daff566->enter($__internal_ea87be10f25b0371732be7f13b41babe7723b4a344ec4699e37deb233daff566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_ea87be10f25b0371732be7f13b41babe7723b4a344ec4699e37deb233daff566->leave($__internal_ea87be10f25b0371732be7f13b41babe7723b4a344ec4699e37deb233daff566_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_db30942549f733f021f1f03a66df4a2a7875694178cc4806f557805f018e45b1 = $this->env->getExtension("native_profiler");
        $__internal_db30942549f733f021f1f03a66df4a2a7875694178cc4806f557805f018e45b1->enter($__internal_db30942549f733f021f1f03a66df4a2a7875694178cc4806f557805f018e45b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_db30942549f733f021f1f03a66df4a2a7875694178cc4806f557805f018e45b1->leave($__internal_db30942549f733f021f1f03a66df4a2a7875694178cc4806f557805f018e45b1_prof);

    }

    // line 61
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f17d1aad11511324e37d9e01f52c7fa8a0a69d192ac367a6330be0fa5dc4db64 = $this->env->getExtension("native_profiler");
        $__internal_f17d1aad11511324e37d9e01f52c7fa8a0a69d192ac367a6330be0fa5dc4db64->enter($__internal_f17d1aad11511324e37d9e01f52c7fa8a0a69d192ac367a6330be0fa5dc4db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_f17d1aad11511324e37d9e01f52c7fa8a0a69d192ac367a6330be0fa5dc4db64->leave($__internal_f17d1aad11511324e37d9e01f52c7fa8a0a69d192ac367a6330be0fa5dc4db64_prof);

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