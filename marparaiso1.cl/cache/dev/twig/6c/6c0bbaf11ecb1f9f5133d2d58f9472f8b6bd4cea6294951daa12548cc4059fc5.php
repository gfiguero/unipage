<?php

/* :Admin:icon.html.twig */
class __TwigTemplate_0658b0a167ee9f859a6c29c200a883b9c9ef5174156eb62d9d2b0cfe8b0c3c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'iconos' => array($this, 'block_iconos'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38db70d5bebe610cff3eea25a63fa3de748c1b12954957be8f71f8cac04d7d69 = $this->env->getExtension("native_profiler");
        $__internal_38db70d5bebe610cff3eea25a63fa3de748c1b12954957be8f71f8cac04d7d69->enter($__internal_38db70d5bebe610cff3eea25a63fa3de748c1b12954957be8f71f8cac04d7d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:icon.html.twig"));

        // line 1
        $this->displayBlock('iconos', $context, $blocks);
        
        $__internal_38db70d5bebe610cff3eea25a63fa3de748c1b12954957be8f71f8cac04d7d69->leave($__internal_38db70d5bebe610cff3eea25a63fa3de748c1b12954957be8f71f8cac04d7d69_prof);

    }

    public function block_iconos($context, array $blocks = array())
    {
        $__internal_36f3ffedeba37667453dac4357aa26dc5bbe9b5b3840dacb22ef11c7593e4191 = $this->env->getExtension("native_profiler");
        $__internal_36f3ffedeba37667453dac4357aa26dc5bbe9b5b3840dacb22ef11c7593e4191->enter($__internal_36f3ffedeba37667453dac4357aa26dc5bbe9b5b3840dacb22ef11c7593e4191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 2
        echo "    ";
        if ((is_string($__internal_c160b11f9741b91aa0107eb7a126b03f729339b0365722efa73d668244abae01 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e635c33aefe29806454ab776698fcd7cc46610f0b1110d069a1673655299fd24 = "frontpage") && ('' === $__internal_e635c33aefe29806454ab776698fcd7cc46610f0b1110d069a1673655299fd24 || 0 === strpos($__internal_c160b11f9741b91aa0107eb7a126b03f729339b0365722efa73d668244abae01, $__internal_e635c33aefe29806454ab776698fcd7cc46610f0b1110d069a1673655299fd24)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_5226226553edf9a0132096681b7c32264a13a5cc9fba75d92388bdbb2b3fc41e = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9bf7b6083d2e3d227bbc8f1ab1557a78ad65c28612f0d0a90c5644dcfb5be2ac = "service") && ('' === $__internal_9bf7b6083d2e3d227bbc8f1ab1557a78ad65c28612f0d0a90c5644dcfb5be2ac || 0 === strpos($__internal_5226226553edf9a0132096681b7c32264a13a5cc9fba75d92388bdbb2b3fc41e, $__internal_9bf7b6083d2e3d227bbc8f1ab1557a78ad65c28612f0d0a90c5644dcfb5be2ac)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c4d3ddf6c85918ec4ad3d13dac944aaaebe267ba44fecce1081bc3f6d647e240 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b5634b14edbb8cc0ed49dfab68cc3e5af9fc52e648d89bfbc52e021ce3c66808 = "member") && ('' === $__internal_b5634b14edbb8cc0ed49dfab68cc3e5af9fc52e648d89bfbc52e021ce3c66808 || 0 === strpos($__internal_c4d3ddf6c85918ec4ad3d13dac944aaaebe267ba44fecce1081bc3f6d647e240, $__internal_b5634b14edbb8cc0ed49dfab68cc3e5af9fc52e648d89bfbc52e021ce3c66808)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c15e75d74b5fee66e7fc4af1e5274eed7793d2400621025fa3431b278b31f9d6 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c02a2e962a027dd3e2f7c3eed083040a199405db37c81a41684aa53d85b93b6f = "memberrole") && ('' === $__internal_c02a2e962a027dd3e2f7c3eed083040a199405db37c81a41684aa53d85b93b6f || 0 === strpos($__internal_c15e75d74b5fee66e7fc4af1e5274eed7793d2400621025fa3431b278b31f9d6, $__internal_c02a2e962a027dd3e2f7c3eed083040a199405db37c81a41684aa53d85b93b6f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_d2439dea4dddb854cd4da8c0b5e80211cc2cf0ec5e73e54e1a238a5a349794c8 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7c3c09dc44ef0530be44a701b026fc32e4fe047e0a05a9671eafe8a169625ccc = "notice") && ('' === $__internal_7c3c09dc44ef0530be44a701b026fc32e4fe047e0a05a9671eafe8a169625ccc || 0 === strpos($__internal_d2439dea4dddb854cd4da8c0b5e80211cc2cf0ec5e73e54e1a238a5a349794c8, $__internal_7c3c09dc44ef0530be44a701b026fc32e4fe047e0a05a9671eafe8a169625ccc)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_92edbcea69035ff6d4fedf340c0b019211535dc5f9b88a2c981b7a65db969982 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6b648c0696c0bed97c9e4c6879b520630ca314c5e7e693cb70cf2e86746d9573 = "noticecategory") && ('' === $__internal_6b648c0696c0bed97c9e4c6879b520630ca314c5e7e693cb70cf2e86746d9573 || 0 === strpos($__internal_92edbcea69035ff6d4fedf340c0b019211535dc5f9b88a2c981b7a65db969982, $__internal_6b648c0696c0bed97c9e4c6879b520630ca314c5e7e693cb70cf2e86746d9573)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_f1a87d0de640eee1ac08ab2ae8e4b5feed1e880a2a7d2b89c4aa8ed15a3cec19 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_71ce2015b0d8724cdf32831a5bb5f731e9a0dbb14e4f481a30d5f35dc55cfa86 = "product") && ('' === $__internal_71ce2015b0d8724cdf32831a5bb5f731e9a0dbb14e4f481a30d5f35dc55cfa86 || 0 === strpos($__internal_f1a87d0de640eee1ac08ab2ae8e4b5feed1e880a2a7d2b89c4aa8ed15a3cec19, $__internal_71ce2015b0d8724cdf32831a5bb5f731e9a0dbb14e4f481a30d5f35dc55cfa86)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_acfca35cdab73defe153838da60326f38f19140b8fef09c0d7e59b846ef46de0 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_60a93d88aa30b8f6e64266bdbeda9cecc685d9a2bae1bb6736e19c8b75f311ad = "productcategory") && ('' === $__internal_60a93d88aa30b8f6e64266bdbeda9cecc685d9a2bae1bb6736e19c8b75f311ad || 0 === strpos($__internal_acfca35cdab73defe153838da60326f38f19140b8fef09c0d7e59b846ef46de0, $__internal_60a93d88aa30b8f6e64266bdbeda9cecc685d9a2bae1bb6736e19c8b75f311ad)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c4b345764f2646e9377fb187fd4b4221786a220e36b61a5cd35ad09e96cc77e1 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_7c5ea3f9436ef83cf972712147083a814aea03fb2aafb04b9b4cd01530ea7654 = "user") && ('' === $__internal_7c5ea3f9436ef83cf972712147083a814aea03fb2aafb04b9b4cd01530ea7654 || 0 === strpos($__internal_c4b345764f2646e9377fb187fd4b4221786a220e36b61a5cd35ad09e96cc77e1, $__internal_7c5ea3f9436ef83cf972712147083a814aea03fb2aafb04b9b4cd01530ea7654)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_ae0989f851d218e067cc265a5c743df837310496b388edd7fab188c5b5ec016f = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b32ace04e3e99510a89e09d9a57fa4d4ab95cd92b23e2466e4c0aa2230f7997f = "report") && ('' === $__internal_b32ace04e3e99510a89e09d9a57fa4d4ab95cd92b23e2466e4c0aa2230f7997f || 0 === strpos($__internal_ae0989f851d218e067cc265a5c743df837310496b388edd7fab188c5b5ec016f, $__internal_b32ace04e3e99510a89e09d9a57fa4d4ab95cd92b23e2466e4c0aa2230f7997f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_842c682774cc35d46cfde86e4758248b586eff1581f0d090e6e2212a64a609a6 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_81047c97b5aadfb043af5ed342e6e3e9bd61d980187bd97aa8438fc5b2ee3950 = "history") && ('' === $__internal_81047c97b5aadfb043af5ed342e6e3e9bd61d980187bd97aa8438fc5b2ee3950 || 0 === strpos($__internal_842c682774cc35d46cfde86e4758248b586eff1581f0d090e6e2212a64a609a6, $__internal_81047c97b5aadfb043af5ed342e6e3e9bd61d980187bd97aa8438fc5b2ee3950)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_166a8787e42dc9b97d99ba32c650d6e0936f5fe02c4435fb96bdc4d2a4b88f03 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0968bad9cce6335326f765f045810b172b864ac603a76815595f8350756e96df = "process") && ('' === $__internal_0968bad9cce6335326f765f045810b172b864ac603a76815595f8350756e96df || 0 === strpos($__internal_166a8787e42dc9b97d99ba32c650d6e0936f5fe02c4435fb96bdc4d2a4b88f03, $__internal_0968bad9cce6335326f765f045810b172b864ac603a76815595f8350756e96df)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_055b0089950f3eaa2bfeb30c3d77f545abe725d6ab32d5892b6222fecb2e7b76 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e21e698a01d4daf8759c1dd81a0dcd8fe62e7ba0e364f52c7643bbfa3c64ff98 = "publication") && ('' === $__internal_e21e698a01d4daf8759c1dd81a0dcd8fe62e7ba0e364f52c7643bbfa3c64ff98 || 0 === strpos($__internal_055b0089950f3eaa2bfeb30c3d77f545abe725d6ab32d5892b6222fecb2e7b76, $__internal_e21e698a01d4daf8759c1dd81a0dcd8fe62e7ba0e364f52c7643bbfa3c64ff98)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_15d5648bea307cd7043bfb24351a77db7d20b5beccd35e79186dbd2eed1546e5 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f74f4f9a2829a0fb2daf31fd86df62dafb06d80456768d09f41bd0e57ca079e3 = "dashboard") && ('' === $__internal_f74f4f9a2829a0fb2daf31fd86df62dafb06d80456768d09f41bd0e57ca079e3 || 0 === strpos($__internal_15d5648bea307cd7043bfb24351a77db7d20b5beccd35e79186dbd2eed1546e5, $__internal_f74f4f9a2829a0fb2daf31fd86df62dafb06d80456768d09f41bd0e57ca079e3)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_6e65b1aea725dd0df7a2c2b429deffa4db38936c7e7bb8494e4bc4a31eb2cdff = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d3b6717eaaf4012117784e41fc3f658c0d00d5e8657f4a160c73b0cd27d294bb = "document") && ('' === $__internal_d3b6717eaaf4012117784e41fc3f658c0d00d5e8657f4a160c73b0cd27d294bb || 0 === strpos($__internal_6e65b1aea725dd0df7a2c2b429deffa4db38936c7e7bb8494e4bc4a31eb2cdff, $__internal_d3b6717eaaf4012117784e41fc3f658c0d00d5e8657f4a160c73b0cd27d294bb)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw");
            echo "
    ";
        }
        
        $__internal_36f3ffedeba37667453dac4357aa26dc5bbe9b5b3840dacb22ef11c7593e4191->leave($__internal_36f3ffedeba37667453dac4357aa26dc5bbe9b5b3840dacb22ef11c7593e4191_prof);

    }

    public function getTemplateName()
    {
        return ":Admin:icon.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 16,  101 => 15,  96 => 14,  91 => 13,  86 => 12,  81 => 11,  76 => 10,  71 => 9,  66 => 8,  61 => 7,  56 => 6,  51 => 5,  46 => 4,  41 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block iconos %}*/
/*     {% if app.request.attributes.get( '_route' ) starts with 'frontpage' %}{{ icon('clone fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'service' %}{{ icon('cogs fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'member' %}{{ icon('sitemap fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'memberrole' %}{{ icon('sitemap fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'notice' %}{{ icon('newspaper-o fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'noticecategory' %}{{ icon('newspaper-o fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'product' %}{{ icon('cube fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'productcategory' %}{{ icon('cube fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'user' %}{{ icon('user fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'report' %}{{ icon('flag fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'history' %}{{ icon('book fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'process' %}{{ icon('paper-plane fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'publication' %}{{ icon('bullhorn fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'dashboard' %}{{ icon('dashboard fa-fw') }}*/
/*     {% elseif app.request.attributes.get( '_route' ) starts with 'document' %}{{ icon('check fa-fw') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
