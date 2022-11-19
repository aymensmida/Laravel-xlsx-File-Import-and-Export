<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
class UsersExport implements FromView,WithStyles,WithColumnWidths
{

/*     public function collection()
    {
        return User::all();
    } */
    public function view(): View
    {
        return view('exports.users', [
            'users' => User::all()
        ]);
    }
    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
         

        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 55,
        ];
    }
}
