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

/* base/layouts/navigation-menu/menu-group.html.twig */
class __TwigTemplate_63235a3c1258741c7f889cc6e6eac3c7 extends Template
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
        yield "<a class=\"ibo-navigation-menu--menu-group\" data-role=\"ibo-navigation-menu--menu-group\" data-menu-group-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sId", [], "any", false, false, false, 1), "html", null, true);
        yield "\" href=\"#\">
\t<span class=\"ibo-navigation-menu--menu-group-icon fa-fw ";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sIconCssClasses", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-tooltip-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sTitle", [], "any", false, false, false, 2), "html", null, true);
        yield "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sIconCssClasses", [], "any", false, false, false, 2))) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sInitials", [], "any", false, false, false, 2), "html", null, true);
        }
        yield "</span>
\t<span class=\"ibo-navigation-menu--menu-group-title\">";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuGroup"] ?? null), "sTitle", [], "any", false, false, false, 3), "html", null, true);
        yield "</span>
</a>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/navigation-menu/menu-group.html.twig";
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
        return array (  57 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/navigation-menu/menu-group.html.twig", "/var/www/html/templates/base/layouts/navigation-menu/menu-group.html.twig");
    }
}
