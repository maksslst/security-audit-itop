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

/* pages/backoffice/itopwebpage/layout.html.twig */
class __TwigTemplate_47c194b6a45d9abaf251d874cecb7632 extends Template
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

        $this->blocks = [
            'iboPageBodyHtml' => [$this, 'block_iboPageBodyHtml'],
            'iboDeferredBlocks' => [$this, 'block_iboDeferredBlocks'],
            'iboPageTemplates' => [$this, 'block_iboPageTemplates'],
            'iboCapturedOutput' => [$this, 'block_iboCapturedOutput'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "pages/backoffice/nicewebpage/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("pages/backoffice/nicewebpage/layout.html.twig", "pages/backoffice/itopwebpage/layout.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageBodyHtml(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "\t\t";
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oNavigationMenu", [], "any", false, false, false, 5), ["aPage" => ($context["aPage"] ?? null)]);
        yield "
\t\t<div id=\"ibo-page-container\" class=\"ibo-page-container\" data-role=\"ibo-page-container\">
\t\t\t<div id=\"ibo-top-container\" class=\"ibo-top-container\" data-role=\"ibo-top-container\">
\t\t\t\t";
        // line 8
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/backoffice/extension-blocks/banner.html.twig");
        yield "
\t\t\t\t";
        // line 9
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oTopBar", [], "any", false, false, false, 9), ["aPage" => ($context["aPage"] ?? null)]);
        yield "
\t\t\t</div>
\t\t\t";
        // line 11
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oPageContent", [], "any", false, false, false, 11), ["aPage" => ($context["aPage"] ?? null), "aLayouts" => ($context["aLayouts"] ?? null)]);
        yield "

\t\t\t";
        // line 14
        yield "\t\t\t<div id=\"at_the_end\">";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "sDeferredContent", [], "any", false, false, false, 14);
        yield "</div>
\t\t\t<div style=\"display:none\" title=\"ex2\" id=\"ex2\">Please wait...</div>
\t\t\t<div style=\"display:none\" title=\"dialog\" id=\"ModalDlg\"></div>
\t\t\t<div style=\"display:none\" id=\"ajax_content\"></div>
\t\t\t<div id=\"ibo-user-disconnected-dialog\" class=\"ibo-user-disconnected-dialog ibo-is-hidden\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:DisconnectedDlgMessage"), "html", null, true);
        yield "</div>
\t\t</div>
";
        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboDeferredBlocks(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 23)) {
            // line 24
            yield "\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["aDeferredBlocks"] ?? null), "oPageContent", [], "any", false, false, false, 24)) {
                // line 25
                yield "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aDeferredBlocks"] ?? null), "oPageContent", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 26
                    yield "\t\t\t\t";
                    yield $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['oBlock'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                yield "\t\t";
            }
            // line 29
            yield "\t";
        } else {
            // line 30
            yield "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aDeferredBlocks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["aBlocks"]) {
                // line 31
                yield "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["aBlocks"]);
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 32
                    yield "\t\t\t\t";
                    yield $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['oBlock'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                yield "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aBlocks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "\t";
        }
        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageTemplates(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 39
        yield "    ";
        // line 40
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aTemplates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["oTemplate"]) {
            // line 41
            yield "        ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oTemplate"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oTemplate'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboCapturedOutput(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    <div id=\"ibo-raw-output\" class=\"ibo-raw-output ibo-is-hidden\" title=\"Debug Output\">";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "sCapturedOutput", [], "any", false, false, false, 47);
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/backoffice/itopwebpage/layout.html.twig";
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
        return array (  198 => 47,  191 => 46,  185 => 43,  176 => 41,  171 => 40,  169 => 39,  162 => 38,  156 => 35,  150 => 34,  141 => 32,  136 => 31,  131 => 30,  128 => 29,  125 => 28,  116 => 26,  111 => 25,  108 => 24,  105 => 23,  98 => 22,  90 => 18,  82 => 14,  77 => 11,  72 => 9,  68 => 8,  61 => 5,  54 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/backoffice/itopwebpage/layout.html.twig", "/var/www/html/templates/pages/backoffice/itopwebpage/layout.html.twig");
    }
}
