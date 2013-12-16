<?php

/* HttpiMaritimeAdminBundle:Glossary:edit.html.twig */
class __TwigTemplate_e5116fd2f1ed49aa6ba0d650a7f563cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiCoreBundle:Crud:edit.html.twig");

        $this->blocks = array(
            'meta_copyright' => array($this, 'block_meta_copyright'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HttpiCoreBundle:Crud:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_copyright($context, array $blocks = array())
    {
        echo "&copy; Rus Cristian";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Lexmar Admin - Edit glossary term";
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:menu.html.twig")->display($context);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_glossary_index");
        echo "\">Glossary</a></li>
\t<li><h1 class=\"title\">- Edit #";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1></li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "default"), "action" => "#"));
        echo "
<p class=\"button error delete\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("httpi_maritime_admin_glossary_delete", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Delete</a></p>
<p class=\"button back\"><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_glossary_index");
        echo "\">Back to list</a></p>
";
    }

    // line 20
    public function block_sidebar($context, array $blocks = array())
    {
        // line 21
        echo "<form action=\"#\" class=\"dropzone\"></form>
";
    }

    // line 24
    public function block_css($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    ";
        // line 26
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "aa4e19f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f_general_1.css");
            // line 33
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "aa4e19f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f_breadcrumbs_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "aa4e19f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f_msgBoxLight_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "aa4e19f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f_form_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "aa4e19f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f_dropzone_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "aa4e19f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_aa4e19f") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/aa4e19f.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 37
    public function block_js($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    ";
        // line 39
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "a8352cb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_jquery.msgBox_1.js");
            // line 48
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_jqxcore_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_jqxmenu_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_jqxbuttons_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_form_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_run_6.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "a8352cb_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb_dropzone_7.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "a8352cb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a8352cb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/a8352cb.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Glossary:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  65 => 14,  223 => 62,  200 => 51,  184 => 45,  70 => 14,  23 => 3,  266 => 65,  222 => 63,  198 => 37,  191 => 44,  172 => 34,  150 => 38,  134 => 12,  129 => 11,  126 => 31,  100 => 79,  81 => 17,  77 => 16,  53 => 7,  76 => 17,  34 => 5,  20 => 1,  275 => 67,  271 => 65,  257 => 63,  249 => 59,  244 => 48,  233 => 42,  226 => 49,  212 => 57,  207 => 39,  185 => 42,  181 => 44,  165 => 18,  160 => 17,  146 => 15,  127 => 8,  58 => 33,  178 => 48,  167 => 43,  155 => 39,  148 => 35,  84 => 72,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 60,  247 => 78,  241 => 77,  229 => 73,  220 => 47,  214 => 54,  177 => 37,  169 => 33,  140 => 55,  132 => 51,  128 => 49,  107 => 33,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 47,  235 => 74,  230 => 82,  227 => 81,  224 => 48,  221 => 77,  219 => 76,  217 => 55,  208 => 68,  204 => 52,  179 => 38,  159 => 48,  143 => 32,  135 => 30,  119 => 42,  102 => 32,  71 => 66,  67 => 14,  63 => 10,  59 => 9,  38 => 6,  94 => 28,  89 => 26,  85 => 20,  75 => 17,  68 => 15,  56 => 8,  87 => 20,  21 => 1,  26 => 1,  93 => 28,  88 => 73,  78 => 34,  46 => 10,  27 => 4,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 50,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 18,  156 => 66,  151 => 36,  142 => 14,  138 => 31,  136 => 30,  121 => 7,  117 => 44,  105 => 40,  91 => 27,  62 => 9,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 14,  69 => 54,  47 => 5,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 31,  131 => 32,  123 => 30,  120 => 4,  115 => 6,  111 => 84,  108 => 36,  101 => 67,  98 => 25,  96 => 59,  83 => 25,  74 => 14,  66 => 12,  55 => 10,  52 => 8,  50 => 4,  43 => 9,  41 => 4,  35 => 3,  32 => 3,  29 => 6,  209 => 43,  203 => 42,  199 => 34,  193 => 49,  189 => 48,  187 => 84,  182 => 66,  176 => 64,  173 => 20,  168 => 72,  164 => 59,  162 => 19,  154 => 17,  149 => 51,  147 => 37,  144 => 34,  141 => 12,  133 => 9,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 5,  106 => 36,  103 => 26,  99 => 31,  95 => 24,  92 => 74,  86 => 28,  82 => 22,  80 => 19,  73 => 15,  64 => 12,  60 => 47,  57 => 9,  54 => 8,  51 => 11,  48 => 11,  45 => 5,  42 => 22,  39 => 4,  36 => 7,  33 => 3,  30 => 3,);
    }
}
