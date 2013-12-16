<?php

/* HttpiMaritimeAdminBundle:Lexicon:import.html.twig */
class __TwigTemplate_b27860dbe7b4176fa428aefcfd57e2f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiMaritimeAdminBundle:Default:base_sidebar.html.twig");

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'css' => array($this, 'block_css'),
            'js' => array($this, 'block_js'),
            'jsexec' => array($this, 'block_jsexec'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HttpiMaritimeAdminBundle:Default:base_sidebar.html.twig";
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
\t<li><h1 class=\"title\">- Import</h1></li>
</ul>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "default importForm"), "action" => $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_import")));
        echo "
";
    }

    // line 14
    public function block_sidebar($context, array $blocks = array())
    {
        // line 15
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_upload");
        echo "\" class=\"dropzone\" id=\"addImportFilesForm\" enctype=\"multipart/form-data\">
</form>
";
    }

    // line 19
    public function block_css($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fe74a67_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_form_1.css");
            // line 29
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "fe74a67_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_jqx.base_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "fe74a67_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_jqx.darkblue_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "fe74a67_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_jqx.green_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "fe74a67_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_jqx.red_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
            // asset "fe74a67_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67_dropzone_6.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        } else {
            // asset "fe74a67"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fe74a67") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/fe74a67.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
    ";
        }
        unset($context["asset_url"]);
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    ";
        // line 35
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "092a7e2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_092a7e2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/092a7e2_form_1.js");
            // line 39
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "092a7e2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_092a7e2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/092a7e2_dropzone_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "092a7e2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_092a7e2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/092a7e2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 43
    public function block_jsexec($context, array $blocks = array())
    {
        // line 44
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function() {

            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "flash"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 48
            echo "            var params = {
                title: '";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title"), "html", null, true);
            echo "',
                content: '";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content"), "html", null, true);
            echo "',
                type: '";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type"), "html", null, true);
            echo "'
            };

            if (params.type == 'confirm') {
                params.buttons = [{ value: \"Yes\" }, { value: \"No\" }];
                params.success = ";
            // line 56
            echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "success");
            echo ";
            }

            \$.msgBox(params);
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
            \$('#httpi_bundle_corebundle_import_Import').hide();

            Dropzone.options.addImportFilesForm = {
                url: \"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("httpi_maritime_admin_lexicon_upload");
        echo "\",
                maxFilesize: 50,
                maxFiles: 6,
                uploadMultiple: true,
                parallelUploads: 6,
                autoProcessQueue: true,
                //addRemoveLinks: 'dictRemoveFile',
                acceptedFiles: 'text/csv,' +
                               'application/vnd.ms-excel',
                init: function() {
                    // error event
                    this.on(\"error\", function(file, message) {

                        var params = {
                            title: 'Error!',
                            content: message,
                            type: 'error'
                        };
                        \$.msgBox(params);

                    });

                    this.on('successmultiple', function (files, responseText, e) {
                        \$('input[name=\"httpi_bundle_corebundle_import[fileIds]\"]').val(responseText.fileIdsString);
                        \$('#httpi_bundle_corebundle_import_Import').show();
                    });


                },
                accept: function(file, done) {
                    console.log('accept', true);
                    done();
                }
            };

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "HttpiMaritimeAdminBundle:Lexicon:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 56,  174 => 49,  137 => 39,  231 => 59,  215 => 53,  104 => 26,  211 => 57,  195 => 50,  192 => 49,  188 => 48,  180 => 44,  90 => 21,  65 => 14,  223 => 62,  200 => 51,  184 => 45,  70 => 20,  23 => 3,  266 => 65,  222 => 62,  198 => 37,  191 => 44,  172 => 34,  150 => 38,  134 => 40,  129 => 11,  126 => 31,  100 => 79,  81 => 17,  77 => 26,  53 => 7,  76 => 18,  34 => 5,  20 => 1,  275 => 67,  271 => 65,  257 => 63,  249 => 59,  244 => 48,  233 => 42,  226 => 49,  212 => 52,  207 => 65,  185 => 42,  181 => 44,  165 => 18,  160 => 48,  146 => 15,  127 => 8,  58 => 33,  178 => 50,  167 => 47,  155 => 39,  148 => 37,  84 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 60,  247 => 78,  241 => 77,  229 => 73,  220 => 56,  214 => 54,  177 => 37,  169 => 33,  140 => 55,  132 => 51,  128 => 34,  107 => 33,  61 => 16,  273 => 96,  269 => 94,  254 => 70,  243 => 65,  240 => 86,  238 => 47,  235 => 60,  230 => 82,  227 => 58,  224 => 57,  221 => 77,  219 => 76,  217 => 55,  208 => 68,  204 => 52,  179 => 38,  159 => 43,  143 => 32,  135 => 30,  119 => 42,  102 => 32,  71 => 14,  67 => 19,  63 => 10,  59 => 15,  38 => 5,  94 => 28,  89 => 26,  85 => 20,  75 => 21,  68 => 15,  56 => 14,  87 => 20,  21 => 2,  26 => 2,  93 => 28,  88 => 20,  78 => 16,  46 => 10,  27 => 4,  44 => 10,  31 => 10,  28 => 3,  201 => 61,  196 => 50,  183 => 45,  171 => 48,  166 => 71,  163 => 62,  158 => 18,  156 => 39,  151 => 38,  142 => 14,  138 => 31,  136 => 30,  121 => 7,  117 => 44,  105 => 40,  91 => 21,  62 => 9,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 29,  72 => 14,  69 => 17,  47 => 10,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 31,  131 => 32,  123 => 30,  120 => 36,  115 => 6,  111 => 31,  108 => 33,  101 => 67,  98 => 25,  96 => 24,  83 => 25,  74 => 15,  66 => 16,  55 => 10,  52 => 11,  50 => 11,  43 => 9,  41 => 4,  35 => 3,  32 => 3,  29 => 8,  209 => 43,  203 => 52,  199 => 51,  193 => 49,  189 => 48,  187 => 84,  182 => 51,  176 => 64,  173 => 20,  168 => 72,  164 => 59,  162 => 44,  154 => 17,  149 => 51,  147 => 38,  144 => 34,  141 => 12,  133 => 35,  130 => 32,  125 => 33,  122 => 30,  116 => 32,  112 => 42,  109 => 5,  106 => 36,  103 => 26,  99 => 25,  95 => 24,  92 => 74,  86 => 26,  82 => 17,  80 => 19,  73 => 16,  64 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 7,  48 => 5,  45 => 5,  42 => 4,  39 => 5,  36 => 4,  33 => 3,  30 => 3,);
    }
}
