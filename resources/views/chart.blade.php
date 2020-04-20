@extends('layouts.app')

@section('content')
<div class="container">     
  <div class="row justify-content-center"> 
<div class="col-md-12" > <div class="card" > 
  <div class="card-header">
    <div class="row"> 
      <div class="col-md-10" align="center">
        <div class="row"><br/>
          <div class="col-md-11" align="right" style="margin-right: "><h5 align="left">ANALISA PENYELENGGARAAN BAIK PULIH PERKAKASAN KOMPUTER BAGI BULAN DIS</h5></div>
          <div class="col-md-1" align="left"><h5 align="left" id="title_year">20</h5></div>
        </div>
</div>
<div class="col-md-2"> 
  <select id="cmbCondition">
   <option value="0">YEAR</option>   
   <option value="1">HALF YEAR</option>   
   <option value="2">MONTH</option>                                                  
</select> 
</div> 
</div> 
</div> 
<div class="card-body" > 
  <div class="" id="month_result" style="display: none;"> 
    <div class="row"> <div class="col-md-2" align="left"> 
      <select id="cmbMonth"> 
        <option value="0">January</option>   
        <option value="1">February</option>   
        <option value="2">March</option>                                                  
        <option value="3">April</option>                                              
        <option value="4">May</option>                                            
        <option value="5">June</option>                                         
        <option value="6">July</option>                                      
        <option value="7">August</option>                                 
        <option value="8">September</option>                         
        <option value="9">October</option>                   
        <option value="10">November</option>           
        <option value="11">December</option>   
        </select> </div>               
        <div class="col-md-8" align="left">
        <div class="row"><br/>
          <div class="col-md-9" align="right"><h6 style="font-size: 18px;" align="left">SENARAI BILANGAN PENYELENGARAAN</h6></div>
         <!--  <div class="col-md-3" align="left"><h6 style="font-size: 18px;" align="left" class="title_pc_id">PK-JPSM-02-R1</h6></div> -->
        </div>         <br />             
        <div class="row">
        <div class="col-md-8" style=""> 
          <h6 style="font-size: 17px;margin-left: 5%;">I. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Masalah Perkakasan</h6> <h6
        style="font-size: 17px;margin-left: 5%;">II .&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Masalah Perisian</h6> <h6
        style="font-size: 17px;margin-left: 5%;">III . &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Internet</h6> 
        <h6 style="font-size: 17px;margin-left: 5%;">IV . &nbsp&nbsp&nbsp&nbsp&nbsp Networking (Rangkaian)</h6> 
        <h6 style="font-size: 17px;margin-left: 5%;">V . &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Virus</h6> 
        <h6 style="font-size: 17px;margin-left: 5%;">VI . &nbsp&nbsp&nbsp&nbsp&nbsp Pemasangan Perisian/Aplikasi</h6> 
        <h6 style="font-size: 17px;margin-left: 5%;">VII . &nbsp&nbsp&nbsp&nbsp Pemasanan Perkakasan</h6> 
        <h6 style="font-size: 17px;margin-left: 5%;">VIII . &nbsp&nbsp&nbsp Lain-lain</h6>
        <h6 style="font-size: 18px;">Jumlah Keseluruhan : </h6> 
        </div> <div class="col-md-2" align="right"> 
          <h6 id="problem_1" style="font-size: 17px;">_</h6> 
          <h6 id="problem_2" style="font-size: 17px;">_</h6> 
          <h6 id="problem_3" style="font-size: 17px;">_</h6> 
          <h6 id="problem_4" style="font-size: 17px;">_</h6> 
          <h6 id="problem_5" style="font-size: 17px;">_</h6> 
          <h6 id="problem_6" style="font-size: 17px;">_</h6> 
          <h6 id="problem_7" style="font-size: 17px;">_</h6> 
          <h6 id="problem_8" style="font-size: 17px;">_</h6> 
          <h6 id="problem_total" style="font-size: 17px;">_</h6> 
        </div> 
        </div> 
        </div> 
        <div class="col-md-2"></div> 
        </div> <br /> <h6 style="font-size: 18px;" align="center">Bilangan Penyelenggaraan Baik Pulih</h6> 
        <div class="row" style="">  <div class="col-md-9">                 
                   <canvas id="barChart_month"></canvas> </div> <div class="col-md-3">
        <div class="row" style="margin-top: 50px;">                                   
         <div class="col-md-12"> <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(45, 135, 210, 0.5);"></canvas>&nbsp Masalah Perkakasan<br> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(48, 218, 120, 0.5);"></canvas>
          &nbsp Masalah Perisian<br> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(37, 51, 66, 0.5);"></canvas>&nbsp Internet<br> <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(12, 84, 42, 0.5);"></canvas>&nbsp Networking<br> <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(255,237,74, 0.5);"></canvas>&nbsp Virus<br> <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(227,52,47, 0.5);"></canvas>&nbsp Pemasangan Perisian/Aplikasi<br> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(60, 52, 220, 0.5);"></canvas>&nbsp Pemasanan Perkakasan<br> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(197, 103, 9, 0.5);"></canvas>&nbsp Lain-lain<br> 
        </div> 
        </div> 
        </div> 
        </div> 
        </div>  
        <!--  month result end  -->     
        <div class="" id="year_result" style="display: block;"> 
          <div class="row"> 
            <div class="col-md-12" align="left">
              <table id="tbl_year_result" class="table table-striped" border='10' style="border: 1px solid grey;" width="100%"> 
            <thead id="thead_year">      
            </thead>       
            <tbody id="tbody_year">       
            </tbody>                                       
            </table>
            </div> 
        </div> <br /> <h6 style="font-size: 18px;" align="center">Bilangan Penyelenggaraan Baik Pulih</h6> 
        <div class="row" style="">  
          <div class="col-md-9">                 
                   <canvas id="barChart_year"></canvas> </div> 
                   <div class="col-md-3">
        <div class="row" style="margin-top: 50px;">                                   
         <div class="col-md-12"> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(45, 135, 210, 0.5);"></canvas>&nbsp
        Masalah Perkakasan<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(48, 218, 120, 0.5);"></canvas>&nbsp Masalah
        Perisian<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(37, 51, 66, 0.5);"></canvas>&nbsp Internet<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(12, 84, 42, 0.5);"></canvas>&nbsp Networking<br> <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color:
        rgba(255,237,74, 0.5);"></canvas>&nbsp Virus<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(227,52,47, 0.5);"></canvas>&nbsp Pemasangan Perisian/Aplikasi<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(60, 52, 220, 0.5);"></canvas>&nbsp Pemasanan Perkakasan<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(197, 103, 9, 0.5);"></canvas>&nbsp Lain-lain<br> </div> 
        </div> 
        </div> 
        </div> 
        </div>  
        <!--  year result end  -->  
        <div class="" id="yearhalf_result" style="display: none;"> 
          <div class="row"> 
            <div class="col-md-2" align="left"> 
            <select id="cmbHalf"> 
              <option value="0">First half</option>   
              <option value="6">Second half</option>                                                    
            </select>
        </div>                             
        <div class="col-md-8" align="left"> <br />
          <div class="row"><br/>
          <div class="col-md-9" align="right"><h6 style="font-size: 18px;" align="left">SENARAI BILANGAN PENYELENGARAAN</h6></div>
         <!--  <div class="col-md-3" align="left"><h6 style="font-size: 18px;" align="left" class="title_pc_id">PK-JPSM-02-R1</h6></div> -->
        </div>         <br /> 
        <div class="row"> 
          <div class="col-md-12" style=""> 
          <table id="tbl_half_result" class="table table-striped" border='10' style="border: 1px solid grey;" width="100%"> 
            <thead id="thead_half">      
            </thead>       
            <tbody id="tbody_half">       
            </tbody>                                       
            </table>                 
          </div> </div> </div> 
                               <div class="col-md-2"></div>
        </div> <br /> <h6 style="font-size: 18px;" align="center">Bilangan Penyelenggaraan Baik Pulih</h6> 
        <div class="row" style="">  
          <div class="col-md-9">
                                       <canvas id="barChart_halfyear"></canvas> </div> 
                                       <div class="col-md-3"> <div class="row" style="margin-top: 50px;">                                    
        <div class="col-md-12"> 
          <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(45, 135, 210, 0.5);"></canvas>&nbsp Masalah
        Perkakasan<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(48, 218, 120, 0.5);"></canvas>&nbsp Masalah
        Perisian<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(37, 51, 66, 0.5);"></canvas>&nbsp Internet<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color:
        rgba(12, 84, 42, 0.5);"></canvas>&nbsp Networking<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(255,237,74, 0.5);"></canvas>&nbsp Virus<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(227,52,47, 0.5);"></canvas>&nbsp Pemasangan Perisian/Aplikasi<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(60, 52, 220, 0.5);"></canvas>&nbsp Pemasanan Perkakasan<br> 
        <canvas width="10" height="10" style="border:1px solid #d3d3d3; background-color: rgba(197, 103, 9, 0.5);"></canvas>&nbsp Lain-lain<br> </div> </div> </div> </div> </div>  
        <!-- half year result end  -->                   
     </div>      <!---  card-body end  ---> 
     <div class="card-footer">
      <div class="row">
        <div class="col-md-12">
          <table id="tbl_details" class="table table-striped" border='10' style="border: 1px solid grey;" width="100%"> 
            <thead id="">      
              <th>Date</th>
              <th>Name</th>
              <th>Technician ID</th>
              <th>Number of maintenance</th>
            </thead>       
            <tbody id="tbody_details">       
            </tbody>                                       
        </table>
        </div>
      </div>        
     </div>
  </div>  <!---  card end  ---> 
</div> 
</div> 
</div> 
<script type="text/javascript"> 
  var g_total_values = Array();
  $(document).ready(function(){ 
      var authority = '{{ Auth::user()->authority }}';
            if (authority == "Admin") {
                $('#ul_pcview').attr('style', "display:block");
                $('#ul_users').attr('style', "display:block");
            }
            $('#ul_formedit').attr('style', "display:block");
      var temp = {!! json_encode($data) !!};
      var year = {!! json_encode($year) !!}; //
      $('#title_year').text(year);
      // $('.title_pc_id').text(pc_id);
      // console.log(temp[0][0][]); 
      var total_values = Array(); 
      for ( var i = 0; i < 12; i ++ ){ 
          var val = temp[i]; 
          var values = Array(); //
          // console.log(val.length); 
          for (var j = 0; j < val.length; j ++) {
              values.push(val[j][0]['COUNT(*)']);
            } 
      total_values.push(values); 
    }
      g_total_values = total_values; // var vv = [7, 8, 3, 5, 2, 8, 6, 9,]; 
      var ctxB = document.getElementById("barChart_halfyear").getContext('2d'); 
      var ctxC = document.getElementById("barChart_year").getContext('2d'); 
      var ctxA = document.getElementById("barChart_month").getContext('2d');
      draw_chart_month(ctxA, g_total_values[0]); 
      draw_chart_year(ctxC, total_values);     
      draw_chart_halfyear(ctxB, total_values, 0);    
      tblHalf_reload(0);
      tblYear_reload();
      tableDetails_reload();
    });   

    function tableDetails_reload()
    {
        var details = {!! json_encode($details) !!}; 
        $('#tbody_details').empty();
        console.log(details);
        var body_data = "";
        for ( var i = 0; i < details.length; i ++ ){
            var row = "<tr>";
            row += "<td>"+details[i]['modify_date']+"</td><td>"+details[i]['editer_name']+"</td><td>"+details[i]['user_id']+"</td><td>"+details[i]['pc_no']+"</td>";
            row += "</tr>";
            body_data += row;
        }    
        console.log(body_data);    
        $('#tbody_details').append(body_data);
        // var name = details[0][''];
    }  

    $('#cmbCondition').on('change', function(event){
        if ( $(this).val() == "0" ) {
            $('#year_result').attr('style', "display:block");
            $('#month_result').attr('style', "display:none");
            $('#yearhalf_result').attr('style', "display:none");
        }
        if ( $(this).val() == "1" ) {
            $('#year_result').attr('style', "display:none");
            $('#month_result').attr('style', "display:none");
            $('#yearhalf_result').attr('style', "display:block");

        }
        if ( $(this).val() == "2" ) {
            $('#year_result').attr('style', "display:none");
            $('#month_result').attr('style', "display:block");
            $('#yearhalf_result').attr('style', "display:none");
            monthdata_reload(0);
        }
    });     

    $('#cmbMonth').on('change', function(event){
        var ctxA = document.getElementById("barChart_month").getContext('2d');
        draw_chart_month(ctxA, g_total_values[$('#cmbMonth').val()]);
        monthdata_reload(parseInt($(this).val()));
    });
    $('#cmbHalf').on('change', function(event){
        var ctxA = document.getElementById("barChart_halfyear").getContext('2d');
        draw_chart_halfyear(ctxA, g_total_values, parseInt($(this).val()) );
        tblHalf_reload(parseInt($(this).val()));
    });

    function monthdata_reload(month)
    {
        var total_month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var total = 0;
        for ( var i = 1; i < 9; i ++ ){
          total += g_total_values[month][i - 1];
          $('#problem_' + i).text( g_total_values[month][i - 1] );
        }      
        $('#problem_total').text(total);  
    }

    function tblYear_reload()
    {
      var total_month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
       var PROBLEMS = ['Masalah Perkakasan', 'Masalah Perisian', 'Internet', 'Networking', 'Virus', 'Pemasangan Perisian/Aplikasi', 'Pemasanan Perkakasan', 'Lain-lain'];
       var NO = ['1', '2', '3', '4', '5', '6', '7', '8'];
       var tbl_head = Array();
        tbl_head.push("Bil");
        tbl_head.push("Perkara");
      var total = 0;

       for ( var i = 0; i < 12; i ++ ){
            tbl_head.push( total_month[i] );
        }
        
        $('#tbody_year').empty();
        $('#thead_year').empty();

        var total_values = Array();
        for (var i = 0; i < 8; i ++){
            var val = Array();
            for (var j = 0; j < 12; j ++){
                val.push(g_total_values[j][i]);
            }
            total_values.push(val);
        }

        var table_head = "";
        for ( var i = 0; i < 14; i ++ ){
          table_head += "<th>"+tbl_head[i]+"</th>";
        }

        var table_body = "";
        for ( var row = 0; row < 8; row ++ ){
          var tbl_row = "<tr><td>"+NO[row]+".</td><td>"+PROBLEMS[row]+"</td>";
            for ( var col = 0; col < 12; col ++ ){
                total += total_values[row][col];
                tbl_row += "<td>"+total_values[row][col]+"</td>"
            }            
            tbl_row += "</tr>";
            table_body += tbl_row;
        }
        // console.log(total);
        table_body += "<tr><td colspan='9'>Jumlah Keseluruhan</td><td colspan='5'>"+total+" kes</td></tr>";

        $('#thead_year').append(table_head);
        $('#tbody_year').append(table_body);

    }

    function tblHalf_reload(startMonth)
    {
      // console.log(g_total_values);
       var total_month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
       var PROBLEMS = ['Masalah Perkakasan', 'Masalah Perisian', 'Internet', 'Networking', 'Virus', 'Pemasangan Perisian/Aplikasi', 'Pemasanan Perkakasan', 'Lain-lain'];
       var NO = ['1', '2', '3', '4', '5', '6', '7', '8'];
       var tbl_head = Array();
        tbl_head.push("Bil");
        tbl_head.push("Perkara");
      var total = 0;

       for ( var i = startMonth; i < startMonth + 6; i ++ ){
            tbl_head.push( total_month[i] );
        }
        
        $('#tbody_half').empty();
        $('#thead_half').empty();

        var total_values = Array();
        for (var i = 0; i < 8; i ++){
            var val = Array();
            for (var j = startMonth; j < startMonth + 6; j ++){
                val.push(g_total_values[j][i]);
            }
            total_values.push(val);
        }

        var table_head = "";
        for ( var i = 0; i < 8; i ++ ){
          table_head += "<th>"+tbl_head[i]+"</th>";
        }

        var table_body = "";
        for ( var row = 0; row < 8; row ++ ){
          var tbl_row = "<tr><td>"+NO[row]+".</td><td>"+PROBLEMS[row]+"</td>";
            for ( var col = 0; col < 6; col ++ ){
                total += total_values[row][col];
                tbl_row += "<td>"+total_values[row][col]+"</td>"
            }            
            tbl_row += "</tr>";
            table_body += tbl_row;
        }
        // console.log(total);
        table_body += "<tr><td colspan='5'>Jumlah Keseluruhan</td><td colspan='3'>"+total+" kes</td></tr>";

        $('#thead_half').append(table_head);
        $('#tbody_half').append(table_body);

    }

    function draw_chart_month(ctxB, values)
    {
        // var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        // console.log(values);
        var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
          labels: ["", "", "", "", "", "", "", "", ],
          datasets: [{
            label: [''],
            data: values,
            backgroundColor: [
              'rgba(45, 135, 210, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(197, 103, 9, 0.5)'
            ],
            borderColor: [
              'rgba(45, 135, 210, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(255,237,74, 1)',
              'rgba(227,52,47, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(197, 103, 9, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          legend: {
          display: false
            },
          tooltips: {
              callbacks: {
                 label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                 }
              }
          },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });                      
    } 


    function draw_chart_year(ctxB, values)
    {
        // console.log(values);

        var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var total_values = Array();
        for (var i = 0; i < 8; i ++){
            var val = Array();
            for (var j = 0; j < 12; j ++){
                val.push(values[j][i]);
            }
            total_values.push(val);
        }
        // console.log(total_values[0]);

        var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
          labels: MONTHS,
          datasets: [{  //  --------- problem 1 ----------
            label: [''],
            data: total_values[0],
            backgroundColor: [
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
            ],
            borderColor: [
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
            ],
            borderWidth: 1
          }, { //  --------- problem 2 ----------
            label: [''],
            data: total_values[1],
            backgroundColor: [
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
            ],
            borderColor: [
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 3 ----------
            label: [''],
            data: total_values[2],
            backgroundColor: [
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
            ],
            borderColor: [
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 4 ----------
            label: [''],
            data: total_values[3],
            backgroundColor: [
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
            ],
            borderColor: [
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 5 ----------
            label: [''],
            data: total_values[4],
            backgroundColor: [
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
            ],
            borderColor: [
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 6 ----------
            label: [''],
            data: total_values[5],
            backgroundColor: [
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
            ],
            borderColor: [
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 7 ----------
            label: [''],
            data: total_values[6],
            backgroundColor: [
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
            ],
            borderColor: [
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 8 ----------
            label: [''],
            data: total_values[7],
            backgroundColor: [
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
            ],
            borderColor: [
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
            ],
            borderWidth: 1
          } ]
        },
        options: {

          legend: {
          display: false
            },
          tooltips: {
              callbacks: {
                 label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                 }
              }
          },

          scales: {
            responsive: true,
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });                      
    }

    function draw_chart_halfyear(ctxB, values, start)
    {
        // console.log(values);

        var total_month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var total_values = Array();
        for (var i = 0; i < 8; i ++){
            var val = Array();
            for (var j = start; j < start + 6; j ++){
                val.push(values[j][i]);
            }
            total_values.push(val);
        }
        // console.log(total_values[0]);

        var MONTHS = Array();
        for ( var i = start; i < start + 6; i ++ ){
            MONTHS.push( total_month[i] );

        }
        // console.log(MONTHS);

        var myBarChart = new Chart(ctxB, {
        type: 'bar',
        data: {
          labels: MONTHS,
          datasets: [{  //  --------- problem 1 ----------
            label: [''],
            data: total_values[0],
            backgroundColor: [
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
              'rgba(45, 135, 210, 0.5)',              
            ],
            borderColor: [
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
              'rgba(45, 135, 210, 1)',
            ],
            borderWidth: 1
          }, { //  --------- problem 2 ----------
            label: [''],
            data: total_values[1],
            backgroundColor: [
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
              'rgba(48, 218, 120, 0.5)',
            ],
            borderColor: [
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
              'rgba(48, 218, 120, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 3 ----------
            label: [''],
            data: total_values[2],
            backgroundColor: [
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
              'rgba(37, 51, 66, 0.5)',
            ],
            borderColor: [
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
              'rgba(37, 51, 66, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 4 ----------
            label: [''],
            data: total_values[3],
            backgroundColor: [
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
              'rgba(12, 84, 42, 0.5)',
            ],
            borderColor: [
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
              'rgba(12, 84, 42, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 5 ----------
            label: [''],
            data: total_values[4],
            backgroundColor: [
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
              'rgba(255,237,74, 0.5)',
            ],
            borderColor: [
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
              'rgba(255,237,74, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 6 ----------
            label: [''],
            data: total_values[5],
            backgroundColor: [
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
              'rgba(227,52,47, 0.5)',
            ],
            borderColor: [
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
              'rgba(227,52,47, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 7 ----------
            label: [''],
            data: total_values[6],
            backgroundColor: [
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
              'rgba(60, 52, 220, 0.5)',
            ],
            borderColor: [
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
              'rgba(60, 52, 220, 1)',
            ],
            borderWidth: 1
          }, {  //  --------- problem 8 ----------
            label: [''],
            data: total_values[7],
            backgroundColor: [
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
              'rgba(197, 103, 9, 0.5)',
            ],
            borderColor: [
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
              'rgba(197, 103, 9, 1)',
            ],
            borderWidth: 1
          } ]
        },
        options: {
          legend: {
          display: false
            },
          tooltips: {
              callbacks: {
                 label: function(tooltipItem) {
                        return tooltipItem.yLabel;
                 }
              }
          },
          scales: {
            responsive: true,
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });                      
    }




</script>
@endsection
