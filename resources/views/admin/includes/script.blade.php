  <!-- CORE PLUGINS-->
  <script src="{{asset('/')}}assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('/')}}assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{asset('/')}}assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('/')}}assets/js/app.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
 
  <script src="{{asset('/')}}assets/js/all.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('/')}}assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
  <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": '{{asset('/')}}assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
  {{--Course Code--}}
  <script>
    $(document).on('change','#semester',function () {
       var semester = $(this).val();
       $.ajax({
         method: 'GET',
         url: '{{url('/get-course-code-by-name')}}',
         data:{id: semester},
         dataType:'json',
         success:function (res) {
           var option = '';
              option += '<option value="-"> -- Select Course Code -- </option>';
              $.each(res ,function (key, value) {
                option += '<option value="'+value.code+'"> '+value.code+'</option>';
           });
           $('#code').empty().append(option);
           $('#code1').empty().append(option);
           $('#code2').empty().append(option);
           $('#code3').empty().append(option);
           $('#code4').empty().append(option);
           $('#code5').empty().append(option);
         },error:function(e){
            console.log(e);
         }
       })
    })

  </script>

{{--Course name--}}
  <script>
    $(document).on('change','#code',function () {
      var code = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-course-name-by-name')}}',
        data:{id: code},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Course Name -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.course_name+'"> '+value.course_name+'</option>';
          });
          $('#courseName').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
  {{--Semester Routine --}}
  <script>
    $(document).on('change','#batch',function () {
      var batch = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-semester-in-routine')}}',
        data:{id: batch},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Semester -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.semester+'"> '+value.semester+'</option>';
          });
          $('#semester').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>

  {{--Session--}}
  <script>
    $(document).on('change','#batch',function () {
      var batch = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-session-by-name')}}',
        data:{id: batch},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Session -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.session+'"> '+value.session+'</option>';
          });
          $('#session').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
  {{--Semester Student --}}
  <script>
    $(document).on('change','#batch',function () {
      var batch = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-semester-by-name')}}',
        data:{id: batch},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Semester -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.semester+'"> '+value.semester+'</option>';
          });
          $('#semester').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
{{--Guide Teacher--}}
  <script>
    $(document).on('change','#g_t_id',function () {
      var g_t_id = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-guide-teacher-by-id')}}',
        data:{id: g_t_id},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Guide Teacher -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.initial+'"> '+value.initial+'</option>';
          });
          $('#teacher').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
  <script>
    $(document).on('change','#ag_t_id',function () {
      var ag_t_id = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-asst-guide-teacher-by-id')}}',
        data:{id: ag_t_id},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Assistant Guide Teacher -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.initial+'"> '+value.initial+'</option>';
          });
          $('#asst_teacher').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
 {{--Course teacher--}}
  <script>
    $(document).on('change','#t_id',function () {
      var t_id = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-course-teacher-by-id')}}',
        data:{id: t_id},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option> -- Select Teacher -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.initial+'"> '+value.initial+'</option>';
          });
          $('#teacher').empty().append(option);
        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>