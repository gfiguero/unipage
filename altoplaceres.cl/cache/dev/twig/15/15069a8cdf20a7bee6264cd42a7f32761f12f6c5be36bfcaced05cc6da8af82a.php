<?php

/* :Page:service.html.twig */
class __TwigTemplate_128a76a262cb954902c8c797173472cf51aa99f729258d3a297b0495ef7e4c4b extends Twig_Template
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
        $__internal_69e30a78017ba743f48ac7f4d2bb528ec18042129a744e1ea4c65767521469f4 = $this->env->getExtension("native_profiler");
        $__internal_69e30a78017ba743f48ac7f4d2bb528ec18042129a744e1ea4c65767521469f4->enter($__internal_69e30a78017ba743f48ac7f4d2bb528ec18042129a744e1ea4c65767521469f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:service.html.twig"));

        // line 1
        $this->displayBlock('service', $context, $blocks);
        
        $__internal_69e30a78017ba743f48ac7f4d2bb528ec18042129a744e1ea4c65767521469f4->leave($__internal_69e30a78017ba743f48ac7f4d2bb528ec18042129a744e1ea4c65767521469f4_prof);

    }

    public function block_service($context, array $blocks = array())
    {
        $__internal_bac913444f7d6f0922200b2c83aae24acfe62d628968aefd7e05b8d8053c9c0e = $this->env->getExtension("native_profiler");
        $__internal_bac913444f7d6f0922200b2c83aae24acfe62d628968aefd7e05b8d8053c9c0e->enter($__internal_bac913444f7d6f0922200b2c83aae24acfe62d628968aefd7e05b8d8053c9c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "service"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
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
        
        $__internal_bac913444f7d6f0922200b2c83aae24acfe62d628968aefd7e05b8d8053c9c0e->leave($__internal_bac913444f7d6f0922200b2c83aae24acfe62d628968aefd7e05b8d8053c9c0e_prof);

    }

    public function getTemplateName()
    {
        return ":Page:service.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  117 => 34,  113 => 33,  103 => 26,  93 => 21,  85 => 16,  79 => 13,  75 => 12,  69 => 11,  63 => 9,  46 => 8,  41 => 6,  35 => 2,  23 => 1,);
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
