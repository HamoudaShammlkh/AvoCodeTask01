<?php

namespace App\Exports;

use App\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TransactionsExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Transaction::all();
    }
    public function headings():array{
        return ['id','name','description','price','create_date','update_date'];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:F1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(18);
                $spreadsheet=new Spreadsheet();
                $spreadsheet->getActiveSheet()->getStyle('A1:D4')
                    ->getAlignment()->setWrapText(true);
                $spreadsheet->getDefaultStyle()->getFont()->setName('Arial');
                $spreadsheet->getDefaultStyle()->getFont()->setSize(8);
                $spreadsheet->getDefaultStyle()->getFont()->setSize(8);
                $styleArray = [
                    'borders' => [
                        'outline' => [
                            'borderStyle' => Borders::DIAGONAL_BOTH,
//                                \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => 'FFFF00FF'],
                        ],
                    ],
                ];
                $worksheet=$event->sheet;
                $spreadsheet->getStyle('B2:G8')->applyFromArray($styleArray);
            },
        ];
    }
}
