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

/* application/display-block/block-list/layout.html.twig */
class __TwigTemplate_8194456be9ced3ea179d93b34bd46dcd extends Template
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
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "
    ";
            // line 5
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bEmptySet", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bNotAuthorized", [], "any", false, false, false, 5))) {
                // line 6
                yield "        <div class=\"ibo-block-list--empty-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:NoObjectToDisplay"), "html", null, true);
                yield "</div>
    ";
            }
            // line 8
            yield "
    ";
            // line 10
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "bCreateNew", [], "any", false, false, false, 10)) {
                // line 11
                yield "        <div class=\"ibo-block-list--create-action\">
            <a";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sLinkTarget", [], "any", false, false, false, 12), "html", null, true);
                yield " href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sAbsoluteUrlAppRoot", [], "any", false, false, false, 12), "html", null, true);
                yield "pages/UI.php?operation=new&class=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sClass", [], "any", false, false, false, 12), "html", null, true);
                yield "&";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sParams", [], "any", false, false, false, 12), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sDefault", [], "any", false, false, false, 12), "html", null, true);
                yield "\">
                <span class=\"ibo-block-list--create-icon\">
                    <span class=\"fas fa-plus\"></span>
                </span>
                <span class=\"ibo-block-list--create-label\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:ClickToCreateNew", CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sClassLabel", [], "any", false, false, false, 16)), "html", null, true);
                yield "</span>
            </a>
        </div>
    ";
            }
            // line 20
            yield "
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 22
                yield "        ";
                yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "application/display-block/block-list/layout.html.twig";
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
        return array (  106 => 3,  101 => 24,  92 => 22,  88 => 21,  85 => 20,  78 => 16,  64 => 12,  61 => 11,  58 => 10,  55 => 8,  49 => 6,  47 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "application/display-block/block-list/layout.html.twig", "/var/www/html/templates/application/display-block/block-list/layout.html.twig");
    }
}
