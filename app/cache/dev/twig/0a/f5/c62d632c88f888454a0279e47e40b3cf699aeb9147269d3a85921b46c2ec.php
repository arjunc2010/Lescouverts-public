<?php

/* LesRestaurantBundle:Admin:Ranking/myRanking.html.twig */
class __TwigTemplate_0af5c62d632c88f888454a0279e47e40b3cf699aeb9147269d3a85921b46c2ec extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/restaurant-homepage.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href= \"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
            <style>
                .list-rank{
                    position:absolute;
                    right:40px;
                    top: 50px;
                }

            </style>
        ";
        // line 27
        echo "

            <div id=\"main-list-container\">
                ";
        // line 30
        $context["i"] = 1;
        // line 31
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restos"]) ? $context["restos"] : $this->getContext($context, "restos")));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 32
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resto_homepage", array("id" => $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "id"))), "html", null, true);
            echo "\" >
                        <div class=\"list-container\"
                                ";
            // line 34
            if (($this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "id") == (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
                // line 35
                echo "                                    id=\"target-division\"
                                    style=\"
                                        border-style: solid;
                                        border-color: red;
                                     \"
                                ";
            }
            // line 41
            echo "                        >
                            <div class=\"list-cell\" >
                                <span class=\"list-cell-data-name\" > ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "name"), "html", null, true);
            echo "</span><br>
                                <span class=\"list-cell-data-address\" > ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "address"), "html", null, true);
            echo " </span><br>
                                <span class=\"list-cell-data-type\" > ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "cuisine"), "html", null, true);
            echo " </span><br>
                            </div>
                                <span class=\"list-rank\">
                                    ";
            // line 49
            echo "                                        Rank :  ";
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo "
                                    ";
            // line 51
            echo "                                </span>
                        </div>
                    </a>
                    ";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>



            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>

            <script>
                \$(document).ready( function(){
                            \$('html, body').animate({scrollTop : \$('#target-division').position().top - 300 });


                            return false;
                        }
                );
            </script>


        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:Ranking/myRanking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 60,  125 => 56,  119 => 55,  117 => 54,  112 => 51,  107 => 49,  101 => 45,  97 => 44,  93 => 43,  89 => 41,  81 => 35,  79 => 34,  73 => 32,  68 => 31,  66 => 30,  61 => 27,  50 => 15,  47 => 14,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
