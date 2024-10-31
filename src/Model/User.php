<?php

namespace App\Model;

class User {
    protected string $name;
    protected string $surname;
    protected int $age;

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function __construct(string $name, string $surname, int $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
}
