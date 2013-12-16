<?php

/* HttpiMaritimeAdminBundle:Default:layout_sidebar.html.twig */
class __TwigTemplate_b7f0e1fc2ad5f75c79983672523ff089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:layout.html.twig");

        $this->blocks = array(
            'contentCssClass' => array($this, 'block_contentCssClass'),
            'page' => array($this, 'block_page'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HttpiMaritimeAdminBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contentCssClass($context, array $blocks = array())
    {
    }

    // line 5
    public function block_page($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->displayParentBlock("page", $context, $blocks);
        echo "

\t<!-- #sidebar -->
\t<div id=\"sidebar\">
\t";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 11
        echo "\t</div>
\t<!-- //#sidebar -->
\t
";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Default:layout_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  48 => 11,  46 => 10,  38 => 6,  35 => 5,  30 => 3,  143 => 50,  138 => 48,  131 => 44,  116 => 32,  107 => 29,  104 => 28,  97 => 24,  93 => 23,  90 => 22,  87 => 21,  71 => 17,  67 => 14,  62 => 13,  59 => 12,  43 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
