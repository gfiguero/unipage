<?php

/* UniPageBundle:Page:noticeshow.html.twig */
class __TwigTemplate_340a34418c831035db3ab1fe47254432183f712049662fce8e11a62dcb36c240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:noticeshow.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:noticeshow.html.twig", 3);
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
        echo "<section id=\"noticeshow\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3 class=\"featurette-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "title", array()), "html", null, true);
        echo "</h3>
                    <h6 class=\"text-muted\">
                        Publicado: ";
        // line 12
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "createdAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo ",
                        Actualizado: ";
        // line 13
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "updatedAt", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y - HH:mm"), "html", null, true);
        echo "
                    </h6>
                    ";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "photos", array()))) {
            // line 16
            echo "                    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

                        <!-- Indicators -->
                        ";
            // line 19
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "photos", array())) > 1)) {
                // line 20
                echo "                        <ol class=\"carousel-indicators\">
                            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "photos", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                    // line 22
                    echo "                                <li data-target=\"#myCarousel\" data-slide-to=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
                    echo "\" ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        echo "class=\"active\"";
                    }
                    echo "></li>
                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                        </ol>
                        ";
            }
            // line 26
            echo "
                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\" role=\"listbox\">
                            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "photos", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 30
                echo "                                <div class=\"item ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo "active";
                }
                echo "\"><img class=\"img-responsive center-block\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "title", array()), "html", null, true);
                echo "\" src=";
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["photo"], "webpath", array())), "page_notice"), "html", null, true);
                echo "></div>
                            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </div>

                        <!-- Left and right controls -->
                        ";
            // line 35
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "photos", array())) > 1)) {
                // line 36
                echo "                        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                            ";
                // line 37
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-left");
                echo "
                            <span class=\"sr-only\">Anterior</span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                            ";
                // line 41
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("chevron-right");
                echo "
                            <span class=\"sr-only\">Siguiente</span>
                        </a>
                        ";
            }
            // line 45
            echo "                    </div>
                    ";
        }
        // line 47
        echo "                    <p>";
        echo $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "content", array());
        echo "</p>
                </div>
                <div class=\"col-md-4\">
                    <h3 class=\"featurette-heading\">Las 10 últimas noticias</h3>
                    <div class=\"list-group\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["onotice"]) {
            // line 53
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uni_page_notice_show", array("id" => $this->getAttribute($context["onotice"], "id", array()))), "html", null, true);
            echo "\" class=\"onotice-title list-group-item ";
            if (($this->getAttribute($context["onotice"], "id", array()) == $this->getAttribute((isset($context["notice"]) ? $context["notice"] : null), "id", array()))) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["onotice"], "title", array()), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['onotice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </div>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:noticeshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 55,  211 => 53,  207 => 52,  198 => 47,  194 => 45,  187 => 41,  180 => 37,  177 => 36,  175 => 35,  170 => 32,  147 => 30,  130 => 29,  125 => 26,  121 => 24,  100 => 22,  83 => 21,  80 => 20,  78 => 19,  73 => 16,  71 => 15,  66 => 13,  62 => 12,  57 => 10,  51 => 6,  48 => 5,  42 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="noticeshow">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <h3 class="featurette-heading">{{ notice.title }}</h3>*/
/*                     <h6 class="text-muted">*/
/*                         Publicado: {{ notice.createdAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }},*/
/*                         Actualizado: {{ notice.updatedAt|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y - HH:mm") }}*/
/*                     </h6>*/
/*                     {% if notice.photos is not empty %}*/
/*                     <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/* */
/*                         <!-- Indicators -->*/
/*                         {% if notice.photos|length > 1 %}*/
/*                         <ol class="carousel-indicators">*/
/*                             {% for photo in notice.photos %}*/
/*                                 <li data-target="#myCarousel" data-slide-to="{{ loop.index0 }}" {% if loop.first %}class="active"{% endif %}></li>*/
/*                             {% endfor %}*/
/*                         </ol>*/
/*                         {% endif %}*/
/* */
/*                         <!-- Wrapper for slides -->*/
/*                         <div class="carousel-inner" role="listbox">*/
/*                             {% for photo in notice.photos %}*/
/*                                 <div class="item {% if loop.first %}active{% endif %}"><img class="img-responsive center-block" alt="{{ notice.title }}" src={{ asset(photo.webpath) | imagine_filter('page_notice') }}></div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                         <!-- Left and right controls -->*/
/*                         {% if notice.photos|length > 1 %}*/
/*                         <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                             {{ icon('chevron-left') }}*/
/*                             <span class="sr-only">Anterior</span>*/
/*                         </a>*/
/*                         <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                             {{ icon('chevron-right') }}*/
/*                             <span class="sr-only">Siguiente</span>*/
/*                         </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     <p>{{ notice.content | raw }}</p>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <h3 class="featurette-heading">Las 10 últimas noticias</h3>*/
/*                     <div class="list-group">*/
/*                         {% for onotice in notices %}*/
/*                             <a href="{{ path('uni_page_notice_show', { 'id': onotice.id }) }}" class="onotice-title list-group-item {% if onotice.id == notice.id %}active{% endif %}">{{ onotice.title }}</a>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
