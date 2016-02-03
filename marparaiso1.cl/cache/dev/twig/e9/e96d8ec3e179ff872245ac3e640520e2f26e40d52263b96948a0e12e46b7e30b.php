<?php

/* :Page:contact.html.twig */
class __TwigTemplate_3af4f1854fec5d16dd1a8bb203d9986937eb231d42d6042567b7594ba7eba1d8 extends Twig_Template
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
        $__internal_4baf5f723ec678c098378dad7316956b59d4b73d406c58c85dabbe6b4d663aae = $this->env->getExtension("native_profiler");
        $__internal_4baf5f723ec678c098378dad7316956b59d4b73d406c58c85dabbe6b4d663aae->enter($__internal_4baf5f723ec678c098378dad7316956b59d4b73d406c58c85dabbe6b4d663aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:contact.html.twig"));

        // line 1
        $this->displayBlock('contact', $context, $blocks);
        
        $__internal_4baf5f723ec678c098378dad7316956b59d4b73d406c58c85dabbe6b4d663aae->leave($__internal_4baf5f723ec678c098378dad7316956b59d4b73d406c58c85dabbe6b4d663aae_prof);

    }

    public function block_contact($context, array $blocks = array())
    {
        $__internal_4efe64dcf1de6126ea2880f4664e8620633dd418e1b647445cb7c249b8590b78 = $this->env->getExtension("native_profiler");
        $__internal_4efe64dcf1de6126ea2880f4664e8620633dd418e1b647445cb7c249b8590b78->enter($__internal_4efe64dcf1de6126ea2880f4664e8620633dd418e1b647445cb7c249b8590b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        
        $__internal_4efe64dcf1de6126ea2880f4664e8620633dd418e1b647445cb7c249b8590b78->leave($__internal_4efe64dcf1de6126ea2880f4664e8620633dd418e1b647445cb7c249b8590b78_prof);

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
