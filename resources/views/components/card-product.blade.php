<div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl ">
    <div class="bg-gray-300 h-64 flex items-center justify-center " >
        <img  class="h-64 object-fit object-cover" src="{{$product->image}}" alt="" >
    </div>
        
   
        <div class="p-4">       
             <span class="text-sm text-orange-950 font-semibold">{{$product->category->name}}</span>
              <h3 class="text-lg font-bold text-gray-800">{{$product->name}}</h3>
              <p class="text-md font-semibold text-gray-800 mb-4">{{$product->description}}</p>

              <div class="flex items-center justify-between ">
                <span class="text-2xl text-gray-800 font-bold">{{$product->price}}$</span>
                <a  href="{{route('boutique.show',$product->id)}}" class="text-sm bg-red-600 text-white px-2 py-2 rounded-sm font-semibold transition-colors">Voir</a>
            </div>
        </div>
</div>






