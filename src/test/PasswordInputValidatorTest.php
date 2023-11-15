<?php
require 'functions/PasswordInputValidator.php';
use Validator\PasswordInputValidator;
use PHPUnit\Framework\TestCase;

class PasswordInputValidatorTest extends TestCase
{
    private $validator;

    protected function setUp(): void
    {
        $this->validator = new PasswordInputValidator();
    }

    # Test for password length
    public function testPasswordTooShort()
    {
        $shortPassword = 'abc123';
        $this->assertEquals(
            'Password must be at least 10 characters.',
            $this->validator->validatePassword($shortPassword)
        );
    }

    # Test for common password
    public function testPasswordCommon()
    {
        $commonPassword = 'superman';
        $this->assertEquals(
            'Password is too common.',
            $this->validator->validatePassword($commonPassword)
        );
    }

    # Test for valid password
    public function testPasswordValid()
    {
        $validPassword = 'ICT3203bestmodule';
        $this->assertTrue(
            $this->validator->validatePassword($validPassword)
        );
    }
}
