# composer_quest_3

to do:

- composer install

- replace in vendor/gipetto/cowsay/src/Core/Calf.php on line 133 :

"$strLen = max($strLen, min($this->getMaxLen(), strlen(utf8_decode($line))));" 
by 
"$strLen = max($strLen, min($this->getMaxLen(), strlen(mb_convert_encoding($line, 'ISO-8859-1', 'UTF-8'))));"
