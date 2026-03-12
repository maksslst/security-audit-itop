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

/* templates/application/welcome-popup/templates/left-illustration-as-svg-markup-right-title-description.html.twig */
class __TwigTemplate_52840fbbec4d1ad5798b2f4264bcd653 extends Template
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
            'wpMessagIllustrationInner' => [$this, 'block_wpMessagIllustrationInner'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/application/welcome-popup/templates/left-illustration-right-title-description.html.twig", "templates/application/welcome-popup/templates/left-illustration-as-svg-markup-right-title-description.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessagIllustrationInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <div class=\"ibo-welcome-popup--message-illustration  ibo-svg-illustration--container\">
        ";
        // line 5
        yield $this->env->getFunction('source_abs')->getCallable()($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["oMessage"] ?? null), "GetIllustrationAbsURI", [], "method", false, false, false, 5));
        yield "
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/application/welcome-popup/templates/left-illustration-as-svg-markup-right-title-description.html.twig";
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
        return array (  61 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/application/welcome-popup/templates/left-illustration-as-svg-markup-right-title-description.html.twig", "/var/www/html/templates/application/welcome-popup/templates/left-illustration-as-svg-markup-right-title-description.html.twig");
    }
}
