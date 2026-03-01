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

/* base/components/popover-menu/layout.js.twig */
class __TwigTemplate_ab09c63e31b5b9e895bab8c04f9dfc30 extends Template
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
        yield "\$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "').popover_menu({
    toggler: ";
        // line 2
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTogglerJSSelector", [], "method", false, false, false, 2));
        yield ",
    container: ";
        // line 3
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetContainer", [], "method", false, false, false, 3));
        yield ",
    position: {
        target: ";
        // line 5
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTargetForPositionJSSelector", [], "method", false, false, false, 5));
        yield ",
        vertical: ";
        // line 6
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetVerticalPosition", [], "method", false, false, false, 6));
        yield ",
        horizontal: ";
        // line 7
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetHorizontalPosition", [], "method", false, false, false, 7));
        yield ",
    },
    add_visual_hint_to_toggler: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasVisualHintToAddToToggler", [], "method", false, false, false, 9)), "html", null, true);
        yield "
});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/popover-menu/layout.js.twig";
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
        return array (  69 => 9,  64 => 7,  60 => 6,  56 => 5,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/popover-menu/layout.js.twig", "/var/www/html/templates/base/components/popover-menu/layout.js.twig");
    }
}
