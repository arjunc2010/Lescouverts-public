<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_deb81d0dc475cc81bfadb65b3898e1c532439bc2b5a21ac617652ab58e7d2aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1402 => 419,  1396 => 417,  1390 => 415,  1388 => 414,  1386 => 413,  1382 => 412,  1373 => 411,  1371 => 410,  1368 => 409,  1355 => 403,  1349 => 401,  1343 => 399,  1341 => 398,  1339 => 397,  1335 => 396,  1329 => 395,  1327 => 394,  1324 => 393,  1311 => 387,  1305 => 385,  1299 => 383,  1297 => 382,  1295 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1056 => 293,  1053 => 292,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  964 => 255,  961 => 254,  958 => 253,  952 => 251,  950 => 250,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  860 => 211,  857 => 210,  846 => 205,  833 => 199,  825 => 196,  814 => 191,  809 => 189,  798 => 184,  793 => 182,  785 => 178,  783 => 177,  772 => 172,  769 => 171,  767 => 170,  756 => 165,  753 => 164,  751 => 163,  739 => 156,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  699 => 142,  697 => 141,  683 => 135,  680 => 134,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  617 => 112,  614 => 111,  596 => 106,  593 => 105,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  524 => 90,  515 => 85,  509 => 83,  503 => 81,  496 => 79,  493 => 78,  490 => 77,  470 => 73,  459 => 69,  450 => 64,  442 => 62,  428 => 59,  414 => 52,  405 => 49,  388 => 42,  332 => 20,  250 => 341,  245 => 335,  306 => 286,  792 => 488,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  710 => 149,  706 => 473,  694 => 138,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 122,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 266,  386 => 159,  367 => 339,  358 => 151,  345 => 147,  326 => 138,  321 => 135,  302 => 125,  288 => 4,  403 => 48,  391 => 133,  377 => 37,  371 => 35,  353 => 328,  350 => 26,  347 => 119,  313 => 15,  308 => 13,  234 => 90,  232 => 88,  155 => 47,  1077 => 305,  1073 => 656,  1069 => 654,  1064 => 298,  1055 => 648,  1051 => 291,  1048 => 290,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 266,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 257,  967 => 256,  963 => 604,  959 => 602,  955 => 252,  947 => 249,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 236,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 212,  854 => 552,  848 => 548,  844 => 204,  838 => 544,  836 => 543,  830 => 198,  828 => 197,  824 => 537,  815 => 531,  812 => 190,  810 => 492,  807 => 491,  800 => 523,  790 => 519,  788 => 486,  780 => 176,  764 => 169,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 154,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 140,  692 => 474,  686 => 468,  682 => 467,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  646 => 451,  642 => 449,  640 => 119,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  536 => 419,  534 => 418,  530 => 417,  527 => 91,  514 => 415,  297 => 200,  276 => 393,  188 => 90,  449 => 198,  446 => 197,  431 => 189,  429 => 188,  422 => 184,  408 => 50,  401 => 135,  373 => 156,  361 => 152,  351 => 141,  342 => 23,  338 => 116,  335 => 21,  329 => 131,  323 => 128,  320 => 127,  289 => 196,  286 => 112,  275 => 105,  216 => 79,  213 => 78,  178 => 59,  226 => 84,  205 => 111,  295 => 165,  291 => 164,  267 => 101,  210 => 270,  198 => 108,  185 => 75,  394 => 134,  390 => 43,  380 => 158,  366 => 33,  356 => 122,  349 => 229,  343 => 146,  339 => 225,  328 => 139,  324 => 112,  242 => 144,  236 => 142,  174 => 217,  150 => 55,  65 => 17,  23 => 4,  20 => 1,  53 => 11,  114 => 111,  889 => 224,  853 => 485,  849 => 206,  845 => 483,  841 => 203,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 192,  808 => 457,  801 => 185,  796 => 183,  786 => 444,  782 => 443,  778 => 442,  774 => 509,  770 => 507,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 155,  725 => 409,  714 => 401,  708 => 398,  695 => 139,  689 => 137,  678 => 133,  672 => 374,  661 => 366,  655 => 457,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 113,  610 => 335,  606 => 449,  598 => 107,  589 => 326,  585 => 325,  576 => 101,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 421,  529 => 92,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 84,  508 => 278,  505 => 277,  501 => 80,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 74,  475 => 260,  471 => 258,  467 => 72,  464 => 71,  460 => 253,  456 => 68,  445 => 243,  441 => 196,  434 => 238,  426 => 58,  419 => 231,  415 => 180,  400 => 47,  396 => 217,  389 => 160,  385 => 41,  382 => 131,  378 => 157,  372 => 240,  359 => 123,  352 => 194,  348 => 140,  344 => 24,  333 => 115,  331 => 140,  318 => 175,  311 => 14,  307 => 128,  303 => 122,  300 => 121,  296 => 121,  292 => 163,  290 => 5,  270 => 102,  266 => 366,  259 => 103,  255 => 353,  251 => 182,  249 => 92,  194 => 248,  186 => 239,  184 => 233,  181 => 232,  110 => 38,  70 => 19,  281 => 409,  277 => 153,  265 => 105,  261 => 227,  223 => 138,  206 => 110,  90 => 27,  172 => 57,  212 => 279,  146 => 181,  124 => 132,  97 => 41,  477 => 315,  462 => 202,  458 => 305,  454 => 250,  439 => 195,  433 => 60,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 32,  357 => 243,  346 => 235,  340 => 145,  334 => 141,  316 => 16,  310 => 214,  299 => 8,  293 => 6,  225 => 298,  215 => 280,  211 => 154,  197 => 249,  304 => 169,  301 => 168,  287 => 200,  263 => 365,  200 => 72,  191 => 246,  127 => 35,  325 => 129,  244 => 121,  237 => 91,  222 => 297,  218 => 119,  161 => 202,  152 => 46,  167 => 71,  81 => 30,  170 => 84,  153 => 77,  113 => 40,  274 => 110,  271 => 374,  257 => 159,  231 => 139,  207 => 269,  175 => 58,  160 => 85,  129 => 148,  315 => 131,  280 => 194,  262 => 93,  260 => 363,  256 => 96,  195 => 112,  148 => 80,  34 => 4,  137 => 64,  134 => 161,  118 => 49,  77 => 25,  58 => 15,  253 => 342,  248 => 336,  233 => 304,  180 => 70,  165 => 83,  126 => 147,  104 => 90,  100 => 36,  84 => 41,  76 => 31,  480 => 75,  474 => 161,  469 => 310,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 236,  427 => 286,  423 => 57,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 216,  387 => 164,  384 => 246,  381 => 258,  379 => 119,  374 => 36,  368 => 34,  365 => 125,  362 => 124,  360 => 109,  355 => 27,  341 => 117,  337 => 22,  322 => 177,  314 => 173,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 168,  285 => 3,  283 => 115,  278 => 408,  268 => 373,  264 => 84,  258 => 354,  252 => 171,  247 => 169,  241 => 93,  229 => 87,  220 => 290,  214 => 118,  177 => 69,  169 => 210,  140 => 70,  132 => 66,  128 => 42,  107 => 37,  61 => 2,  273 => 392,  269 => 107,  254 => 202,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 80,  219 => 156,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 105,  135 => 46,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 73,  138 => 47,  136 => 168,  121 => 131,  117 => 37,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 35,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 58,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 99,  203 => 73,  199 => 265,  193 => 105,  189 => 240,  187 => 99,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 62,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}