<?php

namespace App;

enum RoleEnum: string
{
    case ADMIN = 'admin';
    case SISWA = 'siswa';
    case GURU = 'guru';
    public function label(): string
    {
        return match ($this) {
            static::ADMIN => 'Admin',
            static::GURU => 'Guru',
            static::SISWA => 'Siswa',
        };
    }
}
