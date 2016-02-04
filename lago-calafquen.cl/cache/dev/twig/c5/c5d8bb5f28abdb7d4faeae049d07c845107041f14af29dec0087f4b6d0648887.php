<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_b10b2e33c5c386a2effb76077517f43672133941406f11da525eee153afda4a2 extends Twig_Template
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
        $__internal_7c7c21ec2b0086c6cd8a2fb382a281154c0643c71b518659d3643a4c3555eba3 = $this->env->getExtension("native_profiler");
        $__internal_7c7c21ec2b0086c6cd8a2fb382a281154c0643c71b518659d3643a4c3555eba3->enter($__internal_7c7c21ec2b0086c6cd8a2fb382a281154c0643c71b518659d3643a4c3555eba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_7c7c21ec2b0086c6cd8a2fb382a281154c0643c71b518659d3643a4c3555eba3->leave($__internal_7c7c21ec2b0086c6cd8a2fb382a281154c0643c71b518659d3643a4c3555eba3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  36 => 6,  30 => 4,  28 => 3,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
