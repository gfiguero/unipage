<?php

/* :Admin:navbar.html.twig */
class __TwigTemplate_804af674ffc958c83061c8dcbb9d7bf1cc972367a02554af16a805b2a5a9f543 extends Twig_Template
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
        // line 1
        $this->displayBlock('navbar', $context, $blocks);
    }

    public function block_navbar($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return ":Admin:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 50,  53 => 25,  49 => 23,  45 => 14,  37 => 11,  26 => 2,  20 => 1,);
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
