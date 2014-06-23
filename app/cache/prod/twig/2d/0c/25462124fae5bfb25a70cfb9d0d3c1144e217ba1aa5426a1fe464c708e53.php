<?php

/* LesCouvertsBundle:Featured:featured.html.twig */
class __TwigTemplate_2d0c25462124fae5bfb25a70cfb9d0d3c1144e217ba1aa5426a1fe464c708e53 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/lescouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "            <style>
                .list-rank{
                    position:absolute;
                    right:40px;
                    top: 50px;
                }

            </style>
            <div id=\"main-list-container\">
          ";
        // line 22
        $context["i"] = 1;
        // line 23
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restos"]) ? $context["restos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resto_homepage", array("id" => $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "id"))), "html", null, true);
            echo "\" >
                            <div class=\"list-container\">
                                <div class=\"list-cell\" >
                                    <span class=\"list-cell-data-name\" > ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "name"), "html", null, true);
            echo "</span><br>
                                    <span class=\"list-cell-data-address\" > ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "address"), "html", null, true);
            echo " </span><br>
                                    <span class=\"list-cell-data-type\" > ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "cuisine"), "html", null, true);
            echo " </span><br>
                                </div>
                                <span class=\"list-rank\">
                                    ";
            // line 32
            if (((isset($context["i"]) ? $context["i"] : null) < 3)) {
                // line 33
                echo "                                        Rank :  ";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "
                                    ";
            }
            // line 35
            echo "                                </span>
                            </div>
                        </a>
                ";
            // line 38
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 39
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </div>

        ";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Featured:featured.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 121,  175 => 96,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 114,  34 => 11,  137 => 11,  134 => 10,  118 => 59,  83 => 36,  74 => 32,  120 => 45,  77 => 26,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 68,  104 => 57,  100 => 39,  96 => 55,  84 => 52,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 131,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 68,  204 => 72,  179 => 98,  159 => 122,  143 => 73,  135 => 53,  131 => 52,  119 => 58,  108 => 51,  102 => 47,  71 => 27,  67 => 30,  63 => 22,  59 => 23,  47 => 9,  38 => 12,  94 => 28,  89 => 37,  85 => 32,  79 => 29,  75 => 28,  68 => 24,  56 => 18,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 38,  93 => 35,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 106,  136 => 105,  123 => 67,  121 => 46,  117 => 43,  115 => 57,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 23,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 66,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 40,  103 => 41,  99 => 44,  95 => 42,  92 => 54,  86 => 28,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 20,  57 => 22,  54 => 17,  51 => 15,  48 => 14,  45 => 8,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
