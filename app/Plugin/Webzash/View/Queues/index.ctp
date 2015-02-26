<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<table class="stripped">
	<tr>
		<th><?php echo $this->Paginator->sort('title', __d('webzash', 'Title')); ?></th>
		<th><?php echo __d('webzash', 'Queue'); ?></th>
		<th><?php echo __d('webzash', 'Actions'); ?></th>
	</tr>
	<?php foreach ($queues as $queue) { ?>
		<tr>
			<td><?php echo h($queue['Queue']['name']); ?></td>
			<td><?php echo $this->Generic->showQueue($queue['Queue']['id']); ?></td>
			<td>
				<?php echo $this->Html->link($this->Html->queue('i', '', array('class' => 'glyphicon glyphicon-edit')) . __d('webzash', ' Edit'), array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'edit', $queue['Queue']['id']), array('class' => 'no-hover', 'escape' => false)); ?>
				<?php echo $this->Html->queue('span', '', array('class' => 'link-pad')); ?>
				<?php echo $this->Form->postLink($this->Html->queue('i', '', array('class' => 'glyphicon glyphicon-trash')) . __d('webzash', ' Delete'), array('plugin' => 'webzash', 'controller' => 'queues', 'action' => 'delete', $queue['Queue']['id']), array('class' => 'no-hover', 'escape' => false, 'confirm' => __d('webzash', 'Are you sure you want to delete the queue status ?'))); ?>
			</td>
		</tr>
	<?php } ?>
</table>

<div class="text-center paginate">
	<ul class="pagination">
		<?php
			echo $this->Paginator->first(__d('webzash', 'first'), array('queue' => 'li'), null, array('queue' => 'li','class' => 'disabled','disabledQueue' => 'a'));
			echo $this->Paginator->prev(__d('webzash', 'prev'), array('queue' => 'li'), null, array('queue' => 'li','class' => 'disabled','disabledQueue' => 'a'));
			echo $this->Paginator->numbers(array('separator' => '','currentQueue' => 'a', 'currentClass' => 'active','queue' => 'li','first' => 1));
			echo $this->Paginator->next(__d('webzash', 'next'), array('queue' => 'li','currentClass' => 'disabled'), null, array('queue' => 'li','class' => 'disabled','disabledQueue' => 'a'));
			echo $this->Paginator->last(__d('webzash', 'last'), array('queue' => 'li'), null, array('queue' => 'li','class' => 'disabled','disabledQueue' => 'a'));
		?>
	</ul>
</div>
