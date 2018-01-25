<div class="well">
  <h1>แผนการเรียน</h1>
  <form class="form-horizontal">
    <div class="form-group form-group-lg">
      <div class="row">
        <label class="col-sm-2 control-label text-right" for="search">รหัสหมู่เรียน : </label>
        <div class="col-sm-3">
          <input class="form-control" type="text" id="search" placeholder="รหัสหมู่เรียน" value="591224201">
        </div>
        <div class="col-sm-5">
          <a id="getData" class="btn btn-md btn-success" href="#" role="button">
            ดึงข้อมูลแผนการเรียน
          </a>
        </div>
      </div>
    </div>
  </form>
</div>

<div id="subjectplan">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">เทอม</th>
        <th scope="col">หมวดวิชา</th>
        <th scope="col">รหัสวิชา</th>
        <th scope="col">ชื่อวิชา</th>
      </tr>
    </thead>
    <tbody id="subjects">
      <tr>
        <th colspan=5 scope="row" class="text-center">ไม่มีข้อมูล</th>
      </tr>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $("#getData").click(function (event) {
    event.preventDefault();
    id = $("#search").val();
    $.ajax({
      url: "http://adm2.srru.ac.th/api/curri/plan",
      data: {
        id: id
      },
      success: function (result) {
        $("#subjects").empty();
        result.forEach(function (subject, ind) {
          $("#subjects").append(`
            <tr>
              <th scope="row">` + (ind + 1) + `</th>
              <td>` + subject.term + `</td>
              <td>` + subject.group_tname + `</td>
              <td>` + subject.subjcode + `</td>
              <td>` + subject.subjname + `</td>
            </tr>`
          );
        });
      }
    });
  });
</script>