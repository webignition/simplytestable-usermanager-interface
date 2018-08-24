<?php

namespace webignition\SimplyTestableUserManagerInterface;

use webignition\SimplyTestableUserInterface\UserInterface;

interface UserManagerInterface
{
    public function getUser(): UserInterface;
    public function isLoggedIn(): bool;
}
