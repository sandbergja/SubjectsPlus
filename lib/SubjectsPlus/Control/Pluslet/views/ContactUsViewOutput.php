<?php
$orgs = [
  'hoc' => ['title' => 'HOC Library', 'phone' => '15419188840', 'formatted_phone' => '541-918-8840', 'email' => 'sobotkc@linnbenton.edu'],
  'circ' => ['title' => 'LBCC Library', 'phone' => '15419174638', 'formatted_phone' => '541-917-4638', 'email' => 'libref@linnbenton.edu'],
  'ref' => ['title' => 'LBCC Library', 'phone' => '15419174645', 'formatted_phone' => '541-917-4645', 'email' => 'libref@linnbenton.edu'],
  'shd' => ['title' => 'Student Help Desk', 'phone' => '15419174630', 'formatted_phone' => '541-917-4630', 'email' => 'student.helpdesk@linnbenton.edu'],
];
if ($this->_contact_type) {
  $org = $orgs[$this->_contact_type];
} else {
  $org = $orgs['ref'];
}
?>


<h2>Contact the <?php echo $org['title'] ?></h2>
<div class="pure-g">
  <a href="tel:<?php echo $org['phone'] ?>" class="pure-u-5-12 contact-square maroon-background">
    <span class="fa fa-phone"></span>
    Call: <?php echo $org['formatted_phone'] ?>
  </a>
  <div class="pure-u-1-6"></div>
<?php if ('shd' === $this->_contact_type): ?>
  <a href="sms:15417047001" class="pure-u-5-12 contact-square yellow-background">
    <span class="fa fa-commenting"></span>
    Text: 541-704-7001
  </a>
<?php else: ?>
  <a href="https://www.questionpoint.org/crs/servlet/org.oclc.admin.BuildForm?&page=frame&institution=13983&type=2&language=1" class="pure-u-5-12 contact-square yellow-background"><span class="fa fa-commenting"></span>Chat</a>
<?php endif; ?>

</div>

<div class="pure-g">
  <a href="mailto:<?php echo $org['email'] ?>" class="pure-u-5-12 contact-square green-background">
    <span class="fa fa-envelope"></span>
    Email: <?php echo $org['email'] ?>
  </a>
  <div class="pure-u-1-6"></div>
  <a href="https://linnbenton.zoom.us/j/243933025" class="pure-u-5-12 contact-square dark-blue-background">
    <span class="fa fa-laptop"></span>
    Zoom
  </a>
</div>

