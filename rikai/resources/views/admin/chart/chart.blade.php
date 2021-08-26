<script type="text/javascript">
    <?php
        $dates=[];
        $data=[];
        $lastday=cal_days_in_month(CAL_GREGORIAN,date('m'),date('Y'));
        date_default_timezone_set('UTC');
        // Start date
        $date = date('Y').'-'.date('m').'-01';
        // End date
        $end_date = date('Y').'-'.date('m').'-'.$lastday;
        while (strtotime($date) <= strtotime($end_date)) {
            $dates[]=$date;
            if(isset($ordersdone[$date])){
                $data[]=$ordersdone[$date];
            }
            else $data[]=0;
            if(isset($orders[$date])){
                $datas[]=$orders[$date];
            }
            else $datas[]=0;
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
        }
    ?>
    $(document).ready(function(){
        var orders = <?php echo json_encode($data)?>;
        var ordertotal = <?php echo json_encode($datas)?>;
        var count =<?php echo $lastday?>;
        var dates = <?php echo json_encode($dates)?>;
    Highcharts.chart('chart-container', {
        chart: {
            type: 'line'
        },
        title: {
            text: '{{__("message.chart-orders")}} , {{date("m/Y")}}' 
        },
        xAxis: {
           categories: dates
        },
        yAxis: {
            title: {
                text: '{{__("message.number-of-orders")}}'
            },
            tickInterval: 1
        },
        series: [{
            name: '{{__("message.order-done")}}',
            data: orders,
            color: '#FF0000' 
        },
        {
            name: '{{__("message.order")}}',
            data: ordertotal,
            color: 'yellow' 
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 800
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
    });
</script>