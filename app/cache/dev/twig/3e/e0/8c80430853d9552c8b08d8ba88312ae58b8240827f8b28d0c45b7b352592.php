<?php

/* LesRestaurantBundle:Admin:Menu/Blocks/menuUploadForm.html.twig */
class __TwigTemplate_3ee08c80430853d9552c8b08d8ba88312ae58b8240827f8b28d0c45b7b352592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>

    input[type='file']{
        height: 33px;
        width: 300px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-color: rgb(116,132,255);
        background-color: rgb(116,132,255);
        border-style: double;
        border-radius: 5px;
        margin-top:10px;
    }

    button[type='submit']{
        height: 33px;
        width: 94px;
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        font-weight: bold;
        font-size: 15px;
        color: white;
        border-style: double;
        border-radius: 5px;
        cursor: pointer;
        margin-top:10px;
        border-color: rgb(200,191,231);
        background-color: rgb(200,191,231);
    }

</style>


    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "upload"), 'widget');
        echo "

    ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:Menu/Blocks/menuUploadForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  63 => 37,  59 => 36,  55 => 35,  19 => 1,  154 => 91,  139 => 79,  127 => 69,  115 => 64,  108 => 61,  104 => 60,  101 => 59,  97 => 58,  88 => 51,  86 => 50,  46 => 12,  43 => 11,  37 => 8,  32 => 7,  29 => 6,);
    }
}
