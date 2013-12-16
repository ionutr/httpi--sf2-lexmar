<?php

/* HttpiMaritimeAdminBundle:Default:base.html.twig */
class __TwigTemplate_a486141d880ae4210a4dbc2019bd42a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiCoreBundle:Default:base.html.twig");

        $this->blocks = array(
            'meta_copyright' => array($this, 'block_meta_copyright'),
            'menu' => array($this, 'block_menu'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'jsexec' => array($this, 'block_jsexec'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HttpiCoreBundle:Default:base.html.twig";
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
    public function block_menu($context, array $blocks = array())
    {
        $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:menu.html.twig")->display($context);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1f84102_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f84102_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f84102_general_1.css");
            // line 13
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "1f84102_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f84102_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f84102_breadcrumbs_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "1f84102_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f84102_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f84102_msgBoxLight_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "1f84102"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1f84102") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/1f84102.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 17
    public function block_js($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5cc0278_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278_jquery.msgBox_1.js");
            // line 26
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5cc0278_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278_jqxcore_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5cc0278_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278_jqxmenu_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5cc0278_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278_jqxbuttons_4.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5cc0278_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278_run_5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5cc0278"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5cc0278") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/5cc0278.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 30
    public function block_jsexec($context, array $blocks = array())
    {
        // line 31
        echo "     <script type=\"text/javascript\">
         \$(document).ready(function() {

             ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "flash"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "             var params = {
                 title: '";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title"), "html", null, true);
            echo "',
                 content: '";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content"), "html", null, true);
            echo "',
                 type: '";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type"), "html", null, true);
            echo "'
             };

             if (params.type == 'confirm') {
                 params.buttons = [{ value: \"Yes\" }, { value: \"No\" }];
                 params.success = ";
            // line 43
            echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "success");
            echo ";
             }

             \$.msgBox(params);
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
         });
     </script>
 ";
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 48,  167 => 43,  159 => 38,  155 => 37,  151 => 36,  148 => 35,  144 => 34,  139 => 31,  136 => 30,  96 => 26,  92 => 19,  87 => 18,  84 => 17,  56 => 13,  52 => 8,  47 => 7,  44 => 6,  38 => 4,  32 => 3,  31 => 4,  28 => 3,);
    }
}
