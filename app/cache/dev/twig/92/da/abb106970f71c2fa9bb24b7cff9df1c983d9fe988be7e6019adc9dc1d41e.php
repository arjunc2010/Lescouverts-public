<?php

/* LesRestaurantBundle:Admin:PersonalInformation/Blocks/myPersonalInformationForm.html.twig */
class __TwigTemplate_92daabb106970f71c2fa9bb24b7cff9df1c983d9fe988be7e6019adc9dc1d41e extends Twig_Template
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


    #information-container{
        width: 100%;
        min-height: 90px;
        float: left;
        aborder-style: dashed;
        text-align: center;
        margin-top: 30px;
    }

            #information-container form div :not(.form-container)  {
                margin-left: 20px;
                margin-bottom: 15px;
            }

            #information-container form label{
                margin-right: 20px;
            }

            #information-container form input[type='text'] , #information-container form input[type='number']{
                height: 48px;
                width: 311px;
                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                border-color: #D8D8D8;
                border-style: double;
                text-align: center;
            }

            #information-container form label{
                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;

            }


                            button[type='submit']{
                                height: 48px;
                                width: 49%;
                                font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                                font-weight: bold;
                                font-size: 15px;
                                color: white;
                                border-color: #53A11F;
                                background-color: #53A11F;
                                border-style: double;
                                border-radius: 5px;
                                cursor: pointer;
                                margin-top: 20px;
                            }


    .form-container{
        width: 70%;
        margin-top: 50px;

        aborder-style: dashed;
        text-align: center;
        display: inline-block;
    }




    .form-cell{
        border-bottom-style: groove;
        border-color: rgb(237,237,237);
        display: inline-block;
    }


    .form-cell-title{
        font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
        color: rgb(127,127,127);
        font-size: 22px;
    }
                .form-cell-sub-title{
                    font-family: \"Palatino Linotype\", \"Book Antiqua\", Palatino, serif;
                    color: rgb(127,127,127);
                    font-size: 17px;
                    position: relative;
                    left: 720px;
                    width: 230px;
                }

</style>

<div id=\"information-container\">


    ";
        // line 91
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <h1 class=\"form-cell-title\" > MY PERSONAL  INFORMATION </h1>
    <h2 class=\"form-cell-sub-title\" > (Information of Subscriber) </h2>


    <div class=\"form-container\">
        <div class=\"form-cell\" >
            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name_of_restaurant"), 'row');
        echo "
            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name"), 'row');
        echo "
            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family_name"), 'row');
        echo "
            ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address"), 'row');
        echo "
              <div>
                  <label> Telephone (Mobile) </label>
                  ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone_1"), 'widget');
        echo "
                  ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone_1"), 'errors');
        echo "
              </div>
            <div>
                <label> Telephone (Landline) </label>
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone_2"), 'widget');
        echo "
                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone_2"), 'errors');
        echo "
            </div>
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        </div>
    </div>

    <div>

        ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'row');
        echo "

    </div>


    ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "LesRestaurantBundle:Admin:PersonalInformation/Blocks/myPersonalInformationForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 124,  172 => 119,  163 => 113,  158 => 111,  154 => 110,  147 => 106,  143 => 105,  137 => 102,  133 => 101,  129 => 100,  125 => 99,  115 => 92,  111 => 91,  19 => 1,  63 => 23,  58 => 20,  56 => 19,  50 => 15,  47 => 14,  41 => 9,  37 => 8,  32 => 7,  29 => 6,);
    }
}
