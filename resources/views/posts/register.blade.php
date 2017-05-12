<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>devit: the front page of the internet</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300" rel="stylesheet" type="text/css">
</head>

<body>

<header class="header" >
    <div class="header__left">
        <a class="header__left__logo"href="">devit.com</a>
        <ul class="header__left__tabmenu ">
            <li class="header__left__tabmenu__item"><a href="">enviar</a></li>
        </ul>
    </div>
</header>

<main class="main__newpost" >

    <h3 class="main__title">enviar a reddit</h3>

    <form class="main__form" onsubmit="" action="{{ route('store-post') }}" method="post">
        {{ csrf_field() }}
        <div class="main__form__description">
            <p> Vas a enviar un enlace. La clave para conseguir votos es contenido interesante y un título descriptivo.</p>
        </div>

        <div class="main__form__url">
            <h3 class="main__form__title">url</h3>
            <input name="url" type="url" class="main__form__imput" value="" required="">
        </div>

        <div class="main__form__image">
            <h3 class="main__form__title ">imagen</h3>
            <div class="main__form__image__box">
                <div class="main__form__image__drop">Arrastra aqui la imagen o</div>
                <label class="main__form__image__label" for="image">
                    Selecciona un archivo
                    <input class="main__form__image__imagen" id="image" name="imagen" type="file">
                </label>

            </div>
        </div>
        </div>

        <div class="main__form__posttitle">
            <h3 class="main__form__title ">título</h3>
            <textarea name="title" rows="2" class="main__form__imput" required=""></textarea>
        </div>

        <div class="main__form__tag">
            <h3 class="main__form__title ">escoge un tag</h3>
            <input class="main__form__imput" name="tag" type="text" autocomplete="off" required="">
            <div class="main__form__tag__suggested">
                <h3 class="main__form__tag__suggested__title">tus tags suscritos</h3>
                <ul class="main__form__tag__suggested__list">
                    <li><a href="#" class="tag__suggestion">Art</a> </li>
                    <li><a href="#" class="tag__suggestion">AskReddit</a> </li>
                    <li><a href="#" class="tag__suggestion">askscience</a> </li>
                    <li><a href="#" class="tag__suggestion">aww</a> </li>
                    <li><a href="#" class="tag__suggestion">books</a> </li>
                    <li><a href="#" class="tag__suggestion">creepy</a> </li>
                    <li><a href="#" class="tag__suggestion">dataisbeautiful</a> </li>
                    <li><a href="#" class="tag__suggestion">DIY</a> </li>
                    <li><a href="#" class="tag__suggestion">Documentaries</a> </li>
                    <li><a href="#" class="tag__suggestion">EarthPorn</a> </li>
                    <li><a href="#" class="tag__suggestion">explainlikeimfive</a> </li>
                    <li><a href="#" class="tag__suggestion">food</a> </li>
                    <li><a href="#" class="tag__suggestion">funny</a> </li>
                    <li><a href="#" class="tag__suggestion">futbol</a> </li>
                    <li><a href="#" class="tag__suggestion">Futurology</a> </li>
                    <li><a href="#" class="tag__suggestion">gadgets</a> </li>
                    <li><a href="#" class="tag__suggestion">gaming</a> </li>
                    <li><a href="#" class="tag__suggestion">GetMotivated</a> </li>
                    <li><a href="#" class="tag__suggestion">gifs</a> </li>
                    <li><a href="#" class="tag__suggestion">history</a> </li>
                    <li><a href="#" class="tag__suggestion">IAmA</a> </li>
                    <li><a href="#" class="tag__suggestion">InternetIsBeautiful</a> </li>
                    <li><a href="#" class="tag__suggestion">Jokes</a> </li>
                    <li><a href="#" class="tag__suggestion">LifeProTips</a> </li>
                    <li><a href="#" class="tag__suggestion">listentothis</a> </li>
                    <li><a href="#" class="tag__suggestion">mildlyinteresting</a> </li>
                    <li><a href="#" class="tag__suggestion">movies</a> </li>
                    <li><a href="#" class="tag__suggestion">Music</a> </li>
                    <li><a href="#" class="tag__suggestion">news</a> </li>
                    <li><a href="#" class="tag__suggestion">nosleep</a> </li>
                    <li><a href="#" class="tag__suggestion">nottheonion</a> </li>
                    <li><a href="#" class="tag__suggestion">OldSchoolCool</a> </li>
                    <li><a href="#" class="tag__suggestion">personalfinance</a> </li>
                    <li><a href="#" class="tag__suggestion">PERU</a> </li>
                    <li><a href="#" class="tag__suggestion">philosophy</a> </li>
                    <li><a href="#" class="tag__suggestion">photoshopbattles</a> </li>
                    <li><a href="#" class="tag__suggestion">pics</a> </li>
                    <li><a href="#" class="tag__suggestion">science</a> </li>
                    <li><a href="#" class="tag__suggestion">Showerthoughts</a> </li>
                    <li><a href="#" class="tag__suggestion">space</a> </li>
                    <li><a href="#" class="tag__suggestion">sports</a> </li>
                    <li><a href="#" class="tag__suggestion">television</a> </li>
                    <li><a href="#" class="tag__suggestion">tifu</a> </li>
                    <li><a href="#" class="tag__suggestion">todayilearned</a> </li>
                    <li><a href="#" class="tag__suggestion">TwoXChromosomes</a> </li>
                    <li><a href="#" class="tag__suggestion">UpliftingNews</a> </li>
                    <li><a href="#" class="tag__suggestion">videos</a> </li>
                    <li><a href="#" class="tag__suggestion">worldnews</a> </li>
                    <li><a href="#" class="tag__suggestion" >WritingPrompts</a> </li>
                </ul>
            </div>
        </div>

        <div class="main__form__submit">
            <button class="btn" name="submit" value="form" type="submit">Enviar</button>
        </div>

    </form>

</main>
</body>
</html>
