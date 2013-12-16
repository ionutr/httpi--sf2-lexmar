<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_515067a4bbab694b1bf1ab6e25bf9b2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  389 => 160,  378 => 157,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  210 => 77,  152 => 46,  363 => 153,  357 => 123,  353 => 149,  332 => 116,  327 => 114,  306 => 107,  297 => 104,  291 => 102,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  202 => 77,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  270 => 102,  267 => 101,  256 => 96,  248 => 97,  216 => 79,  197 => 69,  194 => 68,  124 => 40,  114 => 60,  1899 => 528,  1879 => 512,  1876 => 511,  1854 => 494,  1844 => 489,  1835 => 484,  1833 => 483,  1831 => 482,  1829 => 481,  1827 => 480,  1824 => 479,  1813 => 471,  1806 => 469,  1802 => 468,  1796 => 465,  1785 => 457,  1779 => 455,  1776 => 454,  1767 => 448,  1762 => 446,  1758 => 445,  1755 => 444,  1751 => 442,  1749 => 441,  1732 => 427,  1726 => 425,  1723 => 424,  1712 => 418,  1706 => 416,  1703 => 415,  1691 => 408,  1678 => 399,  1675 => 398,  1664 => 392,  1658 => 390,  1655 => 389,  1644 => 383,  1638 => 381,  1635 => 380,  1624 => 374,  1618 => 372,  1615 => 371,  1603 => 363,  1600 => 362,  1593 => 358,  1589 => 357,  1585 => 356,  1581 => 355,  1577 => 354,  1573 => 353,  1569 => 352,  1565 => 351,  1561 => 350,  1557 => 349,  1553 => 348,  1550 => 347,  1547 => 346,  1538 => 340,  1535 => 339,  1526 => 336,  1523 => 335,  1517 => 331,  1514 => 330,  1508 => 329,  1505 => 328,  1490 => 326,  1486 => 325,  1467 => 323,  1464 => 322,  1449 => 320,  1445 => 319,  1421 => 317,  1418 => 316,  1412 => 315,  1409 => 314,  1378 => 312,  1374 => 311,  1366 => 310,  1363 => 309,  1332 => 307,  1328 => 306,  1319 => 305,  1317 => 304,  1312 => 302,  1309 => 301,  1307 => 300,  1305 => 299,  1303 => 298,  1301 => 297,  1299 => 296,  1297 => 295,  1295 => 294,  1293 => 293,  1291 => 292,  1288 => 291,  1262 => 286,  1240 => 285,  1235 => 283,  1232 => 282,  1230 => 281,  1228 => 280,  1226 => 279,  1224 => 278,  1222 => 277,  1220 => 276,  1218 => 275,  1215 => 274,  1208 => 269,  1193 => 267,  1189 => 266,  1173 => 265,  1170 => 264,  1168 => 263,  1165 => 262,  1156 => 257,  1150 => 255,  1138 => 253,  1135 => 252,  1133 => 251,  1131 => 250,  1128 => 249,  1110 => 245,  1107 => 244,  1105 => 243,  1088 => 242,  1086 => 241,  1084 => 240,  1081 => 239,  1070 => 236,  1067 => 235,  1056 => 232,  1053 => 231,  1048 => 228,  1017 => 226,  1013 => 225,  1010 => 224,  1007 => 223,  1004 => 222,  999 => 219,  994 => 217,  991 => 216,  980 => 214,  976 => 213,  969 => 211,  964 => 210,  962 => 209,  959 => 208,  956 => 207,  951 => 204,  946 => 202,  943 => 201,  932 => 199,  928 => 198,  921 => 196,  916 => 195,  914 => 194,  911 => 193,  908 => 192,  903 => 189,  897 => 186,  894 => 185,  883 => 183,  879 => 182,  872 => 180,  864 => 179,  860 => 178,  857 => 177,  855 => 176,  850 => 174,  844 => 173,  838 => 172,  832 => 171,  826 => 170,  822 => 168,  819 => 167,  812 => 164,  797 => 162,  793 => 161,  789 => 160,  785 => 159,  782 => 158,  769 => 154,  763 => 153,  754 => 152,  752 => 151,  748 => 150,  745 => 476,  739 => 146,  736 => 145,  728 => 140,  724 => 139,  720 => 138,  717 => 137,  711 => 135,  708 => 134,  705 => 133,  694 => 468,  680 => 127,  677 => 126,  663 => 125,  645 => 460,  642 => 122,  625 => 453,  610 => 120,  607 => 119,  604 => 118,  585 => 117,  582 => 116,  568 => 110,  554 => 109,  544 => 107,  541 => 106,  538 => 105,  521 => 104,  515 => 404,  512 => 102,  510 => 101,  507 => 100,  502 => 97,  488 => 96,  471 => 94,  468 => 93,  451 => 92,  448 => 91,  445 => 90,  426 => 86,  422 => 184,  419 => 83,  416 => 82,  410 => 80,  403 => 77,  399 => 75,  397 => 74,  386 => 159,  383 => 72,  380 => 158,  377 => 70,  371 => 156,  344 => 119,  324 => 113,  321 => 135,  318 => 111,  308 => 54,  295 => 50,  292 => 49,  288 => 118,  286 => 112,  284 => 46,  281 => 114,  262 => 98,  250 => 33,  232 => 88,  213 => 78,  175 => 58,  170 => 84,  153 => 77,  118 => 49,  113 => 48,  110 => 361,  97 => 27,  190 => 76,  174 => 65,  137 => 39,  231 => 83,  215 => 53,  104 => 32,  211 => 57,  195 => 50,  192 => 49,  188 => 90,  180 => 44,  90 => 42,  65 => 11,  223 => 24,  200 => 72,  184 => 63,  70 => 24,  23 => 3,  266 => 65,  222 => 83,  198 => 14,  191 => 67,  172 => 57,  150 => 55,  134 => 39,  129 => 11,  126 => 31,  100 => 39,  81 => 23,  77 => 20,  53 => 15,  76 => 27,  34 => 5,  20 => 1,  275 => 105,  271 => 65,  257 => 63,  249 => 59,  244 => 136,  233 => 87,  226 => 84,  212 => 78,  207 => 75,  185 => 74,  181 => 65,  165 => 83,  160 => 83,  146 => 15,  127 => 35,  58 => 18,  178 => 59,  167 => 2,  155 => 47,  148 => 454,  84 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 87,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 79,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 69,  368 => 112,  365 => 66,  362 => 65,  360 => 64,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 53,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 40,  264 => 84,  258 => 94,  252 => 34,  247 => 32,  241 => 93,  229 => 87,  220 => 81,  214 => 54,  177 => 37,  169 => 33,  140 => 58,  132 => 51,  128 => 389,  107 => 29,  61 => 12,  273 => 43,  269 => 107,  254 => 70,  243 => 92,  240 => 86,  238 => 29,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 23,  219 => 76,  217 => 55,  208 => 76,  204 => 16,  179 => 38,  159 => 43,  143 => 51,  135 => 414,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 12,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 6,  93 => 23,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 61,  196 => 92,  183 => 7,  171 => 48,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 14,  138 => 48,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 370,  111 => 47,  108 => 346,  101 => 31,  98 => 34,  96 => 30,  83 => 31,  74 => 15,  66 => 16,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 43,  203 => 73,  199 => 93,  193 => 49,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 84,  162 => 59,  154 => 60,  149 => 77,  147 => 75,  144 => 42,  141 => 73,  133 => 398,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 29,  99 => 23,  95 => 34,  92 => 28,  86 => 26,  82 => 19,  80 => 27,  73 => 33,  64 => 21,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
