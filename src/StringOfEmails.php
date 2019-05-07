<?php

namespace JakeRyanSmith\ValidateStringOfEmails;

use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Rule;

class StringOrEmails implements Rule
{
    /** @var string */
    public $emails;

    /** @var string */
    public $delimiter;

    /** @var array */
    public $invalidEmails = [];

    public function __construct($delimiter = ',')
    {
        $this->delimiter = $delimiter;
    }

    public function passes($attribute, $value)
    {
        $this->emails = explode($this->delimiter, str_replace(' ', '', $value));

        foreach ($this->emails as $email)
        {
            $validator = Validator::make(['email' => $email], [
                'email' => 'required|email',
            ]);

            if($validator->fails())
            {
                array_push($this->invalidEmails, $email);
            }
        }

        return count($this->invalidEmails) ? false : true;
    }

    public function message()
    {
        return 'These emails are not valid: '.implode(', ',$this->invalidEmails);
    }
}