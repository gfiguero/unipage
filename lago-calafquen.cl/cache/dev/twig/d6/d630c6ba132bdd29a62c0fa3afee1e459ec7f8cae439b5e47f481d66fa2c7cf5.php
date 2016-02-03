<?php

/* :Page:footer.html.twig */
class __TwigTemplate_94f5b689459e768606a5ad9c686a28eccb58709331c4c8ba3bbd1bce6fd8730f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea087f40f234f74d026bc08c245ca9336ca994daa11b814d5bea0d9a6d7d67f3 = $this->env->getExtension("native_profiler");
        $__internal_ea087f40f234f74d026bc08c245ca9336ca994daa11b814d5bea0d9a6d7d67f3->enter($__internal_ea087f40f234f74d026bc08c245ca9336ca994daa11b814d5bea0d9a6d7d67f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_ea087f40f234f74d026bc08c245ca9336ca994daa11b814d5bea0d9a6d7d67f3->leave($__internal_ea087f40f234f74d026bc08c245ca9336ca994daa11b814d5bea0d9a6d7d67f3_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_b4fe6145f9907aecc9c5b17aab4f5d8e16e353a19066b349a84a11947c2e93eb = $this->env->getExtension("native_profiler");
        $__internal_b4fe6145f9907aecc9c5b17aab4f5d8e16e353a19066b349a84a11947c2e93eb->enter($__internal_b4fe6145f9907aecc9c5b17aab4f5d8e16e353a19066b349a84a11947c2e93eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 2
        echo "    <footer class=\"bg-gray-lighter\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 5
        if (twig_in_filter("uni_page", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            // line 6
            echo "                    <p>";
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "title", array()), "html", null, true);
            }
            echo " - 2015. Desarrollado por uniSign.cl</p>
                ";
        } else {
            // line 8
            echo "                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                        <ul class=\"list-inline text-center\">
                            <li>
                                <p class=\"copyright text-muted\">
                                    ";
            // line 12
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("envelope fa-fw");
            echo "&nbsp;";
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "email", array()), "html", null, true);
            }
            // line 13
            echo "                                </p>
                            </li>
                            <li>
                                <p class=\"copyright text-muted\">
                                    ";
            // line 17
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("phone fa-fw");
            echo "&nbsp;";
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "phonenumber", array()), "html", null, true);
            }
            // line 18
            echo "                                </p>
                            </li>
                            <li>
                                <p class=\"copyright text-muted\">
                                    ";
            // line 22
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("map-marker fa-fw");
            echo "&nbsp;";
            if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "address", array()), "html", null, true);
            }
            // line 23
            echo "                                </p>
                            </li>
                        </ul>
                    </div>
                ";
        }
        // line 28
        echo "            </div>
        </div>
    </footer>
";
        
        $__internal_b4fe6145f9907aecc9c5b17aab4f5d8e16e353a19066b349a84a11947c2e93eb->leave($__internal_b4fe6145f9907aecc9c5b17aab4f5d8e16e353a19066b349a84a11947c2e93eb_prof);

    }

    public function getTemplateName()
    {
        return ":Page:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  86 => 23,  80 => 22,  74 => 18,  68 => 17,  62 => 13,  56 => 12,  50 => 8,  42 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }
}
/* {% block footer %}*/
/*     <footer class="bg-gray-lighter">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% if 'uni_page' in app.request.attributes.get('_route') %}*/
/*                     <p>{% if frontpage %}{{ frontpage.title }}{% endif %} - 2015. Desarrollado por uniSign.cl</p>*/
/*                 {% else  %}*/
/*                     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                         <ul class="list-inline text-center">*/
/*                             <li>*/
/*                                 <p class="copyright text-muted">*/
/*                                     {{ icon('envelope fa-fw') }}&nbsp;{% if frontpage %}{{ frontpage.email }}{% endif %}*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <p class="copyright text-muted">*/
/*                                     {{ icon('phone fa-fw') }}&nbsp;{% if frontpage %}{{ frontpage.phonenumber }}{% endif %}*/
/*                                 </p>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <p class="copyright text-muted">*/
/*                                     {{ icon('map-marker fa-fw') }}&nbsp;{% if frontpage %}{{ frontpage.address }}{% endif %}*/
/*                                 </p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 {% endif  %}*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
