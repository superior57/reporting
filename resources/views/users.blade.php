@extends('layouts.app')

@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<div style="text-align: center; align-items: center;">
  <div class="row" >
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <h5>User Manage</h5>
    </div>
    <div class="col-md-3" style="margin-bottom: 10px;">
      <button id="btnAdduser" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-plus"></i>Add User</button> 
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table id="" class="table table-striped table-hover" border="1px" style="border-radius: 0 !important; text-align: center; border-radius: 10px; opacity: 1;"><thead><tr>
        <th>E-Verify Registration ID #</th>
        <th>Steam ID</th>
        <th>Discord ID</th>
        <th>Five M user ID</th>
        <th>Email</th>
        <th>Age</th>
        <th>Active</th>
        <th>Authority</th>
        <th>Action</th>
      </tr></thead><tbody id="tbl_body">      
      </tbody>
    </table>
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
                $('#ul_userlist').attr('style', "display:block;");      
                $('#ul_account').attr('style', "display:block");
                $('#ul_users').attr('style', "display:block;  font-weight: bold;");      
                $('#ul_ctrlpanel').attr('style', "display:block");    
            }
            $('#ui_home').attr('style', "display:block");
            
        var users = {!! json_encode($users) !!};  
        USERS_DATA = users;   
        table_reload();   
    });     

    $('#btnAdduser').on('click', function(event){
        add_user();
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
                        row += "<td>"+users[i]['ev']+"</td><td>"+users[i]['steam']+"</td><td>"+users[i]['dis']+"</td><td>"+users[i]['five']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['age']+"</td><td>"+users[i]['active']+"</td><td>"+users[i]['authority']+"</td><td><button value='"+users[i]['id']+"' class='btn btn-sm btn-success' onclick='edit_user(this)' ><i class='glyphicon glyphicon-pencil'></i>Edit</button>&nbsp<button value='"+users[i]['id']+"' id=''  onclick='delete_user(this)' class='btn btn-sm btn-danger'><i class='glyphicon glyphicon-traf'></i>Delete</button></td>"
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
        type: "POST",
        dataType: "JSON",
        data : { '_token' : '{{ csrf_token() }}', 'id' : id },
        success: function(data)
        {
               //if success close modal and reload ajax table
              $('input[name="txtName"]').val(data[0]['name']);
              $('input[name="txtEmail"]').val(data[0]['email']);
              $('input[name="cmbAuthority"]').val(data[0]['authority']);

              $('#btnSave').attr('style', "display:none");
              $('#btnUpdate').attr('style', "display:block");
              $('#modal_form').modal('show');
              $('.modal-title').text('Edit User');
               
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
        url : '/ajaxSave',
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
     

</script>
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Condition Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <form action="#" id="form" style="font-size: 13px">
            <input type="hidden" value="" name="id" id="id" /> 
            <input type="hidden" value="{{ csrf_token() }}" name="_token"/>     
            <div class="form-body">
              <div class="form-group">
                <label class="col-form-label">E-Verify Registration ID #</label>
                <label style="font-size: 13px" id="txtEv" name="txtEv" class="form-control"></label>      
              </div>
              <div class="form-group">
                <label class="col-form-label">Steam ID</label>                
                <input style="font-size: 13px" id="txtSteam" name="txtSteam" placeholder="Steam ID" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label">Discord ID</label>                
                <input style="font-size: 13px" id="txtDis" name="txtDis" placeholder="Discord ID" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label">Five M user ID</label>                
                <input style="font-size: 13px" id="txtFive" name="txtFive" placeholder="Five M user ID" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label">Email</label>
                  <input style="font-size: 13px" id="txtEmail" name="txtEmail" placeholder="Email" class="form-control" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label">Password</label>
                  <input style="font-size: 13px" id="txtPassword" name="txtPassword" placeholder="Password" class="form-control" type="password">
              </div> 
              <div class="form-group">
                <label class="col-form-label">Age</label>                
                <input style="font-size: 13px" id="txtAge" name="txtAge" placeholder="Age" class="form-control" type="text">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-8">
                    <label class="col-form-label">Authority : &nbsp</label>
                    <select style="font-size: 15px;" id="cmbAuthority" name="cmbAuthority">
                      <option value="Technician">Manager</option>
                      <option value="Admin">Admin</option>
                      <option value="Admin">Administrator</option>
                    </select>
                  </div><div class="col-md-4" style="top: 10px;">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="chbActive" id="chbActive">
                      {{ __('Active') }}  
                  </label>
                  </div>
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
@endsection
