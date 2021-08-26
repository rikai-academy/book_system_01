<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportMonth;
use App\Exports\StatisticExport;

class ReportMonthMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('view.name');
        $date = date('m-Y');
        Excel::store(new ReportMonth,'public/report-month-'.$date.'.xlsx');
        $path = storage_path('app\public\report-month-'.$date.'.xlsx');
        return $this->view('admin.email.report',['date'=> $date])
        ->subject(__('message.report-month, :date', ['date' => $date]))
        ->attach($path);
    }
}
