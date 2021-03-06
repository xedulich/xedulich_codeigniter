<?php 
	foreach($results as $result){
		$IDLoaixe = $result->IDLoaixe;
		$TenLoaixe = $result->TenLoaixe;
		$ThuTu = $result->ThuTu;
		$AnHien = $result->AnHien;
	}
?>
<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Cập Nhật Loại Xe</h1>
      <?php if($kq_dangloaixe!=''){ ?>
      <div class="alert <?php if($kq_dangloaixe=='Không thành công'){echo 'alert-danger';}else{echo 'alert-success';} ?>"> <?php echo $kq_dangloaixe; ?> </div>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Cập Nhật Loại Xe</div>
        <div class="panel-body"> <?php echo form_open('loaixe/luu_capnhatloaixe'); ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Tên Loại Xe</label>
                <input name="tenloaixe" class="form-control" value="<?php echo $TenLoaixe;?>">
                <?php echo form_error('tenloaixe'); ?> </div>
              <div class="form-group">
                <label>Thứ tự</label>
                <input name="thutu" class="form-control" value="<?php echo $ThuTu;?>">
                <?php echo form_error('thutu'); ?> </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Ẩn hiện</label>
                <label class="radio-inline">
                  <input type="radio" name="anhien" id="optionsRadiosInline1" value="1" <?php echo ($AnHien==1) ? 'checked="checked"' : '';?>>
                  Hiện </label>
                <label class="radio-inline">
                  <input type="radio" name="anhien" id="optionsRadiosInline2" value="0" <?php echo ($AnHien==0) ? 'checked="checked"' : '';?>>
                  Ẩn </label>
              </div>
              <input name="id" type='hidden' class="form-control" value="<?php echo $IDLoaixe;?>">
              <button type="submit" class="btn btn-default">Cập nhật</button>
              <button type="reset" class="btn btn-default">Xóa trắng</button>
            </div>
          </div>
          <?php echo form_close(); ?> </div>
      </div>
    </div>
  </div>
</div>
