<!--=============== NAV ===============-->
<div class="nav show-menu" id="nav">
    <nav class="nav__content">
        <div class="nav__toggle d-flex align-items-center justify-content-center" id="nav-toggle">
            <i class="bi bi-arrow-left-circle d-none d-md-flex"></i>
        </div>
        <a href="/" class="nav__logo">
            <i class="bi bi-envelope-check-fill"></i>
            <span class="nav__logo-name">Mailer</span>
        </a>

        <div class="nav__list">
            <a href="/create" class="nav__link active-link ">
                <button class="bg-transparent border-0 w-100 text-start {{ request()->is('create') ? 'active' : '' }}"
                    id="v-pills-create-tab" data-bs-toggle="pill" data-bs-target="#v-pills-create" type="button"
                    role="tab" aria-controls="v-pills-create" aria-selected="true">
                    <i class="bi bi-plus"></i>
                    <span class="nav__name">Create</span>
                </button>
            </a>

            <a href="/inbox" class="nav__link">
                <button class="bg-transparent border-0 w-100 text-start {{ request()->is('inbox') ? 'active' : '' }}"
                    id="v-pills-inbox-tab" data-bs-toggle="pill" data-bs-target="#v-pills-inbox" type="button"
                    role="tab" aria-controls="v-pills-inbox" aria-selected="false">
                    <i class="bi bi-inbox-fill"></i>
                    <span class="nav__name">inbox</span>
                </button>
            </a>

            <a href="/sent" class="nav__link">
                <button class="bg-transparent border-0 w-100 text-start {{ request()->is('sent') ? 'active' : '' }}"
                    id="v-pills-Outbox-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Outbox" type="button"
                    role="tab" aria-controls="v-pills-Outbox" aria-selected="false">
                    <i class="bi bi-send"></i>
                    <span class="nav__name">Sent</span>
                </button>
            </a>
        </div>

    </nav>
</div>
