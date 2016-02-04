<?php

/* :Page:footer.html.twig */
class __TwigTemplate_a21feedd5d8c72e11af26fa4ef37e45de0caa03de0195d8380416fbae68359c8 extends Twig_Template
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
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "    <footer class=\"bg-gray-lighter\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 5
        if (twig_in_filter("uni_page", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
            // line 6
            echo "                    <p>";
            if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "title", array()), "html", null, true);
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
            if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "email", array()), "html", null, true);
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
            if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "phonenumber", array()), "html", null, true);
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
            if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "address", array()), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return ":Page:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  77 => 23,  71 => 22,  65 => 18,  59 => 17,  53 => 13,  47 => 12,  41 => 8,  33 => 6,  31 => 5,  26 => 2,  20 => 1,);
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
