<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_a29a7d20d8fecd3ff1dc9513cc68c8fffc7a997e206a1c6fe1e11a188b2ba5de extends Twig_Template
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
        $__internal_b530b1b37d5023f85fb70ff1a203d15a61f7d1ba6ef4e4df5717857c5382fc80 = $this->env->getExtension("native_profiler");
        $__internal_b530b1b37d5023f85fb70ff1a203d15a61f7d1ba6ef4e4df5717857c5382fc80->enter($__internal_b530b1b37d5023f85fb70ff1a203d15a61f7d1ba6ef4e4df5717857c5382fc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_b530b1b37d5023f85fb70ff1a203d15a61f7d1ba6ef4e4df5717857c5382fc80->leave($__internal_b530b1b37d5023f85fb70ff1a203d15a61f7d1ba6ef4e4df5717857c5382fc80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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
/* <form action="{{ path('fos_user_group_edit', {'groupname': groupname} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */