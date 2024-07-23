<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
a {
    text-decoration: none;
    color: #fff;
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

.sidebar.open~section {
    left: 200px;
    width: calc(95% - 250px);
}

.sidebar.open~.for-you {
    left: 200px;
    width: calc(95% - 250px);
}

.sidebar.open~.recently {
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

/* Section */
.section {
    position: relative;
    background-color: var(--color-body);
    top: 0;
    left: 100px;
    transition: all .5s ease;
    z-index: 2;
    display: flex;
    justify-content: space-between !important;
    flex-direction: column;
    margin-left: 100px;
    height: 420px;
    width: 80%;
    padding: 30px;
}

.popular-header-text {
    display: flex;
    justify-content: space-between;
    text-align: center;
    height: max-content;
    width: 100%;
}

.see-all {
    cursor: pointer;
}

.popular-content {
    display: flex;
    justify-content: space-between;
    margin-bottom: 50px;
    width: 100%;
}

.popular-content i {
    color: gold;
}

.popular-book-1 {
    width: 400px;
    height: 250px;
    border-radius: 5px;
    background-image: url('/images/B1.png');
    background-size: cover;
    display: flex;
    justify-content: center;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
    transition: var(--transition);
}

.popular-book-1:hover {
    transform: scale(1.1);
}

.popular-book-2 {
    width: 400px;
    height: 250px;
    border-radius: 5px;
    background-image: url('/images/B2.png');
    background-size: cover;
    display: flex;
    justify-content: center;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
    transition: var(--transition);
}

.popular-book-2:hover {
    transform: scale(1.1);
}

.popular-book-3 {
    width: 400px;
    height: 250px;
    border-radius: 5px;
    background-image: url('/images/B3.jpg');
    background-size: cover;
    display: flex;
    justify-content: center;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
    transition: var(--transition);
}

.popular-book-3:hover {
    transform: scale(1.1);
}

.main-popular-book-1 {
    width: 120px;
    height: 170px;
    border-radius: 10px;
    background-image: url('/images/F1.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    transition: var(--transition);
}

.main-popular-book-2 {
    width: 120px;
    height: 170px;
    border-radius: 10px;
    background-image: url('/images/F2.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
}

.main-popular-book-3 {
    width: 120px;
    height: 170px;
    border-radius: 10px;
    background-image: url('/images/F3.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
}

.main-popular-text-1 {
    width: 50%;
    font-size: 15px;
    padding: 10px;
    gap: 10px;
    margin: 10px 10px;
    color: white;
}

.main-popular-text-2 {
    width: 50%;
    font-size: 15px;
    padding: 10px;
    gap: 10px;
    margin: 10px 10px;
    color: white
}

.main-popular-text-3 {
    width: 50%;
    font-size: 15px;
    padding: 10px;
    gap: 10px;
    margin: 10px 10px;
    color: white
}

.main-content-popular-1 {
    display: flex;
    padding: 30px;
    gap: 30px
}

.main-content-popular-2 {
    display: flex;
    padding: 30px;
    gap: 30px
}

.main-content-popular-3 {
    display: flex;
    padding: 30px;
    gap: 30px
}

.button-popular i {
    display: flex;
    text-align: center;
}

.button-popular,
.button-for-you,
.button-recently {
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

.button-popular:hover,
.button-for-you:hover,
.button-recently:hover {
    background-color: var(--color-default);
}

/* For You */
.for-you {
    position: relative;
    background-color: var(--color-body);
    top: 0;
    left: 100px;
    transition: all .5s ease;
    z-index: 2;
    display: flex;
    justify-content: space-between !important;
    flex-direction: column;
    margin-left: 100px;
    height: 670px;
    width: 80%;
    padding: 30px;
}

.for-you-content {
    margin-top: 20px;
}

.for-you-content i {
    color: gold;
}

.for-you-container-1 {
    display: flex;
    justify-content: space-between
}

.for-you-header {
    display: flex;
    justify-content: space-between;
    text-align: center;
    height: max-content;
    width: 100%;
}

.main-content-for-you-1 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-2 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-3 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-4 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-5 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-6 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-7 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-content-for-you-8 {
    width: 300px;
    height: 300px;
    gap: 20px;
    display: flex;
}

.main-for-you-book-1 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/F1.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-2 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/N1.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-3 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/N2.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-4 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/N3.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-5 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/N4.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-6 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/N5.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-7 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/F6.jpeg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-book-8 {
    width: 130px;
    height: 170px;
    border-radius: 5px;
    margin-bottom: 130px;
    background-image: url('/images/F4.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    cursor: pointer;
}

.main-for-you-text-1,
.main-for-you-text-2,
.main-for-you-text-3,
.main-for-you-text-4,
.main-for-you-text-5,
.main-for-you-text-6,
.main-for-you-text-7,
.main-for-you-text-8 {
    margin-top: 50px;
}

/* Recently */
.recently {
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

.recently-header {
    display: flex;
    justify-content: space-between;
    text-align: center;
    height: max-content;
    width: 100%;
}

.recently-content {
    display: flex;
    flex-direction: column;
}

.recently-content-book-1 {
    display: flex;
    justify-content: space-between;
}

.main-recently-book-1 {
    width: 270px;
    height: 400px;
    border-radius: 10px;
    margin-top: 20px;
    background-image: url('/images/F1.jpg');
    background-size: cover;
    display: flex;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
}

.main-recently-book-2 {
    width: 270px;
    height: 400px;
    border-radius: 10px;
    margin-top: 20px;
    background-image: url('/images/F2.jpg');
    background-size: cover;
    display: flex;
    justify-content: space-around;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
}

.main-recently-book-3 {
    width: 270px;
    height: 400px;
    border-radius: 10px;
    margin-top: 20px;
    background-image: url('/images/F3.jpg');
    background-size: cover;
    display: flex;
    justify-content: space-around;
    box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
}

.main-recently-book-4 {
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
            <h4>My Library</h4>
        </div>

        {{-- Content --}}
        <div class="header-profile">
            <i class='bx bx-bell'></i>
            <img src="{{ asset('images/Asta.jpeg') }}" alt="profile image">
        </div>
    </header>

    {{-- Section --}}
    <section class="section">

        {{-- Title --}}
        <div class="popular-header-text">
            <h2>Popular Books</h2>
            <button class="button-popular">
                <a href="/dashboard/popular" class="button-popular">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="popular-content">

            {{-- Content 1 --}}
            <div class="popular-book-1">
                <a href="{{ route('detailbook') }}" class="main-content-popular-1">
                    <div class="main-popular-book-1"></div>
                    <div class="main-popular-text-1">
                        <h3>Dilan 1990 </h3>
                        <p>by Pidi Baiq</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                        <p>Kisah cinta penuh semangat antara Dilan dan Milea di era 90-an.
                        </p>
                    </div>
                </a>
            </div>

            {{-- Content 2 --}}
            <div class="popular-book-2">
                <a href="{{ route('detailbook') }}" class="main-content-popular-1">
                    <div class="main-popular-book-2"></div>
                    <div class="main-popular-text-2">
                        <h3>Pemodelan Perangkat Lunak</h3>
                        <p>by Dr. Ali M. Sadikin </p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                        <p>panduan lengkap untuk pemodelan perangkat lunak.
                        </p>
                    </div>
                </a>
            </div>

            {{-- Content 3 --}}
            <div class="popular-book-3">
                <div class="main-content-popular-3">
                    <div class="main-popular-book-3"></div>
                    <div class="main-popular-text-3">
                        <h3>Kuliah Jurusan Apa?</h3>
                        <p>by Brilianto K Jaya </p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                        <p>Arahan untuk dunia per-kuliahan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Section --}}

    {{-- For You --}}
    <div class="for-you">

        {{-- Header --}}
        <div class="for-you-header">
            <h2>For You</h2>
            <button class="button-popular">
                <a href="/dashboard/foryou">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
        </div>

        {{-- Content --}}
        <div class="for-you-content">

            {{-- Container 1 --}}
            <div class="for-you-container-1">

                {{-- Content 1 --}}
                <div class="main-content-for-you-1">
                    <div class="main-for-you-book-1"></div>
                    <div class="main-for-you-text-1">
                        <h3>Dilan 1990 </h3>
                        <p>by Pidi Baiq</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>

                {{-- Content 2 --}}
                <div class="main-content-for-you-2">
                    <div class="main-for-you-book-2"></div>
                    <div class="main-for-you-text-2">
                        <h3>Si Juki</h3>
                        <p>by Faza Meonk</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>

                {{-- Content 4 --}}
                <div class="main-content-for-you-3">
                    <div class="main-for-you-book-3"></div>
                    <div class="main-for-you-text-3">
                        <h3>Closer To Nowhere</h3>
                        <p>by Ellen Hopkins</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>
                {{-- Content 4 --}}
                <div class="main-content-for-you-4">
                    <div class="main-for-you-book-4"></div>
                    <div class="main-for-you-text-4">
                        <h3>Now I Know</h3>
                        <p>by Kamilia N</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>
            </div>


            {{-- Container 1 --}}
            <div class="for-you-container-1">

                {{-- Content 1 --}}
                <div class="main-content-for-you-5">
                    <div class="main-for-you-book-5"></div>
                    <div class="main-for-you-text-5">
                        <h3>Hooked</h3>
                        <p>by Emily McIntire</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>

                {{-- Content 2 --}}
                <div class="main-content-for-you-6">
                    <div class="main-for-you-book-6"></div>
                    <div class="main-for-you-text-6">
                        <h3>In Five Years</h3>
                        <p>by Rebecca Serle</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>

                {{-- Content 3 --}}
                <div class="main-content-for-you-7">
                    <div class="main-for-you-book-7"></div>
                    <div class="main-for-you-text-7">
                        <h3>Ubur Ubur Lembur</h3>
                        <p>by Raditya Dika</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>
                {{-- Content 4 --}}
                <div class="main-content-for-you-8">
                    <div class="main-for-you-book-8"></div>
                    <div class="main-for-you-text-8">
                        <h3>Bangku Kosong</h3>
                        <p>by Ruwi Meita</p>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recently --}}
    <div class="recently">

        {{-- Header --}}
        <div class="recently-header">
            <h2>Recently Borrowed</h2>
            </button>
        </div>

        {{-- Content --}}
        <div class="recently-content">

            {{-- Content 1 --}}
            <div class="recently-content-book-1">
                <div class="main-recently-book-1"></div>
                <div class="main-recently-book-2"></div>
                <div class="main-recently-book-3"></div>
                <div class="main-recently-book-4"></div>
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
