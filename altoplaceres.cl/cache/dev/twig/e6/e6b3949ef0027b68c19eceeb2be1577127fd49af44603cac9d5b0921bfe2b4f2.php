<?php

/* :Page:meta.html.twig */
class __TwigTemplate_c88a4eac699b889801c61ba9063afdb6419a8762e3d7543c57971f8a73fcd3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76ccb677096b5be911566ef1b5371ca3f109c9e13b24d2c0db4e45b278c2c6ce = $this->env->getExtension("native_profiler");
        $__internal_76ccb677096b5be911566ef1b5371ca3f109c9e13b24d2c0db4e45b278c2c6ce->enter($__internal_76ccb677096b5be911566ef1b5371ca3f109c9e13b24d2c0db4e45b278c2c6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:meta.html.twig"));

        // line 1
        $this->displayBlock('meta', $context, $blocks);
        
        $__internal_76ccb677096b5be911566ef1b5371ca3f109c9e13b24d2c0db4e45b278c2c6ce->leave($__internal_76ccb677096b5be911566ef1b5371ca3f109c9e13b24d2c0db4e45b278c2c6ce_prof);

    }

    public function block_meta($context, array $blocks = array())
    {
        $__internal_9ec18b3b679a38a443d06ab55aa70469e511bd26820d0362c907022798f0ad81 = $this->env->getExtension("native_profiler");
        $__internal_9ec18b3b679a38a443d06ab55aa70469e511bd26820d0362c907022798f0ad81->enter($__internal_9ec18b3b679a38a443d06ab55aa70469e511bd26820d0362c907022798f0ad81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
";
        
        $__internal_9ec18b3b679a38a443d06ab55aa70469e511bd26820d0362c907022798f0ad81->leave($__internal_9ec18b3b679a38a443d06ab55aa70469e511bd26820d0362c907022798f0ad81_prof);

    }

    public function getTemplateName()
    {
        return ":Page:meta.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block meta %}*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="uniSign">*/
/* {% endblock %}*/
