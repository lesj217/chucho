<?php
         setcookie("user", "", time()- 86400, "/", "", 0);
         setcookie("privilegio", "", time() - 86400, "/", "", 0);
      
         header('location: ?view=index');
