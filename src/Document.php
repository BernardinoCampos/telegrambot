<?php
namespace BernardinoCampos\TelegramBot;

use function BernardinoCampos\Values\get_value;

/**
 * @see https://core.telegram.org/bots/api#document
 */
#[\AllowDynamicProperties]
class Document
{
    private $values = [];
    
    public function getFileId(): string 
    {
        return get_value($this, 'file_id');
    }
    
    public function getFileName(): ?string
    {
        return get_value($this, 'file_name');
    }

    public function getFileSize(): ?int
    {
        return get_value($this, 'file_size');
    }

    public function getMimeType(): ?string
    {
        return get_value($this, 'mime_type');
    }
}