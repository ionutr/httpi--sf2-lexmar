<?php

/* HttpiMaritimeAdminBundle:Default:index.html.twig */
class __TwigTemplate_44f4bd378a885ca9cf08d583031159f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:layout.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3136dac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3136dac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3136dac_apydatagrid_1.css");
            // line 6
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "3136dac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3136dac") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/3136dac.css");
            echo "\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/httpimaritimeadmin/css/apydatagrid.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 11
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 12
        echo "<ul>
\t<li><h1 class=\"title\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["sectionTitle"]) ? $context["sectionTitle"] : $this->getContext($context, "sectionTitle")), "html", null, true);
        echo "</h1></li>
</ul>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo $this->env->getExtension('datagrid_twig_extension')->getGrid((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  76 => 17,  69 => 13,  66 => 12,  63 => 11,  56 => 8,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
