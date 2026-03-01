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

/* base/layouts/object/object-details/layout.js.twig */
class __TwigTemplate_a78597ce55db5bfb1de4d826e73de638 extends Template
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
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
            'iboKeyboardShortcutsHandlers' => [$this, 'block_iboKeyboardShortcutsHandlers'],
            'iboPanelHeaderRightActionsHandlers' => [$this, 'block_iboPanelHeaderRightActionsHandlers'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base/components/panel/layout.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/components/panel/layout.js.twig", "base/layouts/object/object-details/layout.js.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboWidgetInstantiation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 6), "html", null, true);
        yield "').object_details({
        is_header_visible_on_scroll: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(var_export(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [], "any", false, false, false, 7)), "html", null, true);
        yield "
    });
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboMiscHandlers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("iboMiscHandlers", $context, $blocks);
        yield "

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('iboKeyboardShortcutsHandlers', $context, $blocks);
        // line 63
        yield "
    ";
        // line 64
        yield from $this->unwrap()->yieldBlock('iboPanelHeaderRightActionsHandlers', $context, $blocks);
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboKeyboardShortcutsHandlers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "        \$('#";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 15), "html", null, true);
        yield "').on('edit_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuModify');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Modify\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 28), "html", null, true);
        yield "').on('delete_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuDelete');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Delete\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 41), "html", null, true);
        yield "').on('new_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuNew');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:New\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });
        ";
        // line 53
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 53) == Twig\Extension\CoreExtension::constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_EDIT")) || (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 53) == Twig\Extension\CoreExtension::constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_CREATE")))) {
            // line 54
            yield "            \$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 54), "html", null, true);
            yield "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"\"][value=\"\"]').click();
            });
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 57) == Twig\Extension\CoreExtension::constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_STIMULUS"))) {
            // line 58
            yield "            \$('#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
            yield "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"submit\"][value=\"submit\"]').click();
            });
        ";
        }
        // line 62
        yield "    ";
        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelHeaderRightActionsHandlers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 65
        yield "        // Keep URL's hash parameters when clicking on a link of the header
        \$('#";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 66), "html", null, true);
        yield "').on('click', '[data-role=\"ibo-panel--header-right\"] a', function() {
            const aMatches = /#(.*)\$/.exec(window.location.href);
            if (aMatches != null) {
                currentHash = aMatches[1];
                if (/#(.*)\$/.test(this.href)) {
                    this.href = this.href.replace(/#(.*)\$/, '#'+currentHash);
                }
            }
        });
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/object/object-details/layout.js.twig";
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
        return array (  186 => 66,  183 => 65,  176 => 64,  171 => 62,  163 => 58,  161 => 57,  154 => 54,  152 => 53,  137 => 41,  121 => 28,  104 => 15,  97 => 14,  92 => 64,  89 => 63,  87 => 14,  81 => 12,  74 => 11,  66 => 7,  61 => 6,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/object/object-details/layout.js.twig", "/var/www/html/templates/base/layouts/object/object-details/layout.js.twig");
    }
}
