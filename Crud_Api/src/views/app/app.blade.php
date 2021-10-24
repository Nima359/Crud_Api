@extends("CrudApi::masters.master-app")

@section("header")
  @includeIf ("CrudApi::layouts.header")
@endsection

@section("title")
  <div id = "title">
    <h3>Show Post Page</h3>
  </div>
@endsection

@section("slider")
  @includeIf ("CrudApi::layouts.slider")
@endsection

@section("navbar")
  @includeIf ("CrudApi::layouts.navbar")
@endsection

@section("sidebar")
  @includeIf ("CrudApi::layouts.sidebar")
@endsection

@section("content")
  @includeIf ("CrudApi::layouts.content")
@endsection

@section("footer")
  @includeIf ("CrudApi::layouts.footer")
@endsection
