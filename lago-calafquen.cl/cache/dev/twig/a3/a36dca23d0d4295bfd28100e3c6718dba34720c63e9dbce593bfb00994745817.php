<?php

/* :Page:title.html.twig */
class __TwigTemplate_6db9325b74e9e287b527caadb634928d311d1e53dcb8a3b90ba5d3c33292d202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'brand' => array($this, 'block_brand'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfa06971e4790e082cc70c4c27bc4a56836c5fcd5c529924e84f4a9e4348b1b5 = $this->env->getExtension("native_profiler");
        $__internal_bfa06971e4790e082cc70c4c27bc4a56836c5fcd5c529924e84f4a9e4348b1b5->enter($__internal_bfa06971e4790e082cc70c4c27bc4a56836c5fcd5c529924e84f4a9e4348b1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Page:title.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_bfa06971e4790e082cc70c4c27bc4a56836c5fcd5c529924e84f4a9e4348b1b5->leave($__internal_bfa06971e4790e082cc70c4c27bc4a56836c5fcd5c529924e84f4a9e4348b1b5_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_8340527774ab2b30819f4265999667ab25968f981b83181ec86202094e987956 = $this->env->getExtension("native_profiler");
        $__internal_8340527774ab2b30819f4265999667ab25968f981b83181ec86202094e987956->enter($__internal_8340527774ab2b30819f4265999667ab25968f981b83181ec86202094e987956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    <title>
        ";
        // line 3
        $this->displayBlock('brand', $context, $blocks);
        // line 4
        echo "    </title>
";
        
        $__internal_8340527774ab2b30819f4265999667ab25968f981b83181ec86202094e987956->leave($__internal_8340527774ab2b30819f4265999667ab25968f981b83181ec86202094e987956_prof);

    }

    // line 3
    public function block_brand($context, array $blocks = array())
    {
        $__internal_f4d6c3f8bb367e240872151d453445cfd5d62ebe09d8824b3864bb96bd088dab = $this->env->getExtension("native_profiler");
        $__internal_f4d6c3f8bb367e240872151d453445cfd5d62ebe09d8824b3864bb96bd088dab->enter($__internal_f4d6c3f8bb367e240872151d453445cfd5d62ebe09d8824b3864bb96bd088dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_f4d6c3f8bb367e240872151d453445cfd5d62ebe09d8824b3864bb96bd088dab->leave($__internal_f4d6c3f8bb367e240872151d453445cfd5d62ebe09d8824b3864bb96bd088dab_prof);

    }

    public function getTemplateName()
    {
        return ":Page:title.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  41 => 4,  39 => 3,  36 => 2,  24 => 1,);
    }
}
/* {% block title %}*/
/*     <title>*/
/*         {% block brand %}{% endblock %}*/
/*     </title>*/
/* {% endblock %}*/
/* */
