<?php

use Latte\Runtime as LR;

/** source: D:\projectie\views\pages\contacts.latte */
final class Template061d8e7ddd extends Latte\Runtime\Template
{
	public const Source = 'D:\\projectie\\views\\pages\\contacts.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($content) /* line 1 */;
		echo '
<h1>Contacts</h1>
';
		echo LR\Filters::escapeHtmlText($info) /* line 3 */;
		echo "\n";
	}
}
