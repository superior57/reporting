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
                <div class="card-header" style="text-align: left; padding-left: 150px;">
                  <div id="userdata" style="display: none;">  <!--  user data   -->
                  <div class="row"> 
                    <div class="col-md-8">
                      <div class="row">
                        <div class="col-md-12">     
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Name</label>                
                            <input style="font-size: 13px" id="txtName" name="txtName" placeholder="" class="form-control col-md-8" type="text">
                          </div>                     
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
                        <input name="txtDate" id="txtAge" placeholder="yyyy-mm-dd" class="form-control datepicker col-md-8" type="date">
                      </div>                      
                    </div>
                  </div>
                  </div> <!--  user data end  -->

                  <div id="serverdata" style="display: none;">  <!--  server data   -->
                  <div class="row"> 
                    <div class="col-md-8">
                      <div class="row">
                        <div class="col-md-12">     
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Server Name</label>                
                            <input style="font-size: 13px" id="server_name" name="server_name" placeholder="" class="form-control col-md-8" type="text">
                          </div>                     
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Server ID #</label>                
                            <input style="font-size: 13px" id="server_id" name="server_id" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Discord Link</label>                
                            <input style="font-size: 13px" id="server_discord" name="server_discord" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Email</label>                
                            <input style="font-size: 13px" id="server_email" name="server_email" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                          <div class="row textRight">
                            <label class="col-form-label col-md-4">Country</label>                
                            <input style="font-size: 13px" id="server_country" name="server_country" placeholder="" class="form-control col-md-8" type="text">
                          </div>
                        </div>
                      </div>
                    </div>                   
                  </div>
                  </div> <!--  server data end  -->
                </div>
                <div class="card-body" style="text-align: center; display: block;">
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
                </div>      <!---  card-body end  --->
                <div class="card-footer table-responsive" style="text-align: center; height: 500px;" hidden>
                  <h3 class="col-md-4">My Offense Record</h3>
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
                        Offense Committed
                      </th>
                      <th>
                        Punishment
                      </th>
                      <th>
                        Status
                      </th>                      
                      <th>
                        Appeal
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

    $(document).ready(function(){
        var authority = '{{ Auth::user()->authority }}';
            if (authority == "Administrator") {
                $('#ul_search').attr('style', "display:block;");
                $('#ul_userlist').attr('style', "display:block;");
                $('#ul_users').attr('style', "display:block");
                $('#ul_ctrlpanel').attr('style', "display:block");
            }
            else if(authority == "RegularUser")
            {
              $('#ul_account').attr('style', "display:block; font-weight: bold;");
              $('#serverdata').hide();
              $('#userdata').show();  
              $('.card-footer').attr('hidden', false);
            }
            else if(authority == "Technician")
            {
              $('#ul_userlist').attr('style', "display:block;");
              $('#ul_search').attr('style', "display:block");
            }
            else if(authority == "ServerAdmin")
            {
              $('#ul_server_account').attr('style', "display:block; font-weight: bold;");     
              $('#ul_search').attr('style', "display:block;"); 
              $('#ul_users').attr('style', "display:block;");
              $('#serverdata').show();
              $('#userdata').hide();   
            }
            // $('#ul_formedit').attr('style', "display:block");
            $('#ul_home').attr('style', "display:block");
            var users = {!! json_encode($user) !!};  
            USERS_DATA = users;   
            // $('#ul_formedit').attr('style', "display:block");

        userdata_reload(); 
        table_reload();   
        // table_reload();   
    });   

    function userdata_reload()
    {
      // console.log(USERS_DATA['name']);
      $('#txtName').val(USERS_DATA['name']);
      $('#txtVerifyId').val(USERS_DATA['reg_id']);
      $('#txtSteamId').val(USERS_DATA['steam']);
      $('#txtDisId').val(USERS_DATA['dis']);
      $('#txtFiveId').val(USERS_DATA['five']);
      $('#txtEmail').val(USERS_DATA['email']);
      $('#txtAge').val(USERS_DATA['age']);   
      

      $('#server_name').val(USERS_DATA['server_name']);
      $('#server_id').val(USERS_DATA['server_id']);
      $('#server_discord').val(USERS_DATA['dis']);
      $('#server_email').val(USERS_DATA['email']);
      $('#server_country').val(USERS_DATA['country_code']);

      var ava = USERS_DATA['avatar'];
      if (ava == "")
        $('#userAvatar').attr('src', "{{ asset('themes/register/img/default-avatar.png') }}");
      else
       $('#userAvatar').attr('src', ava);


      if (USERS_DATA['flag'] == "0")
      {
        $('#lblflag').hide();
        $('#lblflagnot').show();
      }
      else
      {
        $('#lblflag').show();
        $('#lblflagnot').hide();
      }

      if (USERS_DATA['verify'] == "0")
      {
        $('#lblverify').hide();
        $('#lblverifynot').show();
      }
      else
      {
        $('#lblverify').show();
        $('#lblverifynot').hide();
      }

      if (USERS_DATA['active'] == "0")
      {
        $('#lblactive').hide();
        $('#lblactivenot').show();
      }
      else
      {
        $('#lblactive').show();
        $('#lblactivenot').hide();
      }

    }  

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
              data : { '_token' : '{{ csrf_token() }}', 'user_id' : USERS_DATA['id']},
              success: function(record)
              {
                 //if success reload ajax table
                    $('#tblbody_record').empty();
                    var data = "";
                    for ( var i = 0; i < record.length; i ++ ){
                        var row = "<tr>";
                        var flag = "<td>Not Flagged</td>";
                        var verify = "<td>Not Verified</td>";
                        var activity = "<td>Not Active</td>"

                        if ( record[i]['flag'] == "1" )
                          flag = "<td style='color:red'>Flagged</td>"
                        if ( record[i]['activity'] == "1" )
                          activity = "<td style='color:green'>Activitied</td>"

                        if ( record[i]['verify'] == "1" )
                          verify = "<td style='color:blue'>Verified</td>"
                        else if (record[i]['verify'] == "2" )
                          verify = "<td style='color:red'>Under Review</td>"
                        else if (record[i]['verify'] == "3")
                          verify = "<td style='color:red'>Pending Appeal</td>"
                          activity = "<td style='color:green'>Active</td>"
                        if ( record[i]['appeal'] == "" || record[i]['appeal'] == "NULL" )
                          row += "<td>"+record[i]['date']+"</td><td>"+record[i]['offense_id']+"</td><td>"+record[i]['server_id']+"</td><td>"+record[i]['server_name']+"</td><td>"+record[i]['offense']+"</td><td>"+record[i]['punis']+"</td>"+verify+"<td><button value='"+record[i]['id']+"' class='btn btn-sm btn-success' onclick='appeal(this)' ><i class='glyphicon glyphicon-pencil'></i>Appeal</button></td>"                          
                        else
                          row += "<td>"+record[i]['date']+"</td><td>"+record[i]['offense_id']+"</td><td>"+record[i]['server_id']+"</td><td>"+record[i]['server_name']+"</td><td>"+record[i]['offense']+"</td><td>"+record[i]['punis']+"</td>"+verify+"<td></td>"

                        row += "</tr>";
                        data += row;
                    }
                    $('#tblbody_record').append(data);
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
    }

    var button_ele;

    function appeal(element)
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
              button_ele = element;
              $('#record_id').val(data[0]['id']);
              $('#record_userid').val(data[0]['user_id']);
              $('#app_offenseId').val(data[0]['offense_id']);
              $('#app_serverId').val(data[0]['server_id']);
              $('#app_serverName').val(data[0]['server_name']);
              $('#app_offense').val(data[0]['offense']);
              $('#app_punishment').val(data[0]['punis']);
              $('#app_regId').val(USERS_DATA['reg_id']);

              $('#modal_appeal').modal('show');
              $('.modal-title').text('Appeal Record Form'); 

         },
         error: function (jqXHR, textStatus, errorThrown)
         {
          alert('Error adding / update data');
        }
        });


    }

    $('#btnAddrec').on('click', function(event){
      // add_record();
      table_reload();  
    });

   
    function add_record()
    {
      $('#modal_form').modal('show');
      $('.modal-title').text('Add Record');
    }

    function send()
    {
        $.ajax({
        url : '/ajax_record_appeal',
        type: "POST",
        data: $('#form_appeal').serialize(),
        dataType: "JSON",
        success: function(data)
        {
               //if success close modal and reload ajax table
               $(button_ele).remove();
               $('#modal_appeal').modal('hide');

               swal(
                'Record Appealed!',
                'Sent appealed so you will receive result soon from administrator.',
                'success'
                )
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
              alert('Error adding / update data');
            }
          });
    }     

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
                  <label class="col-form-label col-md-4">Sever ID : </label>                
                  <input style="font-size: 13px" id="txtUname" name="txtUname" placeholder="Sever ID" class="form-control col-md-8" type="text">
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
                  <select style="font-size: 15px;" id="cmbPunis" name="cmbPunis" class="form-control col-md-8">
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

  <div class="modal fade" id="modal_appeal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Appeal Record Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 10px;">
          <form action="#" id="form_appeal" style="font-size: 14px">
            <input type="hidden" value="" name="record_id" id="record_id" /> 
            <input type="hidden" value="" name="record_userid" id="record_userid" />
            <input type="hidden" value="" name="button_element" id="button_element" />
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense ID : </label>                
                  <input style="font-size: 13px" id="app_offenseId" name="app_offenseId" placeholder="Offense ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Sever ID : </label>                
                  <input style="font-size: 13px" id="app_serverId" name="app_serverId" placeholder="Sever ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Server Name : </label>                
                  <input style="font-size: 13px" id="app_serverName" name="app_serverName" placeholder="Server Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Offense : </label>                
                  <input style="font-size: 13px" id="app_offense" name="app_offense" placeholder="Offense" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Punishment : </label>                
                  <input style="font-size: 13px" id="app_punishment" name="app_punishment" placeholder="Punishment" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Why It should be appealed : </label> 
                  <textarea style="font-size: 13px" id="app_whyappealed" name="app_whyappealed" placeholder="Date of offense" class="form-control col-md-8" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Appealed by : </label>                
                  <input style="font-size: 13px" id="app_regId" name="app_regId" placeholder="Registration ID" class="form-control col-md-8" type="text">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="send()" class="btn btn-primary" style="display: block">Submit</button>
          <button type="button" id="btnUpdate" onclick="update()" class="btn btn-primary" style="display: none">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>
@endsection
