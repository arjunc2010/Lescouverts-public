<?php

/* LesRestaurantBundle:Admin/Information/Blocks:myInformationForm.html.twig */
class __TwigTemplate_c753915fe45da64b4508da49f6430d50aa01f8168fbb8a5ea3af077153656b38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>


    #information-container{
        width: 100%;
        min-height: 90px;
        float: left;
        aborder-style: dashed;
        text-align: center;
        margin-top: 30px;
    }

                #information-container form div :not(.form-container)  {
                    margin-left: 20px;
                    margin-bottom: 15px;
                }

                #information-container form label{
                    margin-right: 20px;
                }

                #information-container form select{
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

                }
                #information-container form input[type='text'] , #information-container form input[type='number']{
                    height: 48px;
                    width: 311px;
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                    border-color: #D8D8D8;
                    border-style: double;
                    text-align: center;
                }

                #information-container textarea{
                    height: 48px;
                    width: 311px;
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                    border-color: #D8D8D8;
                    border-style: double;
                    text-align: center;
                    position: relative;
                    top: 26px;
                }

                #information-container form label{
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

                }


                #information-container button[type='submit']{
                    height: 48px;
                    width: 60%;
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                    font-weight: bold;
                    font-size: 15px;
                    color: white;
                    border-color: #53A11F;
                    background-color: #53A11F;
                    border-style: double;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-top: 20px;
                }


    .form-container{
        width: 70%;
        margin-top: 11px;

        aborder-style: dashed;
        text-align: center;
        display: inline-block;
    }




                .form-cell{
                    border-bottom-style: groove;
                    border-color: rgb(237,237,237);
                    display: inline-block;
                }


                            .form-cell-title{
                                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                                color: rgb(127,127,127);
                                font-size: 22px;

                            }

    div.ui-datepicker{
        font-size:10px;
    }

    select#myInformation_vacation_period_start_year{
        display: none;
    }

    select#myInformation_vacation_period_end_year{
        display: none;
    }
</style>
";
        // line 107
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/base/jquery.ui.all.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"></script>
";
        // line 113
        echo "<script>



    var menu1 = {
        id: \"menu1\", title: \"Hello World\",
        contents: [
            {name: \"Item 1\"},
            {name: \"Item 2\"},
            {name: \"Item 3\"}
        ]
    };

</script>

<div id=\"information-container\">


    ";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            <h1 class=\"form-cell-title\" > MY RESTAURANT INFORMATION </h1>


    <div class=\"form-container\">
        <div class=\"form-cell\" >
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "number_of_reservations"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <div class=\"form-cell\" >
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'row');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'row');
        echo "
                    ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "cuisine"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <span class=\"container-title\">Pricing</span>
        <div class=\"form-cell\" >
                    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menu_price_min"), 'row');
        echo "
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "menu_price_max"), 'row');
        echo "
                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meal_price_min"), 'row');
        echo "
                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "meal_price_max"), 'row');
        echo "


                    ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment_visa"), 'row');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment_master"), 'row');
        echo "
                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "payment_ticket"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <span class=\"container-title\">Timings</span>
        <div class=\"form-cell\" >
                    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "servicing_hour_start"), 'row');
        echo "
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "servicing_hour_end"), 'row');
        echo "

                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vacation_period_start"), 'row');
        echo "
                    ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vacation_period_end"), 'row');
        echo "
        </div>
    </div>

    <style>
          .container-title{
              font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
              font-size: 22px;
              margin-bottom:10px;
              display:block;
          }
            td label{
                color:grey;
            }
            .row-title{
                color: black;
            }

    </style>
    <div class=\"form-container\">
            <span class=\"container-title\">Opening Days</span>
        <div class=\"form-cell\" >
            <table>
                <tr>
                    <td>
                    <label class=\"row-title\"> Monday: </label>
                    </td>
                    <td>
                    <label>Breakfast</label>   ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mon1"), 'widget');
        echo "
                    </td>
                    <td>
                    <label>Lunch</label>    ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mon2"), 'widget');
        echo "
                    </td>
                    <td>
                    <label>Dinner</label>    ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mon3"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                        <td>
                        <label class=\"row-title\"> Tuesday: </label>
                        </td>
                        <td>
                        <label>Breakfast</label>   ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tue1"), 'widget');
        echo "
                        </td>
                        <td>
                        <label>Lunch</label>    ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tue2"), 'widget');
        echo "
                        </td>
                        <td>
                        <label>Dinner</label>    ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tue3"), 'widget');
        echo "
                        </td>

                </tr>
                <tr>
                    <td>
                        <label class=\"row-title\"> Wednesday: </label>
                    </td>
                    <td>
                        <label>Breakfast</label>   ";
        // line 229
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wed1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wed2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "wed3"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"row-title\"> Thursday: </label>
                    </td>
                    <td>
                        <label>Breakfast</label>   ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "thur1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "thur2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "thur3"), 'widget');
        echo "
                    </td>

                </tr>
                <tr>
                    <td>
                        <label class=\"row-title\"> Friday: </label>
                    </td>
                    <td>
                        <label>Breakfast</label>   ";
        // line 258
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fri1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fri2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "fri3"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"row-title\"> Saturday: </label>
                    </td>
                    <td>
                        <label>Breakfast</label>   ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sat1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sat2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sat3"), 'widget');
        echo "
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class=\"row-title\"> Sunday: </label>
                    </td>
                    <td>
                        <label>Breakfast</label>   ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sun1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sun2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sun3"), 'widget');
        echo "
                    </td>
                </tr>
            </table>
        </div>



    </div>
    <div class=\"form-container\">
        <span class=\"container-title\">Additional Information</span>
        <div class=\"form-cell\" >
                    ";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "terrace"), 'row');
        echo "
                    ";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "guides"), 'row');
        echo "
                    ";
        // line 306
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "languages"), 'row');
        echo "

        </div>

        ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save"), 'row');
        echo "

    </div>


    ";
        // line 315
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/Information/Blocks:myInformationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 61,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 110,  152 => 77,  167 => 131,  81 => 32,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 172,  195 => 112,  148 => 110,  34 => 11,  137 => 48,  134 => 47,  118 => 59,  83 => 38,  74 => 32,  120 => 50,  77 => 30,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 138,  165 => 125,  126 => 107,  104 => 36,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 70,  128 => 44,  111 => 46,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 122,  143 => 111,  135 => 109,  131 => 108,  119 => 58,  108 => 48,  102 => 43,  71 => 27,  67 => 25,  63 => 19,  59 => 18,  47 => 13,  38 => 12,  94 => 40,  89 => 37,  85 => 28,  79 => 29,  75 => 27,  68 => 22,  56 => 17,  50 => 14,  29 => 6,  87 => 33,  72 => 49,  55 => 17,  21 => 2,  26 => 6,  98 => 41,  93 => 35,  88 => 30,  78 => 37,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 61,  158 => 114,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 49,  115 => 57,  105 => 35,  101 => 81,  91 => 27,  69 => 31,  66 => 23,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 144,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 58,  149 => 76,  147 => 113,  144 => 50,  141 => 69,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 40,  112 => 49,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 32,  92 => 30,  86 => 34,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
