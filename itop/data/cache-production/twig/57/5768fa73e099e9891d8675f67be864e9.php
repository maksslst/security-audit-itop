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

/* templates/application/welcome-popup/layout.ready.js.twig */
class __TwigTemplate_8571f65fee7596ef994bdbcb8bcd6c0a extends Template
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
        yield "const oWelcomePopupDialogElem = \$('#ibo-welcome-popup--dialog');

// Dialog is hidden by default to avoid a flash of unstyled content
oWelcomePopupDialogElem.removeClass('ibo-is-hidden');

// Prepare dialog
oWelcomePopupDialogElem.dialog({
\tmodal: true,
\twidth: \$(window).innerWidth() * 0.7,
    maxHeight: \$(window).innerHeight() * 0.8,
\tautoOpen: true,
\ttitle: oWelcomePopupDialogElem.attr('data-title'),
    open: function () {
        // Focus on acknowledge button
        const oAckButton = oWelcomePopupDialogElem.closest('[role=\"dialog\"]').find('.ui-dialog-buttonset .ibo-is-primary:first');
        oAckButton.trigger('focus');

        // Count stack items and change button label to close if there is only one
        // Note: \"<=\" so it works when stack isn't displayed as well as when it contains only one item
        if (oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"]').length <= 1) {
            oAckButton.text(";
        // line 21
        yield json_encode($this->env->getFilter('dict_s')->getCallable()("UI:WelcomePopup:Button:AcknowledgeAndClose"));
        yield ");
        }
    },
\tclose: function() {
        oWelcomePopupDialogElem.remove();
    },
    buttons: [
        {
            text: ";
        // line 29
        yield json_encode($this->env->getFilter('dict_s')->getCallable()("UI:WelcomePopup:Button:RemindLater"));
        yield ",
            class: 'ibo-is-alternative',
            click: function() {
                oWelcomePopupDialogElem.dialog( \"close\" );
            }
        },
        {
            text: ";
        // line 36
        yield json_encode($this->env->getFilter('dict_s')->getCallable()("UI:WelcomePopup:Button:AcknowledgeAndNext"));
        yield ",
            class: 'ibo-is-regular ibo-is-primary',
            click: function() {
                oWelcomePopupDialogElem.trigger('acknowledge_message.itop.welcome_popup');
            }
        }
    ]
 });

// Bind events
oWelcomePopupDialogElem
        // - On stack item click, display active message
        .on('click', '[data-role=\"ibo-welcome-popup--stack-item\"]', function () {
            const sUUID = \$(this).attr('data-uuid');
            const sUUIDEscapedForSelector = sUUID.replace(/\\\\/g, '\\\\\\\\');

            // Display active stack item
            oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"]').removeClass('ibo-is-active');
            oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"][data-uuid=\"' + sUUIDEscapedForSelector + '\"]').addClass('ibo-is-active');

            // Display active content
            oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--message-content\"]').removeClass('ibo-is-active');
            oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--message-content\"][data-uuid=\"' + sUUIDEscapedForSelector + '\"]').addClass('ibo-is-active');
        })
        .on('acknowledge_message.itop.welcome_popup', function (oEvent, oData) {
            const sUUID = oData?.uuid ?? oWelcomePopupDialogElem.find('.ibo-is-active[data-role=\"ibo-welcome-popup--message-content\"]').attr('data-uuid');
            const sUUIDEscapedForSelector = sUUID.replace(/\\\\/g, '\\\\\\\\');

            // Acknowledge message on server
            \$.post(
                '";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sEndpointAbsURIForAcknowledgeMessage"] ?? null), "html", null, true);
        yield "',
                {
                    message_uuid: sUUID
                },
                'json'
            )
            .done(function(oResponse) {
                if (oResponse.success) {
                    // Mark message as acknowledged
                    oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"][data-uuid=\"' + sUUIDEscapedForSelector + '\"]').addClass('ibo-is-acknowledged');

                    // Display next message if any
                    const oNextStackItemElem = oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"]:not(.ibo-is-acknowledged):first');
                    if (oNextStackItemElem.length > 0) {
                        oNextStackItemElem.trigger('click');

                        // Count non acknowledged stack items and change button label to close if there is only one
                        if (oWelcomePopupDialogElem.find('[data-role=\"ibo-welcome-popup--stack-item\"]:not(.ibo-is-acknowledged)').length === 1) {
                            const oAckButton = oWelcomePopupDialogElem.closest('[role=\"dialog\"]').find('.ui-dialog-buttonset .ibo-is-primary:first');
                            oAckButton.text(";
        // line 85
        yield json_encode($this->env->getFilter('dict_s')->getCallable()("UI:WelcomePopup:Button:AcknowledgeAndClose"));
        yield ");
                        }
                    } else {
                        // Close dialog
                        oWelcomePopupDialogElem.dialog('close');
                    }
                } else {
                    // Display error message
                    CombodoModal.OpenErrorModal(oResponse.error_message);
                }
            })
            .fail(function(oXHR, sTextStatus, sErrorThrown) {
                // Display error message
                CombodoModal.OpenErrorModal(sErrorThrown);
            });
        });

// - Close the dialog when clicking outside of it
\$('.ui-widget-overlay').on('click', function() { oWelcomePopupDialogElem.dialog('close'); } );



";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/application/welcome-popup/layout.ready.js.twig";
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
        return array (  140 => 85,  118 => 66,  85 => 36,  75 => 29,  64 => 21,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/application/welcome-popup/layout.ready.js.twig", "/var/www/html/templates/application/welcome-popup/layout.ready.js.twig");
    }
}
