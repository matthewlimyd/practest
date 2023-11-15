<?php

namespace Validator;

class PasswordInputValidator {
    # Common password from txt file
    private $commonPasswords;

    # Ingest the common password file
    public function __construct() {
        $this->commonPasswords = file('functions/common.txt', FILE_IGNORE_NEW_LINES);
    }

    # validatePassword function
    public function validatePassword($password) {
        # At least 10 characters since MFA is not implemented
        $minLength = 10;

        # Check against common password list
        if (in_array($password, $this->commonPasswords)) {
            return "Password is too common.";
        }
        # Check against password length
        elseif (strlen($password) < $minLength) {
            return "Password must be at least $minLength characters.";
        }
        return true;
    }
}