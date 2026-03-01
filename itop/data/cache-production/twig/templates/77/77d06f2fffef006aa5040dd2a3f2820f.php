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

/* base/components/datatable/config/layout.html.twig */
class __TwigTemplate_5b6ebbcd880780d05ed965af915f2387 extends Template
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
        yield "<div id=\"datatable_dlg_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 1), "html", null, true);
        yield "\" style=\"display: none;\" class=\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlockCode", [], "method", false, false, false, 1), "html", null, true);
        yield "\" role=\"datatable-settings-dialog\">
    <input type=\"hidden\" name=\"action\" value=\"none\">
    <form id=\"form_";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 3), "html", null, true);
        yield "\" onsubmit=\"return false\">
        <div>
            <input id=\"dtbl_dlg_settings_";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 5), "html", null, true);
        yield "\" type=\"radio\" name=\"settings\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["bUseCustomSettings"], "method", false, false, false, 5) == false)) {
            yield " checked ";
        }
        yield " value=\"defaults\">
            <label for=\"dtbl_dlg_settings_";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 6), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:UseDefaultSettings"), "html", null, true);
        yield "</label>
        </div>
        <div class=\"ibo-datatableconfig--attributes-panel ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_specific_";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 11), "html", null, true);
        yield "\" type=\"radio\" class=\"specific_settings\" name=\"settings\" ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["bUseCustomSettings"], "method", false, false, false, 11)) {
            yield " checked ";
        }
        yield " value=\"specific\">
                    <label for=\"dtbl_dlg_specific_";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 12), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:UseSpecificSettings"), "html", null, true);
        yield "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body\">
                ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:ColumnsAndSortOrder"), "html", null, true);
        yield "<br>
                <div class=\"ibo-multi-column\">
                    <div class=\"ibo-column ibo-without-margin ibo-list-column\">
                        <ul class=\"sortable_field_list\" id=\"sfl_";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 19), "html", null, true);
        yield "\">
                        </ul>
                    </div>
                </div>
                <p> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Display_X_ItemsPerPage_prefix"), "html", null, true);
        yield "<input class=\"ibo-datatableconfig--attributes-panel--per-page--input\" type=\"number\" min=\"1\" size=\"4\" name=\"page_size\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["iPageSize"], "method", false, false, false, 23), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Display_X_ItemsPerPage_suffix"), "html", null, true);
        yield "</p>
            </div>
        </div>
        <div class=\"ibo-datatableconfig--settings-panel ibo-panel ibo-is-neutral ibo-is-opened\" data-role=\"ibo-panel\">
            <div class=\"ibo-panel--header\">
                <div class=\"ibo-panel--header-left\">
                    <input id=\"dtbl_dlg_save_";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 29), "html", null, true);
        yield "\" type=\"checkbox\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sTableId"], "method", false, false, false, 29) != null)) {
            yield "checked";
        }
        yield " name=\"save_settings\">
                    <label for=\"dtbl_dlg_save_";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 30), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:UseSavetheSettings"), "html", null, true);
        yield "</label>
                </div>
            </div>
            <div class=\"ibo-panel--body\">
                <div class=\"ibo-datatableconfig--settings-panel--options-container\">
                    <div class=\"ibo-datatableconfig--settings-panel--option\">
                        <input id=\"dtbl_dlg_this_list_";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 36), "html", null, true);
        yield "\" type=\"radio\" name=\"scope\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sTableId"], "method", false, false, false, 36) != null)) {
            yield " checked ";
        } else {
            yield " disabled=\"disabled\" stay-disabled=\"true\"";
        }
        yield " value=\"this_list\">
                        <label for=\"dtbl_dlg_this_list_";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 37), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:OnlyForThisList"), "html", null, true);
        yield "</label>
                    </div>
                </div>
                <div class=\"ibo-datatableconfig--settings-panel--options-container\">
                    <div class=\"ibo-datatableconfig--settings-panel--option\">
                    <input id=\"dtbl_dlg_all_";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 42), "html", null, true);
        yield "\" type=\"radio\" name=\"scope\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["sTableId"], "method", false, false, false, 42) == null)) {
            yield " checked ";
        }
        yield " value=\"defaults\">
                    <label for=\"dtbl_dlg_all_";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTableId", [], "method", false, false, false, 43), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:ForAllLists"), "html", null, true);
        yield "</label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/config/layout.html.twig";
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
        return array (  163 => 43,  155 => 42,  145 => 37,  135 => 36,  124 => 30,  116 => 29,  103 => 23,  96 => 19,  90 => 16,  81 => 12,  73 => 11,  63 => 6,  55 => 5,  50 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/config/layout.html.twig", "/var/www/html/templates/base/components/datatable/config/layout.html.twig");
    }
}
