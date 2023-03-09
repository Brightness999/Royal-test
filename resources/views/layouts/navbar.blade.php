<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="w3-bar w3-black">
      <a href="{{ url('dashboard') }}" class="w3-bar-item w3-button">Home</a>
      <a href="{{ url('authors') }}" class="w3-bar-item w3-button">Authors</a>
      <a href="{{ url('view_add_author') }}" class="w3-bar-item w3-button">Add Authors</a>
      <a href="{{ url('view_add_book') }}" class="w3-bar-item w3-button">Add Books</a>
      <a href="{{ url('profile') }}" class="w3-bar-item w3-button">Profile</a>
      <a href="{{ url('logout') }}" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</nav>