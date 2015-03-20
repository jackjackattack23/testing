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

<?php
	if (count($settings) <= 0) {
		echo 'Nothing here.';
	} else {
		echo '<table>';
		echo '<tr>';
			  echo '<td><strong>' . 'Name' . '</strong></td>';
			  
		echo '</tr>';
		foreach ($settings as $row => $data) {
			echo '<tr>';
			  echo '<td>' . h($data['Setting']['name']) . '</td>';
			  
			echo '</tr>';
		}
		echo '</table>';
	}
?>

<table class="table table-striped table-hover table-condensed">
  <thead>
  <tr>
    <th><?php echo __d('webzash', 'Account Name'); ?></th>
    <th><?php echo __d('webzash', 'Account Label'); ?></th>
    <th><?php echo __d('webzash', 'Initial Point Allocation'); ?></th>
    <th><?php echo __d('webzash', 'Additional Points Purchased'); ?></th>
    <th><?php echo __d('webzash', 'Total Points Available'); ?></th>
    <th><?php echo __d('webzash', 'CPD Points Used'); ?></th>
    <th><?php echo __d('webzash', 'Available Points Balance'); ?></th>
    <th><?php echo __d('webzash', 'Remaining Original Points'); ?></th>
  </tr>
  </thead>
  	<?php foreach ($settings as $row => $data) {?>
		<tr>
			<td><?php echo h($data['Setting']['name']); ?></td>
            
            <?php foreach ($wzaccounts as $wzaccount) { ?>
            <td><?php echo h($wzaccount['Wzaccount']['label']); ?></td>
            
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
		</tr>
	<?php }} ?>
</table>


