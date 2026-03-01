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

/* base/layouts/dashboard/layout.html.twig */
class __TwigTemplate_56b117a14b151df42f382ba373270657 extends Template
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
        // line 4
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTitle", [], "method", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasToolbar", [], "method", false, false, false, 5))) {
                // line 6
                yield "        <div class=\"ibo-dashboard--top-bar\" data-role=\"ibo-dashboard--top-bar\">
            <div class=\"ibo-dashboard--top-bar-title\" data-role=\"ibo-dashboard--top-bar-title\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 7), "html", null, true);
                yield "</div>
            ";
                // line 8
                yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolbar", [], "method", false, false, false, 8), ["aPage" => ($context["aPage"] ?? null)]);
                yield "
        </div>
    ";
            }
            // line 11
            yield "    <div class=\"ibo-dashboard--grid\" data-role=\"ibo-dashboard--grid\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDashboardRows", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 13
                yield "            ";
                yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/dashboard/layout.html.twig";
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
        return array (  81 => 4,  76 => 15,  67 => 13,  63 => 12,  60 => 11,  54 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/dashboard/layout.html.twig", "/var/www/html/templates/base/layouts/dashboard/layout.html.twig");
    }
}
