@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h1 class="col-md-4">Welcome !</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <h4 class="col-md-11">Message from Administrator:</h4>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h5 id="adminText">                        
                    </h5>                    
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
        $(document).ready(function(){
        var authority = '{{ Auth::user()->authority }}';
            if (authority == "Administrator") {
                $('#ul_search').attr('style', "display:block;");
                $('#ul_userlist').attr('style', "display:block;");
                $('#ul_users').attr('style', "display:block");
                $('#ul_search').attr('style', "display:block");
                $('#ul_ctrlpanel').attr('style', "display:block");
            }
            else if (authority == "ServerAdmin")
            {  
              $('#ul_server_account').attr('style', "display:block");
              $('#ul_search').attr('style', "display:block;");
              $('#ul_users').attr('style', "display:block;");                          
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
            $('#ul_home').attr('style', "display:block; font-weight: bold;"); 
            showText();
    }); 

        function showText()
        {
            $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                 });
                 $.ajax({
                      url : '/ajax_get_post',
                      type: "GET",
                      dataType: "JSON",
                      data : { '_token' : '{{ csrf_token() }}'},
                      success: function(data)
                      {
                         //if success reload ajax table
                         console.log(data[0]['text']);
                         $('#adminText').append(data[0]['text']);
  
                     },
                     error: function (jqXHR, textStatus, errorThrown)
                     {
                      alert(errorThrown);
                        }
                  });
        }

</script>
@endsection
