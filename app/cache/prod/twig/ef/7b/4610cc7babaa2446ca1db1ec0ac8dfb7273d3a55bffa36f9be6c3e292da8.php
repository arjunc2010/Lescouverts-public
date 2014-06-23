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
        return array (  137 => 11,  134 => 10,  118 => 59,  83 => 36,  74 => 32,  120 => 45,  77 => 26,  58 => 20,  37 => 10,  253 => 141,  248 => 139,  233 => 133,  180 => 85,  165 => 81,  126 => 68,  104 => 57,  100 => 45,  96 => 55,  84 => 52,  76 => 50,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 132,  220 => 70,  214 => 69,  177 => 84,  169 => 60,  140 => 55,  132 => 70,  128 => 9,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 137,  240 => 86,  238 => 135,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 79,  143 => 56,  135 => 53,  131 => 52,  119 => 66,  108 => 51,  102 => 47,  71 => 19,  67 => 30,  63 => 15,  59 => 14,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 48,  56 => 9,  50 => 22,  29 => 6,  87 => 37,  72 => 49,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 31,  78 => 21,  46 => 13,  27 => 4,  40 => 8,  44 => 12,  35 => 5,  31 => 5,  43 => 12,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 83,  166 => 71,  163 => 62,  158 => 67,  156 => 78,  151 => 77,  142 => 59,  138 => 72,  136 => 56,  123 => 67,  121 => 46,  117 => 43,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 31,  66 => 15,  62 => 28,  49 => 14,  24 => 4,  32 => 7,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 76,  147 => 46,  144 => 45,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 41,  99 => 40,  95 => 42,  92 => 54,  86 => 28,  82 => 22,  80 => 35,  73 => 25,  64 => 29,  60 => 27,  57 => 11,  54 => 23,  51 => 15,  48 => 13,  45 => 8,  42 => 7,  39 => 13,  36 => 5,  33 => 9,  30 => 7,);
    }
}
