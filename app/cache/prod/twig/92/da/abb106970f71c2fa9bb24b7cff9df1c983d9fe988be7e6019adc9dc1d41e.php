<?php

/* LesRestaurantBundle:Admin/PersonalInformation/Blocks:myPersonalInformationForm.html.twig */
class __TwigTemplate_92daabb106970f71c2fa9bb24b7cff9df1c983d9fe988be7e6019adc9dc1d41e extends Twig_Template
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

            #information-container form input[type='text'] , #information-container form input[type='number']{
                height: 48px;
                width: 311px;
                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                border-color: #D8D8D8;
                border-style: double;
                text-align: center;
            }

            #information-container form label{
                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

            }


                            button[type='submit']{
                                height: 48px;
                                width: 49%;
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
        margin-top: 50px;

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
                .form-cell-sub-title{
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                    color: rgb(127,127,127);
                    font-size: 17px;
                    position: relative;
                    left: 720px;
                    width: 230px;
                }

</style>

<div id=\"information-container\">


    ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    <h1 class=\"form-cell-title\" > MY PERSONAL  INFORMATION </h1>
    <h2 class=\"form-cell-sub-title\" > (Information of Subscriber) </h2>


    <div class=\"form-container\">
        <div class=\"form-cell\" >
            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name_of_restaurant"), 'row');
        echo "
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "first_name"), 'row');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "family_name"), 'row');
        echo "
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "address"), 'row');
        echo "
              <div>
                  <label> Telephone (Mobile) </label>
                  ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone_1"), 'widget');
        echo "
                  ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone_1"), 'errors');
        echo "
              </div>
            <div>
                <label> Telephone (Landline) </label>
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone_2"), 'widget');
        echo "
                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone_2"), 'errors');
        echo "
            </div>
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'row');
        echo "
        </div>
    </div>

    <div>

        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save"), 'row');
        echo "

    </div>


    ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/PersonalInformation/Blocks:myPersonalInformationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 58,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 131,  81 => 32,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 172,  195 => 112,  148 => 110,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  83 => 33,  74 => 32,  120 => 50,  77 => 30,  58 => 20,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  111 => 91,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  131 => 108,  119 => 58,  108 => 61,  102 => 43,  71 => 27,  67 => 38,  63 => 37,  59 => 36,  47 => 14,  38 => 12,  94 => 40,  89 => 35,  85 => 28,  79 => 29,  75 => 27,  68 => 39,  56 => 19,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 35,  21 => 2,  26 => 6,  98 => 41,  93 => 35,  88 => 51,  78 => 37,  46 => 12,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 11,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 49,  115 => 92,  105 => 35,  101 => 39,  91 => 27,  69 => 29,  66 => 28,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 95,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 99,  122 => 43,  116 => 40,  112 => 43,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 37,  92 => 30,  86 => 50,  82 => 22,  80 => 31,  73 => 30,  64 => 27,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
