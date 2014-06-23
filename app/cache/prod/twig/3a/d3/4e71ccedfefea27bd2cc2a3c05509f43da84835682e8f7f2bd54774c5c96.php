<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_3ad34e71ccedfefea27bd2cc2a3c05509f43da84835682e8f7f2bd54774c5c96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HWIOAuthBundle::layout.html.twig");

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user"), "username")), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  23 => 4,  145 => 36,  20 => 1,  53 => 11,  114 => 52,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 241,  434 => 238,  426 => 234,  419 => 231,  415 => 229,  400 => 219,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 206,  359 => 197,  352 => 194,  348 => 192,  344 => 190,  333 => 185,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  270 => 150,  266 => 148,  259 => 145,  255 => 143,  251 => 141,  249 => 140,  194 => 92,  186 => 88,  184 => 87,  181 => 86,  110 => 78,  70 => 26,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 195,  206 => 99,  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 68,  477 => 315,  462 => 306,  458 => 305,  454 => 250,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 95,  191 => 91,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 78,  81 => 24,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 83,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 146,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 5,  137 => 64,  134 => 47,  118 => 53,  83 => 33,  74 => 32,  120 => 50,  77 => 22,  58 => 13,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 27,  96 => 41,  84 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 195,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 84,  169 => 79,  140 => 55,  132 => 49,  128 => 6,  111 => 91,  107 => 72,  61 => 27,  273 => 151,  269 => 229,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  131 => 7,  119 => 55,  108 => 61,  102 => 42,  71 => 19,  67 => 20,  63 => 16,  59 => 16,  47 => 9,  38 => 7,  94 => 65,  89 => 37,  85 => 32,  79 => 35,  75 => 27,  68 => 29,  56 => 15,  50 => 15,  29 => 8,  87 => 35,  72 => 25,  55 => 18,  21 => 1,  26 => 12,  98 => 41,  93 => 29,  88 => 51,  78 => 28,  46 => 14,  27 => 5,  40 => 11,  44 => 8,  35 => 8,  31 => 4,  43 => 9,  41 => 9,  28 => 3,  201 => 92,  196 => 93,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 72,  151 => 54,  142 => 35,  138 => 106,  136 => 8,  123 => 56,  121 => 56,  117 => 55,  115 => 50,  105 => 35,  101 => 69,  91 => 27,  69 => 19,  66 => 21,  62 => 19,  49 => 10,  24 => 7,  32 => 7,  25 => 3,  22 => 3,  19 => 2,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 110,  149 => 70,  147 => 106,  144 => 59,  141 => 65,  133 => 63,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 28,  99 => 45,  95 => 37,  92 => 36,  86 => 60,  82 => 30,  80 => 35,  73 => 24,  64 => 20,  60 => 22,  57 => 22,  54 => 12,  51 => 15,  48 => 12,  45 => 9,  42 => 8,  39 => 9,  36 => 6,  33 => 7,  30 => 2,);
    }
}
