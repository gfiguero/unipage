<?php

/* :Admin:icon.html.twig */
class __TwigTemplate_e32b4623a6f9dfdc6706986124d01179bd8fa6363340bcd0f560e509dc8808fc extends Twig_Template
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
        $__internal_52e6e3afefe2b0ff48858431b3402a27a9112eaa5bc6c232c72c52ed46aa2a63 = $this->env->getExtension("native_profiler");
        $__internal_52e6e3afefe2b0ff48858431b3402a27a9112eaa5bc6c232c72c52ed46aa2a63->enter($__internal_52e6e3afefe2b0ff48858431b3402a27a9112eaa5bc6c232c72c52ed46aa2a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:icon.html.twig"));

        // line 1
        $this->displayBlock('iconos', $context, $blocks);
        
        $__internal_52e6e3afefe2b0ff48858431b3402a27a9112eaa5bc6c232c72c52ed46aa2a63->leave($__internal_52e6e3afefe2b0ff48858431b3402a27a9112eaa5bc6c232c72c52ed46aa2a63_prof);

    }

    public function block_iconos($context, array $blocks = array())
    {
        $__internal_592ab1422072dad1c130398c1afd4acbea1c92b3498c8c54202a58eb364b5a3d = $this->env->getExtension("native_profiler");
        $__internal_592ab1422072dad1c130398c1afd4acbea1c92b3498c8c54202a58eb364b5a3d->enter($__internal_592ab1422072dad1c130398c1afd4acbea1c92b3498c8c54202a58eb364b5a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 2
        echo "    ";
        if ((is_string($__internal_9e8e956464d622c853d38471144542479786ddfae889aac55543171f16a41879 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eea1adb2c434e35c627a763ff4e4a3ccc978e976506e7f698f1a7df082e48981 = "frontpage") && ('' === $__internal_eea1adb2c434e35c627a763ff4e4a3ccc978e976506e7f698f1a7df082e48981 || 0 === strpos($__internal_9e8e956464d622c853d38471144542479786ddfae889aac55543171f16a41879, $__internal_eea1adb2c434e35c627a763ff4e4a3ccc978e976506e7f698f1a7df082e48981)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_3644f522c1703d4152bcb382b76cc48cc02af18acc18f9f7860890681532f215 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_9d81934784043e753226cc811ef1f9bf332a5f651f83d2c2d5d6f9b54943a689 = "service") && ('' === $__internal_9d81934784043e753226cc811ef1f9bf332a5f651f83d2c2d5d6f9b54943a689 || 0 === strpos($__internal_3644f522c1703d4152bcb382b76cc48cc02af18acc18f9f7860890681532f215, $__internal_9d81934784043e753226cc811ef1f9bf332a5f651f83d2c2d5d6f9b54943a689)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_0eccad11c2bbfbd6c79bf521569a2de7588ea84b7ee373780012fa121ff788a2 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f20d78db1ae3db9cd2e231c512b3426528f505e76375c9e33f23615e87aaa2b3 = "member") && ('' === $__internal_f20d78db1ae3db9cd2e231c512b3426528f505e76375c9e33f23615e87aaa2b3 || 0 === strpos($__internal_0eccad11c2bbfbd6c79bf521569a2de7588ea84b7ee373780012fa121ff788a2, $__internal_f20d78db1ae3db9cd2e231c512b3426528f505e76375c9e33f23615e87aaa2b3)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_1b1a0fe99c496fec558ca3af4edd8d641f6d8e67fc37845a0d2e537187c18c06 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c20fcd8f431162394646dc32990c543a687da2b5313e1eab624997931cdec0fd = "memberrole") && ('' === $__internal_c20fcd8f431162394646dc32990c543a687da2b5313e1eab624997931cdec0fd || 0 === strpos($__internal_1b1a0fe99c496fec558ca3af4edd8d641f6d8e67fc37845a0d2e537187c18c06, $__internal_c20fcd8f431162394646dc32990c543a687da2b5313e1eab624997931cdec0fd)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_3bf73eb8fb42f7026b3ea2f72cb5b8fe44d9abbcf1d7dc901b13e61bc5ec8f10 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_74f15a6f271724397876aef43a61529d2add921e8a4415e42b3d22f106928344 = "notice") && ('' === $__internal_74f15a6f271724397876aef43a61529d2add921e8a4415e42b3d22f106928344 || 0 === strpos($__internal_3bf73eb8fb42f7026b3ea2f72cb5b8fe44d9abbcf1d7dc901b13e61bc5ec8f10, $__internal_74f15a6f271724397876aef43a61529d2add921e8a4415e42b3d22f106928344)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_174ee8b9a89c386338fd5a61068672967fdcb2d336f030e3eedae8914afd8322 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6605d05818a231df9e6fd93d9ecb9c0a8620dad134200d00e4a3716626348693 = "noticecategory") && ('' === $__internal_6605d05818a231df9e6fd93d9ecb9c0a8620dad134200d00e4a3716626348693 || 0 === strpos($__internal_174ee8b9a89c386338fd5a61068672967fdcb2d336f030e3eedae8914afd8322, $__internal_6605d05818a231df9e6fd93d9ecb9c0a8620dad134200d00e4a3716626348693)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_75352f1a99f9cb00892faf9ff005f0c886283822427a5db0ac0bde5508610083 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3fb931580045e021fdffa449ac24225f98dd36a61217b18eb9f51abd8a230953 = "product") && ('' === $__internal_3fb931580045e021fdffa449ac24225f98dd36a61217b18eb9f51abd8a230953 || 0 === strpos($__internal_75352f1a99f9cb00892faf9ff005f0c886283822427a5db0ac0bde5508610083, $__internal_3fb931580045e021fdffa449ac24225f98dd36a61217b18eb9f51abd8a230953)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_fc416d544f0acacb4f5032fb1569f69205fa911c3b48eedfc72702ccb20dcab3 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0228df5c4a8012e6a606e0f39ca74dfe472a7844ada1abd7a62042e3bec07610 = "productcategory") && ('' === $__internal_0228df5c4a8012e6a606e0f39ca74dfe472a7844ada1abd7a62042e3bec07610 || 0 === strpos($__internal_fc416d544f0acacb4f5032fb1569f69205fa911c3b48eedfc72702ccb20dcab3, $__internal_0228df5c4a8012e6a606e0f39ca74dfe472a7844ada1abd7a62042e3bec07610)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_866f28de53f8066262026c1eaf32e28f83c67b18a72213f015d32dafc706b0c8 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_370ea95218c4989a2c55c0aa723b7d2de28f0970e64aaf96e764b89b867e7c91 = "user") && ('' === $__internal_370ea95218c4989a2c55c0aa723b7d2de28f0970e64aaf96e764b89b867e7c91 || 0 === strpos($__internal_866f28de53f8066262026c1eaf32e28f83c67b18a72213f015d32dafc706b0c8, $__internal_370ea95218c4989a2c55c0aa723b7d2de28f0970e64aaf96e764b89b867e7c91)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_331b84619389b816e79c78e62cce10d139db4eef622bd473eeba5f36aa46a046 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_0d4444775dac3448dfe9fced0a5668fd35588ba0a64c129fad8f5aad50ff803f = "report") && ('' === $__internal_0d4444775dac3448dfe9fced0a5668fd35588ba0a64c129fad8f5aad50ff803f || 0 === strpos($__internal_331b84619389b816e79c78e62cce10d139db4eef622bd473eeba5f36aa46a046, $__internal_0d4444775dac3448dfe9fced0a5668fd35588ba0a64c129fad8f5aad50ff803f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_7814d56f665f06ff7cd390baf955b7d01bd2d319a9dcc1f5436ebc36a18d05a2 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_703b7e20ecc6eea38251fd3e378f15127abfd0ec87d5efb0a028e7d86777c1b0 = "history") && ('' === $__internal_703b7e20ecc6eea38251fd3e378f15127abfd0ec87d5efb0a028e7d86777c1b0 || 0 === strpos($__internal_7814d56f665f06ff7cd390baf955b7d01bd2d319a9dcc1f5436ebc36a18d05a2, $__internal_703b7e20ecc6eea38251fd3e378f15127abfd0ec87d5efb0a028e7d86777c1b0)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_eaf4eeedc714b363c618cb187d8d1a0dc3325484809066508dbfb000b3daefaa = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_ddaaa661be72be95e5ef4d8f971d6d6c6b2217646c88260a7291a15a1c92ebff = "process") && ('' === $__internal_ddaaa661be72be95e5ef4d8f971d6d6c6b2217646c88260a7291a15a1c92ebff || 0 === strpos($__internal_eaf4eeedc714b363c618cb187d8d1a0dc3325484809066508dbfb000b3daefaa, $__internal_ddaaa661be72be95e5ef4d8f971d6d6c6b2217646c88260a7291a15a1c92ebff)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_e3fc6d206cd54aa8f7134a6d0273dadaa6f14b290eb20f6ae5d6b702cf2facc4 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fea39a1d914f217566b0e97cc6ce2334291f7b7eeae444ac2439a2684b9fbecc = "publication") && ('' === $__internal_fea39a1d914f217566b0e97cc6ce2334291f7b7eeae444ac2439a2684b9fbecc || 0 === strpos($__internal_e3fc6d206cd54aa8f7134a6d0273dadaa6f14b290eb20f6ae5d6b702cf2facc4, $__internal_fea39a1d914f217566b0e97cc6ce2334291f7b7eeae444ac2439a2684b9fbecc)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_937732e69b79cdda644035fc2ce704113c145f902ac6262b3fd08c88841e1166 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5b0c900fe067f08b025cdaae48daa09c8435c37867e7d8661754c463789fabba = "dashboard") && ('' === $__internal_5b0c900fe067f08b025cdaae48daa09c8435c37867e7d8661754c463789fabba || 0 === strpos($__internal_937732e69b79cdda644035fc2ce704113c145f902ac6262b3fd08c88841e1166, $__internal_5b0c900fe067f08b025cdaae48daa09c8435c37867e7d8661754c463789fabba)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_3485b1b783675d133f557076b055f64e88f1470b00c2e233bc97646c546f53ef = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_3df74595e986ba5cd90daf9009cd4445056485155c91b67b38a40495c838e5e0 = "document") && ('' === $__internal_3df74595e986ba5cd90daf9009cd4445056485155c91b67b38a40495c838e5e0 || 0 === strpos($__internal_3485b1b783675d133f557076b055f64e88f1470b00c2e233bc97646c546f53ef, $__internal_3df74595e986ba5cd90daf9009cd4445056485155c91b67b38a40495c838e5e0)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw");
            echo "
    ";
        }
        
        $__internal_592ab1422072dad1c130398c1afd4acbea1c92b3498c8c54202a58eb364b5a3d->leave($__internal_592ab1422072dad1c130398c1afd4acbea1c92b3498c8c54202a58eb364b5a3d_prof);

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
