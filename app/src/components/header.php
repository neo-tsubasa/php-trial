<style>
.header__wrapper {
  display: flex;
  align-items: center;

  height: 64px;
  width: 100vw;
  background-color: #505050;
  padding: 4px 12px;
}

.header__app-title {
}

.header__spacer {
  flex-grow: 1;
}

.header__signin-button {
  cursor: pointer;
}
</style>

<header class="header__wrapper">
  <h1 class="header__app-title">Example Blog</h1>
  <span class="header__spacer"></span>
  <a href="/login.php">
    <button class="header__signin-button" name="signin" type="button">Signin</button>
  </a>
</header>