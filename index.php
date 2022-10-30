<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ToDo List</title>
        <link rel="stylesheet" href="style.css">
    </head>
        <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand"><i class="fa-solid fa-note-sticky" style="padding-right: 4px;"></i>Notities</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="components/createlist.php">Lijst maken<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            </nav>
        </header>
    </body>
    <footer>
        <?php   
            include("components/footer.php"); 
        ?>
    </footer>
</html>