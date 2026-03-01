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

/* base/layouts/activity-panel/tab-toolbar/activity.html.twig */
class __TwigTemplate_f770d5102159eca1f74fb990497f962c extends Template
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

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/tab-toolbar/layout.html.twig", "base/layouts/activity-panel/tab-toolbar/activity.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bExtraCSSClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "ibo-activity-panel--tab-toolbar-for-activity";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bDataTabType(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "activity";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/tab-toolbar/activity.html.twig";
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
        return array (  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/activity.html.twig", "/var/www/html/templates/base/layouts/activity-panel/tab-toolbar/activity.html.twig");
    }
}
