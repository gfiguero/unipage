<?php

/* :Admin:icon.html.twig */
class __TwigTemplate_18a3dc2372f5887aeb8d35032c4c4bddd89f1ede3cd2eb601905fee292749880 extends Twig_Template
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
        $__internal_6e114efbdd4d54546eee22808231f4eb4e197613715476196c2ecb5eea2f1824 = $this->env->getExtension("native_profiler");
        $__internal_6e114efbdd4d54546eee22808231f4eb4e197613715476196c2ecb5eea2f1824->enter($__internal_6e114efbdd4d54546eee22808231f4eb4e197613715476196c2ecb5eea2f1824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:icon.html.twig"));

        // line 1
        $this->displayBlock('iconos', $context, $blocks);
        
        $__internal_6e114efbdd4d54546eee22808231f4eb4e197613715476196c2ecb5eea2f1824->leave($__internal_6e114efbdd4d54546eee22808231f4eb4e197613715476196c2ecb5eea2f1824_prof);

    }

    public function block_iconos($context, array $blocks = array())
    {
        $__internal_3c70384b60487b38edcb8a647ecaa3c3f4aaf2225b657e0cb5678700ae4453a7 = $this->env->getExtension("native_profiler");
        $__internal_3c70384b60487b38edcb8a647ecaa3c3f4aaf2225b657e0cb5678700ae4453a7->enter($__internal_3c70384b60487b38edcb8a647ecaa3c3f4aaf2225b657e0cb5678700ae4453a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 2
        echo "    ";
        if ((is_string($__internal_0f962308e9348db245ea6dec77fcca4e13e2960f6d6a672195df75d579646d7a = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bb8b1b3e5d8614df5146155b654bb4c4f5f619dabca38c0c2dee19307b810906 = "frontpage") && ('' === $__internal_bb8b1b3e5d8614df5146155b654bb4c4f5f619dabca38c0c2dee19307b810906 || 0 === strpos($__internal_0f962308e9348db245ea6dec77fcca4e13e2960f6d6a672195df75d579646d7a, $__internal_bb8b1b3e5d8614df5146155b654bb4c4f5f619dabca38c0c2dee19307b810906)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_7257192d2a9469ddf6fd4c4148a663179fd4142ea1e4fc702f2f196b7b9d0d69 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e48f3eb52e7c0273d6831d45ebbd26b1c72fa71b6b18eb8a1924026c6c9e0248 = "service") && ('' === $__internal_e48f3eb52e7c0273d6831d45ebbd26b1c72fa71b6b18eb8a1924026c6c9e0248 || 0 === strpos($__internal_7257192d2a9469ddf6fd4c4148a663179fd4142ea1e4fc702f2f196b7b9d0d69, $__internal_e48f3eb52e7c0273d6831d45ebbd26b1c72fa71b6b18eb8a1924026c6c9e0248)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c19bcd37ee7701c8361e4197a6fbfd96c224359834e4d335b826d7c7a08db3ed = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1264f360242398af0efc1ca6f055a35ff6650b7e59a8d9c1e4d1c34bf7bfdd9c = "member") && ('' === $__internal_1264f360242398af0efc1ca6f055a35ff6650b7e59a8d9c1e4d1c34bf7bfdd9c || 0 === strpos($__internal_c19bcd37ee7701c8361e4197a6fbfd96c224359834e4d335b826d7c7a08db3ed, $__internal_1264f360242398af0efc1ca6f055a35ff6650b7e59a8d9c1e4d1c34bf7bfdd9c)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_1c0f1041a8dada57251ffebe5f22b21b316605d5fa3c285c73d859e7f2ceb9bb = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_35e0210f8218758eb8d276f6e34a4f2298e85ad7b264b5ff999c928e6bf78646 = "memberrole") && ('' === $__internal_35e0210f8218758eb8d276f6e34a4f2298e85ad7b264b5ff999c928e6bf78646 || 0 === strpos($__internal_1c0f1041a8dada57251ffebe5f22b21b316605d5fa3c285c73d859e7f2ceb9bb, $__internal_35e0210f8218758eb8d276f6e34a4f2298e85ad7b264b5ff999c928e6bf78646)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c747650f8eb8b23133cf85905a1adebed06807a6323f6fb6a957e25afde36ae2 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4d1394403e07c789636bb6ca84d71aa2f9cffe30dcdb537a288829a254bf3a02 = "notice") && ('' === $__internal_4d1394403e07c789636bb6ca84d71aa2f9cffe30dcdb537a288829a254bf3a02 || 0 === strpos($__internal_c747650f8eb8b23133cf85905a1adebed06807a6323f6fb6a957e25afde36ae2, $__internal_4d1394403e07c789636bb6ca84d71aa2f9cffe30dcdb537a288829a254bf3a02)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_5772a6db39b893968ba75dc6a8abb6160e9b36ac7a9043314bed35978bd4d95c = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a36c3c3cb617825cfb944b9be1af8eff2d3ff852dd1d537d051d7def6749ee73 = "noticecategory") && ('' === $__internal_a36c3c3cb617825cfb944b9be1af8eff2d3ff852dd1d537d051d7def6749ee73 || 0 === strpos($__internal_5772a6db39b893968ba75dc6a8abb6160e9b36ac7a9043314bed35978bd4d95c, $__internal_a36c3c3cb617825cfb944b9be1af8eff2d3ff852dd1d537d051d7def6749ee73)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_152364de13028ecb90dbdd80d95c58aa9303fd771382de124754da4737eebf63 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e0955036c5b1e3d893e2f4dd29bf034d99b8d2ea8e90f984dc8e58fda16df256 = "product") && ('' === $__internal_e0955036c5b1e3d893e2f4dd29bf034d99b8d2ea8e90f984dc8e58fda16df256 || 0 === strpos($__internal_152364de13028ecb90dbdd80d95c58aa9303fd771382de124754da4737eebf63, $__internal_e0955036c5b1e3d893e2f4dd29bf034d99b8d2ea8e90f984dc8e58fda16df256)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_cf90b5ad2759ae59ddfdd5d74bb58acc226f2ed950ca4483e3c2a0f0fe270320 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c87ae9fcfe103440a8f83fb4e678b5a522d11d6e2526acafb7962c0e350af6ec = "productcategory") && ('' === $__internal_c87ae9fcfe103440a8f83fb4e678b5a522d11d6e2526acafb7962c0e350af6ec || 0 === strpos($__internal_cf90b5ad2759ae59ddfdd5d74bb58acc226f2ed950ca4483e3c2a0f0fe270320, $__internal_c87ae9fcfe103440a8f83fb4e678b5a522d11d6e2526acafb7962c0e350af6ec)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_aa3ce03fa11d82faacda19a5ff59d080da4e85f3e24b3b697923a1fe52cfe3db = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_1fd20c82bb3c553f97faa2ba46b5737dcdbc3955d7a6ffdd95879b0c3c7a934f = "user") && ('' === $__internal_1fd20c82bb3c553f97faa2ba46b5737dcdbc3955d7a6ffdd95879b0c3c7a934f || 0 === strpos($__internal_aa3ce03fa11d82faacda19a5ff59d080da4e85f3e24b3b697923a1fe52cfe3db, $__internal_1fd20c82bb3c553f97faa2ba46b5737dcdbc3955d7a6ffdd95879b0c3c7a934f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_3b19cf5a6c1ea60ac92499cdf13a1120ce7dfec9816a946ca0b449cc903680de = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_5f2c08907e339545c5d29393b8e6551e4b51eb2e53cd08a06fd08438b9fa854c = "report") && ('' === $__internal_5f2c08907e339545c5d29393b8e6551e4b51eb2e53cd08a06fd08438b9fa854c || 0 === strpos($__internal_3b19cf5a6c1ea60ac92499cdf13a1120ce7dfec9816a946ca0b449cc903680de, $__internal_5f2c08907e339545c5d29393b8e6551e4b51eb2e53cd08a06fd08438b9fa854c)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_c9d0753eeeed97f228c44c3fb46f914c3b185d14d37a8c3a200183a780e26522 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_b8490c78f15250b08b09849dcce6388493ea2ef6a400e85d0c9b5f67e71b093f = "history") && ('' === $__internal_b8490c78f15250b08b09849dcce6388493ea2ef6a400e85d0c9b5f67e71b093f || 0 === strpos($__internal_c9d0753eeeed97f228c44c3fb46f914c3b185d14d37a8c3a200183a780e26522, $__internal_b8490c78f15250b08b09849dcce6388493ea2ef6a400e85d0c9b5f67e71b093f)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_a1638aa48cf1b5ef6f2bd48ef502b71940dbf059590b2d4d40f241eb6bcd0f5d = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d47ce5a7a34d8210051829cc609ceeeeb2ab316eb8f0e7ad668bde60482afc73 = "process") && ('' === $__internal_d47ce5a7a34d8210051829cc609ceeeeb2ab316eb8f0e7ad668bde60482afc73 || 0 === strpos($__internal_a1638aa48cf1b5ef6f2bd48ef502b71940dbf059590b2d4d40f241eb6bcd0f5d, $__internal_d47ce5a7a34d8210051829cc609ceeeeb2ab316eb8f0e7ad668bde60482afc73)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_5cefc47ccf7fac180a6467b1f7eff1c393afff3db51a903f0891a6f47278b288 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_6308057838b755594a70fff65aa420451246185443a6ae0b797cd88cadc3eaa5 = "publication") && ('' === $__internal_6308057838b755594a70fff65aa420451246185443a6ae0b797cd88cadc3eaa5 || 0 === strpos($__internal_5cefc47ccf7fac180a6467b1f7eff1c393afff3db51a903f0891a6f47278b288, $__internal_6308057838b755594a70fff65aa420451246185443a6ae0b797cd88cadc3eaa5)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_242e481cdec92b0300da212fa0602dad0dac560c15cc8ccac314d701cf71a53f = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_42c4ceded5e9aea6b8a955fcb5fa52fe53b42393458472cc3275bdb7c9b58380 = "dashboard") && ('' === $__internal_42c4ceded5e9aea6b8a955fcb5fa52fe53b42393458472cc3275bdb7c9b58380 || 0 === strpos($__internal_242e481cdec92b0300da212fa0602dad0dac560c15cc8ccac314d701cf71a53f, $__internal_42c4ceded5e9aea6b8a955fcb5fa52fe53b42393458472cc3275bdb7c9b58380)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_232e1c4316069dca201e22089c98907e2ef77a98bf9bf9fd1ed9ca07839b6dda = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_18a1929949c92b08455bd09ccbd3bead3f084e7b636ff717bc7a20c0c83cb66b = "document") && ('' === $__internal_18a1929949c92b08455bd09ccbd3bead3f084e7b636ff717bc7a20c0c83cb66b || 0 === strpos($__internal_232e1c4316069dca201e22089c98907e2ef77a98bf9bf9fd1ed9ca07839b6dda, $__internal_18a1929949c92b08455bd09ccbd3bead3f084e7b636ff717bc7a20c0c83cb66b)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw");
            echo "
    ";
        }
        
        $__internal_3c70384b60487b38edcb8a647ecaa3c3f4aaf2225b657e0cb5678700ae4453a7->leave($__internal_3c70384b60487b38edcb8a647ecaa3c3f4aaf2225b657e0cb5678700ae4453a7_prof);

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
