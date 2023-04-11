<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class NonAkademikExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('admin.pages.daftar-calon-siswa.akademik.export', [
            'student' => Student::where('prestasi', 'Non Akademik')
        ]);
    }
}
