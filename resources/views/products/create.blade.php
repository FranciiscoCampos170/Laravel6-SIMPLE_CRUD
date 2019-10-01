@extends('layouts.app')

@section('content')
<br>
    <div uk-grid>
       <div  class="uk-width-3-4 uk-align-center" >
            <h1 class="uk-heading-divider"> Laravel 6 + UIkit CRUD
                 <a href="#" class="uk-button uk-button-primary uk-align-right">
                    <span uk-icon="plus">
                    </span>
                    Add Product
                    </a>
            </h1>
            <form action="{{ route('store') }}" method="post">
                @csrf
                <legend class="uk-legend">Product Name</legend>
                <div  class="uk-margin" >
                    <input type="text" class="uk-input" name="name">
                </div>
                <legend class="uk-legend">Price</legend>
                <div class="uk-margin">
                    <input type="number" class="uk-input" name="price">
                </div>
                <legend class="uk-legend">Category</legend>
                <div class="uk-margin">
                  <select  id="" class="uk-select" name="category">
                      <option value="1">1</option>
                      <option value="1">2</option>
                  </select>
                </div>
                <legend class="uk-legend">Description</legend>
                <div class="uk-margin">
                    <textarea  id="" cols="20" rows="10" class="uk-textarea" name="description"></textarea>
                </div>
                <button type="submit" class="uk-button uk-button-primary">Insert Product</button>
            </form>

        </div>
        </div>
@endsection
