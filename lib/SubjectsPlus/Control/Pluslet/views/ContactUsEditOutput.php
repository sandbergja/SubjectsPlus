<form class="pure-form pure-form-stacked" id="contactUsEditForm">
<label for="contact-type"><?php echo _("Type of contact form"); ?></label>
<select name="ContactUs-extra-contactType" id="contact-type">


<?php
$types = array("hoc" => "HOC",
        "circ" => "Circulation Desk",
        "ref" => "Reference Desk",
        "shd" => "Student Help Desk");
if (($this->_extra != null) && (isset($this->_extra['contactType']))) {
        echo '<option selected value="' . $this->_extra['contactType'] . '">'. _($types[$this->_extra['contactType']]) . '</option>';
        unset($types[$this->_extra['contactType']]);
}
foreach ($types as $code => $english_string) {
        echo '<option value="' . $code . '">'. _($english_string) . '</option>';
}
?>
</select>

</form>
