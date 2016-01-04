<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1>Works</h1>
<p>
<?php 


echo $this->msg;  
echo '<br />';
/*for($thing in $this->msg){
	echo $thing[1];
}*/

echo JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_WELCOME'); 

?>
</p>