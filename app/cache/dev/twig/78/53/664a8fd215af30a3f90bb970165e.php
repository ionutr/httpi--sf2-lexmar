<?php

/* WebProfilerBundle:Profiler:profiler.css.twig */
class __TwigTemplate_7853664a8fd215af30a3f90bb970165e extends Twig_Template
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
        echo "/*
Copyright (c) 2008, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.6.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}legend{color:#000;}input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}
html, body {
    background-color: #efefef;
}
body {
    font: 1em \"Lucida Sans Unicode\", \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;
    text-align: left;
}
p {
    font-size: 14px;
    line-height: 20px;
    color: #313131;
    padding-bottom: 20px
}
strong {
    color: #313131;
    font-weight: bold;
}
em {
    font-style: italic;
}
a {
    color: #6c6159;
}
a img {
    border: none;
}
a:hover {
    text-decoration: underline;
}
button::-moz-focus-inner {
    padding: 0;
    border: none;
}
button {
    overflow: visible;
    width: auto;
    background-color: transparent;
    font-weight: bold;
}
caption {
    margin-bottom: 7px;
}
table, tr, th, td {
    border-collapse: collapse;
    border: 1px solid #d0dbb3;
}
table {
    width: 100%;
    margin: 10px 0 30px;
}
table th {
    font-weight: bold;
    background-color: #f1f7e2;
}
table th, table td {
    font-size: 12px;
    padding: 8px 10px;
}
fieldset {
    border: none;
}
abbr {
    border-bottom: 1px dotted #000;
    cursor: help;
}
.clear {
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
}
.clear-fix:after
{
    content: \"\\0020\";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
* html .clear-fix
{
    height: 1%;
}
.clear-fix
{
    display: block;
}
#content {
    padding: 0 50px;
    margin: 0 auto 20px;
    font-family: Arial, Helvetica, sans-serif;
    min-width: 970px;
}
#header {
    padding: 20px 30px 20px;
}
#header h1 {
    float: left;
}
.search {
    float: right;
}
#menu-profiler {
    border-right: 1px solid #dfdfdf;
}
#menu-profiler li {
    border-bottom: 1px solid #dfdfdf;
    position: relative;
    padding-bottom: 0;
    display: block;
    background-color: #f6f6f6;
    z-index: 10000;
}
#menu-profiler li a {
    color: #404040;
    display: block;
    font-size: 13px;
    text-transform: uppercase;
    text-decoration: none;
    cursor: pointer;
}
#menu-profiler li a span.label {
    display: block;
    padding: 20px 0px 16px 65px;
    min-height: 16px;
    overflow: hidden;
}
#menu-profiler li a span.icon {
    display: block;
    position: absolute;
    left: 0;
    top: 12px;
    width: 60px;
    text-align: center;
}
#menu-profiler li.selected a,
#menu-profiler li a:hover {
    background: #d1d1d1 url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAA7CAAAAACfn7+eAAAACXZwQWcAAAABAAAAOwDiPIGUAAAAJElEQVQIW2N4y8TA9B+KGZDYEP5/FD4Eo7IgNLJqZDUIMRRTAcmVHUZf/1g/AAAAAElFTkSuQmCC) repeat-x 0 0;
}
#navigation div:first-child,
#menu-profiler li:first-child,
#menu-profiler li:first-child a,
#menu-profiler li:first-child a span.label {
    border-radius: 16px 0 0 0;
}
#menu-profiler li a span.count {
    padding: 0;
    position: absolute;
    right: 10px;
    top: 20px;
}
#collector-wrapper {
    float: left;
    width: 100%;
}
#collector-content {
    margin-left: 250px;
    padding: 30px 40px 40px;
}
#navigation {
    float: left;
    width: 250px;
    margin-left: -100%;
}
#collector-content table td {
    background-color: white;
}
h1 {
    font-family: Georgia, \"Times New Roman\", Times, serif;
    color: #404040;
}
h2, h3 {
    font-weight: bold;
    margin-bottom: 20px;
}
li {
    padding-bottom: 10px;
}
#main {
    border-radius: 16px;
    margin-bottom: 20px;
}
#menu-profiler span.count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: #fff;
    margin-right: 2px;
    font-size: 11px;
}
#resume {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dfdfdf;
    padding: 18px 10px 0px;
    margin-left: 250px;
    height: 34px;
    color: #313131;
    font-size: 12px;
    border-top-right-radius: 16px;
}
a#resume-view-all {
    display: inline-block;
    padding: 0.2em 0.7em;
    margin-right: 0.5em;
    background-color: #666;
    border-radius: 16px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
table th.value {
    width: 450px;
    background-color: #dfeeb8;
}
#content h2 {
    font-size: 24px;
    color: #313131;
    font-weight: bold;
}
#content #main {
    padding: 0;
    background-color: #FFF;
    border: 1px solid #dfdfdf;
}
#content #main p {
    color: #313131;
    font-size: 14px;
    padding-bottom: 20px;
}
.sf-toolbarreset {
    border-top: 0;
    padding: 0;
}
.sf-reset .block-exception-detected .text-exception {
    left: 10px;
    right: 10px;
    width: 95%;
}
.sf-reset .block-exception-detected .illustration-exception {
    display: none;
}
ul.alt {
    margin: 10px 0 30px;
}
ul.alt li {
    padding: 5px 7px;
    font-size: 13px;
}
ul.alt li.even {
    background: #f1f7e2;
}
ul.alt li.error {
    background-color: #f66;
    margin-bottom: 1px;
}
ul.alt li.warning {
    background-color: #ffcc00;
    margin-bottom: 1px;
}
ul.sf-call-stack li {
    text-size: small;
    padding: 0 0 0 20px;
}
td.main, td.menu {
    text-align: left;
    margin: 0;
    padding: 0;
    border: 0;
    vertical-align: top;
}
.search {
    float: right;
    padding-top: 20px;
}
.search label {
    line-height: 28px;
    vertical-align: middle;
}
.search input {
    width: 195px;
    font-size: 12px;
    border: 1px solid #dadada;
    background: #FFF url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
    padding: 5px 6px;
    color: #565656;
}
.search input[type=\"search\"] {
    -webkit-appearance: textfield;
}
#navigation div:first-child {
    margin: 0 0 20px;
    border-top: 0;
}
#navigation .search {
    padding-top: 15px;
    float: none;
    background: none repeat scroll 0 0 #f6f6f6;
    color: #333;
    margin: 20px 0;
    border: 1px solid #dfdfdf;
    border-left: none;
}
#navigation .search h3 {
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    margin-left: 10px;
    font-size: 13px;
}
#navigation .search form {
    padding: 15px 0;
}
#navigation .search button {
    float: right;
    margin-right: 20px;
}
#navigation .search label {
    display: block;
    float: left;
    width: 50px;
}
#navigation .search input,
#navigation .search select,
#navigation .search label,
#navigation .search a {
    font-size: 12px;
}
#navigation .search form {
    padding-left: 10px;
}
#navigation .search input {
    width: 160px;
}
#navigation .import label {
    float: none;
    display: inline;
}
#navigation .import input {
    width: 100px;
}
.timeline {
    background-color: #fbfbfb;
    margin-bottom: 15px;
    margin-top: 5px;
}
#collector-content .routing tr.matches td {
    background-color: #0e0;
}
#collector-content .routing tr.almost td {
    background-color: #fa0;
}
.loading {
    background: transparent url(data:image/gif;base64,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) scroll no-repeat 50% 50%;
    height: 30px;
    display: none;
}
.sf-profiler-timeline .legends {
    font-size: 12px;
    line-height: 1.5em;
}
.sf-profiler-timeline .legends span {
    border-left-width: 10px;
    border-left-style: solid;
    padding: 0 10px 0 5px;
}
.sf-profiler-timeline canvas {
    border: 1px solid #999;
    border-width: 1px 0;
}
.collapsed-menu-parents #resume,
.collapsed-menu-parents #collector-content {
    margin-left: 60px !important;
}
.collapsed-menu {
    width: 60px !important;
}
.collapsed-menu span :not(.icon) {
    display: none !important;
}
.collapsed-menu span.icon img {
    display: inline !important;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:profiler.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  389 => 160,  378 => 157,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  210 => 77,  152 => 46,  363 => 153,  357 => 123,  353 => 149,  332 => 116,  327 => 114,  306 => 107,  297 => 104,  291 => 102,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  202 => 77,  161 => 63,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  270 => 102,  267 => 101,  256 => 96,  248 => 97,  216 => 79,  197 => 69,  194 => 68,  124 => 40,  114 => 60,  1899 => 528,  1879 => 512,  1876 => 511,  1854 => 494,  1844 => 489,  1835 => 484,  1833 => 483,  1831 => 482,  1829 => 481,  1827 => 480,  1824 => 479,  1813 => 471,  1806 => 469,  1802 => 468,  1796 => 465,  1785 => 457,  1779 => 455,  1776 => 454,  1767 => 448,  1762 => 446,  1758 => 445,  1755 => 444,  1751 => 442,  1749 => 441,  1732 => 427,  1726 => 425,  1723 => 424,  1712 => 418,  1706 => 416,  1703 => 415,  1691 => 408,  1678 => 399,  1675 => 398,  1664 => 392,  1658 => 390,  1655 => 389,  1644 => 383,  1638 => 381,  1635 => 380,  1624 => 374,  1618 => 372,  1615 => 371,  1603 => 363,  1600 => 362,  1593 => 358,  1589 => 357,  1585 => 356,  1581 => 355,  1577 => 354,  1573 => 353,  1569 => 352,  1565 => 351,  1561 => 350,  1557 => 349,  1553 => 348,  1550 => 347,  1547 => 346,  1538 => 340,  1535 => 339,  1526 => 336,  1523 => 335,  1517 => 331,  1514 => 330,  1508 => 329,  1505 => 328,  1490 => 326,  1486 => 325,  1467 => 323,  1464 => 322,  1449 => 320,  1445 => 319,  1421 => 317,  1418 => 316,  1412 => 315,  1409 => 314,  1378 => 312,  1374 => 311,  1366 => 310,  1363 => 309,  1332 => 307,  1328 => 306,  1319 => 305,  1317 => 304,  1312 => 302,  1309 => 301,  1307 => 300,  1305 => 299,  1303 => 298,  1301 => 297,  1299 => 296,  1297 => 295,  1295 => 294,  1293 => 293,  1291 => 292,  1288 => 291,  1262 => 286,  1240 => 285,  1235 => 283,  1232 => 282,  1230 => 281,  1228 => 280,  1226 => 279,  1224 => 278,  1222 => 277,  1220 => 276,  1218 => 275,  1215 => 274,  1208 => 269,  1193 => 267,  1189 => 266,  1173 => 265,  1170 => 264,  1168 => 263,  1165 => 262,  1156 => 257,  1150 => 255,  1138 => 253,  1135 => 252,  1133 => 251,  1131 => 250,  1128 => 249,  1110 => 245,  1107 => 244,  1105 => 243,  1088 => 242,  1086 => 241,  1084 => 240,  1081 => 239,  1070 => 236,  1067 => 235,  1056 => 232,  1053 => 231,  1048 => 228,  1017 => 226,  1013 => 225,  1010 => 224,  1007 => 223,  1004 => 222,  999 => 219,  994 => 217,  991 => 216,  980 => 214,  976 => 213,  969 => 211,  964 => 210,  962 => 209,  959 => 208,  956 => 207,  951 => 204,  946 => 202,  943 => 201,  932 => 199,  928 => 198,  921 => 196,  916 => 195,  914 => 194,  911 => 193,  908 => 192,  903 => 189,  897 => 186,  894 => 185,  883 => 183,  879 => 182,  872 => 180,  864 => 179,  860 => 178,  857 => 177,  855 => 176,  850 => 174,  844 => 173,  838 => 172,  832 => 171,  826 => 170,  822 => 168,  819 => 167,  812 => 164,  797 => 162,  793 => 161,  789 => 160,  785 => 159,  782 => 158,  769 => 154,  763 => 153,  754 => 152,  752 => 151,  748 => 150,  745 => 476,  739 => 146,  736 => 145,  728 => 140,  724 => 139,  720 => 138,  717 => 137,  711 => 135,  708 => 134,  705 => 133,  694 => 468,  680 => 127,  677 => 126,  663 => 125,  645 => 460,  642 => 122,  625 => 453,  610 => 120,  607 => 119,  604 => 118,  585 => 117,  582 => 116,  568 => 110,  554 => 109,  544 => 107,  541 => 106,  538 => 105,  521 => 104,  515 => 404,  512 => 102,  510 => 101,  507 => 100,  502 => 97,  488 => 96,  471 => 94,  468 => 93,  451 => 92,  448 => 91,  445 => 90,  426 => 86,  422 => 184,  419 => 83,  416 => 82,  410 => 80,  403 => 77,  399 => 75,  397 => 74,  386 => 159,  383 => 72,  380 => 158,  377 => 70,  371 => 156,  344 => 119,  324 => 113,  321 => 135,  318 => 111,  308 => 54,  295 => 50,  292 => 49,  288 => 118,  286 => 112,  284 => 46,  281 => 114,  262 => 98,  250 => 33,  232 => 88,  213 => 78,  175 => 58,  170 => 84,  153 => 77,  118 => 49,  113 => 48,  110 => 361,  97 => 27,  190 => 76,  174 => 65,  137 => 39,  231 => 83,  215 => 53,  104 => 32,  211 => 57,  195 => 50,  192 => 49,  188 => 90,  180 => 44,  90 => 42,  65 => 11,  223 => 24,  200 => 72,  184 => 63,  70 => 15,  23 => 3,  266 => 65,  222 => 83,  198 => 14,  191 => 67,  172 => 57,  150 => 55,  134 => 39,  129 => 11,  126 => 31,  100 => 39,  81 => 23,  77 => 20,  53 => 12,  76 => 34,  34 => 5,  20 => 1,  275 => 105,  271 => 65,  257 => 63,  249 => 59,  244 => 136,  233 => 87,  226 => 84,  212 => 78,  207 => 75,  185 => 74,  181 => 65,  165 => 83,  160 => 83,  146 => 15,  127 => 35,  58 => 25,  178 => 59,  167 => 2,  155 => 47,  148 => 454,  84 => 40,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 87,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 79,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 69,  368 => 112,  365 => 66,  362 => 65,  360 => 64,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 53,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 40,  264 => 84,  258 => 94,  252 => 34,  247 => 32,  241 => 93,  229 => 87,  220 => 81,  214 => 54,  177 => 37,  169 => 33,  140 => 58,  132 => 51,  128 => 389,  107 => 29,  61 => 12,  273 => 43,  269 => 107,  254 => 70,  243 => 92,  240 => 86,  238 => 29,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 23,  219 => 76,  217 => 55,  208 => 76,  204 => 16,  179 => 38,  159 => 43,  143 => 51,  135 => 414,  119 => 40,  102 => 33,  71 => 13,  67 => 14,  63 => 18,  59 => 16,  38 => 18,  94 => 21,  89 => 239,  85 => 23,  75 => 19,  68 => 12,  56 => 16,  87 => 41,  21 => 2,  26 => 2,  93 => 23,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 8,  28 => 3,  201 => 61,  196 => 92,  183 => 7,  171 => 48,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 14,  138 => 48,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 8,  37 => 6,  22 => 2,  246 => 96,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 370,  111 => 47,  108 => 346,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 15,  66 => 16,  55 => 38,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 5,  32 => 4,  29 => 3,  209 => 43,  203 => 73,  199 => 93,  193 => 49,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 84,  162 => 59,  154 => 60,  149 => 77,  147 => 75,  144 => 42,  141 => 73,  133 => 398,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 29,  99 => 23,  95 => 274,  92 => 28,  86 => 26,  82 => 19,  80 => 27,  73 => 33,  64 => 23,  60 => 22,  57 => 39,  54 => 7,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
