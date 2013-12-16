<?php

/* HttpiMaritimeAdminBundle:Lexicon:delete.html.twig */
class __TwigTemplate_9e091e1036a5e323a290a34fba1bd102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:layout_sidebar.html.twig");

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HttpiMaritimeAdminBundle:Default:layout_sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_index");
        echo "\">Lexicon</a></li>
\t<li><h1 class=\"title\">- Delete</h1></li>
</ul>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Lexicon:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  35 => 5,  32 => 4,  29 => 3,);
    }
}
