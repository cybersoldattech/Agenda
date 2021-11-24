<form id="event_delete" method="POST" action="{{ url('/event/delete') }}">
    @csrf
    <input type="hidden" name="eventId" id="eventId"/>
</form>
