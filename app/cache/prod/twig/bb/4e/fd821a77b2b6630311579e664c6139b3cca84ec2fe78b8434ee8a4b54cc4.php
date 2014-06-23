<?php

/* LesRestaurantBundle:Admin/SpecialOffers:mySpecialOffers.html.twig */
class __TwigTemplate_bb4efd821a77b2b6630311579e664c6139b3cca84ec2fe78b8434ee8a4b54cc4 extends Twig_Template
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
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/bootstrap.css"), "html", null, true);
        echo "\"  />

        ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context["i"] = 1;
        // line 17
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specials"]) ? $context["specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["special"]) {
            // line 18
            echo "                <div class=\"offer-container\">
                    <div class=\"offer-cell\" target=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">
                       ";
            // line 21
            echo "                        <img class=\"img-modify\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/modify.png"), "html", null, true);
            echo "\" />

                        <div class=\"offer-cell-center\">
                            <span class=\"offer-title\" id=\"title-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["special"]) ? $context["special"] : null), "html", null, true);
            echo "</span><br>
                        </div>
                    </div>
                </div>
            ";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            <!--  ---------------------  -->



            <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Update Entry</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <div>
                        <input type=\"text\" id=\"form-text\" name=\"form[text]\" required=\"required\">
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button id=\"form-save\" class=\"btn btn-primary\">Save</button>
                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>




            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>

            <script>
                \$('.img-modify').click(function(){
                    var parent = \$(this).parent();
                    var target = parent.attr('target');
                    var title = \$('#title-'+target);
                    \$('#form-text').val( title.text() );
                    \$('#form-info').attr({
                        'target': parent.attr('target'),
                        'row':parent.attr('target')});
                    \$('#myModal').modal({
                        show: true
                    });
                });

                \$('#form-save').click(function(){
                    \$('#myModal').modal('hide');
                    var text = \$('#form-text');
                    var id = \$('#form-info').attr('row');
                    var title =   \$('#news-container').find(\"[target='\"+id +\"' ]\")
                    console.log( id + text.val() + title.length );
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("restaurant_my_special_offers");
        echo "\",
                        data: {
                            action: 'update',
                            id: id,
                            text: text.val()
                        },
                        dataType: \"json\",
                        success: function(response) {
                            console.log( response );
                        }
                    });

                });
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/SpecialOffers:mySpecialOffers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  172 => 119,  212 => 115,  146 => 60,  124 => 47,  97 => 44,  477 => 315,  462 => 306,  458 => 305,  454 => 304,  439 => 292,  433 => 289,  416 => 278,  410 => 275,  404 => 272,  369 => 249,  363 => 246,  357 => 243,  346 => 235,  340 => 232,  334 => 229,  316 => 217,  310 => 214,  299 => 206,  293 => 203,  225 => 159,  215 => 155,  211 => 154,  197 => 146,  304 => 169,  301 => 168,  287 => 200,  263 => 148,  200 => 106,  191 => 100,  127 => 69,  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 118,  161 => 60,  157 => 58,  139 => 79,  152 => 77,  167 => 131,  81 => 35,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 153,  175 => 91,  160 => 87,  129 => 100,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 172,  195 => 112,  148 => 80,  34 => 11,  137 => 102,  134 => 47,  118 => 44,  83 => 33,  74 => 32,  120 => 50,  77 => 30,  58 => 20,  37 => 8,  253 => 158,  248 => 139,  233 => 161,  180 => 124,  165 => 125,  126 => 48,  104 => 60,  100 => 34,  96 => 55,  84 => 29,  76 => 36,  480 => 162,  474 => 161,  469 => 310,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 286,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 264,  387 => 261,  384 => 121,  381 => 258,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 220,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 165,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 171,  247 => 169,  241 => 77,  229 => 160,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 49,  128 => 44,  111 => 91,  107 => 49,  61 => 27,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 168,  240 => 120,  238 => 135,  235 => 135,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 156,  217 => 75,  208 => 118,  204 => 107,  179 => 93,  159 => 71,  143 => 105,  135 => 109,  131 => 60,  119 => 55,  108 => 61,  102 => 43,  71 => 27,  67 => 38,  63 => 23,  59 => 18,  47 => 14,  38 => 12,  94 => 40,  89 => 41,  85 => 28,  79 => 34,  75 => 27,  68 => 31,  56 => 19,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 35,  21 => 2,  26 => 6,  98 => 41,  93 => 43,  88 => 51,  78 => 37,  46 => 12,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 11,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 132,  166 => 71,  163 => 113,  158 => 111,  156 => 78,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 56,  117 => 55,  115 => 92,  105 => 35,  101 => 45,  91 => 27,  69 => 29,  66 => 21,  62 => 19,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 145,  189 => 95,  187 => 99,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 110,  149 => 76,  147 => 106,  144 => 59,  141 => 69,  133 => 101,  130 => 41,  125 => 56,  122 => 43,  116 => 40,  112 => 51,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 37,  92 => 30,  86 => 50,  82 => 28,  80 => 31,  73 => 24,  64 => 27,  60 => 23,  57 => 22,  54 => 17,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
