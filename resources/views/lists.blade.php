<!DOCTYPE html>
<html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>

<title>Laravel DataTable Serverside with Ajax</title>
<style>
    .point{
        text-align: center;
    }
    th,td{
        text-align: center;
    }
</style>
</head>
<body>
    <div class="container">
      <br><br>
      <h2 class="point"><b>Laravel DataTable Serverside with Ajax.</b></h2><br><br>
        <div class="row">
            <table class="table table-striped table-hover" id="table-member">
                <thead>
                  <tr class="info">
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Telephone</th>
                    <th>Email</th>
                  </tr>
                </thead>
            </table>
        </div> 
    </div> 
</body>
</html>

<script>
    $(function(){
        var table = $('#table-member').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[10, 20, 30, 40], [10, 20, 30, 40]],
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "processing" : true,
            "serverSide" : true,
            "oLanguage": {
                "sProcessing": "กำลังดำเนินการ...",
                "sLengthMenu": "แสดง _MENU_ ข้อมูล ต่อหน้า",
                "sZeroRecords": "ไม่เจอข้อมูลที่ค้นหา",
                "sInfo": "แสดง _START_ ถึง _END_ ของ _TOTAL_ ข้อมูล",
                "sInfoEmpty": "แสดง 0 ถึง 0 ของ 0 ข้อมูล",
                "sInfoFiltered": "(จากเร็คคอร์ดทั้งหมด _MAX_ ข้อมูล)",
                "sSearch": "ค้นหา :",
                "aaSorting" :[[0,'desc']],
                "oPaginate": {
                "sFirst":    "หน้าแรก",
                "sPrevious": "ก่อนหน้า",
                "sNext":     "ถัดไป",
                "sLast":     "หน้าสุดท้าย"
                },
            },

            'columns': [
                {'data': 'id', 'orderable': true, 'class': 'text-center'},
                {'data': 'fullname', 'orderable': true, 'class': 'text-center'},
                {'data': 'telephone', 'orderable': true, 'class': 'text-center'},
                {'data': 'email', 'orderable': true, 'class': 'text-center'},
            ],
            'columnDefs': [{
                'targets': 'no-sort',
                'orderable': false,
            }],
                'ajax': {
                 'url': "{{ route("member.data") }}",
                 'type': 'POST',
                 'headers': {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                'data': function (data) {

                }
            },
        });
    });
</script>