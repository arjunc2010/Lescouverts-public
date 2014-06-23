<?php

/* LesRestaurantBundle:Admin/Events:myEvents.html.twig */
class __TwigTemplate_b0dbb7c94a02407e336a88ab9ace132855cb1e27cfbcc23f6c1d88d7937847a9 extends Twig_Template
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
        echo "           <style>
               .img-modify{
                   cursor:pointer;
               }
           </style>
            <div>
                <div class=\"e-list-container\">
            ";
        // line 23
        $context["i"] = 0;
        // line 24
        echo "              ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 25
            echo "                                    <div class=\"e-list-cell\" u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">
                                        <div class=\"e-list-cell-left\">
                                            <span class=\"e-list-cell-data-name\" id=\"title-";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "name"), "html", null, true);
            echo " </span><br>
                                            <span class=\"e-list-cell-data-event\" id=\"date-";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"> <strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "date"), "m-d-Y"), "html", null, true);
            echo " </strong> </span>
                                            <span class=\"e-list-cell-data-event\" > From
                                                                                    <span id=\"from-";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "start"), "H:m"), "html", null, true);
            echo "</span>
                                                                                   till
                                                                                    <span id=\"till-";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "end"), "H:m"), "html", null, true);
            echo "</span>
                                            </span>

                                            <br>
                                            <div class=\"e-list-cell-data-description\" id=\"description-";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "description"), "html", null, true);
            echo "  </div>
                                        </div>
                                        <div class=\"e-list-cell-right\">
                                            <img class=\"img-close\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/close.png"), "html", null, true);
            echo "\" />
                                            <img class=\"img-modify\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/modify.png"), "html", null, true);
            echo "\" />

                                            ";
            // line 42
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "imgPath") != "null")) {
                // line 43
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "imgPath")), "html", null, true);
                echo "\" target=\"_blank\">
                                                      <img class=\"img-exist\" src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/exist.png"), "html", null, true);
                echo "\" />
                                                </a>
                                            ";
            }
            // line 47
            echo "
                                                ";
            // line 48
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "imgPath") != "null")) {
                // line 49
                echo "                                                    <form action=\"";
                echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
                echo "\" method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "id"), "html", null, true);
                echo "\">
                                                        <input type=\"submit\" name=\"modify\" value=\"Modify Menu\" />
                                                    </form>
                                                ";
            } else {
                // line 54
                echo "                                                    <form>
                                                      <input type=\"submit\" name=\"upload\" value=\"Upload Menu\" />
                                                    </form>
                                                ";
            }
            // line 58
            echo "                                        </div>
                                    </div>
                  ";
            // line 60
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 61
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
            </div>


            <!-- Modal Edit Text -->
            <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Update Entry</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <div>
                        <input type=\"text\" id=\"form-name\" name=\"form[name]\" required=\"required\" placeholder=\"Name\">
                    </div>
                    <div>
                        <input type=\"date\" id=\"form-date\" name=\"form[date]\" required=\"required\" placeholder=\"Date\">
                    </div>
                    <div>
                        <input type=\"text\" id=\"form-from\" name=\"form[from]\" required=\"required\">
                    </div>
                    <div>
                        <input type=\"text\" id=\"form-till\" name=\"form[till]\" required=\"required\">
                    </div>
                    <div>
                        <input type=\"text\" id=\"form-description\" name=\"form[description]\" required=\"required\" placeholder>
                   </div>

                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button id=\"form-save\" class=\"btn btn-primary\">Save</button>
                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>


        ";
        // line 98
        if (($this->getAttribute((isset($context["ifModify"]) ? $context["ifModify"] : null), "state") == true)) {
            // line 99
            echo "            <!-- Modal Upload File -->
            <div id=\"myModalFile\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Upload File</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ifModify"]) ? $context["ifModify"] : null), "id"), "html", null, true);
            echo "
                    <form action=\"";
            // line 107
            echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
            echo "\" method=\"post\">
                        <input name=\"file\" type=\"file\" />
                        <input id=\"form-save-file\" class=\"btn btn-primary\" type=\"submit\"  value=\"upload\"/>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>

                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>
        ";
        }
        // line 119
        echo "
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>
            <script>

                \$('.img-modify').click(function(){
                    var parent = \$(this).parent().parent();
                    var target = parent.attr('target');
                    var title = \$('#title-'+target);
                    var date = \$('#date-'+target);
                    var from = \$('#from-'+target);
                    var till = \$('#till-'+target);
                    var description = \$('#description-'+target);
                    \$('#form-name').val( title.text() );
                        var dateTime = new Date(date.text());
                        var curr_date = (\"0\" + dateTime.getDate()).slice(-2);;
                        var curr_month = (\"0\" + (dateTime.getMonth() + 1)).slice(-2);
                        var curr_year = dateTime.getFullYear();
                    \$('#form-date').val( curr_year + \"-\" + curr_month + \"-\" + curr_date );
                    \$('#form-from').val( from.text() );
                    \$('#form-till').val( till.text() );
                    \$('#form-description').val( description.text() );
                    \$('#form-info').attr({
                        'target': parent.attr('target'),
                        'row':parent.attr('u')});
                    \$('#myModal').modal({
                        show: true
                    });
                    console.log(target + title.text() + date.text() + from.text() + till.text() +description.text() );
                });

                \$('#form-save').click(function(){
                    \$('#myModal').modal('hide');
                    var parent = \$(this).parent().parent();
                    var target = parent.attr('target');
                    var title = \$('#title-'+target);
                    var id = \$('#form-info').attr('row');
                    var date = \$('#date-'+target);
                    var dateTime = new Date(date.text());
                    var curr_date = (\"0\" + dateTime.getDate()).slice(-2);;
                    var curr_month = (\"0\" + (dateTime.getMonth() + 1)).slice(-2);
                    var curr_year = dateTime.getFullYear();
                    var from = \$('#from-'+target);
                    var till = \$('#till-'+target);
                    var description = \$('#description-'+target);
                    console.log(target + title.text() + date.text() + from.text() + till.text() +description.text() );

                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
        echo "\",
                        data: {
                            action: 'update',
                            id: id,
                            title: title.text(),
                            date: curr_year + \"-\" + curr_month + \"-\" + curr_date ,
                            from: from.text(),
                            till: till.text(),
                            description: description.text()
                        },
                        dataType: \"json\",
                        success: function(response) {
                            console.log( response );

                        }
                    });

                });

                \$('.img-close').click(function(){
                    console.log('start');
                    var parent = \$(this).parent().parent();
                    var target = parent.attr('target');
                    var id = parent.attr('u');
                    var title = \$('#title-'+target);
                    console.log(title.length + '#title-'+target);
                    \$.ajax({
                        type: \"POST\",
                        url: \"";
        // line 196
        echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
        echo "\",
                        data: {
                            action: 'delete',
                            id: id
                        },
                        dataType:'json',
                        success: function(response){
                            console.log(response);
                            parent.slideUp();
                        }
                    });
                    console.log('end');
                });

                \$('#myModalFile').modal({
                    show: true
                });

            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin/Events:myEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 196,  244 => 121,  237 => 119,  222 => 107,  218 => 106,  161 => 60,  157 => 58,  139 => 49,  152 => 75,  167 => 80,  81 => 28,  170 => 120,  153 => 112,  113 => 84,  274 => 162,  271 => 161,  257 => 159,  231 => 139,  207 => 98,  175 => 96,  160 => 87,  129 => 65,  52 => 16,  315 => 254,  280 => 222,  262 => 206,  260 => 205,  256 => 203,  195 => 112,  148 => 110,  34 => 11,  137 => 48,  134 => 47,  118 => 59,  83 => 38,  74 => 32,  120 => 50,  77 => 26,  58 => 19,  37 => 8,  253 => 158,  248 => 139,  233 => 133,  180 => 85,  165 => 125,  126 => 51,  104 => 36,  100 => 34,  96 => 55,  84 => 52,  76 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 168,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 204,  252 => 201,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 124,  169 => 62,  140 => 55,  132 => 70,  128 => 44,  111 => 46,  107 => 45,  61 => 20,  273 => 96,  269 => 94,  254 => 202,  246 => 90,  243 => 137,  240 => 120,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 130,  217 => 75,  208 => 118,  204 => 72,  179 => 98,  159 => 122,  143 => 73,  135 => 53,  131 => 46,  119 => 58,  108 => 51,  102 => 43,  71 => 27,  67 => 25,  63 => 21,  59 => 23,  47 => 9,  38 => 12,  94 => 41,  89 => 37,  85 => 28,  79 => 29,  75 => 27,  68 => 22,  56 => 17,  50 => 15,  29 => 6,  87 => 33,  72 => 49,  55 => 17,  21 => 2,  26 => 6,  98 => 42,  93 => 35,  88 => 30,  78 => 37,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 95,  166 => 71,  163 => 61,  158 => 114,  156 => 76,  151 => 54,  142 => 59,  138 => 106,  136 => 105,  123 => 43,  121 => 42,  117 => 49,  115 => 57,  105 => 35,  101 => 81,  91 => 27,  69 => 31,  66 => 23,  62 => 24,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 99,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 126,  176 => 64,  173 => 65,  168 => 72,  164 => 117,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 50,  141 => 48,  133 => 66,  130 => 41,  125 => 45,  122 => 43,  116 => 40,  112 => 39,  109 => 83,  106 => 40,  103 => 41,  99 => 44,  95 => 32,  92 => 30,  86 => 39,  82 => 22,  80 => 31,  73 => 25,  64 => 24,  60 => 23,  57 => 22,  54 => 16,  51 => 16,  48 => 15,  45 => 10,  42 => 13,  39 => 13,  36 => 5,  33 => 9,  30 => 10,);
    }
}
