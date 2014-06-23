<?php

/* LesRestaurantBundle:Admin/Comments:myComments.html.twig */
class __TwigTemplate_81ffb509fe106947a2b38732567d5f93cde84df1ddd3bb47a9ce079d398ee8de extends Twig_Template
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
            <link rel=\"stylesheet\" href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/restaurant-homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/bootstrap.css"), "html", null, true);
        echo "\"  />

        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "            <style>


                .img-close{
                    position: absolute;
                    top:-16px;
                    right:-75px;
                }

                .img-modify{
                    position: absolute;
                    top:-24px;
                    right:-45px;
                }
            </style>

            <div class=\"h-sub-container\" style=\"border-style:none;\">
                <span class=\"h-list-cell-data-name\" > Comments </span><br>

                ";
        // line 36
        $context["i"] = 0;
        // line 37
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "                    ";
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userID") != (isset($context["id"]) ? $context["id"] : null))) {
                // line 39
                echo "                    <div class=\"h-comment-container\"  u=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" >

                        <span class=\"h-comment-text\" > ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "text"), "html", null, true);
                echo " </span><br>
                        <span class=\"h-comment-details\"><strong> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "username"), "html", null, true);
                echo " </strong> </span>
                        <span class=\"h-comment-details\"> ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "dateCreated"), "D d-M-Y", "Europe/Paris"), "html", null, true);
                echo " </span><br>

                        <img class=\"img-close\"  src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/close.png"), "html", null, true);
                echo "\" />
                        <img class=\"img-modify\" src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/modify.png"), "html", null, true);
                echo "\" />
                    </div>
                    ";
            }
            // line 49
            echo "                    ";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
            </div>



            <!-- Modal -->
            <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Reply</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <div>
                        <textarea maxlength=\"250\" style=\"height:200px;width:350px;\"> </textarea>
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button id=\"form-save\" class=\"btn btn-primary\">Save</button>
                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>

            <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 76
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
                        'row':parent.attr('u')});
                    \$('#myModal').modal({
                        show: true
                    });
                });


            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/Comments:myComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 75,  167 => 80,  81 => 27,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 121,  175 => 96,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 110,  34 => 11,  137 => 11,  134 => 10,  118 => 59,  83 => 38,  74 => 32,  120 => 50,  77 => 26,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 51,  104 => 57,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 124,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 46,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 118,  204 => 72,  179 => 98,  159 => 122,  143 => 73,  135 => 53,  131 => 46,  119 => 58,  108 => 51,  102 => 43,  71 => 27,  67 => 30,  63 => 21,  59 => 23,  47 => 9,  38 => 12,  94 => 41,  89 => 37,  85 => 28,  79 => 29,  75 => 28,  68 => 22,  56 => 17,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 17,  21 => 2,  26 => 6,  98 => 42,  93 => 35,  88 => 31,  78 => 37,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 62,  158 => 114,  156 => 76,  151 => 77,  142 => 59,  138 => 106,  136 => 105,  123 => 44,  121 => 86,  117 => 49,  115 => 57,  105 => 35,  101 => 81,  91 => 27,  69 => 31,  66 => 23,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 41,  112 => 42,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 42,  92 => 30,  86 => 39,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 20,  57 => 22,  54 => 16,  51 => 15,  48 => 14,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
