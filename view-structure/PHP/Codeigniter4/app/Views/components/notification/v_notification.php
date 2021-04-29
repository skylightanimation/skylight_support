<div id="notifications">
	<?php //echo $this->session->flashdata('msg'); ?>
	<?php echo session()->getFlashdata('msg'); ?>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>/vendor/skylightsp-alert/js/component/alert.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>/vendor/skylightsp-alert/js/system/alert.js"></script>