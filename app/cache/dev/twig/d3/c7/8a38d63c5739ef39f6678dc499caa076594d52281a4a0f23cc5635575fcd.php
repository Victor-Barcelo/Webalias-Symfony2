<?php

/* VbvWebaliasBundle:Page:search.html.twig */
class __TwigTemplate_d3c78a38d63c5739ef39f6678dc499caa076594d52281a4a0f23cc5635575fcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VbvWebaliasBundle:Page:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VbvWebaliasBundle:Page:layout.html.twig";
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
        echo "\t<div class=\"container\">
\t    <div class=\"row\">
\t        <div class=\"col-md-4 col-md-offset-2\">
\t            <h2>Consulta un alias</h2>
\t            <p>Puedes introducir un tag y un código y la página asociada aparecerá! También puedes introducir unicamente un tag y ver todas las páginas asociadas a ese tag.</p>
\t        </div>
\t        <div class=\"col-md-4 my-search\">

\t        </div>
\t    </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Page:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
