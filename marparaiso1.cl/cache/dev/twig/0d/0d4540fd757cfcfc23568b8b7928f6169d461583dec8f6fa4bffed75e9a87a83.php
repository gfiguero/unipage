<?php

/* :Page:footer.html.twig */
class __TwigTemplate_973a62a8e1378c3712201c9ca67d0916984a3a47dd92809f860fc9f7ef692403 extends Twig_Template
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
        $__internal_bebfa6b507fa983e6321f4c0ae0d6f44e60793201b692877f6df1cb61a08b85b = $this->env->getExtension("native_profiler");
        $__internal_bebfa6b507fa983e6321f4c0ae0d6f44e60793201b692877f6df1cb61a08b85b->enter($__internal_bebfa6b507fa983e6321f4c0ae0d6f44e60793201b692877f6df1cb61a08b85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:footer.html.twig"));

        // line 1
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_bebfa6b507fa983e6321f4c0ae0d6f44e60793201b692877f6df1cb61a08b85b->leave($__internal_bebfa6b507fa983e6321f4c0ae0d6f44e60793201b692877f6df1cb61a08b85b_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_83c1069bf4cd5ea0c1ed0cd0ed32591af25908598abebc05e9ed5f7b91913774 = $this->env->getExtension("native_profiler");
        $__internal_83c1069bf4cd5ea0c1ed0cd0ed32591af25908598abebc05e9ed5f7b91913774->enter($__internal_83c1069bf4cd5ea0c1ed0cd0ed32591af25908598abebc05e9ed5f7b91913774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_83c1069bf4cd5ea0c1ed0cd0ed32591af25908598abebc05e9ed5f7b91913774->leave($__internal_83c1069bf4cd5ea0c1ed0cd0ed32591af25908598abebc05e9ed5f7b91913774_prof);

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
