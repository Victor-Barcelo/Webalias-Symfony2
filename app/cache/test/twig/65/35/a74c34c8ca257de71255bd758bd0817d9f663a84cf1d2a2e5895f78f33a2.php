<?php

/* VbvWebaliasBundle:Alias:list.html.twig */
class __TwigTemplate_6535a74c34c8ca257de71255bd758bd0817d9f663a84cf1d2a2e5895f78f33a2 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " WebAlias - Lista de alias ";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h3>Enlaces</h3>
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Tag</th>
\t\t\t\t\t\t<th>Código</th>
\t\t\t\t\t\t<th>Url</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliases"]) ? $context["aliases"] : $this->getContext($context, "aliases")));
        foreach ($context['_seq'] as $context["_key"] => $context["alias"]) {
            // line 19
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["alias"], "tag", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["alias"], "code", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["alias"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alias"], "url", array()), "html", null, true);
            echo "</a></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alias'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div> 

";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayBlock('inlinejs', $context, $blocks);
    }

    public function block_inlinejs($context, array $blocks = array())
    {
        // line 35
        echo "        <script type=\"text/javascript\">
            window.onload = function() {
                \$(\"#header-but-search\").addClass(\"btn-default\");
                \$(\"#header-but-create\").addClass(\"btn-default\");
            };
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "VbvWebaliasBundle:Alias:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 35,  95 => 34,  92 => 33,  82 => 25,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  37 => 3,  31 => 2,);
    }
}
