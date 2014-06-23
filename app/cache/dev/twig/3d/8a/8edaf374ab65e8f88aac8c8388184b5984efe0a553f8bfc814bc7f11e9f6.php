<?php

/* LesRestaurantBundle:Admin:Menu/myMenus.html.twig */
class __TwigTemplate_3d8a8edaf374ab65e8f88aac8c8388184b5984efe0a553f8bfc814bc7f11e9f6 extends Twig_Template
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
        ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    <style>
     #container-upload{
         position: relative;
     }
       #button-update{
          width:134px;
          border-color: rgb(200,191,231);
          background-color: rgb(200,191,231);
          height: 45px;
          margin-top: 10px;
          margin-left: 20%;
          font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
          font-weight: bold;
          font-size: 15px;
          color: white;
          cursor: pointer;
       }

            #form-upload{
                width:350px;
                height: 100px;
                /*border-style: solid;*/
                margin-left:22%;
                position: absolute;
                top: 50px;
                /*bottom:106px;*/
                z-index: 150;
                background-color:white;
                box-shadow: 0px 0px 5px grey;
                display: none;
            }
    </style>

     <div id=\"container-upload\">
        <div id=\"button-update\">
           Upload New Menu
        </div>
             <div id=\"form-upload\">
                ";
        // line 50
        $this->env->loadTemplate("LesRestaurantBundle:Admin:Menu/Blocks/menuUploadForm.html.twig")->display($context);
        // line 51
        echo "             </div>
     </div>



<div>

          ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 59
            echo "                <div class=\"menu-container\">
                    <img class=\"img-type\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/menu_jpg.png"), "html", null, true);
            echo "\" />
                    <img class=\"img-close\" u=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/close.png"), "html", null, true);
            echo "\" />
                    <span> Lunch Menu  </span>
                    ";
            // line 64
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image"))), "html", null, true);
            echo "\" target=\"_blank\">
                        <button class=\"button-download\"> Download </button>
                    </a>
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "


</div>






            <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>
            <script>
                \$('#button-update').click(function(){
                        \$('#form-upload').slideToggle();
                });

                 \$('.img-close').click(function(){
                     var status;
                     var parent = \$(this).parent();
                     var filepath = \$(this).attr('u');
                     \$.ajax({
                         type: \"POST\",
                         url: \"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("restaurant_my_menus");
        echo "\",
                         data: {
                             action: 'delete',
                             path: filepath
                         },
                         dataType: \"json\",
                         success: function(response) {
                             if( response.status == true){
                                    alert('File has been deleted');
                               parent.slideUp();
                             }else{
                                 alert('Error in deleting file');
                             }
                             console.log( response );
                         }
                     });
                 });

            </script>
        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:Menu/myMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 91,  139 => 79,  127 => 69,  115 => 64,  108 => 61,  104 => 60,  101 => 59,  97 => 58,  88 => 51,  86 => 50,  46 => 12,  43 => 11,  37 => 8,  32 => 7,  29 => 6,);
    }
}
