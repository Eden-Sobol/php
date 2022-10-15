function cl($msg) {
	$console = 'console.log(' . json_encode($msg) . ');';
    $console = sprintf('<script>%s</script>', $console);
    echo $console;
}
