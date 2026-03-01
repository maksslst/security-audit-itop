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

/* base/components/breadcrumbs/layout.html.twig */
class __TwigTemplate_552de81e43766132261da2f812572f52 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield "\" data-role=\"ibo-breadcrumbs\">
    <span class=\"ibo-breadcrumbs--previous-items-container ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-container\">
        <button class=\"ibo-breadcrumbs--previous-items-list-toggler ibo-button ibo-is-alternative ibo-is-neutral\" data-role=\"ibo-breadcrumbs--previous-items-list-toggler\"
           aria-label=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"), "html", null, true);
        yield "\"
           data-tooltip-content=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:Breadcrumbs:PreviousItemsListToggler:Label"), "html", null, true);
        yield "\"
        >
            <span class=\"fas fa-ellipsis-h\"></span>
        </button>
        <div class=\"ibo-breadcrumbs--previous-items-list ibo-is-hidden\" data-role=\"ibo-breadcrumbs--previous-items-list\"></div>
    </span>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/breadcrumbs/layout.html.twig";
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
        return array (  57 => 5,  53 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/breadcrumbs/layout.html.twig", "/var/www/html/templates/base/components/breadcrumbs/layout.html.twig");
    }
}
