<?php

/* APYDataGridBundle::blocks_js.jquery.html.twig */
class __TwigTemplate_48331b26dd4f39d5b8cc5cac4fbfed2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("APYDataGridBundle::blocks.html.twig");

        $this->blocks = array(
            'grid_scripts_goto' => array($this, 'block_grid_scripts_goto'),
            'grid_scripts_submit_form' => array($this, 'block_grid_scripts_submit_form'),
            'grid_scripts_ajax' => array($this, 'block_grid_scripts_ajax'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYDataGridBundle::blocks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_grid_scripts_goto($context, array $blocks = array())
    {
        // line 4
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_goto(url, data, type)
{
    type = type || 'GET';
    data = data || [];

    \$.ajax({
        url: url,
        data: data,
        type: type
    }).done(function( msg ) {
        \$('#";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "').parent().replaceWith(msg);
    });

    return false
}
";
    }

    // line 21
    public function block_grid_scripts_submit_form($context, array $blocks = array())
    {
        // line 22
        echo "function ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_submitForm(event, form)
{
    if (event.type != 'keypress' || event.which == 13) {
        var data = '';
        \$('.grid-filter-operator select, .grid-filter-input-query-from, .grid-filter-input-query-to, .grid-filter-select-query-from, .grid-filter-select-query-to', form).each(function () {
            if (\$(this).is(':disabled') == false) {
                var name = \$(this).attr('name');
                var value = \$(this).val();
                if (value != null) {
                    if (\$(this).attr('multiple') == 'multiple') {
                        for(var i= 0; i < value.length; i++)
                        {
                            data += '&' + name + '=' + value[i];
                        }
                    } else {
                        data += '&' + name + '=' + value;
                    }
                } else {
                    data += '&' + name + '=';
                }
            }
        });

        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl"), "html", null, true);
        echo "', data.substring(1), 'POST');

        return false;
    }
}
";
    }

    // line 52
    public function block_grid_scripts_ajax($context, array $blocks = array())
    {
        // line 53
        echo "\$(function () {
    // Order and pagerfanta links
    \$('.pagination li.disabled a', '#";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "').click(function (e) {
        return false;
    });

    // Order and pagerfanta links
    \$('a.order, nav a, a.searchOnClick, .pagination li:not(.disabled) a', '#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "').click(function () {
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_goto(this.href);

        return false;
    });

    // Reset link
    \$('#";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo " a.grid-reset').click(function () {
        ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_reset();

        return false;
    });

    // Mass actions submit
    \$('#";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo " input.submit-massaction').click(function () {
        var selector = \$('#";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo " .grid_massactions select');

        ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_goto('";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "routeUrl"), "html", null, true);
        echo "', selector.attr('name') + '=' + selector.val(), 'POST');

        return false;
    });

    // Grid_search submit (load only one time)
    \$('#";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_search').one('submit', function (event) {
        ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["grid"]) ? $context["grid"] : $this->getContext($context, "grid")), "hash"), "html", null, true);
        echo "_submitForm(event, this);

        return false;
    });
});
";
    }

    public function getTemplateName()
    {
        return "APYDataGridBundle::blocks_js.jquery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 60,  1899 => 528,  1879 => 512,  1876 => 511,  1854 => 494,  1844 => 489,  1835 => 484,  1833 => 483,  1831 => 482,  1829 => 481,  1827 => 480,  1824 => 479,  1813 => 471,  1806 => 469,  1802 => 468,  1796 => 465,  1785 => 457,  1779 => 455,  1776 => 454,  1767 => 448,  1762 => 446,  1758 => 445,  1755 => 444,  1751 => 442,  1749 => 441,  1732 => 427,  1726 => 425,  1723 => 424,  1712 => 418,  1706 => 416,  1703 => 415,  1691 => 408,  1678 => 399,  1675 => 398,  1664 => 392,  1658 => 390,  1655 => 389,  1644 => 383,  1638 => 381,  1635 => 380,  1624 => 374,  1618 => 372,  1615 => 371,  1603 => 363,  1600 => 362,  1593 => 358,  1589 => 357,  1585 => 356,  1581 => 355,  1577 => 354,  1573 => 353,  1569 => 352,  1565 => 351,  1561 => 350,  1557 => 349,  1553 => 348,  1550 => 347,  1547 => 346,  1538 => 340,  1535 => 339,  1526 => 336,  1523 => 335,  1517 => 331,  1514 => 330,  1508 => 329,  1505 => 328,  1490 => 326,  1486 => 325,  1467 => 323,  1464 => 322,  1449 => 320,  1445 => 319,  1421 => 317,  1418 => 316,  1412 => 315,  1409 => 314,  1378 => 312,  1374 => 311,  1366 => 310,  1363 => 309,  1332 => 307,  1328 => 306,  1319 => 305,  1317 => 304,  1312 => 302,  1309 => 301,  1307 => 300,  1305 => 299,  1303 => 298,  1301 => 297,  1299 => 296,  1297 => 295,  1295 => 294,  1293 => 293,  1291 => 292,  1288 => 291,  1262 => 286,  1240 => 285,  1235 => 283,  1232 => 282,  1230 => 281,  1228 => 280,  1226 => 279,  1224 => 278,  1222 => 277,  1220 => 276,  1218 => 275,  1215 => 274,  1208 => 269,  1193 => 267,  1189 => 266,  1173 => 265,  1170 => 264,  1168 => 263,  1165 => 262,  1156 => 257,  1150 => 255,  1138 => 253,  1135 => 252,  1133 => 251,  1131 => 250,  1128 => 249,  1110 => 245,  1107 => 244,  1105 => 243,  1088 => 242,  1086 => 241,  1084 => 240,  1081 => 239,  1070 => 236,  1067 => 235,  1056 => 232,  1053 => 231,  1048 => 228,  1017 => 226,  1013 => 225,  1010 => 224,  1007 => 223,  1004 => 222,  999 => 219,  994 => 217,  991 => 216,  980 => 214,  976 => 213,  969 => 211,  964 => 210,  962 => 209,  959 => 208,  956 => 207,  951 => 204,  946 => 202,  943 => 201,  932 => 199,  928 => 198,  921 => 196,  916 => 195,  914 => 194,  911 => 193,  908 => 192,  903 => 189,  897 => 186,  894 => 185,  883 => 183,  879 => 182,  872 => 180,  864 => 179,  860 => 178,  857 => 177,  855 => 176,  850 => 174,  844 => 173,  838 => 172,  832 => 171,  826 => 170,  822 => 168,  819 => 167,  812 => 164,  797 => 162,  793 => 161,  789 => 160,  785 => 159,  782 => 158,  769 => 154,  763 => 153,  754 => 152,  752 => 151,  748 => 150,  745 => 149,  739 => 146,  736 => 145,  728 => 140,  724 => 139,  720 => 138,  717 => 137,  711 => 135,  708 => 134,  705 => 133,  694 => 129,  680 => 127,  677 => 126,  663 => 125,  645 => 123,  642 => 122,  625 => 121,  610 => 120,  607 => 119,  604 => 118,  585 => 117,  582 => 116,  568 => 110,  554 => 109,  544 => 107,  541 => 106,  538 => 105,  521 => 104,  515 => 103,  512 => 102,  510 => 101,  507 => 100,  502 => 97,  488 => 96,  471 => 94,  468 => 93,  451 => 92,  448 => 91,  445 => 90,  426 => 86,  422 => 84,  419 => 83,  416 => 82,  410 => 80,  403 => 77,  399 => 75,  397 => 74,  386 => 73,  383 => 72,  380 => 71,  377 => 70,  371 => 68,  344 => 63,  324 => 61,  321 => 60,  318 => 59,  308 => 54,  295 => 50,  292 => 49,  288 => 48,  286 => 47,  284 => 46,  281 => 45,  262 => 38,  250 => 33,  232 => 27,  213 => 19,  175 => 5,  170 => 3,  153 => 479,  118 => 61,  113 => 362,  110 => 361,  97 => 291,  190 => 56,  174 => 49,  137 => 39,  231 => 59,  215 => 53,  104 => 26,  211 => 57,  195 => 50,  192 => 49,  188 => 48,  180 => 44,  90 => 21,  65 => 100,  223 => 24,  200 => 51,  184 => 45,  70 => 20,  23 => 3,  266 => 65,  222 => 62,  198 => 14,  191 => 10,  172 => 34,  150 => 478,  134 => 40,  129 => 11,  126 => 31,  100 => 79,  81 => 207,  77 => 167,  53 => 7,  76 => 18,  34 => 5,  20 => 1,  275 => 67,  271 => 65,  257 => 63,  249 => 59,  244 => 48,  233 => 42,  226 => 49,  212 => 52,  207 => 17,  185 => 8,  181 => 44,  165 => 18,  160 => 83,  146 => 15,  127 => 67,  58 => 33,  178 => 50,  167 => 2,  155 => 510,  148 => 454,  84 => 20,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 87,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 79,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 69,  368 => 112,  365 => 66,  362 => 65,  360 => 64,  355 => 106,  341 => 62,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 53,  298 => 51,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 40,  264 => 84,  258 => 36,  252 => 34,  247 => 32,  241 => 30,  229 => 26,  220 => 56,  214 => 54,  177 => 37,  169 => 33,  140 => 74,  132 => 51,  128 => 389,  107 => 33,  61 => 59,  273 => 43,  269 => 94,  254 => 70,  243 => 65,  240 => 86,  238 => 29,  235 => 60,  230 => 82,  227 => 58,  224 => 57,  221 => 23,  219 => 76,  217 => 55,  208 => 68,  204 => 16,  179 => 38,  159 => 43,  143 => 424,  135 => 414,  119 => 42,  102 => 53,  71 => 145,  67 => 116,  63 => 90,  59 => 45,  38 => 5,  94 => 28,  89 => 239,  85 => 231,  75 => 158,  68 => 15,  56 => 14,  87 => 45,  21 => 2,  26 => 2,  93 => 262,  88 => 20,  78 => 16,  46 => 10,  27 => 4,  44 => 10,  31 => 10,  28 => 3,  201 => 61,  196 => 13,  183 => 7,  171 => 48,  166 => 71,  163 => 528,  158 => 511,  156 => 39,  151 => 38,  142 => 14,  138 => 415,  136 => 30,  121 => 7,  117 => 44,  105 => 40,  91 => 249,  62 => 9,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 192,  72 => 14,  69 => 133,  47 => 14,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 453,  139 => 31,  131 => 68,  123 => 380,  120 => 379,  115 => 370,  111 => 31,  108 => 346,  101 => 339,  98 => 25,  96 => 24,  83 => 222,  74 => 15,  66 => 16,  55 => 2,  52 => 11,  50 => 11,  43 => 9,  41 => 4,  35 => 3,  32 => 3,  29 => 8,  209 => 43,  203 => 52,  199 => 51,  193 => 49,  189 => 48,  187 => 84,  182 => 51,  176 => 64,  173 => 4,  168 => 72,  164 => 84,  162 => 44,  154 => 17,  149 => 77,  147 => 38,  144 => 75,  141 => 12,  133 => 398,  130 => 397,  125 => 388,  122 => 30,  116 => 32,  112 => 42,  109 => 5,  106 => 55,  103 => 342,  99 => 52,  95 => 274,  92 => 74,  86 => 26,  82 => 17,  80 => 19,  73 => 149,  64 => 10,  60 => 22,  57 => 21,  54 => 7,  51 => 7,  48 => 5,  45 => 5,  42 => 4,  39 => 5,  36 => 4,  33 => 4,  30 => 3,);
    }
}
