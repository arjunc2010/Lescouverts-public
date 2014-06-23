<?php

/* LesRestaurantBundle:Admin:Events/myEvents.html.twig */
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
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 25
            echo "                                    <div class=\"e-list-cell\" u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                                        <div class=\"e-list-cell-left\">
                                            <span class=\"e-list-cell-data-name\" id=\"title-";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name"), "html", null, true);
            echo " </span><br>
                                            <span class=\"e-list-cell-data-event\" id=\"date-";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"> <strong> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "date"), "m-d-Y"), "html", null, true);
            echo " </strong> </span>
                                            <span class=\"e-list-cell-data-event\" > From
                                                                                    <span id=\"from-";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "start"), "H:m"), "html", null, true);
            echo "</span>
                                                                                   till
                                                                                    <span id=\"till-";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "end"), "H:m"), "html", null, true);
            echo "</span>
                                            </span>

                                            <br>
                                            <div class=\"e-list-cell-data-description\" id=\"description-";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description"), "html", null, true);
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
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "imgPath") != "null")) {
                // line 43
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "imgPath")), "html", null, true);
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
            if (($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "imgPath") != "null")) {
                // line 49
                echo "                                                    <form action=\"";
                echo $this->env->getExtension('routing')->getPath("restaurant_my_events");
                echo "\" method=\"post\">
                                                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id"), "html", null, true);
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
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        // line 99
        echo "            <!-- Modal Upload File -->
            <div id=\"myModalFile\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Upload File</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <form action=\"";
        // line 106
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
        // line 118
        echo "
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script src=\"";
        // line 120
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
        // line 167
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
        // line 195
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
        return "LesRestaurantBundle:Admin:Events/myEvents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 195,  287 => 167,  237 => 120,  233 => 119,  230 => 118,  216 => 106,  207 => 99,  169 => 62,  163 => 61,  161 => 60,  157 => 58,  151 => 54,  144 => 50,  139 => 49,  137 => 48,  134 => 47,  128 => 44,  123 => 43,  121 => 42,  116 => 40,  112 => 39,  104 => 36,  95 => 32,  88 => 30,  81 => 28,  75 => 27,  67 => 25,  62 => 24,  60 => 23,  51 => 16,  48 => 15,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
