<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_cc63ce39ce699bab446bc21b604ecd600d90f90f3bd7bc9d9c83e36e60d21874 extends Twig_Template
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
        $__internal_f7fd587a59c9636199e1d608a9ff8ca6576777fff0d3863384b5bb52dd69f786 = $this->env->getExtension("native_profiler");
        $__internal_f7fd587a59c9636199e1d608a9ff8ca6576777fff0d3863384b5bb52dd69f786->enter($__internal_f7fd587a59c9636199e1d608a9ff8ca6576777fff0d3863384b5bb52dd69f786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f7fd587a59c9636199e1d608a9ff8ca6576777fff0d3863384b5bb52dd69f786->leave($__internal_f7fd587a59c9636199e1d608a9ff8ca6576777fff0d3863384b5bb52dd69f786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
