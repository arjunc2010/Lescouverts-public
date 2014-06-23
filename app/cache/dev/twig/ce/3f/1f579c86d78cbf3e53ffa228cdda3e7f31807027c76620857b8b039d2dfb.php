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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "name"), "html", null, true);
        echo " </span><br>
                    <span class=\"h-list-cell-data-address\" >";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "address"), "html", null, true);
        echo "</span><br>
                    <span class=\"h-list-cell-data-type\" > ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "cuisine"), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eaa3d1a_homepage_1.js");
            // line 166
            echo "            <script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
            ";
        } else {
            // asset "eaa3d1a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_eaa3d1a") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/eaa3d1a.js");
            echo "            <script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
        return array (  304 => 169,  301 => 168,  287 => 166,  283 => 165,  263 => 148,  247 => 135,  243 => 134,  233 => 127,  229 => 126,  218 => 118,  204 => 107,  200 => 106,  191 => 100,  187 => 99,  179 => 93,  175 => 91,  171 => 90,  156 => 78,  152 => 77,  141 => 69,  131 => 62,  127 => 61,  112 => 49,  108 => 48,  98 => 41,  94 => 40,  86 => 34,  81 => 32,  77 => 30,  63 => 19,  59 => 18,  55 => 17,  50 => 14,  47 => 13,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
