<?php
	header("Content-Type: text/plain");
	
	$Text = isset($_GET['text']) ? $_GET['text'] : null;
	
	if ($Text !== null && strlen($Text) > 0)
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
