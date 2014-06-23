<?php

/* LesCouvertsBundle:Couverts:booking.html.twig */
class __TwigTemplate_f77ed02a2539eb2ca60997babd5a212d3aba10c756b2677d9b980dc433e0d7e9 extends Twig_Template
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
        echo "     \t\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 \t\t\t\t<link rel=\"stylesheet\" href= \"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LesCouverts/css/user-perspective.css"), "html", null, true);
        echo "\" type=\"text/css\" />
 \t\t\t";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "
                    ";
        // line 14
        $this->env->loadTemplate("LesCouvertsBundle:Couverts:Blocks/searchForm.html.twig")->display($context);
        // line 15
        echo "



            <div id=\"main-list-container\">
                        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) ? $context["restaurants"] : $this->getContext($context, "restaurants")));
        foreach ($context['_seq'] as $context["_key"] => $context["resto"]) {
            // line 21
            echo "                             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("resto_homepage", array("id" => $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "id"))), "html", null, true);
            echo "\" >
\t\t\t\t\t\t\t   \t    <div class=\"list-container\">
\t\t\t\t\t\t\t\t \t\t<div class=\"list-cell\" >
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-name\" > ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "name"), "html", null, true);
            echo "</span><br>
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-address\" > ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "address"), "html", null, true);
            echo " </span><br>
\t\t\t\t\t\t\t\t \t\t\t<span class=\"list-cell-data-type\" > ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resto"]) ? $context["resto"] : $this->getContext($context, "resto")), "cuisine"), "html", null, true);
            echo " </span><br>
\t\t\t\t\t\t\t\t \t\t</div>
\t\t\t\t\t\t\t\t \t</div>
                             </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

\t\t    \t\t</div>






\t\t \t\t";
        // line 40
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "639620b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_639620b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/639620b_user-perspective_1.js");
            // line 41
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        } else {
            // asset "639620b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_639620b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/639620b.js");
            echo "\t\t\t\t\t<script src=\" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" type=\"text/javascript\"> </script>
\t\t\t\t";
        }
        unset($context["asset_url"]);
        // line 43
        echo "
            ";
        // line 45
        echo "
                <script>
                </script>


\t  \t";
    }

    public function getTemplateName()
    {
        return "LesCouvertsBundle:Couverts:booking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  117 => 43,  103 => 41,  99 => 40,  88 => 31,  77 => 26,  73 => 25,  69 => 24,  62 => 21,  58 => 20,  51 => 15,  49 => 14,  46 => 13,  43 => 12,  37 => 8,  32 => 7,  29 => 6,);
    }
}
