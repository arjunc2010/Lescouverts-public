<?php

/* LesRestaurantBundle:BookingAdmin/Blocks:panel-booking.html.twig */
class __TwigTemplate_20e3a9872355fe5d0193225c02b51fdefeb0d752873c87bb99b50ba04d4bfb37 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/idangerous.swiper.css"), "html", null, true);
        echo "\">
<style>
    /* Demo Styles */
    body {
        margin: 0;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-size: 13px;
        line-height: 1.5;
    }
    .tabs {
        width: 900px;
        margin: 0 auto;
    }
    .tabs a {
        display: block;
        float: left;
        width: 223px;
        color: #333;
        text-align: center;
        border-radius: 5px 5px 0 0;
        border: 1px solid #ccc;
        background: #fff;
        line-height: 40px;
        font-size: 17px;
        font-style: italic;
        font-weight: bold;
        text-decoration: none;
    }
    .tabs a.active {
        color: #fff;
        background: #585858;
        border-bottom: 1px solid #000;
    }
    .swiper-container {

        height: 550px;
        border-radius: 0 0 5px 5px;
        border: 1px solid #ccc;
        /*width: 640px;*/
        width: 900px;
        border-top: 0;
    }
    .swiper-slide {
        height: 250px;
        width: 640px;
        background: none;
        /*color: #fff;*/
    }
    .content-slide {
        padding: 40px;
    }
</style>

<style>
    .filter-container{
        /*border-style: dashed;*/
        /*width: 250px;*/
        /*float: left;*/
    }

    .filter-container input{
        height: 30px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        text-align: center;
    }

    .filter-container input[type=\"submit\"]{
        width: 90px;
    }


    #table-booking{
        border-style: solid;
        border-width: 1px;
    }
    #table-booking th{
        /*width: 140px;*/
        border-bottom-style: solid;
        border-width: 1px;
    }

    #table-booking a  {
        color: black;
        text-decoration: none;
    }
    #table-booking a div{
        /*border-style: dashed;*/
        width: 75%;
        text-align: right;
    }

    #table-booking a div img {
        width:13px;
        position: relative;
        top: 2px;
    }

    #table-booking tr:hover{
        background-color: #F2F2F2;
        border-color:#F2F2F2;
    }

    #table-booking .table-headers:hover{
        background: none;
    }


    #table-booking td {
        font-size: 17px;
    }
    #ui-datepicker-div{
        font-size: 1em;
    }

    .status{
        font-weight: bold;
    }
    .success{
        color: #187E37;
    }
    .error{
        color: #B70F17;
    }
    .pending{
        color: #D56A00;
    }


</style>
<div class=\"tabs\"> <a href=\"#\" class=\"active\">Schedule</a> <a href=\"#\" class=\"\">Booking List</a> <a href=\"#\">Find</a> <a href=\"#\">Print</a> </div>
<div class=\"swiper-container\">
    <div class=\"swiper-wrapper\">
        <div class=\"swiper-slide\">
            <div class=\"content-slide\">
                <!-- Tab Content START -->
                <form class=\"filter-container\" method=\"post\">
                    <div>
                        <input type=\"text\" name=\"filter-date\" id=\"filter-date\"/>
                        <input type=\"submit\" value=\"filter\" />
                    </div>
                </form>

                <!-- Tab Content END -->
            </div>
        </div>
        <div class=\"swiper-slide\">
            <div class=\"content-slide\">
                <!-- Tab Content START -->

                <table id=\"table-booking\" >
                    <tr class=\"table-headers\">
                        <th style=\"width:160px;\">From Date/Time</th>
                        <th style=\"width:185px;\">Name</th>
                        <th style=\"width:220px;\">Email Address</th>
                        <th style=\"width:100px;\">Status</th>
                        <th style=\"width:135px;\"></th>
                    </tr>

                    <tr>
                        <td>30/05/2014, &thinsp; 18:00 </td>
                        <td>Test Subject </td>
                        <td>test@testmail.com</td>
                        <td><span class=\"status success\"> confirmed </span></td>
                        <td>
                            <a href=\"#\">
                                <div>
                                    <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/images/error.png"), "html", null, true);
        echo "\" class=\"img-delete\" /> delete
                                </div>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>30/05/2014, &thinsp; 18:00 </td>
                        <td>Test Subject </td>
                        <td>test@testmail.com</td>
                        <td><span class=\"status pending\"> pending </span></td>
                        <td>
                            <a href=\"#\">
                                <div>
                                    <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/images/error.png"), "html", null, true);
        echo "\" class=\"img-delete\" /> delete
                                </div>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>30/05/2014, &thinsp; 18:00 </td>
                        <td>Test Subject </td>
                        <td>test@testmail.com</td>
                        <td><span class=\"status error\"> declined </span></td>
                        <td>
                            <a href=\"#\">
                                <div>
                                    <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/images/error.png"), "html", null, true);
        echo "\" class=\"img-delete\" /> delete
                                </div>
                            </a>
                        </td>
                    </tr>


                </table>

                <!-- Tab Content END -->
            </div>
        </div>
        <div class=\"swiper-slide\">
            <div class=\"content-slide\">
                <h2>Tab 3</h2>
                <!-- Tab Content START -->
                <!-- Tab Content END -->
            </div>
        </div>
        <div class=\"swiper-slide\">
            <div class=\"content-slide\">
                <h2>Tab 4</h2>
                <!-- Tab Content START -->
                <!-- Tab Content END -->
            </div>
        </div>
    </div>
</div>


<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/idangerous.swiper-2.1.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/base/jquery.ui.all.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"></script>
<script>
    var tabsSwiper = new Swiper('.swiper-container',{
        onlyExternal : true,
        speed:500,
        onSlideChangeStart: function(){
            \$(\".tabs .active\").removeClass('active')
            \$(\".tabs a\").eq(tabsSwiper.activeIndex).addClass('active')
        }
    });
    \$(\".tabs a\").on('touchstart mousedown',function(e){
        e.preventDefault()
        \$(\".tabs .active\").removeClass('active')
        \$(this).addClass('active')
        tabsSwiper.swipeTo( \$(this).index() )
    });
    \$(\".tabs a\").click(function(e){
        e.preventDefault()
    });

    \$(function() {
        \$( \"#filter-date\" ).datepicker({
            defaultDate: \"+1w\",
            changeMonth: true,
            numberOfMonths: 3,
            onClose: function( selectedDate ) {
                \$( \"#to\" ).datepicker( \"option\", \"minDate\", selectedDate );
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:BookingAdmin/Blocks:panel-booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 232,  277 => 231,  265 => 228,  261 => 227,  223 => 195,  206 => 181,  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 44,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 131,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  83 => 33,  74 => 32,  120 => 50,  77 => 30,  58 => 20,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  96 => 55,  84 => 29,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  111 => 91,  107 => 49,  61 => 27,  273 => 230,  269 => 229,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  131 => 60,  119 => 55,  108 => 61,  102 => 43,  71 => 27,  67 => 38,  63 => 23,  59 => 18,  47 => 14,  38 => 12,  94 => 40,  89 => 41,  85 => 28,  79 => 34,  75 => 27,  68 => 31,  56 => 19,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 35,  21 => 2,  26 => 6,  98 => 41,  93 => 43,  88 => 51,  78 => 37,  46 => 12,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 11,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 56,  117 => 55,  115 => 92,  105 => 35,  101 => 45,  91 => 27,  69 => 29,  66 => 21,  62 => 19,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 37,  92 => 30,  86 => 50,  82 => 28,  80 => 31,  73 => 24,  64 => 27,  60 => 23,  57 => 22,  54 => 17,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
