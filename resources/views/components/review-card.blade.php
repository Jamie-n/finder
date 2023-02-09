<div class="car-card transition rounded p-1 h-100">
    <a href="{{$link ?? ''}}" class="text-decoration-none">
        <div class="border-0 bg-transparent py-3">
            <img class="w-100 rounded" src="{{$image}}" alt="{{$alt ?? ''}}">
            <p class="d-inline-block mb-2 mt-3 text-decoration-none text-light fs-5">{{$reviewCar}}</p>
            <a href="{{$categoryLink ?? ''}}" class="text-decoration-none fw-light mb-2 d-block"> <small class="text-warning opacity-transition opacity">{{$category}}</small></a>
            @if($tagline)
                <p class="text-light fs-6">{{$tagline}}</p>
            @endif
        </div>
    </a>
</div>
