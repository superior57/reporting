@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
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
                <div class="card-header">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row" style="padding: 10px;">
                        <div class="col-md-2"></div>
                        <input style="font-size: 13px" id="search_reg_id" name="search_reg_id" placeholder="ID" class="form-control col-md-2" type="text">&nbsp
                        <input style="font-size: 13px" id="search_email" name="search_email" placeholder="Email" class="form-control col-md-4" type="text">&nbsp
                        <button  class="btn btn-success col-md-4" id="btnSearch" style="max-width: 100px; max-height: 35px; padding: 0 !important;">
                            Search
                        </button>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="card-body" style="text-align: left; padding-left: 150px;">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="row">
                        <div class="col-md-12">                          
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">E-Verify Registration ID #</label>                
                            <input style="font-size: 13px" id="txtVerifyId" name="txtVerifyId" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Steam ID</label>                
                            <input style="font-size: 13px" id="txtSteamId" name="txtSteamId" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Discord Tag #</label>                
                            <input style="font-size: 13px" id="txtDisId" name="txtDisId" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Five M user ID</label>                
                            <input style="font-size: 13px" id="txtFiveId" name="txtFiveId" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="padding-bottom: 10px;">
                      <img id="userAvatar" name="userAvatar" src="{{ asset('themes/register/img/default-avatar.png') }}" width="160px;" height="160px;" style="border : 2px solid grey; border-radius: 50%;">
                    </div>                    
                  </div>
                  <div class="row" style="margin-right: 175px;">
                    <div class="col-md-8">
                      <div class="row textRight">
                        <label class="col-form-label col-md-5">Email</label>                
                        <input style="font-size: 13px;" id="txtEmail" name="txtEmail" placeholder="" class="form-control col-md-7" type="text">
                      </div>                      
                    </div>
                    <div class="col-md-4">
                      <div class="row textRight">
                        <label class="col-form-label col-md-4">D.O.B</label>                
                        <input style="font-size: 13px" id="txtAge" name="txtAge" placeholder="" class="form-control col-md-8" type="text">
                      </div>                      
                    </div>
                  </div>
                  <div class="row" style="margin-right: 175px; margin-left: 55px;">
                    <div class="col-md-6">
                      <div class="row textRight">
                        <label class="col-form-label col-md-5">Country</label>                
                        <input style="font-size: 13px;" id="txtCountry" name="txtCountry" placeholder="" class="form-control col-md-7" type="text">
                      </div>                      
                    </div>
                    <div class="col-md-6">
                      <div class="row textRight">
                        <label class="col-form-label col-md-6">Current Server</label>                
                        <input style="font-size: 13px" id="txtCurserver" name="txtCurserver" placeholder="" class="form-control col-md-6" type="text">
                      </div>                      
                    </div>
                  </div>
                  <div class="row">
                    <div id="lblflagnot" class="col-md-4">
                      <b>Not Flagged</b>
                    </div>
                    <div id="lblflag" class="col-md-4" style="color: red; display: none;">
                      <b>Flagged</b>
                    </div>
                    <div id="lblverifynot" class="col-md-4">
                      <b>Not Verified</b>
                    </div>
                    <div id="lblverify" class="col-md-4" style="color: blue; display: none;">
                      <b>Verified</b>
                    </div>
                    <div id="lblactivenot" class="col-md-4">
                      <b>Not Active</b>
                    </div>
                    <div id="lblactive" class="col-md-4" style="color: green; display: none; ">
                      <b>Active</b>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                    </div> 
                    <div class="col-md-3" style="text-align: left;">
                      <button id="btnAddrec" name="btnAddrec" class="btn btn-success col-md-2" style="max-width: 150px; height: 30px; padding: 0 !important;">                          
                            Add Record
                      </button>
                    </div> 
                    <div class="col-md-1"></div>
                  </div>
                </div>      <!---  card-body end  --->
                <div class="card-footer table-responsive" style="text-align: center; height: 500px;">
                  <table  class="table table-hover table-dark" style="border-radius: 0 !important; text-align: center; border-radius: 10px; opacity: 1;">
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
                        Offense Committed
                      </th>
                      <th>
                        Punishment
                      </th>
                      <th>
                        Status
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody id="tblbody_record">
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
    var USER_ID = "0";   
    var AUTH;
    var SERVER_ID;
    var SERVER_NAME;
    var USER, RECORDS;
    $(document).ready(function(){
        var authority = '{{ Auth::user()->authority }}';
            AUTH = authority;
            if (authority == "Administrator") {
                $('#ul_search').attr('style', "display:block;");
                $('#ul_userlist').attr('style', "display:block;");
                $('#ul_users').attr('style', "display:block; font-weight: bold;");
                $('#ul_ctrlpanel').attr('style', "display:block");
            }
            else if (authority == "ServerAdmin")
            {
              // $('#ul_users').attr('style', "display:block");  
              $('#ul_server_account').attr('style', "display:block");
              $('#ul_search').attr('style', "display:block;");
              $('#ul_users').attr('style', "display:block; font-weight: bold;");                          
            }
            else if (authority == "Technician")
            {
              $('#ul_search').attr('style', "display:block;");
              $('#ul_userlist').attr('style', "display:block;");
            }
            else if ( authority == "RegularUser")
            {
                $('#ul_account').attr('style', "display:block");                
            }
            $('#ul_home').attr('style', "display:block; ");

            var user = {!! json_encode($user) !!}; 

            search(user[0]['reg_id'], user[0]['email']);
            // table_reload();   
    });  



    function table_reload()
    {
        $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });
         $.ajax({
              url : '/ajax_get_record',
              type: "GET",
              dataType: "JSON",
              data : { '_token' : '{{ csrf_token() }}', 'user_id' : USER_ID},
              success: function(record)
              {
                 //if success reload ajax table
                    // console.log(record);
                    $('#tblbody_record').empty();
                    var data = "";
                    for ( var i = 0; i < record.length; i ++ ){
                        var row = "<tr>";
                        var flag = "<td>Not Flagged</td>";
                        var verify = "<td>Not Verified</td>";
                        var activity = "<td>Not Active</td>"

                        if ( record[i]['flag'] == "1" )
                          flag = "<td style='color:red'>Flagged</td>"
                        if ( record[i]['verify'] == "1" )
                          verify = "<td style='color:blue'>Verified</td>"
                        else if (record[i]['verify'] == "2" )
                          verify = "<td style='color:red'>Under Review</td>"
                        else if (record[i]['verify'] == "3")
                          verify = "<td style='color:red'>Pending Appeal</td>"
                        if ( record[i]['activity'] == "1" )
                          activity = "<td style='color:green'>Active</td>"

                        // console.log(AUTH);
                        if (AUTH == "Administrator"){
                          row += "<td>"+record[i]['date']+"</td><td>"+record[i]['offense_id']+"</td><td>"+record[i]['server_id']+"</td><td>"+record[i]['server_name']+"</td><td>"+record[i]['offense']+"</td><td>"+record[i]['punis']+"</td>"+verify+"<td><button value='"+record[i]['id']+"' class='btn btn-sm btn-success' onclick='record_view(this)' ><i class='glyphicon glyphicon-pencil'></i>View</button>&nbsp<button value='"+record[i]['id']+"' class='btn btn-sm btn-success' onclick='edit_record(this)' ><i class='glyphicon glyphicon-pencil'></i>Edit</button>&nbsp<button value='"+record[i]['id']+"' id=''  onclick='delete_record(this)' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-traf'></i>Delete</button></td>"
                        }
                        else
                        {
                          row += "<td>"+record[i]['date']+"</td><td>"+record[i]['offense_id']+"</td><td>"+record[i]['server_id']+"</td><td>"+record[i]['server_name']+"</td><td>"+record[i]['offense']+"</td><td>"+record[i]['punis']+"</td>"+verify+"<td><button value='"+record[i]['id']+"' class='btn btn-sm btn-success' onclick='record_view(this)' ><i class='glyphicon glyphicon-pencil'></i>View</button></td>"
                        }

                        row += "</tr>";
                        data += row;
                    }
                    // console.log(data);
                    $('#tblbody_record').append(data);
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
    }

    $('#btnAddrec').on('click', function(event){
      add_record();
      table_reload();  
    });

    $('#btnSearch').on('click', function(event){
      user_search();
    });

    function user_search(){

      var reg_id = $('#search_reg_id').val();
      var email = $('#search_email').val();
      search(reg_id, email);
    }

    function search(reg_id, email)
    {
      // console.log(reg_id);
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
        url : '/ajax_get_user_search',
        type: "GET",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'reg_id' : reg_id, 'email' : email },
        success: function(data)
        {
               //if success close modal and reload ajax table
              // console.log(data);
              $('#txtVerifyId').val(data[0]['reg_id']);
              $('#txtServerId').val(data[0]['server_id']);
              $('#txtSname').val(data[0]['server_name']);
              $('#txtSteamId').val(data[0]['steam']);
              $('#txtDisId').val(data[0]['dis']);
              $('#txtFiveId').val(data[0]['five']);
              $('#txtEmail').val(data[0]['email']);
              $('#txtAge').val(data[0]['age']);
              $('#txtCountry').val(data[0]['country_code']);
              $('#txtCurserver').val(data[0]['cur_serverid']);
              $('#id').val(data[0]['id']);

              if (data[0]['flag'] == "0")
              {
                $('#lblflag').hide();
                $('#lblflagnot').show();
              }
              else
              {
                $('#lblflag').show();
                $('#lblflagnot').hide();
              }

              if (data[0]['verify'] == "0")
              {
                $('#lblverify').hide();
                $('#lblverifynot').show();
              }
              else
              {
                $('#lblverify').show();
                $('#lblverifynot').hide();
              }

              if (data[0]['active'] == "0")
              {
                $('#lblactive').hide();
                $('#lblactivenot').show();
              }
              else
              {
                $('#lblactive').show();
                $('#lblactivenot').hide();
              }
              console.log(data[0]['id']);
              var ava = data[0]['avatar'];

              if (ava == "")
                $('#userAvatar').attr('src', "{{ asset('themes/register/img/default-avatar.png') }}");
              else
               $('#userAvatar').attr('src', ava );

                
              USER_ID = data[0]['id'];
              table_reload();   

         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        }); 
    }
   
    function add_record()
    {
      if (USER_ID == "0") {
        return;
      }
      var offense_id =  1 + Math.floor(Math.random() * 100000000);
      offense_id = "H" + offense_id;

      $('#txtOffenseId').val(offense_id);

      $('#modal_form').modal('show');
      $('.modal-title').text('Add Record');
    }

    function add_user()
    {
        $('#btnSave').attr('style', "display:block");
        $('#btnUpdate').attr('style', "display:none");
        $('#modal_form').modal('show');
        $('.modal-title').text('Add User');

    }
    function edit_record(element)
    {        
        var id = $(element).attr('value');
        $('#record_id').val(id);

        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });

        $.ajax({
        url : '/ajax_get_record_edit',
        type: "POST",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'id' : id },
        success: function(data)
        {
               //if success close modal and reload ajax table
              $('#cmbActivity').val(data[0]['activity']);
              $('#cmbFlag').val(data[0]['flag']);
              $('#cmbVerify').val(data[0]['verify']);
              $('#modal_record').modal('show');
               
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
    function save()
    {
       $.ajax({
        url : '/ajax_record_save',
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
        url : '/ajax_get_record_edit',
        type: "POST",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'id' : id },
        success: function(data)
        {
               //if success close modal and reload ajax table
              $('#view_date').val(data[0]['date']);
              $('#view_offenseId').val(data[0]['offense_id']);
              $('#view_serverid').val(data[0]['server_id']);
              $('#view_servername').val(data[0]['server_name']);
              $('#view_offense').val(data[0]['offense']);
              $('#view_punishment').val(data[0]['punis']);
              $('#view_narrative').val(data[0]['narrative']);
              var verify_stats = "Not Verified";
              if (data[0]['verify'] == "1")
                verify_stats = "Verified";

              $('#view_verify').val(verify_stats);

              $('#modal_record_view').modal('show');
               
         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        });   
    }

    function saveRecord()
    {
      $.ajax({
        url : '/ajax_record_seted',
        type: "POST",
        data: $('#record_set').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               $('#modal_record').modal('hide');
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

    function delete_record(element)
    {
        var select_id = $(element).attr('value');
        // console.log(select_id);
         $.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });
        swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        closeOnConfirm: false
      }).then(function(isConfirm) {

     // ajax delete data to database
     $.ajax({
      url : '/ajas_delete_record',
      type: "POST",
      dataType: "JSON",
      data : { '_token' : '{{ csrf_token() }}', 'id' : select_id},
      success: function(data)
      {
               //if success reload ajax table
               table_reload();
               swal(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                );
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });

     
         
       })

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
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Condition Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 10px;">
          <form action="#" id="form" style="font-size: 14px">
            <input type="hidden" value="" name="id" id="id" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Date of offense : </label> 
                  <input name="txtDate" id="txtDate" placeholder="yyyy-mm-dd" class="form-control datepicker col-md-8" type="date">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense ID : </label>                
                  <input style="font-size: 13px" id="txtOffenseId" name="txtOffenseId" placeholder="Offense ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Sever ID : </label>                
                  <input style="font-size: 13px" id="txtServerId" name="txtServerId" placeholder="Sever ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server Name : </label>                
                  <input style="font-size: 13px" id="txtSname" name="txtSname" placeholder="Server Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense Committed : </label>                
                  <select style="font-size: 15px;" id="cmbOffense" name="cmbOffense" class="form-control col-md-8">
                    <option value="Swearing"> Swearing</option>
                    <option value="VDM"> VDM</option>
                    <option value="Trolling"> Trolling</option>
                    <option value="Spam"> Spam</option>
                    <option value="Racial Slur"> Racial Slur</option>
                    <option value="Sexual Slur"> Sexual Slur</option>
                    <option value="Sexual Slur"> False D.O.B</option>
                    <option value="Sexual Slur"> Hacking</option>
                    <option value="Sexual Slur"> Fraud</option>
                    <option value="Sexual Slur"> Scamming</option>
                    <option value="Sexual Slur"> Cheting</option>
                    <option value="Sexual Slur"> Fake Profile</option>
                    <option value="Sexual Slur"> Piracy</option>
                    <option value="Sexual Slur"> Offensive Language</option>
                    <option value="Sexual Slur"> Ban Evasion</option>
                    <option value="Sexual Slur"> Harassment</option>
                    <option value="Sexual Slur"> Advertisement Violation</option>
                    <option value="Sexual Slur"> Explicit Imagery</option>
                    <option value="Other"> Other</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Narrative : </label> 
                  <textarea style="font-size: 13px" id="txtNarrative" name="txtNarrative" placeholder="Date of offense" class="form-control col-md-8"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">
                    Punishment : &nbsp
                  </label>
                  <select style="font-size: 15px;" id="cmbPunis" name="cmbPunis" class="form-control col-md-8">
                    <option value="Banned"> Banned(24 Hours)</option>
                    <option value="Banned"> Banned(48 Hours)</option>
                    <option value="Banned"> Banned(72 Hours)</option>
                    <option value="Banned"> Perm.Ban</option>
                    <option value="Reported"> Reported</option>
                    <option value="Warning"> Warning</option>
                    <option value="Deleted"> Deleted</option>
                    <option value="Written Up"> Written Up</option>
                    <option value="Suspended"> Suspended</option>
                    <option value="Other"> Other</option>
                  </select>
                </div>                
              </div> 
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="display: block">Save</button>
          <button type="button" id="btnUpdate" onclick="update()" class="btn btn-primary" style="display: none">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>

  <div class="modal fade" id="modal_record" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Settings</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 10px;">
          <form action="#" id="record_set" style="font-size: 14px">
            <input type="hidden" value="" name="record_id" id="record_id" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Active Status : </label>                
                  <select style="font-size: 15px;" id="cmbActivity" name="cmbActivity" class="form-control col-md-8">
                    <option value="0"> Not Actived</option>
                    <option value="1"> Actived</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Flag : </label>                
                  <select style="font-size: 15px;" id="cmbFlag" name="cmbFlag" class="form-control col-md-8">
                    <option value="0"> Not Flagged</option>
                    <option value="1"> Flagged</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Status : </label>                
                  <select style="font-size: 15px;" id="cmbVerify" name="cmbVerify" class="form-control col-md-8">
                    <option value="0"> Not Verified</option>
                    <option value="1"> Verified</option>
                    <option value="2"> Under Review</option>
                    <option value="3"> Pending Appeal</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="saveRecord()" class="btn btn-primary" style="display: block">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>

<div class="modal fade" id="modal_record_view" role="dialog">
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
                  <input name="view_date" id="view_date" placeholder="Date Of Offense" class="form-control datepicker col-md-8" type="date">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense ID # : </label>                
                  <input style="font-size: 13px" id="view_offenseId" name="view_offenseId" placeholder="Offense ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server ID : </label>                
                  <input style="font-size: 13px" id="view_serverid" name="view_serverid" placeholder="Server ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server Name : </label>                
                  <input style="font-size: 13px" id="view_servername" name="view_servername" placeholder="Server Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense Submmitted : </label>                
                  <input style="font-size: 13px" id="view_offense" name="view_offense" placeholder="Offense Submmitted" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Narrative : </label> 
                  <textarea style="font-size: 13px" id="view_narrative" name="view_narrative" placeholder="Narrative" class="form-control col-md-8"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Punishment : </label>                
                  <input style="font-size: 13px" id="view_punishment" name="view_punishment" placeholder="Punishment" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Status : </label>                
                  <input style="font-size: 13px" id="view_verify" name="view_verify" placeholder="Verify" class="form-control col-md-8" type="text">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
<!--           <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="display: block">Save</button>
 -->          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>
@endsection
