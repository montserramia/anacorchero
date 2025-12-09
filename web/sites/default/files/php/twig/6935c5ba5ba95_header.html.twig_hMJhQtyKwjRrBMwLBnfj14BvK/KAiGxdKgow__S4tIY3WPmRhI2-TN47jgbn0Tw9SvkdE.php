<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @ana_corchero_xara/template-parts/header.html.twig */
class __TwigTemplate_6eb4b302dd293359b8c716f5c24992db extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<header class=\"header\">
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 2) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 2))) {
            // line 3
            yield "  <div class=\"header-top\">
    <div class=\"container\">
      <div class=\"header-top-container\">
        ";
            // line 6
            yield from $this->loadTemplate("@thex/template-parts/header/header-top-left.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 6)->unwrap()->yield($context);
            // line 7
            yield "        ";
            yield from $this->loadTemplate("@thex/template-parts/header/header-top-right.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "      </div><!-- /header-top-container -->
    </div><!-- /container -->
  </div><!-- /header-top -->
";
        }
        // line 12
        yield "<div class=\"header-main\">
  <div class=\"container\">
    <div class=\"header-container\">
      ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 15)) {
            // line 16
            yield "        <div class=\"site-brand\">
          ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17), "html", null, true);
            yield "
        </div> <!--/.site-branding -->
      ";
        }
        // line 20
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 20) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 20))) {
            // line 21
            yield "      <div class=\"header-right\">
        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 22)) {
                // line 23
                yield "          ";
                yield from $this->loadTemplate("@thex/template-parts/header/header-primary-menu.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 23)->unwrap()->yield($context);
                // line 24
                yield "        ";
            }
            // line 25
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "search_box", [], "any", false, false, true, 25)) {
                // line 26
                yield "          ";
                yield from $this->loadTemplate("@thex/template-parts/header/search.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 26)->unwrap()->yield($context);
                // line 27
                yield "        ";
            }
            // line 28
            yield "      </div> <!-- /.header-right -->
    ";
        }
        // line 30
        yield "    </div><!-- /header-container -->
  </div><!-- /container -->
</div><!-- /header main -->
";
        // line 33
        if ((($context["is_front"] ?? null) && ($context["slider_show"] ?? null))) {
            // line 34
            yield "  ";
            yield from $this->loadTemplate("@ana_corchero_xara/template-parts/slider.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 34)->unwrap()->yield($context);
        } elseif (( !        // line 35
($context["is_front"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "page_header", [], "any", false, false, true, 35))) {
            // line 36
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/header/header-page.html.twig", "@ana_corchero_xara/template-parts/header.html.twig", 36)->unwrap()->yield($context);
        }
        // line 38
        yield "</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "is_front", "slider_show"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@ana_corchero_xara/template-parts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  124 => 38,  120 => 36,  118 => 35,  115 => 34,  113 => 33,  108 => 30,  104 => 28,  101 => 27,  98 => 26,  95 => 25,  92 => 24,  89 => 23,  87 => 22,  84 => 21,  81 => 20,  75 => 17,  72 => 16,  70 => 15,  65 => 12,  59 => 8,  56 => 7,  54 => 6,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@ana_corchero_xara/template-parts/header.html.twig", "/var/www/html/web/themes/custom/ana_corchero_xara/templates/template-parts/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 2, "include" => 6];
        static $filters = ["escape" => 17];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['escape'],
                [],
                $this->source
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
