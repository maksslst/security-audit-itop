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

/* base/components/datatable/layout.ready.js.twig */
class __TwigTemplate_7af78ca0db4a343c8e064e3ca8ffe8b7 extends Template
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
        $context["sListId"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sListId"], "method", false, false, false, 3);
        // line 4
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 5
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["iPageSize"], "method", false, false, false, 5))) {
            // line 6
            yield "    ";
            $context["iPageSize"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["iPageSize"], "method", false, false, false, 6);
        } else {
            // line 8
            yield "    ";
            $context["iPageSize"] = 10;
        }
        // line 10
        yield "
\$('#";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 11), "html", null, true);
        yield "').closest(\"[role=dialog]\").on(\"dialogbeforeclose\", function () {
    \$('#";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
        yield "').DataTable().clear();
});

\$('#";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
        yield "').data('target', 'ibo-datatables--outer');

if (\$('#";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 17), "html", null, true);
        yield "') != 'undefined' && \$.fn.dataTable.isDataTable('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 17), "html", null, true);
        yield "')) {
    \$('#";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
        yield "').DataTable().destroy(false);
}

var oTable";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield " = \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 21), "html", null, true);
        yield "').DataTable({
    language: {
        processing: \"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Processing"), "html", null, true);
        yield "\",
        search: \"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Search"), "html", null, true);
        yield "\",
        lengthMenu: \"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:LengthMenu"), "html", null, true);
        yield "\",
        zeroRecords: \"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:ZeroRecords"), "html", null, true);
        yield "\",
        info: \"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Info"), "html", null, true);
        yield "\",
        infoEmpty: \"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoEmpty"), "html", null, true);
        yield "\",
        infoFiltered: \"(";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:InfoFiltered"), "html", null, true);
        yield ")\",
        emptyTable: \"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:EmptyTable"), "html", null, true);
        yield "\",
        errorMessage: \"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Error"), "html", null, true);
        yield "\",
        buttonOk: \"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Ok"), "html", null, true);
        yield "\",
        paginate: {
            first: \"<i class=\\\"fas fa-angle-double-left\\\"></i>\",
            previous: \"<i class=\\\"fas fa-angle-left\\\"></i>\",
            next: \"<i class=\\\"fas fa-angle-right\\\"></i>\",
            last: \"<i class=\\\"fas fa-angle-double-right\\\"></i>\"
        },
        aria: {
            sortAscending: \": ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Ascending"), "html", null, true);
        yield "\",
            sortDescending: \": ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:Sort:Descending"), "html", null, true);
        yield "\"
        }
    },
    scrollX: true,
    ";
        // line 45
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sMaxHeight"], "method", false, false, false, 45))) {
            // line 46
            yield "    scrollY: \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sMaxHeight"], "method", false, false, false, 46), "html", null, true);
            yield "\",
    ";
        }
        // line 48
        yield "    scrollCollapse: true,
    ";
        // line 49
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["printVersion"], "method", false, false, false, 49))) {
            // line 50
            yield "    paging: false,
    info: false,
    ";
        }
        // line 53
        yield "    lengthMenu: [[ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iPageSize"] ?? null), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 2), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 4), "html", null, true);
        yield ", -1], [ ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iPageSize"] ?? null), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 2), "html", null, true);
        yield ",  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 3), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["iPageSize"] ?? null) * 4), "html", null, true);
        yield ", \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Language:DisplayLength:All"), "html", null, true);
        yield "\"]],
    dom: \"<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>t<'ibo-datatable--toolbar'<'ibo-datatable--toolbar-left' pl><'ibo-datatable--toolbar-right' i>>\",
    ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sort"], "method", false, true, false, 55), 0, [], "array", true, true, false, 55)) {
            // line 56
            yield "    order: [[";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", [], "method", false, false, false, 56)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["sort"] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", [], "method", false, false, false, 56)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["sort"] ?? null) : null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null), "html", null, true);
            yield "']],
    ";
        } else {
            // line 58
            yield "    order: [],
    ";
        }
        // line 60
        yield "    ordering: true,
    ";
        // line 61
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 61))) {
            // line 62
            yield "    select: {
        style: \"";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 63) == "multiple")) {
                yield "multi";
            } else {
                yield "single";
            }
            yield "\",
        info: false
    },
    rowCallback: function (oRow, oData) {
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            if (oSelectedItems";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ".indexOf(oData.id) === -1)
            {
                this.api().row(\$(oRow)).select();
                //   \$(oRow).addClass('selected');
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
        else
        {
            if (oSelectedItems";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield ".indexOf(oData.id) > -1)
            {
                this.api().row(\$(oRow)).select();
                \$(oRow).find('td:first-child input').prop('checked', true);
            }
        }
    },
    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
        {
            \$(this).closest('.dataTables_wrapper').find('.checkAll')[0].checked = true;
        }
        bSelectAllowed";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            yield " = true;

        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }

        \$(this).closest('.dataTables_wrapper').unblock();

        // Disable hyperlinks if necessary
        ";
            // line 109
            if ( !(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 109) === false)) {
                // line 110
                yield "        \$(\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 110), "html", null, true);
                yield " a\").on('click', function (e) {
                e.preventDefault();
            });
        ";
            }
            // line 114
            yield "        
    },
    ";
        } else {
            // line 117
            yield "    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        \$(this).closest('.dataTables_wrapper').unblock();
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
            // line 134
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["disable_hyperlinks"], "method", false, false, false, 134) === true)) {
                // line 135
                yield "        \$(\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 135), "html", null, true);
                yield " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
            }
            // line 139
            yield "    },
    ";
        }
        // line 141
        yield "    rowId: \"id\",
    filter: false,
    retrieve: true,
    destroy: true,
    processing: true,
    serverSide: true,
    columns: [
        ";
        // line 148
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 148))) {
            // line 149
            yield "        {
            width: \"20px\",
            searchable: false,
            sortable: false,
            orderable: false,
            title:
                    ";
            // line 155
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 155) != "single")) {
                // line 156
                yield "                '<span class=\"row_input\"><input type=\"checkbox\" onclick=\"checkAllDataTable(\\'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                yield "\\',this.checked,\\'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sListId"], "method", false, false, false, 156), "html", null, true);
                yield "\\');\" class=\"checkAll\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                yield "_check_all\" name=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 156), "html", null, true);
                yield "_check_all\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:CheckAll"), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:UncheckAll"), "html", null, true);
                yield "\"/></span>'
            ";
            } else {
                // line 158
                yield "                '<span class=\"row_input\"><input type=\"checkbox\" style=\"display: none;\" onclick=\"checkAllDataTable(\\'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                yield "\\',this.checked,\\'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sListId"], "method", false, false, false, 158), "html", null, true);
                yield "\\');\" class=\"checkAll\" id=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                yield "_check_all\" name=\"field_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 158), "html", null, true);
                yield "_check_all\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:CheckAll"), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:SearchValue:UncheckAll"), "html", null, true);
                yield "\"/></span>'
            ";
            }
            // line 159
            yield ",
            type: \"html\",
            data: \"id\",
            render: function (data, type, row) {
                let oCheckboxElem =
                ";
            // line 164
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 164) != "single")) {
                // line 165
                yield "                    \$('<span class=\"row_input\"><input type=\"checkbox\" class=\"selectList";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 165), "html", null, true);
                yield "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            } else {
                // line 167
                yield "                     \$('<span class=\"row_input\"><input type=\"radio\" class=\"selectList";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 167), "html", null, true);
                yield "\" name=\"selectObject[]\" value=\"'+row.id+'\"></span>');
                ";
            }
            // line 169
            yield "                if (row.limited_access) {
                    oCheckboxElem.html('-');
                } else {
                    oCheckboxElem.find(':input').attr('data-object-id', row.id).attr('data-target-object-id', row.target_id);
                }
                return oCheckboxElem.prop('outerHTML');
            }
        },
        ";
        }
        // line 178
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method", false, false, false, 178));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 179
            yield "        {
            // width: 100,
            autoWidth: true,
            searchable: false,
            sortable: true,
            title: \"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v4 = $context["aColumn"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["attribute_label"] ?? null) : null), "html", null, true);
            yield "\",
            defaultContent: \"\",
            type: \"html\",
            metadata: {
                object_class: \"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v5 = $context["aColumn"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["object_class"] ?? null) : null), "html", null, true);
            yield "\",
                attribute_code: \"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = $context["aColumn"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["attribute_code"] ?? null) : null), "html", null, true);
            yield "\",
                attribute_type: \"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v7 = $context["aColumn"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["attribute_type"] ?? null) : null), "html", null, true);
            yield "\",
                attribute_label: \"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v8 = $context["aColumn"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["attribute_label"] ?? null) : null), "html", null, true);
            yield "\"
            },
            data: \"";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v9 = $context["aColumn"]) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9["class_alias"] ?? null) : null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v10 = $context["aColumn"]) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10["attribute_code"] ?? null) : null), "html", null, true);
            yield "\",
            createdCell: function (td, cellData, rowData, row, col) {
                \$(td).attr('data-object-class', '";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v11 = $context["aColumn"]) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11["object_class"] ?? null) : null), "html", null, true);
            yield "');
                \$(td).attr('data-attribute-label', '";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v12 = $context["aColumn"]) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12["attribute_label"] ?? null) : null), "html", null, true);
            yield "');
                ";
            // line 197
            if (((($_v13 = $context["aColumn"]) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13["attribute_code"] ?? null) : null) != "_key_")) {
                // line 198
                yield "                \$(td).attr('data-attribute-code', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v14 = $context["aColumn"]) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14["attribute_code"] ?? null) : null), "html", null, true);
                yield "');
                \$(td).attr('data-attribute-type', '";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v15 = $context["aColumn"]) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15["attribute_type"] ?? null) : null), "html", null, true);
                yield "');
                ";
            }
            // line 201
            yield "                if (rowData[\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v16 = $context["aColumn"]) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16["class_alias"] ?? null) : null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v17 = $context["aColumn"]) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17["attribute_code"] ?? null) : null), "html", null, true);
            yield "/raw\"]) {
                    \$(td).attr('data-value-raw', rowData[\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v18 = $context["aColumn"]) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18["class_alias"] ?? null) : null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v19 = $context["aColumn"]) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19["attribute_code"] ?? null) : null), "html", null, true);
            yield "/raw\"]);
                }
            },
            render: {
                display: function (data, type, row) {  ";
            // line 206
            yield (($_v20 = $context["aColumn"]) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["render"] ?? null) : null);
            yield "},
                _: \"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v21 = $context["aColumn"]) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21["class_alias"] ?? null) : null), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v22 = $context["aColumn"]) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["attribute_code"] ?? null) : null), "html", null, true);
            yield "\"
            }
        },
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['aColumn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 211)) {
            // line 212
            yield "            getRowActionsColumnDefinition('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 212), "html", null, true);
            yield "'),
        ";
        }
        // line 214
        yield "    ],
    ajax: \$.fn.dataTable.pipeline({
                url: \"";
        // line 216
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method", false, false, false, 216), "html", null, true);
        yield "\",
                data: ";
        // line 217
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method", false, false, false, 217);
        yield ",
                method: \"post\",
                pages: 1
            }, // number of pages to cache
            ";
        // line 221
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonInitDisplayData", [], "method", false, false, false, 221);
        yield "
    ),
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
        this.closest('.dataTables_wrapper').unblock();

        ";
        // line 236
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 236))) {
            // line 237
            yield "        updateDataTableSelection('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
            yield "', '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 237), "html", null, true);
            yield "');
        ";
            // line 238
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 238) != "single")) {
                // line 239
                yield "        this.api().on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ")
            {
                let aData = oTable";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".rows(indexes).data().toArray();
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    // Checking input
                    \$('#";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 246), "html", null, true);
                yield "  tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".splice(oSelectedItems";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 254), "html", null, true);
                yield "');
                        }
                    }
                }
                else
                {
                    // Checking input
                    \$('#";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 261), "html", null, true);
                yield " tbody tr.selected td:first-child input').prop('checked', true);
                    // Saving values in temp array
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".push(iItemId);
                            updateDataTableSelection('";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 269), "html", null, true);
                yield "');
                        }
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield " )
            {
                let aData = oTable";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 281), "html", null, true);
                yield " tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                if (\$(this).closest('.ibo-panel--body').find('[name=selectionMode]').val() === \"negative\")
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) === -1)
                        {
                            oSelectedItems";
                // line 290
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".push(iItemId);
                            updateDataTableSelection('";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 291), "html", null, true);
                yield "');
                        }
                    }
                }
                else
                {
                    for (let i in aData)
                    {
                        let iItemId = aData[i].id;
                        if (oSelectedItems";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) > -1)
                        {
                            oSelectedItems";
                // line 302
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".splice(oSelectedItems";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId), 1);
                            updateDataTableSelection('";
                // line 303
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 303), "html", null, true);
                yield "');
                        }
                    }
                }
            }
        });
        ";
            } else {
                // line 310
                yield "        this.api().off('select').on('select', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 311
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield " )
            {
                let aData = oTable";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".rows(indexes).data().toArray();
                // Checking input
                \$('#";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 315), "html", null, true);
                yield "  tbody tr.selected td:first-child input').prop('checked', true);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 320
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) === -1)
                    {
                        oSelectedItems";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".push(iItemId);
                        updateDataTableSelection('";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 323), "html", null, true);
                yield "');
                    }
                }
            }
        });

        this.api().off('deselect').on('deselect', function (oEvent, dt, type, indexes) {
            if (bSelectAllowed";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield " )
            {
                let aData = oTable";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".rows(indexes).data().toArray();

                // Checking input
                \$('#";
                // line 335
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 335), "html", null, true);
                yield " tr tbody tr:not(.selected) td:first-child input').prop('checked', false);
                // Saving values in temp array
                for (let i in aData)
                {
                    let iItemId = aData[i].id;
                    if (oSelectedItems";
                // line 340
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId) > -1)
                    {
                        oSelectedItems";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".splice(oSelectedItems";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
                yield ".indexOf(iItemId), 1);
                        updateDataTableSelection('";
                // line 343
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 343), "html", null, true);
                yield "');
                    }
                }
            }
        });
        ";
            }
            // line 349
            yield "
        ";
            // line 350
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method", false, false, false, 350))) {
                // line 351
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisabledSelect", [], "method", false, false, false, 351));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 352
                    yield "        \$('.selectList";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 352), "html", null, true);
                    yield "[value=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "]').prop(\"disabled\", \"disabled\");
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['key'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                yield "        ";
            }
            // line 355
            yield "        ";
        }
        // line 356
        yield "        
        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    }
});

oTable";
        // line 363
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield ".select();

\$('#";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 365), "html", null, true);
        yield "').on('refresh.datatable.itop', function (){
    oTable";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield ".clearPipeline();
    oTable";
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield ".ajax.reload(null, false);
});

";
        // line 370
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetModalCreationHandler", [], "method", false, false, false, 370))) {
            // line 371
            yield "\$('body').on('open_creation_modal.object.itop','#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 371), "html", null, true);
            yield "', function (){
    ";
            // line 372
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetModalCreationHandler", [], "method", false, false, false, 372);
            yield "
});
";
        }
        // line 375
        yield "
";
        // line 376
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sCountSelector"], "method", false, false, false, 376))) {
            // line 377
            yield "\$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
            yield " [name=\"selectionCount\"]').on('change', function () {
    \$('";
            // line 378
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sCountSelector"], "method", false, false, false, 378), "html", null, true);
            yield "').val(\$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListId"] ?? null), "html", null, true);
            yield " [name=\"selectionCount\"]').val());
    \$('";
            // line 379
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sCountSelector"], "method", false, false, false, 379), "html", null, true);
            yield "').trigger('change');
});
";
        }
        // line 382
        yield "
\$('#datatable_dlg_";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 383), "html", null, true);
        yield "').dialog(
        {
            autoOpen: false,
            title: \"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:ListConfigurationTitle"), "html", null, true);
        yield "\",
            width: 500,
            modal: true,
            open: function () {
                \$('#datatable_dlg_";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 390), "html", null, true);
        yield "').find('[name=action]').val(\"none\");
            },
            close: function (event, ui) { //save data and refresh
                if (\$('#datatable_dlg_";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 393), "html", null, true);
        yield "').find('[name=action]').val() === \"none\")
                {
                    \$('#datatable_dlg_";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 395), "html", null, true);
        yield "').DataTableSettings('onDlgCancel');
                }
            },
            buttons: [
                {
                    text: \"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Cancel"), "html", null, true);
        yield "\",
                    class: \"ibo-is-alternative ibo-is-neutral\",
                    click: function() {
                        \$(this).dialog( \"close\" );
                    }
                },
                {
                    text: \"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Ok"), "html", null, true);
        yield "\",
                    class: \"ibo-is-regular ibo-is-primary\",
                    click: function() {
                        \$(this).DataTableSettings('onDlgOk');
                    }
                }
            ]
        });

var aOptions";
        // line 416
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield " = {
    sListId: '";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 417), "html", null, true);
        yield "',
    oColumns: ";
        // line 418
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetResultColumnsAsJson", [], "method", false, false, false, 418);
        yield ",
    sSelectMode: \"";
        // line 419
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 419), "html", null, true);
        yield "\",
    sSelectedItemsName: \"oSelectedItems";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "\",
    sViewLink: '";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["bViewLink"], "method", false, false, false, 421), "html", null, true);
        yield "',
    iPageSize: ";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["iPageSize"] ?? null), "html", null, true);
        yield ",
    oClassAliases: JSON.parse('";
        // line 423
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["oClassAliases"], "method", false, false, false, 423);
        yield "'),
    sTableId: '";
        // line 424
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sTableId"], "method", false, false, false, 424), "html", null, true);
        yield "',
    sRenderUrl: \"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxUrl", [], "method", false, false, false, 425), "html", null, true);
        yield "\",
    oData: ";
        // line 426
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsonAjaxData", [], "method", false, false, false, 426);
        yield ",
    oDefaultSettings: ";
        // line 427
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["oDefaultSettings"], "method", false, false, false, 427);
        yield ",
    oLabels: {moveup: \"";
        // line 428
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:MoveUp"), "html", null, true);
        yield "\", movedown: \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:MoveDown"), "html", null, true);
        yield "\"},
    bHasRowActions: ";
        // line 429
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 429)), "html", null, true);
        yield ",
};

if (\$('#datatable_dlg_";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 432), "html", null, true);
        yield "').hasClass('itop-datatable'))
{
    \$('#datatable_dlg_";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 434), "html", null, true);
        yield "').DataTableSettings('destroy');
}
\$('#datatable_dlg_";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 436), "html", null, true);
        yield "').DataTableSettings(aOptions";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield ");

if(window.ResizeObserver){
        let oTable";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = null;
        const oTable";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize = new ResizeObserver(function(){
            clearTimeout(oTable";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout);
            oTable";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "ResizeTimeout = setTimeout(function(){
                \$('#";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 443), "html", null, true);
        yield "').DataTable().columns.adjust();
            }, 120);
        });
        oTable";
        // line 446
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        yield "Resize.observe(\$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 446), "html", null, true);
        yield "')[0]);
}

";
        // line 449
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 449)) {
            // line 450
            yield "    ";
            yield from $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/layout.ready.js.twig", 450)->unwrap()->yield($context);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/layout.ready.js.twig";
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
        return array (  1038 => 450,  1036 => 449,  1028 => 446,  1022 => 443,  1018 => 442,  1014 => 441,  1010 => 440,  1006 => 439,  998 => 436,  993 => 434,  988 => 432,  982 => 429,  976 => 428,  972 => 427,  968 => 426,  964 => 425,  960 => 424,  956 => 423,  952 => 422,  948 => 421,  944 => 420,  940 => 419,  936 => 418,  932 => 417,  928 => 416,  916 => 407,  906 => 400,  898 => 395,  893 => 393,  887 => 390,  880 => 386,  874 => 383,  871 => 382,  865 => 379,  859 => 378,  854 => 377,  852 => 376,  849 => 375,  843 => 372,  838 => 371,  836 => 370,  830 => 367,  826 => 366,  822 => 365,  817 => 363,  808 => 356,  805 => 355,  802 => 354,  791 => 352,  786 => 351,  784 => 350,  781 => 349,  770 => 343,  764 => 342,  759 => 340,  751 => 335,  745 => 332,  740 => 330,  728 => 323,  724 => 322,  719 => 320,  711 => 315,  706 => 313,  701 => 311,  698 => 310,  686 => 303,  680 => 302,  675 => 300,  661 => 291,  657 => 290,  652 => 288,  642 => 281,  637 => 279,  632 => 277,  619 => 269,  615 => 268,  610 => 266,  602 => 261,  590 => 254,  584 => 253,  579 => 251,  571 => 246,  564 => 242,  559 => 240,  556 => 239,  554 => 238,  547 => 237,  545 => 236,  527 => 221,  520 => 217,  516 => 216,  512 => 214,  506 => 212,  503 => 211,  491 => 207,  487 => 206,  478 => 202,  471 => 201,  466 => 199,  461 => 198,  459 => 197,  455 => 196,  451 => 195,  444 => 193,  439 => 191,  435 => 190,  431 => 189,  427 => 188,  420 => 184,  413 => 179,  408 => 178,  397 => 169,  391 => 167,  385 => 165,  383 => 164,  376 => 159,  360 => 158,  344 => 156,  342 => 155,  334 => 149,  332 => 148,  323 => 141,  319 => 139,  311 => 135,  309 => 134,  290 => 117,  285 => 114,  277 => 110,  275 => 109,  257 => 94,  238 => 78,  226 => 69,  213 => 63,  210 => 62,  208 => 61,  205 => 60,  201 => 58,  193 => 56,  191 => 55,  169 => 53,  164 => 50,  162 => 49,  159 => 48,  153 => 46,  151 => 45,  144 => 41,  140 => 40,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  86 => 21,  80 => 18,  74 => 17,  69 => 15,  63 => 12,  59 => 11,  56 => 10,  52 => 8,  48 => 6,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/layout.ready.js.twig", "/var/www/html/templates/base/components/datatable/layout.ready.js.twig");
    }
}
