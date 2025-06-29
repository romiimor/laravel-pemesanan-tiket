<?php

namespace App\Eksports\UserEksport;



use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::where('role', 'user')->get();
    }
}
