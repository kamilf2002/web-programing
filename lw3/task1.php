<?php
	header("Content-Type: text/plain");
	
	$text = isset($_GET['text']) ? $_GET['text'] : null;
	
	if ($text !== null && strlen($text) > 0)
	{
		$formattedString = '';
		$isBlankFound = true;
		for ($i = 0; $i < strlen($text); $i++)
		{
			if ($text[$i] !== ' ')
			{
				$formattedString .= $text[$i];
				$isBlankFound = false;
			}
			else
			{
				if ($isBlankFound == false)
				{
					$isBlankFound = true;
					$formattedString .= $text[$i];
				}
			}
		}
		echo $formattedString;
	}
	else
	{
		echo 'Данные некоректны';
	}
