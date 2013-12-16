<?php

/* HttpiCoreBundle:Status:edit.html.twig */
class __TwigTemplate_99763e29332dd4d9c41a44874ac0f436 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:layout_sidebar.html.twig");

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d1bd413_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d1bd413_0") : $this->env->getExtension('assets')->getAssetUrl("css/d1bd413_form_1.css");
            // line 8
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

    // line 12
    public function block_js($context, array $blocks = array())
    {
        // line 13
        echo "\t";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
\t";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "4c029e5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_4c029e5_0") : $this->env->getExtension('assets')->getAssetUrl("js/4c029e5_form_1.js");
            // line 17
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

    // line 21
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 22
        echo "<ul>
\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("admin_status_");
        echo "\">Status Management</a></li>
\t<li><h1 class=\"title\">- Edit #";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</h1></li>
</ul>
";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_status__update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" class=\"default\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
\t<div class=\"default\">
\t\t<input type=\"hidden\" name=\"_method\" value=\"PUT\" />
\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
\t\t<div>
\t\t\t<p>
\t\t\t\t<button type=\"submit\">Edit</button>
\t\t\t</p>
\t\t</div>
\t</div>
</form>

<ul class=\"record_actions\">
    <li>
\t\t<p class=\"button back\">
\t\t\t<a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("admin_status_");
        echo "\">Back to list</a>
\t\t</p>
    </li>
    <li>
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_status__delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\" class=\"delete requires-confirmation\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\" />
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\" class=\"delete\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "HttpiCoreBundle:Status:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 50,  138 => 48,  131 => 44,  116 => 32,  107 => 29,  104 => 28,  97 => 24,  93 => 23,  90 => 22,  87 => 21,  71 => 17,  67 => 14,  62 => 13,  59 => 12,  43 => 8,  39 => 5,  34 => 4,  31 => 3,);
    }
}
