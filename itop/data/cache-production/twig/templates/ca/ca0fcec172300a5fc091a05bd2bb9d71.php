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

/* base/components/datatable/layout.live.js.twig */
class __TwigTemplate_3aa2a513bce7c6d754dd0c5f962f35ea extends Template
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
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 1))) {
            // line 2
            yield "    var oSelectedItems";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sListId"], "method", false, false, false, 2), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
            yield " = [];
    ";
            // line 3
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sSelectedRows"], "method", false, false, false, 3))) {
                // line 4
                yield "        oSelectedItems";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sListId"], "method", false, false, false, 4), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
                yield " = ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sSelectedRows"], "method", false, false, false, 4);
                yield ";
    ";
            }
        }
        // line 7
        yield "
var bSelectAllowed";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 8), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        yield " = false;

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/layout.live.js.twig";
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
        return array (  63 => 8,  60 => 7,  51 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/layout.live.js.twig", "/var/www/html/templates/base/components/datatable/layout.live.js.twig");
    }
}
