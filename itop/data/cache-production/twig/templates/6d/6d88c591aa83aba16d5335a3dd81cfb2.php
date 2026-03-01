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

/* base/layouts/tab-container/layout.js.twig */
class __TwigTemplate_aa22a302ef1bcab3de07fa0197330d3f extends Template
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
        // line 3
        yield "
";
        // line 4
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 4)) {
            // line 5
            yield "\$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
            yield "').tab_container({'remote_tab_load_dict': '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UIBlock:TabContainer:RemoteTabLoad"), "js"), "html", null, true);
            yield "'});
";
        } else {
            // line 7
            yield "
function refresh_status() {
    var loaded = true;
    \$('#";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 10), "html", null, true);
            yield "').find('.ibo-tab-container--tab-container').each(function (i, elt) {
        if (\$(elt).attr('data-status') != 'loaded')
        {
            loaded = false;
        }
    });
    if (loaded)
    {
        \$('#";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
            yield "').attr('data-status', 'loaded');
    }
}

";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 23
                yield "oHiddeableChapters['tab_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 23), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                yield "'] = '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 23), "js"), "html", null, true);
                yield "';
";
                // line 24
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 24) == Twig\Extension\CoreExtension::constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
                    // line 25
                    yield "\$.post('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetUrl", [], "method", false, false, false, 25);
                    yield "', {printable: '1'}, function (data) {
    \$('#tab_";
                    // line 26
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 26), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    yield " > .printable-tab-content').append(data);
    \$('#tab_";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 27), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    yield "').attr('data-status', 'loaded');
    refresh_status();
});
";
                } else {
                    // line 31
                    yield "\$('#tab_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 31), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    yield "').attr('data-status', 'loaded');
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oTab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "refresh_status();
";
        }
        // line 36
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/tab-container/layout.js.twig";
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
        return array (  121 => 36,  117 => 34,  107 => 31,  100 => 27,  96 => 26,  91 => 25,  89 => 24,  82 => 23,  78 => 22,  71 => 18,  60 => 10,  55 => 7,  47 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/tab-container/layout.js.twig", "/var/www/html/templates/base/layouts/tab-container/layout.js.twig");
    }
}
