@extends('layouts.app')

@section('content')
<div class="container">   
    <div class="row justify-content-center">
        <div class="col-md-12" >
            <div class="card" style="border:0px;">
                <div class="card-header" style="border:0px;"><div class="row" id="header">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 card-header-m"><label>Form Edit</label></div>
                            <div class="col-md-6 card-header-m"><input id="date" name="date" style="width: 100%; height: 30px; border: 0px;" class="date form-control" type="date" value="" ></div>
                        </div>                        
                    </div>
                    <div class="col-md-6" align="right"><p>
                        <button class="btn btn-sm btn-success card-header-m" id="btnSave"  style="width: 100px;">Save</button></p>
                        <button class="btn btn-sm btn-primary card-header-m" id="btnPrint" onclick='printok();' style="width: 100px;">Print</button> 
                    </div></div>
                </div>

                <div class="card-body"><form id="form_main">     
                    <input type="hidden" value="{{ csrf_token() }}" name="_token"/>                    
                    @guest
                    @else
                    <input type="hidden" value="{{ Auth::user()->email }}" name="user_email"/>
                    @endguest

                    <input type="hidden" value="" name="pc_no"/>
                    <input type="hidden" value="" name="pc_id"/>  

                    <input type="hidden" value="" name="editer_department"/>            
                    <input type="hidden" value="" name="editer_sla"/> 

                    <input type="hidden" value="" name="service_problem"/> 
                    <input type="hidden" value="" name="service_install"/>  

                    <input type="hidden" value="" name="set_registered"/>
                    <input type="hidden" value="" name="set_repaired"/>
                    <input type="hidden" value="" name="set_replaced"/>
                    <input type="hidden" value="" name="set_sendreference"/>
                    <input type="hidden" value="" name="set_kiv"/>
                    <input type="hidden" value="" name="set_jamin"/>

                    <input type="hidden" value="" name="info_hardware"/>
                    <input type="hidden" value="" name="info_softapp"/>
                    <input type="hidden" value="" name="modify_date"/>                    
                    <input type="hidden" value="" name="user_id"/>


                    <table id="tbl_form_id" name="tbl_form" style="border-spacing: 0px; margin-left: 2.55%; overflow-x: auto; border: 0px solid grey;">
                        <tbody>
                            <tr >
                                <td style="border: 1px solid ;">NO RUJUKAN &nbsp</td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_1" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_2" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_3" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_4" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_5" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border: 1px solid ;"><input type="text" id="pc_no_6" style="width: 50px; border: 0px;" maxlength="10"></td>
                            </tr><tr>
                                <td style="border-left: 1px solid ;">PC ID</td>
                                <td style="border-left: 1px solid ;"><input type="text" id="pc_id_1" style="width: 50px; border: 0px;" maxlength="10"> </td>
                                <td style="border-left: 1px solid ;"><input type="text" id="pc_id_2" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border-left: 1px solid ;"><input type="text" id="pc_id_3" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border-left: 1px solid ;"><input type="text" id="pc_id_4" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border-left: 1px solid ;"><input type="text" id="pc_id_5" style="width: 50px; border: 0px;" maxlength="10"></td>
                                <td style="border-left: 1px solid ; border-right: 1px solid ;"><input type="text" id="pc_id_6" style="width: 50px; border: 0px;" maxlength="10"></td>
                            </tr>
                        </tbody>                      
                    </table><table id="tbl_form_main" name="tbl_form" border="1px" width="95%" align="center">
                        <tr>
                            <td align="center"><b>A. MAKLUMAT PENGGUNA</b></td>                            
                        </tr><tr>
                            <td height="100px">
                                <div class="row" style="margin-left: 5px; margin-top: 5px">
                                    <label style="width: 60px"> NAMA :</label><div class="col-md-2">
                                    <div ><input type="text" name="editer_name" style="border-top: 0px; border-left: 0px; border-right: 0px;"> </div></div>
                                </div><div class="row" style="margin-left: 5px; width: 250px;">
                                    <label style="width: 60px"> EXT :</label>    <div class="col-md-2">
                                    <div ><input type="text" name="editer_ext" style="border-top: 0px; border-left: 0px; border-right: 0px;"> </div></div>
                                </div><div class="row" style="margin-left: 5px; ">
                                    <label >JABATAN :</label>
                                </div><div class="row" style="margin-left: 5px; ">
                                    <div class="col-md-2"><label>
                                            <input type="radio" name="radio_department" value="DB/SU"> &nbsp DB/SU
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JPKA"> &nbsp JPKA
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JPU"> &nbsp JPU
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JTM"> &nbsp JTM
                                        </label>
                                    </div><div class="col-md-2"><label>
                                            <input type="radio" name="radio_department" value="JPPH"> &nbsp JPPH
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JKP"> &nbsp JKP
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JPB"> &nbsp JPB
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JW"> &nbsp JW
                                        </label>
                                    </div><div class="col-md-2"><label>
                                            <input type="radio" name="radio_department" value="JPPKP"> &nbsp JPPKP
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JL"> &nbsp JL
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="OSC"> &nbsp OSC
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JKB"> &nbsp JKB
                                        </label>
                                    </div><div class="col-md-2"><label>
                                            <input type="radio" name="radio_department" value="JP"> &nbsp JP
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JPAS"> &nbsp JPAS
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JK"> &nbsp JK
                                        </label><br /><label>
                                            <input type="radio" name="radio_department" value="JIKL"> &nbsp JIKL
                                        </label>
                                    </div><div class="col-md-4" style="margin-top: 0px; margin-right: 0px" >
                                        <table width="100%" style="border: 1px solid grey;">
                                            <tr>
                                                <td style="border-bottom: 1px solid grey;"><label style="margin-left: 5px">ISO 9001:2008</label></td>
                                            </tr><tr>
                                                <td style="border-bottom: 1px solid grey;"><label style="margin-left: 5px">PERINGKAT PERKHIDMATAN</label></td>
                                            </tr><tr>
                                                <td><label style="margin-left: 5px">
                                                        <input type="radio" name="radio_sla" value="SLA 1 (15 MINIT)"> &nbsp SLA 1 (15 MINIT)
                                                    </label><br /><label style="margin-left: 5px">
                                                        <input type="radio" name="radio_sla" value="SLA 2 (1 JAM)"> &nbsp SLA 2 (1 JAM)
                                                    </label><br /><label style="margin-left: 5px">
                                                        <input type="radio" name="radio_sla" value="SLA 3 (24 JAM)"> &nbsp SLA 3 (24 JAM)
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </td>
                        </tr><tr>
                            <td align="center"><b>PERKHIDMATAN</b></td>
                        </tr><tr>
                            <td align="center"><div class="row">
                                <div class="col-md-4" style="border-right: 1px solid grey;" align="left">
                                    <div style="border-bottom: 1px solid grey; margin-left: 10px; margin-right: 0px" align="center"><label>MASALAH</label></div>
                                    <label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_problem_1" value="PERKAKASAN"> &nbsp PERKAKASAN
                                    </label><br /><label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_problem_2" value="PERISIAN/APLIKASI"> &nbsp PERISIAN/APLIKASI
                                    </label><br /><label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_problem_3" value="RANGKAIAN"> &nbsp RANGKAIAN
                                    </label><br /><label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_problem_4" value="VIRUS"> &nbsp VIRUS
                                    </label><br /><label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_problem_5" value="INTRANET/EMAIL"> &nbsp INTRANET/EMAIL
                                    </label>
                                </div><div class="col-md-4" style="border-right: 1px solid grey;" align="left">
                                    <div style="border-bottom: 1px solid grey; margin-left: 0px; margin-right: 0px" align="center"><label>PEMASANGAN</label></div>
                                    <label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_install_1" value="PERISIAN/APLIKASI"> &nbsp PERISIAN/APLIKASI
                                    </label><br /><label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_install_2" value="PERKAKASAN"> &nbsp PERKAKASAN
                                    </label>
                                </div><div class="col-md-4" style="border-right: 0px solid grey;">
                                    <div align="left">
                                        <div style="border-bottom: 1px solid grey; margin-left: 0px; margin-right: 10px" align="center"><label>HAL-HAL LAIN</label></div>
                                        <div>
                                            <label>NYATAKAN : </label>
                                            <textarea name="service_other" style="width: 95%; margin-right: 10px; border: 0px;" rows="5" placeholder=""></textarea>
                                        </div>
                                </div>
                            </div>
                            </td>
                        </tr><tr>
                            <td >
                                <div class="row">
                                    <div class="col-md-7" style="border-right: 1px solid grey; margin-left: 5px; width: 100%;" align="left">
                                    <div ><label>PERIHAL :</label>
                                    <textarea name="service_company" style="width: 100%; margin-right: 0px; border: 0px" rows="4" placeholder=""></textarea>
                                    </div></div>
                                    <div class="col-md-4" style="margin-bottom: 0px; margin-left: 5px;" align="left">
                                        <div ><label>TANDATANGAN PENGGUNA :</label></div>
                                        <input type="text" name="service_usersign" id="txtSign" style="border: 0px; font-size: 16px; height: 40px; width: 95%"><br />
                                    <div class="row" style="margin-top: 5%; margin-left: 0px;">
                                        <label>TARIKH :</label>&nbsp&nbsp<div style="width: 75%;">
                                        <input name="service_usersign_date" name="" style="width: 100%; border: 0px;" class="date form-control" type="date">
                                        </div></div>                                    
                                </div>                                
                            </td>
                        </tr><tr>
                            <td align="center"><b>B. TINDAKAN/PENYELESAIAN</b></td>
                        </tr><tr>
                            <td align="left" style="vertical-align: middle; margin-left: 0px;">
                                <div class="row" style="margin-left: 0px; width:100%">
                                    <div class="col-md-6" style="border-right: 1px solid grey; margin-left: 0px;">
                                        <div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-6" style="border-right: 1px solid grey;">BERDAFTAR</div>
                                            <div class="col-md-3" style="border-right: 1px solid grey;" align="center">
                                                <label style="margin-left: 0px">
                                                    <input type="radio" name="radio_is_registered" value="1"> &nbsp Y
                                                </label>
                                            </div>
                                            <div class="col-md-3" align="center">
                                                <label style="margin-left: 0px">
                                                    <input type="radio" name="radio_is_registered" value="0"> &nbsp T
                                                </label>
                                            </div>
                                        </div><div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-9" style="border-right: 1px solid grey;">TELAH DIPERBAIKI</div>
                                            <div class="col-md-3" style="border-right: 0px solid grey;" align="center">
                                                <input type="checkbox" id="chb_repaired" value="1">
                                            </div>
                                        </div><div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-9" style="border-right: 1px solid grey;">TELAH DIGANTI</div>
                                            <div class="col-md-3" style="border-right: 0px solid grey;" align="center">
                                                <input type="checkbox" id="chb_replaced" value="1">
                                            </div>
                                        </div><div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-9" style="border-right: 1px solid grey;">HANTAR KEPADA PEMBEKAL/RUJUK KONSULTAN</div>
                                            <div class="col-md-3" style="border-right: 0px solid grey;" align="center">
                                                <input type="checkbox" id="chb_sendReference" value="1">
                                            </div>
                                        </div><div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-9" style="border-right: 1px solid grey;">KIV</div>
                                            <div class="col-md-3" style="border-right: 0px solid grey;" align="center">
                                                <input type="checkbox" id="chb_kiv" value="1">
                                            </div>
                                        </div><div class="row" style="border-bottom: 0px solid grey;">
                                            <div class="col-md-6" style="border-right: 1px solid grey;">TARIKH SELESAI KIV</div>
                                            <div class="col-md-6" style="border-right: 0px solid grey;" align="center">
                                                <input name="set_kiv_date" style="width: 100%; border: 0px; height: 30px;" class="date form-control" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="border-right: 0px solid grey; margin-left: 0px;">
                                        <div class="row" style="border-bottom: 1px solid grey;">
                                            <div class="col-md-6" style="border-right: 1px solid grey;">DALAM JAMINAN</div>
                                            <div class="col-md-3" style="border-right: 1px solid grey;" align="center">
                                                <label style="margin-left: 0px">
                                                    <input type="radio" name="radio_is_jamin" value="1"> &nbsp Y
                                                </label>
                                            </div>
                                            <div class="col-md-3" align="center">
                                                <label style="margin-left: 0px">
                                                    <input type="radio" name="radio_is_jamin" value="0"> &nbsp T
                                                </label>
                                            </div>
                                        </div><div class="row" style="border-bottom: 0px solid grey;">
                                            <div class="col-md-6" style="border-right: 0px solid grey;">CATATAN : </div>
                                            <textarea name="set_note" style="width: 95%; margin-left: 10px; border: 0px" rows="4" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr><tr>
                            <td align="left" style="vertical-align: middle; margin-left: 0px;">
                                <div class="row" style="margin-left: 0px; width:100%">
                                    <div class="col-md-6" style="border-right: 1px solid grey; margin-left: 0px;">
                                        <label >TANDATANGAN : </label>
                                        <textarea name="set_signatrue" style="width: 95%; margin-left: 10px; border: 0px" rows="4" placeholder=""></textarea>
                                        <div class="row" style="margin-left: 5px;margin-bottom: 5px;"><label >TARIKH : </label>&nbsp&nbsp
                                        <input name="set_signatrue_date" style="width: 50%; border: 0px; height: 30px;" class="date form-control" type="date"></div>
                                    </div> <div class="col-md-6" style="border-right: 0px solid grey; margin-left: 0px;">
                                        <label >TANDATANGAN PENGGUNA SELEPAS PENYELESAIAN : </label>
                                        <textarea name="set_usersignatrue" style="width: 95%; margin-left: 10px; border: 0px" rows="4" placeholder=""></textarea>
                                        <div class="row" style="margin-left: 5px;margin-bottom: 5px;"><label >TARIKH : </label>&nbsp&nbsp
                                        <input name="set_usersignatrue_date" style="width: 50%; border: 0px; height: 30px;" class="date form-control" type="date"></div>
                                    </div>                                    
                                </div>
                            </td>
                        </tr><tr>
                            <td align="center"><b>C. UNTUK KEGUNAAN JABATAN TEKNOLOGI MAKLUMAT</b></td>
                        </tr><tr>
                            <td align="left" style="vertical-align: middle; margin-left: 0px;">
                                <div class="row" style="margin-left: 0px; width:100%">
                                    <div class="col-md-6" style="border-right: 1px solid grey; margin-left: 0px;">
                                        <label style="margin-left: 15px">
                                        <input type="checkbox" id="chb_hardware" value="1"> &nbsp PERKAKASAN
                                        </label><br /><label style="margin-left: 15px">
                                            <input type="checkbox" id="chb_soft" value="2"> &nbsp PERISIAN/APLIKASI
                                        </label>
                                    </div> <div class="col-md-6" style="border-right: 0px solid grey; margin-left: 0px;">
                                        <label >TANDATANGAN PETUGAS : </label>
                                        <textarea name="info_signatrue_officer" style="width: 95%; margin-left: 10px; border: 0px" rows="2" placeholder=""></textarea>
                                        <div class="row" style="margin-left: 5px;margin-bottom: 5px;"><label >TARIKH : </label>&nbsp&nbsp
                                        <input name="info_signatrue_officer_date" style="width: 50%; border: 0px; height: 30px;" class="date form-control" type="date"></div>
                                    </div>                                    
                                </div>
                            </td>
                        </tr>
                    </table>                
                </form></div>      <!---  card-body end  --->
            </div>  <!---  card end  --->
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
            var authority = '{{ Auth::user()->authority }}';
            if (authority == "Admin") {
                $('#ul_pcview').attr('style', "display:block");
                $('#ul_users').attr('style', "display:block");
            }
            $('#ul_formedit').attr('style', "display:block");
            
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            // console.log(today);
            $('.date').val(today);

            $('#btnSave').on('click', function(event){

                settingValues();
                var valid = is_valid();
                if ( valid != "ok" ) {
                    toastr.options = {
                      "debug": false,
                      "positionClass": "toast-top-center",
                      "onclick": null,
                      "fadeIn": 300,
                      "fadeOut": 1000,
                      "timeOut": 5000,
                      "extendedTimeOut": 1000
                        }
                    toastr.warning('Warning ! \"'+valid+'\" is required.');
                    return;
                }
                var url = "/ajax_form";
                var id = 3;
                $.ajax({
                    url : url,
                    type : 'POST',
                    data : $('#form_main').serialize(),
                    success : function (response) {
                        swal(
                            'Good job!',
                            'Data has been save!',
                            'success'
                            )
                    },
                    error : function (jqXHR, textStatus, errorThrown){
                        alert('error! problem in controller callback');
                    }
                });              
            });
        });

        function settingValues()
        {

            // pc_no & pc_id value setting...
            $("input[name='pc_no']").val(get_pc_value("pc_no", 6));
            $("input[name='pc_id']").val(get_pc_value("pc_id", 6));   
            $("input[name='service_problem']").val(get_chb_value("chb_problem", 5));   
            $("input[name='service_install']").val(get_chb_value("chb_install", 2));   
            $("input[name='editer_department']").val($("input[name='radio_department']:checked").val());   
            $("input[name='editer_sla']").val($("input[name='radio_sla']:checked").val());
            $("input[name='set_registered']").val($("input[name='radio_is_registered']:checked").val());  
            $("input[name='set_repaired']").val( document.getElementById('chb_repaired').checked );  
            $("input[name='set_replaced']").val( document.getElementById('chb_replaced').checked );  
            $("input[name='set_sendreference']").val( document.getElementById('chb_sendReference').checked );  
            $("input[name='set_kiv']").val( document.getElementById('chb_kiv').checked );  
            $("input[name='set_jamin']").val($("input[name='radio_is_jamin']:checked").val());
            $("input[name='modify_date']").val($('#date').val());

            $("input[name='user_id']").val( '{{ Auth::user()->name }}' );
        }

        function get_pc_value(val, n)
        {
            var result = "";
            for( var i = 1; i <= n; i ++ ){                
                if ( i != n )
                {
                    result += $("#"+val+"_"+i+"").val();
                    if ($("#"+val+"_"+i+"").val() != "") {
                       result += "-";
                    }                    
                }
                else
                    result += $("#"+val+"_"+i+"").val();
            }
            // var end = result.length ;
            if ( result[result.length-1] == "-")
                result = result.substring(0, result.length-1);
            // console.log(result);
            return result;
        }   
        function get_chb_value(val, n)
        {
            var result = "";
            for( var i = 1; i <= n; i ++ ){                
                if ( i != n )
                {
                    result += $("#"+val+"_"+i+":checked").val();
                    if ( $("#"+val+"_"+i+":checked").val() != "" ) {
                        result += "-";
                    }
                }
                else
                    result += $("#"+val+"_"+i+":checked").val();
            }
            result = result.replace(/undefined/g, '');
            if ( result[result.length-1] == "-" )
                result = result.substring(0, result.length-1);
            return result;
        }     
        function is_valid()
        {
            if ( $("input[name='pc_no']").val() == "" )
                return "No PC";
            if ( $("input[name='pc_id']").val() == "" )
                return "PC ID";
            else
                return "ok";
        }
        function printok()
        {
            $('.card-header-m').attr('style', 'display:none;');   
            $('.card-header').attr('style', 'height:70px;border-bottom:0px;'); 
            print();  
            $('.card-header-m').attr('style', 'display:block;width:100px;');  
            $('.card-header').attr('style', ''); 

        }
</script>
@endsection
