<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ชื่อ-สกุล</th>
            <th scope="col" style="width: 150px;">Action</th>
        </tr>
    </thead>
    <tbody id="datas">
        @foreach ($students as $inx => $student)
        <tr>
        <th scope="row">{{ $inx + 1 }}</th>
        <td>{{ $student->init_name . $student->first_name . '  ' . 
            $student->last_name }}</td>
        <td style="width: 150px;" class="text-center">
            <a href="#" onClick="editData({{ $student->id }})"; 
                class="btn btn-warning">แก้ไข</a>
            <a href="#" onClick="deleteData({{ $student->id }})"; 
                class="btn btn-danger">ลบ</a>
            
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script type="text/javascript">
  
    function editData(id) {
        event.preventDefault();
        $.ajax({
        url: "/api/v1/friends/" + id + "/edit",
            success: function (result) {
                $("#xx").empty().append(result);
            }
        });
    }

    function deleteData(id) {
        event.preventDefault();
        $.ajax({
        data: {'_method': 'DELETE', '_token': '{{ csrf_token() }}'},
        type: 'post',
        url: "/api/v1/friends/" + id,
            success: function (result) {
                $("#xx").empty().append(result);
            }
        });
    }

</script>