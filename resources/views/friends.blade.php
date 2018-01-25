<div class="well">
  <h1>เพื่อนของฉัน</h1>
  <form class="form-horizontal">
    <div class="form-group form-group-lg">
      <div class="row">
        <div class="col-md-10">
          <a id="getData" class="btn btn-md btn-success" href="#" 
          role="button">
            แสดงรายชื่อเพื่อนของฉัน
          </a>
        </div>
        <div class="col-md-2 pull-right">
          <a id="addData" class="btn btn-md btn-success" href="#" 
          role="button">
            เพิ่มเพื่อน
          </a>
        </div>
      </div>
    </div>
  </form>
</div>

<div id="xx">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">ชื่อ-สกุล</th>
        <th scope="col" style="width: 150px;">Action</th>
      </tr>
    </thead>
    <tbody id="datas">
      <tr>
        <th colspan=3 scope="row" class="text-center">ไม่มีข้อมูล</th>
      </tr>
    </tbody>
  </table>
</div>

<script type="text/javascript">

  // ดึงฟอร์ม เพิ่มข้อมูลเพื่อน
  $("#addData").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "/api/v1/friends/create",
      success: function (result) {
        $("#xx").empty().append(result);
      }
    });
  });

  // ดึงข้อมูลรายชื่อเพื่อน
  $("#getData").click(function (event) {
    event.preventDefault();
    $.ajax({
      url: "/api/v1/friends?table=1",
      success: function (result) {
        $("#xx").empty().append(result);
      }
    });
  });
</script>