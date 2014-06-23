<?php

/* LesCouvertsBundle:Couverts/Blocks:searchForm.html.twig */
class __TwigTemplate_5a6cf1ace283d2de0f0e18fa93fdbfb388ba5755ee3903516addf15dca0ed65b extends Twig_Template
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
        echo "
<style>
    #search-container{
        width: 100%;
        min-height: 90px;
        float: left;
        aborder-style: dashed;
        text-align: center;
        margin-top: 30px;
    }

    #search-container form div{
        display: inline-block;
        margin-left: 20px;
        margin-bottom: 10px;
    }



    #search-container form input[type='text']{
        height: 48px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        border-color: #D8D8D8;
        border-style: double;
        text-align: center;
    }

    #search-container form label{
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

    }


    #search-container button[type='submit']{
        height: 48px;
        width: 150px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-color: rgb(116,132,255);
        background-color: rgb(116,132,255);
        border-style: double;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/base/jquery.ui.all.css"), "html", null, true);
        echo "\">
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.mouse.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.position.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.menu.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ui/demos.css"), "html", null, true);
        echo "\">

<script>
    \$(function() {
//        var names = [ \"Jörn Zaefferer\", \"Scott González\", \"John Resig\" ];
//        var cuisine = [ \"Jörn Zaefferer\", \"Scott González\", \"John Resig\" ];

        var names = [
            ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : null) != (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : null)) - 1))) {
                // line 68
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "html", null, true);
                echo "\"  ,
                ";
            } else {
                // line 70
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "html", null, true);
                echo "\"
                ";
            }
            // line 72
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        ];

        var cuisine = [
            ";
        // line 76
        ob_start();
        // line 77
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["cuisine"]) ? $context["cuisine"] : null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                     ";
            if (((isset($context["i"]) ? $context["i"] : null) != (twig_length_filter($this->env, (isset($context["cuisine"]) ? $context["cuisine"] : null)) - 1))) {
                // line 79
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuisine"]) ? $context["cuisine"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "html", null, true);
                echo "\" ,
                    ";
            } else {
                // line 81
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuisine"]) ? $context["cuisine"] : null), (isset($context["i"]) ? $context["i"] : null), array(), "array"), "html", null, true);
                echo "\"
                    ";
            }
            // line 83
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 85
        echo "        ];

        var accentMap = {
            \"â\": \"a\", \"á\": \"a\", \"à\": \"a\", \"æ\": \"ae\",
            \"ç\": \"c\",
            \"é\": \"e\", \"è\": \"e\",\"ê\": \"e\",\"ë\": \"e\",
            \"ö\": \"o\",\"ô\": \"o\",\"œ\": \"oe\",
            \"ï\": \"i\",\"î\": \"i\",
            \"ù\": \"u\",\"û\": \"u\",\"ü\": \"u\",
            \"ÿ\": \"y\"
        };

        var normalize = function( term ) {
            var ret = \"\";
            for ( var i = 0; i < term.length; i++ ) {
                ret += accentMap[ term.charAt(i) ] || term.charAt(i);
            }
            return ret;
        };

        \$( \"#search_name\" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( \$.ui.autocomplete.escapeRegex( request.term ), \"i\" );
                response( \$.grep( names, function( value ) {
                    value = value.label || value.value || value;
                    return matcher.test( value ) || matcher.test( normalize( value ) );
                }) );
            }
        });

        \$( \"#search_cuisine\" ).autocomplete({
            source: function( request, response ) {
                var matcher = new RegExp( \$.ui.autocomplete.escapeRegex( request.term ), \"i\" );
                response( \$.grep( cuisine, function( value ) {
                    value = value.label || value.value || value;
                    return matcher.test( value ) || matcher.test( normalize( value ) );
                }) );
            }
        });
    });


</script>

<div id=\"search-container\">


        ";
        // line 132
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ourForm"]) ? $context["ourForm"] : null), 'form_start');
        echo "
        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["ourForm"]) ? $context["ourForm"] : null), 'errors');
        echo "

              ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : null), "name"), 'row');
        echo "

              ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : null), "arrondissement"), 'row');
        echo "

              ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : null), "cuisine"), 'row');
        echo "

        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ourForm"]) ? $context["ourForm"] : null), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts/Blocks:searchForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  248 => 139,  233 => 133,  180 => 85,  165 => 81,  126 => 68,  104 => 57,  100 => 56,  96 => 55,  84 => 52,  76 => 50,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 84,  169 => 60,  140 => 55,  132 => 70,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  131 => 52,  119 => 66,  108 => 58,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 48,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 53,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 72,  136 => 56,  123 => 67,  121 => 46,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 58,  144 => 73,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 54,  86 => 28,  82 => 22,  80 => 51,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
