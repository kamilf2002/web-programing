<?php
	header("Content-Type: text/plain");
	
	$text = isset($_GET['identifier']) ? $_GET['identifier'] : null;
	
	if ($inputText !== null && strlen($text) > 0)
	{
		$errors = false;
		if (!isDigit($text[0]))
		{
			for ($i = 0; $i < strlen($text); $i++)
			{
				if (!isAllowedSymbol($text[$i]))
				{
					echo 'В идентификаторе не может содержаться ' . "'" . $text[$i] . "'.\n";
					$errors = true;
				}
			}
		}
		else
		{
			echo "Идентификатор не может начинаться с цифры.\n";
			$errors = true;
		}
		echo $errors ? 'no' : 'yes';
	}
	else
	{
		echo 'Данные некоректны';
	}
	
	function checkIndentifier(string $text)
	{
		$errors = false;
		if (!isDigit($text[0]))
		{
			for ($i = 0; $i < strlen($text); $i++)
			{
				if (!isSymbol($text[$i]))
				{
					echo 'В идентификаторе не может содержаться ' . "'" . $text[$i] . "'.\n";
					$errors = true;
				}
			}
		}
		else
		{
			echo "Идентификатор не может начинаться с цифры.\n";
			$hasErrors = true;
		}
		echo $errors ? 'no' : 'yes';
	}
function isDigit(string $ch): bool
	{
		return $ch == '0' || $ch == '1' || $ch == '2' || $ch == '3' || $ch == '4' || $ch == '5' || $ch == '6' || $ch == '7' || $ch == '8'|| $ch == '9';
	}
	
	function isLetter(string $ch): bool
	{
		return $ch == 'A' || $ch == 'a'|| $ch == 'B' || $ch == 'b'|| $ch == 'C' || $ch == 'c'|| $ch == 'D' || $ch == 'd'|| $ch == 'E' || $ch == 'e'|| $ch == 'F' || $ch == 'f'|| $ch == 'G' || $ch == 'g'|| $ch == 'H' || $ch == 'h'|| $ch == 'I' || $ch == 'i'|| $ch == 'J' || $ch == 'j'|| $ch == 'K' || $ch == 'k'|| $ch == 'L' || $ch == 'l'|| $ch == 'M' || $ch == 'm'|| $ch == 'N' || $ch == 'n'|| $ch == 'O' || $ch == 'o'|| $ch == 'P' || $ch == 'p'|| $ch == 'Q' || $ch == 'q'|| $ch == 'R' || $ch == 'r'|| $ch == 'S' || $ch == 's'|| $ch == 'T' || $ch == 't'|| $ch == 'U' || $ch == 'u'|| $ch == 'V' || $ch == 'v'|| $ch == 'W' || $ch == 'w'|| $ch == 'X' || $ch == 'x'|| $ch == 'Y' || $ch == 'y'|| $ch == 'Z' || $ch == 'z';
	}
	
	function isSymbol(string $ch): bool
	{
		return isLetter($ch) || isDigit($ch);
	}
