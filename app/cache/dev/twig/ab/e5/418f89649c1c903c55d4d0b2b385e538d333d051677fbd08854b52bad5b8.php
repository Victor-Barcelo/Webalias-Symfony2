<?php

/* VbvWebaliasBundle:Alias:create.html.twig */
class __TwigTemplate_abe5418f89649c1c903c55d4d0b2b385e538d333d051677fbd08854b52bad5b8 extends Twig_Template
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
        echo " WebAlias - Crear alias ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
        <div class=\"container\">
        
            <div class=\"row\">
                
                <div class=\"col-md-4 col-md-offset-2\">
                    <h2>Crea un alias</h2>
                    <p>Introducir un tag, un código y una página Web. En un instante tendrás un nuevo alias registrado con nosotros!</p>
                </div>

                <div class=\"col-md-4 my-create\">
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("role" => "form"));
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\">#</span>
                        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tag", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduce el Tag")));
        echo "
                    </div>
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\">@</span>
                        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduce el Cdigo")));
        echo "
                    </div>
                    <div class=\"input-group input-group-lg\">
                        <span class=\"input-group-addon\">></span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Introduce la pagina web")));
        echo "
                    </div>
                    <div class=\"row text-center\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
                        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>

            </div>

            <div class=\"row text-center\">
                ";
        // line 40
        if ((array_key_exists("createSuccess", $context) && ((isset($context["createSuccess"]) ? $context["createSuccess"] : $this->getContext($context, "createSuccess")) == false))) {
            // line 41
            echo "                    <div class=\"alert alert-danger\" role=\"alert\"><h4>Error, ya existe un alias con el tag y codigo introducidos</h4></div>
                ";
        }
        // line 43
        echo "                ";
        if ((array_key_exists("createSuccess", $context) && ((isset($context["createSuccess"]) ? $context["createSuccess"] : $this->getContext($context, "createSuccess")) == true))) {
            // line 44
            echo "                    <div class=\"alert alert-success\" role=\"alert\"><h4>El alias ha sido creado</h4></div>
                ";
        }
        // line 46
        echo "            </div>

";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
        // line 52
        echo "        <script type=\"text/javascript\">
            window.onload = function() {
                \$(\"#header-but-create\").addClass(\"active\");
                \$(\"#header-but-search\").removeClass(\"active\");
            };
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Alias:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  119 => 51,  116 => 50,  110 => 46,  106 => 44,  103 => 43,  99 => 41,  97 => 40,  87 => 33,  83 => 32,  77 => 29,  70 => 25,  63 => 21,  57 => 18,  53 => 17,  40 => 6,  37 => 5,  31 => 3,);
    }
}
