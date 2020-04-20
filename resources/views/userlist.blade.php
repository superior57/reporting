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
            <div class="card" style="border:0px;">
                <div class="card-header" style="display: none;">
                </div>
                <div class="card-body" style="padding-top: 50px;">                  
                  <div class="row" style="padding: 10px; text-align: right;">  
                    <label class="col-md-2">ID : &nbsp</label>                  
                    <input style="font-size: 13px" id="search_reg_id" name="search_reg_id" placeholder="ID" class="form-control col-md-3" type="text">&nbsp
                    <label class="col-md-2">Email : &nbsp</label>
                    <input style="font-size: 13px" id="search_email" name="search_email" placeholder="Email" class="form-control col-md-4" type="text">&nbsp                       
                  </div>
                  <table id="tbl_users" class="table table-dark table-hover" style="border-radius: 0 !important; text-align: center; border-radius: 10px; opacity: 1;">
                                <thead>
                                  <th>No</th>
                                  <th>Name</th>
                                  <th>Reg#</th>
                                  <th>D.O.B</th>
                                  <th>Email Address</th>
                                  <th>Steam</th>
                                  <th>Five M User</th>
                                  <th>Active</th> 
                                  <th>Flag</th> 
                                  <th>Status</th>
                                  <th>Authentication</th>        
                                  <th>Action</th>                           
                                </thead>      
                                <tbody id="tbl_body">
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>                  
                            </table>
                </div>      <!---  card-body end  --->
                <div class="card-footer table-responsive" style="text-align: center; height: 500px; display: none;">
                  
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
                $('#ul_search').attr('style', "display:block");
                $('#ul_userlist').attr('style', "display:block; font-weight: bold;");
                $('#ul_users').attr('style', "display:block");
                $('#ul_ctrlpanel').attr('style', "display:block");
            }
            else if (authority == "Technician")
            {
              $('#ul_userlist').attr('style', "display:block; font-weight: bold;");
              $('#ul_search').attr('style', "display:block");
            }

            $('#ul_home').attr('style', "display:block");

        userdata_reload();    
        table_reload();   
    });  

    $("#search_reg_id").on("keyup", function() {
      var value = $(this).val().toLowerCase();

      $("#tbl_body tr").filter(function() {
        $(this).closest('tr').toggle($(this).children().eq(2).text().toLowerCase().indexOf(value) > -1);
      });

    });

    $("#search_email").on("keyup", function() {
      var value = $(this).val().toLowerCase();

      $("#tbl_body tr").filter(function() {
        $(this).closest('tr').toggle($(this).children().eq(4).text().toLowerCase().indexOf(value) > -1);
      });
    });

    function userdata_reload()
    {
      // console.log(USERS_DATA['name']);
      // $('#txtName').val(USERS_DATA['name']);
      // $('#txtVerifyId').val(USERS_DATA['reg_id']);
      // $('#txtSteamId').val(USERS_DATA['steam']);
      // $('#txtDisId').val(USERS_DATA['dis']);
      // $('#txtFiveId').val(USERS_DATA['five']);
      // $('#txtEmail').val(USERS_DATA['email']);
      // $('#txtAge').val(USERS_DATA['age']);      
    }  

    function table_reload()
    {

       $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
         });
         $.ajax({
              url : '/ajax_get_userlist',
              type: "GET",
              dataType: "JSON",
              data : { '_token' : '{{ csrf_token() }}'},
              success: function(users)
              {
                 //if success reload ajax table
                    
                    $('#tbl_body').empty();
                    var data = "";
                    for ( var i = 0; i < users.length; i ++ ){

                        // if (users[i]['authority'] == "Administrator")
                        //   continue;
                        var row = "<tr>";
                        var no = i +1;
                        var flag = "<td>Not Flagged</td>";
                        var verify = "<td>Not Verified</td>";
                        var activity = "<td>Not Active</td>"

                        if ( users[i]['flag'] == "1" )
                          flag = "<td style='color:red'>Flagged</td>"
                        if ( users[i]['verify'] == "1" )
                          verify = "<td style='color:blue'>Verified</td>"
                        if ( users[i]['active'] == "1" )
                          activity = "<td style='color:green'>Active</td>"

                        row += "<td>"+no+"</td><td>"+users[i]['name']+"</td><td>"+users[i]['reg_id']+"</td><td>"+users[i]['age']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['steam']+"</td><td>"+users[i]['five']+"</td>"+activity+""+flag+""+verify+"<td>"+users[i]['authority']+"</td><td><button value='"+users[i]['id']+"' class='btn btn-sm btn-success' onclick='edit_user(this)' ><i class='glyphicon glyphicon-pencil'></i>Edit</button>&nbsp<button value='"+users[i]['id']+"' id=''  onclick='delete_user(this)' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-traf'></i>Delete</button></td>"
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

    function add_user()
    {
        $('#btnSave').attr('style', "display:block");
        $('#btnUpdate').attr('style', "display:none");
        $('#modal_form').modal('show');
        $('.modal-title').text('Add User');

    }
    function edit_user(element)
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
              $('#edit_name').val(data[0]['name']);
              $('#edit_regid').val(data[0]['reg_id']);
              $('#edit_birth').val(data[0]['age']);
              $('#edit_steam').val(data[0]['steam']);
              $('#edit_email').val(data[0]['email']);
              $('#edit_five').val(data[0]['five']);
              $('#cmbActivity').val(data[0]['active']);
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
        url : '/ajax_user_seted',
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

    function delete_user(element)
    {
        var select_id = $(element).attr('value');
        console.log(select_id);
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
      url : '/ajaxDelete',
      type: "POST",
      dataType: "JSON",
      data : { '_token' : '{{ csrf_token() }}', 'id' : select_id},
      success: function(data)
      {

               //if success reload ajax table
               $('#modal_form').modal('hide');
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
<div class="modal fade" id="modal_record" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Settings</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body" style="margin-right: 20px;">
          <form action="#" id="record_set" style="font-size: 14px">
            <input type="hidden" value="" name="id" id="id" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body" style="text-align: right;">
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Name : </label>                
                  <input style="font-size: 13px" id="edit_name" name="edit_name" placeholder="Name" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Registration ID # : </label>                
                  <input style="font-size: 13px" id="edit_regid" name="edit_regid" placeholder="Registration ID #" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">D.O.B : </label>                
                  <input name="edit_birth" id="edit_birth" placeholder="D.O.B" class="form-control datepicker col-md-8" type="date">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Email Address : </label>                
                  <input style="font-size: 13px" id="edit_email" name="edit_email" placeholder="Email Address" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Steam ID : </label>                
                  <input style="font-size: 13px" id="edit_steam" name="edit_steam" placeholder="Steam ID" class="form-control col-md-8" type="text">
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Five M User : </label>                
                  <input style="font-size: 13px" id="edit_five" name="edit_five" placeholder="Five M User" class="form-control col-md-8" type="text">
                </div>
              </div>
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
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <label class="col-form-label col-md-4">Authority : </label>                
                  <select style="font-size: 15px;" id="cmbAuth" name="cmbAuth" class="form-control col-md-8">
                    <option value="RegularUser"> RegularUser</option>
                    <option value="ServerAdmin"> ServerAdmin</option>
                    <option value="Technician"> Technician</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer" style="">
          <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="display: block">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div><!-- /.modal-dialog -->
  </div>
@endsection
