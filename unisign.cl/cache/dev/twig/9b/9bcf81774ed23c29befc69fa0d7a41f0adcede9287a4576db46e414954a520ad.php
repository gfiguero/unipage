<?php

/* :Admin:icon.html.twig */
class __TwigTemplate_c053da7e3a7bd87161052d2765a8bb4a333a9e9b669396701e74ce252460c9ab extends Twig_Template
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
        $__internal_ec83e630b568f9279a82dd871dd94327a73ce1d1dbb4b75d7e4004bb6e6849a0 = $this->env->getExtension("native_profiler");
        $__internal_ec83e630b568f9279a82dd871dd94327a73ce1d1dbb4b75d7e4004bb6e6849a0->enter($__internal_ec83e630b568f9279a82dd871dd94327a73ce1d1dbb4b75d7e4004bb6e6849a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:icon.html.twig"));

        // line 1
        $this->displayBlock('iconos', $context, $blocks);
        
        $__internal_ec83e630b568f9279a82dd871dd94327a73ce1d1dbb4b75d7e4004bb6e6849a0->leave($__internal_ec83e630b568f9279a82dd871dd94327a73ce1d1dbb4b75d7e4004bb6e6849a0_prof);

    }

    public function block_iconos($context, array $blocks = array())
    {
        $__internal_d27ba1d99e81077bc554e18fd1f89a368ad36f9fd892b042598031456ba6af7a = $this->env->getExtension("native_profiler");
        $__internal_d27ba1d99e81077bc554e18fd1f89a368ad36f9fd892b042598031456ba6af7a->enter($__internal_d27ba1d99e81077bc554e18fd1f89a368ad36f9fd892b042598031456ba6af7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 2
        echo "    ";
        if ((is_string($__internal_c0bb4c2995e86b00a9df14246fd6496697f7f076292f3c506c7a127cc394f5cf = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8b500ab5079e46fab08f05d079460b920a8944f540c11221cb3d280b8dded719 = "frontpage") && ('' === $__internal_8b500ab5079e46fab08f05d079460b920a8944f540c11221cb3d280b8dded719 || 0 === strpos($__internal_c0bb4c2995e86b00a9df14246fd6496697f7f076292f3c506c7a127cc394f5cf, $__internal_8b500ab5079e46fab08f05d079460b920a8944f540c11221cb3d280b8dded719)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_8891c90b76ceb96b3e5a817e647d1f29e49340625694541d8cc2b86eac5ea35f = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_90d1863ded31260a59a4b35249ab6336f4dcdc6ccbcaace3a7b4f3594170a540 = "service") && ('' === $__internal_90d1863ded31260a59a4b35249ab6336f4dcdc6ccbcaace3a7b4f3594170a540 || 0 === strpos($__internal_8891c90b76ceb96b3e5a817e647d1f29e49340625694541d8cc2b86eac5ea35f, $__internal_90d1863ded31260a59a4b35249ab6336f4dcdc6ccbcaace3a7b4f3594170a540)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_4718e26f6fe3b8ec263fbee4257ca703faa1b2fa54e0a658689b4e1eca745de2 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d50a70e2f9843517e5956565a094c906ffa2b4ff996cc0feb838b9e252688d1e = "member") && ('' === $__internal_d50a70e2f9843517e5956565a094c906ffa2b4ff996cc0feb838b9e252688d1e || 0 === strpos($__internal_4718e26f6fe3b8ec263fbee4257ca703faa1b2fa54e0a658689b4e1eca745de2, $__internal_d50a70e2f9843517e5956565a094c906ffa2b4ff996cc0feb838b9e252688d1e)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_4a346288bf9bbec0632acb98158104dfcbef743e82f05a7d13869e638292c58a = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_68e60500987105fad825e6ae1945c260efa6a8e144552a75e280918cc7dd0e58 = "memberrole") && ('' === $__internal_68e60500987105fad825e6ae1945c260efa6a8e144552a75e280918cc7dd0e58 || 0 === strpos($__internal_4a346288bf9bbec0632acb98158104dfcbef743e82f05a7d13869e638292c58a, $__internal_68e60500987105fad825e6ae1945c260efa6a8e144552a75e280918cc7dd0e58)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_d3dba6ea6426eb5a12d71075fb1aa6b602c8e77ffc344eedf0fdf8469a39f61b = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5ca4c2800b709633e0376d3b3d1c3348bc9afc3e2902050575618426bb373498 = "notice") && ('' === $__internal_5ca4c2800b709633e0376d3b3d1c3348bc9afc3e2902050575618426bb373498 || 0 === strpos($__internal_d3dba6ea6426eb5a12d71075fb1aa6b602c8e77ffc344eedf0fdf8469a39f61b, $__internal_5ca4c2800b709633e0376d3b3d1c3348bc9afc3e2902050575618426bb373498)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_6273e8d6adde4fffdcd1cfbbf14155d870a3e03cde8cbaa7d24c2c1ad204a9e1 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_80f964684303dc3194e2ca58d200cc6b905831104178428d847407be9d7fe7ef = "noticecategory") && ('' === $__internal_80f964684303dc3194e2ca58d200cc6b905831104178428d847407be9d7fe7ef || 0 === strpos($__internal_6273e8d6adde4fffdcd1cfbbf14155d870a3e03cde8cbaa7d24c2c1ad204a9e1, $__internal_80f964684303dc3194e2ca58d200cc6b905831104178428d847407be9d7fe7ef)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c016db4cddbdacf790de07d8d2388897faf9b2916b5b9d23971f23a5eb05479b = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_90fbefd6009bba24237aea68d88fd10f7953a25c485cf33d65d8db3e35f13c44 = "product") && ('' === $__internal_90fbefd6009bba24237aea68d88fd10f7953a25c485cf33d65d8db3e35f13c44 || 0 === strpos($__internal_c016db4cddbdacf790de07d8d2388897faf9b2916b5b9d23971f23a5eb05479b, $__internal_90fbefd6009bba24237aea68d88fd10f7953a25c485cf33d65d8db3e35f13c44)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_d4ee7e836cbc1fc07ea1642156e21a4b1110792aef20745c560680f860f327aa = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8b8e35f66336884ef1f13e7531f035c920f32c6240ff0db387f20f28470b6607 = "productcategory") && ('' === $__internal_8b8e35f66336884ef1f13e7531f035c920f32c6240ff0db387f20f28470b6607 || 0 === strpos($__internal_d4ee7e836cbc1fc07ea1642156e21a4b1110792aef20745c560680f860f327aa, $__internal_8b8e35f66336884ef1f13e7531f035c920f32c6240ff0db387f20f28470b6607)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c6ee306c77dcc13de99e26f44c142c16398078baaaa3c20b860cbd55d2a1d858 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f42d6a703484c92a64a3b8a7001af334d2316ad9eba3e37198e23a6da22bd33f = "user") && ('' === $__internal_f42d6a703484c92a64a3b8a7001af334d2316ad9eba3e37198e23a6da22bd33f || 0 === strpos($__internal_c6ee306c77dcc13de99e26f44c142c16398078baaaa3c20b860cbd55d2a1d858, $__internal_f42d6a703484c92a64a3b8a7001af334d2316ad9eba3e37198e23a6da22bd33f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_0dcff7b2e8f13dad4a5b631a4aac675e31b752730ec43985eb536d2cc28566ef = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bee5f96be4c29a30ae644a077368055ea81993efcd18b4dc117dced9fa3e2d27 = "report") && ('' === $__internal_bee5f96be4c29a30ae644a077368055ea81993efcd18b4dc117dced9fa3e2d27 || 0 === strpos($__internal_0dcff7b2e8f13dad4a5b631a4aac675e31b752730ec43985eb536d2cc28566ef, $__internal_bee5f96be4c29a30ae644a077368055ea81993efcd18b4dc117dced9fa3e2d27)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_babed86e5b5b81e76596fa2a2bd83406305bf2d7f951367c68eab182049f0393 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_99407aa0a07baaff20489993a2071daf0a4a24ab495b22124edf2262e0578fa1 = "history") && ('' === $__internal_99407aa0a07baaff20489993a2071daf0a4a24ab495b22124edf2262e0578fa1 || 0 === strpos($__internal_babed86e5b5b81e76596fa2a2bd83406305bf2d7f951367c68eab182049f0393, $__internal_99407aa0a07baaff20489993a2071daf0a4a24ab495b22124edf2262e0578fa1)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_9f6975e0291ad04b3db0b0ec0340841612008b356f5cbde3e6e71647ffc6d692 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6af81afc5876580ec5c8e7e494f18520ef2d5a72d075b1275a115e74eaea4faf = "process") && ('' === $__internal_6af81afc5876580ec5c8e7e494f18520ef2d5a72d075b1275a115e74eaea4faf || 0 === strpos($__internal_9f6975e0291ad04b3db0b0ec0340841612008b356f5cbde3e6e71647ffc6d692, $__internal_6af81afc5876580ec5c8e7e494f18520ef2d5a72d075b1275a115e74eaea4faf)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_50ffe2d1a02492903c8ffbfaf77635419dbd1663594626ad2c1db25dd111e132 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fb3e0986fdc5d538dd3da8df8c4779996fb6921b84ceb131f34aec06dcc01a8e = "publication") && ('' === $__internal_fb3e0986fdc5d538dd3da8df8c4779996fb6921b84ceb131f34aec06dcc01a8e || 0 === strpos($__internal_50ffe2d1a02492903c8ffbfaf77635419dbd1663594626ad2c1db25dd111e132, $__internal_fb3e0986fdc5d538dd3da8df8c4779996fb6921b84ceb131f34aec06dcc01a8e)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_eaed8e977e8c2d68294cc8b30942059eb0a283194671d403bfcd6aea8d76abce = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_69da3aafdf272b2e12d3e5e63775fe90937b49037b847f930c8522546fe35349 = "dashboard") && ('' === $__internal_69da3aafdf272b2e12d3e5e63775fe90937b49037b847f930c8522546fe35349 || 0 === strpos($__internal_eaed8e977e8c2d68294cc8b30942059eb0a283194671d403bfcd6aea8d76abce, $__internal_69da3aafdf272b2e12d3e5e63775fe90937b49037b847f930c8522546fe35349)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_859068aba9763c1058e611a9a8e0253d425abb3e5691322c5ccd5b70de469b19 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_8c25c92277569be5445398eb8203d77b305528f202e4c3d2aac4fe071139b04f = "document") && ('' === $__internal_8c25c92277569be5445398eb8203d77b305528f202e4c3d2aac4fe071139b04f || 0 === strpos($__internal_859068aba9763c1058e611a9a8e0253d425abb3e5691322c5ccd5b70de469b19, $__internal_8c25c92277569be5445398eb8203d77b305528f202e4c3d2aac4fe071139b04f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw");
            echo "
    ";
        }
        
        $__internal_d27ba1d99e81077bc554e18fd1f89a368ad36f9fd892b042598031456ba6af7a->leave($__internal_d27ba1d99e81077bc554e18fd1f89a368ad36f9fd892b042598031456ba6af7a_prof);

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
