<?php

/* :Menu:menu.html.twig */
class __TwigTemplate_a5584de8bd8c8a211de3ab4f451f6871c55760e6e65cce4755b7218a552346ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Menu:menu_base.html.twig", ":Menu:menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45e0b9378fe69e50cf24f16db247df7ceace8ed1ce6ad1affda5bd2e0ffd1579 = $this->env->getExtension("native_profiler");
        $__internal_45e0b9378fe69e50cf24f16db247df7ceace8ed1ce6ad1affda5bd2e0ffd1579->enter($__internal_45e0b9378fe69e50cf24f16db247df7ceace8ed1ce6ad1affda5bd2e0ffd1579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Menu:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45e0b9378fe69e50cf24f16db247df7ceace8ed1ce6ad1affda5bd2e0ffd1579->leave($__internal_45e0b9378fe69e50cf24f16db247df7ceace8ed1ce6ad1affda5bd2e0ffd1579_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_802a680dd513e9f73ad91563e6e83cba6bbef8a89ad4ce8e6829783787cf6a55 = $this->env->getExtension("native_profiler");
        $__internal_802a680dd513e9f73ad91563e6e83cba6bbef8a89ad4ce8e6829783787cf6a55->enter($__internal_802a680dd513e9f73ad91563e6e83cba6bbef8a89ad4ce8e6829783787cf6a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_802a680dd513e9f73ad91563e6e83cba6bbef8a89ad4ce8e6829783787cf6a55->leave($__internal_802a680dd513e9f73ad91563e6e83cba6bbef8a89ad4ce8e6829783787cf6a55_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_ab0c1858be6c7d51054d1dd50c88932634ed88820658938cc6b655eb5c948eb8 = $this->env->getExtension("native_profiler");
        $__internal_ab0c1858be6c7d51054d1dd50c88932634ed88820658938cc6b655eb5c948eb8->enter($__internal_ab0c1858be6c7d51054d1dd50c88932634ed88820658938cc6b655eb5c948eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_ab0c1858be6c7d51054d1dd50c88932634ed88820658938cc6b655eb5c948eb8->leave($__internal_ab0c1858be6c7d51054d1dd50c88932634ed88820658938cc6b655eb5c948eb8_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_20b9661bfe0071b1a526c6e8da7d2e600b3c4f57875c0774e9a9d5827ce75b12 = $this->env->getExtension("native_profiler");
        $__internal_20b9661bfe0071b1a526c6e8da7d2e600b3c4f57875c0774e9a9d5827ce75b12->enter($__internal_20b9661bfe0071b1a526c6e8da7d2e600b3c4f57875c0774e9a9d5827ce75b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_20b9661bfe0071b1a526c6e8da7d2e600b3c4f57875c0774e9a9d5827ce75b12->leave($__internal_20b9661bfe0071b1a526c6e8da7d2e600b3c4f57875c0774e9a9d5827ce75b12_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_0fd78ad55ac317395bebc01738efc653ab6a9f443a60fe3d253a2988907cfd99 = $this->env->getExtension("native_profiler");
        $__internal_0fd78ad55ac317395bebc01738efc653ab6a9f443a60fe3d253a2988907cfd99->enter($__internal_0fd78ad55ac317395bebc01738efc653ab6a9f443a60fe3d253a2988907cfd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_0fd78ad55ac317395bebc01738efc653ab6a9f443a60fe3d253a2988907cfd99->leave($__internal_0fd78ad55ac317395bebc01738efc653ab6a9f443a60fe3d253a2988907cfd99_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_8f0c05f9ee6973e83aee72b13fa4a76ffca50f85ba6f49f4ac89ee9b74579026 = $this->env->getExtension("native_profiler");
        $__internal_8f0c05f9ee6973e83aee72b13fa4a76ffca50f85ba6f49f4ac89ee9b74579026->enter($__internal_8f0c05f9ee6973e83aee72b13fa4a76ffca50f85ba6f49f4ac89ee9b74579026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li>";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 91
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_8f0c05f9ee6973e83aee72b13fa4a76ffca50f85ba6f49f4ac89ee9b74579026->leave($__internal_8f0c05f9ee6973e83aee72b13fa4a76ffca50f85ba6f49f4ac89ee9b74579026_prof);

    }

    // line 96
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_8da9168bc2735aa6944ceb9fa18ac58da69c5136d9889234f125c43ce59d24b2 = $this->env->getExtension("native_profiler");
        $__internal_8da9168bc2735aa6944ceb9fa18ac58da69c5136d9889234f125c43ce59d24b2->enter($__internal_8da9168bc2735aa6944ceb9fa18ac58da69c5136d9889234f125c43ce59d24b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 97
        echo "    ";
        $context["knp_menu"] = $this;
        // line 98
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
        ";
        // line 99
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_8da9168bc2735aa6944ceb9fa18ac58da69c5136d9889234f125c43ce59d24b2->leave($__internal_8da9168bc2735aa6944ceb9fa18ac58da69c5136d9889234f125c43ce59d24b2_prof);

    }

    // line 103
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_69f72b62fb79650f7ddec596f14006518d38397917dff62dbda2628799bb8a51 = $this->env->getExtension("native_profiler");
        $__internal_69f72b62fb79650f7ddec596f14006518d38397917dff62dbda2628799bb8a51->enter($__internal_69f72b62fb79650f7ddec596f14006518d38397917dff62dbda2628799bb8a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 104
        echo "    ";
        $context["knp_menu"] = $this;
        // line 105
        echo "    <a href=\"#\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">
        ";
        // line 106
        $this->displayBlock("label", $context, $blocks);
        echo "
        <span class=\"fa arrow\"></span>
    </a>
";
        
        $__internal_69f72b62fb79650f7ddec596f14006518d38397917dff62dbda2628799bb8a51->leave($__internal_69f72b62fb79650f7ddec596f14006518d38397917dff62dbda2628799bb8a51_prof);

    }

    // line 111
    public function block_label($context, array $blocks = array())
    {
        $__internal_a0d7f43890a34a39561f1f2e2e90af8b0bdb1344de18a4c01b85d9900a5c9c45 = $this->env->getExtension("native_profiler");
        $__internal_a0d7f43890a34a39561f1f2e2e90af8b0bdb1344de18a4c01b85d9900a5c9c45->enter($__internal_a0d7f43890a34a39561f1f2e2e90af8b0bdb1344de18a4c01b85d9900a5c9c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 112
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"));
        }
        // line 113
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "
    ";
        
        $__internal_a0d7f43890a34a39561f1f2e2e90af8b0bdb1344de18a4c01b85d9900a5c9c45->leave($__internal_a0d7f43890a34a39561f1f2e2e90af8b0bdb1344de18a4c01b85d9900a5c9c45_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a9ecd2e94f57775e93ba2765d60bc876216ce2275f99e69406c355faf89b37f7 = $this->env->getExtension("native_profiler");
            $__internal_a9ecd2e94f57775e93ba2765d60bc876216ce2275f99e69406c355faf89b37f7->enter($__internal_a9ecd2e94f57775e93ba2765d60bc876216ce2275f99e69406c355faf89b37f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_a9ecd2e94f57775e93ba2765d60bc876216ce2275f99e69406c355faf89b37f7->leave($__internal_a9ecd2e94f57775e93ba2765d60bc876216ce2275f99e69406c355faf89b37f7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return ":Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 6,  342 => 5,  338 => 4,  323 => 3,  313 => 113,  308 => 112,  302 => 111,  291 => 106,  286 => 105,  283 => 104,  277 => 103,  267 => 99,  260 => 98,  257 => 97,  251 => 96,  239 => 91,  237 => 90,  235 => 89,  231 => 86,  227 => 84,  225 => 83,  223 => 82,  220 => 81,  217 => 78,  215 => 77,  213 => 76,  210 => 73,  207 => 72,  204 => 71,  202 => 70,  199 => 69,  196 => 68,  193 => 66,  190 => 64,  188 => 63,  185 => 61,  183 => 60,  180 => 58,  178 => 57,  176 => 56,  174 => 55,  172 => 54,  170 => 52,  164 => 51,  157 => 48,  155 => 47,  138 => 44,  121 => 43,  118 => 41,  116 => 40,  113 => 37,  111 => 36,  109 => 34,  107 => 33,  101 => 31,  90 => 26,  85 => 25,  82 => 24,  80 => 23,  74 => 22,  67 => 19,  65 => 18,  59 => 17,  49 => 13,  47 => 12,  41 => 11,  11 => 1,);
    }
}
/* {% extends ':Menu:menu_base.html.twig' %}*/
/* */
/* {% macro attributes(attributes) %}*/
/* {% for name, value in attributes %}*/
/*     {%- if value is not none and value is not same as(false) -%}*/
/*         {{- ' %s="%s"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}*/
/*     {%- endif -%}*/
/* {%- endfor -%}*/
/* {% endmacro %}*/
/* */
/* {% block compressed_root %}*/
/* {% spaceless %}*/
/* {{ block('root') }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block root %}*/
/* {% set listAttributes = item.childrenAttributes %}*/
/* {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block list %}*/
/* {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}*/
/*     {% import _self as knp_menu %}*/
/*     <ul{{ knp_menu.attributes(listAttributes) }}>*/
/*         {{ block('children') }}*/
/*     </ul>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block children %}*/
/* {# save current variables #}*/
/* {% set currentOptions = options %}*/
/* {% set currentItem = item %}*/
/* {# update the depth for children #}*/
/* {% if options.depth is not none %}*/
/* {% set options = options|merge({'depth': currentOptions.depth - 1}) %}*/
/* {% endif %}*/
/* {# update the matchingDepth for children #}*/
/* {% if options.matchingDepth is not none and options.matchingDepth > 0 %}*/
/* {% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}*/
/* {% endif %}*/
/* {% for item in currentItem.children %}*/
/*     {{ block('item') }}*/
/* {% endfor %}*/
/* {# restore current variables #}*/
/* {% set item = currentItem %}*/
/* {% set options = currentOptions %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/* {% if item.displayed %}*/
/* {# building the class of the item #}*/
/*     {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}*/
/*     {%- if matcher.isCurrent(item) %}*/
/*         {%- set classes = classes|merge([options.currentClass]) %}*/
/*     {%- elseif matcher.isAncestor(item, options.matchingDepth) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeFirst %}*/
/*         {%- set classes = classes|merge([options.firstClass]) %}*/
/*     {%- endif %}*/
/*     {%- if item.actsLikeLast %}*/
/*         {%- set classes = classes|merge([options.lastClass]) %}*/
/*     {%- endif %}*/
/* */
/*     {# Mark item as "leaf" (no children) or as "branch" (has children that are displayed) #}*/
/*     {% if item.hasChildren and options.depth is not same as(0) %}*/
/*         {% if options.branch_class is not empty and item.displayChildren %}*/
/*             {%- set classes = classes|merge([options.branch_class]) %}*/
/*         {% endif %}*/
/*     {% elseif options.leaf_class is not empty %}*/
/*         {%- set classes = classes|merge([options.leaf_class]) %}*/
/*     {%- endif %}*/
/* */
/*     {%- set attributes = item.attributes %}*/
/*     {%- if classes is not empty %}*/
/*         {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}*/
/*     {%- endif %}*/
/* {# displaying the item #}*/
/*     {% import _self as knp_menu %}*/
/*     <li>*/
/*         {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}*/
/*         {{ block('linkElement') }}*/
/*         {%- else %}*/
/*         {{ block('spanElement') }}*/
/*         {%- endif %}*/
/* {# render the list of children#}*/
/*         {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}*/
/*         {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}*/
/*         {{ block('list') }}*/
/*     </li>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {% import _self as knp_menu %}*/
/*     <a href="{{ item.uri }}"{{ knp_menu.attributes(item.linkAttributes) }}>*/
/*         {{ block('label') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     {% import _self as knp_menu %}*/
/*     <a href="#"{{ knp_menu.attributes(item.labelAttributes) }}>*/
/*         {{ block('label') }}*/
/*         <span class="fa arrow"></span>*/
/*     </a>*/
/* {% endblock %}*/
/* */
/* {% block label %}*/
/*     {% if item.attribute('icon') is not empty  %}{{ icon(item.attribute('icon')) }}{% endif %}*/
/*     {{ item.label|trans }}*/
/*     {#}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw|trans }}{% else %}{{ item.label|trans }}{% endif %}{#}*/
/* {% endblock %}*/
/* */