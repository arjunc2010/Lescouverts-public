<?php

/* LesVirtualMarketBundle:VirtualMarket:index.html.twig */
class __TwigTemplate_ca2b35588cc733c3d3603eb8e9ec5c3bfe1985b313fa6ea085aa779ceef437ab extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/virtual-market.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "
            ";
        // line 15
        $this->env->loadTemplate("LesVirtualMarketBundle:VirtualMarket:Blocks/searchForm.html.twig")->display($context);
        // line 16
        echo "


                               <div class=\"v-list-container\">

                                ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "                                           <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("virtual_market_focus", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "id"))), "html", null, true);
            echo "\">
                                            <div class=\"v-list-cell\">
                                                <img class=\"v-list-cell-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/VirtualMarket/images/beef.png"), "html", null, true);
            echo "\">

                                                <table class=\"v-list-cell-center\">
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Name of Product :</label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                            <span> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name"), "html", null, true);
            echo "</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Location :</label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                            <span>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "country"), "html", null, true);
            echo "</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Validity :</label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                            <span>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "validFrom"), "m-d-Y"), "html", null, true);
            echo " - till - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "validTill"), "d-m-Y"), "html", null, true);
            echo "</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Price :</label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                            <span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price"), "html", null, true);
            echo " euros</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Discounted Price : </label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                            <span style=\"
                                                                            ";
            // line 65
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discount") <= 30)) {
                // line 66
                echo "                                                                                 color:rgb(24,126,55);
                                                                            ";
            } elseif (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discount") <= 60)) {
                // line 68
                echo "                                                                                    color:rgb(213,106,0);
                                                                            ";
            } else {
                // line 70
                echo "                                                                                    color:rgb(183,15,23);
                                                                            ";
            }
            // line 72
            echo "                                                                         \">
                                                                ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discountPrice"), "html", null, true);
            echo " euros</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class=\"product-label\">
                                                            <label> Description : </label>
                                                        </td>
                                                        <td class=\"product-value\">
                                                                <span> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description"), "html", null, true);
            echo "</span>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class=\"v-list-cell-right\">
                                                    <div class=\"v-list-cell-discount\" style=\"
                                                    ";
            // line 87
            if (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discount") <= 30)) {
                // line 88
                echo "                                                            background-color:rgb(24,126,55);
                                                    ";
            } elseif (($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discount") <= 60)) {
                // line 90
                echo "                                                            background-color:rgb(213,106,0);
                                                    ";
            } else {
                // line 92
                echo "                                                            background-color:rgb(183,15,23);
                                                    ";
            }
            // line 94
            echo "                                                                                            \" >
                                                        <span class=\"product-discount\" > ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "discount"), "html", null, true);
            echo "%<br>Discount </span>
                                                    </div>
                                                </div>
                                            </div>
                                           </a>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                               </div>







            ";
        // line 110
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/virtual-market.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script>

        ";
    }

    public function getTemplateName()
    {
        return "LesVirtualMarketBundle:VirtualMarket:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 165,  291 => 164,  267 => 150,  210 => 117,  198 => 108,  185 => 100,  394 => 250,  390 => 249,  380 => 245,  366 => 237,  356 => 233,  349 => 229,  343 => 226,  339 => 225,  328 => 220,  324 => 219,  242 => 144,  236 => 142,  174 => 92,  150 => 96,  65 => 17,  23 => 4,  145 => 36,  20 => 1,  53 => 15,  114 => 52,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 241,  434 => 238,  426 => 234,  419 => 231,  415 => 229,  400 => 253,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 240,  359 => 197,  352 => 194,  348 => 192,  344 => 190,  333 => 222,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  270 => 151,  266 => 148,  259 => 146,  255 => 144,  251 => 141,  249 => 141,  194 => 92,  186 => 88,  184 => 95,  181 => 94,  110 => 78,  70 => 26,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 138,  206 => 110,  90 => 30,  172 => 119,  212 => 134,  146 => 75,  124 => 62,  97 => 68,  477 => 315,  462 => 306,  458 => 305,  454 => 250,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 129,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 130,  191 => 91,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 120,  218 => 119,  161 => 60,  157 => 58,  139 => 79,  152 => 78,  167 => 87,  81 => 24,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 83,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 146,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 5,  137 => 64,  134 => 47,  118 => 56,  83 => 32,  74 => 32,  120 => 60,  77 => 22,  58 => 13,  37 => 8,  253 => 143,  248 => 145,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 27,  96 => 41,  84 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 261,  384 => 246,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 236,  360 => 109,  355 => 195,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 98,  309 => 167,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 158,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 118,  177 => 92,  169 => 88,  140 => 70,  132 => 66,  128 => 64,  111 => 64,  107 => 63,  61 => 27,  273 => 151,  269 => 229,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 140,  227 => 139,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 67,  131 => 7,  119 => 55,  108 => 61,  102 => 42,  71 => 26,  67 => 20,  63 => 16,  59 => 17,  47 => 13,  38 => 7,  94 => 40,  89 => 37,  85 => 32,  79 => 56,  75 => 55,  68 => 29,  56 => 15,  50 => 14,  29 => 6,  87 => 58,  72 => 24,  55 => 16,  21 => 1,  26 => 12,  98 => 41,  93 => 42,  88 => 51,  78 => 28,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 8,  31 => 4,  43 => 9,  41 => 9,  28 => 3,  201 => 92,  196 => 101,  183 => 82,  171 => 132,  166 => 71,  163 => 84,  158 => 81,  156 => 79,  151 => 54,  142 => 35,  138 => 106,  136 => 68,  123 => 56,  121 => 56,  117 => 55,  115 => 65,  105 => 48,  101 => 69,  91 => 59,  69 => 19,  66 => 22,  62 => 21,  49 => 10,  24 => 7,  32 => 7,  25 => 3,  22 => 3,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 128,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 90,  168 => 72,  164 => 117,  162 => 59,  154 => 97,  149 => 70,  147 => 73,  144 => 72,  141 => 65,  133 => 63,  130 => 65,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 50,  103 => 62,  99 => 61,  95 => 60,  92 => 36,  86 => 60,  82 => 34,  80 => 35,  73 => 24,  64 => 20,  60 => 22,  57 => 22,  54 => 12,  51 => 15,  48 => 12,  45 => 9,  42 => 8,  39 => 9,  36 => 6,  33 => 7,  30 => 2,);
    }
}
