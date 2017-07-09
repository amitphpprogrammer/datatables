<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Home | E-Shopper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

    <style>
    #nameColumn,#positionColumn,#officeColumn,#ageColumn,#start_dateColumn,#salaryColumn,.nameView,.positionView,.officeView,.ageView,.start_dateView,.salaryView{
        display: none;
    }
    </style>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
</head><!--/head-->

<body>


<section>
<div class="container">
@yield('content')
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    })
    $(document).ready(function(){

        var positionView = true;
        $('#example').dataTable({
        "autoWidth": false/*,
        "columnDefs": [{ "visible": false, "targets": 0, className: "dt-left" },{ "visible": false, "targets": 1, className: "dt-left" }]*/
        });

        var user = "amit"

        // Load Columns View
        $.ajax({
            type:'post',
            data:{user:user},
            url:'getColumnViews',
            dataType:'json',
            success:function(resp){
                $.each(resp, function(i, item) {
                    //alert(item);
                    if(item=='N'){ $("."+i+"View").hide(); $("#"+i+"Column").show(); }else{ $("."+i+"View").show(); $("#"+i+"Column").hide(); }
                });

                /*if(resp.name=='N'){
                    $(".nameView").hide();
                    $("#nameColumn").show();
                }else if(resp.name=='Y'){
                    $(".nameView").show();
                    $("#nameColumn").hide();
                }*/


            },error:function(){
                alert("Error");
            }
        })

        // Show Name Column
        $(document).on('click','#nameColumn',function(){
            $(".nameView").show();
            $("#nameColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'name',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Name Column
        $(document).on('click','th.nameView',function(){
            $(".nameView").hide();
            $("#nameColumn").show();
            $.ajax({
                type:'post',
                data:{column:'name',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Show Position Column
        $(document).on('click','#positionColumn',function(){
            $(".positionView").show();
            $("#positionColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'position',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Position Column
        $(document).on('click','th.positionView',function(){
            $(".positionView").hide();
            $("#positionColumn").show();
            $.ajax({
                type:'post',
                data:{column:'position',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Show Office Column
        $(document).on('click','#officeColumn',function(){
            $(".officeView").show();
            $("#officeColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'office',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Office Column
        $(document).on('click','th.officeView',function(){
            $(".officeView").hide();
            $("#officeColumn").show();
            $.ajax({
                type:'post',
                data:{column:'office',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Show Age Column
        $(document).on('click','#ageColumn',function(){
            $(".ageView").show();
            $("#ageColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'age',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Age Column
        $(document).on('click','th.ageView',function(){
            $(".ageView").hide();
            $("#ageColumn").show();
            $.ajax({
                type:'post',
                data:{column:'age',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Show Start Date Column
        $(document).on('click','#start_dateColumn',function(){
            $(".start_dateView").show();
            $("#start_dateColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'start_date',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Start Date Column
        $(document).on('click','th.start_dateView',function(){
            $(".start_dateView").hide();
            $("#start_dateColumn").show();
            $.ajax({
                type:'post',
                data:{column:'start_date',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Show Salary Column
        $(document).on('click','#salaryColumn',function(){
            $(".salaryView").show();
            $("#salaryColumn").hide();
            $.ajax({
                type:'post',
                data:{column:'salary',view:'Y'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

        // Hide Salary Column
        $(document).on('click','th.salaryView',function(){
            $(".salaryView").hide();
            $("#salaryColumn").show();
            $.ajax({
                type:'post',
                data:{column:'salary',view:'N'},
                url:'updateColumnViews',
                success:function(resp){
                    //alert(resp);
                },error:function(){
                    //alert("Error");
                }
            })
        });

    });
</script>



</body>
</html>


