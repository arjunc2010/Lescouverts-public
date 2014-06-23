<?php

/* LesRestaurantBundle:BookingAdmin:index.html.twig */
class __TwigTemplate_090b42c4f2a51ccb333f4a0047b8c8e941c5d7aa29c92fe0d239874f2a0c7684 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/booking-admin.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "

            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/jquery-1.10.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/idangerous.swiper-2.1.min.js"), "html", null, true);
        echo "\"></script>

            <div id=\"control-container\">
                <div id=\"control-option\">
                    <a href=\"control-panel.php\">
                        <div class=\"control-option-button link-active\" >
                            <label class=\"title\"> Bookings </label>
                        </div>
                    </a>
                    <a href=\"control-panel-report.php\">
                        <div class=\"control-option-button\" >
                            <label class=\"title\"> Reports </label>
                        </div>
                    </a>
                    <a href=\"control-panel-vouchers.php\">
                        <div class=\"control-option-button\" >
                            <label class=\"title\"> Vouchers </label>
                        </div>
                    </a>
                    <a href=\"control-panel-option.php\">
                        <div class=\"control-option-button\" >
                            <label class=\"title\"> Options </label>
                        </div>
                    </a>
                    <a href=\"control-panel-restaurant.php\">
                        <div class=\"control-option-button\" >
                            <label class=\"title\"> Restaurant </label>
                        </div>
                    </a>
                </div>


                <div id=\"control-content\">

                    <div style=\"width:800px\" >
                        ";
        // line 51
        $this->env->loadTemplate("LesRestaurantBundle:BookingAdmin:Blocks/panel-booking.html.twig")->display($context);
        // line 52
        echo "                    </div>

                </div>


            </div>







        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:BookingAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 232,  277 => 231,  265 => 228,  261 => 227,  223 => 195,  206 => 181,  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 44,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  152 => 77,  167 => 131,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  77 => 30,  58 => 20,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  84 => 29,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  107 => 49,  61 => 27,  273 => 230,  269 => 229,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  119 => 55,  102 => 43,  71 => 27,  67 => 38,  63 => 23,  59 => 18,  38 => 12,  94 => 52,  89 => 41,  85 => 28,  75 => 27,  68 => 31,  56 => 19,  87 => 33,  21 => 2,  26 => 6,  93 => 43,  88 => 51,  78 => 37,  46 => 13,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  121 => 56,  117 => 55,  105 => 35,  91 => 27,  62 => 19,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 34,  72 => 49,  69 => 29,  47 => 14,  40 => 8,  37 => 8,  22 => 1,  246 => 90,  157 => 58,  145 => 46,  139 => 79,  131 => 60,  123 => 43,  120 => 50,  115 => 92,  111 => 91,  108 => 61,  101 => 45,  98 => 41,  96 => 55,  83 => 33,  74 => 32,  66 => 21,  55 => 35,  52 => 16,  50 => 15,  43 => 12,  41 => 9,  35 => 5,  32 => 7,  29 => 6,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 57,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 37,  92 => 51,  86 => 50,  82 => 28,  80 => 31,  73 => 24,  64 => 27,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
