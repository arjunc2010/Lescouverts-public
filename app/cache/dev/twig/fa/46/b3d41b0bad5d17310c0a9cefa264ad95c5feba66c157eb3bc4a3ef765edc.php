<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_fa46b3d41b0bad5d17310c0a9cefa264ad95c5feba66c157eb3bc4a3ef765edc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>



                            <div id=\"homepageBody\" style=\"min-height:500px\">
                                        <div id=\"lescouverts-img-container\">
                                          <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("lescouverts_homepage");
        echo "\">
                                            <img id=\"img-lescouverts\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/logo.png"), "html", null, true);
        echo "\" />
                                          </a>
                             </div>





        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <div>
            ";
        // line 35
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "        </div>



                                </div> 

                        <div id=\"footer-container\">

                                <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("lescouverts_homepage");
        echo "\">
                                    <div class=\"footer-button\"> <span class=\"footer-text\" > Home            </span>         </div>
                                </a>
                                <div class=\"footer-button\"> <span class=\"footer-text\" > Terms of Service </span>            </div>
                                <div class=\"footer-button\"> <span class=\"footer-text\" > Privacy Guideline </span>       </div>
                                <div class=\"footer-button\" style=\"border-right-style: none;\">   <span class=\"footer-text\" > contact us       </span>        </div>

                        </div>


    </body>
</html>









<!--


-->";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link rel=\"stylesheet\" href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/frame-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/form-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 36
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 36,  142 => 35,  136 => 8,  131 => 7,  128 => 6,  99 => 45,  89 => 37,  87 => 35,  83 => 33,  77 => 32,  68 => 29,  63 => 28,  43 => 18,  30 => 10,  21 => 1,  92 => 36,  85 => 32,  78 => 28,  72 => 25,  64 => 20,  58 => 27,  54 => 26,  49 => 14,  44 => 12,  39 => 17,  33 => 7,  31 => 6,  28 => 6,);
    }
}
