<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_925bbacf27fcc3da3072f1e433e3f7ffecf2a943d6ef0a6d25317527e691e765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15238f1f120dc1eaeeff3f4aff45494a392c0a673664a633bcb8878ea0c22c9e = $this->env->getExtension("native_profiler");
        $__internal_15238f1f120dc1eaeeff3f4aff45494a392c0a673664a633bcb8878ea0c22c9e->enter($__internal_15238f1f120dc1eaeeff3f4aff45494a392c0a673664a633bcb8878ea0c22c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_15238f1f120dc1eaeeff3f4aff45494a392c0a673664a633bcb8878ea0c22c9e->leave($__internal_15238f1f120dc1eaeeff3f4aff45494a392c0a673664a633bcb8878ea0c22c9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */