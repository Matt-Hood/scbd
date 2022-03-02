<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/scdb/templates/layout/page.html.twig */
class __TwigTemplate_ebe9550e31d21f258b29cb5952f70165e61ea344885112790e97634ed26058d6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      <div class=\"container clearfix\">
      ";
        // line 74
        $this->displayBlock('head', $context, $blocks);
        // line 125
        echo "      </div>
    </header>
    
    ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 128)) {
            // line 129
            echo "      <div class=\"highlighted\">
        
          ";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
            echo "
        
      </div>
    ";
        }
        // line 135
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 135)) {
            // line 136
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 143
            echo "    ";
        }
        // line 144
        echo "    <div class\"container\">
      <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
        ";
        // line 146
        $this->displayBlock('content', $context, $blocks);
        // line 173
        echo "      </div>
    </div>
    ";
        // line 175
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 175) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 175)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 175))) {
            // line 176
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 177, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "
          ";
            // line 179
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
            echo "
          ";
            // line 180
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 184
        echo "    <footer class=\"site-footer py-5 mt-5\">
      ";
        // line 185
        $this->displayBlock('footer', $context, $blocks);
        // line 202
        echo "    </footer>
  </div>
</div>
";
    }

    // line 74
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 75) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 75)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 75))) {
            // line 76
            echo "          <nav id=\"navbar-top\" class=\"navbar float-start\">
          ";
            // line 77
            if (($context["container_navbar"] ?? null)) {
                // line 78
                echo "          <div class=\"container\">
          ";
            }
            // line 80
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
              ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "
              ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 82)) {
                // line 83
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 84
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 87
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 88
                echo "          </div>
          ";
            }
            // line 90
            echo "          </nav>
        ";
        }
        // line 92
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 92, $this->source), "html", null, true);
        echo ">
          ";
        // line 93
        if (($context["container_navbar"] ?? null)) {
            // line 94
            echo "          <div class=\"container\">
          ";
        }
        // line 96
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo "
            ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 97) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 97))) {
            // line 98
            echo "              <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 98, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 99, $this->source), "html", null, true);
            echo "\" id=\"CollapsingNavbar\">
                ";
            // line 100
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 101
                echo "                  <div class=\"offcanvas-header\">
                    <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"offcanvas-body\">
                ";
            }
            // line 106
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
            echo "
                ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 107)) {
                // line 108
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 112
            echo "                ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 113
                echo "                  </div>
                ";
            }
            // line 115
            echo "\t          </div>
            ";
        }
        // line 117
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 118
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 120
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 121
            echo "          </div>
          ";
        }
        // line 123
        echo "        </nav>
      ";
    }

    // line 136
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 137
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 138
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 138, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 139
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 146
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "          <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 147, $this->source), "html", null, true);
        echo "\">
            ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 148), 148, $this->source), "html", null, true);
        echo "
            <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <main";
        // line 150
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 150, $this->source), "html", null, true);
        echo ">
                  <section class=\"section\">
                    <a id=\"main-content\" tabindex=\"-1\"></a>
                    ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
        echo "
                  </section>
                </main>
              ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 156)) {
            // line 157
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 157, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 163
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 163)) {
            // line 164
            echo "                <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 164, $this->source), "html", null, true);
            echo ">
                  <aside class=\"section\" role=\"complementary\">
                    ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
                  </aside>
                </div>
              ";
        }
        // line 170
        echo "            </div>
          </div>
        ";
    }

    // line 185
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 186
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 186, $this->source), "html", null, true);
        echo "\">
          ";
        // line 187
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 187) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 187)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 187)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 187))) {
            // line 188
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 189
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
            echo "
              ";
            // line 190
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 190), 190, $this->source), "html", null, true);
            echo "
              ";
            // line 191
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
            echo "
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 195
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 195)) {
            // line 196
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 200
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/scdb/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 200,  376 => 197,  373 => 196,  370 => 195,  364 => 192,  360 => 191,  356 => 190,  352 => 189,  349 => 188,  347 => 187,  342 => 186,  338 => 185,  332 => 170,  325 => 166,  319 => 164,  316 => 163,  309 => 159,  303 => 157,  301 => 156,  295 => 153,  289 => 150,  284 => 148,  279 => 147,  275 => 146,  267 => 139,  263 => 138,  260 => 137,  256 => 136,  251 => 123,  247 => 121,  244 => 120,  240 => 118,  237 => 117,  233 => 115,  229 => 113,  226 => 112,  220 => 109,  217 => 108,  215 => 107,  210 => 106,  203 => 101,  201 => 100,  197 => 99,  192 => 98,  190 => 97,  185 => 96,  181 => 94,  179 => 93,  174 => 92,  170 => 90,  166 => 88,  163 => 87,  157 => 84,  154 => 83,  152 => 82,  148 => 81,  143 => 80,  139 => 78,  137 => 77,  134 => 76,  131 => 75,  127 => 74,  120 => 202,  118 => 185,  115 => 184,  108 => 180,  104 => 179,  100 => 178,  96 => 177,  93 => 176,  91 => 175,  87 => 173,  85 => 146,  81 => 144,  78 => 143,  75 => 136,  72 => 135,  65 => 131,  61 => 129,  59 => 128,  54 => 125,  52 => 74,  47 => 72,  43 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/scdb/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/scdb/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 74, "if" => 128);
        static $filters = array("t" => 72, "escape" => 131);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
