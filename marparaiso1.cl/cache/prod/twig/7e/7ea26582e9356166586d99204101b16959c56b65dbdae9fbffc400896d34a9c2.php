<?php

/* :Page:navbar.html.twig */
class __TwigTemplate_79993ea13fce5803934a782487a3b650ed073f68c3d63fa5fbe0f597dda895f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'brand' => array($this, 'block_brand'),
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
        echo "<div class=\"cbp-af-header\">
    <div class=\"cbp-af-inner\">
        <!-- Navigation -->
        <nav class=\"navbar navbar-default navbar-custom\">
            <div class=\"container-fluid\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand page-scroll\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("uni_page");
        echo "\">";
        $this->displayBlock('brand', $context, $blocks);
        echo "</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("uni_page_member");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("uni_page_process");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("uni_page_notice");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("notice_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("uni_page_gallery");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("picture-o fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("gallery_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("uni_page_report");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("report_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("uni_page_document");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("document_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("uni_page_publication");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("publication_index"), "html", null, true);
        echo "</a></li>
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("uni_admin");
        echo "\">";
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("lock fa-fw fa-lg");
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("login"), "html", null, true);
        echo "</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>
";
    }

    // line 15
    public function block_brand($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return ":Page:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 15,  109 => 28,  101 => 27,  93 => 26,  85 => 25,  77 => 24,  69 => 23,  61 => 22,  53 => 21,  42 => 15,  27 => 2,  21 => 1,);
    }
}
/* {% block navbar %}*/
/* <div class="cbp-af-header">*/
/*     <div class="cbp-af-inner">*/
/*         <!-- Navigation -->*/
/*         <nav class="navbar navbar-default navbar-custom">*/
/*             <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand page-scroll" href="{{ path('uni_page') }}">{% block brand %}{% endblock %}</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li><a href="{{ path('uni_page_member') }}">{{ icon('user fa-fw fa-lg') }}&nbsp;{{ "member_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_process') }}">{{ icon('book fa-fw fa-lg') }}&nbsp;{{ "process_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_notice') }}">{{ icon('newspaper-o fa-fw fa-lg') }}&nbsp;{{ "notice_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_gallery') }}">{{ icon('picture-o fa-fw fa-lg') }}&nbsp;{{ "gallery_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_report') }}">{{ icon('flag fa-fw fa-lg') }}&nbsp;{{ "report_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_document') }}">{{ icon('check fa-fw fa-lg') }}&nbsp;{{ "document_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_page_publication') }}">{{ icon('bullhorn fa-fw fa-lg') }}&nbsp;{{ "publication_index"|trans }}</a></li>*/
/*                         <li><a href="{{ path('uni_admin') }}">{{ icon('lock fa-fw fa-lg') }}&nbsp;{{ "login"|trans }}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!-- /.navbar-collapse -->*/
/*             </div>*/
/*             <!-- /.container-fluid -->*/
/*         </nav>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
