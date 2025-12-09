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

/* themes/custom/ana_corchero_xara/templates/layout/page.html.twig */
class __TwigTemplate_94fb400deb1a8f0a751c2ea880576427 extends Template
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
        yield from $this->loadTemplate("@ana_corchero_xara/template-parts/header.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 1)->unwrap()->yield($context);
        // line 2
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 2)) {
            // line 3
            yield "  ";
            yield from $this->loadTemplate("@thex/template-parts/highlighted.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 3)->unwrap()->yield($context);
        }
        // line 5
        yield "<div class=\"main-wrapper\">
  <div class=\"container\">
    <div class=\"main-container\">
      <main id=\"main\" class=\"main-content\">
        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 10)) {
            // line 11
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_top.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "        ";
        }
        // line 13
        yield "        <div class=\"node-content\">
          ";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 14), "html", null, true);
        yield "
        </div>
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 16)) {
            // line 17
            yield "          ";
            yield from $this->loadTemplate("@thex/template-parts/content-parts/content_bottom.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 17)->unwrap()->yield($context);
            // line 18
            yield "        ";
        }
        // line 19
        yield "      </main>
    ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 20)) {
            // line 21
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_left.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 21)->unwrap()->yield($context);
            // line 22
            yield "    ";
        }
        // line 23
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 23)) {
            // line 24
            yield "      ";
            yield from $this->loadTemplate("@thex/template-parts/sidebar/sidebar_right.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 24)->unwrap()->yield($context);
            // line 25
            yield "    ";
        }
        // line 26
        yield "    </div><!--/main-container -->
  </div><!--/container -->
</div><!--/main-wrapper -->
";
        // line 29
        yield from $this->loadTemplate("@ana_corchero_xara/template-parts/footer.html.twig", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", 29)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/ana_corchero_xara/templates/layout/page.html.twig";
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
        return array (  108 => 29,  103 => 26,  100 => 25,  97 => 24,  94 => 23,  91 => 22,  88 => 21,  86 => 20,  83 => 19,  80 => 18,  77 => 17,  75 => 16,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  59 => 10,  52 => 5,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/ana_corchero_xara/templates/layout/page.html.twig", "/var/www/html/web/themes/custom/ana_corchero_xara/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 1, "if" => 2];
        static $filters = ["escape" => 14];
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
