<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_7cd9345e0e2c644548a61d6f13abd5d7ea90a4890fcebb9951bf8d35094ef884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cc8aa123c5d7a0af6ea2787246b7752754d0feadc32fdf9267f25b168b42acf = $this->env->getExtension("native_profiler");
        $__internal_3cc8aa123c5d7a0af6ea2787246b7752754d0feadc32fdf9267f25b168b42acf->enter($__internal_3cc8aa123c5d7a0af6ea2787246b7752754d0feadc32fdf9267f25b168b42acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3cc8aa123c5d7a0af6ea2787246b7752754d0feadc32fdf9267f25b168b42acf->leave($__internal_3cc8aa123c5d7a0af6ea2787246b7752754d0feadc32fdf9267f25b168b42acf_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83cc506e8952a9a382109e67cb1ad2062e405f74676df20cfd5c33b76591e524 = $this->env->getExtension("native_profiler");
        $__internal_83cc506e8952a9a382109e67cb1ad2062e405f74676df20cfd5c33b76591e524->enter($__internal_83cc506e8952a9a382109e67cb1ad2062e405f74676df20cfd5c33b76591e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83cc506e8952a9a382109e67cb1ad2062e405f74676df20cfd5c33b76591e524->leave($__internal_83cc506e8952a9a382109e67cb1ad2062e405f74676df20cfd5c33b76591e524_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_48ad7e22d21f6e620135e9dd39a2d67981f93da79381932fc4e04b4ddf605f1f = $this->env->getExtension("native_profiler");
        $__internal_48ad7e22d21f6e620135e9dd39a2d67981f93da79381932fc4e04b4ddf605f1f->enter($__internal_48ad7e22d21f6e620135e9dd39a2d67981f93da79381932fc4e04b4ddf605f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48ad7e22d21f6e620135e9dd39a2d67981f93da79381932fc4e04b4ddf605f1f->leave($__internal_48ad7e22d21f6e620135e9dd39a2d67981f93da79381932fc4e04b4ddf605f1f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3e4c1cd495378ed6adfa28b47af77cc2174785439b641859922dffc0fdb38260 = $this->env->getExtension("native_profiler");
        $__internal_3e4c1cd495378ed6adfa28b47af77cc2174785439b641859922dffc0fdb38260->enter($__internal_3e4c1cd495378ed6adfa28b47af77cc2174785439b641859922dffc0fdb38260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3e4c1cd495378ed6adfa28b47af77cc2174785439b641859922dffc0fdb38260->leave($__internal_3e4c1cd495378ed6adfa28b47af77cc2174785439b641859922dffc0fdb38260_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
