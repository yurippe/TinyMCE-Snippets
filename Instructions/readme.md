#Joomla (3.4)
Instructions on how to make advanced templates work in Joomla 3.4:

First go to 

%joomla%/plugins/editors/tinymce/ and edit the file 'tinymce.php'

Go to line 539 where it says:

```$templates .= '],';```
  
and replace it with:

```
if (is_file(JPATH_ROOT . "/media/editors/tinymce/templates/template_list.js"))
{
$scripts_replace = file_get_contents(JPATH_ROOT . "/media/editors/tinymce/templates/replace_values.js");
$template_replacement_values = 'template_replace_values: '.$scripts_replace.',';
$templates .= '], '.$template_replacement_values;
}
	
else{$templates .= '], ';}
```

(The contents of the file tinymce_fix.php in this folder)

Then go to

%joomla%/media/editors/tinymce/templates/

and make a file called
```replace_values.js```

This file will contain the javascript needed to make variables in the TinyMCE template
You can download the file 'replace_values.js' from this folder for an example of how the structure of the file MUST be to work.
