<?php

use Latte\Runtime as LR;

/** source: D:\projectie\src/../views/index.latte */
final class Templatee37c73afaf extends Latte\Runtime\Template
{
	public const Source = 'D:\\projectie\\src/../views/index.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        ';
		echo LR\Filters::escapeHtmlText($title) /* line 11 */;
		echo '
    </title>
</head>
<body>
';
		$this->createTemplate('nav.latte', $this->params, 'include')->renderToContentType('html') /* line 15 */;
		$this->createTemplate("pages/{$page}.latte", $this->params, 'include')->renderToContentType('html') /* line 16 */;
		$this->createTemplate('footer/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 17 */;
		echo '</body>
</html>';
	}
}
