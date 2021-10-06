<header class="navMenu">
<div class="navMenu-logo">
<a href="/"><img src="/img/logo/logo.png" draggable="false">
<p class="logoP">CLOUDTOWER</p></a>
</div>

<div class="navMenu-panel">
<div><a href="/auth/"><?=$user?"Выйти":"Войти"?></a></div>
<div style="display:<?=$user?"block":"none"?>;"><a href="<?=$dataAuth->isAuthor($user)?"/author/workpage/":"/user/"?>">Личный кабинет</a></div>
<div style="display:<?=$user?"none":"block"?>;"><a href="/regin/">Зарегистрироваться</a></div>
</div>

<div class="navMenu-panel">
<label class="switch">
  <input type="checkbox" id="check">
  <span class="slider round"></span>
</label>
</div>
</header>