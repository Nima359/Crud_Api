<div id="navbarPage" class="">
  <nav id = "navbar">
    <ul style = "width: 100%;">
      <li><a href = "/postApi">GET</a></li>
      <li><a href = "/postApi/2">SHOW</a></li>
      <li><a href = "/postApi/3/create">CREATE</a></li>
      <li><a href = "/postApi/2/edit">PUT</a></li>
      
      <li>
        <form method="post" action="/postApi/3">
          @csrf
          <input type="hidden" name="_method" value="DELETE" />
          <input type="submit" value="DELETE  " />
        </form>
      </li>
      
    </ul>
  </nav>
</div>