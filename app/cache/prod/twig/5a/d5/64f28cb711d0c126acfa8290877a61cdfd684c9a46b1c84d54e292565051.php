<?php

/* LesCouvertsBundle:Couverts/Gallery:gallery.html.twig */
class __TwigTemplate_5ad564f28cb711d0c126acfa8290877a61cdfd684c9a46b1c84d54e292565051 extends Twig_Template
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

<body>




</body>

<script  type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jssor.core.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jssor.utils.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jssor.slider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" >
    jQuery(document).ready(function (\$) {

        var _CaptionTransitions = [];
        _CaptionTransitions[\"L\"] = { \$Duration: 900, \$FlyDirection: 1, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutSine }, \$ScaleHorizontal: 0.6, \$Opacity: 2 };
        _CaptionTransitions[\"R\"] = { \$Duration: 900, \$FlyDirection: 2, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInOutSine }, \$ScaleHorizontal: 0.6, \$Opacity: 2 };
        _CaptionTransitions[\"T\"] = { \$Duration: 900, \$FlyDirection: 4, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutSine }, \$ScaleVertical: 0.6, \$Opacity: 2 };
        _CaptionTransitions[\"B\"] = { \$Duration: 900, \$FlyDirection: 8, \$Easing: { \$Top: \$JssorEasing\$.\$EaseInOutSine }, \$ScaleVertical: 0.6, \$Opacity: 2 };
        _CaptionTransitions[\"ZMF|10\"] = { \$Duration: 900, \$Zoom: 11, \$Easing: { \$Zoom: \$JssorEasing\$.\$EaseOutQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear }, \$Opacity: 2 };
        _CaptionTransitions[\"RTT|10\"] = { \$Duration: 900, \$Zoom: 11, \$Rotate: 1, \$Easing: { \$Zoom: \$JssorEasing\$.\$EaseOutQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInExpo }, \$Opacity: 2, \$Round: { \$Rotate: 0.8} };
        _CaptionTransitions[\"RTT|2\"] = { \$Duration: 900, \$Zoom: 3, \$Rotate: 1, \$Easing: { \$Zoom: \$JssorEasing\$.\$EaseInQuad, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInQuad }, \$Opacity: 2, \$Round: { \$Rotate: 0.5} };
        _CaptionTransitions[\"RTTL|BR\"] = { \$Duration: 900, \$Zoom: 11, \$Rotate: 1, \$FlyDirection: 10, \$Easing: { \$Left: \$JssorEasing\$.\$EaseInCubic, \$Top: \$JssorEasing\$.\$EaseInCubic, \$Zoom: \$JssorEasing\$.\$EaseInCubic, \$Opacity: \$JssorEasing\$.\$EaseLinear, \$Rotate: \$JssorEasing\$.\$EaseInCubic }, \$ScaleHorizontal: 0.6, \$ScaleVertical: 0.6, \$Opacity: 2, \$Round: { \$Rotate: 0.8} };
        _CaptionTransitions[\"CLIP|LR\"] = { \$Duration: 900, \$Clip: 15, \$Easing: { \$Clip: \$JssorEasing\$.\$EaseInOutCubic }, \$Opacity: 2 };
        _CaptionTransitions[\"MCLIP|L\"] = { \$Duration: 900, \$Clip: 1, \$Move: true, \$Easing: { \$Clip: \$JssorEasing\$.\$EaseInOutCubic} };
        _CaptionTransitions[\"MCLIP|R\"] = { \$Duration: 900, \$Clip: 2, \$Move: true, \$Easing: { \$Clip: \$JssorEasing\$.\$EaseInOutCubic} };

        var options = {
            \$FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actuall size, default value is 0
            \$AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            \$AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            \$PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

            \$ArrowKeyNavigation: true,   \t\t\t            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
            \$SlideEasing: \$JssorEasing\$.\$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is \$JssorEasing\$.\$EaseOutQuad
            \$SlideDuration: 1200,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            \$MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
            //\$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //\$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            \$SlideSpacing: 0, \t\t\t\t\t                //[Optional] Space between each slide in pixels, default value is 0
            \$DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
            \$ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
            \$UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            \$PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, default value is 1
            \$DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the \$DragOrientation should be the same as \$PlayOrientation when \$DisplayPieces is greater than 1, or parking position is not 0)

            \$CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                \$Class: \$JssorCaptionSlider\$,                   //[Required] Class to create instance to animate caption
                \$CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                \$PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                \$PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
            },

            \$BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                \$Class: \$JssorBulletNavigator\$,                 //[Required] Class to create navigator instance
                \$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                \$AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                \$Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                \$Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                \$SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                \$SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                \$Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            },

            \$ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                \$Class: \$JssorArrowNavigator\$,                  //[Requried] Class to create arrow navigator instance
                \$ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                \$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                \$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };

        var jssor_slider1 = new \$JssorSlider\$(\"slider1_container\", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizes
        function ScaleSlider() {
            var bodyWidth = document.body.clientWidth;
            if (bodyWidth)
                jssor_slider1.\$SetScaleWidth(Math.min(bodyWidth, 1920));
            else
                window.setTimeout(ScaleSlider, 30);
        }

        ScaleSlider();

        if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
            \$(window).bind('resize', ScaleSlider);
        }


        //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
        //    \$(window).bind(\"orientationchange\", ScaleSlider);
        //}
        //responsive code end
    });
</script>

<!-- Jssor Slider Begin -->
<!-- You can move inline styles (except 'top', 'left', 'width' and 'height') to css file or css block. -->
<div id=\"slider1_container\"
     ";
        // line 105
        echo "        ";
        // line 106
        echo "        style=\"position: relative; margin: 0 auto;
            top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;\"
        >
    <!-- Loading Screen -->
    <div u=\"loading\" style=\"position: absolute; top: 0px; left: 0px;\">
        <div style=\"filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;\">
        </div>
        <div style=\"position: absolute; display: block; background: url(  ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/img/loading.gif"), "html", null, true);
        echo "  ) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;\">
        </div>
    </div>
    <!-- Slides Container -->
    <div u=\"slides\" style=\"cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden; \">
        <div>
            <img u=\"image\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/landing-page/01.jpg"), "html", null, true);
        echo "\" />
        </div>
        <div>
            <img u=\"image\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/landing-page/02.jpg"), "html", null, true);
        echo "\" />
        </div>
        <div>
            <img u=\"image\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/landing-page/03.jpg"), "html", null, true);
        echo "\" />
        </div>
        <div>
            <img u=\"image\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/landing-page/04.jpg"), "html", null, true);
        echo "\" />
        </div>

        <!-- Example to add fixed static share buttons in slider BEGIN -->
        <!-- Remove it if no need -->
        <!-- Share Button Styles -->
        <style>
            .share-icon {
                display: inline-block;
                float: left;
                margin: 4px;
                width: 32px;
                height: 32px;
                cursor: pointer;
                vertical-align: middle;
                background-image: url( ";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/img/share/share-icons.png"), "html", null, true);
        echo " );
            }

            .share-facebook {
                background-position: 0px 0px;
            }

            .share-facebook:hover {
                background-position: 0px -40px;
            }

            .share-twitter {
                background-position: -40px 0px;
            }

            .share-twitter:hover {
                background-position: -40px -40px;
            }

            .share-linkedin {
                background-position: -240px 0px;
            }

            .share-linkedin:hover {
                background-position: -240px -40px;
            }


            .share-googleplus {
                background-position: -120px 0px;
            }

            .share-googleplus:hover {
                background-position: -120px -40px;
            }

            .share-blogger {
                background-position: -280px 0px;
            }

            .share-blogger:hover {
                background-position: -280px -40px;
            }

            .share-email {
                background-position: -320px 0px;
            }

            .share-email:hover {
                background-position: -320px -40px;
            }
        </style>
        <div u=\"any\" style=\"position: absolute; display: block; top: 6px; right: 170px; width: 240px; height: 40px;\">

            ";
        // line 201
        echo "            ";
        // line 202
        echo "            ";
        // line 203
        echo "            ";
        // line 204
        echo "            ";
        // line 205
        echo "            ";
        // line 206
        echo "        </div>
        <!-- Example to add fixed static share buttons in slider END -->
    </div>

    <!-- Bullet Navigator Skin Begin -->
    <style>
        /* jssor slider bullet navigator skin 21 css */
        /*
        .jssorb21 div           (normal)
        .jssorb21 div:hover     (normal mouseover)
        .jssorb21 .av           (active)
        .jssorb21 .av:hover     (active mouseover)
        .jssorb21 .dn           (mousedown)
        */
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av
        {
            background: url( ";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/img/b21.png"), "html", null, true);
        echo " ) no-repeat;
            overflow:hidden;
            cursor: pointer;
        }
        .jssorb21 div { background-position: -5px -5px; }
        .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
        .jssorb21 .av { background-position: -65px -5px; }
        .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
    </style>
    <!-- bullet navigator container -->
    <div u=\"navigator\" class=\"jssorb21\" style=\"position: absolute; bottom: 26px; left: 6px;\">
        <!-- bullet navigator item prototype -->
        <div u=\"prototype\" style=\"POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;\"></div>
    </div>
    <!-- Bullet Navigator Skin End -->

    <!-- Arrow Navigator Skin Begin -->
    <style>
        /* jssor slider arrow navigator skin 21 css */
        /*
        .jssora21l              (normal)
        .jssora21r              (normal)
        .jssora21l:hover        (normal mouseover)
        .jssora21r:hover        (normal mouseover)
        .jssora21ldn            (mousedown)
        .jssora21rdn            (mousedown)
        */
        .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn
        {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url( ";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/img/a21.png"), "html", null, true);
        echo " ) center center no-repeat;
            overflow: hidden;
        }
        .jssora21l { background-position: -3px -33px; }
        .jssora21r { background-position: -63px -33px; }
        .jssora21l:hover { background-position: -123px -33px; }
        .jssora21r:hover { background-position: -183px -33px; }
        .jssora21ldn { background-position: -243px -33px; }
        .jssora21rdn { background-position: -303px -33px; }
    </style>
    <!-- Arrow Left -->
        <span u=\"arrowleft\" class=\"jssora21l\" style=\"width: 55px; height: 55px; top: 123px; left: 8px;\">
        </span>
    <!-- Arrow Right -->
        <span u=\"arrowright\" class=\"jssora21r\" style=\"width: 55px; height: 55px; top: 123px; right: 8px\">
        </span>
    <!-- Arrow Navigator Skin End -->
    <a style=\"display: none\" href=\"http://www.jssor.com\">html slider</a>
</div>
<!-- Jssor Slider End -->


";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts/Gallery:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 146,  148 => 114,  34 => 11,  137 => 11,  134 => 10,  118 => 59,  83 => 36,  74 => 32,  120 => 45,  77 => 26,  58 => 20,  37 => 10,  253 => 141,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 68,  104 => 57,  100 => 45,  96 => 55,  84 => 52,  76 => 50,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 131,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 122,  143 => 56,  135 => 53,  131 => 52,  119 => 66,  108 => 51,  102 => 47,  71 => 19,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 12,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 48,  56 => 9,  50 => 22,  29 => 6,  87 => 37,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 128,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 106,  136 => 105,  123 => 67,  121 => 46,  117 => 43,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 15,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 41,  99 => 40,  95 => 42,  92 => 54,  86 => 28,  82 => 22,  80 => 35,  73 => 25,  64 => 29,  60 => 27,  57 => 11,  54 => 23,  51 => 15,  48 => 13,  45 => 8,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
