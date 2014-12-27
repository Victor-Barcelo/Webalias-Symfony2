<?php

/* VbvWebaliasBundle:Page:create.html.twig */
class __TwigTemplate_fe720152319015e706a1341efa9aa07099342fd2828d2fb1768683af6c7e34d7 extends Twig_Template
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
        echo " WebAlias - Crear alias ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-2\">
                <h2>Crea un alias</h2>
                <p>Introducir un tag, un código y una página Web. En un instante tendrás un nuevo alias registrado con nosotros!</p>
            </div>
            <div class=\"col-md-4 my-search\">

            </div>        
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Page:create.html.twig";
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
