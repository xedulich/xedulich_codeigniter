<script language="javascript" src="<?php echo base_url();?>../themes/admin/js/ajaxupload.js"></script>
<script type="text/javascript">
$(function(){
	var btnUpload=$('#upload');
	var status=$('#status');
	new AjaxUpload(btnUpload, {
		action: '<?php echo base_url();?>xe/upload_img',
		name: 'uploadfile',     			 			   			
		onSubmit: function(file, ext){
			 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){ 
                // extension is not allowed 
				status.text('Chỉ Cho Phép các định dạng ảnh JPG, PNG hoặc GIF ');
				return false;
			}
			status.text('Uploading...');
		},
		onComplete: function(file, response){
			//On completion clear the status
			status.text('');
			//Add uploaded file to list    
			 $('ul#files').text(''); 				
			if(response!=="error"){ 
				$('<li></li>').appendTo('#files').html('<img width="170" src="'+response+'"/>');
				$('#images').val(file); 
			} else{
				$('<li></li>').appendTo('#files').text('Upload file '+file+' error ').addClass('error');
			}
		}
	});	
});   
</script>

<div id="page-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Thêm Xe</h1>
      <?php if($kq_dangxe!=''){ ?>
      <div class="alert <?php if($kq_dangxe=='Không thành công'){echo 'alert-danger';}else{echo 'alert-success';} ?>"> <?php echo $kq_dangxe; ?> </div>
      <?php } ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">Thêm Xe</div>
        <div class="panel-body"> <?php echo form_open('xe/themchitietxe'); ?>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Tên Xe</label>
                <input name="tenxe" class="form-control" value="">
                <?php echo form_error('tenxe'); ?> </div>
              <div class="form-group">
                <label> Năm Sản Xuất </label>
                <input name="namsx" class="form-control" value="">
                <?php echo form_error('namsx'); ?> </div>
              <div class="form-group">
                <label>Biển Số </label>
                <input name="bienso" class="form-control" value="">
                <?php echo form_error('bienso'); ?> </div>
              <div class="form-group">
                <label>Màu Xe</label>
                <input name="mauxe" class="form-control" value="">
                <?php echo form_error('mauxe'); ?> </div>
              <div class="form-group">
                <label>Mô tả</label>
                <textarea name="mota" class="form-control" rows="3"></textarea>
                <?php echo form_error('mota'); ?> </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Upload Hình</label>
                <div id="upload" ><label>Upload Hình</label></div>
                <ul id="files">
                </ul>
                <input type="hidden" name="images" id="images" class="fileold">
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <label>Giá</label>
                <input name="gia" class="form-control">
                <?php echo form_error('gia'); ?> </div>
              <div class="form-group">
                <label> Loại Xe</label>
                <select name="loaixe" class="form-control">
                  	<?php foreach($loaixe_all as $key2=>$info2){ ?>
					<option value='<?php echo $info2->IDLoaixe;?>'><?php echo $info2->TenLoaixe;?></option>
					<?php } ?>
                </select>
                <?php echo form_error('loaixe'); ?> </div>
              <div class="form-group">
                <label>Hãng Xe</label>
                <select name="hangxe" class="form-control">
					<?php foreach($hangxe_all as $key3=>$info3){ ?>
					<option value='<?php echo $info3->IDHangxe;?>'><?php echo $info3->TenHangxe;?></option>
					<?php } ?>
				</select>
                <?php echo form_error('hangxe'); ?> </div>
              <button type="submit" class="btn btn-default">Nhập vào</button>
              <button type="reset" class="btn btn-default">Xóa trắng</button>
            </div>
          </div>
          <?php echo form_close(); ?> </div>
      </div>
    </div>
  </div>
</div>
