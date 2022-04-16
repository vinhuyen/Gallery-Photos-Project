<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="adminStyle.css">
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus bx-tada'></i>
            <span class="logo_name">Photo</span>
        </div>
        <ul class="nav-links">
            <li>
                <!-- <a href="#" class="active"> -->
                <a href="#" onclick="dashboard()">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="userManager()">
                    <i class='bx bx-user-circle'></i>
                    <span class="links_name">Dccount user</span>
                </a>

            </li>
            <li>
                <a href="#" onclick="photoManager()">
                    <i class='bx bx-photo-album'></i>
                    <span class="links_name">Post</span>
                </a>
            </li>
            <li>
                <a href="#" onclick="billManager()">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">photo</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-message'></i>
                    <span class="links_name">Messenger</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Lions Team</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" onclick="logout()">Logout</a>
                    </div>
                </li>
            </ul>
            </div>
        </nav>
        </ul>
        </div>
        <div class="col-10">
            <div class="tab-pane" id="product">
                <h3 class="display-4">Post</h3>
                <hr style="border: 1px solid rgb(0, 0, 0); ">
                <div class="bookroom">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody id="tblcancal">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>
                    <button id="create" type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <i class=" fas fa-plus mr-2">Add post</i>
                    </button>
                </div>
            </div>
            <div class="tab-pane active" id="user">
                <h3 class="display-4">Accoutn user</h3>
                <hr style="border: 1px solid rgb(0, 0, 0); ">
                <div class="customer">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody id="tblcancal">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane active" id="bill">
                <h3 class="display-4">Contact</h3>
                <hr style="border: 1px solid rgb(0, 0, 0); ">
                <div class="bill ">
                    <table class="table table-hover ">
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody id="tblcancal">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div id="home-content">
            <div class="overview-boxes">
                <div class="box" onclick="photoManager()">
                    <div class="right-side" onclick="photoManager()">
                        <div class="box-topic" onclick="photoManager()">Post</div>
                        <div id="totalBill" class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt' onclick="photoManager()"></i>
                            <span id="updateTotalBill" class="text"></span>
                        </div>
                    </div>
                    <img class="img" src="./Img/bill.png" alt="">
                    <!-- <i class='bx bx-cart-alt cart'></i> -->
                </div>
                <div class="box" onclick="userManager()">
                    <div class="right-side" onclick="userManager()">
                        <div class="box-topic" onclick="userManager()">Account user</div>
                        <div id="totalUsers" class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt' onclick="userManager()"></i>
                            <span id="updateTotalUser" class="text"></span>
                        </div>
                    </div>
                    <img class="img" src="./Img/user.png" alt="">
                    <!-- <i class='bx bxs-cart-add cart two'></i> -->
                </div>
                <div class="box" onclick="billManager() ">
                    <div class="right-side" onclick="billManager() ">
                        <div class="box-topic" onclick="billManager()">Contact</div>
                        <div id="turnover" class="number"></div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt' onclick="billManager()"></i>
                            <span id="updateTotalTurnover" class="text"></span>
                        </div>
                    </div>
                    <img class="img" src="./Img/budget.png" alt="">
                    <!-- <i class='bx bx-cart cart three'></i> -->
                </div>


            </div>

        </div>
        <!-- ---------------------------------modal---------------------------------------------------------- -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Add photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-row">
                            <div class="col-12 mt-3">
                                <input class="form-control" type="text" id="name" placeholder="name">
                            </div>
                            <div class="col-12 mt-3">
                                <input class="form-control" type="text" id="imgProduct" placeholder="image">
                            </div>
                            <div class="col-12 mt-3">
                                <input class="form-control" type="text" id="description" placeholder="description">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="reset()"
                            data-bs-dismiss="modal">cancel</button>
                        <button type="button" class="btn btn-primary" id='add' onclick="add()"
                            data-bs-dismiss="modal">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="adminjs.js"></script>
</body>

</html>