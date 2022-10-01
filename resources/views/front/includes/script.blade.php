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
    <script src="{{asset('/')}}assets/js/app.min.js" type="text/javascript"></script>
  <script src="{{asset('/')}}assets/js/all.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('/')}}assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>

  <script src="{{asset('/')}}assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

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
        url: '{{url('/get-course-code-note')}}',
        data:{id: semester},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option value="-"> -- Select Course Code -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.code+'"> '+value.code+'</option>';
          });
          $('#code').empty().append(option);

        },error:function(e){
          console.log(e);
        }
      })
    })
  </script>
    {{--Course Code--}}
    <script>
    $(document).on('change','#semesters',function () {
      var semester = $(this).val();
      $.ajax({
        method: 'GET',
        url: '{{url('/get-code-note')}}',
        data:{id: semester},
        dataType:'json',
        success:function (res) {
          var option = '';
          option += '<option value="-"> -- Select Course Code -- </option>';
          $.each(res ,function (key, value) {
            option += '<option value="'+value.code+'"> '+value.code+'</option>';
          });
          $('#codes').empty().append(option);

        },error:function(e){
          console.log(e);
        }
      })
    })

  </script>
  <script>
    function minmax(value, min, max)
    {
      if(parseInt(value) < min || isNaN(parseInt(value)))
        return min;
      else if(parseInt(value) > max)
        return max;
      else return value;
    }
  </script>