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

/* templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig */
class __TwigTemplate_8810ec7adcdbd7a2c2907cdd7e1006ec extends Template
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
            'wpMessageContentExtraCssClasses' => [$this, 'block_wpMessageContentExtraCssClasses'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "templates/application/welcome-popup/templates/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/application/welcome-popup/templates/layout.html.twig", "templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageContentExtraCssClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from $this->yieldParentBlock("wpMessageContentExtraCssClasses", $context, $blocks);
        yield " ibo-is-illustration-on-left-side";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig";
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
        return array (  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig", "/var/www/html/templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig");
    }
}
