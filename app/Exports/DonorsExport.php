<?php

namespace App\Exports;

use App\Donor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Mattwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DonorsExport implements FromQuery  , WithHeadings ,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function registerEvents(): array
    {
        $styleArray = [
            'font'=> [
                'bold' => 'true',
            ]
       ];

        return [
            AfterSheet::class => function(AfterSheet $event) use ($styleArray) {
                $event->sheet->getStyle('A1:B1')->applyFromArray($styleArray);
               
            }
        ];
    }


    public function query()
    {
        return Donor::select('id' , 'Name','Email')->where('donor' , 1);

        
    }

   

  

   

    public function headings() : array
    {
       
       
        return ['id' , 'Name','Email'];
    }
}
