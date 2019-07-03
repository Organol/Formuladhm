 ambildataq1();
  function ambildataq1(){
    var segment = window.location.pathname.split('/');
    var kodeEmiten = segment.pop();  
    $.ajax({
      type:'POST',
      data:'kode='+kodeEmiten,
      url:'<?php echo base_url()."index.php/Emiten/getDataq1"?>',
      dataType:'json',
      success:function(data){
        console.log(data);
        var data_tahun = [];
        var data_profit = [];
        var data_revenue = [];
        var str = JSON.stringify(data);
        var obj = JSON.parse(str);
        $.each(obj,function(label,item){
          data_tahun.push(item.tahun);
          data_profit.push(item.profit);
          data_revenue.push(item.revenue);
        });

        var ctx_live = document.getElementById("Q1Chart");
        var config = new Chart(ctx_live,{
          type: 'line',
          data: {
            labels: data_tahun,
            datasets: [{
              label: 'Profit',
              fill: false,
              backgroundColor: window.chartColors.red,
              borderColor: window.chartColors.red,
              data:data_revenue,
            },{
              label: 'Revenue',
              fill: false,
              backgroundColor: window.chartColors.blue,
              borderColor: window.chartColors.blue,
              data:data_profit,
            }]
          },
          options: {
            responsive: true,
            title: {
              display: true,
              text: 'Data Profit dan Revenue Q1'
            },
          }
        });
      }
    });  
  };