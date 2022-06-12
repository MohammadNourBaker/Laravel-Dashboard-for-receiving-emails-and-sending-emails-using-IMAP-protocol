@props(['paginator'])

<!-- table -->
<div class="container main-table">
    <div class="row main-row ">
        <div class="col-3 col-md-2">
            <p class="fw-bold ">UID</p>
        </div>
        <div class="col-3 col-md-5">
            <p class="fw-bold ">Subject</p>
        </div>
        <div class="col-3 col-md-3">
            <p class="fw-bold ">{{ request()->is('inbox') ? 'From' : 'To' }}</p>
        </div>
        <div class="col-3 col-md-2">
            <p class="fw-bold ">Attachmens</p>
        </div>
    </div>
    @if ($paginator->count() > 0)
        @foreach ($paginator as $oMessage)
            <a href="{{ request()->url() }}/{{ $oMessage->getUid() }}/show" class="text-decoration-none link-to-meesage">
                <div class="h-50 row{{ $loop->odd ? ' bg-row' : '' }}">
                    <div
                        class="col-3 col-md-2 align-items-center d-flex py-1 justify-content-center justify-content-xl-start">
                        <p class="fw-light py-0 my-0 uid-number ">{{ $oMessage->getUid() }}</p>
                    </div>
                    <div class="col-3 col-md-5 align-items-center d-flex py-1">
                        <p class="fw-light py-0 my-0 ">
                            {{ $oMessage->getSubject() }}
                        </p>
                    </div>
                    <div class="col-3 col-md-3 align-items-center d-flex py-1">
                        <p class="fw-light py-0 my-0 ">
                            {{ request()->is('inbox') ? $oMessage->getFrom()[0]->mail : $oMessage->getTo()[0]->mail }}
                        </p>
                    </div>
                    <div
                        class="col-3 col-md-2 align-items-center d-flex py-1 justify-content-center justify-content-xl-start">
                        <p class="fw-light py-0 my-0 ">
                            {{ $oMessage->getAttachments()->count() > 0 ? 'yes' : 'no' }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
        {{ $paginator->links() }}
    @else
        <div class="row mt-4 bg-row">
            No messages found
        </div>
    @endif
</div>


