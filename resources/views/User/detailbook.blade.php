<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Book</title>

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

    /* Section */
    .section {
        width: 100%;
        height: 80%;
        margin-bottom: 150px;
    }

    .button-section {
        display: flex;
        gap: 30px;
    }

    .section-content {
        display: flex;
        justify-content: center;
        gap: 50px;
        margin-top: 50px;
    }

    .header-field {
        font-size: 20px;
    }

    .field-section {
        width: 700px;
        gap: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .author-field {
        display: flex;
        text-align: center;
        align-items: center;
        gap: 10px;
        font-size: 20px;
    }

    .rating-field {
        display: flex;
        gap: 40px;
        font-size: 20px;
    }

    .book-section>img {
        height: 550px;
        width: 400px;
        border-radius: 10px;
        box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.526), 0 10px 24px 0 rgba(0, 0, 0, 0.422);
    }

    .image-author img {
        width: 50px;
        height: 50px;
        border-radius: 30px;
    }

    .about-book {
        display: flex;
        gap: 30px;
    }

    .star i {
        color: gold;
    }

    .genre {
        display: flex;
        text-align: center;
        align-items: center;
        gap: 40px;
    }

    .genre-1,
    .genre-2,
    .genre-3,
    .genre-4 {
        height: 40px;
        width: 100px;
        border-radius: 20px;
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        background-color: var(--color-second);
        color: white;
    }

    .bold {
        font-weight: 600;
    }

    .borrowed {
        height: 50px;
        width: 170px;
        border-radius: 15px;
        background-color: var(--color-second);
        font-size: 20px;
        transition: var(--transition);
        border: none;
        gap: 10px;
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
        color: white;
    }

    .borrowed:hover {
        background-color: var(--color-default);
        color: black;
    }

    .borrowed i {
        font-size: 30px;
        text-align: center;
        align-items: center;
    }

    .save {
        height: 50px;
        width: 70px;
        border-radius: 15px;
        background-color: var(--color-second);
        font-size: 20px;
        transition: var(--transition);
        border: none;
        gap: 10px;
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
        color: white;
    }

    .save:hover {
        background-color: var(--color-default);
        color: black;
    }

    .save i {
        font-size: 30px;
        text-align: center;
        align-items: center;
    }

    /* Write */

    .write-review {
        width: 65%;
        display: block;
        margin: auto;
        padding: 10px;
    }

    .img-profile img {
        border-radius: 50%
    }

    .main-content {
        display: flex;
        gap: 30px;
        width: 100%;
        margin-top: 50px;
    }

    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .container {
        display: block;
        position: relative;
        cursor: pointer;
        user-select: none;
    }

    .container svg {
        position: relative;
        top: 0;
        left: 0;
        height: 50px;
        width: 50px;
        transition: all 0.3s;
        fill: #666;
    }

    .container svg:hover {
        transform: scale(1.1);
    }

    .container input:checked~svg {
        fill: #ffeb49;
    }

    .star {
        display: flex;
        gap: 10px;
    }

    .form-control {
        width: 90%;
        height: 50px;
        padding: 5px 10px;
        border: none;
        border-radius: 10px;
        outline: none
    }

    .form-control:focus {
        border: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(79, 163, 233, 0.25);
    }

    .content {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .btn button {
        width: 150px;
        height: 45px;
        border: none;
        border-radius: 5px;
        background-color: skyblue;
        color: #fff;
        cursor: pointer;
        margin-right: 110px;
    }

    .partials {
        display: flex;
        justify-content: space-between;
        align-content: center;
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
    <section class="section">

        {{-- Section --}}
        <div class="section-content">
            <div class="book-section"><img src="{{ asset('images/F1.jpg') }}" alt=""></div>
            <div class="field-section">
                <div class="header-field">
                    <h1>Dilan 1990</h1>
                </div>
                <div class="author-field">
                    <div class="image-author"><img src="{{ asset('images/pidibaiq.png') }}" alt=""></div>
                    <h4>Pidi Baiq</h4>
                </div>
                <div class="rating-field">
                    <div class="star">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                        2.7K
                    </div>
                    <i class='bx bx-share-alt'></i>
                </div>
                <div class="synopsis">
                    <p>"Dilan 1990" adalah sebuah film Indonesia yang menggambarkan kisah cinta yang menggetarkan antara
                        Dilan, seorang siswa SMA yang penuh semangat, dan Milea, seorang siswi pindahan yang cerdas.
                        Kisah
                        mereka terjalin di tahun 1990, di tengah ketegangan antara geng motor di sebuah kota kecil di
                        Indonesia.</p>
                </div>
                <div class="about-book">
                    <div class="bold">
                        Publisher <p>
                            First Publish
                        <p>
                            Page
                        <p>
                            Age
                    </div>
                    <div class="unbold">
                        Pidi Baiq <p>
                            25 Januari 2018.
                        <p>
                            400 - 500 page
                        <p>
                            16+
                    </div>
                </div>
                <div class="genre">
                    <h4>Genre</h4>
                    <div class="genre-1">Romance</div>
                    <div class="genre-2">School</div>
                    <div class="genre-3">Action</div>
                    <div class="genre-4">Horor</div>
                </div>
                <div class="button-section">
                    <div class="button-borrowed">
                        <button class="borrowed">
                            <i class='bx bx-book-reader'></i>
                            Borrow</button>
                    </div>
                    <div class="button-borrowed">
                        <button class="borrowed">
                            <i class='bx bx-book-reader'></i>
                            Read</button>
                    </div>
                    <div class="button-save">
                        <button class="save">
                            <i class='bx bx-bookmarks'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Write --}}
    <div class="write-review">
        <h1 class="title">Write Review</h1>

        <div class="main-content">
            <div class="img-profile">
                <img src="{{ asset('images/Asta.jpeg') }}" width="75">
            </div>
            <div class="content">

                <input type="text" class="form-control" placeholder="type here">

                <div class="partials">
                    <div class="star">
                        <label class="container">
                            <input type="checkbox">
                            <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </label>

                        <label class="container">
                            <input type="checkbox">
                            <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </label>

                        <label class="container">
                            <input type="checkbox">
                            <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </label>

                        <label class="container">
                            <input type="checkbox">
                            <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </label>

                        <label class="container">
                            <input type="checkbox">
                            <svg height="24px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="24px"
                                xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <path
                                            d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </label>

                    </div>

                    <div class="btn">
                        <button>submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
