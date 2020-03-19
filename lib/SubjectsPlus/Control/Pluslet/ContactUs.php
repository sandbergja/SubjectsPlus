<?php
   namespace SubjectsPlus\Control;
   require_once("Pluslet.php");
/**
 *   @file sp_Pluslet_FindIt
 *   @brief 
 *
 *   @author sandbergja
 *   @date Feb 2020
 *   @todo 
 */
class Pluslet_ContactUs extends Pluslet {

    public function __construct($pluslet_id, $flag="", $subject_id, $isclone=0) {
        parent::__construct($pluslet_id, $flag, $subject_id, $isclone);

        $this->_type = "ContactUs";
        $this->_pluslet_bonus_classes = "type-contact";

        $this->_title = _("Contact us");
        $this->_hide_titlebar = false;
    }

    static function getMenuName() {
    return _('Contact us');
    }

    public static function getMenuIcon() {
        $icon="<i class=\"fa fa-phone\" title=\"" . _("Contact us") . "\" ></i><span class=\"icon-text\">" . _("Contact us") . "</span>";
        return $icon;
    }

    protected function onViewOutput() {
        $this->_extra = json_decode( $this->_extra, true );
        $this->_contact_type = isset($this->_extra['contactType']) ? $this->_extra['contactType'] : 'ref';
        $this->_body = $this->loadHtml(__DIR__ . '/views/ContactUsViewOutput.php');
    }

    protected function onEditOutput() {
        if($this->_extra == "") {
            $this->_extra = array();
        }else {
            $this->_extra = json_decode( $this->_extra, true );
        }

        $this->_body = $this->loadHtml(__DIR__ . '/views/ContactUsEditOutput.php');
    }
}

?>
