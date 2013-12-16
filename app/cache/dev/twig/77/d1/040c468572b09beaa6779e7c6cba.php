<?php

/* HttpiCoreBundle:Default:base.html.twig */
class __TwigTemplate_77d1040c468572b09beaa6779e7c6cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'title' => array($this, 'block_title'),
            'meta_charset' => array($this, 'block_meta_charset'),
            'meta_content_language' => array($this, 'block_meta_content_language'),
            'meta_publisher' => array($this, 'block_meta_publisher'),
            'meta_copyright' => array($this, 'block_meta_copyright'),
            'css' => array($this, 'block_css'),
            'menu' => array($this, 'block_menu'),
            'page' => array($this, 'block_page'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'contentCssClass' => array($this, 'block_contentCssClass'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
            'jsexec' => array($this, 'block_jsexec'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
";
        // line 2
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        // line 3
        echo "<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 6
        $this->displayBlock('meta_charset', $context, $blocks);
        echo "\" />
\t\t<meta http-equiv=\"Content-Language\" content=\"";
        // line 7
        $this->displayBlock('meta_content_language', $context, $blocks);
        echo "\" />
\t\t<meta name=\"Publisher\" content=\"";
        // line 8
        $this->displayBlock('meta_publisher', $context, $blocks);
        echo "\" />
\t\t<meta name=\"Copyright\" content=\"";
        // line 9
        $this->displayBlock('meta_copyright', $context, $blocks);
        echo "\" />
\t\t
            ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 27
        echo "
\t</head>\t\t
\t<body>
\t\t
\t\t<!-- #wrapper -->
\t\t<div id=\"wrapper\">

            ";
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "\t\t\t\t
\t\t\t\t<!-- #page -->
\t\t\t\t<div id=\"page\">
\t\t\t\t";
        // line 38
        $this->displayBlock('page', $context, $blocks);
        // line 52
        echo "\t
\t\t\t\t</div>
\t\t\t\t<!-- //#page -->
\t\t\t
\t\t</div>
\t\t<!-- //#wrapper -->
\t\t
\t\t";
        // line 59
        $this->displayBlock('js', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        $this->displayBlock('jsexec', $context, $blocks);
        // line 68
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Please enter a value for the title block!";
    }

    // line 6
    public function block_meta_charset($context, array $blocks = array())
    {
        echo "utf-8";
    }

    // line 7
    public function block_meta_content_language($context, array $blocks = array())
    {
        echo "en";
    }

    // line 8
    public function block_meta_publisher($context, array $blocks = array())
    {
        echo "httpi";
    }

    // line 9
    public function block_meta_copyright($context, array $blocks = array())
    {
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e859442_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e859442_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e859442_reset_1.css");
            // line 15
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                ";
        } else {
            // asset "e859442"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e859442") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/e859442.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
                ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            <!--<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/css/general.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />-->
            <!--<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/css/breadcrumbs.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jquerymsgbox/Styles/msgBoxLight.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jqwidgets/jqwidgets/styles/jqx.base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jqwidgets/jqwidgets/styles/jqx.darkblue.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jqwidgets/jqwidgets/styles/jqx.lightness.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jqwidgets/jqwidgets/styles/jqx.green.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/js/jqwidgets/jqwidgets/styles/jqx.red.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpicore/css/datagrid.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />-->
            ";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 38
    public function block_page($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t\t
\t\t\t\t\t<!-- #breadcrumbs -->
\t\t\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t\t";
        // line 42
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 43
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- //#breadcrumbs -->
\t\t\t\t\t
\t\t\t\t\t<!-- #content -->
\t\t\t\t\t<div id=\"content\" class=\"";
        // line 47
        $this->displayBlock('contentCssClass', $context, $blocks);
        echo "\">
\t\t\t\t\t";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- //#content -->
\t\t\t\t
\t\t\t\t";
    }

    // line 42
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 47
    public function block_contentCssClass($context, array $blocks = array())
    {
        echo "full";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
    }

    // line 59
    public function block_js($context, array $blocks = array())
    {
        // line 60
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ebefa89_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebefa89_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ebefa89_jquery.min_1.js");
            // line 63
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "ebefa89"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebefa89") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/ebefa89.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 65
        echo "        ";
    }

    // line 67
    public function block_jsexec($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "HttpiCoreBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  275 => 67,  271 => 65,  257 => 63,  252 => 60,  249 => 59,  244 => 48,  238 => 47,  233 => 42,  226 => 49,  224 => 48,  220 => 47,  214 => 43,  212 => 42,  207 => 39,  204 => 38,  199 => 34,  193 => 25,  189 => 24,  185 => 23,  181 => 22,  177 => 21,  173 => 20,  169 => 19,  165 => 18,  160 => 17,  146 => 15,  141 => 12,  138 => 11,  133 => 9,  127 => 8,  121 => 7,  115 => 6,  109 => 5,  103 => 68,  101 => 67,  98 => 66,  96 => 59,  87 => 52,  85 => 38,  80 => 35,  78 => 34,  69 => 27,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 3,  36 => 2,  33 => 1,);
    }
}
