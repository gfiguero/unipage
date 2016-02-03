<?php

/* :Page:navbar.html.twig */
class __TwigTemplate_9738ba09f034e140080f56fabd627e5695f95fda2360b892979bde2427565d93 extends Twig_Template
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
        $__internal_14d6fa474919e671bb551d758e630e22dd6d524933f8f46a5c81c8329f2e61b2 = $this->env->getExtension("native_profiler");
        $__internal_14d6fa474919e671bb551d758e630e22dd6d524933f8f46a5c81c8329f2e61b2->enter($__internal_14d6fa474919e671bb551d758e630e22dd6d524933f8f46a5c81c8329f2e61b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:navbar.html.twig"));

        // line 1
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_14d6fa474919e671bb551d758e630e22dd6d524933f8f46a5c81c8329f2e61b2->leave($__internal_14d6fa474919e671bb551d758e630e22dd6d524933f8f46a5c81c8329f2e61b2_prof);

    }

    public function block_navbar($context, array $blocks = array())
    {
        $__internal_33884d4197b2f6a67909b109508537e125f455435a57331ee53fdab1c122340f = $this->env->getExtension("native_profiler");
        $__internal_33884d4197b2f6a67909b109508537e125f455435a57331ee53fdab1c122340f->enter($__internal_33884d4197b2f6a67909b109508537e125f455435a57331ee53fdab1c122340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_33884d4197b2f6a67909b109508537e125f455435a57331ee53fdab1c122340f->leave($__internal_33884d4197b2f6a67909b109508537e125f455435a57331ee53fdab1c122340f_prof);

    }

    // line 15
    public function block_brand($context, array $blocks = array())
    {
        $__internal_5ee631098bf440bc14bc18e7955527f1af2dce9c6a598fc493442854df3483da = $this->env->getExtension("native_profiler");
        $__internal_5ee631098bf440bc14bc18e7955527f1af2dce9c6a598fc493442854df3483da->enter($__internal_5ee631098bf440bc14bc18e7955527f1af2dce9c6a598fc493442854df3483da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_5ee631098bf440bc14bc18e7955527f1af2dce9c6a598fc493442854df3483da->leave($__internal_5ee631098bf440bc14bc18e7955527f1af2dce9c6a598fc493442854df3483da_prof);

    }

    public function getTemplateName()
    {
        return ":Page:navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 15,  118 => 28,  110 => 27,  102 => 26,  94 => 25,  86 => 24,  78 => 23,  70 => 22,  62 => 21,  51 => 15,  36 => 2,  24 => 1,);
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
