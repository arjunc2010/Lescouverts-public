<?php

/* ::qlayout.html.twig */
class __TwigTemplate_a23de39b2388fe0d56faae59fe223c0a9a9da4eff7ebaf2f804e5b3bf5663cb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "

<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <title> ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
 </head>


 <style type=\"text/css\">

     /* Sticky footer styles
     -------------------------------------------------- */

     html,
     body {
         height: 100%;
         /* The html and body elements cannot have any padding or margin. */
     }

     /* Wrapper for page content to push down footer */
     #wrap {
         min-height: 100%;
         height: auto !important;
         height: 100%;
         /* Negative indent footer by it's height */
         margin: 0 auto -60px;
     }

     /* Set the fixed height of the footer here */
     #push,
     #footer {
         height: 60px;
     }
     #footer {
         background-color: #f5f5f5;
     }

     /* Lastly, apply responsive CSS fixes as necessary */
     @media (max-width: 767px) {
         #footer {
             margin-left: -20px;
             margin-right: -20px;
             padding-left: 20px;
             padding-right: 20px;
         }
     }



     /* Custom page CSS
     -------------------------------------------------- */
     /* Not required for template or sticky footer method. */

     .body-container {
         width: auto;
         max-width: 680px;
     }
     .body-container .credit {
         margin: 20px 0;
     }

 </style>

  <body>

  <!-- Part 1: Wrap all page content here -->
  <div id=\"wrap\">


      <!-- Begin page content -->
      <div class=\"body-container\">


      <div id=\"homepageBody\">
        <div id=\"lescouverts-img-container\">

                  <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("lescouverts_homepage");
        echo "\">
                        <img id=\"img-lescouverts\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/logo.png"), "html", null, true);
        echo "\" />
                  </a>

                ";
        // line 90
        echo "                    ";
        // line 91
        echo "                ";
        // line 92
        echo "
             ";
        // line 93
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 94
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    <img id=\"img-power\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/PowerIcon.gif"), "html", null, true);
            echo "\" />
                </a>
            ";
        } else {
            // line 98
            echo "
                <a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    <img id=\"img-power\" src=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/PowerIcon.gif"), "html", null, true);
            echo "\" />
                </a>


                <a href=\"";
            // line 104
            echo $this->env->getExtension('routing')->getPath("booking_a_table");
            echo "\">
                    <img id=\"img-power\" src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/PowerIcon.gif"), "html", null, true);
            echo "\" />
                </a>

           ";
        }
        // line 109
        echo "
        </div>

                  ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "           

            ";
        // line 117
        echo "                       ";
        // line 118
        echo "                    ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                ";
        // line 122
        echo "                ";
        // line 123
        echo "
              ";
        // line 125
        echo "
             ";
        // line 127
        echo "


              </div>

              <div id=\"push\"></div>
          </div>


          <div id=\"footer\">
              <div class=\"container\">
                  <p class=\"muted credit\">Example courtesy <a href=\"http://martinbean.co.uk\">Martin Bean</a> and <a href=\"http://ryanfait.com/sticky-footer/\">Ryan Fait</a>.</p>
              </div>
          </div>

  </body>


";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " lescouverts ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "  <link rel=\"stylesheet\" href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/frame-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        // line 113
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "::qlayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 11,  226 => 121,  205 => 111,  295 => 165,  291 => 164,  267 => 150,  210 => 117,  198 => 108,  185 => 120,  394 => 250,  390 => 249,  380 => 245,  366 => 237,  356 => 233,  349 => 229,  343 => 226,  339 => 225,  328 => 220,  324 => 219,  242 => 144,  236 => 142,  174 => 92,  150 => 100,  65 => 19,  23 => 1,  145 => 36,  20 => 1,  53 => 5,  114 => 49,  889 => 518,  853 => 485,  849 => 484,  845 => 483,  841 => 482,  834 => 477,  832 => 476,  827 => 472,  819 => 465,  817 => 464,  808 => 457,  801 => 451,  796 => 448,  786 => 444,  782 => 443,  778 => 442,  774 => 440,  770 => 439,  765 => 436,  763 => 435,  758 => 432,  748 => 424,  744 => 422,  733 => 413,  729 => 411,  725 => 409,  714 => 401,  708 => 398,  695 => 388,  689 => 385,  678 => 377,  672 => 374,  661 => 366,  655 => 363,  645 => 356,  639 => 353,  633 => 349,  624 => 341,  619 => 337,  610 => 335,  606 => 334,  598 => 328,  589 => 326,  585 => 325,  576 => 318,  572 => 316,  568 => 314,  566 => 313,  554 => 306,  542 => 299,  529 => 288,  525 => 286,  521 => 284,  519 => 283,  516 => 282,  512 => 280,  508 => 278,  505 => 277,  501 => 275,  497 => 273,  495 => 272,  486 => 265,  482 => 263,  478 => 261,  475 => 260,  471 => 258,  467 => 256,  464 => 255,  460 => 253,  456 => 251,  445 => 243,  441 => 241,  434 => 238,  426 => 234,  419 => 231,  415 => 229,  400 => 253,  396 => 217,  389 => 214,  385 => 212,  382 => 211,  378 => 209,  372 => 240,  359 => 197,  352 => 194,  348 => 192,  344 => 190,  333 => 222,  331 => 184,  318 => 175,  311 => 172,  307 => 170,  303 => 168,  300 => 167,  296 => 165,  292 => 163,  290 => 162,  270 => 151,  266 => 148,  259 => 146,  255 => 144,  251 => 141,  249 => 141,  194 => 125,  186 => 88,  184 => 95,  181 => 118,  110 => 78,  70 => 26,  281 => 155,  277 => 153,  265 => 228,  261 => 227,  223 => 138,  206 => 110,  90 => 30,  172 => 119,  212 => 134,  146 => 99,  124 => 62,  97 => 68,  477 => 315,  462 => 306,  458 => 305,  454 => 250,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 221,  369 => 249,  363 => 199,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 10,  215 => 117,  211 => 154,  197 => 127,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 130,  191 => 123,  127 => 92,  325 => 196,  244 => 121,  237 => 119,  222 => 120,  218 => 119,  161 => 105,  157 => 104,  139 => 79,  152 => 78,  167 => 81,  81 => 24,  170 => 82,  153 => 79,  113 => 85,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 114,  160 => 85,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 146,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 5,  137 => 95,  134 => 47,  118 => 57,  83 => 31,  74 => 32,  120 => 60,  77 => 35,  58 => 13,  37 => 10,  253 => 143,  248 => 145,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 42,  100 => 41,  96 => 41,  84 => 36,  76 => 28,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 239,  435 => 146,  430 => 236,  427 => 286,  423 => 233,  413 => 228,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 216,  387 => 261,  384 => 246,  381 => 258,  379 => 119,  374 => 207,  368 => 112,  365 => 111,  362 => 236,  360 => 109,  355 => 195,  341 => 189,  337 => 187,  322 => 177,  314 => 173,  312 => 98,  309 => 167,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 158,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 130,  229 => 160,  220 => 70,  214 => 118,  177 => 92,  169 => 88,  140 => 70,  132 => 94,  128 => 64,  111 => 64,  107 => 49,  61 => 20,  273 => 151,  269 => 229,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 113,  235 => 112,  230 => 122,  227 => 139,  224 => 71,  221 => 118,  219 => 9,  217 => 75,  208 => 112,  204 => 107,  179 => 117,  159 => 71,  143 => 98,  135 => 67,  131 => 7,  119 => 55,  108 => 61,  102 => 42,  71 => 33,  67 => 20,  63 => 16,  59 => 6,  47 => 12,  38 => 7,  94 => 40,  89 => 28,  85 => 32,  79 => 56,  75 => 34,  68 => 24,  56 => 15,  50 => 14,  29 => 5,  87 => 33,  72 => 25,  55 => 17,  21 => 1,  26 => 12,  98 => 41,  93 => 42,  88 => 51,  78 => 28,  46 => 14,  27 => 5,  40 => 11,  44 => 11,  35 => 7,  31 => 4,  43 => 9,  41 => 9,  28 => 3,  201 => 109,  196 => 101,  183 => 119,  171 => 90,  166 => 71,  163 => 84,  158 => 81,  156 => 83,  151 => 54,  142 => 73,  138 => 106,  136 => 68,  123 => 90,  121 => 56,  117 => 86,  115 => 65,  105 => 48,  101 => 69,  91 => 39,  69 => 11,  66 => 22,  62 => 21,  49 => 10,  24 => 7,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 105,  189 => 122,  187 => 121,  182 => 98,  176 => 64,  173 => 112,  168 => 109,  164 => 87,  162 => 59,  154 => 82,  149 => 78,  147 => 73,  144 => 72,  141 => 65,  133 => 65,  130 => 93,  125 => 91,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 50,  103 => 62,  99 => 61,  95 => 60,  92 => 35,  86 => 37,  82 => 36,  80 => 35,  73 => 24,  64 => 10,  60 => 22,  57 => 17,  54 => 16,  51 => 15,  48 => 12,  45 => 9,  42 => 10,  39 => 13,  36 => 6,  33 => 9,  30 => 2,);
    }
}
