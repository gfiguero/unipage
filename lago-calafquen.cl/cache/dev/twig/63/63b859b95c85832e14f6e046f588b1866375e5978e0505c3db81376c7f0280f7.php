<?php

/* :Form:form_div_layout.html.twig */
class __TwigTemplate_4cbec3b6df702fb577dcc4d0423271954e746c93c238b2297731127e0032aafd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BraincraftedBootstrapBundle:Form:bootstrap.html.twig", ":Form:form_div_layout.html.twig", 1);
        $this->blocks = array(
            'uni_adminbundle_frontpagephoto_widget' => array($this, 'block_uni_adminbundle_frontpagephoto_widget'),
            'uni_adminbundle_noticephoto_widget' => array($this, 'block_uni_adminbundle_noticephoto_widget'),
            'uni_adminbundle_productphoto_widget' => array($this, 'block_uni_adminbundle_productphoto_widget'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'bootstrap_collection_widget' => array($this, 'block_bootstrap_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'file_widget' => array($this, 'block_file_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_actions_widget' => array($this, 'block_form_actions_widget'),
            'bs_static_widget' => array($this, 'block_bs_static_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'form_input_group' => array($this, 'block_form_input_group'),
            'form_help' => array($this, 'block_form_help'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form_actions_row' => array($this, 'block_form_actions_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'global_form_errors' => array($this, 'block_global_form_errors'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BraincraftedBootstrapBundle:Form:bootstrap.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_430d0b027fe75116c843cc1ceb2168e3aa7a8e03182cffc90631a2bb48e5b2c1 = $this->env->getExtension("native_profiler");
        $__internal_430d0b027fe75116c843cc1ceb2168e3aa7a8e03182cffc90631a2bb48e5b2c1->enter($__internal_430d0b027fe75116c843cc1ceb2168e3aa7a8e03182cffc90631a2bb48e5b2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:form_div_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_430d0b027fe75116c843cc1ceb2168e3aa7a8e03182cffc90631a2bb48e5b2c1->leave($__internal_430d0b027fe75116c843cc1ceb2168e3aa7a8e03182cffc90631a2bb48e5b2c1_prof);

    }

    // line 5
    public function block_uni_adminbundle_frontpagephoto_widget($context, array $blocks = array())
    {
        $__internal_bd3061801916e643f320f9b2b691f2736731f329cdc899de3ab1626dffa804b5 = $this->env->getExtension("native_profiler");
        $__internal_bd3061801916e643f320f9b2b691f2736731f329cdc899de3ab1626dffa804b5->enter($__internal_bd3061801916e643f320f9b2b691f2736731f329cdc899de3ab1626dffa804b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "uni_adminbundle_frontpagephoto_widget"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        $context["path"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "path", array(), "array");
        // line 8
        echo "        ";
        $context["file"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file", array(), "array");
        // line 9
        echo "        ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "preview", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "attr", array()), "preview", array()) == true)) && ($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()) != ""))) {
            // line 10
            echo "            ";
            $context["image"] = ("uploads/frontpage/" . $this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()));
            // line 11
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "admin_frontpage"), "html", null, true);
            echo "\" class=\"img-responsive img-thumbnail\">
            ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'widget');
            echo "
            ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'errors');
            echo "
        ";
        } else {
            // line 15
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'widget');
            echo "
            ";
            // line 16
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'errors');
            echo "
            <script type=\"text/javascript\">\$(\".photo\").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class=\"fa fa-camera\"></i> ','browseClass':'btn btn-primary btn-block'});</script>
        ";
        }
        // line 19
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd3061801916e643f320f9b2b691f2736731f329cdc899de3ab1626dffa804b5->leave($__internal_bd3061801916e643f320f9b2b691f2736731f329cdc899de3ab1626dffa804b5_prof);

    }

    // line 22
    public function block_uni_adminbundle_noticephoto_widget($context, array $blocks = array())
    {
        $__internal_888a578635713796e763cbb8078a537f6343c9645e8fc3c4853d34d460ceb0fa = $this->env->getExtension("native_profiler");
        $__internal_888a578635713796e763cbb8078a537f6343c9645e8fc3c4853d34d460ceb0fa->enter($__internal_888a578635713796e763cbb8078a537f6343c9645e8fc3c4853d34d460ceb0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "uni_adminbundle_noticephoto_widget"));

        // line 23
        echo "    ";
        ob_start();
        // line 24
        echo "        ";
        $context["path"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "path", array(), "array");
        // line 25
        echo "        ";
        $context["file"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file", array(), "array");
        // line 26
        echo "        ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "preview", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "attr", array()), "preview", array()) == true)) && ($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()) != ""))) {
            // line 27
            echo "            ";
            $context["image"] = ("uploads/notice/" . $this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()));
            // line 28
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "admin_notice"), "html", null, true);
            echo "\" class=\"img-responsive img-thumbnail\">
            ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'widget');
            echo "
            ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'errors');
            echo "
        ";
        } else {
            // line 32
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'widget');
            echo "
            ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'errors');
            echo "
            <script type=\"text/javascript\">\$(\".photo\").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class=\"fa fa-camera\"></i> ','browseClass':'btn btn-primary btn-block'});</script>
        ";
        }
        // line 36
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_888a578635713796e763cbb8078a537f6343c9645e8fc3c4853d34d460ceb0fa->leave($__internal_888a578635713796e763cbb8078a537f6343c9645e8fc3c4853d34d460ceb0fa_prof);

    }

    // line 39
    public function block_uni_adminbundle_productphoto_widget($context, array $blocks = array())
    {
        $__internal_1796b27f9d7a9b237e8c0ccdcded1a6f57fef1718d258f2ddcfe598a486fddb9 = $this->env->getExtension("native_profiler");
        $__internal_1796b27f9d7a9b237e8c0ccdcded1a6f57fef1718d258f2ddcfe598a486fddb9->enter($__internal_1796b27f9d7a9b237e8c0ccdcded1a6f57fef1718d258f2ddcfe598a486fddb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "uni_adminbundle_productphoto_widget"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        ";
        $context["path"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "path", array(), "array");
        // line 42
        echo "        ";
        $context["file"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "file", array(), "array");
        // line 43
        echo "        ";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "preview", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "attr", array()), "preview", array()) == true)) && ($this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()) != ""))) {
            // line 44
            echo "            ";
            $context["image"] = ("uploads/product/" . $this->getAttribute($this->getAttribute((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "vars", array()), "value", array()));
            // line 45
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('asset')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "admin_product"), "html", null, true);
            echo "\" class=\"img-responsive img-thumbnail\">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'widget');
            echo "
            ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), 'errors');
            echo "
        ";
        } else {
            // line 49
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'widget');
            echo "
            ";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), 'errors');
            echo "
            <script type=\"text/javascript\">\$(\".photo\").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class=\"fa fa-camera\"></i> ','browseClass':'btn btn-primary btn-block'});</script>
        ";
        }
        // line 53
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1796b27f9d7a9b237e8c0ccdcded1a6f57fef1718d258f2ddcfe598a486fddb9->leave($__internal_1796b27f9d7a9b237e8c0ccdcded1a6f57fef1718d258f2ddcfe598a486fddb9_prof);

    }

    // line 58
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_77a0c2e5dc2e6a3a08b0bad980757f10b5fb7ba5cf84ccb94ebcf5ee7d398f2a = $this->env->getExtension("native_profiler");
        $__internal_77a0c2e5dc2e6a3a08b0bad980757f10b5fb7ba5cf84ccb94ebcf5ee7d398f2a->enter($__internal_77a0c2e5dc2e6a3a08b0bad980757f10b5fb7ba5cf84ccb94ebcf5ee7d398f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 59
        echo "    ";
        ob_start();
        // line 60
        echo "        ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 61
            echo "            ";
            $this->displayBlock("form_widget_compound", $context, $blocks);
            echo "
        ";
        } else {
            // line 63
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        }
        // line 65
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_77a0c2e5dc2e6a3a08b0bad980757f10b5fb7ba5cf84ccb94ebcf5ee7d398f2a->leave($__internal_77a0c2e5dc2e6a3a08b0bad980757f10b5fb7ba5cf84ccb94ebcf5ee7d398f2a_prof);

    }

    // line 68
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0007361b85b1d4ca2fa02951488a9dc33fafee35c6aacf3f585d69224f21c7cb = $this->env->getExtension("native_profiler");
        $__internal_0007361b85b1d4ca2fa02951488a9dc33fafee35c6aacf3f585d69224f21c7cb->enter($__internal_0007361b85b1d4ca2fa02951488a9dc33fafee35c6aacf3f585d69224f21c7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 69
        echo "    ";
        ob_start();
        // line 70
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 71
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 72
        echo "
        ";
        // line 73
        if (( !array_key_exists("simple_col", $context) && $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol())) {
            // line 74
            echo "            ";
            $context["simple_col"] = $this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol();
            // line 75
            echo "        ";
        }
        // line 76
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 77
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array());
            // line 78
            echo "        ";
        }
        // line 79
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 80
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 81
            echo "        ";
        }
        // line 82
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
            // line 83
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
            // line 84
            echo "        ";
        }
        // line 85
        echo "
        ";
        // line 86
        if ((array_key_exists("simple_col", $context) && (isset($context["simple_col"]) ? $context["simple_col"] : $this->getContext($context, "simple_col")))) {
            // line 87
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 89
        echo "
        ";
        // line 90
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 91
        echo "
        ";
        // line 92
        if (((((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "inline") && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "placeholder", array(), "any", true, true) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "placeholder", array())))) &&  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 93
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 94
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("placeholder" => $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
                // line 95
                echo "            ";
            } else {
                // line 96
                echo "                ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("placeholder" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
                // line 97
                echo "            ";
            }
            // line 98
            echo "        ";
        }
        // line 99
        echo "
        ";
        // line 100
        if ((array_key_exists("static_control", $context) && ((isset($context["static_control"]) ? $context["static_control"] : $this->getContext($context, "static_control")) == true))) {
            // line 101
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control-static"))));
            // line 102
            echo "            <p id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</p>";
        } else {
            // line 104
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
            // line 105
            echo "            <input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo ">";
        }
        // line 107
        echo "        ";
        if (array_key_exists("simple_col", $context)) {
            // line 108
            echo "            </div>
        ";
        }
        // line 110
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0007361b85b1d4ca2fa02951488a9dc33fafee35c6aacf3f585d69224f21c7cb->leave($__internal_0007361b85b1d4ca2fa02951488a9dc33fafee35c6aacf3f585d69224f21c7cb_prof);

    }

    // line 113
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_d9c56dd3037ba6b801ef14da497c58d621cc7ce25622ae52dd8253f6e7677329 = $this->env->getExtension("native_profiler");
        $__internal_d9c56dd3037ba6b801ef14da497c58d621cc7ce25622ae52dd8253f6e7677329->enter($__internal_d9c56dd3037ba6b801ef14da497c58d621cc7ce25622ae52dd8253f6e7677329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 114
        echo "    ";
        ob_start();
        // line 115
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 116
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 117
            echo "                ";
            $this->displayBlock("global_form_errors", $context, $blocks);
            echo "
            ";
        }
        // line 119
        echo "            ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d9c56dd3037ba6b801ef14da497c58d621cc7ce25622ae52dd8253f6e7677329->leave($__internal_d9c56dd3037ba6b801ef14da497c58d621cc7ce25622ae52dd8253f6e7677329_prof);

    }

    // line 125
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_c5e54a541644978cfb5489b619eb11475d2625751f8cbaee83bdbf6c9c17e5e3 = $this->env->getExtension("native_profiler");
        $__internal_c5e54a541644978cfb5489b619eb11475d2625751f8cbaee83bdbf6c9c17e5e3->enter($__internal_c5e54a541644978cfb5489b619eb11475d2625751f8cbaee83bdbf6c9c17e5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 126
        echo "    ";
        ob_start();
        // line 127
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 128
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 129
            echo "        ";
        }
        // line 130
        echo "        ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c5e54a541644978cfb5489b619eb11475d2625751f8cbaee83bdbf6c9c17e5e3->leave($__internal_c5e54a541644978cfb5489b619eb11475d2625751f8cbaee83bdbf6c9c17e5e3_prof);

    }

    // line 134
    public function block_bootstrap_collection_widget($context, array $blocks = array())
    {
        $__internal_20ecf1720c14a27a5218286aad6435d849c63dd533b90a045a2ca1ff3998c4a1 = $this->env->getExtension("native_profiler");
        $__internal_20ecf1720c14a27a5218286aad6435d849c63dd533b90a045a2ca1ff3998c4a1->enter($__internal_20ecf1720c14a27a5218286aad6435d849c63dd533b90a045a2ca1ff3998c4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootstrap_collection_widget"));

        // line 135
        echo "    ";
        ob_start();
        // line 136
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 137
            echo "            ";
            $context["prototype_vars"] = array();
            // line 138
            echo "            ";
            if (array_key_exists("style", $context)) {
                // line 139
                echo "                ";
                $context["prototype_vars"] = twig_array_merge((isset($context["prototype_vars"]) ? $context["prototype_vars"] : $this->getContext($context, "prototype_vars")), array("style" => (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))));
                // line 140
                echo "            ";
            }
            // line 141
            echo "            ";
            $context["prototype_html"] = (((("<div class=\"col-xs-" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "sub_widget_col", array())) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'widget', (isset($context["prototype_vars"]) ? $context["prototype_vars"] : $this->getContext($context, "prototype_vars")))) . "</div>");
            // line 142
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_delete", array())) {
                // line 143
                echo "                ";
                $context["prototype_html"] = ((((((isset($context["prototype_html"]) ? $context["prototype_html"] : $this->getContext($context, "prototype_html")) . "<div class=\"col-xs-") . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "button_col", array())) . "\"><a href=\"#\" class=\"btn btn-danger btn-md\" data-removefield=\"collection\" data-field=\"__id__\"><span class=\"fa fa-remove\" aria-hidden=\"true\"></span> ") . $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true))) . "</a></div>");
                // line 144
                echo "            ";
            }
            // line 145
            echo "            ";
            $context["prototype_html"] = (("<div class=\"row\">" . (isset($context["prototype_html"]) ? $context["prototype_html"] : $this->getContext($context, "prototype_html"))) . "</div>");
            // line 146
            echo "
            ";
            // line 147
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => (isset($context["prototype_html"]) ? $context["prototype_html"] : $this->getContext($context, "prototype_html"))));
            // line 148
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype-name" => (isset($context["prototype_name"]) ? $context["prototype_name"] : $this->getContext($context, "prototype_name"))));
            // line 149
            echo "        ";
        }
        // line 150
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <ul class=\"bc-collection list-unstyled\">
                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 153
            echo "                    <li>
                        <div class=\"row\">
                            <div class=\"col-xs-";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "sub_widget_col", array()), "html", null, true);
            echo "\">
                                ";
            // line 156
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
                                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'errors');
            echo "
                            </div>
                            ";
            // line 159
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_delete", array())) {
                // line 160
                echo "                                <div class=\"col-xs-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "button_col", array()), "html", null, true);
                echo "\">
                                    <a href=\"#\" class=\"btn btn-danger btn-md\" data-removefield=\"collection\" data-field=\"";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "id", array()), "html", null, true);
                echo "\"><span class=\"fa fa-remove\" aria-hidden=\"true\"></span> ";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "delete_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true));
                echo "</a>
                                </div>
                            ";
            }
            // line 164
            echo "                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "            </ul>
            ";
        // line 168
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_add", array())) {
            // line 169
            echo "                <a href=\"#\" class=\"btn btn-primary btn-md\" data-addfield=\"collection\" data-collection=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\" data-prototype-name=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : $this->getContext($context, "prototype_name")), "html", null, true);
            echo "\"><span class=\"fa fa-plus\" aria-hidden=\"true\"></span> ";
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter(twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "add_button_text", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true));
            echo "</a>
            ";
        }
        // line 171
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_20ecf1720c14a27a5218286aad6435d849c63dd533b90a045a2ca1ff3998c4a1->leave($__internal_20ecf1720c14a27a5218286aad6435d849c63dd533b90a045a2ca1ff3998c4a1_prof);

    }

    // line 175
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_c323a4e7b8717554f2e9fb271dfb006e3ac272b602417a5e51d8d56c89901378 = $this->env->getExtension("native_profiler");
        $__internal_c323a4e7b8717554f2e9fb271dfb006e3ac272b602417a5e51d8d56c89901378->enter($__internal_c323a4e7b8717554f2e9fb271dfb006e3ac272b602417a5e51d8d56c89901378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 176
        echo "    ";
        ob_start();
        // line 177
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 178
        echo "
        ";
        // line 179
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 180
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array());
            // line 181
            echo "        ";
        }
        // line 182
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 183
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        ";
        // line 186
        if (array_key_exists("simple_col", $context)) {
            // line 187
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 189
        echo "
        ";
        // line 190
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 191
        echo "
        <textarea ";
        // line 192
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

        ";
        // line 194
        if (array_key_exists("simple_col", $context)) {
            // line 195
            echo "            </div>
        ";
        }
        // line 197
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c323a4e7b8717554f2e9fb271dfb006e3ac272b602417a5e51d8d56c89901378->leave($__internal_c323a4e7b8717554f2e9fb271dfb006e3ac272b602417a5e51d8d56c89901378_prof);

    }

    // line 200
    public function block_file_widget($context, array $blocks = array())
    {
        $__internal_1b3abe808a0d0c44f229abd6484283ab84a2b6cceb78e526259ca31318712ad3 = $this->env->getExtension("native_profiler");
        $__internal_1b3abe808a0d0c44f229abd6484283ab84a2b6cceb78e526259ca31318712ad3->enter($__internal_1b3abe808a0d0c44f229abd6484283ab84a2b6cceb78e526259ca31318712ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_widget"));

        // line 201
        echo "    ";
        ob_start();
        // line 202
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 203
        echo "
        ";
        // line 204
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array())))) {
            // line 205
            echo "            ";
            $context["simple_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array());
            // line 206
            echo "        ";
        }
        // line 207
        echo "
        ";
        // line 208
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 209
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 210
            echo "        ";
        }
        // line 211
        echo "
        ";
        // line 212
        if (array_key_exists("simple_col", $context)) {
            // line 213
            echo "            <div class=\"col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["simple_col"]) ? $context["simple_col"] : $this->getContext($context, "simple_col")), "html", null, true);
            echo "\">
        ";
        }
        // line 215
        echo "
        <input type=\"file\" ";
        // line 216
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">

        ";
        // line 218
        if (array_key_exists("simple_col", $context)) {
            // line 219
            echo "            </div>
        ";
        }
        // line 221
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1b3abe808a0d0c44f229abd6484283ab84a2b6cceb78e526259ca31318712ad3->leave($__internal_1b3abe808a0d0c44f229abd6484283ab84a2b6cceb78e526259ca31318712ad3_prof);

    }

    // line 224
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_405052bbaa74a0cc0bdf4bfb4502a92c58c7bb4c50e87f94d9cbcdf3eb158410 = $this->env->getExtension("native_profiler");
        $__internal_405052bbaa74a0cc0bdf4bfb4502a92c58c7bb4c50e87f94d9cbcdf3eb158410->enter($__internal_405052bbaa74a0cc0bdf4bfb4502a92c58c7bb4c50e87f94d9cbcdf3eb158410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 225
        echo "    ";
        ob_start();
        // line 226
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 227
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 231
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_405052bbaa74a0cc0bdf4bfb4502a92c58c7bb4c50e87f94d9cbcdf3eb158410->leave($__internal_405052bbaa74a0cc0bdf4bfb4502a92c58c7bb4c50e87f94d9cbcdf3eb158410_prof);

    }

    // line 234
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_45b7c3352e31952b0655ee4708263699703ea77f7912b335c8e640a794424d3d = $this->env->getExtension("native_profiler");
        $__internal_45b7c3352e31952b0655ee4708263699703ea77f7912b335c8e640a794424d3d->enter($__internal_45b7c3352e31952b0655ee4708263699703ea77f7912b335c8e640a794424d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 235
        echo "    ";
        ob_start();
        // line 236
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 238
            echo "                ";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                // line 239
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "inline", array())), "label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr"))));
                echo "
                ";
            } else {
                // line 241
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', array("no_form_group" => true, "inline" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "inline", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "inline", array())), "label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr"))));
                echo "
                ";
            }
            // line 243
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45b7c3352e31952b0655ee4708263699703ea77f7912b335c8e640a794424d3d->leave($__internal_45b7c3352e31952b0655ee4708263699703ea77f7912b335c8e640a794424d3d_prof);

    }

    // line 248
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6c4fba43495fcba699920a41e3f3b099e48dbbfcb3c050e2bb358d97bb44388f = $this->env->getExtension("native_profiler");
        $__internal_6c4fba43495fcba699920a41e3f3b099e48dbbfcb3c050e2bb358d97bb44388f->enter($__internal_6c4fba43495fcba699920a41e3f3b099e48dbbfcb3c050e2bb358d97bb44388f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 249
        echo "    ";
        ob_start();
        // line 250
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 251
        echo "
        <select ";
        // line 252
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 253
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 254
            echo "                <option ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                echo " disabled=\"disabled\"";
                if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
            }
            echo " value=\"\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            ";
        }
        // line 256
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 257
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 258
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 259
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 260
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 262
            echo "            ";
        }
        // line 263
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 264
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6c4fba43495fcba699920a41e3f3b099e48dbbfcb3c050e2bb358d97bb44388f->leave($__internal_6c4fba43495fcba699920a41e3f3b099e48dbbfcb3c050e2bb358d97bb44388f_prof);

    }

    // line 269
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_5c28a0a490037e1fc345914ad003a378c03519490ee4c9c2f7f1a4247ff40ce6 = $this->env->getExtension("native_profiler");
        $__internal_5c28a0a490037e1fc345914ad003a378c03519490ee4c9c2f7f1a4247ff40ce6->enter($__internal_5c28a0a490037e1fc345914ad003a378c03519490ee4c9c2f7f1a4247ff40ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 270
        echo "    ";
        ob_start();
        // line 271
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 272
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 273
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                    ";
                // line 274
                $context["options"] = $context["choice"];
                // line 275
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 278
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</option>
            ";
            }
            // line 280
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5c28a0a490037e1fc345914ad003a378c03519490ee4c9c2f7f1a4247ff40ce6->leave($__internal_5c28a0a490037e1fc345914ad003a378c03519490ee4c9c2f7f1a4247ff40ce6_prof);

    }

    // line 284
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2ad2645bc4f57d441069ce83538313279efaf467113e85f9bf41ee14690591fe = $this->env->getExtension("native_profiler");
        $__internal_2ad2645bc4f57d441069ce83538313279efaf467113e85f9bf41ee14690591fe->enter($__internal_2ad2645bc4f57d441069ce83538313279efaf467113e85f9bf41ee14690591fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 285
        echo "    ";
        ob_start();
        // line 286
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 287
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 288
        echo "
        ";
        // line 289
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())))) {
            // line 290
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array());
            // line 291
            echo "        ";
        }
        // line 292
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 293
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array());
            // line 294
            echo "        ";
        }
        // line 295
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 296
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 297
            echo "        ";
        }
        // line 298
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
            // line 299
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
            // line 300
            echo "        ";
        }
        // line 301
        echo "
        ";
        // line 302
        $context["class"] = "";
        // line 303
        echo "        ";
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 304
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 305
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 306
            echo "            ";
            $context["class"] = ((((((("col-" . (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col"))) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")));
            // line 307
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 308
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 309
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : $this->getContext($context, "no_form_group")) == false))) {
            // line 310
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 312
        echo "
        ";
        // line 313
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "labeled", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "labeled", array()))) {
            // line 314
            echo "            ";
            $context["required"] = false;
            // line 315
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 316
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 317
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
            echo "
            <div class=\"col-";
            // line 318
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), "html", null, true);
            echo "\">
                ";
            // line 319
            $this->displayBlock("checkbox_widget", $context, $blocks);
            echo "
                ";
            // line 320
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        } else {
            // line 323
            echo "            ";
            ob_start();
            // line 324
            echo "            ";
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 325
                echo "                ";
                if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                    // line 326
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 327
                    echo "                ";
                }
                // line 328
                echo "                ";
                if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                    // line 329
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " checkbox-inline"))));
                    // line 330
                    echo "                ";
                }
                // line 331
                echo "                ";
                if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                    // line 332
                    echo "                    ";
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                    // line 333
                    echo "                ";
                }
                // line 334
                echo "                ";
                if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                    // line 335
                    echo "                    ";
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                    // line 336
                    echo "                ";
                }
                // line 337
                echo "                <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 338
                $this->displayBlock("checkbox_widget", $context, $blocks);
                echo "
                ";
                // line 339
                echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                // line 340
                echo "</label>
            ";
            } else {
                // line 342
                echo "                ";
                $this->displayBlock("checkbox_widget", $context, $blocks);
                echo "
            ";
            }
            // line 344
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            $context["checkboxdata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 346
            echo "
            ";
            // line 347
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                // line 348
                echo "                ";
                echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : $this->getContext($context, "checkboxdata"));
                echo "
            ";
            } else {
                // line 350
                echo "                <div class=\"checkbox\">";
                echo (isset($context["checkboxdata"]) ? $context["checkboxdata"] : $this->getContext($context, "checkboxdata"));
                echo "</div>
            ";
            }
            // line 352
            echo "        ";
        }
        // line 353
        echo "
        ";
        // line 354
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 356
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 357
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 359
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : $this->getContext($context, "no_form_group")) == false))) {
            // line 360
            echo "            </div>
        ";
        }
        // line 362
        echo "
        ";
        // line 363
        if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "inline")) {
            echo "&nbsp;";
        }
        // line 364
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ad2645bc4f57d441069ce83538313279efaf467113e85f9bf41ee14690591fe->leave($__internal_2ad2645bc4f57d441069ce83538313279efaf467113e85f9bf41ee14690591fe_prof);

    }

    // line 367
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_14ee1368bc5f036354c83a6e2f8305fc7a8ba7ab401d91544cc2f41f57f66652 = $this->env->getExtension("native_profiler");
        $__internal_14ee1368bc5f036354c83a6e2f8305fc7a8ba7ab401d91544cc2f41f57f66652->enter($__internal_14ee1368bc5f036354c83a6e2f8305fc7a8ba7ab401d91544cc2f41f57f66652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 368
        echo "    ";
        ob_start();
        // line 369
        echo "        ";
        $context["class"] = "";
        // line 370
        echo "
        ";
        // line 371
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 372
        echo "
        ";
        // line 373
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())))) {
            // line 374
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array());
            // line 375
            echo "        ";
        }
        // line 376
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 377
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array());
            // line 378
            echo "        ";
        }
        // line 379
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 380
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 381
            echo "        ";
        }
        // line 382
        echo "
        ";
        // line 383
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 384
            echo "            ";
            $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
            // line 385
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 386
            echo "            ";
            $context["class"] = (((((((" col-" . (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))) . "-") . (isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col"))) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))) . "-offset-") . (isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")));
            // line 387
            echo "            <div class=\"form-group ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
            <div class=\"";
            // line 388
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "\">
        ";
        } elseif (( !        // line 389
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : $this->getContext($context, "no_form_group")) == false))) {
            // line 390
            echo "            <div class=\"form-group";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                echo " has-error";
            }
            echo "\">
        ";
        }
        // line 392
        echo "
        ";
        // line 393
        ob_start();
        // line 394
        echo "        ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 395
            echo "            ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 396
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 397
                echo "            ";
            }
            // line 398
            echo "            ";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                // line 399
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " radio-inline"))));
                // line 400
                echo "            ";
            }
            // line 401
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 402
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 403
                echo "            ";
            }
            // line 404
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 405
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 406
                echo "            ";
            }
            // line 407
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 408
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
            ";
            // line 409
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            // line 410
            echo "</label>
        ";
        } else {
            // line 412
            echo "            ";
            $this->displayBlock("radio_widget", $context, $blocks);
            echo "
        ";
        }
        // line 414
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        $context["radiodata"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 416
        echo "
        ";
        // line 417
        if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
            // line 418
            echo "            ";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : $this->getContext($context, "radiodata"));
            echo "
        ";
        } else {
            // line 420
            echo "            <div class=\"radio\">";
            echo (isset($context["radiodata"]) ? $context["radiodata"] : $this->getContext($context, "radiodata"));
            echo "</div>
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        $this->displayBlock("form_help", $context, $blocks);
        echo "

        ";
        // line 425
        if ((array_key_exists("align_with_widget", $context) || $this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "align_with_widget", array(), "any", true, true))) {
            // line 426
            echo "            </div>
            </div>
        ";
        } elseif (( !        // line 428
array_key_exists("no_form_group", $context) || ((isset($context["no_form_group"]) ? $context["no_form_group"] : $this->getContext($context, "no_form_group")) == false))) {
            // line 429
            echo "            </div>
        ";
        }
        // line 431
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_14ee1368bc5f036354c83a6e2f8305fc7a8ba7ab401d91544cc2f41f57f66652->leave($__internal_14ee1368bc5f036354c83a6e2f8305fc7a8ba7ab401d91544cc2f41f57f66652_prof);

    }

    // line 434
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_916e2ac0b10bacab2eb8e10a4f7b51cf66c38cf14ee32b23a4ed03d6ef076266 = $this->env->getExtension("native_profiler");
        $__internal_916e2ac0b10bacab2eb8e10a4f7b51cf66c38cf14ee32b23a4ed03d6ef076266->enter($__internal_916e2ac0b10bacab2eb8e10a4f7b51cf66c38cf14ee32b23a4ed03d6ef076266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_916e2ac0b10bacab2eb8e10a4f7b51cf66c38cf14ee32b23a4ed03d6ef076266->leave($__internal_916e2ac0b10bacab2eb8e10a4f7b51cf66c38cf14ee32b23a4ed03d6ef076266_prof);

    }

    // line 440
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_4624784e72fa50551d0528edda31e37b63017c4a93f7bd901867ae39e94dae81 = $this->env->getExtension("native_profiler");
        $__internal_4624784e72fa50551d0528edda31e37b63017c4a93f7bd901867ae39e94dae81->enter($__internal_4624784e72fa50551d0528edda31e37b63017c4a93f7bd901867ae39e94dae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 441
        echo "    ";
        ob_start();
        // line 442
        echo "        <input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4624784e72fa50551d0528edda31e37b63017c4a93f7bd901867ae39e94dae81->leave($__internal_4624784e72fa50551d0528edda31e37b63017c4a93f7bd901867ae39e94dae81_prof);

    }

    // line 446
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7d50a71d08528f7ae127299ed483ebefd1a4a8d56d7f2933748828a4cc0b9ef9 = $this->env->getExtension("native_profiler");
        $__internal_7d50a71d08528f7ae127299ed483ebefd1a4a8d56d7f2933748828a4cc0b9ef9->enter($__internal_7d50a71d08528f7ae127299ed483ebefd1a4a8d56d7f2933748828a4cc0b9ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 447
        echo "    ";
        ob_start();
        // line 448
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 449
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 451
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "bootstrap-datetime"));
            // line 452
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 453
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            echo "
                ";
            // line 454
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            echo "
                ";
            // line 455
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
                ";
            // line 456
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "
            </div>
        ";
        }
        // line 459
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7d50a71d08528f7ae127299ed483ebefd1a4a8d56d7f2933748828a4cc0b9ef9->leave($__internal_7d50a71d08528f7ae127299ed483ebefd1a4a8d56d7f2933748828a4cc0b9ef9_prof);

    }

    // line 462
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f680cdb9d769b57c228632eb90ad11fec9004d33e24dd59614396fc29eb3dd41 = $this->env->getExtension("native_profiler");
        $__internal_f680cdb9d769b57c228632eb90ad11fec9004d33e24dd59614396fc29eb3dd41->enter($__internal_f680cdb9d769b57c228632eb90ad11fec9004d33e24dd59614396fc29eb3dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 463
        echo "    ";
        ob_start();
        // line 464
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 465
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 467
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "bootstrap-date"));
            // line 468
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 469
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 470
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 471
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 472
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 473
            echo "
            </div>
        ";
        }
        // line 476
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f680cdb9d769b57c228632eb90ad11fec9004d33e24dd59614396fc29eb3dd41->leave($__internal_f680cdb9d769b57c228632eb90ad11fec9004d33e24dd59614396fc29eb3dd41_prof);

    }

    // line 479
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a52f096b48d3ad814745c87cd489e51c075bcbbb64b12b9027e4ba9f0c48d0ba = $this->env->getExtension("native_profiler");
        $__internal_a52f096b48d3ad814745c87cd489e51c075bcbbb64b12b9027e4ba9f0c48d0ba->enter($__internal_a52f096b48d3ad814745c87cd489e51c075bcbbb64b12b9027e4ba9f0c48d0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 480
        echo "    ";
        ob_start();
        // line 481
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 482
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 484
            echo "            ";
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 485
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "bootstrap-time"));
            // line 486
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 487
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            echo "
                ";
            // line 488
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 489
            echo "                ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 490
            echo "            </div>
        ";
        }
        // line 492
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a52f096b48d3ad814745c87cd489e51c075bcbbb64b12b9027e4ba9f0c48d0ba->leave($__internal_a52f096b48d3ad814745c87cd489e51c075bcbbb64b12b9027e4ba9f0c48d0ba_prof);

    }

    // line 495
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_cc010f60a4910a51e3697d2cd96adee9f34e0ee3dbd5a3b098434187d70db921 = $this->env->getExtension("native_profiler");
        $__internal_cc010f60a4910a51e3697d2cd96adee9f34e0ee3dbd5a3b098434187d70db921->enter($__internal_cc010f60a4910a51e3697d2cd96adee9f34e0ee3dbd5a3b098434187d70db921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 496
        echo "    ";
        ob_start();
        // line 497
        echo "        ";
        // line 498
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 499
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cc010f60a4910a51e3697d2cd96adee9f34e0ee3dbd5a3b098434187d70db921->leave($__internal_cc010f60a4910a51e3697d2cd96adee9f34e0ee3dbd5a3b098434187d70db921_prof);

    }

    // line 503
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_012fae2e86e99f2c02575313e4943875ec104e256a5d0fe655f5cbf735a55f79 = $this->env->getExtension("native_profiler");
        $__internal_012fae2e86e99f2c02575313e4943875ec104e256a5d0fe655f5cbf735a55f79->enter($__internal_012fae2e86e99f2c02575313e4943875ec104e256a5d0fe655f5cbf735a55f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 504
        echo "    ";
        ob_start();
        // line 505
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 506
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_012fae2e86e99f2c02575313e4943875ec104e256a5d0fe655f5cbf735a55f79->leave($__internal_012fae2e86e99f2c02575313e4943875ec104e256a5d0fe655f5cbf735a55f79_prof);

    }

    // line 510
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_533cd13952830e87484a20a62e56c820f8dbea8ba1068042d8a5c7cc99691265 = $this->env->getExtension("native_profiler");
        $__internal_533cd13952830e87484a20a62e56c820f8dbea8ba1068042d8a5c7cc99691265->enter($__internal_533cd13952830e87484a20a62e56c820f8dbea8ba1068042d8a5c7cc99691265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 511
        echo "    ";
        ob_start();
        // line 512
        echo "        <div class=\"input-group\">
            ";
        // line 513
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks), "{{ tag_start }}" => "<span class=\"input-group-addon\">", "{{ tag_end }}" => "</span>"));
        // line 517
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_533cd13952830e87484a20a62e56c820f8dbea8ba1068042d8a5c7cc99691265->leave($__internal_533cd13952830e87484a20a62e56c820f8dbea8ba1068042d8a5c7cc99691265_prof);

    }

    // line 522
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_25fd11fafe538d6f6bb19f4c7f865181a3da67bbbbaa003e4a072fd19163a8fa = $this->env->getExtension("native_profiler");
        $__internal_25fd11fafe538d6f6bb19f4c7f865181a3da67bbbbaa003e4a072fd19163a8fa->enter($__internal_25fd11fafe538d6f6bb19f4c7f865181a3da67bbbbaa003e4a072fd19163a8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 523
        echo "    ";
        ob_start();
        // line 524
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 525
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_25fd11fafe538d6f6bb19f4c7f865181a3da67bbbbaa003e4a072fd19163a8fa->leave($__internal_25fd11fafe538d6f6bb19f4c7f865181a3da67bbbbaa003e4a072fd19163a8fa_prof);

    }

    // line 529
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_0ac693f140179a2fe6a0ba6689aad3cd01aeb06a1ae5db5b5d90af867b3c78fc = $this->env->getExtension("native_profiler");
        $__internal_0ac693f140179a2fe6a0ba6689aad3cd01aeb06a1ae5db5b5d90af867b3c78fc->enter($__internal_0ac693f140179a2fe6a0ba6689aad3cd01aeb06a1ae5db5b5d90af867b3c78fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 530
        echo "    ";
        ob_start();
        // line 531
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 532
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0ac693f140179a2fe6a0ba6689aad3cd01aeb06a1ae5db5b5d90af867b3c78fc->leave($__internal_0ac693f140179a2fe6a0ba6689aad3cd01aeb06a1ae5db5b5d90af867b3c78fc_prof);

    }

    // line 536
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_9c45caa8abb5e16c5afa5e402f01b74a9215ce1cca1b4695a42b145c59211c44 = $this->env->getExtension("native_profiler");
        $__internal_9c45caa8abb5e16c5afa5e402f01b74a9215ce1cca1b4695a42b145c59211c44->enter($__internal_9c45caa8abb5e16c5afa5e402f01b74a9215ce1cca1b4695a42b145c59211c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 537
        echo "    ";
        ob_start();
        // line 538
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 539
        echo "        <div class=\"input-group\">
            ";
        // line 540
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9c45caa8abb5e16c5afa5e402f01b74a9215ce1cca1b4695a42b145c59211c44->leave($__internal_9c45caa8abb5e16c5afa5e402f01b74a9215ce1cca1b4695a42b145c59211c44_prof);

    }

    // line 546
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_85178f5033441c91e7df2dab94c108124ecbff7463aa81f8d46842018e211562 = $this->env->getExtension("native_profiler");
        $__internal_85178f5033441c91e7df2dab94c108124ecbff7463aa81f8d46842018e211562->enter($__internal_85178f5033441c91e7df2dab94c108124ecbff7463aa81f8d46842018e211562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 547
        echo "    ";
        ob_start();
        // line 548
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 549
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_85178f5033441c91e7df2dab94c108124ecbff7463aa81f8d46842018e211562->leave($__internal_85178f5033441c91e7df2dab94c108124ecbff7463aa81f8d46842018e211562_prof);

    }

    // line 553
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_837899917e31d1add51de87e7a7fe8eb2c6b6b9ab700de53ce1cd168a0d18792 = $this->env->getExtension("native_profiler");
        $__internal_837899917e31d1add51de87e7a7fe8eb2c6b6b9ab700de53ce1cd168a0d18792->enter($__internal_837899917e31d1add51de87e7a7fe8eb2c6b6b9ab700de53ce1cd168a0d18792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 554
        echo "    ";
        ob_start();
        // line 555
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 556
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_837899917e31d1add51de87e7a7fe8eb2c6b6b9ab700de53ce1cd168a0d18792->leave($__internal_837899917e31d1add51de87e7a7fe8eb2c6b6b9ab700de53ce1cd168a0d18792_prof);

    }

    // line 560
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_3070277c3b03a5d66b7f6ca450175a889ae1915da8208eb8f2f9d411f3766b80 = $this->env->getExtension("native_profiler");
        $__internal_3070277c3b03a5d66b7f6ca450175a889ae1915da8208eb8f2f9d411f3766b80->enter($__internal_3070277c3b03a5d66b7f6ca450175a889ae1915da8208eb8f2f9d411f3766b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 561
        echo "    ";
        ob_start();
        // line 562
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 563
        echo "        ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3070277c3b03a5d66b7f6ca450175a889ae1915da8208eb8f2f9d411f3766b80->leave($__internal_3070277c3b03a5d66b7f6ca450175a889ae1915da8208eb8f2f9d411f3766b80_prof);

    }

    // line 567
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fd8d7002954f88f790b6a0bfee9f916962ec770a9938a68c97f71ff3aa0d3991 = $this->env->getExtension("native_profiler");
        $__internal_fd8d7002954f88f790b6a0bfee9f916962ec770a9938a68c97f71ff3aa0d3991->enter($__internal_fd8d7002954f88f790b6a0bfee9f916962ec770a9938a68c97f71ff3aa0d3991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 568
        echo "    ";
        ob_start();
        // line 569
        echo "        ";
        if ((twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) &&  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 570
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 571
            echo "        ";
        }
        // line 572
        echo "        ";
        if ((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "submit"))) {
            // line 573
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) ? $context["button_class"] : $this->getContext($context, "button_class")), "primary")) : ("primary"))))));
            // line 574
            echo "        ";
        } else {
            // line 575
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " btn btn-") . ((array_key_exists("button_class", $context)) ? (_twig_default_filter((isset($context["button_class"]) ? $context["button_class"] : $this->getContext($context, "button_class")), "default")) : ("default"))))));
            // line 576
            echo "        ";
        }
        // line 577
        echo "        ";
        if ((array_key_exists("as_link", $context) && ((isset($context["as_link"]) ? $context["as_link"] : $this->getContext($context, "as_link")) == true))) {
            // line 578
            echo "            <a ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "icon", array()) != ""))) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "icon", array()));
                echo "&nbsp;";
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 580
            echo "            <button type=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
            echo "\" ";
            $this->displayBlock("button_attributes", $context, $blocks);
            echo ">";
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "icon", array()) != ""))) {
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "icon", array()));
                echo "&nbsp;";
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</button>
        ";
        }
        // line 582
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fd8d7002954f88f790b6a0bfee9f916962ec770a9938a68c97f71ff3aa0d3991->leave($__internal_fd8d7002954f88f790b6a0bfee9f916962ec770a9938a68c97f71ff3aa0d3991_prof);

    }

    // line 585
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_f18787601301338fbcaba493a4c4ca9e66029b6f48ebb913ff6e7ca3f62aa2aa = $this->env->getExtension("native_profiler");
        $__internal_f18787601301338fbcaba493a4c4ca9e66029b6f48ebb913ff6e7ca3f62aa2aa->enter($__internal_f18787601301338fbcaba493a4c4ca9e66029b6f48ebb913ff6e7ca3f62aa2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 586
        echo "    ";
        ob_start();
        // line 587
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 588
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f18787601301338fbcaba493a4c4ca9e66029b6f48ebb913ff6e7ca3f62aa2aa->leave($__internal_f18787601301338fbcaba493a4c4ca9e66029b6f48ebb913ff6e7ca3f62aa2aa_prof);

    }

    // line 592
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_4d6df435528175c95e65414714918b56e7a17c00af9bcedcfd40df24d135f456 = $this->env->getExtension("native_profiler");
        $__internal_4d6df435528175c95e65414714918b56e7a17c00af9bcedcfd40df24d135f456->enter($__internal_4d6df435528175c95e65414714918b56e7a17c00af9bcedcfd40df24d135f456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 593
        echo "    ";
        ob_start();
        // line 594
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 595
        echo "        ";
        $this->displayBlock("button_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4d6df435528175c95e65414714918b56e7a17c00af9bcedcfd40df24d135f456->leave($__internal_4d6df435528175c95e65414714918b56e7a17c00af9bcedcfd40df24d135f456_prof);

    }

    // line 599
    public function block_form_actions_widget($context, array $blocks = array())
    {
        $__internal_007fc86312fac09a9b305f9969a6b90d4898fb2f4081e6714642e7dfc113b3cc = $this->env->getExtension("native_profiler");
        $__internal_007fc86312fac09a9b305f9969a6b90d4898fb2f4081e6714642e7dfc113b3cc->enter($__internal_007fc86312fac09a9b305f9969a6b90d4898fb2f4081e6714642e7dfc113b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_widget"));

        // line 600
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 601
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["button"], 'widget');
            echo "&nbsp; ";
            // line 602
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_007fc86312fac09a9b305f9969a6b90d4898fb2f4081e6714642e7dfc113b3cc->leave($__internal_007fc86312fac09a9b305f9969a6b90d4898fb2f4081e6714642e7dfc113b3cc_prof);

    }

    // line 605
    public function block_bs_static_widget($context, array $blocks = array())
    {
        $__internal_b00775b9af5ddf94c77bb0ebac69c82156c9e679bab07a55fe107d79b28e4113 = $this->env->getExtension("native_profiler");
        $__internal_b00775b9af5ddf94c77bb0ebac69c82156c9e679bab07a55fe107d79b28e4113->enter($__internal_b00775b9af5ddf94c77bb0ebac69c82156c9e679bab07a55fe107d79b28e4113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bs_static_widget"));

        // line 606
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control-static"))));
        // line 607
        echo "    <p id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</p>
";
        
        $__internal_b00775b9af5ddf94c77bb0ebac69c82156c9e679bab07a55fe107d79b28e4113->leave($__internal_b00775b9af5ddf94c77bb0ebac69c82156c9e679bab07a55fe107d79b28e4113_prof);

    }

    // line 612
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5d08ad6d5a48436ad6d2dc2e8b4113bd4d9e8cf4597cbf2b1792371aad1e789f = $this->env->getExtension("native_profiler");
        $__internal_5d08ad6d5a48436ad6d2dc2e8b4113bd4d9e8cf4597cbf2b1792371aad1e789f->enter($__internal_5d08ad6d5a48436ad6d2dc2e8b4113bd4d9e8cf4597cbf2b1792371aad1e789f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 613
        echo "    ";
        ob_start();
        // line 614
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 615
        echo "
        ";
        // line 616
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())))) {
            // line 617
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array());
            // line 618
            echo "        ";
        }
        // line 619
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 620
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array());
            // line 621
            echo "        ";
        }
        // line 622
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 623
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 624
            echo "        ";
        }
        // line 625
        echo "
        ";
        // line 626
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 627
            echo "            ";
            $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
            // line 628
            echo "            ";
            $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
            // line 629
            echo "
            ";
            // line 630
            if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
                // line 631
                echo "                ";
                $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
                // line 632
                echo "            ";
            }
            // line 633
            echo "
            ";
            // line 634
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
            // line 635
            echo "            ";
            if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "horizontal")) {
                // line 636
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-") . (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))) . "-") . (isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col"))))));
                // line 637
                echo "            ";
            } elseif (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "inline")) {
                // line 638
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " sr-only"))));
                // line 639
                echo "            ";
            }
            // line 640
            echo "
            ";
            // line 641
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 642
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 643
                echo "            ";
            }
            // line 644
            echo "            ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 645
                echo "                ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 646
                echo "            ";
            }
            // line 647
            echo "            ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 648
                echo "                ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 649
                echo "            ";
            }
            // line 650
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            echo "</label>
        ";
        }
        // line 652
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5d08ad6d5a48436ad6d2dc2e8b4113bd4d9e8cf4597cbf2b1792371aad1e789f->leave($__internal_5d08ad6d5a48436ad6d2dc2e8b4113bd4d9e8cf4597cbf2b1792371aad1e789f_prof);

    }

    // line 655
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_39cb3cba57e41c9487eb2f503a698e62efb1a1651672ee2abe26802d406858dc = $this->env->getExtension("native_profiler");
        $__internal_39cb3cba57e41c9487eb2f503a698e62efb1a1651672ee2abe26802d406858dc->enter($__internal_39cb3cba57e41c9487eb2f503a698e62efb1a1651672ee2abe26802d406858dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_39cb3cba57e41c9487eb2f503a698e62efb1a1651672ee2abe26802d406858dc->leave($__internal_39cb3cba57e41c9487eb2f503a698e62efb1a1651672ee2abe26802d406858dc_prof);

    }

    // line 659
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_c6657a567e10d4c201487f1d171f85d3c92d1abccf729ba45b5d6d641c127b94 = $this->env->getExtension("native_profiler");
        $__internal_c6657a567e10d4c201487f1d171f85d3c92d1abccf729ba45b5d6d641c127b94->enter($__internal_c6657a567e10d4c201487f1d171f85d3c92d1abccf729ba45b5d6d641c127b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 660
        echo "    ";
        ob_start();
        // line 661
        echo "        ";
        // line 665
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c6657a567e10d4c201487f1d171f85d3c92d1abccf729ba45b5d6d641c127b94->leave($__internal_c6657a567e10d4c201487f1d171f85d3c92d1abccf729ba45b5d6d641c127b94_prof);

    }

    // line 669
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d423763a0b8b8aefc038ff190d8fdf1a26342951bf89e32d95c7a342f0f74d06 = $this->env->getExtension("native_profiler");
        $__internal_d423763a0b8b8aefc038ff190d8fdf1a26342951bf89e32d95c7a342f0f74d06->enter($__internal_d423763a0b8b8aefc038ff190d8fdf1a26342951bf89e32d95c7a342f0f74d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 670
        echo "    ";
        ob_start();
        // line 671
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 672
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 673
        echo "
        ";
        // line 674
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())))) {
            // line 675
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array());
            // line 676
            echo "        ";
        }
        // line 677
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 678
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array());
            // line 679
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && array_key_exists("label_col", $context))) {
                // line 680
                echo "                ";
                $context["widget_col"] = ((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")) + (isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")));
                // line 681
                echo "            ";
            }
            // line 682
            echo "        ";
        }
        // line 683
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 684
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 685
            echo "        ";
        }
        // line 686
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
            // line 687
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
            // line 688
            echo "        ";
        }
        // line 689
        echo "
        ";
        // line 690
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 691
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 692
        echo "
        <div class=\"form-group";
        // line 693
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 694
        if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "horizontal")) {
            // line 695
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
            echo "
                <div class=\"col-";
            // line 696
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), "html", null, true);
            echo "\">
                    ";
            // line 697
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                    ";
            // line 698
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                    ";
            // line 699
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        } else {
            // line 702
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
            echo "
                ";
            // line 703
            $this->displayBlock("form_input_group", $context, $blocks);
            echo "
                ";
            // line 704
            $this->displayBlock("form_help", $context, $blocks);
            echo "
                ";
            // line 705
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
        }
        // line 707
        echo "        </div>

        ";
        // line 709
        if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "inline")) {
            echo "&nbsp;";
        }
        // line 710
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d423763a0b8b8aefc038ff190d8fdf1a26342951bf89e32d95c7a342f0f74d06->leave($__internal_d423763a0b8b8aefc038ff190d8fdf1a26342951bf89e32d95c7a342f0f74d06_prof);

    }

    // line 713
    public function block_form_input_group($context, array $blocks = array())
    {
        $__internal_11d6a8c43198525b78d2b588e6ac5bd132177bb6f0374b48caf12c63fe12d561 = $this->env->getExtension("native_profiler");
        $__internal_11d6a8c43198525b78d2b588e6ac5bd132177bb6f0374b48caf12c63fe12d561->enter($__internal_11d6a8c43198525b78d2b588e6ac5bd132177bb6f0374b48caf12c63fe12d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_input_group"));

        // line 714
        echo "    ";
        ob_start();
        // line 715
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "input_group", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "input_group", array())))) {
            // line 716
            echo "            ";
            $context["input_group"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "input_group", array());
            // line 717
            echo "        ";
        }
        // line 718
        echo "        ";
        $context["input_group"] = ((array_key_exists("input_group", $context)) ? (_twig_default_filter((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), array())) : (array()));
        // line 719
        echo "        ";
        if ( !twig_test_empty((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")))) {
            // line 720
            echo "            ";
            $context["ig_size_class"] = "";
            // line 721
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "size", array()) == "large"))) {
                // line 722
                echo "                ";
                $context["ig_size_class"] = " input-group-lg";
                // line 723
                echo "            ";
            }
            // line 724
            echo "            ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "size", array(), "any", true, true) && ($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "size", array()) == "small"))) {
                // line 725
                echo "                ";
                $context["ig_size_class"] = " input-group-sm";
                // line 726
                echo "            ";
            }
            // line 727
            echo "            <div class=\"input-group";
            echo twig_escape_filter($this->env, (isset($context["ig_size_class"]) ? $context["ig_size_class"] : $this->getContext($context, "ig_size_class")), "html", null, true);
            echo "\">
                ";
            // line 728
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "prepend", array())))) {
                // line 729
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "prepend", array()));
                echo "</span>
                ";
            }
            // line 731
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_prepend", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "button_prepend", array())))) {
                // line 732
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_prepend"]) ? $context["input_group_button_prepend"] : $this->getContext($context, "input_group_button_prepend")), 'widget');
                echo "</span>
                ";
            }
            // line 734
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                ";
            // line 735
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "button_append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "button_append", array())))) {
                // line 736
                echo "                    <span class=\"input-group-btn\">";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["input_group_button_append"]) ? $context["input_group_button_append"] : $this->getContext($context, "input_group_button_append")), 'widget');
                echo "</span>
                ";
            }
            // line 738
            echo "                ";
            if (($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : null), "append", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "append", array())))) {
                // line 739
                echo "                    <span class=\"input-group-addon\">";
                echo $this->env->getExtension('braincrafted_bootstrap_icon')->parseIconsFilter($this->getAttribute((isset($context["input_group"]) ? $context["input_group"] : $this->getContext($context, "input_group")), "append", array()));
                echo "</span>
                ";
            }
            // line 741
            echo "            </div>
        ";
        } else {
            // line 743
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        ";
        }
        // line 745
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_11d6a8c43198525b78d2b588e6ac5bd132177bb6f0374b48caf12c63fe12d561->leave($__internal_11d6a8c43198525b78d2b588e6ac5bd132177bb6f0374b48caf12c63fe12d561_prof);

    }

    // line 748
    public function block_form_help($context, array $blocks = array())
    {
        $__internal_1aaffb9ed5fcc8995eb339f34bcc2aaa11cb2214cd28bff8b8819748f742b8a3 = $this->env->getExtension("native_profiler");
        $__internal_1aaffb9ed5fcc8995eb339f34bcc2aaa11cb2214cd28bff8b8819748f742b8a3->enter($__internal_1aaffb9ed5fcc8995eb339f34bcc2aaa11cb2214cd28bff8b8819748f742b8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_help"));

        // line 749
        echo "    ";
        ob_start();
        // line 750
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help_text", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "help_text", array())))) {
            // line 751
            echo "            ";
            $context["help_text"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "help_text", array());
            // line 752
            echo "        ";
        }
        // line 753
        echo "        ";
        $context["help_text"] = ((array_key_exists("help_text", $context)) ? (_twig_default_filter((isset($context["help_text"]) ? $context["help_text"] : $this->getContext($context, "help_text")), "")) : (""));
        // line 754
        echo "        ";
        if ( !twig_test_empty((isset($context["help_text"]) ? $context["help_text"] : $this->getContext($context, "help_text")))) {
            // line 755
            echo "            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help_text"]) ? $context["help_text"] : $this->getContext($context, "help_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</span>
        ";
        }
        // line 757
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1aaffb9ed5fcc8995eb339f34bcc2aaa11cb2214cd28bff8b8819748f742b8a3->leave($__internal_1aaffb9ed5fcc8995eb339f34bcc2aaa11cb2214cd28bff8b8819748f742b8a3_prof);

    }

    // line 760
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a3c21ae673b2a0e94be72b6d9e48a4a3d079ca942f0744b4736e78c7c30a9863 = $this->env->getExtension("native_profiler");
        $__internal_a3c21ae673b2a0e94be72b6d9e48a4a3d079ca942f0744b4736e78c7c30a9863->enter($__internal_a3c21ae673b2a0e94be72b6d9e48a4a3d079ca942f0744b4736e78c7c30a9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 761
        echo "    ";
        ob_start();
        // line 762
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 763
        echo "        ";
        $context["col_size"] = ((array_key_exists("col_size", $context)) ? (_twig_default_filter((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), $this->env->getExtension('braincrafted_bootstrap_form')->getColSize())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()));
        // line 764
        echo "
        ";
        // line 765
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())))) {
            // line 766
            echo "            ";
            $context["label_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array());
            // line 767
            echo "        ";
        }
        // line 768
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())))) {
            // line 769
            echo "            ";
            $context["widget_col"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array());
            // line 770
            echo "        ";
        }
        // line 771
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())))) {
            // line 772
            echo "            ";
            $context["col_size"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array());
            // line 773
            echo "        ";
        }
        // line 774
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
            // line 775
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
            // line 776
            echo "        ";
        }
        // line 777
        echo "
        ";
        // line 778
        $context["label_col"] = ((array_key_exists("label_col", $context)) ? (_twig_default_filter((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()));
        // line 779
        echo "        ";
        $context["widget_col"] = ((array_key_exists("widget_col", $context)) ? (_twig_default_filter((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), $this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()));
        // line 780
        echo "
        ";
        // line 781
        if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "horizontal")) {
            // line 782
            echo "            <div class=\"form-group\">
                <div class=\"col-";
            // line 783
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-offset-";
            echo twig_escape_filter($this->env, (isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col")), "html", null, true);
            echo " col-";
            echo twig_escape_filter($this->env, (isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col")), "html", null, true);
            echo "\">
                    ";
            // line 784
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
                </div>
            </div>
        ";
        } elseif ((        // line 787
(isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "modify")) {
            // line 788
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
        ";
        } else {
            // line 790
            echo "            <div class=\"form-group\">
                ";
            // line 791
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            </div>
        ";
        }
        // line 794
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a3c21ae673b2a0e94be72b6d9e48a4a3d079ca942f0744b4736e78c7c30a9863->leave($__internal_a3c21ae673b2a0e94be72b6d9e48a4a3d079ca942f0744b4736e78c7c30a9863_prof);

    }

    // line 798
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1a7877f87939056ad2468e1e42a701b15a15cb874b233156f57ef3ccc551b4c7 = $this->env->getExtension("native_profiler");
        $__internal_1a7877f87939056ad2468e1e42a701b15a15cb874b233156f57ef3ccc551b4c7->enter($__internal_1a7877f87939056ad2468e1e42a701b15a15cb874b233156f57ef3ccc551b4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 799
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_1a7877f87939056ad2468e1e42a701b15a15cb874b233156f57ef3ccc551b4c7->leave($__internal_1a7877f87939056ad2468e1e42a701b15a15cb874b233156f57ef3ccc551b4c7_prof);

    }

    // line 802
    public function block_form_actions_row($context, array $blocks = array())
    {
        $__internal_29df98079eaf57a1df3336887edd5a1a5b068a2ad5955ee56db5d85d33f5e493 = $this->env->getExtension("native_profiler");
        $__internal_29df98079eaf57a1df3336887edd5a1a5b068a2ad5955ee56db5d85d33f5e493->enter($__internal_29df98079eaf57a1df3336887edd5a1a5b068a2ad5955ee56db5d85d33f5e493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_actions_row"));

        // line 803
        echo "    ";
        $this->displayBlock("button_row", $context, $blocks);
        echo "
";
        
        $__internal_29df98079eaf57a1df3336887edd5a1a5b068a2ad5955ee56db5d85d33f5e493->leave($__internal_29df98079eaf57a1df3336887edd5a1a5b068a2ad5955ee56db5d85d33f5e493_prof);

    }

    // line 808
    public function block_form($context, array $blocks = array())
    {
        $__internal_ad28daff414871b996b8d0185bb977dcafd6328d2759ac6c46172e1f7e160de5 = $this->env->getExtension("native_profiler");
        $__internal_ad28daff414871b996b8d0185bb977dcafd6328d2759ac6c46172e1f7e160de5->enter($__internal_ad28daff414871b996b8d0185bb977dcafd6328d2759ac6c46172e1f7e160de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 809
        echo "    ";
        ob_start();
        // line 810
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 811
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 812
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ad28daff414871b996b8d0185bb977dcafd6328d2759ac6c46172e1f7e160de5->leave($__internal_ad28daff414871b996b8d0185bb977dcafd6328d2759ac6c46172e1f7e160de5_prof);

    }

    // line 816
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c788e018a187e90af7e0ac6e6e0b7d568d4793380c6645a8e727fd2b2df821ed = $this->env->getExtension("native_profiler");
        $__internal_c788e018a187e90af7e0ac6e6e0b7d568d4793380c6645a8e727fd2b2df821ed->enter($__internal_c788e018a187e90af7e0ac6e6e0b7d568d4793380c6645a8e727fd2b2df821ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 817
        echo "    ";
        ob_start();
        // line 818
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->backupFormSettings(), "html", null, true);
        echo "
        ";
        // line 819
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 820
        echo "        ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 821
            echo "            ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 822
            echo "        ";
        } else {
            // line 823
            echo "            ";
            $context["form_method"] = "POST";
            // line 824
            echo "        ";
        }
        // line 825
        echo "
        ";
        // line 826
        if (array_key_exists("style", $context)) {
            // line 827
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-") . (isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))))));
            // line 828
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style"))), "html", null, true);
            echo "
        ";
        }
        // line 830
        echo "
        ";
        // line 831
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 832
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " has-global-errors"))));
            // line 833
            echo "        ";
        }
        // line 834
        echo "
        ";
        // line 835
        if (array_key_exists("col_size", $context)) {
            // line 836
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize((isset($context["col_size"]) ? $context["col_size"] : $this->getContext($context, "col_size"))), "html", null, true);
            echo "
        ";
        }
        // line 838
        echo "
        ";
        // line 839
        if (array_key_exists("widget_col", $context)) {
            // line 840
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol((isset($context["widget_col"]) ? $context["widget_col"] : $this->getContext($context, "widget_col"))), "html", null, true);
            echo "
        ";
        }
        // line 842
        echo "
        ";
        // line 843
        if (array_key_exists("label_col", $context)) {
            // line 844
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol((isset($context["label_col"]) ? $context["label_col"] : $this->getContext($context, "label_col"))), "html", null, true);
            echo "
        ";
        }
        // line 846
        echo "
        ";
        // line 847
        if (array_key_exists("simple_col", $context)) {
            // line 848
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol((isset($context["simple_col"]) ? $context["simple_col"] : $this->getContext($context, "simple_col"))), "html", null, true);
            echo "
        ";
        }
        // line 850
        echo "
        ";
        // line 851
        if (( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "role", array(), "any", true, true) || twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "role", array())))) {
            // line 852
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("role" => "form"));
            // line 853
            echo "        ";
        }
        // line 854
        echo "
        <form  name=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
        ";
        // line 856
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 857
            echo "            <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
        ";
        }
        // line 859
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c788e018a187e90af7e0ac6e6e0b7d568d4793380c6645a8e727fd2b2df821ed->leave($__internal_c788e018a187e90af7e0ac6e6e0b7d568d4793380c6645a8e727fd2b2df821ed_prof);

    }

    // line 862
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_e674e765fd737f01f50bd1442e456023e113ed367738ee90d7d49041d7e364b9 = $this->env->getExtension("native_profiler");
        $__internal_e674e765fd737f01f50bd1442e456023e113ed367738ee90d7d49041d7e364b9->enter($__internal_e674e765fd737f01f50bd1442e456023e113ed367738ee90d7d49041d7e364b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 863
        echo "    ";
        ob_start();
        // line 864
        echo "        ";
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 865
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
        ";
        }
        // line 867
        echo "        </form>
        ";
        // line 868
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()) {
            // line 869
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
            echo "
        ";
        }
        // line 871
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getColSize()) {
            // line 872
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setColSize("lg"), "html", null, true);
            echo "
        ";
        }
        // line 874
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getWidgetCol()) {
            // line 875
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setWidgetCol(10), "html", null, true);
            echo "
        ";
        }
        // line 877
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getLabelCol()) {
            // line 878
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setLabelCol(2), "html", null, true);
            echo "
        ";
        }
        // line 880
        echo "        ";
        if ($this->env->getExtension('braincrafted_bootstrap_form')->getSimpleCol()) {
            // line 881
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setSimpleCol(false), "html", null, true);
            echo "
        ";
        }
        // line 883
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->restoreFormSettings(), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e674e765fd737f01f50bd1442e456023e113ed367738ee90d7d49041d7e364b9->leave($__internal_e674e765fd737f01f50bd1442e456023e113ed367738ee90d7d49041d7e364b9_prof);

    }

    // line 887
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_8b65ff10771b78b67de8fa92c539391afdc822eeb7577ed062a84cc86fc9cac0 = $this->env->getExtension("native_profiler");
        $__internal_8b65ff10771b78b67de8fa92c539391afdc822eeb7577ed062a84cc86fc9cac0->enter($__internal_8b65ff10771b78b67de8fa92c539391afdc822eeb7577ed062a84cc86fc9cac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 888
        echo "    ";
        ob_start();
        // line 889
        echo "        ";
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        // line 890
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8b65ff10771b78b67de8fa92c539391afdc822eeb7577ed062a84cc86fc9cac0->leave($__internal_8b65ff10771b78b67de8fa92c539391afdc822eeb7577ed062a84cc86fc9cac0_prof);

    }

    // line 893
    public function block_global_form_errors($context, array $blocks = array())
    {
        $__internal_72929d72e90b1792f0b1bc135be0d2f6ff9e8ddb3722713d7b8c3319fa7a6036 = $this->env->getExtension("native_profiler");
        $__internal_72929d72e90b1792f0b1bc135be0d2f6ff9e8ddb3722713d7b8c3319fa7a6036->enter($__internal_72929d72e90b1792f0b1bc135be0d2f6ff9e8ddb3722713d7b8c3319fa7a6036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_form_errors"));

        // line 894
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 895
            echo "        ";
            $context["global_errors"] = true;
            // line 896
            echo "        ";
            $this->displayBlock("form_errors", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_72929d72e90b1792f0b1bc135be0d2f6ff9e8ddb3722713d7b8c3319fa7a6036->leave($__internal_72929d72e90b1792f0b1bc135be0d2f6ff9e8ddb3722713d7b8c3319fa7a6036_prof);

    }

    // line 900
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1cc811ff076f390010d5b6bb051ac8832ee3d665d0357ff64256b31f67a0206e = $this->env->getExtension("native_profiler");
        $__internal_1cc811ff076f390010d5b6bb051ac8832ee3d665d0357ff64256b31f67a0206e->enter($__internal_1cc811ff076f390010d5b6bb051ac8832ee3d665d0357ff64256b31f67a0206e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 901
        echo "    ";
        ob_start();
        // line 902
        echo "        ";
        $context["global_errors"] = ((array_key_exists("global_errors", $context)) ? (_twig_default_filter((isset($context["global_errors"]) ? $context["global_errors"] : $this->getContext($context, "global_errors")), false)) : (false));
        // line 903
        echo "        ";
        $context["style"] = ((array_key_exists("style", $context)) ? (_twig_default_filter((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")), $this->env->getExtension('braincrafted_bootstrap_form')->getStyle())) : ($this->env->getExtension('braincrafted_bootstrap_form')->getStyle()));
        // line 904
        echo "
        ";
        // line 905
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())))) {
            // line 906
            echo "            ";
            $context["style"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array());
            // line 907
            echo "        ";
        }
        // line 908
        echo "
        ";
        // line 909
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 910
            echo "            ";
            if ((isset($context["global_errors"]) ? $context["global_errors"] : $this->getContext($context, "global_errors"))) {
                // line 911
                echo "                <div class=\"alert alert-danger\">
            ";
            }
            // line 913
            echo "            <ul";
            if ( !(isset($context["global_errors"]) ? $context["global_errors"] : $this->getContext($context, "global_errors"))) {
                echo " class=\"help-block\"";
            }
            echo ">
                ";
            // line 914
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 915
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 917
            echo "            </ul>
            ";
            // line 918
            if (((isset($context["global_errors"]) ? $context["global_errors"] : $this->getContext($context, "global_errors")) == true)) {
                // line 919
                echo "                </div>
            ";
            }
            // line 921
            echo "        ";
        }
        // line 922
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1cc811ff076f390010d5b6bb051ac8832ee3d665d0357ff64256b31f67a0206e->leave($__internal_1cc811ff076f390010d5b6bb051ac8832ee3d665d0357ff64256b31f67a0206e_prof);

    }

    // line 925
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_73d274a5b841416603b03e19fa283371813942259af906124397a48b433d1fb7 = $this->env->getExtension("native_profiler");
        $__internal_73d274a5b841416603b03e19fa283371813942259af906124397a48b433d1fb7->enter($__internal_73d274a5b841416603b03e19fa283371813942259af906124397a48b433d1fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 926
        echo "    ";
        ob_start();
        // line 927
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 928
            echo "            ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 929
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
            ";
            }
            // line 931
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 932
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_73d274a5b841416603b03e19fa283371813942259af906124397a48b433d1fb7->leave($__internal_73d274a5b841416603b03e19fa283371813942259af906124397a48b433d1fb7_prof);

    }

    // line 937
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_2f7fe49c28be8e1da7e7f739de5bcd41def452c309d89420998249863496dce2 = $this->env->getExtension("native_profiler");
        $__internal_2f7fe49c28be8e1da7e7f739de5bcd41def452c309d89420998249863496dce2->enter($__internal_2f7fe49c28be8e1da7e7f739de5bcd41def452c309d89420998249863496dce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 938
        echo "    ";
        ob_start();
        // line 939
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 940
            echo "            ";
            $context["childAttr"] = array();
            // line 941
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "col_size", array(), "any", true, true)) {
                // line 942
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")), array("col_size" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "col_size", array())));
                // line 943
                echo "            ";
            }
            // line 944
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_col", array(), "any", true, true)) {
                // line 945
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")), array("widget_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "widget_col", array())));
                // line 946
                echo "            ";
            }
            // line 947
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "label_col", array(), "any", true, true)) {
                // line 948
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")), array("label_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "label_col", array())));
                // line 949
                echo "            ";
            }
            // line 950
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "simple_col", array(), "any", true, true)) {
                // line 951
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")), array("simple_col" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "simple_col", array())));
                // line 952
                echo "            ";
            }
            // line 953
            echo "            ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) {
                // line 954
                echo "                ";
                $context["childAttr"] = twig_array_merge((isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")), array("style" => $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())));
                // line 955
                echo "            ";
            }
            // line 956
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row', (isset($context["childAttr"]) ? $context["childAttr"] : $this->getContext($context, "childAttr")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 958
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2f7fe49c28be8e1da7e7f739de5bcd41def452c309d89420998249863496dce2->leave($__internal_2f7fe49c28be8e1da7e7f739de5bcd41def452c309d89420998249863496dce2_prof);

    }

    // line 961
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_299213d5171edfed72a7487c92b9e65ae841d755e30672a4c0334dad7c596fdb = $this->env->getExtension("native_profiler");
        $__internal_299213d5171edfed72a7487c92b9e65ae841d755e30672a4c0334dad7c596fdb->enter($__internal_299213d5171edfed72a7487c92b9e65ae841d755e30672a4c0334dad7c596fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 962
        echo "    ";
        ob_start();
        // line 963
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 964
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\" ";
            } elseif (twig_in_filter($context["attrname"], array(0 => "input_group"))) {
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 965
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_299213d5171edfed72a7487c92b9e65ae841d755e30672a4c0334dad7c596fdb->leave($__internal_299213d5171edfed72a7487c92b9e65ae841d755e30672a4c0334dad7c596fdb_prof);

    }

    // line 968
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f046921fa07a526e36aaa9205bae333852f9a09a35e5012a0cb688b8c3c7d2b8 = $this->env->getExtension("native_profiler");
        $__internal_f046921fa07a526e36aaa9205bae333852f9a09a35e5012a0cb688b8c3c7d2b8->enter($__internal_f046921fa07a526e36aaa9205bae333852f9a09a35e5012a0cb688b8c3c7d2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 969
        echo "    ";
        ob_start();
        // line 970
        echo "        ";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true) && (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array()) == "inline") || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array()) == "horizontal")))) {
            // line 971
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((("form-" . $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "style", array())) . " ") . (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))))));
            // line 972
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => null));
            // line 973
            echo "        ";
        }
        // line 974
        echo "        ";
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
        }
        // line 975
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (( !(null === $context["attrvalue"]) &&  !twig_test_iterable($context["attrvalue"]))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 976
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f046921fa07a526e36aaa9205bae333852f9a09a35e5012a0cb688b8c3c7d2b8->leave($__internal_f046921fa07a526e36aaa9205bae333852f9a09a35e5012a0cb688b8c3c7d2b8_prof);

    }

    // line 979
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_2f7184965bba9571868439ea977b03d179e52ba6ebb425b99f2322d5aaac0c0d = $this->env->getExtension("native_profiler");
        $__internal_2f7184965bba9571868439ea977b03d179e52ba6ebb425b99f2322d5aaac0c0d->enter($__internal_2f7184965bba9571868439ea977b03d179e52ba6ebb425b99f2322d5aaac0c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 980
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 981
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_2f7184965bba9571868439ea977b03d179e52ba6ebb425b99f2322d5aaac0c0d->leave($__internal_2f7184965bba9571868439ea977b03d179e52ba6ebb425b99f2322d5aaac0c0d_prof);

    }

    public function getTemplateName()
    {
        return ":Form:form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3293 => 981,  3284 => 980,  3278 => 979,  3270 => 976,  3255 => 975,  3248 => 974,  3245 => 973,  3242 => 972,  3239 => 971,  3236 => 970,  3233 => 969,  3227 => 968,  3219 => 965,  3198 => 964,  3173 => 963,  3170 => 962,  3164 => 961,  3156 => 958,  3147 => 956,  3144 => 955,  3141 => 954,  3138 => 953,  3135 => 952,  3132 => 951,  3129 => 950,  3126 => 949,  3123 => 948,  3120 => 947,  3117 => 946,  3114 => 945,  3111 => 944,  3108 => 943,  3105 => 942,  3102 => 941,  3099 => 940,  3094 => 939,  3091 => 938,  3085 => 937,  3077 => 932,  3071 => 931,  3065 => 929,  3062 => 928,  3057 => 927,  3054 => 926,  3048 => 925,  3040 => 922,  3037 => 921,  3033 => 919,  3031 => 918,  3028 => 917,  3019 => 915,  3015 => 914,  3008 => 913,  3004 => 911,  3001 => 910,  2999 => 909,  2996 => 908,  2993 => 907,  2990 => 906,  2988 => 905,  2985 => 904,  2982 => 903,  2979 => 902,  2976 => 901,  2970 => 900,  2959 => 896,  2956 => 895,  2953 => 894,  2947 => 893,  2939 => 890,  2934 => 889,  2931 => 888,  2925 => 887,  2914 => 883,  2908 => 881,  2905 => 880,  2899 => 878,  2896 => 877,  2890 => 875,  2887 => 874,  2881 => 872,  2878 => 871,  2872 => 869,  2870 => 868,  2867 => 867,  2861 => 865,  2858 => 864,  2855 => 863,  2849 => 862,  2841 => 859,  2835 => 857,  2833 => 856,  2809 => 855,  2806 => 854,  2803 => 853,  2800 => 852,  2798 => 851,  2795 => 850,  2789 => 848,  2787 => 847,  2784 => 846,  2778 => 844,  2776 => 843,  2773 => 842,  2767 => 840,  2765 => 839,  2762 => 838,  2756 => 836,  2754 => 835,  2751 => 834,  2748 => 833,  2745 => 832,  2743 => 831,  2740 => 830,  2734 => 828,  2731 => 827,  2729 => 826,  2726 => 825,  2723 => 824,  2720 => 823,  2717 => 822,  2714 => 821,  2711 => 820,  2709 => 819,  2704 => 818,  2701 => 817,  2695 => 816,  2685 => 812,  2681 => 811,  2676 => 810,  2673 => 809,  2667 => 808,  2657 => 803,  2651 => 802,  2641 => 799,  2635 => 798,  2626 => 794,  2620 => 791,  2617 => 790,  2611 => 788,  2609 => 787,  2603 => 784,  2593 => 783,  2590 => 782,  2588 => 781,  2585 => 780,  2582 => 779,  2580 => 778,  2577 => 777,  2574 => 776,  2571 => 775,  2568 => 774,  2565 => 773,  2562 => 772,  2559 => 771,  2556 => 770,  2553 => 769,  2550 => 768,  2547 => 767,  2544 => 766,  2542 => 765,  2539 => 764,  2536 => 763,  2533 => 762,  2530 => 761,  2524 => 760,  2516 => 757,  2510 => 755,  2507 => 754,  2504 => 753,  2501 => 752,  2498 => 751,  2495 => 750,  2492 => 749,  2486 => 748,  2478 => 745,  2472 => 743,  2468 => 741,  2462 => 739,  2459 => 738,  2453 => 736,  2451 => 735,  2446 => 734,  2440 => 732,  2437 => 731,  2431 => 729,  2429 => 728,  2424 => 727,  2421 => 726,  2418 => 725,  2415 => 724,  2412 => 723,  2409 => 722,  2406 => 721,  2403 => 720,  2400 => 719,  2397 => 718,  2394 => 717,  2391 => 716,  2388 => 715,  2385 => 714,  2379 => 713,  2371 => 710,  2367 => 709,  2363 => 707,  2358 => 705,  2354 => 704,  2350 => 703,  2345 => 702,  2339 => 699,  2335 => 698,  2331 => 697,  2325 => 696,  2320 => 695,  2318 => 694,  2312 => 693,  2309 => 692,  2306 => 691,  2304 => 690,  2301 => 689,  2298 => 688,  2295 => 687,  2292 => 686,  2289 => 685,  2286 => 684,  2283 => 683,  2280 => 682,  2277 => 681,  2274 => 680,  2271 => 679,  2268 => 678,  2265 => 677,  2262 => 676,  2259 => 675,  2257 => 674,  2254 => 673,  2251 => 672,  2248 => 671,  2245 => 670,  2239 => 669,  2228 => 665,  2226 => 661,  2223 => 660,  2217 => 659,  2206 => 655,  2198 => 652,  2179 => 650,  2176 => 649,  2173 => 648,  2170 => 647,  2167 => 646,  2164 => 645,  2161 => 644,  2158 => 643,  2155 => 642,  2153 => 641,  2150 => 640,  2147 => 639,  2144 => 638,  2141 => 637,  2138 => 636,  2135 => 635,  2133 => 634,  2130 => 633,  2127 => 632,  2124 => 631,  2122 => 630,  2119 => 629,  2116 => 628,  2113 => 627,  2111 => 626,  2108 => 625,  2105 => 624,  2102 => 623,  2099 => 622,  2096 => 621,  2093 => 620,  2090 => 619,  2087 => 618,  2084 => 617,  2082 => 616,  2079 => 615,  2076 => 614,  2073 => 613,  2067 => 612,  2042 => 607,  2039 => 606,  2033 => 605,  2022 => 602,  2018 => 601,  2013 => 600,  2007 => 599,  1996 => 595,  1993 => 594,  1990 => 593,  1984 => 592,  1973 => 588,  1970 => 587,  1967 => 586,  1961 => 585,  1953 => 582,  1939 => 580,  1927 => 578,  1924 => 577,  1921 => 576,  1918 => 575,  1915 => 574,  1912 => 573,  1909 => 572,  1906 => 571,  1903 => 570,  1900 => 569,  1897 => 568,  1891 => 567,  1880 => 563,  1877 => 562,  1874 => 561,  1868 => 560,  1857 => 556,  1854 => 555,  1851 => 554,  1845 => 553,  1834 => 549,  1831 => 548,  1828 => 547,  1822 => 546,  1810 => 540,  1807 => 539,  1804 => 538,  1801 => 537,  1795 => 536,  1784 => 532,  1781 => 531,  1778 => 530,  1772 => 529,  1761 => 525,  1758 => 524,  1755 => 523,  1749 => 522,  1739 => 517,  1737 => 513,  1734 => 512,  1731 => 511,  1725 => 510,  1714 => 506,  1711 => 505,  1708 => 504,  1702 => 503,  1691 => 499,  1688 => 498,  1686 => 497,  1683 => 496,  1677 => 495,  1669 => 492,  1665 => 490,  1659 => 489,  1654 => 488,  1650 => 487,  1645 => 486,  1642 => 485,  1639 => 484,  1633 => 482,  1630 => 481,  1627 => 480,  1621 => 479,  1613 => 476,  1608 => 473,  1606 => 472,  1605 => 471,  1604 => 470,  1603 => 469,  1598 => 468,  1595 => 467,  1589 => 465,  1586 => 464,  1583 => 463,  1577 => 462,  1569 => 459,  1563 => 456,  1559 => 455,  1555 => 454,  1551 => 453,  1546 => 452,  1543 => 451,  1537 => 449,  1534 => 448,  1531 => 447,  1525 => 446,  1506 => 442,  1503 => 441,  1497 => 440,  1478 => 436,  1475 => 435,  1469 => 434,  1461 => 431,  1457 => 429,  1455 => 428,  1451 => 426,  1449 => 425,  1444 => 423,  1441 => 422,  1435 => 420,  1429 => 418,  1427 => 417,  1424 => 416,  1418 => 414,  1412 => 412,  1408 => 410,  1406 => 409,  1402 => 408,  1386 => 407,  1383 => 406,  1380 => 405,  1377 => 404,  1374 => 403,  1371 => 402,  1368 => 401,  1365 => 400,  1362 => 399,  1359 => 398,  1356 => 397,  1353 => 396,  1350 => 395,  1347 => 394,  1345 => 393,  1342 => 392,  1334 => 390,  1332 => 389,  1328 => 388,  1321 => 387,  1318 => 386,  1315 => 385,  1312 => 384,  1310 => 383,  1307 => 382,  1304 => 381,  1301 => 380,  1298 => 379,  1295 => 378,  1292 => 377,  1289 => 376,  1286 => 375,  1283 => 374,  1281 => 373,  1278 => 372,  1276 => 371,  1273 => 370,  1270 => 369,  1267 => 368,  1261 => 367,  1253 => 364,  1249 => 363,  1246 => 362,  1242 => 360,  1240 => 359,  1236 => 357,  1234 => 356,  1229 => 354,  1226 => 353,  1223 => 352,  1217 => 350,  1211 => 348,  1209 => 347,  1206 => 346,  1200 => 344,  1194 => 342,  1190 => 340,  1188 => 339,  1184 => 338,  1168 => 337,  1165 => 336,  1162 => 335,  1159 => 334,  1156 => 333,  1153 => 332,  1150 => 331,  1147 => 330,  1144 => 329,  1141 => 328,  1138 => 327,  1135 => 326,  1132 => 325,  1129 => 324,  1126 => 323,  1120 => 320,  1116 => 319,  1110 => 318,  1105 => 317,  1102 => 316,  1099 => 315,  1096 => 314,  1094 => 313,  1091 => 312,  1083 => 310,  1081 => 309,  1077 => 308,  1070 => 307,  1067 => 306,  1064 => 305,  1061 => 304,  1058 => 303,  1056 => 302,  1053 => 301,  1050 => 300,  1047 => 299,  1044 => 298,  1041 => 297,  1038 => 296,  1035 => 295,  1032 => 294,  1029 => 293,  1026 => 292,  1023 => 291,  1020 => 290,  1018 => 289,  1015 => 288,  1012 => 287,  1009 => 286,  1006 => 285,  1000 => 284,  992 => 281,  978 => 280,  966 => 278,  959 => 275,  957 => 274,  952 => 273,  949 => 272,  931 => 271,  928 => 270,  922 => 269,  910 => 264,  907 => 263,  904 => 262,  898 => 260,  896 => 259,  891 => 258,  888 => 257,  885 => 256,  872 => 254,  870 => 253,  863 => 252,  860 => 251,  857 => 250,  854 => 249,  848 => 248,  839 => 244,  833 => 243,  827 => 241,  821 => 239,  818 => 238,  814 => 237,  809 => 236,  806 => 235,  800 => 234,  792 => 231,  786 => 229,  780 => 227,  777 => 226,  774 => 225,  768 => 224,  760 => 221,  756 => 219,  754 => 218,  749 => 216,  746 => 215,  738 => 213,  736 => 212,  733 => 211,  730 => 210,  727 => 209,  725 => 208,  722 => 207,  719 => 206,  716 => 205,  714 => 204,  711 => 203,  708 => 202,  705 => 201,  699 => 200,  691 => 197,  687 => 195,  685 => 194,  678 => 192,  675 => 191,  673 => 190,  670 => 189,  662 => 187,  660 => 186,  657 => 185,  654 => 184,  651 => 183,  648 => 182,  645 => 181,  642 => 180,  640 => 179,  637 => 178,  634 => 177,  631 => 176,  625 => 175,  616 => 171,  606 => 169,  604 => 168,  601 => 167,  593 => 164,  585 => 161,  580 => 160,  578 => 159,  573 => 157,  569 => 156,  565 => 155,  561 => 153,  557 => 152,  551 => 150,  548 => 149,  545 => 148,  543 => 147,  540 => 146,  537 => 145,  534 => 144,  531 => 143,  528 => 142,  525 => 141,  522 => 140,  519 => 139,  516 => 138,  513 => 137,  510 => 136,  507 => 135,  501 => 134,  490 => 130,  487 => 129,  484 => 128,  481 => 127,  478 => 126,  472 => 125,  461 => 120,  456 => 119,  450 => 117,  448 => 116,  443 => 115,  440 => 114,  434 => 113,  426 => 110,  422 => 108,  419 => 107,  406 => 105,  404 => 104,  384 => 102,  381 => 101,  379 => 100,  376 => 99,  373 => 98,  370 => 97,  367 => 96,  364 => 95,  361 => 94,  358 => 93,  356 => 92,  353 => 91,  351 => 90,  348 => 89,  340 => 87,  338 => 86,  335 => 85,  332 => 84,  329 => 83,  326 => 82,  323 => 81,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  302 => 74,  300 => 73,  297 => 72,  294 => 71,  291 => 70,  288 => 69,  282 => 68,  274 => 65,  268 => 63,  262 => 61,  259 => 60,  256 => 59,  250 => 58,  242 => 53,  236 => 50,  231 => 49,  226 => 47,  222 => 46,  217 => 45,  214 => 44,  211 => 43,  208 => 42,  205 => 41,  202 => 40,  196 => 39,  188 => 36,  182 => 33,  177 => 32,  172 => 30,  168 => 29,  163 => 28,  160 => 27,  157 => 26,  154 => 25,  151 => 24,  148 => 23,  142 => 22,  134 => 19,  128 => 16,  123 => 15,  118 => 13,  114 => 12,  109 => 11,  106 => 10,  103 => 9,  100 => 8,  97 => 7,  94 => 6,  88 => 5,  11 => 1,);
    }
}
/* {% extends 'BraincraftedBootstrapBundle:Form:bootstrap.html.twig' %}*/
/* */
/* {# Custom Widgets #}*/
/* */
/* {% block uni_adminbundle_frontpagephoto_widget %}*/
/*     {% spaceless %}*/
/*         {% set path = form.children['path'] %}*/
/*         {% set file = form.children['file'] %}*/
/*         {% if path.vars.attr.preview is defined and path.vars.attr.preview == true and path.vars.value != '' %}*/
/*             {% set image = 'uploads/frontpage/' ~ path.vars.value %}*/
/*             <img src="{{ asset(image) | imagine_filter('admin_frontpage') }}" class="img-responsive img-thumbnail">*/
/*             {{ form_widget(path) }}*/
/*             {{ form_errors(path) }}*/
/*         {% else %}*/
/*             {{ form_widget(file) }}*/
/*             {{ form_errors(file) }}*/
/*             <script type="text/javascript">$(".photo").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});</script>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock uni_adminbundle_frontpagephoto_widget %}*/
/* */
/* {% block uni_adminbundle_noticephoto_widget %}*/
/*     {% spaceless %}*/
/*         {% set path = form.children['path'] %}*/
/*         {% set file = form.children['file'] %}*/
/*         {% if path.vars.attr.preview is defined and path.vars.attr.preview == true and path.vars.value != '' %}*/
/*             {% set image = 'uploads/notice/' ~ path.vars.value %}*/
/*             <img src="{{ asset(image) | imagine_filter('admin_notice') }}" class="img-responsive img-thumbnail">*/
/*             {{ form_widget(path) }}*/
/*             {{ form_errors(path) }}*/
/*         {% else %}*/
/*             {{ form_widget(file) }}*/
/*             {{ form_errors(file) }}*/
/*             <script type="text/javascript">$(".photo").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});</script>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock uni_adminbundle_noticephoto_widget %}*/
/* */
/* {% block uni_adminbundle_productphoto_widget %}*/
/*     {% spaceless %}*/
/*         {% set path = form.children['path'] %}*/
/*         {% set file = form.children['file'] %}*/
/*         {% if path.vars.attr.preview is defined and path.vars.attr.preview == true and path.vars.value != '' %}*/
/*             {% set image = 'uploads/product/' ~ path.vars.value %}*/
/*             <img src="{{ asset(image) | imagine_filter('admin_product') }}" class="img-responsive img-thumbnail">*/
/*             {{ form_widget(path) }}*/
/*             {{ form_errors(path) }}*/
/*         {% else %}*/
/*             {{ form_widget(file) }}*/
/*             {{ form_errors(file) }}*/
/*             <script type="text/javascript">$(".photo").fileinput({'showRemove':false,'showCaption':false,'showUpload':false,'browseLabel':'Seleccionar Foto','removeLabel':'','browseIcon':'<i class="fa fa-camera"></i> ','browseClass':'btn btn-primary btn-block'});</script>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock uni_adminbundle_productphoto_widget %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {% spaceless %}*/
/*         {% if compound %}*/
/*             {{ block('form_widget_compound') }}*/
/*         {% else %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% spaceless %}*/
/*         {% set style = style|default(bootstrap_get_style()) %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if simple_col is not defined and bootstrap_get_simple_col() %}*/
/*             {% set simple_col = bootstrap_get_simple_col() %}*/
/*         {% endif %}*/
/*         {% if attr.simple_col is defined and attr.simple_col is not empty %}*/
/*             {% set simple_col = attr.simple_col %}*/
/*         {% endif  %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/*         {% if attr.style is defined and attr.style is not empty %}*/
/*             {% set style = attr.style %}*/
/*         {% endif %}*/
/* */
/*         {% if simple_col is defined and simple_col %}*/
/*             <div class="col-{{ col_size }}-{{ simple_col }}">*/
/*         {% endif %}*/
/* */
/*         {% set type = type|default('text') %}*/
/* */
/*         {% if style == 'inline' and (attr.placeholder is not defined or attr.placeholder is empty)  and label is not same as (false) %}*/
/*             {% if label is empty %}*/
/*                 {% set attr = attr|merge({ 'placeholder': name|humanize }) %}*/
/*             {% else %}*/
/*                 {% set attr = attr|merge({ 'placeholder': label}) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if static_control is defined and static_control == true %}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}*/
/*             <p id="{{ id }}" {%- for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ value }}</p>*/
/*         {%- else -%}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/*             <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}>*/
/*         {%- endif %}*/
/*         {% if simple_col is defined %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block form_widget_compound %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {% if form.parent is empty %}*/
/*                 {{ block('global_form_errors') }}*/
/*             {% endif %}*/
/*             {{ block('form_rows') }}*/
/*             {{ form_rest(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_widget_compound %}*/
/* */
/* {% block collection_widget %}*/
/*     {% spaceless %}*/
/*         {% if prototype is defined %}*/
/*             {% set attr = attr|merge({'data-prototype': form_row(prototype) }) %}*/
/*         {% endif %}*/
/*         {{ block('form_widget') }}*/
/*     {% endspaceless %}*/
/* {% endblock collection_widget %}*/
/* */
/* {% block bootstrap_collection_widget %}*/
/*     {% spaceless %}*/
/*         {% if prototype is defined %}*/
/*             {% set prototype_vars = {} %}*/
/*             {% if style is defined %}*/
/*                 {% set prototype_vars = prototype_vars|merge({'style': style}) %}*/
/*             {% endif %}*/
/*             {% set prototype_html = '<div class="col-xs-' ~ form.vars.sub_widget_col ~ '">' ~ form_widget(prototype, prototype_vars) ~ '</div>' %}*/
/*             {% if form.vars.allow_delete %}*/
/*                 {% set prototype_html = prototype_html ~ '<div class="col-xs-' ~ form.vars.button_col ~ '"><a href="#" class="btn btn-danger btn-md" data-removefield="collection" data-field="__id__"><span class="fa fa-remove" aria-hidden="true"></span> ' ~ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw ~ '</a></div>' %}*/
/*             {% endif %}*/
/*             {% set prototype_html = '<div class="row">' ~ prototype_html ~ '</div>' %}*/
/* */
/*             {% set attr = attr|merge({'data-prototype': prototype_html }) %}*/
/*             {% set attr = attr|merge({'data-prototype-name': prototype_name }) %}*/
/*         {% endif %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <ul class="bc-collection list-unstyled">*/
/*                 {% for field in form %}*/
/*                     <li>*/
/*                         <div class="row">*/
/*                             <div class="col-xs-{{ form.vars.sub_widget_col }}">*/
/*                                 {{ form_widget(field) }}*/
/*                                 {{ form_errors(field) }}*/
/*                             </div>*/
/*                             {% if form.vars.allow_delete %}*/
/*                                 <div class="col-xs-{{ form.vars.button_col }}">*/
/*                                     <a href="#" class="btn btn-danger btn-md" data-removefield="collection" data-field="{{ field.vars.id }}"><span class="fa fa-remove" aria-hidden="true"></span> {{ form.vars.delete_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% if form.vars.allow_add %}*/
/*                 <a href="#" class="btn btn-primary btn-md" data-addfield="collection" data-collection="{{ form.vars.id }}" data-prototype-name="{{ prototype_name }}"><span class="fa fa-plus" aria-hidden="true"></span> {{ form.vars.add_button_text|trans({}, translation_domain)|parse_icons|raw }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock bootstrap_collection_widget %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% spaceless %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.simple_col is defined and attr.simple_col is not empty %}*/
/*             {% set simple_col = attr.simple_col %}*/
/*         {% endif  %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/* */
/*         {% if simple_col is defined %}*/
/*             <div class="col-{{ col_size }}-{{ simple_col }}">*/
/*         {% endif %}*/
/* */
/*         {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/* */
/*         <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* */
/*         {% if simple_col is defined %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block file_widget %}*/
/*     {% spaceless %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.simple_col is defined and attr.simple_col is not empty %}*/
/*             {% set simple_col = attr.simple_col %}*/
/*         {% endif  %}*/
/* */
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/* */
/*         {% if simple_col is defined %}*/
/*             <div class="col-{{ col_size }}-{{ simple_col }}">*/
/*         {% endif %}*/
/* */
/*         <input type="file" {{ block('widget_attributes') }}>*/
/* */
/*         {% if simple_col is defined %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock file_widget %}*/
/* */
/* {% block choice_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             {{ block('choice_widget_expanded') }}*/
/*         {% else %}*/
/*             {{ block('choice_widget_collapsed') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {% for child in form %}*/
/*                 {% if multiple %}*/
/*                     {{ checkbox_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr }) }}*/
/*                 {% else %}*/
/*                     {{ radio_row(child, { 'no_form_group': true, 'inline' : (attr.inline is defined and attr.inline), 'label_attr': label_attr  }) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% spaceless %}*/
/*         {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control')|trim }) %}*/
/* */
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*             {% if empty_value is not none %}*/
/*                 <option {% if required %} disabled="disabled"{% if value is empty %} selected="selected"{% endif %}{% endif %} value="">{{ empty_value|trans({}, translation_domain) }}</option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 and separator is not none %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*         </select>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block choice_widget_options %}*/
/*     {% spaceless %}*/
/*         {% for group_label, choice in options %}*/
/*             {% if choice is iterable %}*/
/*                 <optgroup label="{{ group_label|trans({}, translation_domain) }}">*/
/*                     {% set options = choice %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                 </optgroup>*/
/*             {% else %}*/
/*                 <option value="{{ choice.value }}"{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice.label|trans({}, translation_domain) }}</option>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_options %}*/
/* */
/* {% block checkbox_row %}*/
/*     {% spaceless %}*/
/*         {% set style = style|default(bootstrap_get_style()) %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.label_col is defined and attr.label_col is not empty %}*/
/*             {% set label_col = attr.label_col %}*/
/*         {% endif %}*/
/*         {% if attr.widget_col is defined and attr.widget_col is not empty %}*/
/*             {% set widget_col = attr.widget_col %}*/
/*         {% endif %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/*         {% if attr.style is defined and attr.style is not empty %}*/
/*             {% set style = attr.style %}*/
/*         {% endif %}*/
/* */
/*         {% set class = '' %}*/
/*         {% if align_with_widget is defined or attr.align_with_widget is defined %}*/
/*             {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}*/
/*             {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/*             {% set class = 'col-' ~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}*/
/*             <div class="form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}">*/
/*             <div class="{{ class }}">*/
/*         {% elseif no_form_group is not defined or no_form_group == false %}*/
/*             <div class="form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}">*/
/*         {% endif %}*/
/* */
/*         {% if attr.labeled is defined and attr.labeled %}*/
/*             {% set required = false %}*/
/*             {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/*             {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}*/
/*             {{ form_label(form) }}*/
/*             <div class="col-{{ col_size }}-{{ widget_col }}">*/
/*                 {{ block('checkbox_widget') }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         {% else %}*/
/*             {% set checkboxdata %}*/
/*             {% if label is not same as (false) %}*/
/*                 {% if not compound %}*/
/*                     {% set label_attr = label_attr|merge({'for': id}) %}*/
/*                 {% endif %}*/
/*                 {% if inline is defined and inline %}*/
/*                     {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' checkbox-inline')|trim}) %}*/
/*                 {% endif %}*/
/*                 {% if required %}*/
/*                     {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*                 {% endif %}*/
/*                 {% if label is empty %}*/
/*                     {% set label = name|humanize %}*/
/*                 {% endif %}*/
/*                 <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*                 {{ block('checkbox_widget') }}*/
/*                 {{ label|trans({}, translation_domain)|raw -}}*/
/*                 </label>*/
/*             {% else %}*/
/*                 {{ block('checkbox_widget') }}*/
/*             {% endif %}*/
/*             {{ form_errors(form) }}*/
/*             {% endset %}*/
/* */
/*             {% if inline is defined and inline %}*/
/*                 {{ checkboxdata|raw }}*/
/*             {% else %}*/
/*                 <div class="checkbox">{{ checkboxdata|raw }}</div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {{ block('form_help') }}*/
/* */
/*         {% if align_with_widget is defined or attr.align_with_widget is defined %}*/
/*             </div>*/
/*             </div>*/
/*         {% elseif no_form_group is not defined or no_form_group == false %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if style == 'inline' %}&nbsp;{% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_row %}*/
/* */
/* {% block radio_row %}*/
/*     {% spaceless %}*/
/*         {% set class = '' %}*/
/* */
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.label_col is defined and attr.label_col is not empty %}*/
/*             {% set label_col = attr.label_col %}*/
/*         {% endif %}*/
/*         {% if attr.widget_col is defined and attr.widget_col is not empty %}*/
/*             {% set widget_col = attr.widget_col %}*/
/*         {% endif %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/* */
/*         {% if align_with_widget is defined or attr.align_with_widget is defined %}*/
/*             {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}*/
/*             {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/*             {% set class = ' col-'~ col_size ~ '-' ~ widget_col ~ ' col-' ~ col_size ~ '-offset-' ~ label_col %}*/
/*             <div class="form-group {% if form.vars.errors|length > 0 %} has-error{% endif %}">*/
/*             <div class="{{ class }}">*/
/*         {% elseif no_form_group is not defined or no_form_group == false %}*/
/*             <div class="form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}">*/
/*         {% endif %}*/
/* */
/*         {%set radiodata %}*/
/*         {% if label is not same as (false) %}*/
/*             {% if not compound %}*/
/*                 {% set label_attr = label_attr|merge({'for': id}) %}*/
/*             {% endif %}*/
/*             {% if inline is defined and inline %}*/
/*                 {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' radio-inline')|trim}) %}*/
/*             {% endif %}*/
/*             {% if required %}*/
/*                 {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*             {% endif %}*/
/*             {% if label is empty %}*/
/*                 {% set label = name|humanize %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ block('radio_widget') }}*/
/*             {{ label|trans({}, translation_domain)|raw -}}*/
/*             </label>*/
/*         {% else %}*/
/*             {{ block('radio_widget') }}*/
/*         {% endif %}*/
/*         {{ form_errors(form) }}*/
/*         {% endset %}*/
/* */
/*         {% if inline is defined and inline %}*/
/*             {{ radiodata|raw }}*/
/*         {% else%}*/
/*             <div class="radio">{{ radiodata|raw }}</div>*/
/*         {% endif %}*/
/* */
/*         {{ block('form_help') }}*/
/* */
/*         {% if align_with_widget is defined or attr.align_with_widget is defined %}*/
/*             </div>*/
/*             </div>*/
/*         {% elseif no_form_group is not defined or no_form_group == false %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock radio_row %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block radio_widget %}*/
/*     {% spaceless %}*/
/*         <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*     {% endspaceless %}*/
/* {% endblock radio_widget %}*/
/* */
/* {% block datetime_widget %}*/
/*     {% spaceless %}*/
/*         {% if widget == 'single_text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% else %}*/
/*             {% set attr = attr|merge({ 'class': 'bootstrap-datetime' }) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ form_widget(form.date) }}*/
/*                 {{ form_widget(form.time) }}*/
/*                 {{ form_errors(form.date) }}*/
/*                 {{ form_errors(form.time) }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block date_widget %}*/
/*     {% spaceless %}*/
/*         {% if widget == 'single_text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% else %}*/
/*             {% set attr = attr|merge({ 'class': 'bootstrap-date' }) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*                 })|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/*     {% spaceless %}*/
/*         {% if widget == 'single_text' %}*/
/*             {{ block('form_widget_simple') }}*/
/*         {% else %}*/
/*             {% set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} %}*/
/*             {% set attr = attr|merge({ 'class': 'bootstrap-time' }) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ form_widget(form.hour, vars) }}*/
/*                 {% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}*/
/*                 {% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block number_widget %}*/
/*     {% spaceless %}*/
/*         {# type="number" doesn't work with floats #}*/
/*         {% set type = type|default('text') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock number_widget %}*/
/* */
/* {% block integer_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('number') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock integer_widget %}*/
/* */
/* {% block money_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group">*/
/*             {{ money_pattern|replace({*/
/*             '{{ widget }}': block('form_widget_simple'),*/
/*             '{{ tag_start }}': '<span class="input-group-addon">',*/
/*             '{{ tag_end }}': '</span>'*/
/*             })|raw }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock money_widget %}*/
/* */
/* {% block url_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('url') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock url_widget %}*/
/* */
/* {% block search_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('search') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock search_widget %}*/
/* */
/* {% block percent_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('text') %}*/
/*         <div class="input-group">*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">%</span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {% block password_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('password') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock password_widget %}*/
/* */
/* {% block hidden_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('hidden') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock hidden_widget %}*/
/* */
/* {% block email_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('email') %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% endspaceless %}*/
/* {% endblock email_widget %}*/
/* */
/* {% block button_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is empty and label is not same as (false) %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {% if type is defined and type == 'submit' %}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('primary'))|trim }) %}*/
/*         {% else %}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' btn btn-'~button_class|default('default'))|trim }) %}*/
/*         {% endif %}*/
/*         {% if as_link is defined and as_link == true %}*/
/*             <a {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}&nbsp;{% endif %}{{ label|trans({}, translation_domain) }}</a>*/
/*         {% else %}*/
/*             <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{% if attr.icon is defined and attr.icon != '' %}{{ icon(attr.icon) }}&nbsp;{% endif %}{{ label|trans({}, translation_domain) }}</button>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock button_widget %}*/
/* */
/* {% block submit_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('submit') %}*/
/*         {{ block('button_widget') }}*/
/*     {% endspaceless %}*/
/* {% endblock submit_widget %}*/
/* */
/* {% block reset_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('reset') %}*/
/*         {{ block('button_widget') }}*/
/*     {% endspaceless %}*/
/* {% endblock reset_widget %}*/
/* */
/* {% block form_actions_widget %}*/
/*     {% for button in form.children %}*/
/*         {{ form_widget(button) }}&nbsp; {# this needs to be here due to https://github.com/twbs/bootstrap/issues/3245 #}*/
/*     {% endfor  %}*/
/* {% endblock %}*/
/* */
/* {% block bs_static_widget %}*/
/*     {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-control-static')|trim }) %}*/
/*     <p id="{{ id }}" {%- for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ value }}</p>*/
/* {% endblock %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label %}*/
/*     {% spaceless %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.label_col is defined and attr.label_col is not empty %}*/
/*             {% set label_col = attr.label_col %}*/
/*         {% endif %}*/
/*         {% if attr.widget_col is defined and attr.widget_col is not empty %}*/
/*             {% set widget_col = attr.widget_col %}*/
/*         {% endif %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/* */
/*         {% if label is not same as (false) %}*/
/*             {% set style = style|default(bootstrap_get_style()) %}*/
/*             {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/* */
/*             {% if attr.style is defined and attr.style is not empty %}*/
/*                 {% set style = attr.style %}*/
/*             {% endif %}*/
/* */
/*             {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' control-label')|trim }) %}*/
/*             {% if style == 'horizontal' %}*/
/*                 {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' col-' ~ col_size ~ '-' ~ label_col)|trim }) %}*/
/*             {% elseif style == 'inline' %}*/
/*                 {% set label_attr = label_attr|merge({ 'class': (label_attr.class|default('') ~ ' sr-only')|trim }) %}*/
/*             {% endif %}*/
/* */
/*             {% if not compound %}*/
/*                 {% set label_attr = label_attr|merge({'for': id}) %}*/
/*             {% endif %}*/
/*             {% if required %}*/
/*                 {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*             {% endif %}*/
/*             {% if label is empty %}*/
/*                 {% set label = name|humanize %}*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain)|raw }}</label>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block button_label %}{% endblock %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block repeated_row %}*/
/*     {% spaceless %}*/
/*         {#*/
/*         No need to render the errors here, as all errors are mapped*/
/*         to the first child (see RepeatedTypeValidatorExtension).*/
/*         #}*/
/*         {{ block('form_rows') }}*/
/*     {% endspaceless %}*/
/* {% endblock repeated_row %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         {% set style = style|default(bootstrap_get_style()) %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.label_col is defined and attr.label_col is not empty %}*/
/*             {% set label_col = attr.label_col %}*/
/*         {% endif %}*/
/*         {% if attr.widget_col is defined and attr.widget_col is not empty %}*/
/*             {% set widget_col = attr.widget_col %}*/
/*             {% if label is same as (false) and label_col is defined %}*/
/*                 {% set widget_col = widget_col + label_col %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/*         {% if attr.style is defined and attr.style is not empty %}*/
/*             {% set style = attr.style %}*/
/*         {% endif %}*/
/* */
/*         {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/*         {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}*/
/* */
/*         <div class="form-group{% if form.vars.errors|length > 0 %} has-error{% endif %}">*/
/*             {% if style == 'horizontal' %}*/
/*                 {{ form_label(form) }}*/
/*                 <div class="col-{{ col_size }}-{{ widget_col }}">*/
/*                     {{ block('form_input_group') }}*/
/*                     {{ block('form_help') }}*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 {{ form_label(form) }}*/
/*                 {{ block('form_input_group') }}*/
/*                 {{ block('form_help') }}*/
/*                 {{ form_errors(form) }}*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if style == 'inline' %}&nbsp;{% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_input_group %}*/
/*     {% spaceless %}*/
/*         {% if attr.input_group is defined and attr.input_group is not empty %}*/
/*             {% set input_group = attr.input_group %}*/
/*         {% endif %}*/
/*         {% set input_group = input_group|default({}) %}*/
/*         {% if input_group is not empty %}*/
/*             {% set ig_size_class = '' %}*/
/*             {% if input_group.size is defined and input_group.size == 'large' %}*/
/*                 {% set ig_size_class = ' input-group-lg' %}*/
/*             {% endif  %}*/
/*             {% if input_group.size is defined and input_group.size == 'small' %}*/
/*                 {% set ig_size_class = ' input-group-sm' %}*/
/*             {% endif  %}*/
/*             <div class="input-group{{ ig_size_class }}">*/
/*                 {% if input_group.prepend is defined and input_group.prepend is not empty %}*/
/*                     <span class="input-group-addon">{{ input_group.prepend|raw|parse_icons }}</span>*/
/*                 {% endif %}*/
/*                 {% if input_group.button_prepend is defined and input_group.button_prepend is not empty %}*/
/*                     <span class="input-group-btn">{{ form_widget(input_group_button_prepend) }}</span>*/
/*                 {% endif %}*/
/*                 {{ form_widget(form) }}*/
/*                 {% if input_group.button_append is defined and input_group.button_append is not empty %}*/
/*                     <span class="input-group-btn">{{ form_widget(input_group_button_append) }}</span>*/
/*                 {% endif %}*/
/*                 {% if input_group.append is defined and input_group.append is not empty %}*/
/*                     <span class="input-group-addon">{{ input_group.append|raw|parse_icons }}</span>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% else %}*/
/*             {{ form_widget(form) }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_input_group %}*/
/* */
/* {% block form_help %}*/
/*     {% spaceless %}*/
/*         {% if attr.help_text is defined and attr.help_text is not empty %}*/
/*             {% set help_text = attr.help_text %}*/
/*         {% endif %}*/
/*         {% set help_text = help_text|default('') %}*/
/*         {% if help_text is not empty %}*/
/*             <span class="help-block">{{ help_text|trans({}, translation_domain) }}</span>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_help %}*/
/* */
/* {% block button_row %}*/
/*     {% spaceless %}*/
/*         {% set style = style|default(bootstrap_get_style()) %}*/
/*         {% set col_size = col_size|default(bootstrap_get_col_size()) %}*/
/* */
/*         {% if attr.label_col is defined and attr.label_col is not empty %}*/
/*             {% set label_col = attr.label_col %}*/
/*         {% endif %}*/
/*         {% if attr.widget_col is defined and attr.widget_col is not empty %}*/
/*             {% set widget_col = attr.widget_col %}*/
/*         {% endif %}*/
/*         {% if attr.col_size is defined and attr.col_size is not empty %}*/
/*             {% set col_size = attr.col_size %}*/
/*         {% endif %}*/
/*         {% if attr.style is defined and attr.style is not empty %}*/
/*             {% set style = attr.style %}*/
/*         {% endif %}*/
/* */
/*         {% set label_col = label_col|default(bootstrap_get_label_col()) %}*/
/*         {% set widget_col = widget_col|default(bootstrap_get_widget_col()) %}*/
/* */
/*         {% if style == 'horizontal' %}*/
/*             <div class="form-group">*/
/*                 <div class="col-{{ col_size }}-offset-{{ label_col }} col-{{ col_size }}-{{ widget_col }}">*/
/*                     {{ form_widget(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         {% elseif style == 'modify' %}*/
/*             {{ form_widget(form) }}*/
/*         {% else %}*/
/*             <div class="form-group">*/
/*                 {{ form_widget(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock button_row %}*/
/* */
/* {% block hidden_row %}*/
/*     {{ form_widget(form) }}*/
/* {% endblock hidden_row %}*/
/* */
/* {% block form_actions_row %}*/
/*     {{ block('button_row')  }}*/
/* {% endblock %}*/
/* */
/* {# Misc #}*/
/* */
/* {% block form %}*/
/*     {% spaceless %}*/
/*         {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         {{ form_end(form) }}*/
/*     {% endspaceless %}*/
/* {% endblock form %}*/
/* */
/* {% block form_start %}*/
/*     {% spaceless %}*/
/*         {{ bootstrap_backup_form_settings() }}*/
/*         {% set method = method|upper %}*/
/*         {% if method in ["GET", "POST"] %}*/
/*             {% set form_method = method %}*/
/*         {% else %}*/
/*             {% set form_method = "POST" %}*/
/*         {% endif %}*/
/* */
/*         {% if style is defined %}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' form-' ~ style)|trim }) %}*/
/*             {{ bootstrap_set_style(style) }}*/
/*         {% endif %}*/
/* */
/*         {% if form.vars.errors|length > 0 %}*/
/*             {% set attr = attr|merge({ 'class': (attr.class|default('') ~ ' has-global-errors')|trim }) %}*/
/*         {% endif %}*/
/* */
/*         {% if col_size is defined %}*/
/*             {{ bootstrap_set_col_size(col_size) }}*/
/*         {% endif %}*/
/* */
/*         {% if widget_col is defined %}*/
/*             {{ bootstrap_set_widget_col(widget_col) }}*/
/*         {% endif %}*/
/* */
/*         {% if label_col is defined %}*/
/*             {{ bootstrap_set_label_col(label_col) }}*/
/*         {% endif %}*/
/* */
/*         {% if simple_col is defined %}*/
/*             {{ bootstrap_set_simple_col(simple_col) }}*/
/*         {% endif %}*/
/* */
/*         {% if attr.role is not defined or attr.role is empty %}*/
/*             {% set attr = attr|merge({ 'role': 'form' }) %}*/
/*         {% endif %}*/
/* */
/*         <form  name="{{ form.vars.name }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*         {% if form_method != method %}*/
/*             <input type="hidden" name="_method" value="{{ method }}" />*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* {% block form_end %}*/
/*     {% spaceless %}*/
/*         {% if not render_rest is defined or render_rest %}*/
/*             {{ form_rest(form) }}*/
/*         {% endif %}*/
/*         </form>*/
/*         {% if bootstrap_get_style() %}*/
/*             {{ bootstrap_set_style('') }}*/
/*         {% endif %}*/
/*         {% if bootstrap_get_col_size() %}*/
/*             {{ bootstrap_set_col_size('lg') }}*/
/*         {% endif %}*/
/*         {% if bootstrap_get_widget_col() %}*/
/*             {{ bootstrap_set_widget_col(10) }}*/
/*         {% endif %}*/
/*         {% if bootstrap_get_label_col() %}*/
/*             {{ bootstrap_set_label_col(2) }}*/
/*         {% endif %}*/
/*         {% if bootstrap_get_simple_col() %}*/
/*             {{ bootstrap_set_simple_col(false) }}*/
/*         {% endif %}*/
/*     {{ bootstrap_restore_form_settings() }}*/
/*     {% endspaceless %}*/
/* {% endblock form_end %}*/
/* */
/* {% block form_enctype %}*/
/*     {% spaceless %}*/
/*         {% if multipart %}enctype="multipart/form-data"{% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_enctype %}*/
/* */
/* {% block global_form_errors %}*/
/*     {% if errors|length > 0 %}*/
/*         {% set global_errors = true %}*/
/*         {{ block('form_errors') }}*/
/*     {% endif %}*/
/* {% endblock global_form_errors %}*/
/* */
/* {% block form_errors %}*/
/*     {% spaceless %}*/
/*         {% set global_errors = global_errors|default(false) %}*/
/*         {% set style = style|default(bootstrap_get_style()) %}*/
/* */
/*         {% if attr.style is defined and attr.style is not empty %}*/
/*             {% set style = attr.style %}*/
/*         {% endif %}*/
/* */
/*         {% if errors|length > 0 %}*/
/*             {% if global_errors %}*/
/*                 <div class="alert alert-danger">*/
/*             {% endif %}*/
/*             <ul{% if not global_errors %} class="help-block"{% endif %}>*/
/*                 {% for error in errors %}*/
/*                     <li>{{ error.message }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% if global_errors == true %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block form_rest %}*/
/*     {% spaceless %}*/
/*         {% for child in form %}*/
/*             {% if not child.rendered %}*/
/*                 {{ form_row(child) }}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {% block form_rows %}*/
/*     {% spaceless %}*/
/*         {% for child in form %}*/
/*             {% set childAttr = {} %}*/
/*             {% if attr.col_size is defined %}*/
/*                 {% set childAttr = childAttr|merge({ 'col_size': attr.col_size }) %}*/
/*             {% endif %}*/
/*             {% if attr.widget_col is defined %}*/
/*                 {% set childAttr = childAttr|merge({ 'widget_col': attr.widget_col }) %}*/
/*             {% endif %}*/
/*             {% if attr.label_col is defined %}*/
/*                 {% set childAttr = childAttr|merge({ 'label_col': attr.label_col }) %}*/
/*             {% endif %}*/
/*             {% if attr.simple_col is defined %}*/
/*                 {% set childAttr = childAttr|merge({ 'simple_col': attr.simple_col }) %}*/
/*             {% endif %}*/
/*             {% if attr.style is defined %}*/
/*                 {% set childAttr = childAttr|merge({ 'style': attr.style }) %}*/
/*             {% endif %}*/
/*             {{ form_row(child, childAttr) }}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock form_rows %}*/
/* */
/* {% block widget_attributes %}*/
/*     {% spaceless %}*/
/*         id="{{ id }}" name="{{ full_name }}"{% if read_only %} readonly="readonly"{% endif %}{% if disabled %} disabled="disabled"{% endif %}{% if required %} required="required"{% endif %}{% if max_length %} maxlength="{{ max_length }}"{% endif %}{% if pattern %} pattern="{{ pattern }}"{% endif %}*/
/*         {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}="{{ attrvalue|trans({}, translation_domain) }}" {% elseif attrname in ['input_group'] %}{% else %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock widget_attributes %}*/
/* */
/* {% block widget_container_attributes %}*/
/*     {% spaceless %}*/
/*         {% if attr.style is defined and (attr.style == 'inline' or attr.style == 'horizontal') %}*/
/*             {% set attr = attr|merge({ 'class': ('form-'~attr.style~' '~attr.class|default(''))|trim }) %}*/
/*             {% set attr = attr|merge({ 'style': null }) %}*/
/*         {% endif %}*/
/*         {% if id is not empty %}id="{{ id }}" {% endif %}*/
/*         {% for attrname, attrvalue in attr %}{% if attrvalue is not null and (attrvalue is not iterable) %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock widget_container_attributes %}*/
/* */
/* {% block button_attributes -%}*/
/*         id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif %}*/
/*         {%- for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}*/
/* {% endblock button_attributes %}*/
/* */
