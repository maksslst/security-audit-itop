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

/* base/components/field/layout.html.twig */
class __TwigTemplate_7f3fb22bcc8c8cd14a195e0a3d5fbb2b extends Template
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
        $context["aParams"] = CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetParams", [], "method", false, false, false, 1);
        // line 2
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        yield "\"
     class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ibo-field-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 3), "html", null, true);
        yield "
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            yield " ibo-is-hidden";
        }
        yield "\"
     data-role=\"ibo-field\"
     data-attribute-code=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttCode", [], "method", false, false, false, 6), "html", null, true);
        yield "\"
     data-attribute-type=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttType", [], "method", false, false, false, 7), "html", null, true);
        yield "\"
     data-attribute-label=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttLabel", [], "method", false, false, false, 8), "html", null, true);
        yield "\"
        ";
        // line 10
        yield "        ";
        // line 11
        yield "        ";
        // line 12
        yield "     data-attribute-flag-hidden=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 12)), "html", null, true);
        yield "\"
     data-attribute-flag-read-only=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsReadOnly", [], "method", false, false, false, 13)), "html", null, true);
        yield "\"
     data-attribute-flag-mandatory=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMandatory", [], "method", false, false, false, 14)), "html", null, true);
        yield "\"
     data-attribute-flag-must-change=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMustChange", [], "method", false, false, false, 15)), "html", null, true);
        yield "\"
     data-attribute-flag-must-prompt=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMustPrompt", [], "method", false, false, false, 16)), "html", null, true);
        yield "\"
     data-attribute-flag-slave=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSlave", [], "method", false, false, false, 17)), "html", null, true);
        yield "\"
     data-value-raw=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueRaw", [], "method", false, false, false, 18), "html", null, true);
        yield "\"
        ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 19)) {
            // line 20
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 20));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 21
                yield "                data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sName"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sValue"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sName'], $context['sValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "        ";
        }
        // line 24
        yield ">
    <div class=\"ibo-field--label\">";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 25);
        yield "
        ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 26)) {
            // line 27
            yield "            <span class=\"ibo-has-description\" data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 27), "html", null, true);
            yield "\" data-tooltip-max-width=\"600px\" ></span>
        ";
        }
        // line 29
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 29) == Twig\Extension\CoreExtension::constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 30
            yield "            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 30)) {
                // line 31
                yield "                <div class=\"ibo-field--comments\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 31);
                yield "</div>
            ";
            }
            // line 33
            yield "        ";
        }
        // line 34
        yield "    </div>
    <div class=\"ibo-field--value\" ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueId", [], "method", false, false, false, 35)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueId", [], "method", false, false, false, 35), "html", null, true);
            yield "\"";
        }
        yield ">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 37
            yield "            ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </div>
    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 40) != Twig\Extension\CoreExtension::constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 41
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 41)) {
                // line 42
                yield "            <div class=\"ibo-field--comments\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 42);
                yield "</div>
        ";
            }
            // line 44
            yield "    ";
        }
        // line 45
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/field/layout.html.twig";
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
        return array (  201 => 45,  198 => 44,  192 => 42,  189 => 41,  187 => 40,  184 => 39,  175 => 37,  171 => 36,  163 => 35,  160 => 34,  157 => 33,  151 => 31,  148 => 30,  145 => 29,  139 => 27,  137 => 26,  133 => 25,  130 => 24,  127 => 23,  116 => 21,  111 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  80 => 12,  78 => 11,  76 => 10,  72 => 8,  68 => 7,  64 => 6,  57 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/field/layout.html.twig", "/var/www/html/templates/base/components/field/layout.html.twig");
    }
}
