<?php
	header("Content-Type: text/plain");
	
	$text = isset($_GET['password']) ? $_GET['password'] : null;
	
	if ($text !== null && strlen($text) > 0)
	{
                $difficulty = strlen($text) * 4;
		$digitsCount = 0;
		$upperLettersCount = 0;
		$lowerLettersCount = 0;
		$hasDigits = false;
		$hasLetters = false;
		
		for ($i = 0; $i < strlen($text); $i++)
		{
			if (isDigit($text[$i]))
			{
				$digitsCount++;
				$hasDigits = true;
			}
			if (isLetter($text[$i]))
            {
                if (ctype_upper($text[$i]))
                {
                    $upperLettersCount++;
                }
                if (ctype_lower($text[$i]))
                {
                    $lowerLettersCount++;
                }
                $hasLetters = true;
            }

			if (substr_count($text[$i], $text) > 1)
			{
				$difficulty -= substr_count($text[$i], $text);
			}
		}
		
		if (!$hasDigits)
		{
			$difficulty -= strlen($text);
		}
		
		if (!$hasLetters)
		{
			$difficulty -= strlen($text);
		}
		
		$difficulty += $digitsCount * 4; 
		$difficulty += ((strlen($text) - $upperLettersCount) * 2);
		$difficulty += ((strlen($text) - $lowerLettersCount) * 2);
		echo $difficulty;;
	}
	else
	{
		echo 'Введены некорректные данные';
	}

        function isDigit(string $ch): bool
	{
		return $ch == '0' || $ch == '1' || $ch == '2' || $ch == '3' || $ch == '4' || $ch == '5' || $ch == '6' || $ch == '7' || $ch == '8'|| $ch == '9';
	}
	
	function isLetter(string $ch): bool
	{
		return $ch == 'A' || $ch == 'a'|| $ch == 'B' || $ch == 'b'|| $ch == 'C' || $ch == 'c'|| $ch == 'D' || $ch == 'd'|| $ch == 'E' || $ch == 'e'|| $ch == 'F' || $ch == 'f'|| $ch == 'G' || $ch == 'g'|| $ch == 'H' || $ch == 'h'|| $ch == 'I' || $ch == 'i'|| $ch == 'J' || $ch == 'j'|| $ch == 'K' || $ch == 'k'|| $ch == 'L' || $ch == 'l'|| $ch == 'M' || $ch == 'm'|| $ch == 'N' || $ch == 'n'|| $ch == 'O' || $ch == 'o'|| $ch == 'P' || $ch == 'p'|| $ch == 'Q' || $ch == 'q'|| $ch == 'R' || $ch == 'r'|| $ch == 'S' || $ch == 's'|| $ch == 'T' || $ch == 't'|| $ch == 'U' || $ch == 'u'|| $ch == 'V' || $ch == 'v'|| $ch == 'W' || $ch == 'w'|| $ch == 'X' || $ch == 'x'|| $ch == 'Y' || $ch == 'y'|| $ch == 'Z' || $ch == 'z';
	}
