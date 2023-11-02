@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"  src="{{asset('images/no_image.jpg')}}" alt="" />
        
        <div>
            <h3 class="text-2xl">
                <a href="/list/{{$listing['id']}}">{{$listing['title']}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing['company']}}</div>
            <ul class="flex">
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">No silliness</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Very Serious</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Negotiable salary</a>
                </li>
                <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">10 hours per week </a>
                </li>
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing['location']}}
            </div>
        </div>
    </div>
</x-card>