<style>
.nav__wrapper {
  padding: 12px 16px;
}
.nav__wrapper > *:not(:last-child) {
  margin-bottom: 16px;
}
.nav__nav-list > li:hover {
  background-color: #242424;
}
.nav__list-item {
  color: #eeeeee;
}
.nav__list-item--selected {
  background-color: #202020;
}
.nav__nav-list > *:not(:last-child) {
  margin-bottom: 4px;
}
</style>

<nav class="nav__wrapper">
  <button class="">New Post</button>
  <ul class="nav__nav-list">
    
    <li><a href="./" class="nav__list-item">Trends</a></li>
    <li><a href="./" class="nav__list-item">Tags</a></li>
    <li><a href="./" class="nav__list-item">Favorites</a></li>
    <li><a href="./new-item.php" class="nav__list-item">New Item</a></li>
  </ul>
</nav>