<?php

/* HttpiCoreBundle:Crud:delete.html.twig */
class __TwigTemplate_da4ba23c3c074cd072e7e1b4c215bbcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HttpiCoreBundle:Default:base.html.twig");

        $this->blocks = array(
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
    public function block_jsexec($context, array $blocks = array())
    {
        // line 4
        echo "     <script type=\"text/javascript\">
         \$(document).ready(function() {

             ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "flash"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "             var params = {
                 title: '";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "title"), "html", null, true);
            echo "',
                 content: '";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "content"), "html", null, true);
            echo "',
                 type: '";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "type"), "html", null, true);
            echo "'
             };

             if (params.type == 'confirm') {
                 params.buttons = [{ value: \"Yes\" }, { value: \"No\" }];
                 params.success = ";
            // line 16
            echo $this->getAttribute((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "success");
            echo ";
             }

             \$.msgBox(params);
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
         });
     </script>
 ";
    }

    public function getTemplateName()
    {
        return "HttpiCoreBundle:Crud:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  223 => 62,  200 => 51,  184 => 45,  70 => 21,  23 => 3,  266 => 65,  222 => 63,  198 => 37,  191 => 44,  172 => 34,  150 => 16,  134 => 12,  129 => 11,  126 => 31,  100 => 79,  81 => 71,  77 => 26,  53 => 14,  76 => 17,  34 => 5,  20 => 1,  275 => 67,  271 => 65,  257 => 63,  249 => 59,  244 => 48,  233 => 42,  226 => 49,  212 => 57,  207 => 39,  185 => 42,  181 => 44,  165 => 18,  160 => 17,  146 => 15,  127 => 8,  58 => 33,  178 => 48,  167 => 43,  155 => 37,  148 => 35,  84 => 72,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 60,  247 => 78,  241 => 77,  229 => 73,  220 => 47,  214 => 54,  177 => 37,  169 => 33,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 47,  235 => 74,  230 => 82,  227 => 81,  224 => 48,  221 => 77,  219 => 76,  217 => 55,  208 => 68,  204 => 52,  179 => 38,  159 => 38,  143 => 32,  135 => 30,  119 => 42,  102 => 32,  71 => 66,  67 => 14,  63 => 11,  59 => 16,  38 => 6,  94 => 28,  89 => 26,  85 => 20,  75 => 17,  68 => 15,  56 => 15,  87 => 52,  21 => 1,  26 => 1,  93 => 28,  88 => 73,  78 => 34,  46 => 10,  27 => 4,  44 => 10,  31 => 4,  28 => 3,  201 => 92,  196 => 50,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 18,  156 => 66,  151 => 36,  142 => 14,  138 => 31,  136 => 30,  121 => 7,  117 => 44,  105 => 40,  91 => 27,  62 => 9,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 14,  69 => 54,  47 => 10,  40 => 8,  37 => 8,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 31,  131 => 32,  123 => 30,  120 => 4,  115 => 6,  111 => 84,  108 => 36,  101 => 67,  98 => 66,  96 => 59,  83 => 25,  74 => 14,  66 => 12,  55 => 10,  52 => 8,  50 => 4,  43 => 9,  41 => 4,  35 => 3,  32 => 3,  29 => 6,  209 => 43,  203 => 42,  199 => 34,  193 => 49,  189 => 48,  187 => 84,  182 => 66,  176 => 64,  173 => 20,  168 => 72,  164 => 59,  162 => 19,  154 => 17,  149 => 51,  147 => 38,  144 => 34,  141 => 12,  133 => 9,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 5,  106 => 36,  103 => 68,  99 => 31,  95 => 28,  92 => 74,  86 => 28,  82 => 22,  80 => 19,  73 => 16,  64 => 12,  60 => 47,  57 => 9,  54 => 8,  51 => 11,  48 => 11,  45 => 5,  42 => 22,  39 => 4,  36 => 7,  33 => 3,  30 => 3,);
    }
}
