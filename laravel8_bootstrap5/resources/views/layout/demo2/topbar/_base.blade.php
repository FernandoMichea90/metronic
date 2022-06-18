@php
    $toolbarButtonMarginClass = "ms-1 ms-lg-3";
    $toolbarButtonHeightClass = "w-30px h-30px w-md-40px h-md-40px";
    $toolbarUserAvatarHeightClass = "symbol-30px symbol-md-40px";
    $toolbarButtonIconSizeClass = "svg-icon-1";
@endphp

<!--begin::Toolbar wrapper-->
<div class="topbar d-flex align-items-stretch flex-shrink-0">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch {{ $toolbarButtonMarginClass }}">
        {{ theme()->getView('partials/search/_base') }}
    </div>
    <!--end::Search-->

    <!--begin::Activities-->
    <div class="d-flex align-items-center {{ $toolbarButtonMarginClass }}">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-active-light-primary {{ $toolbarButtonHeightClass }}" id="kt_activities_toggle">
            {!! theme()->getSvgIcon("icons/duotone/Media/Equalizer.svg", $toolbarButtonIconSizeClass) !!}
        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->

    <!--begin::Quick links-->
    <div class="d-flex align-items-center {{ $toolbarButtonMarginClass }}">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary {{ $toolbarButtonHeightClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
            {!! theme()->getSvgIcon("icons/duotone/Layout/Layout-4-blocks.svg", $toolbarButtonIconSizeClass) !!}
        </div>

    {{ theme()->getView('partials/topbar/_quick-links-menu') }}
    <!--end::Menu wrapper-->
    </div>
    <!--end::Quick links-->

    <!--begin::Chat-->
    <div class="d-flex align-items-center {{ $toolbarButtonMarginClass }}">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary position-relative {{ $toolbarButtonHeightClass }}" id="kt_drawer_chat_toggle">
            {!! theme()->getSvgIcon("icons/duotone/Communication/Group-chat.svg", $toolbarButtonIconSizeClass) !!}

            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->

    <!--begin::Notifications-->
    <div class="d-flex align-items-center {{ $toolbarButtonMarginClass }}">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary position-relative {{ $toolbarButtonHeightClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
            {!! theme()->getSvgIcon("icons/duotone/Code/Compiling.svg", $toolbarButtonIconSizeClass) !!}
        </div>
    {{ theme()->getView('partials/topbar/_notifications-menu') }}
    <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->

    <!--begin::User-->
    <div class="d-flex align-items-center me-n3 {{ $toolbarButtonMarginClass }}" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-active-light-primary {{ $toolbarButtonHeightClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
            <img class="h-25px w-25px rounded" src="{{ auth()->user()->avatar_url }}" alt="avatar"/>
        </div>
    {{ theme()->getView('partials/topbar/_user-menu') }}
    <!--end::Menu wrapper-->
    </div>
    <!--end::User -->

    <!--begin::Aside mobile toggle-->
    @if (theme()->getOption('layout', 'aside/display') === true)
        <div class="d-flex align-items-center d-lg-none ms-4" title="Show header menu">
            <div class="btn btn-icon btn-active-light-primary {{ $toolbarButtonHeightClass }}" id="kt_aside_mobile_toggle">
                {!! theme()->getSvgIcon("icons/duotone/Text/Toggle-Right.svg", "svg-icon-1") !!}
            </div>
        </div>
@endif
<!--end::Aside mobile toggle-->
</div>
<!--end::Toolbar wrapper-->
