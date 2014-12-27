<?php

/* VbvWebaliasBundle:Alias:layout.html.twig */
class __TwigTemplate_40e9f754a2eea4edc1a1aae8fad3f569e3b46162c4995ecd01d8e353ed68cd24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\"/>
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>

<header>
    ";
        // line 19
        $this->env->loadTemplate("VbvWebaliasBundle:Alias:header.html.twig")->display($context);
        // line 20
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 21
        echo "</header>

<main>
    ";
        // line 24
        $this->displayBlock('main', $context, $blocks);
        // line 25
        echo "</main>

<footer>
    ";
        // line 28
        $this->env->loadTemplate("VbvWebaliasBundle:Alias:footer.html.twig")->display($context);
        // line 29
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 30
        echo "</footer>

";
        // line 32
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "
</body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Web Alias";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/css/vendor/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/css/vendor/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/css/main.css"), "html", null, true);
        echo " \" type=\"text/css\" rel=\"stylesheet \"/>
    ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        // line 33
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/js/vendor/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webalias/js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Alias:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 36,  135 => 35,  131 => 34,  128 => 33,  125 => 32,  120 => 29,  115 => 24,  110 => 20,  104 => 12,  99 => 10,  95 => 9,  90 => 8,  87 => 7,  81 => 6,  73 => 38,  71 => 32,  67 => 30,  64 => 29,  62 => 28,  57 => 25,  55 => 24,  50 => 21,  47 => 20,  45 => 19,  38 => 14,  36 => 7,  32 => 6,  25 => 1,);
    }
}
