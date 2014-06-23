<?php

/* ::layout.html.twig */
class __TwigTemplate_ef7b4610cc7babaa2446ca1db1ec0ac8dfb7273d3a55bffa36f9be6c3e292da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 3
        echo "

<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <title> ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "
 </head>

  <body>


      <div id=\"homepageBody\">
        <div id=\"lescouverts-img-container\">

                  <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("lescouverts_homepage");
        echo "\">
                        <img id=\"img-lescouverts\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/logo.png"), "html", null, true);
        echo "\" />
                  </a>

                ";
        // line 27
        echo "                    ";
        // line 28
        echo "                ";
        // line 29
        echo "
             ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    <img id=\"img-power\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/PowerIcon.gif"), "html", null, true);
            echo "\" />
                </a>
            ";
        } else {
            // line 35
            echo "
                <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">
                    <img id=\"img-power\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/images/PowerIcon.gif"), "html", null, true);
            echo "\" />
                </a>


           ";
        }
        // line 42
        echo "
        </div>

                  ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "           

            <div id=\"footer-container\">

                <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("lescouverts_homepage");
        echo "\">
                  <div class=\"footer-button\"> <span class=\"footer-text\" > Home      </span>     </div>
                </a>
                <div class=\"footer-button\"> <span class=\"footer-text\" > Terms of Service </span>      </div>
                <div class=\"footer-button\"> <span class=\"footer-text\" > Privacy Guideline </span>   </div>
                <div class=\"footer-button\" style=\"border-right-style: none;\"> <span class=\"footer-text\" > contact us     </span>    </div>

            ";
        // line 59
        echo "
        </div>

    </body>


";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo " lescouverts ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "  <link rel=\"stylesheet\" href= \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/frame-design.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "                  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 46,  144 => 45,  137 => 11,  134 => 10,  128 => 9,  118 => 59,  108 => 51,  102 => 47,  95 => 42,  87 => 37,  83 => 36,  80 => 35,  74 => 32,  69 => 31,  67 => 30,  64 => 29,  62 => 28,  60 => 27,  50 => 22,  39 => 13,  33 => 9,  25 => 3,  22 => 1,  208 => 118,  167 => 80,  131 => 46,  125 => 45,  123 => 44,  111 => 38,  105 => 35,  100 => 45,  98 => 33,  92 => 30,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  68 => 22,  63 => 21,  61 => 20,  56 => 17,  54 => 23,  51 => 15,  48 => 14,  41 => 9,  37 => 10,  32 => 7,  29 => 6,);
    }
}
