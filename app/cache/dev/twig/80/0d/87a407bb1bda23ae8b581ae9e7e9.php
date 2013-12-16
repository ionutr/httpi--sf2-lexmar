<?php

/* HttpiMaritimeAdminBundle:Default:menu.html.twig */
class __TwigTemplate_800d87a407bb1bda23ae8b581ae9e7e9 extends Twig_Template
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
        echo "<div id=\"menu\">
\t<ul>
\t\t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_homepage");
        echo "\">Dashboard</a></li>
\t\t<li>Lexicon
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_index");
        echo "\">List/search</a></li>
\t\t\t\t<li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_add");
        echo "\">Add term</a></li>
\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_import");
        echo "\">Import</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li>Glossary
\t\t\t<ul>
\t\t\t\t<li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_glossary_index");
        echo "\">List/search</a></li>
\t\t\t\t<li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_glossary_add");
        echo "\">Add term</a></li>
\t\t\t</ul>
\t\t</li>
\t\t<li>System
\t\t\t<ul>
\t\t\t\t";
        // line 20
        echo "\t\t\t\t<li><a href=\"#\">Users</a></li>
\t\t\t\t<li><a href=\"#\">Statistics</a></li>
\t\t\t</ul>
\t\t</li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  49 => 14,  45 => 13,  37 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,  178 => 48,  167 => 43,  159 => 38,  155 => 37,  151 => 36,  148 => 35,  144 => 34,  139 => 31,  136 => 30,  96 => 26,  92 => 19,  87 => 18,  84 => 17,  56 => 13,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
