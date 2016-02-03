<?php

/* UniPageBundle:Page:gallery.html.twig */
class __TwigTemplate_f116d4621527ca0ba1991b7b9f5d5f1f0f9df7d077deec2c5111c145f9dd12c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:gallery.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:gallery.html.twig", 3);
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
        echo "<section id=\"gallery\">
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
        $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 16
            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-3 col-sm-4 col-xs-6\">
                            <div class=\"gallery-preview\">
                                <img class=\"img-responsive center-block\" src=";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["photo"], "webpath", array())), "page_gallery_preview"), "html", null, true);
            echo ">
                            </div>
                        </div>
                    </a>
                    <div class=\"modal fade\" id=\"modal";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["photo"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog modal-xlg modal-gallery\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                </div>
                                <div class=\"modal-body modal-body-gallery\">
                                    <img class=\"img-responsive center-block\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["photo"], "webpath", array())), "page_gallery_modal"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"text-left\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "notice", array()), "title", array()), "html", null, true);
            echo "</div>
                                    <div class=\"text-left text-muted\">";
            // line 34
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute($context["photo"], "notice", array()), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y"), "html", null, true);
            echo "</div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
            <div class=\"row\">
                <div class=\"text-center\">
                    ";
        // line 43
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["photos"]) ? $context["photos"] : null));
        echo "
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  115 => 40,  103 => 34,  99 => 33,  93 => 30,  83 => 23,  76 => 19,  69 => 16,  65 => 15,  57 => 10,  51 => 6,  48 => 5,  42 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="gallery">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-12">*/
/*                     {{ form(categoryForm, { 'style': 'inline' }) }}*/
/*                 </div>*/
/*             </div>*/
/*             <hr>*/
/*             <div class="row">*/
/*                 {% for photo in photos %}*/
/*                     <a href="#" data-toggle="modal" data-target="#modal{{ photo.id }}">*/
/*                         <div class="col-md-3 col-sm-4 col-xs-6">*/
/*                             <div class="gallery-preview">*/
/*                                 <img class="img-responsive center-block" src={{ asset(photo.webpath) | imagine_filter('page_gallery_preview') }}>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                     <div class="modal fade" id="modal{{ photo.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                         <div class="modal-dialog modal-xlg modal-gallery" role="document">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                 </div>*/
/*                                 <div class="modal-body modal-body-gallery">*/
/*                                     <img class="img-responsive center-block" src="{{ asset(photo.webpath) | imagine_filter('page_gallery_modal') }}">*/
/*                                 </div>*/
/*                                 <div class="modal-footer">*/
/*                                     <div class="text-left">{{ photo.notice.title }}</div>*/
/*                                     <div class="text-left text-muted">{{ photo.notice.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y") }}</div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="text-center">*/
/*                     {{ knp_pagination_render(photos) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
