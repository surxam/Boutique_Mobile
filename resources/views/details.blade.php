<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="resources/js/app.js"></script>
    <title>Product Details - Boutique Mobile</title>
</head>
<body class="bg-white">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        
        {{-- Left Column - Product Images --}}
        <div class="space-y-4">
            {{-- Main Image --}}
            <div class="bg-gray-100 rounded-2xl p-12 flex items-center justify-center aspect-square">
                <img id="mainImage" 
                     src="{{ $product->image ?? 'https://via.placeholder.com/500' }}" 
                     alt="Product Image" 
                     class="w-full h-full object-contain">
            </div>
            
            {{-- Testimonial --}}
            <div class="text-center space-y-2">
                <div class="flex justify-center gap-1">
                    <svg class="w-5 h-5 text-green-500 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-green-500 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-green-500 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-green-500 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                    <svg class="w-5 h-5 text-green-500 fill-current" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                    </svg>
                </div>
                <p class="text-sm text-gray-600 italic">"Un son propre, une bonne réduction de bruit, et j'ai gardé 200€ en poche."</p>
                <p class="text-xs text-gray-500 font-medium">Léa M.</p>
            </div>
            
            {{-- Thumbnail Gallery --}}
            <div class="flex gap-4 overflow-x-auto pb-2">
                <button class="thumbnail-btn flex-shrink-0 w-20 h-20 bg-gray-100 rounded-lg overflow-hidden border-2 border-gray-300 hover:border-gray-500 transition">
                    <img src="{{ $product->image }}" alt="Thumbnail 1" class="w-full h-full object-cover">
                </button>
                <button class="thumbnail-btn flex-shrink-0 w-20 h-20 bg-gray-100 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-500 transition">
                    <img src="{{ $product->image }}" alt="Thumbnail 2" class="w-full h-full object-cover">
                </button>
                <button class="thumbnail-btn flex-shrink-0 w-20 h-20 bg-gray-100 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-500 transition">
                    <img src="{{ $product->image }}" alt="Thumbnail 3" class="w-full h-full object-cover">
                </button>
                <button class="thumbnail-btn flex-shrink-0 w-20 h-20 bg-gray-100 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-500 transition">
                    <img src="{{ $product->image }}" alt="Thumbnail 4" class="w-full h-full object-cover">
                </button>
                <button class="thumbnail-btn flex-shrink-0 w-20 h-20 bg-gray-100 rounded-lg overflow-hidden border-2 border-transparent hover:border-gray-500 transition">
                    <img src="{{ $product->image }}" alt="Thumbnail 5" class="w-full h-full object-cover">
                </button>
            </div>
        </div>
        
        {{-- Right Column - Product Details --}}
        <div class="space-y-6">
            {{-- Product Title --}}
            <div>
                <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                <div class="flex items-center gap-2">
                    <div class="flex gap-0.5">
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    </div>
                    <span class="text-sm text-gray-600">4.7</span>
                    <a href="#" class="text-sm text-blue-600 underline">3548 Avis vérifiés</a>
                </div>
            </div>
            
            {{-- Product Description --}}
            <div class="space-y-2">
                <p class="text-lg font-semibold text-gray-900">{{ $product->description }}</p>
                <p class="text-gray-600">Sans compromis. Sans surprise. Juste l'essentiel.</p>
            </div>
            
            {{-- Delivery Info --}}
            <div class="text-sm text-gray-700">
                <span class="font-semibold">Livraison gratuite avec suivi</span> - estimée entre le 26/10 et le 28/10
            </div>
            
            {{-- Features --}}
            <div class="space-y-3">
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="text-gray-700">Compatible iOS et Android</span>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="text-gray-700">Réduction de bruit active (ANC)</span>
                </div>
                <div class="flex items-start gap-3">
                    <div class="w-5 h-5 rounded-full bg-blue-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <span class="text-gray-700">Jusqu'à 24h d'autonomie avec le boîtier</span>
                </div>
            </div>
            
            {{-- Stock Status --}}
            <div class="flex items-center gap-2">
                <div class="w-3 h-3 rounded-full bg-red-500 border-2 border-red-200"></div>
                <span class="text-sm font-medium text-gray-700">Plus que 6 en Stock</span>
            </div>
            
            {{-- Add to Cart Button --}}
            <button class="w-full bg-gray-900 hover:bg-gray-800 text-white font-semibold py-4 px-6 rounded-lg transition duration-200 flex items-center justify-center gap-2">
                <span>Ajouter Au Panier</span>
                <span class="text-lg">— {{ $product->price}} €</span>
            </button>
            
            {{-- Guarantees --}}
            <div class="flex items-center justify-center gap-6 text-sm text-gray-600 pt-2">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Garantie 2 ans</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    <span>Garantie satisfaction 30 j</span>
                </div>
            </div>
            
            {{-- Promotional Banner --}}
            <div class="border-2 border-blue-500 rounded-xl p-6 text-center space-y-3">
                <p class="text-2xl font-bold text-blue-600">500 € CACHÉS DANS 5 COMMANDES !</p>
                <div id="countdown" class="text-4xl font-bold text-blue-600">
                    23:25:22
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript for countdown timer --}}
<script>
    // Countdown Timer
    function updateCountdown() {
        const countdownElement = document.getElementById('countdown');
        if (!countdownElement) return;
        
        // Set target time (24 hours from now)
        const now = new Date();
        const target = new Date(now.getTime() + (23 * 60 * 60 * 1000) + (25 * 60 * 1000) + (22 * 1000));
        
        function update() {
            const now = new Date();
            const diff = target - now;
            
            if (diff <= 0) {
                countdownElement.textContent = '00:00:00';
                return;
            }
            
            const hours = Math.floor(diff / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            countdownElement.textContent = 
                `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;
        }
        
        update();
        setInterval(update, 1000);
    }
    
    // Initialize countdown when page loads
    document.addEventListener('DOMContentLoaded', updateCountdown);
    
    // Thumbnail gallery functionality
    document.addEventListener('DOMContentLoaded', function() {
        const thumbnails = document.querySelectorAll('.thumbnail-btn');
        const mainImage = document.getElementById('mainImage');
        
        thumbnails.forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                // Remove active border from all thumbnails
                thumbnails.forEach(t => t.classList.remove('border-gray-500'));
                thumbnails.forEach(t => t.classList.add('border-transparent'));
                
                // Add active border to clicked thumbnail
                this.classList.remove('border-transparent');
                this.classList.add('border-gray-500');
                
                // Update main image
                const img = this.querySelector('img');
                if (img && mainImage) {
                    mainImage.src = img.src;
                }
            });
        });
        
        // Set first thumbnail as active by default
        if (thumbnails.length > 0) {
            thumbnails[0].classList.remove('border-transparent');
            thumbnails[0].classList.add('border-gray-500');
        }
    });
</script>

</body>
</html>