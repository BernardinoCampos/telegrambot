<?php
namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;
use function BernardinoCampos\Values\set_value;

#[\AllowDynamicProperties]
class AnswerPreCheckoutQuery
{
    private $values = [];

    public function __construct(string $preCheckoutQueryId, bool $ok)
    {
        set_value($this, 'pre_checkout_query_id', $preCheckoutQueryId);
        set_value($this, 'ok', $ok);
    }

    public function getOk(): bool
    {
        return get_value($this, 'ok');
    }

    public function getErrorMessage(): ?string
    {
        return get_value($this, 'error_message');
    }

    public function setErrorMessage(?string $errorMessage): void
    {
        set_value($this, 'error_message', $errorMessage);
    }
}
