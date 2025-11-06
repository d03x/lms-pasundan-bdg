<?php

namespace App;

enum PermissionsEnum: string
{
    case UPLOAD_MATERI = "Upload Materi";
    case UPLOAD_TUGAS = "Upload Tugas";
    case BUAT_TUGAS = "Buat Tugas";

    case KELOLA_USER = 'Kelola User';
    case TAMBAH_USER = 'Tambah User';
    case HAPUS_USER = 'Tambah User';
    case LIHAT_USER = 'Lihat User';
    case EDIT_USER = 'Edit User';
    case VERIFIKASI_USER = "Verifikasi User";
}
