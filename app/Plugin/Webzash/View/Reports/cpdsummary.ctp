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

function account_st_short($account, $c = 0, $THIS, $dc_type)
{
	$counter = $c;
	if ($account->id > 4)
	{
		if ($dc_type == 'D' && $account->cl_total_dc == 'C' && calculate($account->cl_total, 0, '!=')) {
			echo '<tr class="tr-group dc-error">';
		} else if ($dc_type == 'C' && $account->cl_total_dc == 'D' && calculate($account->cl_total, 0, '!=')) {
			echo '<tr class="tr-group dc-error">';
		} else {
			echo '<tr class="tr-group">';
		}

		echo '<td class="td-group">';
		echo print_space($counter);
		echo h($account->name);
		echo '</td>';

		echo '<td class="text-right">';
		echo toCurrency($account->cl_total_dc, $account->cl_total);
		echo print_space($counter);
		echo '</td>';

		echo '</tr>';
	}
	foreach ($account->children_groups as $id => $data)
	{
		$counter++;
		account_st_short($data, $counter, $THIS, $dc_type);
		$counter--;
	}
	if (count($account->children_ledgers) > 0)
	{
		$counter++;
		foreach ($account->children_ledgers as $id => $data)
		{
			if ($dc_type == 'D' && $data['cl_total_dc'] == 'C' && calculate($data['cl_total'], 0, '!=')) {
				echo '<tr class="tr-ledger dc-error">';
			} else if ($dc_type == 'C' && $data['cl_total_dc'] == 'D' && calculate($data['cl_total'], 0, '!=')) {
				echo '<tr class="tr-ledger dc-error">';
			} else {
				echo '<tr class="tr-ledger">';
			}

			echo '<td class="td-ledger">';
			echo print_space($counter);
			echo $THIS->Html->link($data['name'], array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'ledgerstatement', 'ledgerid' => $data['id']));
			echo '</td>';

			echo '<td class="text-right">';
			echo toCurrency($data['cl_total_dc'], $data['cl_total']);
			echo print_space($counter);
			echo '</td>';

			echo '</tr>';
		}
	$counter--;
	}
}

function print_space($count)
{
	$html = '';
	for ($i = 1; $i <= $count; $i++) {
		$html .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	}
	return $html;
}

?>

<script type="text/javascript">
$(document).ready(function() {

	$("#accordion").accordion({
		collapsible: true,
		<?php
			if ($options == false) {
				echo 'active: false';
			}
		?>
	});

	$('.show-tooltip').tooltip({trigger: 'manual'}).tooltip('show');

	/* Calculate date range in javascript */
	startDate = new Date(<?php echo strtotime(Configure::read('Account.startdate')) * 1000; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));
	endDate = new Date(<?php echo strtotime(Configure::read('Account.enddate')) * 1000; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));

	/* On selecting custom period show the start and end date form fields */
	$('#BalancesheetOpening').change(function() {
		if ($(this).prop('checked')) {
			$('#BalancesheetStartdate').prop('disabled', true);
			$('#BalancesheetEnddate').prop('disabled', true);
		} else {
			$('#BalancesheetStartdate').prop('disabled', false);
			$('#BalancesheetEnddate').prop('disabled', false);
		}
	});
	$('#BalancesheetOpening').trigger('change');

	/* Setup jQuery datepicker ui */
	$('#BalancesheetStartdate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: '<?php echo Configure::read('Account.dateformatJS'); ?>',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#BalancesheetEnddate").datepicker("option", "minDate", selectedDate);
			} else {
				$("#BalancesheetEnddate").datepicker("option", "minDate", startDate);
			}
		}
	});
	$('#BalancesheetEnddate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: '<?php echo Configure::read('Account.dateformatJS'); ?>',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#BalancesheetStartdate").datepicker("option", "maxDate", selectedDate);
			} else {
				$("#BalancesheetStartdate").datepicker("option", "maxDate", endDate);
			}
		}
	});
});
</script>


<div class="subtitle text-center">
	<?php echo $subtitle ?>
</div>

<hr/>

<table class="table table-striped table-hover table-condensed">
  <thead>
  <tr>
    <th>Account</th>
    <th>Initial Point Allocation</th>
    <th>Additional Points Purchased</th>
    <th>Total Points Available</th>
    <th>CPD Points Used</th>
    <th>Available Points Balance</th>
    <th>Remaining Original Points</th>
  </tr>
  </thead>
  <tr>
    <td>Adirondack Community College (ADI)</td>
    <td><?php echo '<td>' . toCurrency($bsheet['dc'], $op['amount']). '</td>'; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo '<td>' . toCurrency('D', $bsheet['final_assets_total']) . '</td>'; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>University at Albany (ALB)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Alfred State, Technology (ALF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Alfred, Ceramics (CER)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Binghamton (BIN)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Brockport (BRO)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Broome (BRM)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Buffalo State College(BUC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>University of Buffalo (BUF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Canton (CAN)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cayuga (CAY)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Clinton (CLI)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cobleskill (COB)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Columbia-Greene (CGC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cornell, Agriculture &amp; Life Sciences (CNL-A)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cornell, Human Ecology (CNL-E)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cornell, Veterinary Medicine (CNL-V)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cornell, Industrial and Labor Relations (CNL-R)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Corning (CNG)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Cortland (COR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Delhi (DEL)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Downstate Medical Center (BRK)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Dutchess (DUT)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Empire State College (ESC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Environmental Science &amp; Forestry (ESF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Erie (ERI)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Farmingdale (FAR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Fashion Institute(FIT)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Finger Lakes (FLC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Fredonia (FRE)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Fulton-Montgomery (FMC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Genesee (GNC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Geneseo (GEN)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Herkimer (HER)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Hudson Valley (HVC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Jamestown (JAM)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Jefferson (JEF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Maritime (MAR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Mohawk Valley (MVC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Monroe (MON)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Morrisville (MOR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Nassau (NAS)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>New Paltz (NEW)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Niagara (NIA)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>North Country (NOR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Old Westbury (OLD)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Oneonta (ONE)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Onondaga (ONO)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Optometry (OPT)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Orange (ORA)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Oswego (OSW)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Plattsburgh (PLA)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Potsdam (POT)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Purchase (PUR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Research Foundation (RF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Rockland (ROC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Schenectady (SCH)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Stony Brook (STB)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Suffolk (SUF)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Sullivan (SUL)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>System Administration (CEN)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Tompkins (TCC)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Ulster (ULS)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td>Upstate Medical University (SYR)</td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
  <tr>
    <td><strong>Totals</strong></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
  </tr>
</table>