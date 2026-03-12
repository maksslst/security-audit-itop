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

/* base/layouts/activity-panel/activity-entry/layout.html.twig */
class __TwigTemplate_5c159d791c06ab2813c08328fed3558c extends Template
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
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryType' => [$this, 'block_iboActivityEntryType'],
            'iboActivityEntryExtraDataAttributes' => [$this, 'block_iboActivityEntryExtraDataAttributes'],
            'iboActivityEntryMedallion' => [$this, 'block_iboActivityEntryMedallion'],
            'iboActivityEntryInformation' => [$this, 'block_iboActivityEntryInformation'],
            'iboActivityEntryMainInformationIcon' => [$this, 'block_iboActivityEntryMainInformationIcon'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
            'iboActivityEntrySubInformation' => [$this, 'block_iboActivityEntrySubInformation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsFromCurrentUser", [], "method", false, false, false, 1)) {
            yield "ibo-is-current-user";
        }
        yield " ";
        yield from $this->unwrap()->yieldBlock('iboActivityEntryExtraClasses', $context, $blocks);
        yield "\"
     data-role=\"ibo-activity-entry\"
     data-entry-type=\"";
        // line 3
        yield from $this->unwrap()->yieldBlock('iboActivityEntryType', $context, $blocks);
        yield "\"
     data-entry-datetime-raw=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method", false, false, false, 4), "html", null, true);
        yield "\"
\t data-entry-author-login=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorLogin", [], "method", false, false, false, 5), "html", null, true);
        yield "\"
     data-entry-origin=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 6), "html", null, true);
        yield "\"
\t ";
        // line 7
        yield from $this->unwrap()->yieldBlock('iboActivityEntryExtraDataAttributes', $context, $blocks);
        yield ">
\t<div class=\"ibo-activity-entry--medallion ";
        // line 8
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 8))) {
            yield "ibo-has-image";
        }
        yield "\" data-role=\"ibo-activity-entry--medallion\" data-tooltip-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method", false, false, false, 8), "html", null, true);
        yield "\">
\t\t";
        // line 9
        yield from $this->unwrap()->yieldBlock('iboActivityEntryMedallion', $context, $blocks);
        // line 16
        yield "\t</div>
\t<div class=\"ibo-activity-entry--information\" data-role=\"ibo-activity-entry--information\">
\t\t";
        // line 18
        yield from $this->unwrap()->yieldBlock('iboActivityEntryInformation', $context, $blocks);
        // line 54
        yield "\t</div>
</div>";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryExtraClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryType(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetType", [], "method", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryExtraDataAttributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryMedallion(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "\t\t\t";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 10))) {
            // line 11
            yield "\t\t\t\t<img class=\"ibo-activity-entry--author-picture\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 11), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method", false, false, false, 11), "html", null, true);
            yield "\">
\t\t\t";
        } else {
            // line 13
            yield "\t\t\t\t<div class=\"ibo-activity-entry--author-initials\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method", false, false, false, 13), 0, 3), "html", null, true);
            yield "</div>
\t\t\t";
        }
        // line 15
        yield "\t\t";
        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryInformation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 19
        yield "\t\t\t<div class=\"ibo-activity-entry--main-information\" data-role=\"ibo-activity-entry--main-information\">
\t\t\t\t<div class=\"ibo-activity-entry--main-information-icon\" data-role=\"ibo-activity-entry--main-information-icon\">
\t\t\t\t\t";
        // line 21
        yield from $this->unwrap()->yieldBlock('iboActivityEntryMainInformationIcon', $context, $blocks);
        // line 26
        yield "\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-activity-entry--main-information-content\" data-role=\"ibo-activity-entry--main-information-content\">
\t\t\t\t\t";
        // line 28
        yield from $this->unwrap()->yieldBlock('iboActivityEntryMainInformationContent', $context, $blocks);
        // line 32
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ibo-activity-entry--sub-information\" data-role=\"ibo-activity-entry--sub-information\">
                ";
        // line 35
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 36
            yield "                    ";
            yield from $this->unwrap()->yieldBlock('iboActivityEntrySubInformation', $context, $blocks);
            // line 51
            yield "                ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        // line 52
        yield "\t\t\t</div>
\t\t";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryMainInformationIcon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "\t\t\t\t\t\t";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method", false, false, false, 22))) {
            // line 23
            yield "\t\t\t\t\t\t\t<span class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method", false, false, false, 23), "html", null, true);
            yield "\"></span>
\t\t\t\t\t\t";
        }
        // line 25
        yield "\t\t\t\t\t";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntryMainInformationContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "\t\t\t\t\t\t";
        // line 30
        yield "\t\t\t\t\t\t";
        yield $this->env->getFilter('render_wiki_to_html')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetContent", [], "method", false, false, false, 30));
        yield "
\t\t\t\t\t";
        yield from [];
    }

    // line 36
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboActivityEntrySubInformation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 37
        yield "                        ";
        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 37)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "any", false, false, false, 37) != Twig\Extension\CoreExtension::constant("Combodo\\iTop\\Core\\CMDBChange\\CMDBChangeOrigin::INTERACTIVE")))) {
            // line 38
            yield "                            <span class=\"ibo-activity-entry--origin\" data-role=\"ibo-activity-entry--origin\" data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()(("Class:CMDBChange/Attribute:origin/Value:" . CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 38))), "html", null, true);
            yield "\" data-tooltip-placement=\"bottom\">
                                <span class=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOriginDecorationClasses", [], "method", false, false, false, 39), "html", null, true);
            yield "\"></span>
                            </span>
                        ";
        }
        // line 42
        yield "                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "ShowAuthorNameBelowEntries", [], "method", false, false, false, 42)) {
            // line 43
            yield "                            <span class=\"ibo-activity-entry--author-name ibo-is-hidden\" data-role=\"ibo-activity-entry--author-name\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method", false, false, false, 43), "html", null, true);
            yield "</span>
                        ";
        }
        // line 45
        yield "                        <span class=\"ibo-activity-entry--datetime\" data-role=\"ibo-activity-entry--datetime\"
                              data-tooltip-content=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 46), "html", null, true);
        yield "\"
                              data-tooltip-placement=\"bottom\"
                              data-raw-datetime=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method", false, false, false, 48), "html", null, true);
        yield "\"
                              data-formatted-datetime=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 49), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 49), "html", null, true);
        yield "</span>
                    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
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
        return array (  287 => 49,  283 => 48,  278 => 46,  275 => 45,  269 => 43,  266 => 42,  260 => 39,  255 => 38,  252 => 37,  245 => 36,  237 => 30,  235 => 29,  228 => 28,  223 => 25,  217 => 23,  214 => 22,  207 => 21,  201 => 52,  199 => 35,  195 => 51,  192 => 36,  190 => 35,  185 => 32,  183 => 28,  179 => 26,  177 => 21,  173 => 19,  166 => 18,  161 => 15,  155 => 13,  147 => 11,  144 => 10,  137 => 9,  127 => 7,  116 => 3,  106 => 1,  100 => 54,  98 => 18,  94 => 16,  92 => 9,  84 => 8,  80 => 7,  76 => 6,  72 => 5,  68 => 4,  64 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/layout.html.twig", "/var/www/html/templates/base/layouts/activity-panel/activity-entry/layout.html.twig");
    }
}
