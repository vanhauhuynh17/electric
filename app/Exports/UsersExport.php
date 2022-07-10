<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements  FromQuery
{
    // public function collection()
    // {
    //     return User::all();
    // }
    public function __construct(string $user = 'admin')
    {
        $this->user= $user;
    }
    public function query()
    {
        return User::query()->where('Username', $this->user)->orderBy("UserName");
    }
}