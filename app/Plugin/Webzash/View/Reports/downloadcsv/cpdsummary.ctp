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
		echo '"';
		echo print_space($counter);
		echo h($account->name);
		echo '",';

		echo '"' . toCurrency($account->cl_total_dc, $account->cl_total) . '"';
		echo "\n";
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
			echo '"';
			echo print_space($counter);
			echo h($data['name']);
			echo '",';

			echo '"' . toCurrency($data['cl_total_dc'], $data['cl_total']) . '"';
			echo "\n";
		}
	$counter--;
	}
}

function print_space($count)
{
	$html = '';
	for ($i = 1; $i <= $count; $i++) {
		$html .= '      ';
	}
	return $html;
}

?>

<?php

	echo $subtitle;
	echo "\n";
	echo "\n";

	echo '"' . __d('webzash', 'Account') . '",';
	echo '"' . __d('webzash', 'Initial Point Allocation') . '",';
	echo '"' . __d('webzash', 'Additional Points Purchased') . '",';
	echo '"' . __d('webzash', 'Total Points Available') . '",';
	echo '"' . __d('webzash', 'CPD Points Used') . '",';
	echo '"' . __d('webzash', 'Available Points Balance') . '",';
	echo '"' . __d('webzash', 'Remaining Original Points') . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Adirondack Community College (ADI)') . ',';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'University at Albany (ALB)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Alfred State, Technology (ALF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
		
	echo '"' . __d('webzash', 'Alfred, Ceramics (CER)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Binghamton (BIN)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Brockport (BRO)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Broome (BRM)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Buffalo State College(BUC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'University of Buffalo (BUF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Canton (CAN)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cayuga (CAY)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Clinton (CLI)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cobleskill (COB)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Columbia-Greene (CGC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cornell, Agriculture &amp; Life Sciences (CNL-A)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cornell, Human Ecology (CNL-E)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cornell, Veterinary Medicine (CNL-V)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cornell, Industrial and Labor Relations (CNL-R)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Corning (CNG)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Cortland (COR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Delhi (DEL)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Downstate Medical Center (BRK)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Dutchess (DUT)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Empire State College (ESC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Environmental Science &amp; Forestry (ESF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Erie (ERI)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Farmingdale (FAR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Fashion Institute(FIT)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Finger Lakes (FLC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Fredonia (FRE)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Fulton-Montgomery (FMC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Genesee (GNC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Geneseo (GEN)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Herkimer (HER)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Hudson Valley (HVC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Jamestown (JAM)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Jefferson (JEF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Maritime (MAR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Mohawk Valley (MVC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Monroe (MON)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Morrisville (MOR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Nassau (NAS)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'New Paltz (NEW)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Niagara (NIA)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'North Country (NOR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Old Westbury (OLD)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Oneonta (ONE)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Onondaga (ONO)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Optometry (OPT)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Orange (ORA)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Oswego (OSW)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
		
	echo '"' . __d('webzash', 'Plattsburgh (PLA)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Potsdam (POT)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Purchase (PUR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Research Foundation (RF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	
	echo '"' . __d('webzash', 'Rockland (ROC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Schenectady (SCH)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Stony Brook (STB)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Suffolk (SUF)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Sullivan (SUL)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'System Administration (CEN)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Tompkins (TCC)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Ulster (ULS)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";	
	
	echo '"' . __d('webzash', 'Upstate Medical University (SYR)') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	echo "\n";
	
	/* Total */
	
	echo '"' . __d('webzash', 'Totals') . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo '"' . "" . '",';
	echo "\n";
	echo '"' . "\n";
	
?>