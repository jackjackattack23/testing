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

$xRS = '<Row>';
$xRE = '</Row>' . "\n";
$xCS = '<Cell><Data ss:Type="String">';
$xCE = '</Data></Cell>';

function account_st_short($account, $c = 0, $THIS, $dc_type)
{
	$xRS = '<Row>';
	$xRE = '</Row>';
	$xCS = '<Cell><Data ss:Type="String">';
	$xCE = '</Data></Cell>';

	$counter = $c;
	if ($account->id > 4)
	{
		echo $xRS;
		echo $xCS;
		echo print_space($counter);
		echo h($account->name);
		echo $xCE;

		echo $xCS . toCurrency($account->cl_total_dc, $account->cl_total) . $xCE;
		echo $xRE;
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
			echo $xRS;
			echo $xCS;
			echo print_space($counter);
			echo h($data['name']);
			echo $xCE;

			echo $xCS . toCurrency($data['cl_total_dc'], $data['cl_total']) . $xCE;
			echo $xRE;
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

	echo $xRS . $xCS . $subtitle . $xCE . $xRE;
	echo $xRS . $xRE;

	echo $xRS;
	echo $xCS . __d('webzash', 'Account') . $xCE;
	echo $xCS . __d('webzash', 'Initial Point Allocation') . $xCE;
	echo $xCS . __d('webzash', 'Additional Points Purchased') . $xCE;
	echo $xCS . __d('webzash', 'Total Points Available') . $xCE;
	echo $xCS . __d('webzash', 'CPD Points Used') . $xCE;
	echo $xCS . __d('webzash', 'Available Points Balance') . $xCE;
	echo $xCS . __d('webzash', 'Remaining Original Points') . $xCE;
	echo $xRE;
	echo $xRS . $xRE;

	echo $xRS;
	echo $xCS . __d('webzash', 'Adirondack Community College (ADI)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'University at Albany (ALB)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Alfred State, Technology (ALF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Alfred, Ceramics (CER)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Binghamton (BIN)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Brockport (BRO)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Broome (BRM)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Buffalo State College(BUC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'University of Buffalo (BUF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Canton (CAN)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cayuga (CAY)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Clinton (CLI)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cobleskill (COB)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Columbia-Greene (CGC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cornell, Agriculture &amp; Life Sciences (CNL-A)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cornell, Human Ecology (CNL-E)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cornell, Veterinary Medicine (CNL-V)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cornell, Industrial and Labor Relations (CNL-R)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Corning (CNG)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Cortland (COR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Delhi (DEL)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Downstate Medical Center (BRK)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Dutchess (DUT)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Empire State College (ESC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Environmental Science &amp; Forestry (ESF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Erie (ERI)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Farmingdale (FAR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Fashion Institute(FIT)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Finger Lakes (FLC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Fredonia (FRE)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Fulton-Montgomery (FMC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Genesee (GNC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Geneseo (GEN)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Herkimer (HER)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Hudson Valley (HVC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Jamestown (JAM)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Jefferson (JEF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Maritime (MAR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Mohawk Valley (MVC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Monroe (MON)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Morrisville (MOR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Nassau (NAS)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'New Paltz (NEW)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Niagara (NIA)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'North Country (NOR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Old Westbury (OLD)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Oneonta (ONE)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Onondaga (ONO)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Optometry (OPT)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Orange (ORA)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Oswego (OSW)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Plattsburgh (PLA)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Potsdam (POT)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Purchase (PUR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Research Foundation (RF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Rockland (ROC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Schenectady (SCH)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Stony Brook (STB)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Suffolk (SUF)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Sullivan (SUL)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'System Administration (CEN)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Tompkins (TCC)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Ulster (ULS)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	
	echo $xRS;
	echo $xCS . __d('webzash', 'Upstate Medical University (SYR)') . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xCS . "" . $xCE;
	echo $xRE;
	echo $xRS . $xRE;
	
	/* Total */
	echo $xRS;
	echo $xCS . __d('webzash', 'Totals') . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xCS . toCurrency('D', $bsheet['final_assets_total']) . $xCE;
	echo $xRE;
	echo $xRS . $xRE;
