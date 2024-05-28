<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Baloo Tamma 2', cursive;
    }

    html {
        scroll-behavior: smooth;
    }

    .nav_style {
        background-color: #00a8ff;
    }

    .nav_style a {
        color: white;
    }

    .main_header {
        height: 500px;
        width: 100%;
    }

    .main_header h1 {
        font-size: 3rem;
    }

    .corona_iconAniam img {
        animation: coricoro 2s linear infinite;
    }

    @keyframes coricoro {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .leftside img {
        animation: heartbeat 3s linear infinite;
    }

    @keyframes heartbeat {
        0% {
            transform: scale(0.75);
        }

        20% {
            transform: scale(1);
        }

        40% {
            transform: scale(.75);
        }

        60% {
            transform: scale(1);
        }

        80% {
            transform: scale(.75);
        }

        100% {
            transform: scale(.75);
        }
    }

    .corona_update {
        margin: 0 0 30px 0;
    }

    .corona_update h1 {
        text-align: center;
    }

    .corona_update h3 {
        color: red;
        font-size: 2.3rem;
    }

    .sub_section {
        background-color: #fbfafd;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 30px;
        right: 40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #00a8ff;
        color: white;
        cursor: pointer;
        padding: 10px;
        border-radius: 10px;
    }

    #myBtn:hover {
        background-color: #606060;
    }

    .bgNav ul li a:hover {
        color: blue;
    }


</style>