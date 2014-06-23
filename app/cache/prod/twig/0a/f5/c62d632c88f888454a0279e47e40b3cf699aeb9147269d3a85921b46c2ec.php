<?php

/* LesRestaurantBundle:Admin/Ranking:myRanking.html.twig */
class __TwigTemplate_0af5c62d632c88f888454a0279e47e40b3cf699aeb9147269d3a85921b46c2ec extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/restaurant-homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
            <style>
                .list-rank{
                    position:absolute;
                    right:40px;
                    top: 50px;
                }

            </style>
        ";
        // line 27
        echo "

            <div id=\"main-list-container\">
                ";
        // line 30
        $context["i"] = 1;
        // line 31
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restos"]) ? $context["restos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 32
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resto_homepage", array("id" => $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "id"))), "html", null, true);
            echo "\" >
                        <div class=\"list-container\"
                                ";
            // line 34
            if (($this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "id") == (isset($context["id"]) ? $context["id"] : null))) {
                // line 35
                echo "                                    id=\"target-division\"
                                    style=\"
                                        border-style: solid;
                                        border-color: red;
                                     \"
                                ";
            }
            // line 41
            echo "                        >
                            <div class=\"list-cell\" >
                                <span class=\"list-cell-data-name\" > ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "name"), "html", null, true);
            echo "</span><br>
                                <span class=\"list-cell-data-address\" > ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "address"), "html", null, true);
            echo " </span><br>
                                <span class=\"list-cell-data-type\" > ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "cuisine"), "html", null, true);
            echo " </span><br>
                            </div>
                                <span class=\"list-rank\">
                                    ";
            // line 49
            echo "                                        Rank :  ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "
                                    ";
            // line 51
            echo "                                </span>
                        </div>
                    </a>
                    ";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>



            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>

            <script>
                \$(document).ready( function(){
                            \$('html, body').animate({scrollTop : \$('#target-division').position().top - 300 });


                            return false;
                        }
                );
            </script>


        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/Ranking:myRanking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 44,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 131,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 172,  195 => 112,  148 => 110,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  83 => 33,  74 => 32,  120 => 50,  77 => 30,  58 => 20,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  111 => 91,  107 => 49,  61 => 27,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  131 => 60,  119 => 55,  108 => 61,  102 => 43,  71 => 27,  67 => 38,  63 => 23,  59 => 36,  47 => 14,  38 => 12,  94 => 40,  89 => 41,  85 => 28,  79 => 34,  75 => 27,  68 => 31,  56 => 19,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 35,  21 => 2,  26 => 6,  98 => 41,  93 => 43,  88 => 51,  78 => 37,  46 => 12,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 11,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 54,  115 => 92,  105 => 35,  101 => 45,  91 => 27,  69 => 29,  66 => 30,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 95,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 37,  92 => 30,  86 => 50,  82 => 22,  80 => 31,  73 => 32,  64 => 27,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
