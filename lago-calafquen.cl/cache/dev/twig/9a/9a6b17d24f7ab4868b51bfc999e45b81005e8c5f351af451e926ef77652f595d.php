<?php

/* :Page:contact.html.twig */
class __TwigTemplate_4d34b2976c3deebb5fde9f367d68eb2874e678382885d0bd2e0b05774313151b extends Twig_Template
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
        $__internal_553190d5633ed7e47bbf9e3764b5f245f57e281417ec02b07722f140f411eb0d = $this->env->getExtension("native_profiler");
        $__internal_553190d5633ed7e47bbf9e3764b5f245f57e281417ec02b07722f140f411eb0d->enter($__internal_553190d5633ed7e47bbf9e3764b5f245f57e281417ec02b07722f140f411eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:contact.html.twig"));

        // line 1
        $this->displayBlock('contact', $context, $blocks);
        
        $__internal_553190d5633ed7e47bbf9e3764b5f245f57e281417ec02b07722f140f411eb0d->leave($__internal_553190d5633ed7e47bbf9e3764b5f245f57e281417ec02b07722f140f411eb0d_prof);

    }

    public function block_contact($context, array $blocks = array())
    {
        $__internal_5272aecea25ef8148d81527469e6843dc91de25def1c81dcb388d76ad1007cc8 = $this->env->getExtension("native_profiler");
        $__internal_5272aecea25ef8148d81527469e6843dc91de25def1c81dcb388d76ad1007cc8->enter($__internal_5272aecea25ef8148d81527469e6843dc91de25def1c81dcb388d76ad1007cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_5272aecea25ef8148d81527469e6843dc91de25def1c81dcb388d76ad1007cc8->leave($__internal_5272aecea25ef8148d81527469e6843dc91de25def1c81dcb388d76ad1007cc8_prof);

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
