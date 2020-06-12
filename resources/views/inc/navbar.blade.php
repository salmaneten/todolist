
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <a class="navbar-brand" href="/todolist/public/">TodoList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="{{Request::is('/todolist/public/') ? 'nav-item active' : 'nav-item'}}">
          <a class="nav-link" href="/todolist/public/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="{{Request::is('/todolist/public/') ? 'nav-item active' : 'nav-item'}}">
          <a class="nav-link" href="todo/create">Create Todo</a>
        </li>
      </ul>
    </div>
  </nav>