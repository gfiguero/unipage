<?php

/* UniPageBundle:Page:history.html.twig */
class __TwigTemplate_ace33c5448069a10505bf4c170808b82ece02641b8afdd032f69ff31faeb95fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:history.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:history.html.twig", 3);
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
        echo "<section id=\"history\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"timeline\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
            // line 12
            echo "                        ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                // line 13
                echo "                        <li>";
            } else {
                // line 14
                echo "                        <li class=\"timeline-inverted\">";
            }
            // line 15
            echo "                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "id", array()), "html", null, true);
            echo "\">
                                ";
            // line 16
            $context["image"] = ("/uploads/frontpage_photos/" . $this->getAttribute($context["history"], "path", array()));
            // line 17
            echo "                                <div class=\"timeline-image\">
                                    <img class=\"img-circle img-responsive\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["image"]) ? $context["image"] : null)), "page_small"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "time", array()), "html", null, true);
            echo "</h4>
                                        <h4 class=\"subheading\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "title", array()), "html", null, true);
            echo "</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p class=\"text-muted\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "abstract", array()), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </a>
                            <div class=\"modal fade\" id=\"modal";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                            <h4 class=\"modal-title\" id=\"modalLabel";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "title", array()), "html", null, true);
            echo "</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <img class=\"img-rounded img-responsive center-block\" alt=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "title", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["image"]) ? $context["image"] : null)), "page_large"), "html", null, true);
            echo "\">
                                                </div>
                                                <div class=\"col-xs-12\">
                                                    <h4>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "time", array()), "html", null, true);
            echo "</h4>
                                                    <h4 class=\"subheading\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "title", array()), "html", null, true);
            echo "</h4>
                                                    <p class=\"text-muted\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["history"], "content", array()), "html", null, true);
            echo "</p>
                                                </div>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                        <li class=\"timeline-inverted\">
                            <div class=\"timeline-image\">
                                <h4>La historia
                                    <br>todavía
                                    <br>continúa</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 55,  152 => 45,  148 => 44,  144 => 43,  136 => 40,  126 => 35,  118 => 30,  111 => 26,  105 => 23,  101 => 22,  94 => 18,  91 => 17,  89 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  58 => 11,  51 => 6,  48 => 5,  42 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="history">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <ul class="timeline">*/
/*                     {% for history in histories %}*/
/*                         {% if loop.index is odd %}*/
/*                         <li>{% else %}*/
/*                         <li class="timeline-inverted">{% endif %}*/
/*                             <a href="#" data-toggle="modal" data-target="#modal{{ history.id }}">*/
/*                                 {% set image = '/uploads/frontpage_photos/' ~ history.path %}*/
/*                                 <div class="timeline-image">*/
/*                                     <img class="img-circle img-responsive" src="{{ asset(image) | imagine_filter('page_small') }}" alt="">*/
/*                                 </div>*/
/*                                 <div class="timeline-panel">*/
/*                                     <div class="timeline-heading">*/
/*                                         <h4>{{ history.time }}</h4>*/
/*                                         <h4 class="subheading">{{ history.title }}</h4>*/
/*                                     </div>*/
/*                                     <div class="timeline-body">*/
/*                                         <p class="text-muted">{{ history.abstract }}</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <div class="modal fade" id="modal{{ history.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                 <div class="modal-dialog modal-lg" role="document">*/
/*                                     <div class="modal-content">*/
/*                                         <div class="modal-header">*/
/*                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                             <h4 class="modal-title" id="modalLabel{{ history.id }}">{{ history.title }}</h4>*/
/*                                         </div>*/
/*                                         <div class="modal-body">*/
/*                                             <div class="row">*/
/*                                                 <div class="col-xs-12">*/
/*                                                     <img class="img-rounded img-responsive center-block" alt="{{ history.title }}" src="{{ asset(image) | imagine_filter('page_large') }}">*/
/*                                                 </div>*/
/*                                                 <div class="col-xs-12">*/
/*                                                     <h4>{{ history.time }}</h4>*/
/*                                                     <h4 class="subheading">{{ history.title }}</h4>*/
/*                                                     <p class="text-muted">{{ history.content }}</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                         <li class="timeline-inverted">*/
/*                             <div class="timeline-image">*/
/*                                 <h4>La historia*/
/*                                     <br>todavía*/
/*                                     <br>continúa</h4>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
