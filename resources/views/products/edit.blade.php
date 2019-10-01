@extends('layouts.app')

@section('content')
<br>
    <div class="uk-align-center uk-width-1-2">
        <form action="{{ route('update', $product->id) }}">
                @csrf
                @method('PUT')
                <legend class="">Product Name</legend>
                <div  class="uk-margin" >
                    <input type="text" class="uk-input uk-form-small" name="name" value="{{ $product->product_name }}">
                </div>
                <legend clkanga djiass="">Price</legend>
                <div class="uk-margin">
                    <input type="number" class="uk-input uk-form-small" name="price" value="{{ $product->product_price }}">
                </div>
                <legend class="">Category</legend>
                <div class="uk-margin">
                    <select  id="" class="uk-select uk-form-small" name="category">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <legend class="">Description</legend>
                <div class="uk-margin">
                    <textarea  id="" cols="20" rows="10" class="uk-textarea uk-form-small" name="description">
                        {{ $product->product_description }}
                    </textarea>
                </div>
                <button type="submit" class="uk-button uk-button-primary">Update Product</button>
            </form>
        </div>
            @endsection
