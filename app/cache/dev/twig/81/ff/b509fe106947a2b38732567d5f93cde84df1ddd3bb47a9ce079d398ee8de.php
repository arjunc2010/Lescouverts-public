<?php

/* LesRestaurantBundle:Admin:Comments/myComments.html.twig */
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
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 38
            echo "                    ";
            if (($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "userID") != (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 39
                echo "                    <div class=\"h-comment-container\"  u=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "\" >

                        <span class=\"h-comment-text\" > ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "text"), "html", null, true);
                echo " </span><br>
                        <span class=\"h-comment-details\"><strong> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "username"), "html", null, true);
                echo " </strong> </span>
                        <span class=\"h-comment-details\"> ";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "dateCreated"), "D d-M-Y", "Europe/Paris"), "html", null, true);
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
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        return "LesRestaurantBundle:Admin:Comments/myComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 76,  152 => 75,  126 => 51,  120 => 50,  117 => 49,  111 => 46,  107 => 45,  102 => 43,  98 => 42,  94 => 41,  86 => 39,  83 => 38,  78 => 37,  76 => 36,  55 => 17,  52 => 16,  45 => 10,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
