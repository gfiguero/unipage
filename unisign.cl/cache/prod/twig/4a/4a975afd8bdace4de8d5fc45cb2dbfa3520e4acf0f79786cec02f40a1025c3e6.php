<?php

/* :Page:highlight.html.twig */
class __TwigTemplate_3962ce3e979b95bd74da8095bc9bd28b1a2c8d98710a405f25eef5c9acb1550f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'highlight' => array($this, 'block_highlight'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('highlight', $context, $blocks);
    }

    public function block_highlight($context, array $blocks = array())
    {
        // line 2
        echo "    <section id=\"highlight\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("highlight_index"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["highlights"]) ? $context["highlights"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["highlight"]) {
            // line 9
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_notice_show", array("id" => $this->getAttribute($context["highlight"], "id", array()))), "html", null, true);
            echo "\">
                        <div class=\"col-md-4 text-center\">
                            ";
            // line 11
            $context["photo"] = twig_first($this->env, $this->getAttribute($context["highlight"], "photos", array()));
            // line 12
            echo "                            ";
            if ((isset($context["photo"]) ? $context["photo"] : null)) {
                echo "<img class=\"img-circle img-responsive center-block\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "title", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : null), "webpath", array())), "page_highlight"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 13
                echo "<img class=\"img-circle img-responsive center-block\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "title", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl("/uploads/notice/default.png"), "page_highlight"), "html", null, true);
                echo "\">";
            }
            // line 14
            echo "                            <h3 class=\"highlight-heading\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "title", array()), "html", null, true);
            echo "</h3>
                            <p>";
            // line 15
            echo twig_slice($this->env, strip_tags($this->getAttribute($context["highlight"], "content", array())), 0, 200);
            echo " ";
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("long-arrow-right");
            echo "</p>
                        </div>
                    </a>
                    ";
            // line 18
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 3)) {
                echo "<div class=\"clearfix\"></div>";
            }
            // line 19
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['highlight'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return ":Page:highlight.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  110 => 20,  96 => 19,  92 => 18,  84 => 15,  79 => 14,  72 => 13,  62 => 12,  60 => 11,  54 => 9,  37 => 8,  32 => 6,  26 => 2,  20 => 1,);
    }
}
/* {% block highlight %}*/
/*     <section id="highlight">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">{{ "highlight_index"|trans }}</h2>*/
/*                 </div>*/
/*                 {% for highlight in highlights %}*/
/*                     <a href="{{ path('uni_page_notice_show', { 'id': highlight.id }) }}">*/
/*                         <div class="col-md-4 text-center">*/
/*                             {% set photo = highlight.photos|first %}*/
/*                             {% if photo %}<img class="img-circle img-responsive center-block" alt="{{ highlight.title }}" src="{{ asset(photo.webpath) | imagine_filter('page_highlight') }}">*/
/*                             {% else %}<img class="img-circle img-responsive center-block" alt="{{ highlight.title }}" src="{{ asset('/uploads/notice/default.png') | imagine_filter('page_highlight') }}">{% endif %}*/
/*                             <h3 class="highlight-heading">{{ highlight.title }}</h3>*/
/*                             <p>{{ highlight.content|striptags|slice(0, 200)|raw }} {{ icon('long-arrow-right') }}</p>*/
/*                         </div>*/
/*                     </a>*/
/*                     {% if loop.index is divisible by(3) %}<div class="clearfix"></div>{% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
