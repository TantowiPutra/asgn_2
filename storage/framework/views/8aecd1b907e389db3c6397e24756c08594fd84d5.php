<style>
    .active {
        border-bottom: 1px solid rgb(231, 121, 42);
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(51, 41, 46, 1)">
    <div class="container">
        <a class="navbar-brand" href="#">Tantowi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <?php if($status == 'home'): ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link inactive" aria-current="page" href="/home">Home</a>
                    </li>
                <?php endif; ?>
                <?php if($status == 'about'): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about">About</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link inactive" href="/about">About</a>
                    </li>
                <?php endif; ?>
                <?php if($status == 'project'): ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/project">Project</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link inactive" href="/project">Project</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\asg_2\resources\views/partial/navbar.blade.php ENDPATH**/ ?>