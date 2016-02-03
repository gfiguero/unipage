<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_a05f3be0d2daf9f7177455e40f228fbb0387f4bace2425c2884370f7c1bb41ea extends Twig_Template
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
        $__internal_eb5230e4d3ded67e9e091fc2e6cda4bc6cda30a290d1332a021b28489a8aad02 = $this->env->getExtension("native_profiler");
        $__internal_eb5230e4d3ded67e9e091fc2e6cda4bc6cda30a290d1332a021b28489a8aad02->enter($__internal_eb5230e4d3ded67e9e091fc2e6cda4bc6cda30a290d1332a021b28489a8aad02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_eb5230e4d3ded67e9e091fc2e6cda4bc6cda30a290d1332a021b28489a8aad02->leave($__internal_eb5230e4d3ded67e9e091fc2e6cda4bc6cda30a290d1332a021b28489a8aad02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
