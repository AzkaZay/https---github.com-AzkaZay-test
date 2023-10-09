<html>
<head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    font-family: 'Poppins', sans-serif;
}

.alert {
    position: fixed;
    top: 5%;
    right: 2%;
    background: #111;
    color: #fff;
    font-weight: 800;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    padding: 20px;
    width: 300px;
    height: 100vh;
    border-radius: 10px;
    transform: translateX(150%);
    transition: transform 0.3s ease-in-out;
}

.alert .navigation1 {
    display: flex;
    flex-direction: column;
    list-style: none;
    text-align: center;
}

.alert .navigation1 li a {
    text-decoration: none;
    color: #fff;
}

.alert .navigation li a {
    text-decoration: none;
    color: #fff;
}

.alert p {
    margin: 30px;
    letter-spacing: 1px;
}

.alert i {
    display: flex;
    justify-content: flex-end;
    font-size: 30px;
    cursor: pointer;
    color: #fff;
}

body {
    background: #fff;
}

header {
    position: absolute;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1;
    padding: 20px 60px;
    background: #8B0000;
    position: fixed;
    border-bottom: 1px solid #aaa;
}

header .logo {
    color: #fff;
    font-weight: bold;
    font-size: 1.5em;
    text-decoration: none;
}

header ul {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    gap: 60px;
    list-style: none;
}

header .hamburger {
    display: none;
    color: #fff;
    cursor: pointer;
}

@media(max-width:991px) {
    header .hamburger {
        display: block;
    }
}
    </style>
    
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/ebbc1aa60f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

    <script>
            $(document).ready(function () {
            $(".on").click(function () {
                $('.alert').css({
                    'transform': 'translateX(0)',
                });
            });

            $(".close").click(function () {
                $('.alert').css({
                    'transform': 'translateX(150%)',
                });
            });

            $(".out").click(function () {
                $('.alert').css({
                    'transform': 'translateX(150%)',
                });
            })
        })
    </script>


</head>
<body>
    <header>
        <div class="logo">Products and users Management</div>

        </ul>
        <div class="hamburger">
            <i class="fa-solid fa-bars on" id="on"></i>
        </div>
        <div class="alert">
            <ul class="navigation1">
                <i class='bx bxs-x-circle close'></i>
                <li><a href="{{ route('users.index') }}" class="out">Manage Users</a></li>
                <li><a href="{{ route('roles.index') }}" class="out">Manage Role</a></li>
                <li><a href="{{ route('products.index') }}" class="out">Manage Product</a></li>
                <li><a href="{{ route('users.index') }}" class="out">Login Users</a></li>
                <li><a href="{{ route('users.index') }}" class="out">Manage Users</a></li>

            </ul>
            </i>
        </div>
    </header>
</body>
</html>