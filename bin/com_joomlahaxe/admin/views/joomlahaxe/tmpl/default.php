<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
 
// load tooltip behavior
JHtml::_('behavior.tooltip');
?>
<p><?php echo JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_DESC'); ?><br />
<?php echo JText::_('COM_JOOMLAHAXE_JOOMLAHAXE_VIEW_DEFAULT_ADMINWELCOME'); ?></p>
<form action="<?php echo JRoute::_('index.php?option=com_joomlahaxe'); ?>" method="post" name="adminForm" id="adminForm">
	<table class="adminlist table table-striped">
		<thead><?php echo $this->loadTemplate('head');?></thead>
		<tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
		<tbody><?php echo $this->loadTemplate('body');?></tbody>
	</table>
	
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>