<?php

/* :Page:contact.html.twig */
class __TwigTemplate_e77ba5ca7dd5db16fb5b4916c37f7e58ba6d0447ea6e54dc7df093f5e5aa37bd extends Twig_Template
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
        $__internal_3583e0131660b8c40e7574bf66b1d94a535e327ebbe140bcd39f68b1bfc8b205 = $this->env->getExtension("native_profiler");
        $__internal_3583e0131660b8c40e7574bf66b1d94a535e327ebbe140bcd39f68b1bfc8b205->enter($__internal_3583e0131660b8c40e7574bf66b1d94a535e327ebbe140bcd39f68b1bfc8b205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:contact.html.twig"));

        // line 1
        $this->displayBlock('contact', $context, $blocks);
        
        $__internal_3583e0131660b8c40e7574bf66b1d94a535e327ebbe140bcd39f68b1bfc8b205->leave($__internal_3583e0131660b8c40e7574bf66b1d94a535e327ebbe140bcd39f68b1bfc8b205_prof);

    }

    public function block_contact($context, array $blocks = array())
    {
        $__internal_3b8168f6011f0813a821fae9e0e613b0a3421ac96c27d674e03676203f796dce = $this->env->getExtension("native_profiler");
        $__internal_3b8168f6011f0813a821fae9e0e613b0a3421ac96c27d674e03676203f796dce->enter($__internal_3b8168f6011f0813a821fae9e0e613b0a3421ac96c27d674e03676203f796dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "email", array());
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
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "phonenumber", array());
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
        if ((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage"))) {
            echo $this->getAttribute((isset($context["frontpage"]) ? $context["frontpage"] : $this->getContext($context, "frontpage")), "address", array());
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
        
        $__internal_3b8168f6011f0813a821fae9e0e613b0a3421ac96c27d674e03676203f796dce->leave($__internal_3b8168f6011f0813a821fae9e0e613b0a3421ac96c27d674e03676203f796dce_prof);

    }

    public function getTemplateName()
    {
        return ":Page:contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  81 => 30,  69 => 23,  65 => 22,  53 => 15,  49 => 14,  35 => 2,  23 => 1,);
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
