<?php

/* LesRestaurantBundle:Admin:News/myNews.html.twig */
class __TwigTemplate_7b1ecabffaf284d70876618a22f0f891720051821c2e91a6835d3a966626df54 extends Twig_Template
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
        echo "<style>
.img-close{
    cursor: pointer;
}
.img-modify{
    cursor: pointer;
}

</style>


      ";
        // line 27
        $context["i"] = 0;
        // line 28
        echo "        <div class=\"news-container\">
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 30
            echo "                    <div class=\"news-cell\" u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "id"), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">
                           <!-- here have to add logic for image decider -->
                        ";
            // line 32
            if (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "starter")) {
                // line 33
                echo "                              <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/starter.png"), "html", null, true);
                echo "\">
                        ";
            } elseif (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "main")) {
                // line 35
                echo "                              <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/main.png"), "html", null, true);
                echo "\">
                        ";
            } elseif (($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "category") == "dessert")) {
                // line 37
                echo "                              <img class=\"news-cell-left\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/news/dessert.png"), "html", null, true);
                echo "\">
                        ";
            }
            // line 39
            echo "                        <img class=\"img-close\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/close.png"), "html", null, true);
            echo "\" />
                        <img class=\"img-modify\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/modify.png"), "html", null, true);
            echo "\" />

                        <div class=\"news-cell-center\">
                            <span class=\"news-title\" id=\"title-";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "text"), "html", null, true);
            echo "</span><br>
                            <span class=\"news-date\">Since :  <strong>  ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "dateCreated"), "m-d-Y"), "html", null, true);
            echo " </strong></span>
                        </div>
                    </div>
                ";
            // line 47
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "         </div>

            <!-- Modal -->
            <div id=\"myModal\" class=\"modal hide fade\" target=\"\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">x</button>
                    <h3 id=\"myModalLabel\">Update Entry</h3>
                </div>
                <div class=\"modal-body\" id=\"form-container\">
                    <div>
                          ";
        // line 59
        $this->env->loadTemplate("LesRestaurantBundle:Admin:News/Blocks/newsUploadForm.html.twig")->display($context);
        // line 60
        echo "                    </div>

                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
                    <button id=\"form-save\" class=\"btn btn-primary\">Save</button>
                </div>
                <div id=\"form-info\" target=\"\" row=\"\" ></div>
            </div>


<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/support-files/js/bootstrap.min.js"), "html", null, true);
        echo "\" > </script>
 <script>
 //TARGET for getting text
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
    \$('#form-save').click(function(){
        \$('#myModal').modal('hide');
        var text = \$('#form-text');
        var id = \$('#form-info').attr('row');
        var title =   \$('#news-container').find(\"[target='\"+id +\"' ]\")
        console.log( id + text.val() + title.length );
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("restaurant_my_news");
        echo "\",
            data: {
                action: 'update',
                id: id,
                title: text.val()
            },
            dataType: \"json\",
            success: function(response) {
                console.log( response );
            }
        });

    });

     \$('.img-close').click(function(){
         console.log('start');
         var parent = \$(this).parent();
         var id = parent.attr('u');
         \$.ajax({
             type: \"POST\",
             url: \"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("restaurant_my_news");
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

     \$('.img-save-modification').click(function(){
         console.log('start');
         var parent = \$(this).parent();
         var id = parent.attr('u');
         \$.ajax({
             type: \"POST\",
             url: \"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("restaurant_my_news");
        echo "\",
             data: {
                 action: 'modify',
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


 </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:News/myNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 135,  212 => 115,  189 => 95,  163 => 72,  159 => 71,  146 => 60,  144 => 59,  132 => 49,  126 => 48,  124 => 47,  118 => 44,  112 => 43,  106 => 40,  101 => 39,  95 => 37,  89 => 35,  83 => 33,  81 => 32,  73 => 30,  69 => 29,  66 => 28,  64 => 27,  51 => 16,  48 => 15,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
