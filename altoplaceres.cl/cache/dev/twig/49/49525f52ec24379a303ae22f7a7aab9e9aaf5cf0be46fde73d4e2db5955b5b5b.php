<?php

/* :Page:stylesheet.html.twig */
class __TwigTemplate_99c9256efb677a6b92b951c3865280efc78c0a8a08f2aad5123976436653daf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a37ec593add889fac658ac7f655f9e48bee58e332a1dc17092fd117b9fe4aa9 = $this->env->getExtension("native_profiler");
        $__internal_3a37ec593add889fac658ac7f655f9e48bee58e332a1dc17092fd117b9fe4aa9->enter($__internal_3a37ec593add889fac658ac7f655f9e48bee58e332a1dc17092fd117b9fe4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:stylesheet.html.twig"));

        // line 1
        $this->displayBlock('stylesheet', $context, $blocks);
        
        $__internal_3a37ec593add889fac658ac7f655f9e48bee58e332a1dc17092fd117b9fe4aa9->leave($__internal_3a37ec593add889fac658ac7f655f9e48bee58e332a1dc17092fd117b9fe4aa9_prof);

    }

    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b76e1bcd5e5129cfee9e6d569cffec40a67ab775f814e00c1e49fbc3e10ead67 = $this->env->getExtension("native_profiler");
        $__internal_b76e1bcd5e5129cfee9e6d569cffec40a67ab775f814e00c1e49fbc3e10ead67->enter($__internal_b76e1bcd5e5129cfee9e6d569cffec40a67ab775f814e00c1e49fbc3e10ead67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 2
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/uniPage.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    
    ";
        // line 14
        if (( !twig_test_empty((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) &&  !twig_test_empty($this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "photos", array())))) {
            // line 15
            echo "        ";
            $context["header"] = twig_random($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "photos", array()));
            // line 16
            echo "        ";
            $context["contact"] = twig_random($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "photos", array()));
            // line 17
            echo "        ";
            $context["headerimage"] = $this->getAttribute((isset($context["header"]) ? $context["header"] : $this->getContext($context, "header")), "webpath", array());
            // line 18
            echo "        ";
            $context["contactimage"] = $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "webpath", array());
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            $context["headerimage"] = "default";
            // line 21
            echo "        ";
            $context["contactimage"] = "default";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <style type=\"text/css\">.header-image { background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["headerimage"]) ? $context["headerimage"] : $this->getContext($context, "headerimage"))), "page_frontpage"), "html", null, true);
        echo "'); }</style>
    <style type=\"text/css\">.contact-image { background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["contactimage"]) ? $context["contactimage"] : $this->getContext($context, "contactimage"))), "page_frontpage"), "html", null, true);
        echo "'); }</style>
";
        
        $__internal_b76e1bcd5e5129cfee9e6d569cffec40a67ab775f814e00c1e49fbc3e10ead67->leave($__internal_b76e1bcd5e5129cfee9e6d569cffec40a67ab775f814e00c1e49fbc3e10ead67_prof);

    }

    public function getTemplateName()
    {
        return ":Page:stylesheet.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 24,  83 => 23,  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  57 => 14,  44 => 4,  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block stylesheet %}*/
/*     <link href="{{ asset('css/uniPage.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('css/jquery-ui.min.css') }}" type="text/css" rel="stylesheet" />*/
/*     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     */
/*     {% if frontpage is not empty and frontpage.photos is not empty %}*/
/*         {% set header = random(frontpage.photos) %}*/
/*         {% set contact = random(frontpage.photos) %}*/
/*         {% set headerimage = header.webpath %}*/
/*         {% set contactimage = contact.webpath %}*/
/*     {% else %}*/
/*         {% set headerimage = 'default' %}*/
/*         {% set contactimage = 'default' %}*/
/*     {% endif %}*/
/*     <style type="text/css">.header-image { background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('{{ asset(headerimage) | imagine_filter('page_frontpage') }}'); }</style>*/
/*     <style type="text/css">.contact-image { background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('{{ asset(contactimage) | imagine_filter('page_frontpage') }}'); }</style>*/
/* {% endblock %}*/
/* */
