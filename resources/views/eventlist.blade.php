@if($events->isNotEmpty())
    <table id="displayevent" data-order='[[ 3, "desc" ]]' class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="97%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Start date</th>
                <th>End date</th>
                <th>Creation Date</th>
                <th>Creator</th>                        
                <th>Action</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($events as $event)
            <tr>          
                <td>{{ $event->name }}</td>
                <td>{{ $event->start_date }}</td>
                <td>{{ $event->end_date }}</td>
                <td>{{ $event->name }}</td>
                <td>{{ $event->description }}</td>
                <td>
                    <button class="btn btn-primary">Show description </button>
                </td>
                <td>
                    <button class="btn btn-warning">Modify </button>
                    <button class="btn btn-danger"> Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>   
@else
<div class="py-16">
    <div class="text-center">
      <p class="text-sm font-semibold text-indigo-600 uppercase tracking-wide"></p>
      <h1 class="mt-2 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">No event for the moment 😕
        .</h1>
      <p class="mt-2 text-base text-gray-500">You can create a new event.</p>
    </div>
@endif

<script  language="Javascript">
	setTimeout(function(){ $('#displayevent').DataTable(); }, 300);

</script>