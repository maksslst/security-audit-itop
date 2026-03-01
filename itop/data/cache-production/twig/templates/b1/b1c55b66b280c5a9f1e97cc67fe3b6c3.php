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

/* base/components/panel/layout.js.twig */
class __TwigTemplate_ea31d14740ed8c98396046d86a03f0f9 extends Template
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
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('iboWidgetInstantiation', $context, $blocks);
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('iboMiscHandlers', $context, $blocks);
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboWidgetInstantiation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        yield "').panel({
        is_header_visible_on_scroll: ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [], "any", false, false, false, 5)), "html", null, true);
        yield "
    });
";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboMiscHandlers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "isCollapsible", [], "method", false, false, false, 10)) {
            // line 11
            yield "        \$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
            yield "').find('[data-role=\"ibo-panel--collapsible-toggler\"]').on('click', function(){
            \$('#";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
            yield "').toggleClass('ibo-is-opened');
        });
    ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/panel/layout.js.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  89 => 12,  84 => 11,  81 => 10,  74 => 9,  66 => 5,  61 => 4,  54 => 3,  49 => 9,  46 => 8,  44 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/panel/layout.js.twig", "/var/www/html/templates/base/components/panel/layout.js.twig");
    }
}
