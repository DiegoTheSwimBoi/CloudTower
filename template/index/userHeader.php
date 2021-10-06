<header class="navMenu">
<div class="navMenu-logo">
<a href="/"><img src="/img/logo/logo.png" draggable="false">
<p class="logoP">CLOUDTOWER</p></a>
</div>

<div class="navMenu-panel">
<div><a href="/auth/">Выйти</a></div>
<div><a href="<?=$dataAuth->isAuthor($user)?"/author/workpage/":"/user/"?>">Вернуться</a></div>
</div>

<div class="navMenu-panel">
<label class="switch">
  <input type="checkbox" id="check">
  <span class="slider round"></span>
</label>
</div>
</header>