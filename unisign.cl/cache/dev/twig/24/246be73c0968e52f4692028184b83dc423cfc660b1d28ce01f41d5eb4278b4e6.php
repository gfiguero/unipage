<?php

/* UniPageBundle:Page:member.html.twig */
class __TwigTemplate_45ee512ce64147d0f4a9786db5d1c3d9862df60080d3c98c5e5c0a883576ecd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Page:base.html.twig", "UniPageBundle:Page:member.html.twig", 1);
        $_trait_0 = $this->loadTemplate(":Page:footer.html.twig", "UniPageBundle:Page:member.html.twig", 3);
        // line 3
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'.":Page:footer.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'footer' => array($this, 'block_footer'),
                'body' => array($this, 'block_body'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return ":Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65dda4e8a304808b9c979b56df6e4d185bb37cabdb414bc17ab791a66fc89c93 = $this->env->getExtension("native_profiler");
        $__internal_65dda4e8a304808b9c979b56df6e4d185bb37cabdb414bc17ab791a66fc89c93->enter($__internal_65dda4e8a304808b9c979b56df6e4d185bb37cabdb414bc17ab791a66fc89c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UniPageBundle:Page:member.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65dda4e8a304808b9c979b56df6e4d185bb37cabdb414bc17ab791a66fc89c93->leave($__internal_65dda4e8a304808b9c979b56df6e4d185bb37cabdb414bc17ab791a66fc89c93_prof);

    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        $__internal_20cb11acdaf5698bcc38c95f18f7dc80a7dfa9fceefbca9189b868f714f6c9b2 = $this->env->getExtension("native_profiler");
        $__internal_20cb11acdaf5698bcc38c95f18f7dc80a7dfa9fceefbca9189b868f714f6c9b2->enter($__internal_20cb11acdaf5698bcc38c95f18f7dc80a7dfa9fceefbca9189b868f714f6c9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $this->displayParentBlock("footer", $context, $blocks);
        
        $__internal_20cb11acdaf5698bcc38c95f18f7dc80a7dfa9fceefbca9189b868f714f6c9b2->leave($__internal_20cb11acdaf5698bcc38c95f18f7dc80a7dfa9fceefbca9189b868f714f6c9b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b4d7b824c2e3ba8d89cd5423529543accb7f0edbfbd11b984507beac3c4871e = $this->env->getExtension("native_profiler");
        $__internal_6b4d7b824c2e3ba8d89cd5423529543accb7f0edbfbd11b984507beac3c4871e->enter($__internal_6b4d7b824c2e3ba8d89cd5423529543accb7f0edbfbd11b984507beac3c4871e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<section id=\"member\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : $this->getContext($context, "members")));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 10
            echo "                    <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal";
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "id", array()), "html", null, true);
            echo "\">
                        <div class=\"col-xs-12 col-sm-3 col-lg-2\">
                            <div class=\"thumbnail row-no-padding text-center\">
                                <div class=\"member-photo col-xs-6 col-sm-12\">
                                    <img class=\"img-rounded img-responsive\" alt=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "firstname", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["member"], "webpath", array())), "page_member"), "html", null, true);
            echo "\">
                                </div>
                                <div class=\"member-caption col-xs-6 col-sm-12\">
                                    <h3>";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($context["member"], "firstname", array()) . " ") . $this->getAttribute($context["member"], "lastname", array())), "html", null, true);
            echo "</h3>
                                    <p>";
            // line 18
            if ($this->getAttribute($context["member"], "role", array())) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["member"], "role", array()), "name", array()), "html", null, true);
            }
            echo "</p>
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </div>
                    </a>
                    <div class=\"modal fade\" id=\"modal";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"modalLabel";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["member"], "firstname", array()) . " ") . $this->getAttribute($context["member"], "lastname", array())), "html", null, true);
            echo "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-12 col-md-6\">
                                            <img class=\"img-rounded img-responsive\" alt=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "firstname", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["member"], "webpath", array())), "page_member_modal"), "html", null, true);
            echo "\">
                                        </div>
                                        <div class=\"col-xs-12 col-md-6\">
                                            <dl>
                                                ";
            // line 38
            if ($this->getAttribute($context["member"], "role", array())) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_role"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["member"], "role", array()), "name", array()), "html", null, true);
                echo "</dd>";
            }
            // line 39
            echo "                                                ";
            if ($this->getAttribute($context["member"], "phonenumber", array())) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_phonenumber"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "phonenumber", array()), "html", null, true);
                echo "</dd>";
            }
            // line 40
            echo "                                                ";
            if ($this->getAttribute($context["member"], "email", array())) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_email"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "email", array()), "html", null, true);
                echo "</dd>";
            }
            // line 41
            echo "                                                ";
            if ($this->getAttribute($context["member"], "birthdate", array())) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_birthday"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["member"], "birthdate", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL"), "html", null, true);
                echo "</dd>";
            }
            // line 42
            echo "                                                ";
            if ($this->getAttribute($context["member"], "admissiondate", array())) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_admissiondate"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["member"], "admissiondate", array()), "full", "full", "es_ES", "America/Santiago", "d 'de' LLLL 'de' Y"), "html", null, true);
                echo "</dd>";
            }
            // line 43
            echo "                                                ";
            if ( !twig_test_empty($this->getAttribute($context["member"], "courses", array()))) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_courses"), "html", null, true);
                echo "</dt><dd>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["member"], "courses", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", array()), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "</dd>
                                                ";
            // line 44
            if ( !twig_test_empty($this->getAttribute($context["member"], "previousroles", array()))) {
                echo "<dt>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("member_previous_roles"), "html", null, true);
                echo "</dt><dd>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["member"], "previousroles", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["previousrole"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["previousrole"], "name", array()), "html", null, true);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ", ";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousrole'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "</dd>
                                            </dl>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </div>
        </div>
    </section>
";
        
        $__internal_6b4d7b824c2e3ba8d89cd5423529543accb7f0edbfbd11b984507beac3c4871e->leave($__internal_6b4d7b824c2e3ba8d89cd5423529543accb7f0edbfbd11b984507beac3c4871e_prof);

    }

    public function getTemplateName()
    {
        return "UniPageBundle:Page:member.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 54,  218 => 44,  177 => 43,  168 => 42,  159 => 41,  150 => 40,  141 => 39,  133 => 38,  124 => 34,  114 => 29,  106 => 24,  95 => 18,  91 => 17,  83 => 14,  75 => 10,  71 => 9,  66 => 6,  60 => 5,  48 => 3,  33 => 1,  14 => 3,  11 => 1,);
    }
}
/* {% extends ':Page:base.html.twig' %}*/
/* */
/* {% use ':Page:footer.html.twig' %}{% block footer %}{{ parent() }}{% endblock %}*/
/* */
/* {% block body -%}*/
/*     <section id="member">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% for member in members %}*/
/*                     <a href="#" data-toggle="modal" data-target="#modal{{ member.id }}">*/
/*                         <div class="col-xs-12 col-sm-3 col-lg-2">*/
/*                             <div class="thumbnail row-no-padding text-center">*/
/*                                 <div class="member-photo col-xs-6 col-sm-12">*/
/*                                     <img class="img-rounded img-responsive" alt="{{ member.firstname }}" src="{{ asset(member.webpath) | imagine_filter('page_member') }}">*/
/*                                 </div>*/
/*                                 <div class="member-caption col-xs-6 col-sm-12">*/
/*                                     <h3>{{ member.firstname ~ ' ' ~ member.lastname }}</h3>*/
/*                                     <p>{% if member.role %}{{ member.role.name }}{% endif %}</p>*/
/*                                 </div>*/
/*                                 <div class="clearfix"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </a>*/
/*                     <div class="modal fade" id="modal{{ member.id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*                         <div class="modal-dialog modal-lg" role="document">*/
/*                             <div class="modal-content">*/
/*                                 <div class="modal-header">*/
/*                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                                     <h4 class="modal-title" id="modalLabel{{ member.id }}">{{ member.firstname ~ ' ' ~ member.lastname }}</h4>*/
/*                                 </div>*/
/*                                 <div class="modal-body">*/
/*                                     <div class="row">*/
/*                                         <div class="col-xs-12 col-md-6">*/
/*                                             <img class="img-rounded img-responsive" alt="{{ member.firstname }}" src="{{ asset(member.webpath) | imagine_filter('page_member_modal') }}">*/
/*                                         </div>*/
/*                                         <div class="col-xs-12 col-md-6">*/
/*                                             <dl>*/
/*                                                 {% if member.role %}<dt>{{ 'member_role'|trans }}</dt><dd>{{ member.role.name }}</dd>{% endif %}*/
/*                                                 {% if member.phonenumber %}<dt>{{ 'member_phonenumber'|trans }}</dt><dd>{{ member.phonenumber }}</dd>{% endif %}*/
/*                                                 {% if member.email %}<dt>{{ 'member_email'|trans }}</dt><dd>{{ member.email }}</dd>{% endif %}*/
/*                                                 {% if member.birthdate %}<dt>{{ 'member_birthday'|trans }}</dt><dd>{{ member.birthdate|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL") }}</dd>{% endif %}*/
/*                                                 {% if member.admissiondate %}<dt>{{ 'member_admissiondate'|trans }}</dt><dd>{{ member.admissiondate|localizeddate('full', 'full', 'es_ES', 'America/Santiago', "d 'de' LLLL 'de' Y") }}</dd>{% endif %}*/
/*                                                 {% if member.courses is not empty %}<dt>{{ 'member_courses'|trans }}</dt><dd>{% for course in member.courses %}{{ course.name }}{% if not loop.last %}, {% endif %}{% endfor %}{% endif %}</dd>*/
/*                                                 {% if member.previousroles is not empty %}<dt>{{ 'member_previous_roles'|trans }}</dt><dd>{% for previousrole in member.previousroles %}{{ previousrole.name }}{% if not loop.last %}, {% endif %}{% endfor %}{% endif %}</dd>*/
/*                                             </dl>*/
/*                                         </div>*/
/*                                         <div class="clearfix"></div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/