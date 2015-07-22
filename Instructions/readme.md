#Joomla (3.4)
Instructions on how to make advanced templates work in Joomla 3.4:

  First go to %joomla%/plugins/editors/tinymce/ and edit the file 'tinymce.php'
  Go to line 539 where it says:
  
  $templates .= '],';
