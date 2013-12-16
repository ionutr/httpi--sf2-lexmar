<?php

/* HttpiMaritimeAdminBundle:Lexicon:add.html.twig */
class __TwigTemplate_15dbb01f5b3745eca7914bcdb7184f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:layout.html.twig");

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "<ul>
\t<li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_index");
        echo "\">Lexicon</a></li>
\t<li><h1 class=\"title\">- Add</h1></li>
</ul>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "default"), "action" => $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_add")));
        echo "
";
    }

    // line 14
    public function block_css($context, array $blocks = array())
    {
        // line 15
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d1bd413_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d1bd413_0") : $this->env->getExtension('assets')->getAssetUrl("css/d1bd413_form_1.css");
            // line 17
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "d1bd413"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d1bd413") : $this->env->getExtension('assets')->getAssetUrl("css/d1bd413.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 21
    public function block_js($context, array $blocks = array())
    {
        // line 22
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c029e5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c029e5_0") : $this->env->getExtension('assets')->getAssetUrl("js/4c029e5_form_1.js");
            // line 24
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "4c029e5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c029e5") : $this->env->getExtension('assets')->getAssetUrl("js/4c029e5.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Lexicon:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  90 => 23,  85 => 22,  82 => 21,  66 => 17,  62 => 16,  57 => 15,  54 => 14,  48 => 11,  45 => 10,  37 => 5,  34 => 4,  31 => 3,);
    }
}
