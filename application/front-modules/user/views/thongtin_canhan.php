<div class="tt-main-full">
<div class="tt-main">
<?php
$this->load->module('banner');
$this->banner->index();
?>
<div class="clear"></div>
<div class="tt-main-left">
  <div class="tt-box-style">
    <div class="tt-sty-form">
      <p>Thông tin cá nhân</p>
      <?php echo form_open('user/dangky'); ?>
      <div>
        <h5>Username</h5>
      	<p><?php echo $this->session->userdata('user_name');?></p>
      </div>
      <div>
        <h5>Họ và Tên</h5>
        <input type="text" name="HoTen" value="<?php echo set_value('HoTen'); ?>" size="50" />
        <?php echo form_error('HoTen'); ?> </div>
      <div>
        <h5>Địa chỉ</h5>
        <input type="text" name="DiaChi" value="<?php echo set_value('DiaChi'); ?>" autocomplete="off" size="50" />
        <?php echo form_error('DiaChi'); ?> </div>
      <div>
        <h5>Số điện thoại</h5>
        <input type="text" name="SDT" value="<?php echo set_value('SDT'); ?>" size="50" />
        <?php echo form_error('SDT'); ?> </div>
      <div>
        <input class="tt-input-form" type="submit" value="Đăng ký" />
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<?php
$this->load->module('right');
$this->right->index();
?>
