				if (is_file(JPATH_ROOT . "/media/editors/tinymce/templates/replace_values.js"))
				{
					$scripts_replace = file_get_contents(JPATH_ROOT . "/media/editors/tinymce/templates/replace_values.js");
					$template_replacement_values = 'template_replace_values: '.$scripts_replace.',';
					$templates .= '], '.$template_replacement_values;
				}
	
				else{$templates .= '], ';}