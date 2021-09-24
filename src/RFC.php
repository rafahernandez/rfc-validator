<?php

namespace RafaHernandez\RfcValidator;

use Illuminate\Contracts\Validation\Rule;

class RFC implements Rule
{
    public const PERSONA_FISICA = 'física';
    public const PERSONA_MORAL = 'moral';
    private ?string $type;

    public function __construct(string $type = null)
    {
        $this->type = $type;
    }

    public function passes($attribute, $value): bool
    {
        switch ($this->type) {
            case self::PERSONA_FISICA:
                $limit = '4';

                break;
            case self::PERSONA_MORAL:
                $limit = '3';

                break;
            default:
                $limit = '3,4';

                break;
        }

        $pattern = "/^([A-ZÑ&]{" . $limit . "})(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01]))([A-Z\d]{2})([A\d])$/";

        return preg_match(
            $pattern,
            $value
        );
    }

    public function message(): string
    {
        if (is_null($this->type)) {
            return 'El RFC no tiene un formato válido.';
        }

        return "El RFC no es un formato válido para persona {$this->type}.";
    }
}
