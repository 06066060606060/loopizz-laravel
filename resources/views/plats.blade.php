 @extends('layouts.app')

 @section('main')
     <section class="pt-8">

         <div class="p-8 md:p-12 lg:px-12 lg:py-12">
             <div class="max-w-lg mx-auto text-center lg:max-w-xl">
                 <h2 class="text-3xl font-bold text-gray-900 md:text-5xl">
                     Recherche
                 </h2>

             </div>

             <div class="max-w-2xl mx-auto my-8">
                 <div action=" " class="sm:flex sm:gap-4">
                     <div class="sm:flex-1">
                         <input id="searchbar" type="text" placeholder="SEARCH" name="q" value=""
                             class="w-full p-3 text-gray-700 transition bg-gray-100 border-gray-200 rounded-md shadow-sm focus:border-white focus:outline-none focus:ring focus:ring-gray-400" />
                     </div>
                 </div>
             </div>

             <section class="text-gray-600 body-font">
                 <div class="container px-5 py-24 mx-auto">
                     <div class="flex flex-wrap -m-4">
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/720x400" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The Catalyzer</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center ">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/721x401" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">The 400 Blows</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                         
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/722x402" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center ">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                         
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/722x402" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center ">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                         
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/722x402" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center ">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                         
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="p-4 md:w-1/3">
                             <div class="h-full overflow-hidden border-2 border-gray-200 rounded-lg border-opacity-60">
                                 <img class="object-cover object-center w-full lg:h-48 md:h-36"
                                     src="https://dummyimage.com/722x402" alt="blog">
                                 <div class="p-6">
                                     <h2 class="mb-1 text-xs font-medium tracking-widest text-gray-400 title-font">CATEGORY
                                     </h2>
                                     <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">Shooting Stars</h1>
                                     <p class="mb-3 leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings
                                         jianbing microdosing tousled waistcoat.</p>
                                     <div class="flex flex-wrap items-center ">
                                         <a class="inline-flex items-center text-indigo-500 md:mb-2 lg:mb-0">Plus d'infos</a>
                                         
                                        
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>


         </div>
     </section>
 @endsection
