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


    body {
        min-height: 100vh;
        width: 100;
        background-color: var(--color-body);
    }

    a {
        text-decoration: none;
        align-items: center;
        display: flex;
        cursor: pointer;
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


    /* Section */
    .main-section {
        display: flex;
        flex-direction: row;
    }

    .section {
        width: 60%;
        display: flex;
        justify-content: start;
        padding: 150px;
        gap: 60px;
    }

    .content-book-1 {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        height: max-content;
    }

    .content-book-2 {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        height: max-content;
        margin-top: 150px;
    }

    .content-book-3 {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        height: max-content;
        margin-top: 100px;
    }

    .content-book-1 img {
        width: 200px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.250), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .content-book-2 img {
        width: 200px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.250), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .content-book-3 img {
        width: 200px;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.250), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
        cursor: pointer;
    }

    .top-1 {
        width: 70px;
        height: 70px;
        border: solid;
        border-color: rgb(174, 148, 0);
        background-color: gold;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .top-2 {
        width: 100px;
        height: 70px;
        border: solid;
        border-color: rgb(112, 112, 112);
        background-color: silver;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .top-3 {
        width: 70px;
        height: 70px;
        border: solid;
        border-color: rgb(156, 78, 22);
        background-color: chocolate;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .top-4 {
        width: 70px;
        height: 70px;
        border: solid;
        border-color: rgb(0, 0, 0);
        background-color: white;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .desc-book {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        height: 200px;
    }

    .desc-book h1 {
        font-size: 30px;
    }

    .desc-book h4 {
        font-size: 20px;
    }

    .star {
        display: flex;
        text-align: center;
        align-items: center;
        gap: 15px;
        color: gold;
        font-size: 20px;
    }

    .rating {
        color: black;
    }

    .genre {
        display: flex;
        gap: 20px;
    }

    .genre-1,
    .genre-2,
    .genre-3,
    .genre-4 {
        border: solid;
        border-color: black;
        border-radius: 30px;
        width: 100px;
        text-align: center;
    }

    /* For You */
    .for-you {
        width: 55%;
        display: flex;
        flex-direction: column;
        padding: 150px;
    }

    .for-content {
        display: flex;
        justify-content: space-around;
        flex-direction: column;
        height: 100%;
    }

    .main-for-you {
        height: 100%;
        padding: 50px;

    }

    .main-for-header {
        display: flex;
        justify-content: center;
    }

    .main-for-content {
        display: flex;
        height: 100%;
    }

    .for-1 {
        display: flex;
        gap: 30px;
    }

    .for-1 img {
        width: 150px;
        height: 230px;
        object-fit: cover;
        border-radius: 10px;
    }

    .for-text-1 {
        gap: 10px;
        display: flex;
        flex-direction: column;

    }

    .for-star {
        color: gold;
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

    {{-- Section --}}
    <div class="main-section">
        <section class="section">

            {{-- Section Content  --}}
            <div class="section-content">

                {{-- Top Popular --}}
                <div class="top-popular-book">

                    {{-- Content 1 --}}
                    <div class="content-book-1">
                        <h1 class="top-1">1</h1>
                        <img src="{{ asset('images/F1.jpg') }}" alt="">
                        <div class="desc-book">
                            <h1>Dilan 1990</h1>
                            <div class="star">
                                <div class="rating">
                                    <h3>9.9/10</h3>
                                </div>
                                <div class="main-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                            </div>
                            <h4>2.7k Review</h4>
                            <div class="genre">
                                <div class="genre-1">Romance</div>
                                <div class="genre-2">School</div>
                                <div class="genre-3">Action</div>
                            </div>
                        </div>
                    </div>

                    {{-- Content 2 --}}
                    <div class="content-book-2">
                        <h1 class="top-2">2</h1>
                        <img src="{{ asset('images/F2.jpg') }}" alt="">
                        <div class="desc-book">
                            <h1>Pemodelan Perangkat Lunak</h1>
                            <div class="star">
                                <div class="rating">
                                    <h3>9.0/10</h3>
                                </div>
                                <div class="main-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <h4>1.5k Review</h4>
                            <div class="genre">
                                <div class="genre-1">School</div>
                                <div class="genre-2">Text Book</div>
                            </div>
                        </div>
                    </div>

                    {{-- Content 3 --}}
                    <div class="content-book-3">
                        <h1 class="top-3">3</h1>
                        <img src="{{ asset('images/F3.jpg') }}" alt="">
                        <div class="desc-book">
                            <h1>Kuliah Jurusan Apa?</h1>
                            <div class="star">
                                <div class="rating">
                                    <h3>8.5/10</h3>
                                </div>
                                <div class="main-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <h4>1.5k Review</h4>
                            <div class="genre">
                                <div class="genre-1">School</div>
                                <div class="genre-2">Text Book</div>
                            </div>
                        </div>
                    </div>

                    {{-- Content 4 --}}
                    <div class="content-book-3">
                        <h1 class="top-4">4</h1>
                        <img src="{{ asset('images/N1.jpeg') }}" alt="">
                        <div class="desc-book">
                            <h1>Si Juki : The Movie</h1>
                            <div class="star">
                                <div class="rating">
                                    <h3>8/10</h3>
                                </div>
                                <div class="main-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <h4>1.5k Review</h4>
                            <div class="genre">
                                <div class="genre-1">Comedy</div>
                                <div class="genre-2">Adventure</div>
                                <div class="genre-2">Fantasy</div>
                            </div>
                        </div>
                    </div>

                    {{-- Content 5 --}}
                    <div class="content-book-3">
                        <h1 class="top-4">5</h1>
                        <img src="{{ asset('images/N4.jpeg') }}" alt="">
                        <div class="desc-book">
                            <h1>Hooked</h1>
                            <div class="star">
                                <div class="rating">
                                    <h3>7.5/10</h3>
                                </div>
                                <div class="main-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                            </div>
                            <h4>1.5k Review</h4>
                            <div class="genre">
                                <div class="genre-1">Romance</div>
                                <div class="genre-2">Thriller</div>
                                <div class="genre-2">Mystery</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- For You --}}
        <div class="for-you">
            <div class="main-for-you">

                <div class="main-for-header">
                    <h1>Read More Books</h1>
                </div>

                {{-- Content --}}
                <div class="main-for-content">
                    <div class="for-content">

                        {{-- Content 1 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/N2.jpeg') }}" alt="">
                            <div class="for-text-1">
                                <h1>Close To Nowhere</h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>

                        {{-- Content 2 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/N3.jpeg') }}" alt="">
                            <div class="for-text-1">
                                <h1>Now I Know </h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>

                        {{-- Content 3 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/N5.jpeg') }}" alt="">
                            <div class="for-text-1">
                                <h1>In Five Years</h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>

                        {{-- Content 4 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/N6.jpeg') }}" alt="">
                            <div class="for-text-1">
                                <h1>A Man Called Ove</h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>

                        {{-- Content 5 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/F4.jpg') }}" alt="">
                            <div class="for-text-1">
                                <h1>Bangku Kosong</h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>

                        {{-- Content 5 --}}
                        <div class="for-1">
                            <img src="{{ asset('images/F3.jpg') }}" alt="">
                            <div class="for-text-1">
                                <h1>Ubur Ubur Lembur</h1>
                                <div class="for-star">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <p>
                                    "Close to Nowhere Books": Where every page holds a journey, every shelf whispers a
                                    story, and every reader finds a sanctuary in the world of words.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



</body>

</html>
