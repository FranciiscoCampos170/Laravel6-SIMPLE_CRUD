@extends('layouts.app')

@section('content')

   <br>

   <div uk-grid>
       <div  class="uk-width-3-4 uk-align-center" >
            <h1 class="uk-heading-divider"> Apple Product Listing

                    {{-- <a href="#modal-example" class="uk-button uk-button-primary uk-align-right" uk-toggle>
                    <span uk-icon="plus">
                    </span>
                    Add Category --}}
                    </a>
                    <a href="#modal-example" class="uk-button uk-button-primary uk-align-right" uk-toggle>
                    <span uk-icon="plus">
                    </span>
                    Add Product
                    </a>
            </h1>
            @if (session('success'))
            <div class="uk-alert-success" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <table  class="uk-table uk-table-divider uk-table-striped" >
                <caption></caption>
                <thead>
                   <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th colspan="3" style="text-align:center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td>{{ $product->category_name }}</td>
                        <td>
                            <a href={{ route('edit', $product->id) }} class="uk-button uk-button-primary">
                                Edit
                            </a>


                        </td>
                        <td>
                             <a href="{{ route('show', $product->id) }}" class="uk-button uk-button-default">
                                Show
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('delete', $product->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="uk-button uk-button-danger">Delete Product</button>
                             </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
@endsection

<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
         <form action="{{ route('store') }}" method="post">
                @csrf
                <legend class="">Product Name</legend>
                <div  class="uk-margin" >
                    <input type="text" class="uk-input uk-form-small" name="name">
                </div>
                <legend class="">Price</legend>
                <div class="uk-margin">
                    <input type="number" class="uk-input uk-form-small" name="price">
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
                    <textarea  id="" cols="20" rows="10" class="uk-textarea uk-form-small" name="description"></textarea>
                </div>
                <button type="submit" class="uk-button uk-button-primary">Insert Product</button>
            </form>
    </div>
</div>






