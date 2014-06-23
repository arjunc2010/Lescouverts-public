<?php

/* LesRestaurantBundle:Admin:News/Blocks/newsUploadForm.html.twig */
class __TwigTemplate_299317894e234014fdde66b5545c53e0fbe030d92904a28dd6a31a70068e6dda extends Twig_Template
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
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:News/Blocks/newsUploadForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  63 => 37,  59 => 36,  55 => 35,  19 => 1,  235 => 135,  212 => 115,  189 => 95,  163 => 72,  159 => 71,  146 => 60,  144 => 59,  132 => 49,  126 => 48,  124 => 47,  118 => 44,  112 => 43,  106 => 40,  101 => 39,  95 => 37,  89 => 35,  83 => 33,  81 => 32,  73 => 30,  69 => 29,  66 => 28,  64 => 27,  51 => 16,  48 => 15,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
