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
\t\t\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_status_");
        echo "\">Status Management</a></li>
\t\t\t\t<li><a href=\"#\">Users</a></li>
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
        return array (  57 => 19,  49 => 14,  45 => 13,  37 => 8,  29 => 6,  23 => 3,  19 => 1,  264 => 65,  220 => 63,  215 => 55,  212 => 54,  207 => 43,  201 => 42,  196 => 37,  189 => 44,  187 => 43,  183 => 42,  177 => 38,  175 => 37,  170 => 34,  167 => 33,  160 => 19,  156 => 18,  152 => 17,  148 => 16,  144 => 15,  140 => 14,  136 => 13,  132 => 12,  127 => 11,  124 => 10,  118 => 4,  112 => 90,  99 => 80,  91 => 75,  87 => 74,  83 => 73,  74 => 67,  71 => 66,  60 => 47,  58 => 33,  53 => 30,  51 => 29,  40 => 10,  31 => 4,  26 => 1,  79 => 18,  76 => 68,  69 => 54,  66 => 12,  63 => 11,  56 => 8,  42 => 22,  38 => 5,  33 => 7,  30 => 3,);
    }
}
