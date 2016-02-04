<?php

/* :Page:meta.html.twig */
class __TwigTemplate_8fdf021101fdb058bf4722bc4443ca91157e1d1b7da97e2ad444ce16477c41db extends Twig_Template
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
        $__internal_df7481255e4887ca8bc1893855d7fae97207c260f94183ff8ab5e2f12e959721 = $this->env->getExtension("native_profiler");
        $__internal_df7481255e4887ca8bc1893855d7fae97207c260f94183ff8ab5e2f12e959721->enter($__internal_df7481255e4887ca8bc1893855d7fae97207c260f94183ff8ab5e2f12e959721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:meta.html.twig"));

        // line 1
        $this->displayBlock('meta', $context, $blocks);
        
        $__internal_df7481255e4887ca8bc1893855d7fae97207c260f94183ff8ab5e2f12e959721->leave($__internal_df7481255e4887ca8bc1893855d7fae97207c260f94183ff8ab5e2f12e959721_prof);

    }

    public function block_meta($context, array $blocks = array())
    {
        $__internal_4d5d6a0b9a40aef6a1353aa5d5539ea70932fbe318816a9c852b8efad7417ea9 = $this->env->getExtension("native_profiler");
        $__internal_4d5d6a0b9a40aef6a1353aa5d5539ea70932fbe318816a9c852b8efad7417ea9->enter($__internal_4d5d6a0b9a40aef6a1353aa5d5539ea70932fbe318816a9c852b8efad7417ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"uniSign\">
";
        
        $__internal_4d5d6a0b9a40aef6a1353aa5d5539ea70932fbe318816a9c852b8efad7417ea9->leave($__internal_4d5d6a0b9a40aef6a1353aa5d5539ea70932fbe318816a9c852b8efad7417ea9_prof);

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
