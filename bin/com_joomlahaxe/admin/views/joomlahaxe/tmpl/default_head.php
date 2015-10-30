<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th width="5">
		<?php echo 'Heading'; ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_ADMINWELCOME'); ?>
	</th>
</tr>