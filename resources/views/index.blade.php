@extends('layouts.app') 
@section('content') 
{{-- grille de produit --}} 

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" >

        @forelse ($products as $product) 

            <x-card-product :product="$product"/> 

        @empty 
            i pa ni 
    @endforelse
 
    

 </div>    
@endsection


