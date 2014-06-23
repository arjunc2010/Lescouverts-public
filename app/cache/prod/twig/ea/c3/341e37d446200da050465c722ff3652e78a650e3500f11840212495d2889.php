<?php

/* LesCouvertsBundle:Couverts:index.html.twig */
class __TwigTemplate_eac3341e37d446200da050465c722ff3652e78a650e3500f11840212495d2889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t     \t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 \t\t\t\t<link rel=\"stylesheet\" href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/homepage-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 \t\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "            ";
        // line 14
        echo "                ";
        // line 15
        echo "                    ";
        // line 16
        echo "                    ";
        // line 17
        echo "                    ";
        // line 18
        echo "                ";
        // line 19
        echo "            ";
        // line 20
        echo "
            ";
        // line 22
        echo "                ";
        $this->env->loadTemplate("LesCouvertsBundle:Couverts:Gallery/gallery.html.twig")->display($context);
        // line 23
        echo "            ";
        // line 24
        echo "


                <div class=\"mainOption-container\">

\t\t\t\t\t\t\t\t<div class=\"mainOption\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(0)\" >
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("booking_a_table");
        echo "\" class=\"mainOption-popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainOption-popup-button\" > Booking </span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t  \t\t\t<h4 class=\"mainOption-description\">Booking a table online</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mainOption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(1)\" >
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mainOption-popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainOption-popup-button\" > Modify </span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t  \t\t\t<h4 class=\"mainOption-description\">Modify my reservation</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mainOption\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(2)\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mainOption-popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainOption-popup-button\" > Cancel </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t  \t\t\t<h4 class=\"mainOption-description\">Cancel my reservation</h4>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"mainOption-container\">

\t\t\t\t\t\t\t\t<div class=\"mainOption\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(3)\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("party_calendar");
        echo "\" class=\"mainOption-popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainOption-popup-button\" > Party! </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t  \t\t\t<h4 class=\"mainOption-description\">Party Calendar</h4>
\t\t\t\t\t\t\t\t</div>

                                <div class=\"mainOption\">
                                    <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(4)\" >
                                    <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("featured");
        echo "\" class=\"mainOption-popup\">
                                        <span class=\"mainOption-popup-button\" > Competition Begins! </span>
                                    </a>
                                    <h4 class=\"mainOption-description\">Featured Restaurant</h4>
                                </div>

                                <div class=\"mainOption\">
                                    <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(5)\" >
                                    <a href=\"#\" class=\"mainOption-popup\">
                                        <span class=\"mainOption-popup-button\" > Team lescouverts </span>
                                    </a>
                                    <h4 class=\"mainOption-description\">Who are we?</h4>
                                </div>

\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"mainOption-container\">


\t\t\t\t\t\t\t\t\t\t<div class=\"mainOption\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(6)\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mainOption-popup\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"mainOption-popup-button\" > We shall reply ASAP </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t  \t\t\t<h4 class=\"mainOption-description\">Contact Us</h4>
\t\t\t\t\t\t\t\t\t\t</div>

                                            <div class=\"mainOption\">
                                            <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(7)\" >
                                            <a href= ";
        // line 96
        echo $this->env->getExtension('routing')->getPath("resto_admin_index");
        echo " class=\"mainOption-popup\">
                                                ";
        // line 98
        echo "                                                <span class=\"mainOption-popup-button\" > Manage your Personal Homepage </span>
                                            </a>
                                            <h4 class=\"mainOption-description\">Restaurant Login  </h4>
                                        </div>

\t\t\t\t\t\t</div>



\t\t\t\t\t\t<div id=\"ourchef-container\" >
\t\t\t\t\t\t\t<h1 class=\"ourchef-font\" > Our Chefs </h1>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-container\"\t\t\t onclick=\"viewChef(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chef-photo-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/chefs/1.png"), "html", null, true);
        echo "\" class=\"chef-photo\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-sub-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-name-font\" > Harry Potter </span></br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-resto-font\" > Resto of Hogwards </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-container\" \t\t onclick=\"viewChef(1)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chef-photo-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/chefs/2.png"), "html", null, true);
        echo "\"  class=\"chef-photo\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-sub-container\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-name-font\" > Harry Potter </span></br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-resto-font\" > Resto of Hogwards </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-container\"\t\t\t onclick=\"viewChef(2)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chef-photo-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/chefs/3.png"), "html", null, true);
        echo "\" class=\"chef-photo\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-sub-container\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-name-font\" > Harry Potter </span></br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-resto-font\" > Resto of Hogwards </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-container\"\t\t\t \tonclick=\"viewChef(3)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chef-photo-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/chefs/4.png"), "html", null, true);
        echo "\"  class=\"chef-photo\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ourchef-chef-sub-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-name-font\" > Harry Potter </span></br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"chef-resto-font\" > Resto of Hogwards </span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
 


\t\t\t\t\t\t<div id=\"work-together-container\">
\t\t\t\t\t\t\t <span id=\"work-together-font\" > LET'S WORK TOGETHER </span></br>
\t\t\t\t\t\t\t\t <span id=\"work-together-sub-font\" > Got an interesting project and would like to work on it with us? </span></br>
\t\t\t\t\t\t\t\t\t <button id=\"work-together-button\"> GET IN TOUCH </button>
\t\t\t\t\t\t</div>


\t\t\t\t\t";
        // line 158
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eaa3d1a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a_0") : $this->env->getExtension('assets')->getAssetUrl("js/eaa3d1a_homepage_1.js");
            // line 159
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        } else {
            // asset "eaa3d1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a") : $this->env->getExtension('assets')->getAssetUrl("js/eaa3d1a.js");
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 161
        echo "
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>

            <script>

//                \$(document).ready(function(){
//                    \$(window).scroll(function(){
//                        if (\$(this).scrollTop() > 300) {
//                            \$('.mainOption-container').css('display','block');
//                            \$('.mainOption').animate({
//                                width: \"299px\",
//                                height: \"287px\"
//                            },500);
//
//                        } else {
////                            \$('.mainOption').fadeOut();
//                        }
//                    });
//
//                });

            </script>

\t  \t";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 121,  175 => 96,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 114,  34 => 11,  137 => 11,  134 => 10,  118 => 59,  83 => 36,  74 => 32,  120 => 45,  77 => 26,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 68,  104 => 57,  100 => 45,  96 => 55,  84 => 52,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 131,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 122,  143 => 73,  135 => 53,  131 => 52,  119 => 58,  108 => 51,  102 => 47,  71 => 19,  67 => 30,  63 => 22,  59 => 14,  47 => 9,  38 => 12,  94 => 28,  89 => 37,  85 => 25,  79 => 18,  75 => 17,  68 => 24,  56 => 18,  50 => 15,  29 => 6,  87 => 37,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 106,  136 => 105,  123 => 67,  121 => 46,  117 => 43,  115 => 57,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 23,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 66,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 41,  99 => 44,  95 => 42,  92 => 54,  86 => 28,  82 => 22,  80 => 31,  73 => 25,  64 => 29,  60 => 20,  57 => 11,  54 => 17,  51 => 15,  48 => 14,  45 => 8,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
