<div class="th-block-categories__list">
    @foreach ($categories as $category)
    <div class="th-block-categories__item">
        <div class="icon-bx-wraper left">

            <div class="icon-bx-sm">
                @if (isset($category->image))
                    <!-- Display dynamic category image -->
                    <img src="{{ asset('storage/public/' . $category->image) }}" alt="{{ $category->category_name }}" class="img-thumbnail" width="150">
                @else
                    <!-- Fallback image if no category image is available -->
                    <img src="{{ asset('frontend/images/car-metal-bearings-500x500-1-300x300.webp') }}" alt="Default Image" class="img-thumbnail" width="150">
                @endif
                {{-- <img src="{{ asset('frontend/images/car-metal-bearings-500x500-1-300x300.webp') }}"> --}}
            </div>
            <div class="icon-content">
                <a href="{{ route('part_listing', $category->id) }}"><h4 class="parts-title">{{ $category->category_name }}</h4></a>
                <ul class="th-category-card__children">
                    <!-- Show first 5 parts -->
                    @foreach ($category->parts->slice(0, 5) as $part)
                    <li>
                        <a href="javascript:;">
                            {{ $part->part_name }}
                        </a>
                    </li>
                    @endforeach

                    <!-- Hidden parts -->
                    @if ($category->parts->count() > 5)
                    @foreach ($category->parts->slice(5) as $part)
                    <li class="hiddenPart" style="display: none;">
                        <a href="javascript:;">
                            {{ $part->part_name }}
                        </a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <div>
                    <!-- Show All Button -->
                    @if ($category->parts->count() > 5)
                    <a href="javascript:;" class="parts-show-all-btn">Show All</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
