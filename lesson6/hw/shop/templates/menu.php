<?php
function checkLink($link) {
    global $activeLink;
    if (($link === '' && $activeLink === '') || ($link === 'index.php' && $activeLink === 'index.php')) {
        return '#';
    }
    if ($link === $activeLink) {
        return '#';
    } else {
        return $link;
    }
}

function getActiveLink($link) {
    global $activeLink;
    if (($link === '' && $activeLink === '') || ($link === 'index.php' && $activeLink === 'index.php')) {
        return 'active';
    }
    if ($link === $activeLink) {
        return 'active';
    } else {
        return '';
    }
}

echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
  <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarTogglerDemo01' aria-controls='navbarTogglerDemo01' aria-expanded='false' aria-label='Toggle navigation'>
    <span class='navbar-toggler-icon'></span>
  </button>

  <div class='collapse navbar-collapse' id='navbarTogglerDemo01'>
    <ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
      <li class='nav-item " . getActiveLink('index.php') . "'>
        <a class='nav-link' href='" . checkLink('index.php') . "'>Каталог<span class='sr-only'>(current)</span></a>
      </li>
      <li class='nav-item " . getActiveLink('response.php') . "'>
        <a class='nav-link' href='" . checkLink('response.php') . "'>Отзывы</a>
      </li>
      
      
      
      <li class='nav-item link__adminPanel " . getActiveLink('../admin') . "'>
        <a class='nav-link' href='" . checkLink('../admin') . "'>Админ Панель</a>
      </li>
    </ul>
  </div>
</nav>
";