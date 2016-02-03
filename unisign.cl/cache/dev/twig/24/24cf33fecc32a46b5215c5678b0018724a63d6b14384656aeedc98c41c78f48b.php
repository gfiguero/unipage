<?php

/* :Page:highlight.html.twig */
class __TwigTemplate_c40595a7a71feed8a7965d99a46e27088713d25bf09fbf281cb44325402d619e extends Twig_Template
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
        $__internal_5a74dfa76c75cdab485ef9a95f9baec4f304f0e6a7d55eb877c650415d448934 = $this->env->getExtension("native_profiler");
        $__internal_5a74dfa76c75cdab485ef9a95f9baec4f304f0e6a7d55eb877c650415d448934->enter($__internal_5a74dfa76c75cdab485ef9a95f9baec4f304f0e6a7d55eb877c650415d448934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:highlight.html.twig"));

        // line 1
        $this->displayBlock('highlight', $context, $blocks);
        
        $__internal_5a74dfa76c75cdab485ef9a95f9baec4f304f0e6a7d55eb877c650415d448934->leave($__internal_5a74dfa76c75cdab485ef9a95f9baec4f304f0e6a7d55eb877c650415d448934_prof);

    }

    public function block_highlight($context, array $blocks = array())
    {
        $__internal_199770b42e9b7bd64b5da2b58f7757102fdc7038c7fe151091759400a9326b09 = $this->env->getExtension("native_profiler");
        $__internal_199770b42e9b7bd64b5da2b58f7757102fdc7038c7fe151091759400a9326b09->enter($__internal_199770b42e9b7bd64b5da2b58f7757102fdc7038c7fe151091759400a9326b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlight"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["highlights"]) ? $context["highlights"] : $this->getContext($context, "highlights")));
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
            if ((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo"))) {
                echo "<img class=\"img-circle img-responsive center-block\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["highlight"], "title", array()), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["photo"]) ? $context["photo"] : $this->getContext($context, "photo")), "webpath", array())), "page_highlight"), "html", null, true);
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
        
        $__internal_199770b42e9b7bd64b5da2b58f7757102fdc7038c7fe151091759400a9326b09->leave($__internal_199770b42e9b7bd64b5da2b58f7757102fdc7038c7fe151091759400a9326b09_prof);

    }

    public function getTemplateName()
    {
        return ":Page:highlight.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 20,  105 => 19,  101 => 18,  93 => 15,  88 => 14,  81 => 13,  71 => 12,  69 => 11,  63 => 9,  46 => 8,  41 => 6,  35 => 2,  23 => 1,);
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
