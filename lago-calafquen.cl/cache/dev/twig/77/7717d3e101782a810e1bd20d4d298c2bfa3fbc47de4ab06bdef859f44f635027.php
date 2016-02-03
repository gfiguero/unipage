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
        $__internal_60bd9b03df9cafd9f9f514521fdba11b89bb413933cdd79c174af55f26bd47e7 = $this->env->getExtension("native_profiler");
        $__internal_60bd9b03df9cafd9f9f514521fdba11b89bb413933cdd79c174af55f26bd47e7->enter($__internal_60bd9b03df9cafd9f9f514521fdba11b89bb413933cdd79c174af55f26bd47e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin:icon.html.twig"));

        // line 1
        $this->displayBlock('iconos', $context, $blocks);
        
        $__internal_60bd9b03df9cafd9f9f514521fdba11b89bb413933cdd79c174af55f26bd47e7->leave($__internal_60bd9b03df9cafd9f9f514521fdba11b89bb413933cdd79c174af55f26bd47e7_prof);

    }

    public function block_iconos($context, array $blocks = array())
    {
        $__internal_cf3dfed19d3a110001d0d0899e182f39774fa466de00e73f690fe80827e0905f = $this->env->getExtension("native_profiler");
        $__internal_cf3dfed19d3a110001d0d0899e182f39774fa466de00e73f690fe80827e0905f->enter($__internal_cf3dfed19d3a110001d0d0899e182f39774fa466de00e73f690fe80827e0905f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "iconos"));

        // line 2
        echo "    ";
        if ((is_string($__internal_f0689b0748e4f4ebf9ad94add442ea67b3dd23d5c214fa0277a2a3e16a90324e = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a804321a19b187adb71aa71e318a0cefcd005947ed3cf6dd1342c5f3d781c929 = "frontpage") && ('' === $__internal_a804321a19b187adb71aa71e318a0cefcd005947ed3cf6dd1342c5f3d781c929 || 0 === strpos($__internal_f0689b0748e4f4ebf9ad94add442ea67b3dd23d5c214fa0277a2a3e16a90324e, $__internal_a804321a19b187adb71aa71e318a0cefcd005947ed3cf6dd1342c5f3d781c929)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("clone fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_99e2968fa173c2244dbdfc5ded5e23b7057ae72ac6d240679e483ba1ab26c2e5 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bf877e105c44844b17a66e2dd475015a9adfbd2e4ae722c2e355cd4dadd33b02 = "service") && ('' === $__internal_bf877e105c44844b17a66e2dd475015a9adfbd2e4ae722c2e355cd4dadd33b02 || 0 === strpos($__internal_99e2968fa173c2244dbdfc5ded5e23b7057ae72ac6d240679e483ba1ab26c2e5, $__internal_bf877e105c44844b17a66e2dd475015a9adfbd2e4ae722c2e355cd4dadd33b02)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cogs fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_df0a503b10ca9bd7b381e2ff7ce9cd831351e87aab118e81dd2d447fa69bd417 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_27f5a1db22a8450703570963b37d4674235b1079a4845f6a88ee9d2fc5abfd1c = "member") && ('' === $__internal_27f5a1db22a8450703570963b37d4674235b1079a4845f6a88ee9d2fc5abfd1c || 0 === strpos($__internal_df0a503b10ca9bd7b381e2ff7ce9cd831351e87aab118e81dd2d447fa69bd417, $__internal_27f5a1db22a8450703570963b37d4674235b1079a4845f6a88ee9d2fc5abfd1c)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_416ed73e3f7fa39a9b46d887225bc297fcbce3893ae6d0648d566dec528c4e0b = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e6c12031aa6d7ffda718cb4ae21ebca89cbda9ad82b934e652783ac472595f68 = "memberrole") && ('' === $__internal_e6c12031aa6d7ffda718cb4ae21ebca89cbda9ad82b934e652783ac472595f68 || 0 === strpos($__internal_416ed73e3f7fa39a9b46d887225bc297fcbce3893ae6d0648d566dec528c4e0b, $__internal_e6c12031aa6d7ffda718cb4ae21ebca89cbda9ad82b934e652783ac472595f68)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("sitemap fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_1bbf9e87b62e9c30b87d0e5f94e61af26981fe59bcabc476a906e1633d5e5226 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_eb409833a513ff6965855ac70a7d0151b383d60644a049183170230ff0508d33 = "notice") && ('' === $__internal_eb409833a513ff6965855ac70a7d0151b383d60644a049183170230ff0508d33 || 0 === strpos($__internal_1bbf9e87b62e9c30b87d0e5f94e61af26981fe59bcabc476a906e1633d5e5226, $__internal_eb409833a513ff6965855ac70a7d0151b383d60644a049183170230ff0508d33)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_9d49c0b9780ea042ca4393b4210d39e4433c7a91e724c0990708ab0d1a91820d = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c669011fda292cdb25afa75d04c38d22104d9f85a5c0380dea8b80793276238a = "noticecategory") && ('' === $__internal_c669011fda292cdb25afa75d04c38d22104d9f85a5c0380dea8b80793276238a || 0 === strpos($__internal_9d49c0b9780ea042ca4393b4210d39e4433c7a91e724c0990708ab0d1a91820d, $__internal_c669011fda292cdb25afa75d04c38d22104d9f85a5c0380dea8b80793276238a)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("newspaper-o fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_0a9454328abcfaf4f4cd1c60408ccc69becd0a3cd7e4a950adb9b2ae90faa7dc = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_cca4f1bc9493962c7fbcdd0b887ee53c4798b6b4cc3b2a5b6d572246f82d9305 = "product") && ('' === $__internal_cca4f1bc9493962c7fbcdd0b887ee53c4798b6b4cc3b2a5b6d572246f82d9305 || 0 === strpos($__internal_0a9454328abcfaf4f4cd1c60408ccc69becd0a3cd7e4a950adb9b2ae90faa7dc, $__internal_cca4f1bc9493962c7fbcdd0b887ee53c4798b6b4cc3b2a5b6d572246f82d9305)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_d9634d7c84be2b8dbe93f8a26a681467c554b44344c067afc56e42cde688832f = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_e31e974af68216a8ca2cd42c3361f4a2da8ddffda3fa32d200f8303fa11e05ea = "productcategory") && ('' === $__internal_e31e974af68216a8ca2cd42c3361f4a2da8ddffda3fa32d200f8303fa11e05ea || 0 === strpos($__internal_d9634d7c84be2b8dbe93f8a26a681467c554b44344c067afc56e42cde688832f, $__internal_e31e974af68216a8ca2cd42c3361f4a2da8ddffda3fa32d200f8303fa11e05ea)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("cube fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_ee02a79c68688b507ccd91637a5dbbcb91197fba3bcd6fabd03110ef7068035b = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fdfc1e4fd2c65f6f664f9052bf59314e52fe4c0a16b132784f3f2c3909cb7590 = "user") && ('' === $__internal_fdfc1e4fd2c65f6f664f9052bf59314e52fe4c0a16b132784f3f2c3909cb7590 || 0 === strpos($__internal_ee02a79c68688b507ccd91637a5dbbcb91197fba3bcd6fabd03110ef7068035b, $__internal_fdfc1e4fd2c65f6f664f9052bf59314e52fe4c0a16b132784f3f2c3909cb7590)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("user fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_879b6fa5cbd9e2174848291c9a3b575a5e105fd2c85ea41e0c88aad2dcf5111f = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 11
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a1d465cb80b0dafa5d8edadb2107f6106e678c13dc02dfc5f24bc13da78ca6d6 = "report") && ('' === $__internal_a1d465cb80b0dafa5d8edadb2107f6106e678c13dc02dfc5f24bc13da78ca6d6 || 0 === strpos($__internal_879b6fa5cbd9e2174848291c9a3b575a5e105fd2c85ea41e0c88aad2dcf5111f, $__internal_a1d465cb80b0dafa5d8edadb2107f6106e678c13dc02dfc5f24bc13da78ca6d6)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("flag fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_bc7a9332504d1f98eda49037315512f100b7c839d14d998a032b563cb514ffc6 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4f91115d1a99bf8a9a4e274cbb6781d0070f1db3d6aa6037596b6fe86eba0a6c = "history") && ('' === $__internal_4f91115d1a99bf8a9a4e274cbb6781d0070f1db3d6aa6037596b6fe86eba0a6c || 0 === strpos($__internal_bc7a9332504d1f98eda49037315512f100b7c839d14d998a032b563cb514ffc6, $__internal_4f91115d1a99bf8a9a4e274cbb6781d0070f1db3d6aa6037596b6fe86eba0a6c)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("book fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_f3d4b626d76a98dcd26c1e4e11951c768eae9c06bf6f863a4ef0478f89eb2a5c = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_26f071668987a89619c0cc3e6b3f35a3c107e79a9bc851e257e870de0c1f4bbf = "process") && ('' === $__internal_26f071668987a89619c0cc3e6b3f35a3c107e79a9bc851e257e870de0c1f4bbf || 0 === strpos($__internal_f3d4b626d76a98dcd26c1e4e11951c768eae9c06bf6f863a4ef0478f89eb2a5c, $__internal_26f071668987a89619c0cc3e6b3f35a3c107e79a9bc851e257e870de0c1f4bbf)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("paper-plane fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_6c3ba3d0166cd508e1ce28234da2dc91fb16fec6f6433af75cb6ae114c832aee = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 14
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_978034b011c5e4c95a01e806c5fbb135c36247519e88e9e66b6e562688f2375e = "publication") && ('' === $__internal_978034b011c5e4c95a01e806c5fbb135c36247519e88e9e66b6e562688f2375e || 0 === strpos($__internal_6c3ba3d0166cd508e1ce28234da2dc91fb16fec6f6433af75cb6ae114c832aee, $__internal_978034b011c5e4c95a01e806c5fbb135c36247519e88e9e66b6e562688f2375e)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("bullhorn fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_45ceaf732f0bd9d7d4e487af72aa68ce1d264aefacb04ef7583d3d1acf30d789 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_fb5f03aa6dc89c5ed741f09fa373c2f099ed10bedc6ed91b7759121bf5e0cb24 = "dashboard") && ('' === $__internal_fb5f03aa6dc89c5ed741f09fa373c2f099ed10bedc6ed91b7759121bf5e0cb24 || 0 === strpos($__internal_45ceaf732f0bd9d7d4e487af72aa68ce1d264aefacb04ef7583d3d1acf30d789, $__internal_fb5f03aa6dc89c5ed741f09fa373c2f099ed10bedc6ed91b7759121bf5e0cb24)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("dashboard fa-fw");
            echo "
    ";
        } elseif ((is_string($__internal_f15b178e895f07bcbd04f2329475c380db708efef06c356c75b61fb76c8395f7 = $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_293d04879da27c00a6d1d8440460de3883bb1cb0a43becb8095e90a18de4d41e = "document") && ('' === $__internal_293d04879da27c00a6d1d8440460de3883bb1cb0a43becb8095e90a18de4d41e || 0 === strpos($__internal_f15b178e895f07bcbd04f2329475c380db708efef06c356c75b61fb76c8395f7, $__internal_293d04879da27c00a6d1d8440460de3883bb1cb0a43becb8095e90a18de4d41e)))) {
            echo $this->env->getExtension('braincrafted_bootstrap_icon')->iconFunction("check fa-fw");
            echo "
    ";
        }
        
        $__internal_cf3dfed19d3a110001d0d0899e182f39774fa466de00e73f690fe80827e0905f->leave($__internal_cf3dfed19d3a110001d0d0899e182f39774fa466de00e73f690fe80827e0905f_prof);

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
