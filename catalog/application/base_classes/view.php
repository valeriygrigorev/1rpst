<?php
class View
{
	function generate($content_view, $template_view, $items)
	{
			if($items!=null)$items = $items;
			
			include "$template_view";
	}
}