<?php

namespace App\Exports;
use App\Enums\CartStatus;
use App\Models\Cart;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportMonth implements FromCollection,WithHeadings
{
    public function headings(): array
    {
        return [
            __('message.name'),
            __('message.email'),
            __('message.Name_on_Card'),
            __('message.credit_card_number'),
            __('message.total-price'),
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $orders = Cart::where('status',CartStatus::DONE)->whereYear('updated_at',date('Y'))
        ->whereMonth('updated_at',date('m'))->get();
        $i = 0;
        $data = Statistic::statisticRevenue();
        foreach($orders as $order){
            $data[$i] = array([
                $order->user()->value('name'),
                $order->user()->value('email'),
                $order->name_on_card,
                $order->credit_card_number,
                $order->total_price,
            ]);
            $i++;
        }
        $data = collect($data);
        return $data;
    }
}
