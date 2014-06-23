<?php

/* LesCouvertsBundle:Party:index.html.twig */
class __TwigTemplate_cab9ae697aae068e1c221c29b365675b4f8f52ac9a26f9d27c00f04980336732 extends Twig_Template
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
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/css/bootstrap.css"), "html", null, true);
        echo "\"  />

        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
            ";
        // line 16
        $this->env->loadTemplate("LesCouvertsBundle:Party:Blocks/partyForm.html.twig")->display($context);
        // line 17
        echo "
            <div id=\"main-list-container\">

                ";
        // line 20
        $context["i"] = 1;
        // line 21
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 22
            echo "                                <div class=\"p-list-container\" >
                                    <div class=\"p-list-cell\">
                                        <div class=\"p-list-cell-left\">
                                            <span class=\"p-list-cell-data-name\" > ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "restaurantName"), "html", null, true);
            echo " </span><br>
                                            <span class=\"p-list-cell-data-event\" > <strong> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "name"), "html", null, true);
            echo " </strong> </span>
                                            <span class=\"p-list-cell-data-event\" > ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "date"), "m-d-Y"), "html", null, true);
            echo " </span>
                                            <span class=\"p-list-cell-data-event\" > From ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "start"), "H:m"), "html", null, true);
            echo " till ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "end"), "H:m"), "html", null, true);
            echo " </span>
                                            <br>
                                            <div class=\"p-list-cell-data-description\" > ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "description"), "html", null, true);
            echo " </div>
                                        </div>
                                        <div class=\"p-list-cell-right\">
                                             ";
            // line 33
            if (($this->getAttribute((isset($context["party"]) ? $context["party"] : null), "imgPath") != "null")) {
                // line 34
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["party"]) ? $context["party"] : null), "imgPath")), "html", null, true);
                echo "\" target=\"_blank\">
                                                  <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/menu_pdf.png"), "html", null, true);
                echo "\" />
                                                </a>
                                            ";
            }
            // line 38
            echo "                                            <div  u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : null), "id"), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\" >
                                                <button class=\"reserve\"> Reserve </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    ";
            // line 44
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 45
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['party'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

            </div>

            <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Reservation</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <div>
                        <input type=\"text\" id=\"form-first-name\" name=\"form[first-name]\" required=\"required\" placeholder=\"First Name\">
                    </div>
                    <div>
                        <input type=\"text\" id=\"form-last-name\" name=\"form[last-name]\" required=\"required\" placeholder=\"Last Name\">
                    </div>
                    <div>
                        <input type=\"text\" id=\"form-date\" name=\"form[date]\" required=\"required\" placeholder=\"Date\">
                    </div>
                    <div>
                        <input type=\"number\" id=\"form-number\" name=\"form[number]\" required=\"required\" placeholder=\"Number of People\">
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button id=\"form-save\" class=\"btn btn-primary\">Save</button>
                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>




            <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>
            <script>
                \$(function() {
                    \$( \"#form-date\" ).datepicker({
                        defaultDate: \"+1w\",
                        changeMonth: true,
                        numberOfMonths: 3,
                        onClose: function( selectedDate ) {
                            \$( \"#to\" ).datepicker( \"option\", \"minDate\", selectedDate );
                        }
                    });

                });

                \$('.reserve').click(function(){
                    \$('#myModal').modal({
                        show: true
                    });

                    var parent = \$(this).parent();
                    var id = parent.attr('u');
                    var target = parent.attr('target');
                    \$('#myModal').attr('u', id );
                    console.log( id + \" \" + target);
                });

                \$('#form-save').click(function(){
                    \$('#myModal').modal('hide');
                    var id = \$('#myModal').attr('u');
                    var firstName = \$('#form-first-name').val();
                    var lastName = \$('#form-last-name').val();
                    var date = \$('#form-date').val();
                    var number = \$('#form-number').val();

                    console.log( id + \" \" +firstName + \" \" + lastName + \" \" + date + \" \" + number );

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("party_event_request");
        echo "\",
                        data: {
                            action: 'reserve',
                            id: id,
                            firstName: firstName,
                            lastName: lastName,
                            date: date,
                            number: number
                        },
                        dataType: \"json\",
                        success: function(response) {
                            console.log('success');
                            console.log( response );

                        }

                    });
                    console.log('-- FIN -- ');

                });


            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Party:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 80,  81 => 27,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 121,  175 => 96,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 110,  34 => 11,  137 => 11,  134 => 10,  118 => 59,  83 => 36,  74 => 32,  120 => 45,  77 => 26,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 68,  104 => 57,  100 => 34,  96 => 55,  84 => 52,  76 => 30,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 124,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 38,  107 => 36,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 118,  204 => 72,  179 => 98,  159 => 122,  143 => 73,  135 => 53,  131 => 46,  119 => 58,  108 => 51,  102 => 47,  71 => 27,  67 => 30,  63 => 21,  59 => 23,  47 => 9,  38 => 12,  94 => 28,  89 => 37,  85 => 28,  79 => 29,  75 => 28,  68 => 22,  56 => 17,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 33,  93 => 35,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 62,  158 => 114,  156 => 78,  151 => 77,  142 => 59,  138 => 106,  136 => 105,  123 => 44,  121 => 86,  117 => 85,  115 => 57,  105 => 35,  101 => 81,  91 => 27,  69 => 31,  66 => 23,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 41,  112 => 42,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 42,  92 => 30,  86 => 28,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 20,  57 => 22,  54 => 16,  51 => 15,  48 => 14,  45 => 8,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
