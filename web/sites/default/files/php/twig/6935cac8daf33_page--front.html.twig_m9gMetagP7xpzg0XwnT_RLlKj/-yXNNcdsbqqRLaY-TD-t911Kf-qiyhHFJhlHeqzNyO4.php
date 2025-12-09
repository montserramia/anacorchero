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

/* themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig */
class __TwigTemplate_a906d44a193f2b84d81feb8c45d00177 extends Template
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
        yield from $this->loadTemplate("@ana_corchero_xara/template-parts/header.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  ";
        // line 6
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_top", [], "any", false, false, true, 6)) {
            // line 7
            yield "    ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_home_top.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 7)->unwrap()->yield($context);
            // line 8
            yield "  ";
        }
        // line 9
        yield "  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content front-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 13)) {
            // line 14
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 14)->unwrap()->yield($context);
            // line 15
            yield "        ";
        }
        // line 16
        yield "        <div class=\"node-content\">
          ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), "html", null, true);
        yield "
        </div>
        ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 19)) {
            // line 20
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 20)->unwrap()->yield($context);
            // line 21
            yield "        ";
        }
        // line 22
        yield "      </main>
    ";
        // line 23
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 23))) {
            // line 24
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "    ";
        }
        // line 26
        yield "    ";
        if ((($context["front_sidebar"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 26))) {
            // line 27
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
        }
        // line 29
        yield "    </div><!--/main-container -->
  </div><!--/container -->
  ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_home_bottom", [], "any", false, false, true, 31)) {
            // line 32
            yield "    ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_home_bottom.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 32)->unwrap()->yield($context);
            // line 33
            yield "  ";
        }
        // line 34
        yield "</div><!--/main-wrapper -->
";
        // line 35
        yield from $this->loadTemplate("@ana_corchero_xara/template-parts/footer.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", 35)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "front_sidebar"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig";
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
        return array (  128 => 35,  125 => 34,  122 => 33,  119 => 32,  117 => 31,  113 => 29,  110 => 28,  107 => 27,  104 => 26,  101 => 25,  98 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  85 => 19,  80 => 17,  77 => 16,  74 => 15,  71 => 14,  69 => 13,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig", "/var/www/html/web/themes/custom/ana_corchero_xara/templates/layout/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 2];
        static $filters = ["escape" => 17];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
