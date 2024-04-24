<?php

use Latte\Runtime as LR;

/** source: D:\projectie\views\pages\catalogue.latte */
final class Templatede94b8181b extends Latte\Runtime\Template
{
	public const Source = 'D:\\projectie\\views\\pages\\catalogue.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo LR\Filters::escapeHtmlText($title) /* line 1 */;
		echo '
<br>
<h1>Furuuuuuuuuuuuuuuuuuuuuuuutie</h1>

<!-- catalog.latte -->
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<ul>
';
		foreach ($array_fruits as $fruit) /* line 13 */ {
			echo '        <li>';
			echo LR\Filters::escapeHtmlText($fruit) /* line 14 */;
			echo '</li>
';

		}

		echo '
</ul>
</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['fruit' => '13'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
