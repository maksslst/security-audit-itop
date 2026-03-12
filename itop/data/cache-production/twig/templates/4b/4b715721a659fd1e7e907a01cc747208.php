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

/* base/components/datatable/row-actions/handler.js.twig */
class __TwigTemplate_348371497393777dccf3f0c6f4b4241c extends Template
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
// for each row action...
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActions", [], "method", false, false, false, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aAction"]) {
            // line 6
            yield "

    // register action buttons click
    \$('body').on('click', 'button[data-table-id=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 9), "html", null, true);
            yield "\"][data-action-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9), "html", null, true);
            yield "\"]', function() {

        // variables accessible from action row js
        let oDatatable = \$('#";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
            yield "').DataTable();
        let oTrElement = \$(this).closest('tr');
        let sLabel = \$(this).data('label');
        let iActionId = \$(this).data('action-id');
        let aRowData = oDatatable.row(oTrElement).data();
        let sConfirmButtonClass = 'ibo-is-primary';

        ";
            // line 19
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 19), "confirm_button_class", [], "any", false, false, false, 19))) {
                // line 20
                yield "            sConfirmButtonClass = '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 20), "confirm_button_class", [], "any", false, false, false, 20), "html", null, true);
                yield "';
        ";
            }
            // line 22
            yield "
        ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", true, true, false, 23)) {
                // line 24
                yield "
            // Prepare confirmation title
            let sTitle = `";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:RowActions:ConfirmationDialog"), "js"), "html", null, true);
                yield "`;
            ";
                // line 27
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 27), "title", [], "any", true, true, false, 27)) {
                    // line 28
                    yield "                sTitle = `";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)), "js"), "html", null, true);
                    yield "`;
            ";
                }
                // line 30
                yield "            sTitle = sTitle.replaceAll('{item}', aRowData['";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 30), "row_data", [], "any", false, false, false, 30), "html", null, true);
                yield "']);

            // Prepare confirmation message
            let sMessage = `";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:RowActions:ConfirmationMessage"), "js"), "html", null, true);
                yield "`;
            ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 34), "message", [], "any", true, true, false, 34)) {
                    // line 35
                    yield "                sMessage = `";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 35), "message", [], "any", false, false, false, 35)), "js"), "html", null, true);
                    yield "`;
            ";
                }
                // line 37
                yield "            sMessage = sMessage.replaceAll('{item}', aRowData['";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 37), "row_data", [], "any", false, false, false, 37), "html", null, true);
                yield "']);

            // Handle action row with confirmation modal
            CombodoModal.OpenConfirmationModal({
                title: sTitle,
                content: sMessage,
                callback_on_confirm: ActionRowFunction";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 43), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 43), "html", null, true);
                yield ",
                buttons: {
                    confirm: {
                        text: sLabel,
                        classes: [sConfirmButtonClass]
                    }
                },
                ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 50), "do_not_show_again_pref_key", [], "any", true, true, false, 50)) {
                    // line 51
                    yield "                do_not_show_again_pref_key: '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 51), "do_not_show_again_pref_key", [], "any", false, false, false, 51), "html", null, true);
                    yield "',
                ";
                }
                // line 53
                yield "            }, [oDatatable, oTrElement, iActionId, aRowData]);

        ";
            } else {
                // line 56
                yield "
            // Handle action row without confirmation
            ActionRowFunction";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 58), "html", null, true);
                yield "(oDatatable, oTrElement, iActionId, aRowData);

        ";
            }
            // line 61
            yield "
    });

    // action row function declaration
    function ActionRowFunction";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 65), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 65), "html", null, true);
            yield "(oDatatable, oTrElement, iActionId, aRowData){
        ";
            // line 66
            yield CoreExtension::getAttribute($this->env, $this->source, $context["aAction"], "js_row_action", [], "any", false, false, false, 66);
            yield ";
        return true;
    }

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
        unset($context['_seq'], $context['_key'], $context['aAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/row-actions/handler.js.twig";
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
        return array (  190 => 66,  185 => 65,  179 => 61,  172 => 58,  168 => 56,  163 => 53,  157 => 51,  155 => 50,  144 => 43,  134 => 37,  128 => 35,  126 => 34,  122 => 33,  115 => 30,  109 => 28,  107 => 27,  103 => 26,  99 => 24,  97 => 23,  94 => 22,  88 => 20,  86 => 19,  76 => 12,  68 => 9,  63 => 6,  46 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/row-actions/handler.js.twig", "/var/www/html/templates/base/components/datatable/row-actions/handler.js.twig");
    }
}
