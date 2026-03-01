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

/* base/layouts/activity-panel/layout.js.twig */
class __TwigTemplate_29962c618df6fb10711d35c74afcded3 extends Template
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
        yield "').activity_panel({
    datetime_format: ";
        // line 2
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDateTimeFormatForJSWidget", [], "method", false, false, false, 2));
        yield ",
    datetimes_reformat_limit: ";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDatetimesReformatLimit", [], "method", false, false, false, 3), "html", null, true);
        yield ",
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTransactionId", [], "method", false, false, false, 4)) {
            yield "transaction_id: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTransactionId", [], "method", false, false, false, 4)), "html", null, true);
            yield ",";
        }
        // line 5
        yield "    lock_enabled: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLockEnabled", [], "method", false, false, false, 5)), "html", null, true);
        yield ",
    lock_watcher_period: ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLockWatcherPeriod", [], "method", false, false, false, 6), "html", null, true);
        yield ",
    lock_endpoint: ";
        // line 7
        yield var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLockEndpoint", [], "method", false, false, false, 7));
        yield ",
    show_multiple_entries_submit_confirmation: ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowMultipleEntriesSubmitConfirmation", [], "method", false, false, false, 8)), "html", null, true);
        yield ",
    save_state_endpoint: ";
        // line 9
        yield var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSaveStateEndpoint", [], "method", false, false, false, 9));
        yield ",
    last_loaded_entries_ids: ";
        // line 10
        yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastEntryIds", [], "method", false, false, false, 10));
        yield ",
    load_more_entries_endpoint: ";
        // line 11
        yield var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLoadMoreEntriesEndpoint", [], "method", false, false, false, 11));
        yield ",
});";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/layout.js.twig";
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
        return array (  86 => 11,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  66 => 6,  61 => 5,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/layout.js.twig", "/var/www/html/templates/base/layouts/activity-panel/layout.js.twig");
    }
}
