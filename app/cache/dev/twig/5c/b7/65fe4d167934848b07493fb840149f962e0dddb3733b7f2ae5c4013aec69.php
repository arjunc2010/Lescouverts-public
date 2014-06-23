<?php

/* LesRestaurantBundle:Restaurant/Events:events.html.twig */
class __TwigTemplate_5cb765fe4d167934848b07493fb840149f962e0dddb3733b7f2ae5c4013aec69 extends Twig_Template
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
            <div>
                <div class=\"e-list-container\">
                    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 18
            echo "
                            <div class=\"e-list-cell\">
                                <div class=\"e-list-cell-left\">
                                    <span class=\"e-list-cell-data-name\" > ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
            echo " </span><br>
                                    <span class=\"e-list-cell-data-event\" > <strong> ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "m-d-y"), "html", null, true);
            echo " </strong> </span>
                                    <span class=\"e-list-cell-data-event\" > From ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start"), "H:m"), "html", null, true);
            echo " till ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "end"), "H:m"), "html", null, true);
            echo " </span>

                                    <br>
                                    <div class=\"e-list-cell-data-description\" > ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
            echo "  </div>
                                </div>
                                <div class=\"e-list-cell-right\">
                                    <form>
                                        <input type=\"submit\" name=\"upload\" value=\"Menu\" />
                                    </form>
                                </div>
                            </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </div>

            </div>







            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script>
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Restaurant/Events:events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 232,  277 => 231,  265 => 228,  261 => 227,  223 => 195,  206 => 181,  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 44,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  152 => 77,  167 => 131,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 225,  195 => 112,  148 => 80,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  77 => 30,  58 => 20,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  84 => 29,  76 => 26,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  107 => 49,  61 => 27,  273 => 230,  269 => 229,  254 => 202,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  119 => 55,  102 => 43,  71 => 27,  67 => 38,  63 => 23,  59 => 18,  38 => 12,  94 => 52,  89 => 41,  85 => 28,  75 => 27,  68 => 23,  56 => 19,  87 => 33,  21 => 2,  26 => 6,  93 => 43,  88 => 51,  78 => 37,  46 => 14,  27 => 4,  44 => 12,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  121 => 56,  117 => 55,  105 => 35,  91 => 35,  62 => 19,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 34,  72 => 49,  69 => 29,  47 => 14,  40 => 8,  37 => 8,  22 => 1,  246 => 90,  157 => 58,  145 => 46,  139 => 79,  131 => 60,  123 => 43,  120 => 50,  115 => 92,  111 => 91,  108 => 61,  101 => 45,  98 => 41,  96 => 55,  83 => 33,  74 => 32,  66 => 21,  55 => 18,  52 => 16,  50 => 15,  43 => 13,  41 => 9,  35 => 5,  32 => 7,  29 => 6,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 167,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 57,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 45,  99 => 44,  95 => 37,  92 => 51,  86 => 50,  82 => 28,  80 => 31,  73 => 24,  64 => 22,  60 => 21,  57 => 22,  54 => 16,  51 => 17,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
