<?php

/* VbvWebaliasBundle:Page:header.html.twig */
class __TwigTemplate_8a5fd38c5e09a08814f3e4b015810cf2e8dc2923453c31f38c2a22b3a07f3353 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1 class=\"web-title\">Bienvenido a Web Alias</h1>
        <p>Web Alias te permite resumir largas direcciones de páginas webs en dos piezas pequeñas de información. Un tag y un código. Comunica tus enlaces de forma rápida, corta y conveniente!</p>
        <ul class=\"nav nav-pills nav-justified\">
            <li id=\"header-but-search\" role=\"presentation\" class=\"\">
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("vbv_webalias_main_search");
        echo "\">Consulta un alias</a>
            </li>
            <li id=\"header-but-create\" role=\"presentation\" class=\"\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("vbv_webalias_main_create");
        echo "\">Crea tu alias</a>
            </li>
        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Page:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  27 => 7,  19 => 1,);
    }
}
