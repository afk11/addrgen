#!/usr/bin/php
<?php

require 'addrgen.php';

for ($i = 0; $i < 5; $i++) {
	print addr_from_mpk('675b7041a347223984750fe3ab229df0c9f960e7ec98226b7182a2cb1990e39901feecf5a670f1d788ab29f626e20de424f049d216fc6f4c6ec42506763fa28e', $i) . "\n";
}

/*

should print:

13EfJ1hQBGMBbEwvPa3MLeH6buBhiMSfCC
1AZW6GGmsUizkHhrtg853Qnxk68vCx2gFq
1M7ReiRrcYygYYLdyPS2cKQi7p9s9ViFS1
1NcawzHFoECpDhz8hUCZp43hGjvdEB8DBA
1PjcUN9kEBn3kvUmT2BXezwTG4RRvrqjRw

*/

?>
