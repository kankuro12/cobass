<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            @php
                $visibleFacilities = collect($facility)
                    ->filter(fn ($facilityItem) => filled(trim($facilityItem->title ?? '')))
                    ->values();
                $visibleFacilityCount = max($visibleFacilities->count(), 1);
            @endphp

            @foreach ($visibleFacilities as $facilities)
                <div class="facility-item col-12 col-sm-6 mb-4" style="--facility-count: {{ $visibleFacilityCount }};">
                    <div class="single-choose-us choose-bg-green h-100" style="margin: 10px;">
                        <div class="choose-img">
                            @if (!empty($facilities->icon))
                                <img class="animated" src="{{ asset($facilities->icon) }}" alt="{{ $facilities->title }}" loading="lazy">
                            @endif
                        </div>
                        <div class="choose-content">
                            <h3>{{ $facilities->title }}</h3>
                            <p>{{ $facilities->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    @media (min-width: 992px) {
        .facility-item {
            flex: 0 0 calc(100% / var(--facility-count, 1));
            max-width: calc(100% / var(--facility-count, 1));
        }
    }
</style>

