<?php

/* HttpiMaritimeAdminBundle:Default:layout.html.twig */
class __TwigTemplate_26a56f0c3c59f858a30464b8d18c8ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'page' => array($this, 'block_page'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'contentCssClass' => array($this, 'block_contentCssClass'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t<meta http-equiv=\"Content-Language\" content=\"en\" />
\t\t<meta name=\"Publisher\" content=\"httpi\" />
\t\t<meta name=\"Copyright\" content=\"&copy; Rus Cristian\" />
\t\t
\t\t";
        // line 10
        $this->displayBlock('css', $context, $blocks);
        // line 22
        echo "
\t</head>\t\t
\t<body>
\t\t
\t\t<!-- #wrapper -->
\t\t<div id=\"wrapper\">
\t\t\t
\t\t\t";
        // line 29
        $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:menu.html.twig")->display($context);
        // line 30
        echo "\t\t\t\t
\t\t\t\t<!-- #page -->
\t\t\t\t<div id=\"page\">
\t\t\t\t";
        // line 33
        $this->displayBlock('page', $context, $blocks);
        // line 47
        echo "\t
\t\t\t\t</div>
\t\t\t\t<!-- //#page -->
\t\t\t
\t\t</div>
\t\t<!-- //#wrapper -->
\t\t
\t\t";
        // line 54
        $this->displayBlock('js', $context, $blocks);
        // line 66
        echo "
        <script type=\"text/javascript\">
            \$(document).ready(function() {

                ";
        // line 70
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "flash"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 71
            echo "                    var params = {
                        title: '";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title"), "html", null, true);
            echo "',
                        content: '";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content"), "html", null, true);
            echo "',
                        type: '";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type"), "html", null, true);
            echo "'
                    };

                    if (params.type == 'confirm') {
                        params.buttons = [{ value: \"Yes\" }, { value: \"No\" }];
                        params.success = ";
            // line 79
            echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "success");
            echo ";
                    }

                    \$.msgBox(params);
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            });
        </script>

\t</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "LexMar 0.1.0 [dev]";
    }

    // line 10
    public function block_css($context, array $blocks = array())
    {
        // line 11
        echo "\t\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/css/reset.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/css/general.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/css/breadcrumbs.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jquerymsgbox/Styles/msgBoxLight.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jqwidgets/jqwidgets/styles/jqx.base.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jqwidgets/jqwidgets/styles/jqx.darkblue.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jqwidgets/jqwidgets/styles/jqx.lightness.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jqwidgets/jqwidgets/styles/jqx.green.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/js/jqwidgets/jqwidgets/styles/jqx.red.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/res/css/datagrid.css\" media=\"all\" />
        ";
    }

    // line 33
    public function block_page($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t
\t\t\t\t\t<!-- #breadcrumbs -->
\t\t\t\t\t<div id=\"breadcrumbs\">
\t\t\t\t\t";
        // line 37
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 38
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- //#breadcrumbs -->
\t\t\t\t\t
\t\t\t\t\t<!-- #content -->
\t\t\t\t\t<div id=\"content\" class=\"";
        // line 42
        $this->displayBlock('contentCssClass', $context, $blocks);
        echo "\">
\t\t\t\t\t";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- //#content -->
\t\t\t\t
\t\t\t\t";
    }

    // line 37
    public function block_breadcrumbs($context, array $blocks = array())
    {
    }

    // line 42
    public function block_contentCssClass($context, array $blocks = array())
    {
        echo "full";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
    }

    // line 54
    public function block_js($context, array $blocks = array())
    {
        // line 55
        echo "\t\t\t";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3a43ede_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_0") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_jquery.min_1.js");
            // line 63
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "3a43ede_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_1") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_jquery.msgBox_2.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "3a43ede_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_2") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_jqxcore_3.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "3a43ede_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_3") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_jqxmenu_4.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "3a43ede_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_4") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_jqxbuttons_5.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
            // asset "3a43ede_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede_5") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede_run_6.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        } else {
            // asset "3a43ede"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3a43ede") : $this->env->getExtension('assets')->getAssetUrl("js/3a43ede.js");
            echo "\t\t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
\t\t\t";
        }
        unset($context["asset_url"]);
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 65,  222 => 63,  217 => 55,  214 => 54,  209 => 43,  203 => 42,  198 => 37,  191 => 44,  189 => 43,  185 => 42,  179 => 38,  177 => 37,  172 => 34,  169 => 33,  162 => 19,  158 => 18,  154 => 17,  150 => 16,  146 => 15,  142 => 14,  138 => 13,  134 => 12,  129 => 11,  126 => 10,  120 => 4,  111 => 84,  100 => 79,  92 => 74,  88 => 73,  84 => 72,  81 => 71,  77 => 70,  71 => 66,  69 => 54,  60 => 47,  58 => 33,  53 => 30,  51 => 29,  42 => 22,  40 => 10,  31 => 4,  26 => 1,);
    }
}
