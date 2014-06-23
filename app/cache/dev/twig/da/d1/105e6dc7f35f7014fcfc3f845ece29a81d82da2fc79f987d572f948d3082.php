<?php

/* LesRestaurantBundle:Restaurant:homepage.html.twig */
class __TwigTemplate_dad1105e6dc7f35f7014fcfc3f845ece29a81d82da2fc79f987d572f948d3082 extends Twig_Template
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

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link rel=\"stylesheet\" href= \"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/restaurant-homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/blueimp-gallery.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/bootstrap.css"), "html", null, true);
        echo "\"  />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/examples.css"), "html", null, true);
        echo "\"  />

        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "

                    <div id=\"container\">

                                <div id=\"h-container\">
                                <div id=\"h-gallery\" style=\"\">


                                    <div id=\"blueimp-gallery-carousel\" class=\"blueimp-gallery blueimp-gallery-carousel\">
                                        <div class=\"slides\"></div>
                                        <h3 class=\"title\"></h3>
                                        <a class=\"prev\">‹</a>
                                        <a class=\"next\">›</a>
                                        <a class=\"play-pause\"></a>
                                        <ol class=\"indicator\"></ol>
                                    </div>

                                   <div id=\"image-links\" style=\"display: none\" >

                                    ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 36
            echo "
                                                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" >
                                                        <img class=\"img-type\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" />
                                                    </a>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                                    </div>


                                    <div style=\"width:100%;height:60px;float:left;position:relative\">
                                        <form>
                                            <input type=\"submit\" name=\"reserve\" value=\"Reserve\" />
                                        </form>
                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:94px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "name"), "html", null, true);
        echo " </span><br>
                                        <span class=\"h-list-cell-data-address\" >";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "address"), "html", null, true);
        echo "</span><br>
                                        <span class=\"h-list-cell-data-type\" > ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "cuisine"), "html", null, true);
        echo " </span><br>
                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:130px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Special Offers </span><br>
                                        <span class=\"h-list-cell-data-address\" > ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "special1"), "html", null, true);
        echo "  </span><br>
                                        <span class=\"h-list-cell-data-address\" > ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "special2"), "html", null, true);
        echo "   </span><br>
                                        <span class=\"h-list-cell-data-address\" > ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "special3"), "html", null, true);
        echo "  </span><br>
                                    </div>
                                </div>
                                <div class=\"h-sub-container\" style=\"height:70px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-menu\" > Menu Prices : ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "menuPriceMin"), "html", null, true);
        echo " euros - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "menuPriceMax"), "html", null, true);
        echo " euros </span>
                                        <span class=\"h-list-cell-data-menu-content\">   </span><br>
                                        <span class=\"h-list-cell-data-menu\" > Meal Prices :  ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "mealPriceMin"), "html", null, true);
        echo " euros - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "mealPriceMax"), "html", null, true);
        echo " euros </span>
                                        <span class=\"h-list-cell-data-menu-content\">  </span><br>

                                    </div>
                                </div>

                         ";
        // line 78
        if (((($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentVisa") == 1) || ($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentMaster") == 1)) || ($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentTicket") == 1))) {
            // line 79
            echo "                                <div class=\"h-sub-container\" style=\"height:120px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Payment Methods </span><br>

                                            ";
            // line 83
            if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentVisa") == 1)) {
                // line 84
                echo "                                                <span class=\"h-list-cell-data-type\" > Visa</span><br>
                                            ";
            }
            // line 86
            echo "
                                            ";
            // line 87
            if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentMaster") == 1)) {
                // line 88
                echo "                                                <span class=\"h-list-cell-data-type\" > Master </span><br>

                                            ";
            }
            // line 91
            echo "
                                            ";
            // line 92
            if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "paymentTicket") == 1)) {
                // line 93
                echo "                                                <span class=\"h-list-cell-data-type\" > Restaurant Vouchers </span><br>
                                            ";
            }
            // line 95
            echo "
                                    </div>
                                </div>
                         ";
        }
        // line 99
        echo "                                <div class=\"h-sub-container\" style=\"height:195px;border-style:none;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Opening days </span><br>
        <style>
            .h-sub-container p{
                margin-top: 10px;
                display: inline-block;
            }

                .h-sub-container table{
                    text-align: center;
                    display: inline-block;
                    color: #A5A5A5;
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                }

                    .h-sub-container .schedule-day-container{
                        width: 100px;
                        text-align: right;
                    }

                            .h-sub-container td{
                                width: 360px;
                            }
                                    .schedule-day{
                                        color:grey;
                                        font-weight: bold;
                                        font-size: 15px;
                                    }
                                    .schedule-alert{
                                        color:red;
                                    }

        </style>
      <p>
        <table>
            <tr>
                <td class=\"schedule-day-container\">
                                          <span class=\"schedule-day\"> Monday : </span>
                </td>
                <td>
                                                        ";
        // line 140
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "mon1") != 0)) {
            // line 141
            echo "                                                            breakfast -
                                                         ";
        } else {
            // line 143
            echo "                                                             <span class=\"schedule-alert\"> breakfast Closed - </span>
                                                          ";
        }
        // line 145
        echo "                                                            ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "mon2") != 0)) {
            // line 146
            echo "                                                                Lunch -
                                                            ";
        } else {
            // line 148
            echo "                                                                <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                            ";
        }
        // line 150
        echo "                                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "mon3") != 0)) {
            // line 151
            echo "                                                                    Dinner
                                                                ";
        } else {
            // line 153
            echo "                                                                    <span class=\"schedule-alert\"> Dinner Closed </span>
                                                                ";
        }
        // line 155
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Tuesday: </span>
                </td>
                <td>
                                            ";
        // line 162
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "tue1") != 0)) {
            // line 163
            echo "                                                breakfast -
                                            ";
        } else {
            // line 165
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 167
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "tue2") != 0)) {
            // line 168
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 170
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 172
        echo "                                                    ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "tue3") != 0)) {
            // line 173
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 175
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 177
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Wednesday : </span>
                </td>
                <td>
                                            ";
        // line 184
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "wed1") != 0)) {
            // line 185
            echo "                                                breakfast -
                                            ";
        } else {
            // line 187
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 189
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "wed2") != 0)) {
            // line 190
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 192
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 194
        echo "                                                    ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "wed3") != 0)) {
            // line 195
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 197
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 199
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Thursday : </span>
                </td>
                <td>
                                            ";
        // line 206
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "thur1") != 0)) {
            // line 207
            echo "                                                breakfast -
                                            ";
        } else {
            // line 209
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 211
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "thur2") != 0)) {
            // line 212
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 214
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 216
        echo "                                                    ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "thur3") != 0)) {
            // line 217
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 219
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 221
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Friday : </span>
                </td>
                <td>
                                            ";
        // line 228
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "fri1") != 0)) {
            // line 229
            echo "                                                breakfast -
                                            ";
        } else {
            // line 231
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 233
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "fri2") != 0)) {
            // line 234
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 236
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 238
        echo "                                                    ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "fri3") != 0)) {
            // line 239
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 241
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 243
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Saturday : </span>
                </td>
                <td>
                                            ";
        // line 250
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sat1") != 0)) {
            // line 251
            echo "                                                breakfast -
                                            ";
        } else {
            // line 253
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 255
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sat2") != 0)) {
            // line 256
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 258
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 260
        echo "                                                    ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sat3") != 0)) {
            // line 261
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 263
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 265
        echo "                </td>
            </tr>
            <tr>
                <td class=\"schedule-day-container\">
                                            <span class=\"schedule-day\"> Sunday : </span>
                </td>
                <td>
                                            ";
        // line 272
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sun1") != 0)) {
            // line 273
            echo "                                                breakfast -
                                            ";
        } else {
            // line 275
            echo "                                                <span class=\"schedule-alert\"> breakfast Closed - </span>
                                            ";
        }
        // line 277
        echo "                                                ";
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sun2") != 0)) {
            // line 278
            echo "                                                    Lunch -
                                                ";
        } else {
            // line 280
            echo "                                                    <span class=\"schedule-alert\"> Lunch Closed - </span>
                                                ";
        }
        // line 282
        echo "
                                                    ";
        // line 283
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "sun3") != 0)) {
            // line 284
            echo "                                                        Dinner
                                                    ";
        } else {
            // line 286
            echo "                                                        <span class=\"schedule-alert\"> Dinner Closed </span>
                                                    ";
        }
        // line 288
        echo "                </td>
            </tr>
           </table>
         </p>

                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:45px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-menu\" > Vacation Period :  </span>
                                        <span class=\"h-list-cell-data-menu-content\"> From ";
        // line 299
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "vacationPeriodStart"), "d M"), "html", null, true);
        echo " till ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "vacationPeriodStart"), "d M"), "html", null, true);
        echo " </span><br>
                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:75px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Servicing hours </span><br>
                                        <span class=\"h-list-cell-data-address\" > ";
        // line 306
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "servicingHourStart"), "H:m"), "html", null, true);
        echo " till ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "servicingHourEnd"), "H:m"), "html", null, true);
        echo " </span><br>
                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:50px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Terrace :
                                                    ";
        // line 313
        if (($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "terrace") == "1")) {
            // line 314
            echo "                                                        Yes
                                                    ";
        } else {
            // line 316
            echo "                                                        No
                                                     ";
        }
        // line 318
        echo "                                        </span><br>
                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:92px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Guides </span><br>
                                                   ";
        // line 325
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "guides"), "/"));
        foreach ($context['_seq'] as $context["_key"] => $context["guide"]) {
            // line 326
            echo "                                                       <span class=\"h-list-cell-data-address\" > ";
            echo twig_escape_filter($this->env, (isset($context["guide"]) ? $context["guide"] : $this->getContext($context, "guide")), "html", null, true);
            echo "</span><br>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 328
        echo "                                    </div>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:117px;\">
                                    <div class=\"h-list-cell\">
                                        <span class=\"h-list-cell-data-name\" > Languages Spoken </span><br>
                                                    ";
        // line 334
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "languages"), "/"));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 335
            echo "                                                        <span class=\"h-list-cell-data-address\" > ";
            echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "html", null, true);
            echo "</span><br>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                                    </div>
                                </div>

            ";
        // line 341
        echo "                <div class=\"h-sub-container\" style=\"text-align: center\">
                <div class=\"row\" style=\"text-align:center;display:inline-block;\">
                    <div class=\"span11\">
                        <div id=\"map\"\"></div>
                    </div>
                </div>

            ";
        // line 349
        echo "


            <div class=\"h-sub-container\" style=\"height:260px;\">
                                    <a href=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("menus", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/menu.png"), "html", null, true);
        echo "\" />
                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Menu </span>
                                            </div>
                                        </div>
                                     </a>
                                    <a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("events", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/organise-event.png"), "html", null, true);
        echo "\" />

                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Organised Events </span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("news", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/news.png"), "html", null, true);
        echo "\" />

                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> News </span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("similar", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/similar-restos.png"), "html", null, true);
        echo "\" />
                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Similar Restaurants </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class=\"h-sub-container\" style=\"height:260px;\">
                                    <a href=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recommend", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/recommend.png"), "html", null, true);
        echo "\" />

                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Recommended by <br> 68% of clients </span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rating", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" >
                                    ";
        // line 411
        echo "                                        <div class=\"h-block-cell\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/rate.png"), "html", null, true);
        echo "\" />

                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Average rating of <br> restaurant 7/10 </span>
                                            </div>
                                        </div>
                                    </a>
                                   ";
        // line 422
        echo "                                        <div class=\"h-block-cell\" id=\"feedback-button\">
                                            <div class=\"h-block-cell-top\">
                                                <img src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/Restaurant/images/feedback.png"), "html", null, true);
        echo "\" />

                                            </div>
                                            <div class=\"h-block-cell-bottom\">
                                                <span> Client Feedback </span>
                                            </div>
                                        </div>
                                    ";
        // line 432
        echo "                                </div>


                           ";
        // line 435
        if ((twig_length_filter($this->env, (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments"))) > 0)) {
            // line 436
            echo "                                <div class=\"h-sub-container\" style=\"border-style:none;\">
                                    <span class=\"h-list-cell-data-name\" > Comments </span><br>

                                    ";
            // line 439
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 440
                echo "                                        <div class=\"h-comment-container\">

                                                <span class=\"h-comment-text\" > ";
                // line 442
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "text"), "html", null, true);
                echo " </span><br>
                                                <span class=\"h-comment-details\"><strong> ";
                // line 443
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "username"), "html", null, true);
                echo " </strong> </span>
                                                <span class=\"h-comment-details\"> ";
                // line 444
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "dateCreated"), "D d-M-Y", "Europe/Paris"), "html", null, true);
                echo " </span><br>

                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 448
            echo "
                                </div>
                          ";
        }
        // line 451
        echo "




                ";
        // line 457
        echo "                                <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                                        <h3 id=\"myModalLabel\">Client Feedback</h3>
                                    </div>
                                    <div class=\"modal-body\" id=\"form-container\">

                                      ";
        // line 464
        $this->env->loadTemplate("LesRestaurantBundle:Restaurant:Feedback/feedbackPopup.html.twig")->display($context);
        // line 465
        echo "
                                    </div>
                                    <div class=\"modal-footer\">
                                    </div>
                                    <div id=\"form-info\" target=\"\" row=\"\" ></div>
                                </div>
                ";
        // line 472
        echo "


                ";
        // line 476
        echo "                ";
        // line 477
        echo "


        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/gmaps.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/blueimp-gallery.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>


          <script>
                blueimp.Gallery(
                        document.getElementById('image-links').getElementsByTagName('a'),
                        {
                            container: '#blueimp-gallery-carousel',
                            carousel: true
                        }
                );

                \$('#feedback-button').click(function(){
                    \$('#myModal').modal({
                        show: true
                    });
                });

                \$('#feedback_submit').click(function(){

                });

            </script>

            <script type=\"text/javascript\">
                var map;
                \$(document).ready(function(){
                    map = new GMaps({
                        el: '#map',
                        lat: -12.043333,
                        lng: -77.028333
                    });
                        GMaps.geocode({
                            address: '";
        // line 518
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["details"]) ? $context["details"] : $this->getContext($context, "details")), "address"), "html", null, true);
        echo "',
                            callback: function(results, status){
                                if(status=='OK'){
                                    var latlng = results[0].geometry.location;
                                    map.setCenter(latlng.lat(), latlng.lng());
                                    map.addMarker({
                                        lat: latlng.lat(),
                                        lng: latlng.lng()
                                    });
                                }
                            }
                        });
                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Restaurant:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  454 => 250,  445 => 243,  441 => 241,  437 => 239,  434 => 238,  430 => 236,  426 => 234,  423 => 233,  419 => 231,  415 => 229,  413 => 228,  404 => 221,  400 => 219,  396 => 217,  393 => 216,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  374 => 207,  372 => 206,  363 => 199,  359 => 197,  355 => 195,  352 => 194,  348 => 192,  344 => 190,  341 => 189,  337 => 187,  333 => 185,  331 => 184,  322 => 177,  318 => 175,  314 => 173,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  281 => 155,  277 => 153,  273 => 151,  270 => 150,  266 => 148,  262 => 146,  259 => 145,  255 => 143,  251 => 141,  249 => 140,  206 => 99,  200 => 95,  196 => 93,  194 => 92,  191 => 91,  186 => 88,  184 => 87,  181 => 86,  177 => 84,  175 => 83,  169 => 79,  167 => 78,  156 => 72,  149 => 70,  141 => 65,  137 => 64,  133 => 63,  123 => 56,  119 => 55,  115 => 54,  101 => 42,  91 => 38,  87 => 37,  84 => 36,  80 => 35,  59 => 16,  56 => 15,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 6,  29 => 5,);
    }
}
