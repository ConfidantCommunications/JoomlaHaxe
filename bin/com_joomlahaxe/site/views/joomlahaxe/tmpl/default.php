<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>
<h1>Output from JoomlaHaxe Component</h1>
<p>
<?php 
echo "<table>";
foreach($this->msg as $index=>$value){
	//print_r($value);
	echo"<tr>";
	echo "<td>".$value->name."</td><td>".$value->details."</td>";
	echo"</tr>";
}
echo "</table>";


echo "<br />".JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_WELCOME'); 

?>
</p>