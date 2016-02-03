<?php

/* :Admin:navbar.html.twig */
class __TwigTemplate_1bbf450467bb7d568c20d4d109407216459f710d6da0c62321c3b8643637d1ec extends Twig_Template
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
        $__internal_63c2b47c117e5969df566446a155f1daee10b90c1fc58c1dda5d6762e1bcdee2 = $this->env->getExtension("native_profiler");
        $__internal_63c2b47c117e5969df566446a155f1daee10b90c1fc58c1dda5d6762e1bcdee2->enter($__internal_63c2b47c117e5969df566446a155f1daee10b90c1fc58c1dda5d6762e1bcdee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_63c2b47c117e5969df566446a155f1daee10b90c1fc58c1dda5d6762e1bcdee2->leave($__internal_63c2b47c117e5969df566446a155f1daee10b90c1fc58c1dda5d6762e1bcdee2_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_c8a494d09166d9be16d4b2d9d3e4d02cc82f0bcb97e88596b1e25122d24529df = $this->env->getExtension("native_profiler");
        $__internal_c8a494d09166d9be16d4b2d9d3e4d02cc82f0bcb97e88596b1e25122d24529df->enter($__internal_c8a494d09166d9be16d4b2d9d3e4d02cc82f0bcb97e88596b1e25122d24529df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_c8a494d09166d9be16d4b2d9d3e4d02cc82f0bcb97e88596b1e25122d24529df->leave($__internal_c8a494d09166d9be16d4b2d9d3e4d02cc82f0bcb97e88596b1e25122d24529df_prof);

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
