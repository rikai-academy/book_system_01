<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use App\Models\Statistic;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class CartAllExport implements FromCollection,WithHeadings,WithColumnFormatting,WithStrictNullComparison
{    
    public function columnFormats(): array
    {
        return [
            'day' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    public function headings(): array
    {
        return [
            __('excel.day'),
            __('excel.done'),
            __('excel.pending'),
            __('excel.cancel')
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $statistic = new Statistic();
        $carts = $statistic->CartStatisticDay(7);
        $data = collect();
        for ($i=0; $i < $carts["labels"]->count(); $i++) { 
            $data->push([$carts["labels"][$i],
                    $carts["done"][$i]??0,
                    $carts["pending"][$i]??0,
                    $carts["cancel"][$i]??0]);
        }
        return $data;
    }
}
