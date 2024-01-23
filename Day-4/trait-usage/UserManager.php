<?php

class UserManager {
    use LoggerTrait, DebuggerTrait;

    public function createUser($username) {
        // Some logic to create a user
        $this->log("User created: $username");
    }
}
