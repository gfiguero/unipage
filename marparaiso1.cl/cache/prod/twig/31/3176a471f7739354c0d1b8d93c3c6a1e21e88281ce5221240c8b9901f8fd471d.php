<?php

/* UniPageBundle:Page:notice.html.twig */
class __TwigTemplate_d00b61afe678023fbc2a38b709104fde96095348d609b7017bc76eba2c285056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:notice.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:notice.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:footer.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'footer' => array($this, 'block_footer'),
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return ":Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<section id=\"notice\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["categoryForm"]) ? $context["categoryForm"] : null), 'form', array("style" => "inline"));
        echo "
                </div>
            </div>
            <hr>
            <div class=\"row\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 16
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_notice_show", array("id" => $this->getAttribute($context["notice"], "id", array()))), "html", null, true);
            echo "#noticeshow\">
                    <div class=\"col-md-4\">
                        <div class=\"notice-preview\">
                            ";
            // line 19
            $context["photo"] = twig_first($this->env, $this->getAttribute($context["notice"], "photos", array()));
            // line 20
            echo "                            ";
            if ((isset($context["photo"]) ? $context["photo"] : null)) {
                echo "<div class=\"notice-photo-preview\"><img class=\"img-responsive\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "title", array()), "html", null, true);
                echo "\" src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "webpath", array())), "page_notice_preview"), "html", null, true);
                echo "></div>";
            }
            // line 21
            echo "                            <div class=\"notice-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "title", array()), "html", null, true);
            echo "</div>
                            <div class=\"notice-createdat\">";
            // line 22
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["notice"], "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
            echo "</div>
                            <div class=\"notice-content\">";
            // line 23
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["notice"], "content", array())), 0, 700);
            echo "</div>
                        </div>
                    </div>
                    </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
            <div class=\"row\">
                <div class=\"text-center\">
                    ";
        // line 31
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["notices"]) ? $context["notices"] : null));
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  107 => 28,  96 => 23,  92 => 22,  87 => 21,  78 => 20,  76 => 19,  69 => 16,  65 => 15,  57 => 10,  51 => 6,  48 => 5,  42 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="notice">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     {{ form(categoryForm, { 'style': 'inline' }) }}*/
/*                 </div>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="row">*/
/*                 {% for notice in notices %}*/
/*                     <a href="{{ path('uni_page_notice_show', { 'id': notice.id }) }}#noticeshow">*/
/*                     <div class="col-md-4">*/
/*                         <div class="notice-preview">*/
/*                             {% set photo = notice.photos|first %}*/
/*                             {% if photo %}<div class="notice-photo-preview"><img class="img-responsive" alt="{{ notice.title }}" src={{ asset(photo.webpath) | imagine_filter('page_notice_preview') }}></div>{% endif %}*/
/*                             <div class="notice-title">{{ notice.title }}</div>*/
/*                             <div class="notice-createdat">{{ notice.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}</div>*/
/*                             <div class="notice-content">{{ notice.content | striptags | slice(0, 700) | raw }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="text-center">*/
/*                     {{ knp_pagination_render(notices) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
