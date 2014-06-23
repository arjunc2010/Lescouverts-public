<?php

/* LesCouvertsBundle:Couverts:Blocks/searchForm.html.twig */
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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "                ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) - 1))) {
                // line 68
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\"  ,
                ";
            } else {
                // line 70
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, (isset($context["cuisine"]) ? $context["cuisine"] : $this->getContext($context, "cuisine"))) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 78
            echo "                     ";
            if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) != (twig_length_filter($this->env, (isset($context["cuisine"]) ? $context["cuisine"] : $this->getContext($context, "cuisine"))) - 1))) {
                // line 79
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuisine"]) ? $context["cuisine"] : $this->getContext($context, "cuisine")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                echo "\" ,
                    ";
            } else {
                // line 81
                echo "                        \"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cuisine"]) ? $context["cuisine"] : $this->getContext($context, "cuisine")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), 'form_start');
        echo "
        ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), 'errors');
        echo "

              ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), "name"), 'row');
        echo "

              ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), "arrondissement"), 'row');
        echo "

              ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), "cuisine"), 'row');
        echo "

        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["ourForm"]) ? $context["ourForm"] : $this->getContext($context, "ourForm")), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts:Blocks/searchForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 141,  248 => 139,  243 => 137,  238 => 135,  233 => 133,  229 => 132,  180 => 85,  177 => 84,  171 => 83,  165 => 81,  159 => 79,  156 => 78,  151 => 77,  149 => 76,  144 => 73,  138 => 72,  132 => 70,  126 => 68,  123 => 67,  119 => 66,  108 => 58,  104 => 57,  100 => 56,  96 => 55,  92 => 54,  84 => 52,  80 => 51,  76 => 50,  72 => 49,  68 => 48,  19 => 1,  120 => 45,  117 => 43,  103 => 41,  99 => 40,  88 => 53,  77 => 26,  73 => 25,  69 => 24,  62 => 21,  58 => 20,  51 => 15,  49 => 14,  46 => 13,  43 => 12,  37 => 8,  32 => 7,  29 => 6,);
    }
}
