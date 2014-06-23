<?php

/* LesRestaurantBundle:Admin:PersonalInformation/myPersonalInformation.html.twig */
class __TwigTemplate_79157364cfc68748de562d939a18a1315db2e0588be76d028c04129f26a32b04 extends Twig_Template
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



            ";
        // line 19
        $this->env->loadTemplate("LesRestaurantBundle:Admin:PersonalInformation/Blocks/myPersonalInformationForm.html.twig")->display($context);
        // line 20
        echo "


            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" ></script>

            <script>
            </script>


        ";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:PersonalInformation/myPersonalInformation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  58 => 20,  56 => 19,  50 => 15,  47 => 14,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
