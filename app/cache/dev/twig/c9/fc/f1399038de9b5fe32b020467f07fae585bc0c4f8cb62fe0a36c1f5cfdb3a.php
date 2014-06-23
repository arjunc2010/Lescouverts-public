<?php

/* LesVirtualMarketBundle:VirtualMarket/Blocks:searchForm.html.twig */
class __TwigTemplate_c9fcf1399038de9b5fe32b020467f07fae585bc0c4f8cb62fe0a36c1f5cfdb3a extends Twig_Template
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
        echo "
<style>
    #search-container{
        width: 74%;
        min-height: 90px;
        display: inline-block;
        aborder-style: dashed;
        margin-top: 30px;
        margin-left:200px;
    }

    #search-container form div{
        display: inline-block;
        /*margin-left: 20px;*/
        margin-bottom: 10px;
    }



    #search-container form input[type='text'],  #search-container select{
        height: 48px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        border-color: #D8D8D8;
        border-style: double;
        text-align: center;
        /*margin-left: 20px;*/
    }



    #search-container form label{
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

    }


    #search-container button[type='submit']{
        height: 48px;
        width: 150px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-color: rgb(116,132,255);
        background-color: rgb(116,132,255);
        border-style: double;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 20px;

    }
</style>


<link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/base/jquery.ui.all.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.mouse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.position.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/demos.css"), "html", null, true);
        echo "\">
<script>
    \$(function() {
        \$( \"#search_valid_from\" ).datepicker({
            defaultDate: \"+1w\",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function( selectedDate ) {
                \$( \"#to\" ).datepicker( \"option\", \"minDate\", selectedDate );
            }
        });
        \$( \"#search_valid_till\" ).datepicker({
            defaultDate: \"+1w\",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function( selectedDate ) {
                \$( \"#from\" ).datepicker( \"option\", \"maxDate\", selectedDate );
            }
        });
    });
</script>

";
        // line 88
        echo "<script>


    \$(function() {
        \$( \"#slider-range-price\" ).slider({
            orientation: \"vertical\",
            range: true,
            animate: \"slow\",
            max:";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["MAXPRICE"]) ? $context["MAXPRICE"] : $this->getContext($context, "MAXPRICE")), "html", null, true);
        echo ",
            values: [ ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["priceMin"]) ? $context["priceMin"] : $this->getContext($context, "priceMin")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["priceMax"]) ? $context["priceMax"] : $this->getContext($context, "priceMax")), "html", null, true);
        echo " ],
            slide: function( event, ui ) {
                \$( \"#search_price\" ).val( ui.values[ 0 ] + \"-\" + ui.values[ 1 ] );
            }
        });

        \$( \"#search_price\" ).val(\$( \"#slider-range-price\" ).slider( \"values\", 0 ) +
                \"-\" + \$( \"#slider-range-price\" ).slider( \"values\", 1 ) );


        \$( \"#slider-range-discount\" ).slider({
            orientation: \"vertical\",
            range: \"max\",
            min:0,
            max:100,
            value:";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["discount"]) ? $context["discount"] : $this->getContext($context, "discount")), "html", null, true);
        echo ",
            animate: \"slow\",
            slide: function( event, ui ) {
                \$( \"#search_discount\" ).val(ui.value);
            }
        });
        \$( \"#search_discount\" ).val( \$( \"#slider-range-discount\").slider( \"value\" ) );
    });

</script>

<script>
    \$(function() {
//        var names = [ \"Jörn Zaefferer\", \"Scott González\", \"John Resig\" ];

        var productNames = [
                        ";
        // line 128
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 129
            echo "                                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) - 1))) {
                // line 130
                echo "                                    \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\"  ,
                                ";
            } else {
                // line 132
                echo "                                   \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\"
                                ";
            }
            // line 134
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    ];

        var productPlace = [
            ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["place"]) ? $context["place"] : $this->getContext($context, "place"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 139
            echo "                    ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (twig_length_filter($this->env, (isset($context["place"]) ? $context["place"] : $this->getContext($context, "place"))) - 1))) {
                // line 140
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\"  ,
                    ";
            } else {
                // line 142
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["place"]) ? $context["place"] : $this->getContext($context, "place")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\"
                    ";
            }
            // line 144
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        ];

        var accentMap = {
            \"â\": \"a\", \"á\": \"a\", \"à\": \"a\", \"æ\": \"ae\",
            \"ç\": \"c\",
            \"é\": \"e\", \"è\": \"e\",\"ê\": \"e\",\"ë\": \"e\",
            \"ö\": \"o\",\"ô\": \"o\",\"œ\": \"oe\",
            \"ï\": \"i\",\"î\": \"i\",
            \"ù\": \"u\",\"û\": \"u\",\"ü\": \"u\",
            \"ÿ\": \"y\"
        };

        var normalize = function( term ) {
            var ret = \"\";
            for ( var i = 0; i < term.length; i++ ) {
                ret += accentMap[ term.charAt(i) ] || term.charAt(i);
            }
            return ret;
        };

        \$( \"#search_product_name\" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( \$.ui.autocomplete.escapeRegex( request.term ), \"i\" );
                response( \$.grep( productNames, function( value ) {
                    value = value.label || value.value || value;
                    return matcher.test( value ) || matcher.test( normalize( value ) );
                }) );
            }
        });

        \$( \"#search_place\" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( \$.ui.autocomplete.escapeRegex( request.term ), \"i\" );
                response( \$.grep( productPlace, function( value ) {
                    value = value.label || value.value || value;
                    return matcher.test( value ) || matcher.test( normalize( value ) );
                }) );
            }
        });
    });


</script>


    <style>
        #slider-range-container-price, #slider-range-container-discount{
            width:50px;
            position:absolute;
            top:57px;
            right:30%;
            margin-top:7px;
            z-index:100;
            /*background-color:white;*/
            /*height: 157px;*/
        }

        .img-close{
            width:12px;
            position:absolute;
            top:0px;
            right:0px;
            cursor:pointer;
        }

    </style>




    <div style=\"width: 100%;text-align: center;\">
            <div id=\"search-container\">


                        ";
        // line 219
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 220
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "product_name"), 'row');
        echo "

                        <div id=\"form-price-container\" style=\"position: relative;\">
                             ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'label');
        echo "
                             ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price"), 'widget');
        echo "
                                <div id=\"slider-range-container-price\" >
                                    <div id=\"slider-range-price\" style=\"height:200px;\"></div>
                                    <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/images/cross.jpg"), "html", null, true);
        echo "\" class=\"img-close\" />
                                </div>
                        </div>

                        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place"), 'row');
        echo "

                        <div id=\"form-price-container\" style=\"position: relative;\">
                            ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount"), 'label');
        echo "
                            ";
        // line 237
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "discount"), 'widget');
        echo "
                            <div id=\"slider-range-container-discount\" >
                                <div id=\"slider-range-discount\" style=\"height:200px;\"></div>
                                <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/images/cross.jpg"), "html", null, true);
        echo "\" class=\"img-close\" />
                            </div>
                        </div>


                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valid_from"), 'row');
        echo "
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valid_till"), 'row');
        echo "


                        ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort_by"), 'row');
        echo "
                        ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search"), 'row');
        echo "


                        ";
        // line 253
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>

    </div>


<script type=\"text/javascript\">
    \$('body').ready(function(){
        \$('#slider-range-container-price').css('display','none');
        \$('#slider-range-container-discount').css('display','none');
    });

    \$('#search_price').focus(function(){
        \$('#slider-range-container-price').slideDown();
    });

    \$('#search_discount').focus(function(){
        \$('#slider-range-container-discount').slideDown();
    });

    \$('.img-close').click(function(){
        \$(this).parent().slideUp();
    });


</script>";
    }

    public function getTemplateName()
    {
        return "LesVirtualMarketBundle:VirtualMarket/Blocks:searchForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 250,  390 => 249,  380 => 245,  366 => 237,  356 => 233,  349 => 229,  343 => 226,  339 => 225,  328 => 220,  324 => 219,  242 => 144,  236 => 142,  174 => 112,  150 => 96,  65 => 17,  23 => 4,  20 => 1,  53 => 11,  114 => 52,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 241,  434 => 238,  426 => 234,  419 => 231,  415 => 229,  400 => 253,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 240,  359 => 197,  352 => 194,  348 => 192,  344 => 190,  333 => 222,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  270 => 150,  266 => 148,  259 => 145,  255 => 143,  251 => 141,  249 => 140,  194 => 92,  186 => 88,  184 => 87,  181 => 86,  110 => 78,  70 => 26,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 138,  206 => 132,  90 => 30,  172 => 119,  212 => 134,  146 => 60,  124 => 47,  97 => 68,  477 => 315,  462 => 306,  458 => 305,  454 => 250,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 129,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 130,  191 => 91,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 135,  161 => 60,  152 => 77,  167 => 78,  81 => 24,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 83,  160 => 87,  129 => 100,  315 => 254,  280 => 222,  262 => 146,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 5,  137 => 64,  134 => 47,  118 => 53,  77 => 22,  58 => 13,  253 => 158,  248 => 145,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 27,  84 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 261,  384 => 246,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 236,  360 => 109,  355 => 195,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 84,  169 => 79,  140 => 88,  132 => 49,  128 => 6,  107 => 63,  61 => 27,  273 => 151,  269 => 229,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 140,  227 => 139,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  119 => 55,  102 => 42,  71 => 19,  67 => 20,  63 => 16,  59 => 16,  38 => 7,  94 => 65,  89 => 37,  85 => 32,  75 => 55,  68 => 29,  56 => 15,  87 => 58,  21 => 1,  26 => 12,  93 => 29,  88 => 51,  78 => 28,  46 => 14,  27 => 5,  44 => 8,  31 => 4,  28 => 3,  201 => 92,  196 => 93,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 72,  151 => 54,  142 => 35,  138 => 106,  136 => 8,  121 => 56,  117 => 55,  105 => 35,  91 => 59,  62 => 19,  49 => 10,  24 => 7,  25 => 3,  19 => 1,  79 => 56,  72 => 25,  69 => 19,  47 => 9,  40 => 11,  37 => 8,  22 => 3,  246 => 90,  157 => 58,  145 => 36,  139 => 79,  131 => 7,  123 => 56,  120 => 50,  115 => 65,  111 => 64,  108 => 61,  101 => 69,  98 => 41,  96 => 41,  83 => 57,  74 => 32,  66 => 21,  55 => 18,  52 => 16,  50 => 15,  43 => 9,  41 => 9,  35 => 8,  32 => 7,  29 => 8,  209 => 99,  203 => 78,  199 => 67,  193 => 128,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 57,  154 => 97,  149 => 70,  147 => 106,  144 => 59,  141 => 65,  133 => 63,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 62,  99 => 61,  95 => 60,  92 => 36,  86 => 60,  82 => 30,  80 => 35,  73 => 24,  64 => 20,  60 => 22,  57 => 22,  54 => 12,  51 => 15,  48 => 12,  45 => 9,  42 => 8,  39 => 9,  36 => 6,  33 => 7,  30 => 2,);
    }
}
