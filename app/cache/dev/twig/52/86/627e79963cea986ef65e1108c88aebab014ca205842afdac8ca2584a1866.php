<?php

/* LesRestaurantBundle:Restaurant/News:news.html.twig */
class __TwigTemplate_5286627e79963cea986ef65e1108c88aebab014ca205842afdac8ca2584a1866 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/resto-account.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "




             ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 20
            echo "                    <div class=\"news-container\">
                        <div class=\"news-cell\">
                                                    <!-- here have to add logic for image decider -->
                          ";
            // line 23
            if (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "starter")) {
                // line 24
                echo "                            <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/starter.png"), "html", null, true);
                echo "\">
                          ";
            } elseif (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "main")) {
                // line 26
                echo "                            <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/main.png"), "html", null, true);
                echo "\">
                          ";
            } elseif (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "dessert")) {
                // line 28
                echo "                                <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/dessert.png"), "html", null, true);
                echo "\">
                          ";
            }
            // line 30
            echo "                            <div class=\"news-cell-center\">
                                <span class=\"news-title\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "text"), "html", null, true);
            echo "</span><br>
                                <span class=\"news-date\">Since :  <strong> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "dateCreated"), "m-d-Y"), "html", null, true);
            echo " </strong></span>
                            </div>
                        </div>
                    </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
            <!--  ---------------------  -->











            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script>
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Restaurant/News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  114 => 52,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 241,  434 => 238,  426 => 234,  419 => 231,  415 => 229,  400 => 219,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 206,  359 => 197,  352 => 194,  348 => 192,  344 => 190,  333 => 185,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  270 => 150,  266 => 148,  259 => 145,  255 => 143,  251 => 141,  249 => 140,  194 => 92,  186 => 88,  184 => 87,  181 => 86,  110 => 78,  70 => 26,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 195,  206 => 99,  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 68,  477 => 315,  462 => 306,  458 => 305,  454 => 250,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 95,  191 => 91,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  152 => 77,  167 => 78,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 83,  160 => 87,  129 => 100,  315 => 254,  280 => 222,  262 => 146,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 11,  137 => 64,  134 => 47,  118 => 53,  77 => 54,  58 => 20,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 37,  84 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 195,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 84,  169 => 79,  140 => 55,  132 => 49,  128 => 44,  107 => 49,  61 => 27,  273 => 151,  269 => 229,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  119 => 55,  102 => 42,  71 => 33,  67 => 38,  63 => 23,  59 => 16,  38 => 12,  94 => 40,  89 => 32,  85 => 31,  75 => 27,  68 => 23,  56 => 15,  87 => 37,  21 => 2,  26 => 6,  93 => 43,  88 => 51,  78 => 37,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 93,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 72,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  121 => 56,  117 => 55,  105 => 35,  91 => 38,  62 => 23,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 35,  72 => 49,  69 => 32,  47 => 14,  40 => 8,  37 => 8,  22 => 1,  246 => 90,  157 => 58,  145 => 46,  139 => 79,  131 => 60,  123 => 56,  120 => 50,  115 => 50,  111 => 91,  108 => 61,  101 => 42,  98 => 41,  96 => 41,  83 => 60,  74 => 32,  66 => 21,  55 => 18,  52 => 16,  50 => 15,  43 => 13,  41 => 9,  35 => 5,  32 => 7,  29 => 6,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 57,  154 => 110,  149 => 70,  147 => 106,  144 => 59,  141 => 65,  133 => 63,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 45,  99 => 44,  95 => 37,  92 => 51,  86 => 50,  82 => 30,  80 => 35,  73 => 24,  64 => 24,  60 => 22,  57 => 20,  54 => 16,  51 => 15,  48 => 15,  45 => 9,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
