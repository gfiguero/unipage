<?php

/* :Admin:navbar.html.twig */
class __TwigTemplate_c222f05810fb052dbab105e17f7f377b5a378f9ee3f6ca775f35ab4e8b91d638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef4645e6e89210e0df93652fcef4fac022be4b92f6963d09732f0b6a4d67c5a = $this->env->getExtension("native_profiler");
        $__internal_2ef4645e6e89210e0df93652fcef4fac022be4b92f6963d09732f0b6a4d67c5a->enter($__internal_2ef4645e6e89210e0df93652fcef4fac022be4b92f6963d09732f0b6a4d67c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_2ef4645e6e89210e0df93652fcef4fac022be4b92f6963d09732f0b6a4d67c5a->leave($__internal_2ef4645e6e89210e0df93652fcef4fac022be4b92f6963d09732f0b6a4d67c5a_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7f9e0fbe761a38666121a4f99c3b0a96957178404ef7bc6af8a3e7a91113c60f = $this->env->getExtension("native_profiler");
        $__internal_7f9e0fbe761a38666121a4f99c3b0a96957178404ef7bc6af8a3e7a91113c60f->enter($__internal_7f9e0fbe761a38666121a4f99c3b0a96957178404ef7bc6af8a3e7a91113c60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 2
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
    <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
        </button>
        <div class=\"uniadmin-logo\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("/uploads/logo/uniAdmin.png"), "admin_logo"), "html", null, true);
        echo "\"></a>
        </div>
    </div>
    ";
        // line 14
        echo $this->env->getExtension('knp_menu')->render("UniAdminBundle:Builder:topAdminMenu");
        echo "
    ";
        // line 23
        echo "    <div class=\"navbar-default sidebar\" role=\"navigation\">
        <div class=\"sidebar-nav navbar-collapse\">
            ";
        // line 25
        echo $this->env->getExtension('knp_menu')->render("UniAdminBundle:Builder:sideAdminMenu");
        echo "
";
        // line 50
        echo "        </div>
    </div>
</nav>
";
        
        $__internal_7f9e0fbe761a38666121a4f99c3b0a96957178404ef7bc6af8a3e7a91113c60f->leave($__internal_7f9e0fbe761a38666121a4f99c3b0a96957178404ef7bc6af8a3e7a91113c60f_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 50,  62 => 25,  58 => 23,  54 => 14,  46 => 11,  35 => 2,  23 => 1,);
    }
}
/* {% block navbar %}*/
/* <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">*/
/*     <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*         </button>*/
/*         <div class="uniadmin-logo">*/
/*             <a href="{{ path('dashboard') }}"><img src="{{ asset('/uploads/logo/uniAdmin.png') | imagine_filter('admin_logo') }}"></a>*/
/*         </div>*/
/*     </div>*/
/*     {{ knp_menu_render('UniAdminBundle:Builder:topAdminMenu') }}*/
/*     {#}*/
/*     <ul class="nav navbar-top-links navbar-right">*/
/*         <li><a href="{{ path('uni_page') }}">{{ icon('home fa-fw') }}&nbsp;{{ "home"|trans }}</a></li>*/
/*         <li><a href="{{ path('user_profile_show') }}">{{ icon('user fa-fw') }}&nbsp;{{"user_profile"|trans}}</a></li>*/
/*         <li><a href="{{ path('user') }}">{{ icon('group fa-fw') }}&nbsp;{{"user_index"|trans}}</a></li>*/
/*         <li><a href="{{ path('user_security_logout') }}">{{ icon('sign-out fa-fw') }}&nbsp;{{"logout"|trans}}</a></li>*/
/*     </ul>*/
/*     {#}*/
/*     <div class="navbar-default sidebar" role="navigation">*/
/*         <div class="sidebar-nav navbar-collapse">*/
/*             {{ knp_menu_render('UniAdminBundle:Builder:sideAdminMenu') }}*/
/* {#}*/
/*             <ul class="nav" id="side-menu">*/
/*                 <li {% if 'frontpage' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('frontpage') }}">{{ icon('clone fa-fw') }}&nbsp;{{ "frontpage_index"|trans }}</a></li>*/
/*                 <li {% if 'service' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('service') }}">{{ icon('cogs fa-fw') }}&nbsp;{{ "service_index"|trans }}</a></li>*/
/*                 <li><a href="#">{{ icon('sitemap fa-fw') }}&nbsp;{{ "member_control"|trans }}<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level collapse">*/
/*                         <li {% if 'member' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('member') }}">{{ "member_index"|trans }}</a></li>*/
/*                         <li {% if 'memberrole' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('memberrole') }}">{{ "memberrole_index"|trans }}</a></li>*/
/*                     </ul></li>*/
/*                 <li><a href="#">{{ icon('newspaper-o fa-fw') }}&nbsp;{{ "notice_control"|trans }}<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level collapse">*/
/*                         <li {% if 'notice' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('notice') }}">{{ "notice_index"|trans }}</a></li>*/
/*                         <li {% if 'noticecategory' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('noticecategory') }}">{{ "noticecategory_index"|trans }}</a></li>*/
/*                     </ul></li>*/
/*                 <li><a href="#">{{ icon('cube fa-fw') }}&nbsp;{{ "product_control"|trans }}<span class="fa arrow"></span></a>*/
/*                     <ul class="nav nav-second-level collapse">*/
/*                         <li {% if 'product' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('product') }}">{{ "product_index"|trans }}</a></li>*/
/*                         <li {% if 'productcategory' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('productcategory') }}">{{ "productcategory_index"|trans }}</a></li>*/
/*                     </ul></li>*/
/*                 <li {% if 'publication' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('publication') }}">{{ icon('bullhorn fa-fw') }}&nbsp;{{ "publication_index"|trans }}</a></li>*/
/*                 <li {% if 'report' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('report') }}">{{ icon('flag fa-fw') }}&nbsp;{{ "report_index"|trans }}</a></li>*/
/*                 <li {% if 'process' in app.request.attributes.get('_route') %}class="active"{% endif %}><a href="{{ path('process') }}">{{ icon('paper-plane fa-fw') }}&nbsp;{{ "process_index"|trans }}</a></li>*/
/*             </ul>*/
/* {#}*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* {% endblock %}*/
