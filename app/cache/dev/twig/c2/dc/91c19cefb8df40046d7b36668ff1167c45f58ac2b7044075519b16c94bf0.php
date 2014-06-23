<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c2dc91c19cefb8df40046d7b36668ff1167c45f58ac2b7044075519b16c94bf0 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  449 => 198,  446 => 197,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  401 => 172,  373 => 156,  361 => 146,  351 => 141,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  275 => 105,  216 => 79,  213 => 78,  178 => 64,  226 => 84,  205 => 111,  295 => 165,  291 => 164,  267 => 101,  210 => 117,  198 => 108,  185 => 75,  394 => 168,  390 => 249,  380 => 160,  366 => 237,  356 => 233,  349 => 229,  343 => 226,  339 => 225,  328 => 220,  324 => 219,  242 => 144,  236 => 142,  174 => 74,  150 => 55,  65 => 19,  23 => 4,  20 => 1,  53 => 12,  114 => 49,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 196,  434 => 238,  426 => 234,  419 => 231,  415 => 180,  400 => 253,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 240,  359 => 197,  352 => 194,  348 => 140,  344 => 190,  333 => 222,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 122,  300 => 121,  296 => 165,  292 => 163,  290 => 162,  270 => 102,  266 => 148,  259 => 146,  255 => 144,  251 => 141,  249 => 141,  194 => 70,  186 => 88,  184 => 95,  181 => 65,  110 => 22,  70 => 19,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 138,  206 => 110,  90 => 27,  172 => 62,  212 => 134,  146 => 75,  124 => 62,  97 => 41,  477 => 315,  462 => 202,  458 => 305,  454 => 250,  439 => 195,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 117,  211 => 154,  197 => 71,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 72,  191 => 77,  127 => 60,  325 => 129,  244 => 121,  237 => 119,  222 => 120,  218 => 119,  161 => 60,  152 => 78,  167 => 71,  81 => 23,  170 => 82,  153 => 69,  113 => 48,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 75,  175 => 83,  160 => 85,  129 => 65,  315 => 125,  280 => 222,  262 => 98,  260 => 205,  256 => 96,  195 => 112,  148 => 80,  34 => 5,  137 => 64,  134 => 54,  118 => 49,  77 => 35,  58 => 17,  253 => 143,  248 => 94,  233 => 87,  180 => 124,  165 => 60,  126 => 48,  104 => 42,  100 => 41,  84 => 24,  76 => 31,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 164,  384 => 246,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 236,  360 => 109,  355 => 143,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 124,  309 => 167,  305 => 95,  298 => 120,  294 => 168,  285 => 89,  283 => 158,  278 => 106,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 90,  229 => 85,  220 => 81,  214 => 118,  177 => 92,  169 => 88,  140 => 70,  132 => 66,  128 => 64,  107 => 49,  61 => 12,  273 => 151,  269 => 229,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 122,  227 => 139,  224 => 71,  221 => 118,  219 => 156,  217 => 75,  208 => 112,  204 => 78,  179 => 93,  159 => 71,  143 => 105,  135 => 62,  119 => 40,  102 => 41,  71 => 33,  67 => 24,  63 => 19,  59 => 14,  38 => 6,  94 => 34,  89 => 28,  85 => 32,  75 => 34,  68 => 24,  56 => 11,  87 => 34,  21 => 1,  26 => 9,  93 => 42,  88 => 31,  78 => 26,  46 => 13,  27 => 3,  44 => 8,  31 => 3,  28 => 3,  201 => 109,  196 => 101,  183 => 82,  171 => 73,  166 => 71,  163 => 84,  158 => 79,  156 => 58,  151 => 54,  142 => 73,  138 => 56,  136 => 68,  121 => 50,  117 => 19,  105 => 34,  91 => 39,  62 => 21,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 56,  72 => 25,  69 => 20,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 93,  157 => 58,  145 => 36,  139 => 63,  131 => 61,  123 => 42,  120 => 20,  115 => 65,  111 => 47,  108 => 19,  101 => 43,  98 => 41,  96 => 37,  83 => 33,  74 => 27,  66 => 22,  55 => 16,  52 => 14,  50 => 14,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 99,  203 => 73,  199 => 67,  193 => 105,  189 => 167,  187 => 99,  182 => 98,  176 => 63,  173 => 90,  168 => 61,  164 => 70,  162 => 59,  154 => 82,  149 => 78,  147 => 54,  144 => 72,  141 => 51,  133 => 65,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 51,  109 => 83,  106 => 45,  103 => 62,  99 => 31,  95 => 60,  92 => 35,  86 => 37,  82 => 28,  80 => 32,  73 => 20,  64 => 23,  60 => 22,  57 => 12,  54 => 16,  51 => 15,  48 => 9,  45 => 10,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}