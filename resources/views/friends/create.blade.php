<form id="frmData">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group row">
    <label for="init_name" class="col-sm-2 col-form-label">คำนำหน้า</label>
    <div class="col-sm-5"><input type="text" class="form-control" name="init_name"></div>
  </div>
  <div class="form-group row">
    <label for="first_name" class="col-sm-2 col-form-label">ชื่อ</label>
    <div class="col-sm-5"><input type="text" class="form-control" name="first_name"></div>
  </div>
  <div class="form-group row">
    <label for="last_name" class="col-sm-2 col-form-label">นามสกุล</label>
    <div class="col-sm-5"><input type="text" class="form-control" name="last_name"></div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10"><button id="storeData" class="btn btn-primary">บันทึก</button></div>
  </div>
</form>
<script type="text/javascript">
  $("#storeData").click(function (event) {
    event.preventDefault();
    $.ajax({
        type: 'post',
        url: '/api/v1/friends',
        data: $("#frmData").serialize(),
        success: function(result) { $("#xx").empty().append(result); },
    });
  });
</script>
