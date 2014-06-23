<?php

/* LesCouvertsBundle:Couverts:booking.html.twig */
class __TwigTemplate_f77ed02a2539eb2ca60997babd5a212d3aba10c756b2677d9b980dc433e0d7e9 extends Twig_Template
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
        echo "     \t\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 \t\t\t\t<link rel=\"stylesheet\" href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 \t\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
                    ";
        // line 14
        $this->env->loadTemplate("LesCouvertsBundle:Couverts:Blocks/searchForm.html.twig")->display($context);
        // line 15
        echo "



            <div id=\"main-list-container\">
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) ? $context["restaurants"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 21
            echo "                             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resto_homepage", array("id" => $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "id"))), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t   \t    <div class=\"list-container\">
\t\t\t\t\t\t\t\t \t\t<div class=\"list-cell\" >
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-name\" > ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "name"), "html", null, true);
            echo "</span><br>
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-address\" > ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "address"), "html", null, true);
            echo " </span><br>
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-type\" > ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : null), "cuisine"), "html", null, true);
            echo " </span><br>
\t\t\t\t\t\t\t\t \t\t</div>
\t\t\t\t\t\t\t\t \t</div>
                             </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

\t\t    \t\t</div>






\t\t \t\t";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "639620b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_639620b_0") : $this->env->getExtension('assets')->getAssetUrl("js/639620b_user-perspective_1.js");
            // line 41
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        } else {
            // asset "639620b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_639620b") : $this->env->getExtension('assets')->getAssetUrl("js/639620b.js");
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 43
        echo "
            ";
        // line 45
        echo "
                <script>
                </script>


\t  \t";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts:booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  77 => 26,  58 => 20,  37 => 8,  253 => 141,  248 => 139,  233 => 133,  180 => 85,  165 => 81,  126 => 68,  104 => 57,  100 => 56,  96 => 55,  84 => 52,  76 => 50,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 84,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  131 => 52,  119 => 66,  108 => 58,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 48,  56 => 9,  50 => 10,  29 => 6,  87 => 25,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 72,  136 => 56,  123 => 67,  121 => 46,  117 => 43,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 24,  66 => 15,  62 => 21,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 58,  144 => 73,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 41,  99 => 40,  95 => 28,  92 => 54,  86 => 28,  82 => 22,  80 => 51,  73 => 25,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 15,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
