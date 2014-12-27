<?php

/* VbvWebaliasBundle:Alias:search.html.twig */
class __TwigTemplate_2f1d5de4c114089b19f600fe7e646d82c60cebadb3273e06781fd05c82a9b13c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VbvWebaliasBundle:Alias:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'inlinejs' => array($this, 'block_inlinejs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VbvWebaliasBundle:Alias:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " WebAlias - Buscar alias ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
\t\t<div class=\"container\">
\t\t
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-4 col-md-offset-2\">
\t\t\t\t\t<h2>Consulta un alias</h2>
\t\t\t\t\t<p>Puedes introducir un tag y un código y la página asociada aparecerá! También puedes introducir unicamente un tag y ver todas las páginas asociadas a ese tag.</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-4 my-search\">
\t\t\t\t\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("role" => "form"));
        echo "
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t<span class=\"input-group-addon\">#</span>
\t\t\t\t\t\t";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tag", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduce el Tag")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t<span class=\"input-group-addon\">@</span>
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduce el Cdigo")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
\t\t\t\t\t\t";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row text-center\">
\t\t\t\t";
        // line 36
        if ((array_key_exists("searchSuccess", $context) && ((isset($context["searchSuccess"]) ? $context["searchSuccess"] : $this->getContext($context, "searchSuccess")) == false))) {
            // line 37
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\"><h4>No se han encontrado resultados para el tag <strong>#";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alias"]) ? $context["alias"] : $this->getContext($context, "alias")), "tag", array()), "html", null, true);
            echo "</strong> 
\t\t\t\t\t\t";
            // line 38
            if (($this->getAttribute((isset($context["alias"]) ? $context["alias"] : $this->getContext($context, "alias")), "code", array()) != "")) {
                // line 39
                echo "\t\t\t\t\t\t\ty el código <strong>@";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["alias"]) ? $context["alias"] : $this->getContext($context, "alias")), "code", array()), "html", null, true);
                echo "</strong>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t
\t\t\t\t\t</h4></div>
\t\t\t\t";
        }
        // line 43
        echo "\t\t\t</div>

";
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
        // line 49
        echo "        <script type=\"text/javascript\">
            window.onload = function() {
                \$(\"#header-but-search\").addClass(\"active\");
                \$(\"#header-but-create\").removeClass(\"active\");
            };
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Alias:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 49,  119 => 48,  116 => 47,  110 => 43,  105 => 40,  99 => 39,  97 => 38,  92 => 37,  90 => 36,  80 => 29,  76 => 28,  70 => 25,  63 => 21,  57 => 18,  53 => 17,  40 => 6,  37 => 5,  31 => 3,);
    }
}
