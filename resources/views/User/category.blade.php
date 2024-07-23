<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>

    {{-- Bx Icon CDN --}}
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    {{-- Logo --}}
    <link rel="web icon" type="png" href="{{ asset('images/logotbvector-copy.png') }}">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    :root {
        --color-default: #69888e;
        --color-second: #3d5f66;
        --color-white: #fff;
        --color-body: #e4e9f7;
        --color-body-sec: #d1d7ea;
        --color-light: #e0e0e0;
        --transition: all 0.3s ease;
    }

    * {
        padding: 0%;
        margin: 0%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }


    body {
        min-height: 100vh;
        background-color: var(--color-body);
    }

    .sidebar {
        min-height: 100vh;
        width: 78px;
        padding: 6px 14px;
        z-index: 99;
        background-color: var(--color-default);
        transition: all .5s ease;
        position: fixed;
        top: 0;
        left: 0;
    }

    .sidebar.open {
        width: 250px;
    }

    .sidebar .logo_details {
        height: 60px;
        display: flex;
        align-items: center;
        position: relative;
    }

    .sidebar .logo_details .icon {
        opacity: 0;
        transition: all 0.5s ease;
    }

    .sidebar .logo_details .logo_name {
        color: var(--color-white);
        font-size: 22px;
        font-weight: 600;
        opacity: 0;
        transition: all .5s ease;
    }

    .sidebar.open .logo_details .icon,
    .sidebar.open .logo_details .logo_name {
        opacity: 1;
    }

    .sidebar .logo_details #btn {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        font-size: 23px;
        text-align: center;
        cursor: pointer;
        transition: all .5s ease;
    }

    .sidebar.open .logo_details #btn {
        text-align: right;
    }

    .sidebar i {
        color: var(--color-white);
        height: 60px;
        line-height: 60px;
        min-width: 50px;
        font-size: 25px;
        text-align: center;
    }

    .sidebar .nav-list {
        margin-top: 20px;
        height: 100%;
    }

    .sidebar li {
        position: relative;
        margin: 8px 0;
        list-style: none;
    }

    .sidebar li .tooltip {
        position: absolute;
        top: -20px;
        left: calc(100% + 15px);
        z-index: 3;
        background-color: var(--color-white);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        padding: 6px 14px;
        font-size: 15px;
        font-weight: 400;
        border-radius: 5px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
    }

    .sidebar li:hover .tooltip {
        opacity: 1;
        pointer-events: auto;
        transition: all 0.4s ease;
        top: 50%;
        transform: translateY(-50%);
    }

    .sidebar.open li .tooltip {
        display: none;
    }

    .sidebar .bx-search {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 22px;
        background-color: var(--color-second);
        color: var(--color-white);
    }

    .sidebar li a {
        display: flex;
        height: 100%;
        width: 100%;
        align-items: center;
        text-decoration: none;
        background-color: var(--color-default);
        position: relative;
        transition: all .5s ease;
        z-index: 12;
    }

    .sidebar li a::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        transform: scaleX(0);
        background-color: var(--color-white);
        border-radius: 5px;
        transition: transform 0.3s ease-in-out;
        transform-origin: left;
        z-index: -2;
    }

    .sidebar li a:hover::after {
        transform: scaleX(1);
        color: var(--color-default)
    }

    .sidebar li a .link_name {
        color: var(--color-white);
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
        pointer-events: auto;
        transition: all 0.4s ease;
        pointer-events: none;
        opacity: 0;
    }

    .sidebar li a:hover .link_name,
    .sidebar li a:hover i {
        transition: all 0.5s ease;
        color: var(--color-default)
    }

    .sidebar.open li a .link_name {
        opacity: 1;
        pointer-events: auto;
    }

    .sidebar li i {
        height: 35px;
        line-height: 35px;
        font-size: 18px;
        border-radius: 5px;
    }

    .sidebar li.profile {
        position: fixed;
        height: 65px;
        width: 78px;
        left: 0;
        bottom: -8px;
        padding: 10px 14px;
        overflow: hidden;
        transition: all .5s ease;
    }

    .sidebar.open li.profile {
        width: 250px;
    }

    .sidebar .profile .profile_details {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
    }

    .sidebar li img {
        height: 45px;
        width: 45px;
        object-fit: cover;
        border-radius: 50%;
        margin-right: 10px;
    }

    .sidebar li.profile .name,
    .sidebar li.profile .designation {
        font-size: 15px;
        font-weight: 400;
        color: var(--color-white);
        white-space: nowrap;
    }

    .sidebar li.profile .designation {
        font-size: 12px;
    }

    .sidebar .profile #log_out {
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        background-color: var(--color-second);
        width: 100%;
        height: 60px;
        line-height: 60px;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .sidebar.open .profile #log_out {
        width: 50px;
        background: none;
    }


    .sidebar.open~.header {
        left: 200px;
        width: calc(95% - 250px);
    }

    .sidebar.open~.horor {
        left: 200px;
        width: calc(95% - 250px);
    }

    .sidebar.open~.action {
        left: 200px;
        width: calc(95% - 250px);
    }

    .sidebar.open~.comedy {
        left: 200px;
        width: calc(95% - 250px);
    }

    .sidebar.open~.tbook {
        left: 200px;
        width: calc(95% - 250px);
    }

    .profile_user {
        margin-right: 50%;
        height: 13px;
        width: 13px;
        margin: 0%;
        padding: 0%;
    }

    .header {
        position: relative;
        background-color: var(--color-body);
        top: 0;
        left: 100px;
        transition: all .5s ease;
        z-index: 2;
        display: flex;
        margin-left: 100px;
        height: 100px;
        width: 80%;
        justify-content: space-between;
        padding: 30px;
    }

    .header .text-header {
        color: var(--color-default);
        font-size: 25px;
        font-weight: 500;
    }

    .header-profile {
        display: flex;
        justify-content: center;
        align-items: center;
        height: max-content;
        width: 100px;
        gap: 20px;
    }


    .header-profile>img {
        width: 45px;
        border-radius: 10px;
        cursor: pointer;
    }

    .header i {
        font-size: 30px;
        color: var(--color-default);
        cursor: pointer;
    }

    .header-content {
        width: 40px;
        display: flex;
        justify-content: space-between;
    }

    .button-horor,
    .button-action,
    .button-comedy, .button-tbook {
        width: 40px;
        height: 40px;
        border-radius: 30px;
        font-size: 50px;
        align-items: center;
        display: flex;
        justify-content: center;
        background-color: var(--color-second);
        transition: var(--transition);
        color: white;
        border: none;
    }

    .button-horor:hover,
    .button-action:hover,
    .button-comedy:hover, .button-tbook:hover {
        background-color: var(--color-default);
    }

    /* horor */
    .horor,
    .action,
    .comedy,
    .tbook {
        position: relative;
        background-color: var(--color-body);
        top: 0;
        left: 100px;
        transition: all .5s ease;
        z-index: 2;
        display: flex;
        flex-direction: column;
        margin-left: 100px;
        height: max-content;
        width: 80%;
        padding: 30px;
    }

    .horor-header,
    .action-header,
    .comedy-header,
    .tbook-header {
        display: flex;
        justify-content: space-between;
        text-align: center;
        height: max-content;
        width: 100%;
    }

    .horor-content,
    .action-content,
    .comedy-content,
    .tbook-content {
        display: flex;
        flex-direction: column;
    }

    .horor-content-book,
    .action-content-book,
    .comedy-content-book,
    .tbook-content-book {
        display: flex;
        justify-content: space-between;
    }

    /* Horor Book */
    .main-horor-book-1 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F4.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }


    .main-horor-book-2 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F4.jpg');
        background-size: cover;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-horor-book-3 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F4.jpg');
        background-size: cover;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-horor-book-4 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F4.jpg');
        background-size: cover;
        display: flex;
        justify-content: space-around;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    /* Action Book */
    .main-action-book-1 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F1.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-action-book-2 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F1.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-action-book-3 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F1.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-action-book-4 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F1.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    /* Comedy */
    .main-comedy-book-1 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F6.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-comedy-book-2 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F6.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-comedy-book-3 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F6.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-comedy-book-4 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F6.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    /* Tbook */
    .main-tbook-book-1 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F3.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-tbook-book-2 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F3.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-tbook-book-3 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F3.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .main-tbook-book-4 {
        width: 270px;
        height: 400px;
        border-radius: 10px;
        margin-top: 20px;
        background-image: url('/images/F3.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }
</style>

<body>
    {{-- Sidebar --}}
    <div class="sidebar">

        {{-- Sidebar Header --}}
        <div class="logo_details">
            <i class='bx bx-book-open icon'></i>
            <div class="logo_name">Starlearn</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>

        {{-- Sidebar Footer --}}
        <li class="profile">
            <div class="profile_details">
                <img src="{{ asset('images/Asta.jpeg') }}" alt="profile image">
                <div class="profile_content">
                    <div class="name">Kemal Gafan</div>
                </div>
            </div>
            <i class="bx bx-log-out" id="log_out"></i>
        </li>

        {{-- Sidebar Content --}}
        <ul class="nav-list">
            <li>
                <a href="/dashboard">
                    <i class='bx bx-library'></i>
                    <span class="link_name">My Library</span>
                </a>
                <span class="tooltip">My Library</span>
            </li>
            <li>
                <a href="/category">
                    <i class='bx bxs-category'></i>
                    <span class="link_name">Category</span>
                </a>
                <span class="tooltip">Category</span>
            </li>
            <li>
                <a href="/favorite">
                    <i class='bx bxs-bookmarks'></i>
                    <span class="link_name">Starlist</span>
                </a>
                <span class="tooltip">Starlist</span>
            </li>
        </ul>
    </div>
    {{-- End Sidebar --}}

    {{-- Header --}}
    <header class="header">

        {{-- Title --}}
        <div class="text-header">
            <h4>Category</h4>
        </div>

        {{-- Content --}}
        <div class="header-profile">
            <i class='bx bx-bell'></i>
            <img src="{{ asset('images/Asta.jpeg') }}" alt="profile image">
        </div>
    </header>

    {{-- Horor --}}
    <div class="horor">

        {{-- Header --}}
        <div class="horor-header">
            <h2>Horor</h2>
            <button class="button-horor">
                <a href="/dashboard/popular" class="button-horor">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="horor-content">
            <div class="horor-content-book">
                <div class="main-horor-book-1"></div>
                <div class="main-horor-book-2"></div>
                <div class="main-horor-book-3"></div>
                <div class="main-horor-book-4"></div>
            </div>
        </div>
    </div>

    {{-- Action --}}
    <div class="action">

        {{-- Header --}}
        <div class="action-header">
            <h2>Action</h2>
            <button class="button-action">
                <a href="/dashboard/popular" class="button-action">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="action-content">
            <div class="action-content-book">
                <div class="main-action-book-1"></div>
                <div class="main-action-book-2"></div>
                <div class="main-action-book-3"></div>
                <div class="main-action-book-4"></div>
            </div>
        </div>
    </div>

    {{-- Comedy --}}
    <div class="comedy">

        {{-- Header --}}
        <div class="comedy-header">
            <h2>Comedy</h2>
            <button class="button-comedy">
                <a href="/dashboard/popular" class="button-comedy">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="comedy-content">
            <div class="comedy-content-book">
                <div class="main-comedy-book-1"></div>
                <div class="main-comedy-book-2"></div>
                <div class="main-comedy-book-3"></div>
                <div class="main-comedy-book-4"></div>
            </div>
        </div>
    </div>

    {{-- Tbook --}}
    <div class="tbook">

        {{-- Header --}}
        <div class="tbook-header">
            <h2>Text Book</h2>
            <button class="button-tbook">
                <a href="/dashboard/popular" class="button-tbook">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="tbook-content">
            <div class="tbook-content-book">
                <div class="main-tbook-book-1"></div>
                <div class="main-tbook-book-2"></div>
                <div class="main-tbook-book-3"></div>
                <div class="main-tbook-book-4"></div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            const sidebar = document.querySelector(".sidebar");
            const closeBtn = document.querySelector("#btn");
            const searchBtn = document.querySelector(".bx-search")

            closeBtn.addEventListener("click", function() {
                sidebar.classList.toggle("open")
                menuBtnChange()
            })

            searchBtn.addEventListener("click", function() {
                sidebar.classList.toggle("open")
                menuBtnChange()
            })

            function menuBtnChange() {
                if (sidebar.classList.contains("open")) {
                    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right")
                } else {
                    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu")
                }
            }
        }
    </script>
</body>

</html>
