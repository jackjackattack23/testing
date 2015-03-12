INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (1, NULL, 'Assets', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (2, NULL, 'Liabilities and Owners Equity', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (3, NULL, 'Incomes', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (4, NULL, 'Expenses', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (5, 1, 'Fixed Assets', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (6, 1, 'Current Assets', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (7, 1, 'Investments', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (8, 2, 'Capital Account', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (9, 2, 'Current Liabilities', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (10, 2, 'Loans (Liabilities)', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (11, 3, 'Direct Incomes', 1);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (12, 4, 'Direct Expenses', 1);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (13, 3, 'Indirect Incomes', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (14, 4, 'Indirect Expenses', 0);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (15, 3, 'Sales', 1);
INSERT INTO `%_PREFIX_%groups` (`id`, `parent_id`, `name`, `affects_gross`) VALUES (16, 4, 'Purchases', 1);

INSERT INTO `%_PREFIX_%entrytypes` (`id`, `label`, `name`, `description`, `base_type`, `numbering`, `prefix`, `suffix`, `zero_padding`, `restriction_bankcash`) VALUES (1, 'receipt', 'Receipt', 'Received in Bank account or Cash account', 1, 1, '', '', 0, 2);
INSERT INTO `%_PREFIX_%entrytypes` (`id`, `label`, `name`, `description`, `base_type`, `numbering`, `prefix`, `suffix`, `zero_padding`, `restriction_bankcash`) VALUES (2, 'payment', 'Payment', 'Payment made from Bank account or Cash account', 1, 1, '', '', 0, 3);
INSERT INTO `%_PREFIX_%entrytypes` (`id`, `label`, `name`, `description`, `base_type`, `numbering`, `prefix`, `suffix`, `zero_padding`, `restriction_bankcash`) VALUES (3, 'contra', 'Contra', 'Transfer between Bank account and Cash account', 1, 1, '', '', 0, 4);
INSERT INTO `%_PREFIX_%entrytypes` (`id`, `label`, `name`, `description`, `base_type`, `numbering`, `prefix`, `suffix`, `zero_padding`, `restriction_bankcash`) VALUES (4, 'journal', 'Journal', 'Transfer between Non Bank account and Cash account', 1, 1, '', '', 0, 5);

INSERT INTO `%_PREFIX_%queues` VALUES(1, 'approved', 'Approved', 'Approved Entry', 'FFFFFF', '009933');
INSERT INTO `%_PREFIX_%queues` VALUES(2, 'rejected', 'Rejected', 'Rejected Entry', 'FFFFFF', 'FF0000');
INSERT INTO `%_PREFIX_%queues` VALUES(3, 'pending', 'Pending', 'Pending Entry', '000000', 'FFFF00');