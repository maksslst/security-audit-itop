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

/* base/layouts/activity-panel/layout.html.twig */
class __TwigTemplate_26dc722aaf9ac814346ac5b7df27b2c3 extends Template
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
        yield "\"
     class=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsExpanded", [], "method", false, false, false, 2)) {
            yield "ibo-is-expanded";
        }
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsClosed", [], "method", false, false, false, 2)) {
            yield "ibo-is-closed";
        }
        yield "\"
     data-role=\"ibo-activity-panel\"
     data-object-class=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectClass", [], "method", false, false, false, 4), "html", null, true);
        yield "\"
     data-object-id=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 5), "html", null, true);
        yield "\"
     data-object-mode=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 6), "html", null, true);
        yield "\">
    <div class=\"ibo-activity-panel--header\" data-role=\"ibo-activity-panel--header\">
        <div class=\"ibo-activity-panel--tabs-togglers\" data-role=\"ibo-activity-panel--tabs-togglers\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
            // line 10
            yield "                ";
            $context["sExtraCSSClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) == 1)) ? ("ibo-is-active") : (""));
            // line 11
            yield "                <div class=\"ibo-activity-panel--tab-toggler ibo-activity-panel--tab-toggler-for-caselog ibo-activity-panel--tab-toggler-for-caselog-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sExtraCSSClass"] ?? null), "html", null, true);
            yield "\"
                     data-role=\"ibo-activity-panel--tab-toggler\"
                     data-tab-type=\"caselog\"
                     data-caselog-attribute-code=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sCaseLogAttCode"], "html", null, true);
            yield "\"
                     data-caselog-attribute-label=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                     data-caselog-rank=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                    <a href=\"#\" class=\"ibo-activity-panel--tab-title\" data-role=\"ibo-activity-panel--tab-title\">
                        <span class=\"ibo-activity-panel--tab-title-decoration\" data-role=\"ibo-activity-panel--tab-title-decoration\"></span>
                        <span class=\"ibo-activity-panel--tab-title-text\" data-role=\"ibo-activity-panel--tab-title-text\" title=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
                        <span class=\"ibo-activity-panel--tab-title-messages-count\" data-role=\"ibo-activity-panel--tab-title-messages-count\" data-messages-count=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aCaseLogData"], "total_messages_count", [], "any", false, false, false, 20), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aCaseLogData"], "total_messages_count", [], "any", false, false, false, 20), "html", null, true);
            yield "</span>
                        <span class=\"ibo-activity-panel--tab-title-draft-indicator\"
                              data-role=\"ibo-activity-panel--tab-title-draft-indicator\"
                              data-tooltip-content=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Log:DraftIndicator:Tooltip"), "html", null, true);
            yield "\">
                            <span class=\"fas fa-pen\"></span>
                        </span>
                    </a>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            ";
        $context["sExtraCSSClass"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 29))) ? ("ibo-is-active") : (""));
        // line 30
        yield "            <div class=\"ibo-activity-panel--tab-toggler ibo-activity-panel--tab-toggler-for-activity ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sExtraCSSClass"] ?? null), "html", null, true);
        yield "\"
                 data-role=\"ibo-activity-panel--tab-toggler\"
                 data-tab-type=\"activity\">
                <a href=\"#\" class=\"ibo-activity-panel--tab-title\" data-role=\"ibo-activity-panel--tab-title\">
                    <span class=\"ibo-activity-panel--tab-title-text\" title=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Activity:Title"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Activity:Title"), "html", null, true);
        yield "</span>
                </a>
            </div>
            <div class=\"ibo-activity-panel--togglers\" data-role=\"ibo-activity-panel--togglers\">
                <a href=\"#\" class=\"ibo-activity-panel--expand-icon\"
                   data-role=\"ibo-activity-panel--expand-icon\"
                   data-tooltip-content=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Expand:Tooltip"), "html", null, true);
        yield "\"
                   aria-label=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Expand:Tooltip"), "html", null, true);
        yield "\">
                    <span class=\"fas fa-fw fa-expand-alt\"></span>
                </a>
                <a href=\"#\" class=\"ibo-activity-panel--reduce-icon\"
                   data-role=\"ibo-activity-panel--reduce-icon\"
                   data-tooltip-content=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Reduce:Tooltip"), "html", null, true);
        yield "\"
                   aria-label=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Reduce:Tooltip"), "html", null, true);
        yield "\">
                    <span class=\"fas fa-fw fa-compress-alt\"></span>
                </a>
                <a href=\"#\" class=\"ibo-activity-panel--close-icon\"
                   data-role=\"ibo-activity-panel--close-icon\"
                   data-tooltip-content=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:DisplayToggler:Close:Tooltip"), "html", null, true);
        yield "\"
                   aria-label=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:DisplayToggler:Close:Tooltip"), "html", null, true);
        yield "\">
                    <span class=\"fas fa-fw fa-chevron-right\"></span>
                </a>
            </div>
        </div>
        <div class=\"ibo-activity-panel--tabs-toolbars\" data-role=\"ibo-activity-panel--tabs-toolbars\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 59));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
            // line 60
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", ["oUIBlock" => ($context["oUIBlock"] ?? null), "iRank" => CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "bIsActive" => (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60) == 1), "sAttCode" => $context["sCaseLogAttCode"], "aData" => $context["aCaseLogData"], "aFilteredCaseLogsAttCodes" => [$context["sCaseLogAttCode"]]]);
            yield "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/activity-panel/tab-toolbar/activity.html.twig", ["oUIBlock" => ($context["oUIBlock"] ?? null), "bIsActive" => (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 62)) == 0), "bPrefilterStateChanges" => true, "bPrefilterEdits" => true]);
        yield "
            <div class=\"ibo-activity-panel--entry-forms-confirmation-dialog\" data-role=\"ibo-activity-panel--entry-forms-confirmation-dialog\" title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:MultipleEntriesSaveConfirmation:Title"), "html", null, true);
        yield "\">
                <div class=\"ibo-activity-panel--entry-forms-confirmation-explanation\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:MultipleEntriesSaveConfirmation:Explanation"), "html", null, true);
        yield "</div>
                <label class=\"ibo-activity-panel--entry-forms-confirmation-preference\">
                    <input type=\"checkbox\" class=\"ibo-activity-panel--entry-forms-confirmation-preference-input\" data-role=\"ibo-activity-panel--entry-forms-confirmation-preference-input\">
                    <span class=\"ibo-activity-panel--entry-forms-confirmation-preference-text\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:UserPref:DoNotShowAgain"), "html", null, true);
        yield "</span>
                </label>
            </div>
        </div>
    </div>
    ";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsComposeButtonEnabled", [], "method", false, false, false, 72)) {
            // line 73
            yield "        <a href=\"#\"
           id=\"ibo-activity-panel--add-caselog-entry-button\"
           class=\"ibo-activity-panel--add-caselog-entry-button ";
            // line 75
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEntryFormOpened", [], "method", false, false, false, 75)) {
                yield "ibo-is-hidden";
            }
            yield "\"
           data-role=\"ibo-activity-panel--add-caselog-entry-button\"
           data-tooltip-content=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ComposeButton:Tooltip"), "html", null, true);
            yield "\"
           aria-label=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ComposeButton:Tooltip"), "html", null, true);
            yield "\">
            <i class=\"fas fa-feather\"></i>
        </a>
        ";
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasComposeMenu", [], "method", false, false, false, 81)) {
                // line 82
                yield "            ";
                yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComposeMenu", [], "method", false, false, false, 82));
                yield "
        ";
            }
            // line 84
            yield "    ";
        }
        // line 85
        yield "    <div class=\"ibo-activity-panel--body\" data-role=\"ibo-activity-panel--body\">
        ";
        // line 86
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGroupedEntries", [], "method", false, false, false, 86)) > 0)) {
            // line 87
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGroupedEntries", [], "method", false, false, false, 87));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aEntryGroup"]) {
                // line 88
                yield "                ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/activity-panel/entry-group.html.twig", ["aEntryGroup" => $context["aEntryGroup"]]);
                yield "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aEntryGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasMoreEntriesToLoad", [], "method", false, false, false, 90)) {
                // line 91
                yield "                <div class=\"ibo-activity-panel--load-more-entries-container\" data-role=\"ibo-activity-panel--load-more-entries-container\">
                    ";
                // line 93
                yield "                    ";
                // line 94
                yield "                    <a href=\"#\" class=\"ibo-activity-panel--load-more-entries ibo-activity-panel--load-entries-button\" data-role=\"ibo-activity-panel--load-more-entries\" data-tooltip-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:LoadMoreEntries:Tooltip"), "html", null, true);
                yield "\">
                        <span class=\"ibo-activity-panel--load-entries-icon fas fa-fw fa-angle-down\" data-role=\"ibo-activity-panel--load-more-entries-icon\"></span>
                    </a>
                    <a href=\"#\" class=\"ibo-activity-panel--load-all-entries ibo-activity-panel--load-entries-button\" data-role=\"ibo-activity-panel--load-all-entries\" data-tooltip-content=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:LoadAllEntries:Tooltip"), "html", null, true);
                yield "\">
                        <span class=\"ibo-activity-panel--load-entries-icon fas fa-fw fa-angle-double-down\" data-role=\"ibo-activity-panel--load-all-entries-icon\"></span>
                    </a>
                </div>
            ";
            }
            // line 102
            yield "        ";
        } else {
            // line 103
            yield "            <div class=\"ibo-activity-panel--body--placeholder\">
                <div class=\"ibo-activity-panel--body--placeholder-image ibo-svg-illustration--container\">
                    ";
            // line 105
            yield Twig\Extension\CoreExtension::source($this->env, "illustrations/undraw_reading_time.svg");
            yield "
                </div>
                <div class=\"ibo-activity-panel--body--placeholder-hint\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:NoEntry:Placeholder:Hint"), "html", null, true);
            yield "</div>
            </div>
        ";
        }
        // line 110
        yield "    </div>
    <div class=\"ibo-activity-panel--closed-cover\" data-role=\"ibo-activity-panel--closed-cover\" data-tooltip-content=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ClosedCover:Tooltip"), "html", null, true);
        yield "\" data-tooltip-placement=\"left\">
        <span class=\"ibo-activity-panel--closed-content-container\" data-role=\"ibo-activity-panel--closed-content-container\">
            <span class=\"ibo-activity-panel--closed-title\" data-role=\"ibo-activity-panel--closed-title\">";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ClosedCover:Title"), "html", null, true);
        yield "</span>
            <span class=\"ibo-activity-panel--open-icon\" data-role=\"ibo-activity-panel--open-icon\">
                <span class=\"fas fa-fw fa-chevron-up\"></span>
            </span>
        </span>
    </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/layout.html.twig";
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
        return array (  392 => 113,  387 => 111,  384 => 110,  378 => 107,  373 => 105,  369 => 103,  366 => 102,  358 => 97,  351 => 94,  349 => 93,  346 => 91,  343 => 90,  326 => 88,  308 => 87,  306 => 86,  303 => 85,  300 => 84,  294 => 82,  292 => 81,  286 => 78,  282 => 77,  275 => 75,  271 => 73,  269 => 72,  261 => 67,  255 => 64,  251 => 63,  246 => 62,  229 => 60,  212 => 59,  203 => 53,  199 => 52,  191 => 47,  187 => 46,  179 => 41,  175 => 40,  164 => 34,  156 => 30,  153 => 29,  133 => 23,  125 => 20,  119 => 19,  113 => 16,  109 => 15,  105 => 14,  96 => 11,  93 => 10,  76 => 9,  70 => 6,  66 => 5,  62 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/layout.html.twig", "/var/www/html/templates/base/layouts/activity-panel/layout.html.twig");
    }
}
