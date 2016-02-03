<?php

/* UniPageBundle:Page:process.html.twig */
class __TwigTemplate_2e09440aa98a664569dfb7d6e64c342c7a5070b4f59fb0657f2d87f6d487b84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:process.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:process.html.twig", 3);
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
        $__internal_e7af19b5eda336f4b588c87ff1cc7e03398c4927b6f908d2070b1d398fa1771c = $this->env->getExtension("native_profiler");
        $__internal_e7af19b5eda336f4b588c87ff1cc7e03398c4927b6f908d2070b1d398fa1771c->enter($__internal_e7af19b5eda336f4b588c87ff1cc7e03398c4927b6f908d2070b1d398fa1771c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:process.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7af19b5eda336f4b588c87ff1cc7e03398c4927b6f908d2070b1d398fa1771c->leave($__internal_e7af19b5eda336f4b588c87ff1cc7e03398c4927b6f908d2070b1d398fa1771c_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8c63534382c28ec618e3bd242acb73ec8cc5c19dbfa679684dff2ff69804de8 = $this->env->getExtension("native_profiler");
        $__internal_c8c63534382c28ec618e3bd242acb73ec8cc5c19dbfa679684dff2ff69804de8->enter($__internal_c8c63534382c28ec618e3bd242acb73ec8cc5c19dbfa679684dff2ff69804de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_c8c63534382c28ec618e3bd242acb73ec8cc5c19dbfa679684dff2ff69804de8->leave($__internal_c8c63534382c28ec618e3bd242acb73ec8cc5c19dbfa679684dff2ff69804de8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b978dada4c364975cc667f3e0b5724895bfa9a4c5e80eedf47d31749b54632 = $this->env->getExtension("native_profiler");
        $__internal_c7b978dada4c364975cc667f3e0b5724895bfa9a4c5e80eedf47d31749b54632->enter($__internal_c7b978dada4c364975cc667f3e0b5724895bfa9a4c5e80eedf47d31749b54632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"process\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <ul class=\"process\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["process"]) ? $context["process"] : $this->getContext($context, "process")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["stage"]) {
            // line 12
            echo "                        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2 == 1) && $this->getAttribute($context["loop"], "last", array()))) {
                echo "<li class=\"last\">
                        ";
            } elseif (($this->getAttribute(            // line 13
$context["loop"], "index", array()) % 2 == 1)) {
                echo "<li>
                        ";
            } elseif ($this->getAttribute(            // line 14
$context["loop"], "last", array())) {
                echo "<li class=\"process-inverted last\">
                        ";
            } else {
                // line 15
                echo "<li class=\"process-inverted\">";
            }
            // line 16
            echo "                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "id", array()), "html", null, true);
            echo "\">
                                <div class=\"process-image\">
                                    <img class=\"img-circle img-responsive\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["stage"], "webpath", array())), "page_process"), "html", null, true);
            echo "\" alt=\"\">
                                </div>
                                <div class=\"process-panel\">
                                    <div class=\"process-heading\">
                                        <h3>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "title", array()), "html", null, true);
            echo "</h3>
                                        <h4 class=\"subheading\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "name", array()), "html", null, true);
            echo "</h4>
                                    </div>
                                    <div class=\"process-body\">
                                        <p class=\"text-muted\">";
            // line 26
            echo $this->getAttribute($context["stage"], "abstract", array());
            echo "</p>
                                    </div>
                                </div>
                            </a>
                            <div class=\"modal fade\" id=\"modal";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                            <h4 class=\"modal-title\" id=\"modalLabel";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "title", array()), "html", null, true);
            echo "</h4>
                                        </div>
                                        <div class=\"modal-body\">
                                            <div class=\"row\">
                                                <div class=\"col-xs-12\">
                                                    <img class=\"img-rounded img-responsive center-block\" alt=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "name", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["stage"], "webpath", array())), "page_process_modal"), "html", null, true);
            echo "\">
                                                    <h4 class=\"subheading\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["stage"], "name", array()), "html", null, true);
            echo "</h4>
                                                    <p class=\"text-muted\">";
            // line 42
            echo $this->getAttribute($context["stage"], "content", array());
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </ul>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_c7b978dada4c364975cc667f3e0b5724895bfa9a4c5e80eedf47d31749b54632->leave($__internal_c7b978dada4c364975cc667f3e0b5724895bfa9a4c5e80eedf47d31749b54632_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:process.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 52,  165 => 42,  161 => 41,  155 => 40,  145 => 35,  137 => 30,  130 => 26,  124 => 23,  120 => 22,  113 => 18,  107 => 16,  104 => 15,  99 => 14,  95 => 13,  90 => 12,  73 => 11,  66 => 6,  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="process">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <ul class="process">*/
/*                     {% for stage in process %}*/
/*                         {% if loop.index is odd and loop.last %}<li class="last">*/
/*                         {% elseif loop.index is odd %}<li>*/
/*                         {% elseif loop.last %}<li class="process-inverted last">*/
/*                         {% else %}<li class="process-inverted">{% endif %}*/
/*                             <a href="#" data-toggle="modal" data-target="#modal{{ stage.id }}">*/
/*                                 <div class="process-image">*/
/*                                     <img class="img-circle img-responsive" src="{{ asset(stage.webpath) | imagine_filter('page_process') }}" alt="">*/
/*                                 </div>*/
/*                                 <div class="process-panel">*/
/*                                     <div class="process-heading">*/
/*                                         <h3>{{ stage.title }}</h3>*/
/*                                         <h4 class="subheading">{{ stage.name }}</h4>*/
/*                                     </div>*/
/*                                     <div class="process-body">*/
/*                                         <p class="text-muted">{{ stage.abstract|raw }}</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <div class="modal fade" id="modal{{ stage.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                                 <div class="modal-dialog modal-lg" role="document">*/
/*                                     <div class="modal-content">*/
/*                                         <div class="modal-header">*/
/*                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                             <h4 class="modal-title" id="modalLabel{{ stage.id }}">{{ stage.title }}</h4>*/
/*                                         </div>*/
/*                                         <div class="modal-body">*/
/*                                             <div class="row">*/
/*                                                 <div class="col-xs-12">*/
/*                                                     <img class="img-rounded img-responsive center-block" alt="{{ stage.name }}" src="{{ asset(stage.webpath) | imagine_filter('page_process_modal') }}">*/
/*                                                     <h4 class="subheading">{{ stage.name }}</h4>*/
/*                                                     <p class="text-muted">{{ stage.content|raw }}</p>*/
/*                                                 </div>*/
/*                                                 <div class="clearfix"></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
