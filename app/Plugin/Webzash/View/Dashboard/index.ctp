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
/* Check if BC Math Library is present */
if (!extension_loaded('bcmath')) {
	echo '<div><div role="alert" class="alert alert-danger">' .
		__d('webzash', 'PHP BC Math library is missing. Please check the "Wiki" section in Help on how to fix it.') .
		'</div></div>';
}
?>


<br/>
<div class="row">

<!--Column 1-->
<div class="col-md-4">

	<!--Account Details Start-->
    <div class="panel panel-info">
        <div class="panel-heading"><strong><?php echo __d('webzash', 'Account Details'); ?></strong></div>
        <div class="panel-body">
        <table>
            <tr>
                <td><strong><?php echo __d('webzash', 'Account Name:'); ?></strong></td>
                <td><?php echo h(Configure::read('Account.name')); ?></td>
            </tr>
            <!--<tr>
                <td><strong><?php/* echo __d('webzash', 'Account Email:'); */?></strong></td>
                <td><?php/* echo h(Configure::read('Account.email1')); */?></td>
            </tr>
            <tr>
                <td><strong><?php/* echo __d('webzash', 'User Role:'); */?></strong></td>
                <td><?php/* echo h($this->Session->read('ActiveAccount.account_role')); */?></td>
            </tr>-->
            <tr>
                <td><strong><?php echo __d('webzash', 'Financial Year:'); ?></strong></td>
                <td><?php echo dateFromSql(Configure::read('Account.startdate')) . ' to ' . dateFromSql(Configure::read('Account.enddate')); ?></td>
            </tr>
            <tr>
                <td><strong><?php echo __d('webzash', 'Account Status:'); ?></strong></td>
                <?php
                    if (Configure::read('Account.locked') == 0) {
                        echo '<td>' . __d('webzash', 'Unlocked') . '</td>';
                    } else {
                        echo '<td class="error-text">' . __d('webzash', 'Locked') . '</td>';
                    }
                ?>
            </tr>
        </table>
        </div>
    </div>
	<!--Account Details End-->	
    
    <!--Campus Contacts-->
    	<div class="panel panel-info">
			<div class="panel-heading"><strong><?php echo __d('webzash', 'Campus Contacts'); ?></strong></div>
			<div class="panel-body">
				<strong><?php echo (Configure::read('Account.fname1')) . " " . h(Configure::read('Account.lname1')); ?></strong><br/>
                <?php echo h(Configure::read('Account.email1')); ?><br/>
                <?php echo h(Configure::read('Account.phone1')); ?><br/>
                <br/>
                <strong><?php echo h(Configure::read('Account.fname2')) . " " . h(Configure::read('Account.lname2')); ?></strong><br/>
                <?php echo h(Configure::read('Account.email2')); ?><br/>
                <?php echo h(Configure::read('Account.phone2')); ?><br/>
                <br/>
                <strong><?php echo h(Configure::read('Account.fname3')) . " " . h(Configure::read('Account.lname3')); ?></strong><br/>
                <?php echo h(Configure::read('Account.email3')); ?><br/>
				<?php echo h(Configure::read('Account.phone3')); ?><br/>
			</div>
		</div>
        <!--Campus Contacts End-->
        
	</div>
    <!--End Column 1-->
    
    <!--Column 2-->
	<div class="col-md-4">
    	
        <!--Account Summary Start-->
    	<div class="panel panel-info">
			<div class="panel-heading"><strong><?php echo __d('webzash', 'Account Summary'); ?></strong></div>
			<div class="panel-body">
				<table>
					<tr>
						<td><strong><?php echo __d('webzash', 'Label 1 (Assets):'); ?></strong></td>
						<td><?php echo toCurrency($accsummary['assets_total_dc'], $accsummary['assets_total']); ?></td>
					</tr>
					<tr>
						<td><strong><?php echo __d('webzash', 'Label 2 (Liabilities and Owners Equity):'); ?></strong></td>
						<td><?php echo toCurrency($accsummary['liabilities_total_dc'], $accsummary['liabilities_total']); ?></td>
					</tr>
					<tr>
						<td><strong><?php echo __d('webzash', 'Label 3 (Income):'); ?></strong></td>
						<td><?php echo toCurrency($accsummary['income_total_dc'], $accsummary['income_total']); ?></td>
					</tr>
					<tr>
						<td><strong><?php echo __d('webzash', 'Label 4 (Expense):'); ?></strong></td>
						<td><?php echo toCurrency($accsummary['expense_total_dc'], $accsummary['expense_total']); ?></td>
					</tr>
				</table>
			</div>
		</div>
        <!--Account Summary End-->
    </div>
    <!--End Column 2-->
        
    <!--Column 3-->
	<div class="col-md-4">
        
        <!--Queue Start-->
		<div class="panel panel-info">
			<div class="panel-heading"><strong><?php echo __d('webzash', 'Account Entries'); ?></strong></div>
			<div class="panel-body">
            	<table>
					<tr>
						<td><?php echo '<a href="/sites/cpd-points/entries/index/queue:1" class = "btn btn-success">Approved</a>'; ?></td>
                        <td><?php echo '<a href="/sites/cpd-points/entries/index/queue:2" class = "btn btn-danger">Rejected</a>'; ?></td>
                        <td><?php echo '<a href="/sites/cpd-points/entries/index/queue:3" class = "btn btn-warning">Pending</a>'; ?></td>
				    </tr>
                </table>
			</div>
		</div> 
        <!--Queue End-->
            
	</div>
    <!--End Column 3-->
    
</div>
