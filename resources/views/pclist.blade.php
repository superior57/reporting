@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <div class="card" >
                <div class="card-header"><div class="row">
                    <div class="col-md-12" align="center">
                        <h5>SENARAI BILANGAN PENYELENGARAAN</h5>
                    </div></div>
                </div>
                <div class="card-body" >
                    <div class="row">
                        <!-- <div class="col-md-4"> -->
                            <table id="tbl_year" class="table table-dark table-hover" style="text-align: center; border-radius: 10px; opacity: 1;">
                                <thead>
                                    <tr>
                                        <th>Year</th>
                                    </tr>                            
                                </thead>      
                                <tbody id="tbl_body_year">
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>                  
                            </table>
                        <!-- </div>                         -->
                        <!-- <div class="col-md-8">
                            <table id="tbl_pcid" class="table table-dark table-hover" style="text-align: center; border-radius: 10px; opacity: 1;">
                                <thead>
                                    <tr>
                                        <th>PC ID</th>
                                    </tr>                            
                                </thead>      
                                <tbody id="tbl_body">
                                    <tr>
                                        <td>Please select year!</td>
                                    </tr>
                                </tbody>                  
                            </table> 
                        </div>   -->                    
                    </div>    
                    <form id="form" action="{{ route('details_data') }}" method="POST" >
                        <input type="hidden" value="{{ csrf_token() }}" name="_token"/>
                        <!-- <input type="hidden" id="pc_id" name="pc_id" value="" />                         -->
                        <input type="hidden" id="year" name="year" value="" />                        
                    </form>           
                </div>      <!---  card-body end  --->
            </div>  <!---  card end  --->
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        var authority = '{{ Auth::user()->authority }}';
            if (authority == "Admin") {
                $('#ul_pcview').attr('style', "display:block");
                $('#ul_users').attr('style', "display:block");
            }
            $('#ul_formedit').attr('style', "display:block");
        // table_reload('2019');
        reload_year();
        $('#tbl_pcid tbody').on('click', 'tr', function(event){            
            on_click_table(this);            
        });
        $('#tbl_year tbody').on('click', 'tr', function(event){            
            on_click_year(this);            
        });
    });     

    function on_click_table(element)
    {
        var temp = $(element).html();
        temp = temp.replace('<td>', '');
        temp = temp.replace('</td>', '');
        temp = temp.trim();
        $('#pc_id').val(temp);
        $('#form').submit(); 

        //window.open("{{ url('/chart') }}", '_self');
    }

    function table_reload(year)
    {
        console.log(year);
        var pc_list = {!! json_encode($pc_list) !!};

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
        url : '/ajax_get_pclist',
        type: "POST",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'year' : year },
        success: function(data)
        {
               //if success close modal and reload ajax table     
               var table_body = "";
            for ( var i = 0; i < data.length ; i ++ ){
                var row = "<tr id='"+i+"'><td >"+data[i]['pc_id']+"</td></tr>";
                table_body += row;
            }
            $('#tbl_body').empty();
            $('#tbl_body').append(table_body);
               
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        });
    }    

    function reload_year()
    {
        var years = {!! json_encode($years) !!};
        console.log(years);
        var table_body = "";
        for ( var i = 0; i < years.length ; i ++ ){
            var row = "<tr id='"+i+"'><td >"+years[i]['YEAR(modify_date)']+"</td></tr>";
            table_body += row;
        }
        $('#tbl_body_year').empty();
        $('#tbl_body_year').append(table_body);        
    } 

    function on_click_year(element)
    {
        var temp = $(element).html();
        temp = temp.replace('<td>', '');
        temp = temp.replace('</td>', '');
        temp = temp.trim();
        // $('#year').val(temp);      
        $('#year').val(temp);
        $('#form').submit();  
        // table_reload(temp);
    } 

</script>
@endsection
