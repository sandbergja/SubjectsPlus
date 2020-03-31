<?php
   namespace SubjectsPlus\Control;
   require_once("Pluslet.php");
/**
 *   @file sp_Pluslet_AccessibilityStatement
 *   @brief 
 *
 *   @author sandbergja
 *   @date Mar 2020
 *   @todo 
 */
class Pluslet_AccessibilityStatement extends Pluslet {

    public function __construct($pluslet_id, $flag="", $subject_id, $isclone=0) {
        parent::__construct($pluslet_id, $flag, $subject_id, $isclone);

        $this->_type = "AccessibilityStatement";
        $this->_pluslet_bonus_classes = "type-accessibility-statement";

        $this->_title = _("Accessibility");
        $this->_hide_titlebar = false;
    }

    static function getMenuName() {
    return _('Accessibility Statement');
    }

    public static function getMenuIcon() {
        $icon="<i class=\"fa fa-wheelchair\" title=\"" . _("Accessibility statement") . "\" ></i><span class=\"icon-text\">" . _("Accessibility statement") . "</span>";
        return $icon;
    }

    protected function onViewOutput() {
        $this->_body = $this->loadHtml(__DIR__ . '/views/AccessibilityStatementViewOutput.php');
    }

    protected function onEditOutput() {
        $this->_body = "<p class=\"faq-alert\">" . _("Click 'Save' to view your accessibility statement.") . "</p>";
    }
}

?>
