
<?php

echo "Merci " .$_POST['user_name']." de nous avoir contacté à propos de ".$_POST['subject'].

"<br/>Un de nos conseiller vous contactera soit à l’adresse " .$_POST['user_mail']." ou par téléphone au  " .$_POST['user_phone']." dans les plus brefs délais pour traiter votre demande : 
<br/>
" .$_POST['user_message']."";

?>
