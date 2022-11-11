// Welcome.

// In this kata you are required to, given a string, replace every letter with its position in the alphabet.

// If anything in the text isn't a letter, ignore it and don't return it.

// "a" = 1, "b" = 2, etc.

// Example
// alphabet_position("The sunset sets at twelve o' clock.")
// Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" ( as a string )

// THE ANSWER by Ahmed Mostafa from Egypt.


function alphabet_position(string $s)
{
    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $s = strtolower($s);
    $s = preg_replace('/[^a-z]/i', '', $s);
    $alphNum = array();
    for ($i = 0; $i < strlen($s); $i++) {
        $ln = (array_search($s[$i], $arr)) + 1;
        array_push($alphNum, $ln);
    }
    $a = implode(' ', $alphNum);
    return $a;
}
