<div class="page-sidebar">
    <div class="logo-box">
        <a href="#" class="logo-text">{{ env('APP_NAME', '') }}</a>
        <a href="#" id="sidebar-close"><i class="material-icons">close</i></a>
        <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a>
    </div>
    <div class="page-sidebar-inner slimscroll">
        <ul class="accordion-menu" id="accordion-menu">

            <li>
                <a href="{{ route('admin.dashboard.index') }}">
                    <i class="material-icons">dashboard</i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.setting.gallery.type.index') }}">
                    <i class="material-icons">collections</i>
                    Gallery
                </a>
            </li>
            <li>
                <a href="{{ route('admin.achievements.index') }}">
                    <i class="material-icons">emoji_events</i>
                    Achievements
                </a>
            </li>
            <li>
                <a href="{{ route('admin.course.index') }}">
                    <i class="material-icons">subject</i>
                    Course
                </a>
            </li>
            <li>
                <a href="{{ route('admin.news.index') }}">
                    <i class="material-icons">article</i>
                    News
                </a>
            </li>
            <li>
                <a href="{{ route('admin.events.index') }}">
                    <i class="material-icons">event</i>
                    Events
                </a>
            </li>
            <li>
                <a href="{{ route('admin.teacher.index') }}">
                    <i class="material-icons">wc</i>
                    Teacher
                </a>
            </li>
            <li>
                <a href="{{ route('admin.testimonial.index') }}">
                    <i class="material-icons">comment</i>
                    Testimonial
                </a>
            </li>
            <!-- Add the Notice section here -->
            <li>
                <a href="{{ route('admin.notice.index') }}">
                    <i class="material-icons">announcement</i>
                    Notices
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">settings</i>
                    Front Setting
                    <i class="material-icons has-sub-menu">add</i>
                </a>
                <ul class="sub-menu">
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.meta') }}">Sharing</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.homepage') }}">HomePage</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.product.index') }}">Products</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.contact') }}">Contact</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.faq.index') }}">Faqs</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.index', ['type' => 'top']) }}">Header</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.index', ['type' => 'mid']) }}">Mid</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.index', ['type' => 'about']) }}">About</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.index', ['type' => 'contact']) }}">Contact</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.slider.index') }}">Sliders</a>
                    </li>
                    <li class="sub-item">
                        <a href="{{ route('admin.setting.popup.index') }}">Popups</a>
                    </li>
                </ul>
            </li>
        </ul>
        <br>
        <br>
    </div>
</div>
