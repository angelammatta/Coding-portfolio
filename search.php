<!DOCTYPE html>
<html>
<body>

<?php
$site = substr(filter_input(INPUT_GET, 'site', FILTER_SANITIZE_STRING),0,8);
$terms = substr(filter_input(INPUT_GET, 'terms', FILTER_SANITIZE_STRING),0,25);

if ($site=="google") header('Location: https://www.google.com/search?q=' . $terms);
    elseif ($site=="googlei") header('Location: https://www.google.com/search?q=' . $terms . '&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiRusLI2ebzAhXYK80KHcWPCFkQ_AUoA3oECAEQBQ&biw=1600&bih=789&dpr=1');
    elseif ($site=="duck") header('Location: https://www.duckduckgo.com/?q=' . $terms);
    elseif ($site=="wiki") header('Location: https://en.wikipedia.org/w/index.php?search=' . $terms);
        




?>

</body>
</html>
