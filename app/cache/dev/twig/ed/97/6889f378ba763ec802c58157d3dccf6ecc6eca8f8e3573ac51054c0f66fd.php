<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_ed976889f378ba763ec802c58157d3dccf6ecc6eca8f8e3573ac51054c0f66fd extends Twig_Template
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
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  792 => 488,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  694 => 470,  690 => 469,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  620 => 451,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  522 => 406,  517 => 404,  202 => 94,  386 => 159,  367 => 155,  358 => 151,  345 => 147,  326 => 138,  321 => 135,  302 => 125,  288 => 118,  403 => 136,  391 => 133,  377 => 129,  371 => 156,  353 => 149,  350 => 120,  347 => 119,  313 => 110,  308 => 109,  234 => 90,  232 => 88,  155 => 47,  1077 => 657,  1073 => 656,  1069 => 654,  1064 => 651,  1055 => 648,  1051 => 647,  1048 => 646,  1044 => 645,  1035 => 639,  1026 => 633,  1023 => 632,  1021 => 631,  1018 => 630,  1013 => 627,  1004 => 624,  1000 => 623,  997 => 622,  993 => 621,  984 => 615,  975 => 609,  972 => 608,  970 => 607,  967 => 606,  963 => 604,  959 => 602,  955 => 600,  947 => 597,  941 => 595,  937 => 593,  935 => 592,  930 => 590,  926 => 589,  923 => 588,  919 => 587,  911 => 581,  909 => 580,  905 => 579,  896 => 573,  893 => 572,  891 => 571,  888 => 570,  884 => 568,  880 => 566,  874 => 562,  870 => 560,  864 => 558,  862 => 557,  854 => 552,  848 => 548,  844 => 546,  838 => 544,  836 => 543,  830 => 539,  828 => 538,  824 => 537,  815 => 531,  812 => 530,  810 => 492,  807 => 491,  800 => 523,  790 => 519,  788 => 486,  780 => 513,  764 => 505,  762 => 504,  754 => 499,  745 => 493,  742 => 492,  740 => 491,  737 => 490,  732 => 487,  724 => 484,  718 => 482,  705 => 480,  702 => 472,  698 => 471,  696 => 476,  692 => 474,  686 => 468,  682 => 467,  676 => 467,  671 => 465,  668 => 464,  664 => 463,  646 => 451,  642 => 449,  640 => 448,  636 => 446,  628 => 444,  626 => 443,  622 => 452,  616 => 440,  603 => 439,  591 => 436,  587 => 434,  578 => 432,  574 => 431,  565 => 430,  563 => 429,  559 => 427,  553 => 425,  551 => 424,  546 => 423,  536 => 419,  534 => 418,  530 => 417,  527 => 408,  514 => 415,  297 => 200,  276 => 111,  188 => 90,  449 => 198,  446 => 197,  431 => 189,  429 => 188,  422 => 184,  408 => 176,  401 => 135,  373 => 156,  361 => 152,  351 => 141,  342 => 137,  338 => 116,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  289 => 196,  286 => 112,  275 => 105,  216 => 79,  213 => 78,  178 => 59,  226 => 84,  205 => 111,  295 => 165,  291 => 164,  267 => 101,  210 => 77,  198 => 108,  185 => 75,  394 => 134,  390 => 249,  380 => 158,  366 => 237,  356 => 122,  349 => 229,  343 => 146,  339 => 225,  328 => 139,  324 => 112,  242 => 144,  236 => 142,  174 => 74,  150 => 55,  65 => 11,  23 => 4,  20 => 1,  53 => 15,  114 => 36,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 489,  786 => 444,  782 => 443,  778 => 442,  774 => 509,  770 => 507,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 468,  672 => 374,  661 => 366,  655 => 457,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 449,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 421,  529 => 409,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 196,  434 => 238,  426 => 234,  419 => 231,  415 => 180,  400 => 253,  396 => 217,  389 => 160,  385 => 212,  382 => 131,  378 => 157,  372 => 240,  359 => 123,  352 => 194,  348 => 140,  344 => 190,  333 => 115,  331 => 140,  318 => 175,  311 => 172,  307 => 128,  303 => 122,  300 => 121,  296 => 121,  292 => 163,  290 => 119,  270 => 102,  266 => 148,  259 => 103,  255 => 101,  251 => 182,  249 => 92,  194 => 68,  186 => 72,  184 => 63,  181 => 65,  110 => 22,  70 => 24,  281 => 114,  277 => 153,  265 => 105,  261 => 227,  223 => 138,  206 => 110,  90 => 42,  172 => 57,  212 => 134,  146 => 75,  124 => 62,  97 => 41,  477 => 315,  462 => 202,  458 => 305,  454 => 250,  439 => 195,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 153,  357 => 243,  346 => 235,  340 => 145,  334 => 141,  316 => 217,  310 => 214,  299 => 206,  293 => 120,  225 => 159,  215 => 117,  211 => 154,  197 => 69,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 72,  191 => 67,  127 => 35,  325 => 129,  244 => 121,  237 => 91,  222 => 83,  218 => 119,  161 => 58,  152 => 46,  167 => 71,  81 => 23,  170 => 84,  153 => 77,  113 => 48,  274 => 110,  271 => 190,  257 => 159,  231 => 139,  207 => 76,  175 => 58,  160 => 85,  129 => 65,  315 => 131,  280 => 194,  262 => 93,  260 => 205,  256 => 96,  195 => 112,  148 => 80,  34 => 5,  137 => 64,  134 => 39,  118 => 49,  77 => 20,  58 => 18,  253 => 100,  248 => 97,  233 => 87,  180 => 70,  165 => 83,  126 => 48,  104 => 31,  100 => 41,  84 => 27,  76 => 27,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 141,  409 => 132,  407 => 138,  402 => 130,  398 => 129,  393 => 216,  387 => 164,  384 => 246,  381 => 258,  379 => 119,  374 => 128,  368 => 126,  365 => 125,  362 => 124,  360 => 109,  355 => 150,  341 => 117,  337 => 187,  322 => 177,  314 => 173,  312 => 130,  309 => 129,  305 => 108,  298 => 120,  294 => 168,  285 => 100,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 187,  252 => 171,  247 => 169,  241 => 93,  229 => 87,  220 => 81,  214 => 118,  177 => 69,  169 => 88,  140 => 70,  132 => 66,  128 => 42,  107 => 49,  61 => 12,  273 => 151,  269 => 107,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 89,  230 => 122,  227 => 86,  224 => 71,  221 => 80,  219 => 156,  217 => 75,  208 => 76,  204 => 75,  179 => 93,  159 => 57,  143 => 105,  135 => 46,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 11,  87 => 32,  21 => 1,  26 => 6,  93 => 27,  88 => 24,  78 => 18,  46 => 12,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 74,  196 => 92,  183 => 71,  171 => 73,  166 => 54,  163 => 82,  158 => 80,  156 => 58,  151 => 54,  142 => 73,  138 => 47,  136 => 71,  121 => 50,  117 => 37,  105 => 25,  91 => 25,  62 => 27,  49 => 14,  24 => 7,  25 => 35,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 21,  40 => 6,  37 => 7,  22 => 3,  246 => 136,  157 => 58,  145 => 74,  139 => 63,  131 => 61,  123 => 61,  120 => 31,  115 => 65,  111 => 47,  108 => 33,  101 => 30,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 22,  55 => 15,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 9,  32 => 4,  29 => 3,  209 => 99,  203 => 73,  199 => 93,  193 => 105,  189 => 66,  187 => 99,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 82,  149 => 78,  147 => 75,  144 => 42,  141 => 73,  133 => 45,  130 => 46,  125 => 41,  122 => 43,  116 => 57,  112 => 51,  109 => 52,  106 => 51,  103 => 62,  99 => 23,  95 => 34,  92 => 28,  86 => 37,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
