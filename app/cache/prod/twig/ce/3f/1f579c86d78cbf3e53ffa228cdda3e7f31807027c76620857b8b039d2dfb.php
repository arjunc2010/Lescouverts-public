<?php

/* LesRestaurantBundle:Admin:index.html.twig */
class __TwigTemplate_ce3f1f579c86d78cbf3e53ffa228cdda3e7f31807027c76620857b8b039d2dfb extends Twig_Template
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
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link rel=\"stylesheet\" href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/homepage-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/restaurant-homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "            <div class=\"h-sub-container\" style=\"border-width:2px;width:70%;\">
                <div class=\"h-list-cell\">
                   <p>
                    <span class=\"h-list-cell-data-name\" > ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "name"), "html", null, true);
        echo " </span><br>
                    <span class=\"h-list-cell-data-address\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "address"), "html", null, true);
        echo "</span><br>
                    <span class=\"h-list-cell-data-type\" > ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "cuisine"), "html", null, true);
        echo " </span><br>
                   </p>
                </div>
            </div>




            <div id=\"mainOption-container\">

                <div class=\"mainOption\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(0)\" >
                   ";
        // line 32
        echo "                    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("booking_admin");
        echo "\" class=\"mainOption-popup\">
                    ";
        // line 34
        echo "                        <span class=\"mainOption-popup-button\" > With a click of a button  </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Bookings </h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(1)\" >
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("virtual_market_index");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" >  </span>
                    </a>
                    <h4 class=\"mainOption-description\">Virtual Market</h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(2)\" >
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("restaurant_my_information");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > About your Restaurant  </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Information</h4>
                </div>


            </div>


            <div id=\"mainOption-container\">
                <div class=\"mainOption\">
                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(3)\" >
                    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("restaurant_my_personal_information");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > About the Account Holder </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Personal Information</h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(4)\" >
                    <a href=\"#\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > Contract and Options </span>
                    </a>
                    <h4 class=\"mainOption-description\">My Contract and Options</h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(5)\" >
                    <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("restaurant_my_menus");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > Menu  </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Menus </h4>
                </div>


            </div>

            <div id=\"mainOption-container\">

                <div class=\"mainOption\">
                    <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(6)\" >
                    <a href= \"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("restaurant_my_news");
        echo "\" class=\"mainOption-popup\">
                        ";
        // line 93
        echo "                        <span class=\"mainOption-popup-button\" > News </span>
                    </a>
                    <h4 class=\"mainOption-description\"> Manage my News  </h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(7)\" >
                    <a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("restaurant_my_special_offers");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > Special Offers </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Special Offers </h4>
                </div>
                <div class=\"mainOption\">
                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(8)\" >
                    <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > Events </span>
                    </a>
                    <h4 class=\"mainOption-description\">Manage my Events </h4>
                </div>


            </div>

            <div id=\"mainOption-container\">
                <div class=\"mainOption\">
                    <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(9)\" >
                    <a href=\"#\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > Analyse your Performance </span>
                    </a>
                    <h4 class=\"mainOption-description\">Booking Statistics </h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(10)\" >
                    <a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("restaurant_my_ranking");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" >  </span>
                    </a>
                    <h4 class=\"mainOption-description\">Ranking</h4>
                </div>

                <div class=\"mainOption\">
                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(11)\" >
                    <a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("restaurant_my_comments");
        echo "\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" > </span>
                    </a>
                    <h4 class=\"mainOption-description\">Reply to Comments </h4>
                </div>


            </div>

            <div id=\"mainOption-container\">


                <div class=\"mainOption\">
                    <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/mainOption.png"), "html", null, true);
        echo "\" class=\"mainOption-photo\" onmouseover=\"mainOptionHover(12)\" >
                    <a href=\"#\" class=\"mainOption-popup\">
                        <span class=\"mainOption-popup-button\" >We shall reply ASAP </span>
                    </a>
                    <h4 class=\"mainOption-description\">Contact US</h4>
                </div>




            </div>






            ";
        // line 165
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "eaa3d1a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a_0") : $this->env->getExtension('assets')->getAssetUrl("js/eaa3d1a_homepage_1.js");
            // line 166
            echo "            <script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
            ";
        } else {
            // asset "eaa3d1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a") : $this->env->getExtension('assets')->getAssetUrl("js/eaa3d1a.js");
            echo "            <script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
            ";
        }
        unset($context["asset_url"]);
        // line 168
        echo "
            <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>


        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 169,  301 => 168,  287 => 166,  263 => 148,  200 => 106,  191 => 100,  127 => 61,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 49,  152 => 77,  167 => 80,  81 => 32,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 98,  175 => 91,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 110,  34 => 11,  137 => 48,  134 => 47,  118 => 59,  83 => 38,  74 => 32,  120 => 50,  77 => 30,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 127,  180 => 85,  165 => 125,  126 => 51,  104 => 36,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 135,  241 => 77,  229 => 126,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 70,  128 => 44,  111 => 46,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 134,  240 => 120,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 122,  143 => 73,  135 => 53,  131 => 62,  119 => 58,  108 => 48,  102 => 43,  71 => 27,  67 => 25,  63 => 19,  59 => 18,  47 => 13,  38 => 12,  94 => 40,  89 => 37,  85 => 28,  79 => 29,  75 => 27,  68 => 22,  56 => 17,  50 => 14,  29 => 6,  87 => 33,  72 => 49,  55 => 17,  21 => 2,  26 => 6,  98 => 41,  93 => 35,  88 => 30,  78 => 37,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 90,  166 => 71,  163 => 61,  158 => 114,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 49,  115 => 57,  105 => 35,  101 => 81,  91 => 27,  69 => 31,  66 => 23,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 50,  141 => 69,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 40,  112 => 49,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 32,  92 => 30,  86 => 34,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
