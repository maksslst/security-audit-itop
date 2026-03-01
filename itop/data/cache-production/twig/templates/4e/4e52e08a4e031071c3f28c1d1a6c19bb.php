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

/* base/layouts/activity-panel/tab-toolbar/layout.html.twig */
class __TwigTemplate_2d27b6fa6e37ff87cc44c47f6cdc6978 extends Template
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
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
            'bTabToolbarSecondRow' => [$this, 'block_bTabToolbarSecondRow'],
            'bTabToolbarActions' => [$this, 'block_bTabToolbarActions'],
            'bTabToolbarLeftActions' => [$this, 'block_bTabToolbarLeftActions'],
            'bTabToolbarRightActions' => [$this, 'block_bTabToolbarRightActions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"ibo-activity-panel--tab-toolbar ";
        if ((($context["bIsActive"] ?? null) == true)) {
            yield "ibo-is-active";
        }
        yield " ";
        yield from $this->unwrap()->yieldBlock('bExtraCSSClasses', $context, $blocks);
        yield "\"
     data-role=\"ibo-activity-panel--tab-toolbar\"
     data-tab-type=\"";
        // line 3
        yield from $this->unwrap()->yieldBlock('bDataTabType', $context, $blocks);
        yield "\"
\t ";
        // line 4
        yield from $this->unwrap()->yieldBlock('bExtraDataAttributes', $context, $blocks);
        yield ">
\t";
        // line 5
        yield from $this->unwrap()->yieldBlock('bTabToolbarFirstRow', $context, $blocks);
        // line 7
        yield "\t";
        yield from $this->unwrap()->yieldBlock('bTabToolbarSecondRow', $context, $blocks);
        // line 89
        yield "</div>";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bExtraCSSClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bDataTabType(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bExtraDataAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarFirstRow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "\t";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarSecondRow(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "        <div class=\"ibo-activity-panel--tab-toolbar-actions\">
            ";
        // line 9
        yield from $this->unwrap()->yieldBlock('bTabToolbarActions', $context, $blocks);
        // line 87
        yield "        </div>
    ";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarActions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "                <div class=\"ibo-activity-panel--tab-toolbar-left-actions\">
                    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('bTabToolbarLeftActions', $context, $blocks);
        // line 25
        yield "                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-middle-actions\">
                    ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method", false, false, false, 27)) {
            // line 28
            yield "                        <label class=\"ibo-activity-panel--tab-toolbar-action\" data-role=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Tooltip"), "html", null, true);
            yield "\">
                            <input type=\"checkbox\" name=\"caselogs\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"caselog\"
                                   ";
            // line 31
            if ((((!array_key_exists("aFilteredCaseLogsAttCodes", $context)) || Twig\Extension\CoreExtension::testEmpty(($context["aFilteredCaseLogsAttCodes"] ?? null))) || (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterOnlyCurrentLog", [], "method", false, false, false, 31) == false))) {
                yield "checked";
            }
            yield ">
                            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Title"), "html", null, true);
            yield "
                            ";
            // line 33
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 33)) > 0)) {
                // line 34
                yield "                                <a class=\"ibo-activity-panel--filter-options-toggler ibo-is-closed\" href=\"#\"
                                    data-role=\"ibo-activity-panel--filter-options-toggler\"
                                    aria-label=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Menu:Hint"), "html", null, true);
                yield "\">
                                    <span class=\"fas fa-caret-up\"></span>
                                </a>
                                <div class=\"ibo-activity-panel--filter-options\" data-role=\"ibo-activity-panel--filter-options\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 40));
                foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
                    // line 41
                    yield "                                        <label class=\"ibo-activity-panel--filter-option\" data-role=\"ibo-activity-panel--filter-option\"
                                               title=\"";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v0 = $context["aCaseLogData"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["title"] ?? null) : null), "html", null, true);
                    yield "\">
                                            <input type=\"checkbox\" name=\"caselog\" value=\"";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sCaseLogAttCode"], "html", null, true);
                    yield "\"
                                                   class=\"ibo-activity-panel--filter-option-input\"
                                                   data-role=\"ibo-activity-panel--filter-option-input\"
                                                   ";
                    // line 46
                    if ((((!array_key_exists("aFilteredCaseLogsAttCodes", $context)) || CoreExtension::inFilter($context["sCaseLogAttCode"], ($context["aFilteredCaseLogsAttCodes"] ?? null))) || (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterOnlyCurrentLog", [], "method", false, false, false, 46) == false))) {
                        yield "checked";
                    }
                    yield ">
                                            ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["aCaseLogData"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["title"] ?? null) : null), "html", null, true);
                    yield "
                                        </label>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                yield "                                </div>
                            ";
            }
            // line 52
            yield "                        </label>
                    ";
        }
        // line 54
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasStates", [], "method", false, false, false, 54)) {
            // line 55
            yield "                        <label class=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Tooltip"), "html", null, true);
            yield "\">
                            <input type=\"checkbox\" name=\"transitions\" data-role=\"ibo-activity-panel--filter\"
                                   data-target-entry-types=\"transition\" ";
            // line 58
            if (((array_key_exists("bPrefilterStateChanges", $context) && (($context["bPrefilterStateChanges"] ?? null) == true)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterStateChangesOnLogs", [], "method", false, false, false, 58) == true))) {
                yield "checked";
            }
            yield ">
                            ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Title"), "html", null, true);
            yield "
                        </label>
                    ";
        }
        // line 62
        yield "                    <label class=\"ibo-activity-panel--tab-toolbar-action\"
                           data-tooltip-content=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Tooltip"), "html", null, true);
        yield "\">
                        <input type=\"checkbox\" name=\"edits\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"edits\" ";
        // line 64
        if (((array_key_exists("bPrefilterEdits", $context) && (($context["bPrefilterEdits"] ?? null) == true)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterEditsOnLogs", [], "method", false, false, false, 64) == true))) {
            yield "checked";
        }
        yield ">
                        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Title"), "html", null, true);
        yield "
                    </label>
                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-right-actions\">
                    ";
        // line 69
        yield from $this->unwrap()->yieldBlock('bTabToolbarRightActions', $context, $blocks);
        // line 85
        yield "                </div>
            ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarLeftActions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-open-all\"
                           data-role=\"ibo-activity-panel--caselog-open-all\"
                           data-tooltip-content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"), "html", null, true);
        yield "\"
                           aria-label=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"), "html", null, true);
        yield "\">
                            <span class=\"fas fa-book-open\"></span>
                        </a>
                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-close-all\"
                           data-role=\"ibo-activity-panel--caselog-close-all\"
                           data-tooltip-content=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"), "html", null, true);
        yield "\"
                           aria-label=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"), "html", null, true);
        yield "\">
                            <span class=\"fas fa-book\"></span>
                        </a>
                    ";
        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bTabToolbarRightActions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 70
        yield "                        <span class=\"ibo-activity-panel--tab-toolbar-info\"
                              data-tooltip-content=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Info:AuthorsCount:Tooltip"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-authors-count\"
                                  data-role=\"ibo-activity-panel--tab-toolbar-info-authors-count\">-</span>
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-users\"></span>
\t\t\t\t\t\t</span>
                        ";
        // line 76
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method", false, false, false, 76)) {
            // line 77
            yield "                            <span class=\"ibo-activity-panel--tab-toolbar-info\"
                                  data-tooltip-content=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Info:MessagesCount:Tooltip"), "html", null, true);
            yield "\">
                                <span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-messages-count\"
                                      data-role=\"ibo-activity-panel--tab-toolbar-info-messages-count\">-</span>
                                <span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-comment-alt\"></span>
                            </span>
                        ";
        }
        // line 84
        yield "                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
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
        return array (  346 => 84,  337 => 78,  334 => 77,  332 => 76,  324 => 71,  321 => 70,  314 => 69,  305 => 21,  301 => 20,  293 => 15,  289 => 14,  285 => 12,  278 => 11,  272 => 85,  270 => 69,  263 => 65,  257 => 64,  253 => 63,  250 => 62,  244 => 59,  238 => 58,  233 => 56,  230 => 55,  227 => 54,  223 => 52,  219 => 50,  210 => 47,  204 => 46,  198 => 43,  194 => 42,  191 => 41,  187 => 40,  180 => 36,  176 => 34,  174 => 33,  170 => 32,  164 => 31,  159 => 29,  156 => 28,  154 => 27,  150 => 25,  148 => 11,  145 => 10,  138 => 9,  132 => 87,  130 => 9,  127 => 8,  120 => 7,  115 => 6,  108 => 5,  98 => 4,  88 => 3,  78 => 1,  73 => 89,  70 => 7,  68 => 5,  64 => 4,  60 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/layout.html.twig", "/var/www/html/templates/base/layouts/activity-panel/tab-toolbar/layout.html.twig");
    }
}
