<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Book</title>

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

    a {
        text-decoration: none;
        align-items: center;
        display: flex;
        cursor: pointer;
    }

    body {
        min-height: 100vh;
        background-color: var(--color-body);
    }

    /* Header */

    .header {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        height: 110px;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.250), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .header-nav {
        display: flex;
        justify-content: space-between;
        width: 100px;
        gap: 10px;
        margin-right: 60px;
    }

    .header-nav i {
        display: flex;
        align-items: center;
        font-size: 40px;
        cursor: pointer;
    }

    .header-nav img {
        width: 70px;
        border-radius: 10px;
        cursor: pointer;
    }

    .header-title {
        color: var(--color-default);
        font-size: 25px;
        font-weight: 500;
        display: flex;
        gap: 10px;
    }

    .header-title i {
        font-size: 30px;
        display: flex;
        align-items: center;
        text-align: center;
        color: var(--color-default);
    }

    .header-title h4 {
        text-decoration: none;
        color: var(--color-default);
        display: flex;
        text-align: center;
    }

    /* For You */
    .for-you {
        position: relative;
        top: 0;
        transition: all .5s ease;
        z-index: 2;
        display: flex;
        justify-content: space-around !important;
        flex-direction: column;
        height: 670px;
        width: 100%;
        padding: 50px;
    }

    .for-you-content {
        padding: 20px;
        height:  1500px;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        margin: 30px;
    }

    .for-you-content i {
        color: gold;
    }

    .for-you-container-1 {
        display: flex;
        justify-content: space-between;
        margin: 30px;
    }

    .for-you-container-2 {
        display: flex;
        justify-content: space-between;
        margin: 30px;
    }

    .for-you-header {
        display: flex;
        justify-content: center;
        text-align: center;
        height: max-content;
        width: 100%;
    }

    .main-content-for-you-1 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-2 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-3 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-4 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-5 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-6 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-7 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-content-for-you-8 {
        width: 400px;
        height: 300px;
        gap: 20px;
        display: flex;
    }

    .main-for-you-book-1 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/F1.jpg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-2 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/N1.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-3 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/N2.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-4 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/N3.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-5 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/N4.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-6 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/N5.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-7 {
        width: 200px;
        height: 280px;
        border-radius: 5px;
        margin-bottom: 130px;
        background-image: url('/images/F6.jpeg');
        background-size: cover;
        display: flex;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .main-for-you-book-8 {
        width: 200px;
        height: 280px;
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
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
</style>

<body>


    {{-- Header --}}
    <header class="header">
        <div class="header-title">
            <a href="{{ route('dashboard') }}"><i class='bx bx-book-open icon'></i></a>
            <a href="{{ route('dashboard') }}">
                <h4>Starlearn</h4>
            </a>

        </div>
        <div class="header-nav">
            <i class='bx bx-bell'></i>
            <img src="{{ asset('images/Asta.jpeg') }}" alt="">
            <i class='bx bx-chevron-down'></i>
        </div>
    </header>

    {{-- For You --}}
    <div class="for-you">

        {{-- Header --}}
        <div class="for-you-header">
            <h1>For You</h1>
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
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 2 --}}
                <div class="main-content-for-you-2">
                    <div class="main-for-you-book-2"></div>
                    <div class="main-for-you-text-2">
                        <h3>Si Juki</h3>
                        <p>by Faza Meonk</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 3 --}}
                <div class="main-content-for-you-3">
                    <div class="main-for-you-book-3"></div>
                    <div class="main-for-you-text-3">
                        <h3>Closer To Nowhere</h3>
                        <p>by Ellen Hopkins</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 4 --}}
                <div class="main-content-for-you-4">
                    <div class="main-for-you-book-4"></div>
                    <div class="main-for-you-text-4">
                        <h3>Now I Know</h3>
                        <p>by Kamilia N</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Container 2 --}}
            <div class="for-you-container-2">

                {{-- Content 1 --}}
                <div class="main-content-for-you-5">
                    <div class="main-for-you-book-5"></div>
                    <div class="main-for-you-text-5">
                        <h3>Hooked</h3>
                        <p>by Emily McIntire</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 2 --}}
                <div class="main-content-for-you-6">
                    <div class="main-for-you-book-6"></div>
                    <div class="main-for-you-text-6">
                        <h3>In Five Years</h3>
                        <p>by Rebecca Serle</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 3 --}}
                <div class="main-content-for-you-7">
                    <div class="main-for-you-book-7"></div>
                    <div class="main-for-you-text-7">
                        <h3>Ubur Ubur Lembur</h3>
                        <p>by Raditya Dika</p>
                        <div class="star">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>

                {{-- Content 3 --}}
                <div class="main-content-for-you-8">
                    <div class="main-for-you-book-8"></div>
                    <div class="main-for-you-text-8">
                        <h3>Bangku Kosong</h3>
                        <p>by Meita Ruwita</p>
                        <div class="star">
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



    </div>
    </div>


</body>

</html>
