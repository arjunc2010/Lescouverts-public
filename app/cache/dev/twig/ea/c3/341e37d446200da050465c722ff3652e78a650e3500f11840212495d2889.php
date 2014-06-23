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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eaa3d1a_homepage_1.js");
            // line 159
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        } else {
            // asset "eaa3d1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eaa3d1a.js");
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        return array (  274 => 162,  271 => 161,  257 => 159,  253 => 158,  231 => 139,  219 => 130,  207 => 121,  195 => 112,  179 => 98,  175 => 96,  171 => 95,  160 => 87,  143 => 73,  133 => 66,  129 => 65,  119 => 58,  115 => 57,  99 => 44,  89 => 37,  80 => 31,  76 => 30,  68 => 24,  66 => 23,  63 => 22,  60 => 20,  58 => 19,  56 => 18,  54 => 17,  52 => 16,  50 => 15,  48 => 14,  46 => 13,  43 => 12,  37 => 8,  32 => 7,  29 => 6,);
    }
}
