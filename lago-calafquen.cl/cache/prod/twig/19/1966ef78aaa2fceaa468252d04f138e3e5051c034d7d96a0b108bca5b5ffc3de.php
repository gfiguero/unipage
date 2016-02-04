<?php

/* :Page:service.html.twig */
class __TwigTemplate_9590c8206b957bb28c356a922e04e9560c95cac25eec0660faa5f48b88e31298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'service' => array($this, 'block_service'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('service', $context, $blocks);
    }

    public function block_service($context, array $blocks = array())
    {
        // line 2
        echo "    <section id=\"service\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <h2 class=\"section-heading\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("service_index"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 9
            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-md-4 text-center\">
                            <img class=\"img-circle img-responsive center-block\" alt=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["service"], "webpath", array())), "page_service"), "html", null, true);
            echo "\">
                            <h3 class=\"service-heading\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</h3>
                            <p class=\"text-muted\">";
            // line 13
            echo $this->getAttribute($context["service"], "abstract", array());
            echo "</p>
                        </div>
                    </a>
                    <div class=\"modal fade\" id=\"modal";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"modalLabel";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "title", array()), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12\">
                                            <p class=\"text-muted\">";
            // line 26
            echo $this->getAttribute($context["service"], "content", array());
            echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            // line 33
            if ((0 == $this->getAttribute($context["loop"], "index", array()) % 3)) {
                echo "<div class=\"clearfix\"></div>";
            }
            // line 34
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return ":Page:service.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 35,  108 => 34,  104 => 33,  94 => 26,  84 => 21,  76 => 16,  70 => 13,  66 => 12,  60 => 11,  54 => 9,  37 => 8,  32 => 6,  26 => 2,  20 => 1,);
    }
}
/* {% block service %}*/
/*     <section id="service">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12 text-center">*/
/*                     <h2 class="section-heading">{{ "service_index"|trans }}</h2>*/
/*                 </div>*/
/*                 {% for service in services %}*/
/*                     <a href="#" data-toggle="modal" data-target="#modal{{ service.id }}">*/
/*                         <div class="col-md-4 text-center">*/
/*                             <img class="img-circle img-responsive center-block" alt="{{ service.title }}" src="{{ asset(service.webpath) | imagine_filter('page_service') }}">*/
/*                             <h3 class="service-heading">{{ service.title }}</h3>*/
/*                             <p class="text-muted">{{ service.abstract|raw }}</p>*/
/*                         </div>*/
/*                     </a>*/
/*                     <div class="modal fade" id="modal{{ service.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                         <div class="modal-dialog modal-lg" role="document">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                     <h4 class="modal-title" id="modalLabel{{ service.id }}">{{ service.title }}</h4>*/
/*                                 </div>*/
/*                                 <div class="modal-body">*/
/*                                     <div class="row">*/
/*                                         <div class="col-xs-12">*/
/*                                             <p class="text-muted">{{ service.content|raw }}</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% if loop.index is divisible by(3) %}<div class="clearfix"></div>{% endif %}*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
