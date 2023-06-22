<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap5.mi  n.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/styleAdmin.css')}}"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Admin</title>
</head>


<body>
<script>
    // const currentUser = localStorage.getItem("currentUser") ? JSON.parse(localStorage.getItem("currentUser")) : null
    // if (currentUser === null) {
    //     const markup =
    //         `
    //         <div class="login_wrapper">
    //             <div id="loggedin" class="container">
    //                     <label>Username</label>
    //                     <input class="username" id="username" name="username" placeholder="Username">
    //                     <label>Password</label>
    //                     <input class="password" type="password" id="password" name="password" placeholder="Password">
    //                     <button onclick="submit()" class="submit">Log in</button>
    //             </div>
    //         </div>
    //         `
    //     document.querySelector('body').insertAdjacentHTML('afterbegin', markup);
    // } else {
        const markup =
            `
            <!-- top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#sidebar"
            aria-controls="offcanvasExample"
        >
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
            class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
            href="#"
        >Admin</a
        >
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#topNavBar"
            aria-controls="topNavBar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <form class="d-flex ms-auto my-3 my-lg-0">
                <div class="input-group">
                    <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle ms-2"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <a class="dropdown-item" onclick="logout()">Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- top navigation bar -->
<!-- offcanvas -->
<div
    class="offcanvas offcanvas-start sidebar-nav bg-dark"
    tabindex="-1"
    id="sidebar"
>
    <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
            <ul class="navbar-nav">
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Manage Products
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <img src="http://localhost:8000/images/Waiting.png" alt="">
                        <span>Awaiting Approval</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.approved')}}" class="nav-link px-3">
                        <img src="http://localhost:8000/images/approval.png" alt="">
                        <span>Approved</span>
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider bg-light"/>
                </li>
                <li>
                    <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Account
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-person-check"></i></span>
                        <span>Change password</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- offcanvas -->
<main class="mt-5 pt-3">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        Awaiting Approval
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Condition</th>
                <th scope="col">Post_date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr id="product_{{ $product->id }}">
                <td>{{ $product->prod_name }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->condition}}%</td>
                <td>{{ $product->created_at}}</td>
                <td style="display: flex">
                    <form action="{{  route('admin.approve', ['id' => $product->id]) }}" method="POST">
                        @csrf
            <a href="" onclick="approved({{ $product->id }})"><button style="border: none" type="submit"><i class="material-icons" style="color : green ; background-color : white " data-toggle="tooltip" title="Approve">check_circle</i></button></a>
                    </form>

                    <a href="/products/{{ $product->id }}"><i class="material-icons" data-toggle="tooltip" title="View">&#xE8F4;</i></a>
                    <form action="{{  route('admin.delete.aa', ['id' => $product->id]) }}" method="POST">
                        @csrf
            <a href="" onclick="deleteProduct({{ $product->id }})"><button style="border: none" type="submit"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button></a>
                    </form>
                    {{-- <a href="" onclick="deleteProduct({{ $product->id }})"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a> --}}

            </td>
        </tr>
@endforeach
            </tbody>
        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
`
        document.querySelector('body').insertAdjacentHTML('afterbegin', markup);
    // }
</script>
<script>
    const hashCode = s =>
        s.split('').reduce((a, b) => {
            a = (a << 5) - a + b.charCodeAt(0);
            return a & a;
        }, 0);
    //  const user =
    //  {
    //     username : 'admin-giveback' ,
    //     password : String(hashCode('123456789'))

    // };
    // localStorage.setItem('user' , JSON.stringify(user)) ;

    const adminData = JSON.parse(localStorage.getItem("user"))
    const submit = () => {
        // e.preventDefault();
        const username = document.getElementById("username").value
        const password = document.getElementById("password").value
        window.location.reload()
        const admin = {
            "username": username,
            "password": String(hashCode(password))
        }
        if (username === adminData.username && String(hashCode(password)) === adminData.password) {
            localStorage.setItem("currentUser", JSON.stringify(admin))
        } else
            alert('Wrong information!!!')
    }

    function logout() {
        localStorage.removeItem("currentUser")
        window.location.reload()
    }
</script>

<script src="scripts/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="scripts/jquery-3.5.1.js"></script>
<script src="scripts/jquery.dataTables.min.js"></script>
<script src="scripts/dataTables.bootstrap5.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>
