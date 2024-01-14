<div>
   <!-- resources/views/components/Carousel/carousel.blade.php -->
<!-- resources/views/components/Carousel/carousel.blade.php -->

<div style="width: 100%; overflow: hidden;">
    <div id="carouselExampleIndicators" style="width: 100%; display: flex; transition: transform 0.5s ease;">
        <!-- Placeholder content for slides with online images -->
        @for ($i = 1; $i <= 3; $i++)
            <div style="width: 100%; flex: 0 0 auto;">
                <img src="https://picsum.photos/800/400?random={{ $i }}" style="width: 100%;" alt="Slide {{ $i }}">
            </div>
        @endfor
        <!-- Add more slides as needed -->
    </div>
</div>

    </div>
</div>

</div>