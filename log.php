<?
	function logf($line)
	{
		assert(defined('LOG_FILE'));

		logf_ex(LOG_FILE, $line);
	}

	function logf_ex($file, $line)
	{
		$f = fopen($file, 'a');
		if (! $f)
			return;

		$line = strftime("%F %T") . '  ' . $line . "\n";

		fwrite($f, $line);
		fclose($f);
	}
?>
