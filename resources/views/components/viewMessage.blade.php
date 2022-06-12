




@props(['message'])

<h1 class="">

    {!! $message->getSubject().'<br />' !!}
</h1>
<div class="bg-white rounded w-75 h-25 m-3 p-3">
    {!! $message->getHTMLBody() !!}
</div>
