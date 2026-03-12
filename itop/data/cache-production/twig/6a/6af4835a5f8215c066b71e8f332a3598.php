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

/* templates/application/welcome-popup/templates/layout.html.twig */
class __TwigTemplate_9c37b6500cf75eaae119374fdb6d4bc0 extends Template
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
            'wpMessageContentExtraCssClasses' => [$this, 'block_wpMessageContentExtraCssClasses'],
            'wpMessageContentInner' => [$this, 'block_wpMessageContentInner'],
            'wpMessageTextsOuter' => [$this, 'block_wpMessageTextsOuter'],
            'wpMessageTextsInner' => [$this, 'block_wpMessageTextsInner'],
            'wpMessageTitleOuter' => [$this, 'block_wpMessageTitleOuter'],
            'wpMessageTitleInner' => [$this, 'block_wpMessageTitleInner'],
            'wpMessageDescriptionOuter' => [$this, 'block_wpMessageDescriptionOuter'],
            'wpMessageDescriptionInner' => [$this, 'block_wpMessageDescriptionInner'],
            'wpMessageIllustrationOuter' => [$this, 'block_wpMessageIllustrationOuter'],
            'wpMessagIllustrationInner' => [$this, 'block_wpMessagIllustrationInner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"ibo-welcome-popup--message-content
    ";
        // line 2
        if ((($context["bIsActive"] ?? null) == true)) {
            yield "ibo-is-active";
        }
        // line 3
        yield "    ";
        yield from $this->unwrap()->yieldBlock('wpMessageContentExtraCssClasses', $context, $blocks);
        yield "\"
    data-role=\"ibo-welcome-popup--message-content\"
    data-uuid=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sUUID"] ?? null), "html", null, true);
        yield "\"
>
    ";
        // line 7
        yield from $this->unwrap()->yieldBlock('wpMessageContentInner', $context, $blocks);
        // line 37
        yield "</div>";
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageContentExtraCssClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageContentInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "        ";
        yield from $this->unwrap()->yieldBlock('wpMessageTextsOuter', $context, $blocks);
        // line 29
        yield "        ";
        yield from $this->unwrap()->yieldBlock('wpMessageIllustrationOuter', $context, $blocks);
        // line 36
        yield "    ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageTextsOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "            <div class=\"ibo-welcome-popup--message-texts\">
                ";
        // line 10
        yield from $this->unwrap()->yieldBlock('wpMessageTextsInner', $context, $blocks);
        // line 27
        yield "            </div>
        ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageTextsInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('wpMessageTitleOuter', $context, $blocks);
        // line 18
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('wpMessageDescriptionOuter', $context, $blocks);
        // line 26
        yield "                ";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageTitleOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "                        <h2 class=\"ibo-welcome-popup--message-title\">
                            ";
        // line 13
        yield from $this->unwrap()->yieldBlock('wpMessageTitleInner', $context, $blocks);
        // line 16
        yield "                        </h2>
                    ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageTitleInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "                                ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oMessage"] ?? null), "GetTitle", [], "method", false, false, false, 14), "html", null, true);
        yield "
                            ";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageDescriptionOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "                        <div class=\"ibo-welcome-popup--message-description ibo-is-html-content\">
                            ";
        // line 20
        yield from $this->unwrap()->yieldBlock('wpMessageDescriptionInner', $context, $blocks);
        // line 24
        yield "                        </div>
                    ";
        yield from [];
    }

    // line 20
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageDescriptionInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 21
        yield "                                ";
        // line 22
        yield "                                ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oMessage"] ?? null), "GetDescription", [], "method", false, false, false, 22);
        yield "
                            ";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessageIllustrationOuter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oMessage"] ?? null), "HasIllustration", [], "method", false, false, false, 30)) {
            // line 31
            yield "                ";
            yield from $this->unwrap()->yieldBlock('wpMessagIllustrationInner', $context, $blocks);
            // line 34
            yield "            ";
        }
        // line 35
        yield "        ";
        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wpMessagIllustrationInner(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 32
        yield "                    <div class=\"ibo-welcome-popup--message-illustration\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oMessage"] ?? null), "GetIllustrationAbsURI", [], "method", false, false, false, 32), "html", null, true);
        yield "')\"></div>
                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/application/welcome-popup/templates/layout.html.twig";
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
        return array (  237 => 32,  230 => 31,  225 => 35,  222 => 34,  219 => 31,  216 => 30,  209 => 29,  201 => 22,  199 => 21,  192 => 20,  186 => 24,  184 => 20,  181 => 19,  174 => 18,  166 => 14,  159 => 13,  153 => 16,  151 => 13,  148 => 12,  141 => 11,  136 => 26,  133 => 18,  130 => 11,  123 => 10,  117 => 27,  115 => 10,  112 => 9,  105 => 8,  100 => 36,  97 => 29,  94 => 8,  87 => 7,  77 => 3,  72 => 37,  70 => 7,  65 => 5,  59 => 3,  55 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/application/welcome-popup/templates/layout.html.twig", "/var/www/html/templates/application/welcome-popup/templates/layout.html.twig");
    }
}
