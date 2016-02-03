<?php

/* :Page:contact.html.twig */
class __TwigTemplate_a48cfa6c1ab6b9feaac098ab164e7bb0caeb3ed84f9a9161352058754ef10739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('contact', $context, $blocks);
    }

    public function block_contact($context, array $blocks = array())
    {
        // line 2
        echo "    <section id=\"contact\" class=\"contact contact-image\">
        <div class=\"container\">
            <div class=\"row text-center\">

                <div class=\"col-lg-12\">
                    <h2 class=\"section-heading\">Contacto</h2>
                </div>

                <div class=\"col-sm-6 col-sm-offset-3\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3 text-left\">";
        // line 14
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("envelope fa-2x");
        echo "</div>
                                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 15
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "email", array());
        }
        echo "</div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3 text-left\">";
        // line 22
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("phone fa-2x");
        echo "</div>
                                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 23
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "phonenumber", array());
        }
        echo "</div></div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <div class=\"row\">
                                <div class=\"col-xs-3 text-left\">";
        // line 30
        echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("map-marker fa-2x");
        echo "</div>
                                <div class=\"col-xs-9 text-right\"><div class=\"huge\">";
        // line 31
        if ((isset($context["frontpage"]) ? $context["frontpage"] : null)) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : null), "address", array());
        }
        echo "</div></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return ":Page:contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 31,  72 => 30,  60 => 23,  56 => 22,  44 => 15,  40 => 14,  26 => 2,  20 => 1,);
    }
}
/* {% block contact %}*/
/*     <section id="contact" class="contact contact-image">*/
/*         <div class="container">*/
/*             <div class="row text-center">*/
/* */
/*                 <div class="col-lg-12">*/
/*                     <h2 class="section-heading">Contacto</h2>*/
/*                 </div>*/
/* */
/*                 <div class="col-sm-6 col-sm-offset-3">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-3 text-left">{{ icon('envelope fa-2x') }}</div>*/
/*                                 <div class="col-xs-9 text-right"><div class="huge">{% if frontpage %}{{ frontpage.email|raw }}{% endif %}</div></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-3 text-left">{{ icon('phone fa-2x') }}</div>*/
/*                                 <div class="col-xs-9 text-right"><div class="huge">{% if frontpage %}{{ frontpage.phonenumber|raw }}{% endif %}</div></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-3 text-left">{{ icon('map-marker fa-2x') }}</div>*/
/*                                 <div class="col-xs-9 text-right"><div class="huge">{% if frontpage %}{{ frontpage.address|raw }}{% endif %}</div></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
