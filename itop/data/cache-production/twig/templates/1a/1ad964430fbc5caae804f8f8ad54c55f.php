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

/* base/components/datatable/static/formtable/layout.ready.js.twig */
class __TwigTemplate_6c269da2ac68a8d812b5dc76a1c92580 extends Template
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
        $context["sListId"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1);
        // line 2
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 3
        yield "
var oTable";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield " = \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        yield "').DataTable({
    language: {
        emptyTable: \"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Message:EmptyList:UseAdd"), "html", null, true);
        yield "\"
    },
    scrollX: true,
    scrollCollapse: true,
    paging: false,
    filter: false,
    search: false,
    dom: \"t\",
    \"order\": [],
    ";
        // line 15
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 15))) {
            // line 16
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 16) != "custom")) {
                // line 17
                yield "    select: {
        style: \"";
                // line 18
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 18) == "multiple")) {
                    yield "multi";
                } else {
                    yield "single";
                }
                yield "\",
        info: false
    },
    ";
            }
            // line 22
            yield "    columnDefs: [
        {orderable: false, targets: 0},
        ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 24)) {
                // line 25
                yield "            getRowActionsColumnDefinition('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 25), "html", null, true);
                yield "', ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumnsCount", [], "method", false, false, false, 25) - 1), "html", null, true);
                yield "),
        ";
            }
            // line 27
            yield "    ],
    ";
        }
        // line 29
        yield "    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }

        // Disable hyperlinks if necessary
        ";
        // line 45
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 45) === true) || ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 45)) &&  !(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 45) === false)))) {
            // line 46
            yield "        \$(\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 46), "html", null, true);
            yield " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
        }
        // line 50
        yield "    },
    createdRow: function (row, data, dataIndex) {
        if (data['@class'] !== undefined)
        {
            \$(row).addClass(data['@class']);
        }
    },

    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }

        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    },
});

";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["bFullscreen"], "method", false, false, false, 70)) {
            // line 71
            yield "var heightS";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = 0;
var heightD";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = 0;
if (\$(\"#";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 73), "html", null, true);
            yield "\").height() > 0)
{
    heightD";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 75), "html", null, true);
            yield "\").height();
    heightS";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = \$(\"#ibo-main-content\").height();
    if (heightD";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " > 200)
    {
        \$(\"#";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 79), "html", null, true);
            yield "_wrapper\").find(\".dataTables_scrollBody\").height(heightD";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ");
    }
}
";
        }
        // line 83
        yield "
if (window.ResizeObserver)
{
    let oFromTable";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = null;
    const oFromTable";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize = new ResizeObserver(function () {
        clearTimeout(oFromTable";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout);
        oFromTable";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = setTimeout(function () {
            \$('#";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 90), "html", null, true);
        yield "').DataTable().columns.adjust();
        }, 120);
    });
    oFromTable";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize.observe(\$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 93), "html", null, true);
        yield "')[0]);

    ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["bFullscreen"], "method", false, false, false, 95)) {
            // line 96
            yield "    let heightScreen";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = heightS";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ";
    let heightDatatable";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = heightD";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ";
    let oFromScreen";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "ResizeTimeout = null;
    const oFromScreen";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "Resize = new ResizeObserver(function () {
        clearTimeout(oFromScreen";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "ResizeTimeout);
        oFromScreen";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "ResizeTimeout = setTimeout(function () {
            if (\$(\"#";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 102), "html", null, true);
            yield "_wrapper\").height() > 0)
            {
                if (heightDatatable";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "> 0)
                {
                    let calcul = \$(\"#ibo-main-content\").height()+heightDatatable";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "-heightScreen";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ";
                    if (calcul > 200)
                    {
                        \$(\"#";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 109), "html", null, true);
            yield "_wrapper\").find(\".dataTables_scrollBody\").height(calcul);
                    }
                }
                else
                {
                    heightDatatable";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 114), "html", null, true);
            yield "_wrapper\").height();
                    heightScreen";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = \$(\"#ibo-main-content\").height();
                    if (heightDatatable";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " > 200)
                    {
                        \$(\"#";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 118), "html", null, true);
            yield "_wrapper\").find(\".dataTables_scrollBody\").height(heightDatatable";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ");
                    }
                }

            }
        }, 120);
    });
    oFromScreen";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield "Resize.observe(\$('#ibo-main-content')[0]);

    ";
        }
        // line 128
        yield "
}

";
        // line 131
        yield from $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/static/formtable/layout.ready.js.twig", 131)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/static/formtable/layout.ready.js.twig";
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
        return array (  324 => 131,  319 => 128,  313 => 125,  301 => 118,  296 => 116,  292 => 115,  286 => 114,  278 => 109,  270 => 106,  265 => 104,  260 => 102,  256 => 101,  252 => 100,  248 => 99,  244 => 98,  238 => 97,  231 => 96,  229 => 95,  222 => 93,  216 => 90,  212 => 89,  208 => 88,  204 => 87,  200 => 86,  195 => 83,  186 => 79,  181 => 77,  177 => 76,  171 => 75,  166 => 73,  162 => 72,  157 => 71,  155 => 70,  133 => 50,  125 => 46,  123 => 45,  105 => 29,  101 => 27,  93 => 25,  91 => 24,  87 => 22,  76 => 18,  73 => 17,  70 => 16,  68 => 15,  56 => 6,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/static/formtable/layout.ready.js.twig", "/var/www/html/templates/base/components/datatable/static/formtable/layout.ready.js.twig");
    }
}
