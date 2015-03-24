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
<?php foreach ($settings as $setting) {?>
	<?php foreach ($wzaccounts as $wzaccount) { ?> 	
		<tr>
			<td><?php echo h($setting['Setting']['name']); ?></td>
            <td><?php echo h($wzaccount['Wzaccount']['label']); ?></td>    
            <td><?php echo h($opdiff['opdiff_balance_dc']). ' ' . h ($opdiff['opdiff_balance']); ?></td>
            <td><?php ""; ?></td>
            <td><?php "" ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
            <td><?php ""; ?></td>
		</tr>
	<?php } ?>
<?php } ?>
        <tr>
            <th><strong><?php echo __d('webzash', 'Totals'); ?></strong></th>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
            <td><strong><?php echo "0"; ?></strong></td>
        </tr>
</table>








