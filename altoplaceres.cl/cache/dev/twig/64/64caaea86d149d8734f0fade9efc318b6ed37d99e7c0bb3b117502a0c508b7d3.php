<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_5c2d986552313a799dabd86fb817997bb3f7b46ff87cd6c1c07579d7fb5c5757 extends Twig_Template
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
        $__internal_78c12e945e705f20a9fa9787374d50ce18e0089f639b8204c62b555bb00176cb = $this->env->getExtension("native_profiler");
        $__internal_78c12e945e705f20a9fa9787374d50ce18e0089f639b8204c62b555bb00176cb->enter($__internal_78c12e945e705f20a9fa9787374d50ce18e0089f639b8204c62b555bb00176cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_78c12e945e705f20a9fa9787374d50ce18e0089f639b8204c62b555bb00176cb->leave($__internal_78c12e945e705f20a9fa9787374d50ce18e0089f639b8204c62b555bb00176cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
