@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/poapper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

  <style type="text/css">
    .row{
      padding-bottom: 5px;
    }
    .textRight{
      text-align: right;
    }
  </style>

<div class="container">    
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <div class="card" >
                <div class="card-header" style="text-align: right;">
                  <div class="row">
                    <div class="col-md-10"></div>
                      <button class="btn btn-success col-md-2" href="#modal_search" data-toggle="modal" style="max-width: 100px; height: 40px; padding: 0 !important;">
                              Search
                    </button>
                    <div class="col-md-4"></div>
                  </div>
                </div>
                <div class="card-body" style="text-align: center;">
                  <h4 style="text-align: left;">Search Results for User :</h4>
                  <table  class="table table-dark table-hover" style="border-radius: 0 !important; text-align: center; border-radius: 10px; opacity: 1;">
                    <thead>
                      <th>
                        Registration ID#
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Discord ID#
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody id="tablebody_user">
                    </tbody>
                  </table>
                </div>      <!---  card-body end  --->
                <div class="card-footer table-responsive" style="text-align: center; height: 500px;">
                  <h4 style="text-align: left;">Search Results for Offense ID :</h4>
                  <table  class="table table-dark table-hover" style="border-radius: 0 !important; text-align: center; border-radius: 10px; opacity: 1;">
                    <thead>
                      <th>
                        Date of offense
                      </th>
                      <th>
                        Offense ID
                      </th>
                      <th>
                        Server ID
                      </th>
                      <th>
                        Server Name
                      </th>
                      <th>
                        Offense
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody id="tablebody_record">
                    </tbody>
                  </table>
                </div>
            </div>  <!---  card end  --->
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->
<script type="text/javascript">

    $(document).ready(function(){
        var authority = '{{ Auth::user()->authority }}';
            if (authority == "Administrator") {
                $('#ul_search').attr('style', "display:block; font-weight: bold;");
                $('#ul_userlist').attr('style', "display:block;");
                $('#ul_users').attr('style', "display:block");
                $('#ul_ctrlpanel').attr('style', "display:block");
            }
            else if (authority == "ServerAdmin")
            {
              $('#ul_server_account').attr('style', "display:block");  
              $('#ul_users').attr('style', "display:block");
              $('#ul_search').attr('style', "display:block; font-weight: bold;");                          
            }
            else if (authority == "Technician")
            {
              $('#ul_search').attr('style', "display:block; font-weight: bold;");
              $('#ul_userlist').attr('style', "display:block;");
            }
            $('#ul_home').attr('style', "display:block");
            
    });     


    function table_reload()
    {
        $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });
         $.ajax({
              url : '/ajaxGet',
              type: "GET",
              dataType: "JSON",
              data : { '_token' : '{{ csrf_token() }}'},
              success: function(users)
              {
                 //if success reload ajax table
                    // console.log(data);
                    $('#tbl_body').empty();
                    var data = "";
                    for ( var i = 0; i < users.length; i ++ ){
                        var row = "<tr>";
                        row += "<td>"+users[i]['name']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['authority']+"</td><td><button value='"+users[i]['id']+"' class='btn btn-sm btn-success' onclick='edit_user(this)' ><i class='glyphicon glyphicon-pencil'></i>Edit</button>&nbsp<button value='"+users[i]['id']+"' id=''  onclick='delete_user(this)' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-traf'></i>Delete</button></td>"
                        row += "</tr>";
                        data += row;
                    }
                    $('#tbl_body').append(data);
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });

        
    }

    function update()
    {
         $.ajax({
        url : '/ajaxUpdate',
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
               table_reload();
               swal(
                'Good job!',
                'Data has been save!',
                'success'
                )
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });   
    }

    function search()
    {
        $.ajax({
        url : '/ajax_search',
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table

               $('#tablebody_user').empty();
                var result = "";
                if(data[0] != "0"){
                  for ( var i = 0; i < data[0].length; i ++ ){
                      var row = "<tr>";
                      row += "<td>"+data[0][i]['reg_id']+"</td><td>"+data[0][i]['email']+"</td><td>"+data[0][i]['dis']+"</td><td><button value='"+data[0][i]['id']+"' class='btn btn-sm btn-success' onclick='user_view(this)' ><i class='glyphicon glyphicon-pencil'></i>View</button></td>"
                      row += "</tr>";
                      result += row;
                  }

                  $('#tablebody_user').append(result); 
                }
                else
                {
                  var row = "<tr><td colspan='4'>No Data Avaliable</td></tr>";
                  $('#tablebody_user').append(row); 
                }

                $('#tablebody_record').empty();

                if (data[1] != "0") {
                  console.log(data[1][0]['verify']);
                  
                  result = "";
                  for ( var i = 0; i < data[1].length; i ++ ){
                      var row = "<tr>";

                      var verify = "<td>Not Verified</td>"

                      if ( data[i]['verify'] == "1" )
                          verify = "<td style='color:blue'>Verified</td>"
                        else if (data[1][i]['verify'] == "2" )
                          verify = "<td style='color:red'>Under Review</td>"
                        else if (data[1][i]['verify'] == "3")
                          verify = "<td style='color:red'>Pending Appeal</td>"


                      row += "<td>"+data[1][i]['date']+"</td><td>"+data[1][i]['offense_id']+"</td><td>"+data[1][i]['server_id']+"</td><td>"+data[1][i]['server_name']+"</td><td>"+data[1][i]['offense']+"</td>"+verify+"<td><button value='"+data[1][i]['id']+"' class='btn btn-sm btn-success' onclick='record_view(this)' ><i class='glyphicon glyphicon-pencil'></i>View</button></td>"
                      row += "</tr>";
                      result += row;
                  }
                  $('#tablebody_record').append(result);                  
                }
                else
                {
                  var row = "<tr><td colspan='7'>No Data Avaliable</td></tr>";
                  $('#tablebody_record').append(row); 
                }

                $('#modal_search').modal('hide'); 
                              
           },
           error: function (jqXHR, textStatus, errorThrown)
           {
            alert('Error adding / update data');
          }
        });   
    }    

    function user_view(element)
    {
      var id = $(element).attr('value');
        $('#id').val(id);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
        url : '/ajax_get_user',
        type: "GET",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'id' : id },
        success: function(data)
        {
               //if success close modal and reload ajax table
              $('#userid').val(data[0]['id']);
              $('#user_name').val(data[0]['name']);
              $('#user_regid').val(data[0]['reg_id']);
              $('#user_birth').val(data[0]['age']);
              $('#user_steam').val(data[0]['steam']);
              $('#user_email').val(data[0]['email']);
              $('#user_five').val(data[0]['five']);

              var flag = "Not Flagged";
              var verify = "Not Verified";
              var activity = "Not Active"

              if ( data[0]['flag'] == "1" )
                flag = "Flagged"
              if ( data[0]['verify'] == "1" )
                verify = "Verified"
              if ( data[0]['active'] == "1" )
                activity = "Active"

              $('#user_activity').val(activity);
              $('#user_flag').val(flag);
              $('#user_verify').val(verify);
              $('#user_auth').val(data[0]['authority']);

              $('#modal_user').modal('show');
               
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        });

    }

    function record_view(element)
    {
      var id = $(element).attr('value');
        $('#view_recordid').val(id);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
        url : '/quick_record',
        type: "POST",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'id' : id },
        success: function(data)
        {
               //if success close modal and reload ajax table
              $('#record_date').val(data[0]['date']);
              $('#record_offenseId').val(data[0]['offense_id']);
              $('#record_userreg').val(data[0]['reg_id']);
              $('#record_username').val(data[0]['name']);              
              $('#record_serverid').val(data[0]['server_id']);
              $('#record_servername').val(data[0]['server_name']);
              $('#record_offense').val(data[0]['offense']);
              $('#record_punishment').val(data[0]['punis']);
              $('#record_narrative').val(data[0]['narrative']);
              var verify_stats = "Not Verified";
              if (data[0]['verify'] == "1")
                verify_stats = "Verified";

              $('#record_verify').val(verify_stats);

              $('#modal_record').modal('show');
               
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        });   
    }

    function view()
    {
        var id = $('#userid').val();
        location.href = "{{ url('/users') }}" + "/" + id;
    }

    $('.datepicker').datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,  
    });
     

</script>

<!-- search condition-->
  <div class="modal fade" id="modal_search" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Search Condition</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 10px;">
          <form action="#" id="form" style="font-size: 14px">
            <input type="hidden" value="" name="id" id="id" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Registration ID # : </label>                
                  <input style="font-size: 13px" id="search_regid" name="search_regid" placeholder="Registration ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Discord ID : </label>                
                  <input style="font-size: 13px" id="search_discordid" name="search_discordid" placeholder="Discord ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense ID # : </label>                
                  <input style="font-size: 13px" id="search_offenseid" name="search_offenseid" placeholder="Offense ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Email : </label>                
                  <input style="font-size: 13px" id="search_email" name="search_email" placeholder="Email" class="form-control col-md-8" type="text">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="search()" class="btn btn-primary" style="display: block">Search</button>          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div><!-- /.search -dialog -->

<!-- user view -->
<div class="modal fade" id="modal_user" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">User view</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 20px;">
          <form action="#" method="POST" action="{{ url('users') }}" id="record_set" style="font-size: 14px">
            <input type="hidden" value="" name="userid" id="userid" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body" style="text-align: right;">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Name : </label>                
                  <input style="font-size: 13px" id="user_name" name="user_name" placeholder="Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Registration ID # : </label>                
                  <input style="font-size: 13px" id="user_regid" name="user_regid" placeholder="Registration ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">D.O.B : </label>                
                  <input style="font-size: 13px" id="user_birth" name="user_birth" placeholder="D.O.B" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Email Address : </label>                
                  <input style="font-size: 13px" id="user_email" name="user_email" placeholder="Email Address" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Steam ID : </label>                
                  <input style="font-size: 13px" id="user_steam" name="user_steam" placeholder="Steam ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Five M User : </label>                
                  <input style="font-size: 13px" id="user_five" name="user_five" placeholder="Five M User" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Active Status : </label>                
                  <input style="font-size: 13px" id="user_activity" name="user_activity" placeholder="Activity" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Flag : </label>                
                  <input style="font-size: 13px" id="user_flag" name="user_flag" placeholder="Flag" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Status : </label>                
                  <input style="font-size: 13px" id="user_verify" name="user_verify" placeholder="Verify" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Authority : </label>                
                  <input style="font-size: 13px" id="user_auth" name="user_auth" placeholder="Authority" class="form-control col-md-8" type="text">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="view()" class="btn btn-primary" style="display: block">View More</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- user view end -->

<!-- record view  -->
<div class="modal fade" id="modal_record" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Record View</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 20px;">
          <form action="#" id="record_set" style="font-size: 14px">
            <input type="hidden" value="" name="view_recordid" id="view_recordid" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body" style="text-align: right;">
              <div class="form-group">
                <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Date Of Offense : </label>                
                  <input id="record_date" name="record_date" placeholder="Date" class="form-control datepicker col-md-8" type="date">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense ID # : </label>                
                  <input style="font-size: 13px" id="record_offenseId" name="record_offenseId" placeholder="Offense ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">User Reg # : </label>                
                  <input style="font-size: 13px" id="record_userreg" name="record_userreg" placeholder="User Reg #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">User Name : </label>                
                  <input style="font-size: 13px" id="record_username" name="record_username" placeholder="User Name" class="form-control col-md-8" type="text">
                </div>
              </div>              
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server ID : </label>                
                  <input style="font-size: 13px" id="record_serverid" name="record_serverid" placeholder="Server ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server Name : </label>                
                  <input style="font-size: 13px" id="record_servername" name="record_servername" placeholder="Server Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense Submmitted : </label>                
                  <input style="font-size: 13px" id="record_offense" name="record_offense" placeholder="Offense Submmitted" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Narrative : </label> 
                  <textarea style="font-size: 13px" id="record_narrative" name="record_narrative" placeholder="Narrative" class="form-control col-md-8"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Punishment : </label>                
                  <input style="font-size: 13px" id="record_punishment" name="record_punishment" placeholder="Punishment" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Status : </label>                
                  <input style="font-size: 13px" id="record_verify" name="record_verify" placeholder="Verify" class="form-control col-md-8" type="text">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
<!--           <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="display: block">Save</button>
 -->          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div><!-- record view end -->

@endsection
