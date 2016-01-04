<?php
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_joomlahaxe&layout=edit&id='.(int) $this->item->id); ?>"
      method="post" name="adminForm" id="adminForm">
	<fieldset class="adminform">
		<legend>Details</legend>
		<ul class="adminformlist">
<?php foreach($this->form->getFieldset() as $field): ?>
			<li><?php echo $field->label;echo $field->input;?></li>
<?php endforeach; ?>
		</ul>
		
		<?php //echo $this->form->getControlGroup('id'); ?>
		<?php //echo $this->form->getControlGroup('name'); ?>
		<?php //echo $this->form->getControlGroup('details'); ?>
		<?php //echo $this->form->getControlGroup('enabled'); ?>
	</fieldset>
	<div>
		<input type="hidden" name="task" value="joomlahaxe.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>