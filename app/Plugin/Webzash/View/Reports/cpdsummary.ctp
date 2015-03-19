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
	echo '<div class="btn-group" role="group">';

	echo $this->Html->link(
		__d('webzash', 'DOWNLOAD .CSV'),
		'/' . $this->params->url . '/downloadcsv:true',
		array('class' => 'btn btn-default btn-sm')
	);

	echo $this->Html->link(
		__d('webzash', 'DOWNLOAD .XLS'),
		'/' . $this->params->url . '/downloadxls:true',
		array('class' => 'btn btn-default btn-sm')
	);

	echo $this->Html->link(__d('webzash', 'PRINT'), '',
		array(
			'class' => 'btn btn-default btn-sm',
			'onClick' => "window.open('" . $this->Html->url('/' . $this->params->url . '/print:true') . "', 'windowname','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=1000,height=600'); return false;"
		)
	);

	echo '</div>';
	echo '<br /><br />';
?>

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
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
    <td><?php echo ''; ?></td>
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