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
        $context['_seq'] = twig_ensure_traversable((isset($context["parties"]) ? $context["parties"] : $this->getContext($context, "parties")));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 22
            echo "                                <div class=\"p-list-container\" >
                                    <div class=\"p-list-cell\">
                                        <div class=\"p-list-cell-left\">
                                            <span class=\"p-list-cell-data-name\" > ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "restaurantName"), "html", null, true);
            echo " </span><br>
                                            <span class=\"p-list-cell-data-event\" > <strong> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "name"), "html", null, true);
            echo " </strong> </span>
                                            <span class=\"p-list-cell-data-event\" > ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "date"), "m-d-Y"), "html", null, true);
            echo " </span>
                                            <span class=\"p-list-cell-data-event\" > From ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "start"), "H:m"), "html", null, true);
            echo " till ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "end"), "H:m"), "html", null, true);
            echo " </span>
                                            <br>
                                            <div class=\"p-list-cell-data-description\" > ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "description"), "html", null, true);
            echo " </div>
                                        </div>
                                        <div class=\"p-list-cell-right\">
                                             ";
            // line 33
            if (($this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "imgPath") != "null")) {
                // line 34
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "imgPath")), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["party"]) ? $context["party"] : $this->getContext($context, "party")), "id"), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\" >
                                                <button class=\"reserve\"> Reserve </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    ";
            // line 44
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        return array (  208 => 118,  167 => 80,  131 => 46,  125 => 45,  123 => 44,  111 => 38,  105 => 35,  100 => 34,  98 => 33,  92 => 30,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  68 => 22,  63 => 21,  61 => 20,  56 => 17,  54 => 16,  51 => 15,  48 => 14,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
