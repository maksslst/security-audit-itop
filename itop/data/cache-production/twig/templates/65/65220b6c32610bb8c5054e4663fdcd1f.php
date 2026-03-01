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

/* base/components/panel/layout.html.twig */
class __TwigTemplate_f186dd99f1c6171b81c4416837417815 extends Template
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
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelHeaderOuter' => [$this, 'block_iboPanelHeaderOuter'],
            'iboPanelHeader' => [$this, 'block_iboPanelHeader'],
            'iboPanelHeaderLeft' => [$this, 'block_iboPanelHeaderLeft'],
            'iboPanelIcon' => [$this, 'block_iboPanelIcon'],
            'iboPanelTitles' => [$this, 'block_iboPanelTitles'],
            'iboPanelTitle' => [$this, 'block_iboPanelTitle'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
            'iboPanelHeaderRight' => [$this, 'block_iboPanelHeaderRight'],
            'iboPanelToolbar' => [$this, 'block_iboPanelToolbar'],
            'iboPanelBodyOuter' => [$this, 'block_iboPanelBodyOuter'],
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "    <div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        yield "\"
         class=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCSSColorClass", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 4)) {
            yield "ibo-has-icon";
        }
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsIconAsMedallion", [], "method", false, false, false, 4)) {
            yield "ibo-has-medallion-icon";
        }
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            yield "ibo-is-hidden";
        }
        yield " ibo-is-opened\"
            ";
        // line 5
        yield from $this->unwrap()->yieldBlock('iboPanelMetaData', $context, $blocks);
        // line 6
        yield "         data-role=\"ibo-panel\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('iboPanelHeaderOuter', $context, $blocks);
        // line 53
        yield "        ";
        yield from $this->unwrap()->yieldBlock('iboPanelBodyOuter', $context, $blocks);
        // line 62
        yield "    </div>";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelMetaData(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeaderOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "        <div class=\"ibo-panel--header\" data-role=\"ibo-panel--header\">
            ";
        // line 9
        yield from $this->unwrap()->yieldBlock('iboPanelHeader', $context, $blocks);
        // line 51
        yield "        </div>
        ";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "                <div class=\"ibo-panel--header-left\" data-role=\"ibo-panel--header-left\">
                    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "isCollapsible", [], "method", false, false, false, 11)) {
            // line 12
            yield "                        <div class=\"ibo-panel--collapsible-toggler\" data-role=\"ibo-panel--collapsible-toggler\">
                            <i class=\"fas fa-caret-right ibo-panel--collapsible-toggler--closed\"></i>
                            <i class=\"fas fa-caret-down ibo-panel--collapsible-toggler--opened\"></i>
                        </div>
                    ";
        }
        // line 17
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('iboPanelHeaderLeft', $context, $blocks);
        // line 38
        yield "                </div>
                <div class=\"ibo-panel--header-right\" data-role=\"ibo-panel--header-right\">
                    ";
        // line 40
        yield from $this->unwrap()->yieldBlock('iboPanelHeaderRight', $context, $blocks);
        // line 49
        yield "                </div>
            ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeaderLeft(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasIcon", [], "method", false, false, false, 18)) {
            // line 19
            yield "                            <div class=\"ibo-panel--icon\" data-role=\"ibo-panel--icon\">
                                ";
            // line 20
            yield from $this->unwrap()->yieldBlock('iboPanelIcon', $context, $blocks);
            // line 23
            yield "                            </div>
                        ";
        }
        // line 25
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 25) || CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSubTitle", [], "method", false, false, false, 25))) {
            // line 26
            yield "                            <div class=\"ibo-panel--titles\" data-role=\"ibo-panel--titles\">
                                ";
            // line 27
            yield from $this->unwrap()->yieldBlock('iboPanelTitles', $context, $blocks);
            // line 35
            yield "                            </div>
                        ";
        }
        // line 37
        yield "                    ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelIcon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                                    <div class=\"ibo-panel--icon-background ibo-panel--icon-background--must-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconCoverMethod", [], "method", false, false, false, 21), "html", null, true);
        yield "\" data-role=\"ibo-panel--icon-background\" style=\"background-image: url('";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 21);
        yield "');\"></div>
                                ";
        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelTitles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 28
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 28)) {
            // line 29
            yield "                                        <div class=\"ibo-panel--title\" data-role=\"ibo-panel--title\">";
            yield from $this->unwrap()->yieldBlock('iboPanelTitle', $context, $blocks);
            yield "</div>
                                    ";
        }
        // line 31
        yield "                                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSubTitle", [], "method", false, false, false, 31)) {
            // line 32
            yield "                                        <div class=\"ibo-panel--subtitle\" data-role=\"ibo-panel--subtitle\">";
            yield from $this->unwrap()->yieldBlock('iboPanelSubTitle', $context, $blocks);
            yield "</div>
                                    ";
        }
        // line 34
        yield "                                ";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitleBlock", [], "method", false, false, false, 29));
        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubTitleBlock", [], "method", false, false, false, 32));
        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeaderRight(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "                        <div class=\"ibo-panel--toolbar\">
                            ";
        // line 42
        yield from $this->unwrap()->yieldBlock('iboPanelToolbar', $context, $blocks);
        // line 47
        yield "                        </div>
                    ";
        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelToolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 43
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolbarBlocks", [], "method", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["oToolbarBlock"]) {
            // line 44
            yield "                                    ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oToolbarBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oToolbarBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                            ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelBodyOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 54
        yield "        <div class=\"ibo-panel--body\" data-role=\"ibo-panel--body\">
            ";
        // line 55
        yield from $this->unwrap()->yieldBlock('iboPanelBody', $context, $blocks);
        // line 60
        yield "        </div>
        ";
        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelBody(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 56
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 57
            yield "                    ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oMainBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "            ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/panel/layout.html.twig";
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
        return array (  344 => 59,  335 => 57,  330 => 56,  323 => 55,  317 => 60,  315 => 55,  312 => 54,  305 => 53,  300 => 46,  291 => 44,  286 => 43,  279 => 42,  273 => 47,  271 => 42,  268 => 41,  261 => 40,  250 => 32,  239 => 29,  234 => 34,  228 => 32,  225 => 31,  219 => 29,  216 => 28,  209 => 27,  199 => 21,  192 => 20,  187 => 37,  183 => 35,  181 => 27,  178 => 26,  175 => 25,  171 => 23,  169 => 20,  166 => 19,  163 => 18,  156 => 17,  150 => 49,  148 => 40,  144 => 38,  141 => 17,  134 => 12,  132 => 11,  129 => 10,  122 => 9,  116 => 51,  114 => 9,  111 => 8,  104 => 7,  94 => 5,  89 => 62,  86 => 53,  84 => 7,  81 => 6,  79 => 5,  59 => 4,  54 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/panel/layout.html.twig", "/var/www/html/templates/base/components/panel/layout.html.twig");
    }
}
