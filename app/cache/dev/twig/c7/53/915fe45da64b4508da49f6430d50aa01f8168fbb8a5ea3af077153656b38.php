<?php

/* LesRestaurantBundle:Admin:Information/Blocks/myInformationForm.html.twig */
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            <h1 class=\"form-cell-title\" > MY RESTAURANT INFORMATION </h1>


    <div class=\"form-container\">
        <div class=\"form-cell\" >
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number_of_reservations"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <div class=\"form-cell\" >
                    ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
                    ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'row');
        echo "
                    ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuisine"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <span class=\"container-title\">Pricing</span>
        <div class=\"form-cell\" >
                    ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu_price_min"), 'row');
        echo "
                    ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu_price_max"), 'row');
        echo "
                    ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meal_price_min"), 'row');
        echo "
                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "meal_price_max"), 'row');
        echo "


                    ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "payment_visa"), 'row');
        echo "
                    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "payment_master"), 'row');
        echo "
                    ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "payment_ticket"), 'row');
        echo "
        </div>
    </div>

    <div class=\"form-container\">
        <span class=\"container-title\">Timings</span>
        <div class=\"form-cell\" >
                    ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servicing_hour_start"), 'row');
        echo "
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "servicing_hour_end"), 'row');
        echo "

                    ";
        // line 171
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vacation_period_start"), 'row');
        echo "
                    ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vacation_period_end"), 'row');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mon1"), 'widget');
        echo "
                    </td>
                    <td>
                    <label>Lunch</label>    ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mon2"), 'widget');
        echo "
                    </td>
                    <td>
                    <label>Dinner</label>    ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mon3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tue1"), 'widget');
        echo "
                        </td>
                        <td>
                        <label>Lunch</label>    ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tue2"), 'widget');
        echo "
                        </td>
                        <td>
                        <label>Dinner</label>    ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tue3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wed1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wed2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wed3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thur1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thur2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "thur3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fri1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fri2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 264
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fri3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sat1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sat2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sat3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sun1"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Lunch</label>    ";
        // line 289
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sun2"), 'widget');
        echo "
                    </td>
                    <td>
                        <label>Dinner</label>    ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sun3"), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "terrace"), 'row');
        echo "
                    ";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "guides"), 'row');
        echo "
                    ";
        // line 306
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "languages"), 'row');
        echo "

        </div>

        ";
        // line 310
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row');
        echo "

    </div>


    ";
        // line 315
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:Information/Blocks/myInformationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 315,  469 => 310,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  427 => 286,  416 => 278,  410 => 275,  404 => 272,  393 => 264,  387 => 261,  381 => 258,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  322 => 220,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  287 => 200,  256 => 172,  252 => 171,  247 => 169,  243 => 168,  233 => 161,  229 => 160,  225 => 159,  219 => 156,  215 => 155,  211 => 154,  207 => 153,  197 => 146,  193 => 145,  189 => 144,  180 => 138,  171 => 132,  167 => 131,  147 => 113,  143 => 111,  139 => 110,  135 => 109,  131 => 108,  126 => 107,  19 => 1,  58 => 20,  56 => 19,  50 => 15,  47 => 14,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
