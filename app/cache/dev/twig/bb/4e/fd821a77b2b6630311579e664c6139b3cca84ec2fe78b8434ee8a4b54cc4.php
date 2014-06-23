<?php

/* LesRestaurantBundle:Admin:SpecialOffers/mySpecialOffers.html.twig */
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
        $context['_seq'] = twig_ensure_traversable((isset($context["specials"]) ? $context["specials"] : $this->getContext($context, "specials")));
        foreach ($context['_seq'] as $context["_key"] => $context["special"]) {
            // line 18
            echo "                <div class=\"offer-container\">
                    <div class=\"offer-cell\" target=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                       ";
            // line 21
            echo "                        <img class=\"img-modify\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/modify.png"), "html", null, true);
            echo "\" />

                        <div class=\"offer-cell-center\">
                            <span class=\"offer-title\" id=\"title-";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["special"]) ? $context["special"] : $this->getContext($context, "special")), "html", null, true);
            echo "</span><br>
                        </div>
                    </div>
                </div>
            ";
            // line 28
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
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
        return "LesRestaurantBundle:Admin:SpecialOffers/mySpecialOffers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 80,  121 => 56,  117 => 55,  90 => 30,  84 => 29,  82 => 28,  73 => 24,  66 => 21,  62 => 19,  59 => 18,  54 => 17,  51 => 16,  48 => 15,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
