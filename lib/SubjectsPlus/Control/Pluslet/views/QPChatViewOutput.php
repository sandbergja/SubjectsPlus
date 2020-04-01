<?php $qp_widget_id = rand(1,5); ?>
<div id="questionpoint.chatwidget<?php echo $qp_widget_id; ?>"
  qwidgetno="<?php echo $qp_widget_id; ?>" >
</div>
<script id="questionpoint.bootstrap<?php echo $qp_widget_id; ?>"
  qwidgetno="<?php echo $qp_widget_id; ?>"
  type="text/javascript"
  src="https://www.questionpoint.org/crs/qwidgetV4/js/qwidget.bootstrapnj.js?langcode=<?php echo $this->_lang_id; ?>&instid=<?php echo $this->_inst_id; ?>&skin=<?php echo $this->_color; ?>&size=standard" charset="utf-8">//<noscript>Please enable javascript to chat with librarians online</noscript></script> 
