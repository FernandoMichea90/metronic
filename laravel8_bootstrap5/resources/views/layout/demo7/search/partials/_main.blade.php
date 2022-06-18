@php
    // List items
    $items = array(
        array(
            'icon' => 'icons/duotone/Interface/Monitor.svg',
            'title' => 'BoomApp by Keenthemes',
            'number' => '#45789'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Scatter-Up.svg',
            'title' => '"Kept API Project Meeting',
            'number' => '#84050'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Doughnut.svg',
            'title' => '"KPI Monitoring App Launch',
            'number' => '#84250'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Stacked-Area-Down.svg',
            'title' => 'Project Reference FAQ',
            'number' => '#67945'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Envelope.svg',
            'title' => '"FitPro App Development',
            'number' => '#84250'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Bank.svg',
            'title' => 'Shopix Mobile App',
            'number' => '#45690'
        ),
        array(
            'icon' => 'icons/duotone/Interface/Line-03-Up.svg',
            'title' => '"Landing UI Design" Launch',
            'number' => '#24005'
        ),
    );
@endphp
<!--begin::Recently viewed-->
<div class="mb-4" data-kt-search-element="main">
    <!--begin::Heading-->
    <div class="d-flex flex-stack fw-bold mb-5">
        <!--begin::Label-->
        <span class="text-muted fs-6 me-2">Recently Searched</span>
        <!--end::Label-->

        <!--begin::Toolbar-->
        <div class="d-flex" data-kt-search-element="toolbar">
            <!--begin::Preferences toggle-->
            <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="tooltip" title="Show search preferences">
                {!! theme()->getSvgIcon("icons/duotone/Code/Settings4.svg", "svg-icon-1") !!}
            </div>
            <!--end::Preferences toggle-->

            <!--begin::Advanced search toggle-->
            <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                {!! theme()->getSvgIcon("icons/duotone/Navigation/Angle-down.svg", "svg-icon-2") !!}
            </div>
            <!--end::Advanced search toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Heading-->

    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-325px">
        @foreach($items as $item)
            <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">
                        {!! theme()->getSvgIcon($item['icon'], "svg-icon-2 svg-icon-primary") !!}
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">{{ $item['title'] }}</a>
                    <span class="fs-7 text-muted fw-bold">{{ $item['number'] }}</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
        @endforeach
    </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
