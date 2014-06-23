<?php

/* LesRestaurantBundle:Admin/News/Blocks:newsUploadForm.html.twig */
class __TwigTemplate_299317894e234014fdde66b5545c53e0fbe030d92904a28dd6a31a70068e6dda extends Twig_Template
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
        echo "<style>

    input[type='file']{
        height: 33px;
        width: 300px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-color: rgb(116,132,255);
        background-color: rgb(116,132,255);
        border-style: double;
        border-radius: 5px;
        margin-top:10px;
    }

    button[type='submit']{
        height: 33px;
        width: 94px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-style: double;
        border-radius: 5px;
        cursor: pointer;
        margin-top:10px;
        border-color: rgb(200,191,231);
        background-color: rgb(200,191,231);
    }

</style>


    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "file"), 'widget');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "upload"), 'widget');
        echo "
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/News/Blocks:newsUploadForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 58,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 131,  81 => 32,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 172,  195 => 112,  148 => 110,  34 => 11,  137 => 48,  134 => 47,  118 => 59,  83 => 38,  74 => 32,  120 => 50,  77 => 30,  58 => 20,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 138,  165 => 125,  126 => 107,  104 => 60,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 70,  128 => 44,  111 => 46,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 122,  143 => 111,  135 => 109,  131 => 108,  119 => 58,  108 => 61,  102 => 43,  71 => 27,  67 => 38,  63 => 37,  59 => 36,  47 => 14,  38 => 12,  94 => 40,  89 => 37,  85 => 28,  79 => 29,  75 => 27,  68 => 39,  56 => 19,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 35,  21 => 2,  26 => 6,  98 => 41,  93 => 35,  88 => 51,  78 => 37,  46 => 12,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 11,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 61,  158 => 114,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 49,  115 => 64,  105 => 35,  101 => 59,  91 => 27,  69 => 31,  66 => 23,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 144,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 91,  149 => 76,  147 => 113,  144 => 50,  141 => 69,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 40,  112 => 49,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 32,  92 => 30,  86 => 50,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
